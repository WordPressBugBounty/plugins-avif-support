<?php
namespace GPLSCore\GPLS_PLUGIN_AVFSTW;

defined( 'ABSPATH' ) || exit;

use GPLSCore\GPLS_PLUGIN_AVFSTW\Base;
use GPLSCore\GPLS_PLUGIN_AVFSTW\AvifSupport;
use function GPLSCore\GPLS_PLUGIN_AVFSTW\Pages\PagesBase\setup_pages;
use function GPLSCore\GPLS_PLUGIN_AVFSTW\AJAXs\Base\setup_ajaxs;


/**
 * Plugin Class for Activation - Deactivation - Uninstall.
 */
class Plugin extends Base {

	/**
	 * Main Class Load.
	 *
	 * @return void
	 */
	public static function load() {
		AvifSupport::init();
		setup_pages();
		setup_ajaxs();
		self::funnel();
	}

	/**
	 * Contextual upgrade prompts.
	 *
	 * Both offers are decided from the state of this site rather than from a
	 * usage counter. Someone who installs an AVIF plugin has told us they care
	 * about image weight, and that is true on the day they install it - waiting
	 * for them to upload twenty-five AVIF files would mean never speaking to
	 * almost anyone, because this plugin's whole job is to work silently.
	 *
	 * @return void
	 */
	private static function funnel() {
		if ( ! class_exists( '\GPLS_Funnel' ) ) {
			return;
		}

		\GPLS_Funnel::boot(
			array(
				'slug'    => 'avif-support',
				'name'    => 'AVIF Support',
				'screens' => array(
					'upload',      // Media Library list
					'media',       // Media grid
					'attachment',  // single attachment edit
					'media_page_gpls-avfstw-avif-support-settings', // our own settings page
				),
				'offers'  => array(
					array(
						'id'      => 'legacy_library',
						'product' => 'wp-image-converter',
						'when'    => function () {
							$legacy = \GPLS_Funnel::library_count( array( 'image/jpeg', 'image/png', 'image/gif' ) );

							// Below this the saving is not worth anyone's afternoon.
							return $legacy >= 20 ? array( 'legacy' => $legacy ) : false;
						},
						'stat'       => '{legacy}',
						'stat_label' => __( 'not AVIF', 'gpls-avif-support' ),
						'title'   => __( 'You have {legacy} images that are not AVIF yet', 'gpls-avif-support' ),
						'body'    => __( 'AVIF uploads work now, but the JPEGs, PNGs and GIFs already in your library are unchanged, and that is usually where most of the page weight sits. WP Image Converter converts an existing library in bulk - no quota, no third-party service, and the originals are kept.', 'gpls-avif-support' ),
						'cta'     => __( 'See WP Image Converter', 'gpls-avif-support' ),
					),
					array(
						'id'      => 'subsizes',
						'product' => 'image-sizes-controller',
						'when'    => function () {
							$sizes  = count( wp_get_registered_image_subsizes() );
							$images = \GPLS_Funnel::library_count(
								array( 'image/jpeg', 'image/png', 'image/gif', 'image/webp', 'image/avif' )
							);

							if ( $sizes < 8 || $images < 50 ) {
								return false;
							}

							return array(
								'sizes'  => $sizes,
								'images' => $images,
								'files'  => $sizes * $images,
							);
						},
						'stat'       => '{sizes}',
						'stat_label' => __( 'image sizes', 'gpls-avif-support' ),
						'title'   => __( 'WordPress is making {sizes} copies of every image you upload', 'gpls-avif-support' ),
						'body'    => __( 'Your theme and plugins register {sizes} image sizes, so your {images} images become roughly {files} files on disk. Most sites actually use three or four of them. Image Sizes Controller lets you switch off the rest and reclaim the space.', 'gpls-avif-support' ),
						'cta'     => __( 'See Image Sizes Controller', 'gpls-avif-support' ),
					),
				),
			)
		);
	}

	/**
	 * Plugin is activated.
	 *
	 * @return void
	 */
	public static function activated() {
		// Activation Custom Code here...
	}

	/**
	 * Plugin is Deactivated.
	 *
	 * @return void
	 */
	public static function deactivated() {
		// Deactivation Custom Code here...
	}

	/**
	 * Plugin is Uninstalled.
	 *
	 * @return void
	 */
	public static function uninstalled() {
		// Uninstall Custom Code here...
	}
}
