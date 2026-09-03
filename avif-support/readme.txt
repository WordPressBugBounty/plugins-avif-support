=== AVIF Uploader – Upload, Display and Fix AVIF Images ===
Tags: avif, image, wordpress avif, image optimization, avif subsizes
Tested up to: 7.1
Requires at least: 5.3.0
Requires PHP: 7.0.0
Stable Tag: 1.1.4
Version: 1.1.4
Contributors: grandplugins
Author: GrandPlugins
Author URI: https://grandplugins.com
Author email: services@grandplugins.com
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Upload AVIF images, display them correctly, and generate the sub-sizes WordPress leaves out.


== Description ==

WordPress has handled AVIF since 6.5, but plenty of sites still cannot upload one at all, or upload it and then find the thumbnails never generate and the image reports the wrong dimensions. This plugin fixes that.

It first tells you whether your server can process AVIF, then repairs the places WordPress gives up: the upload filter, the width and height metadata, sub-size generation, and the downscaled copy of large images.

It does not convert or compress anything. Turning an existing library of JPEGs into AVIF is a different job - see WP Image Converter below.

**Before you install:** AVIF handling depends on your server. If neither GD nor Imagick on your host is built with AVIF support, no plugin can add it. The Status screen tells you exactly where you stand, so check that first.

== Features ==

* Check whether your server can actually handle AVIF, before anything else.
* Allow AVIF images to be uploaded.
* Fix the wrong width and height WordPress records for AVIF files.
* Fix AVIF sub-size (thumbnail) generation.
* Fix the downscaled copy WordPress makes of large AVIF images.
* Choose which image library and quality setting to use.

For the detail on the WordPress issues this works around:

[How to upload AVIF images in WordPress](https://grandplugins.com/how-to-upload-avif-images-in-wordpress/?utm_source=wp)

== More Plugins for Working With Media ==

If you are handling images at any volume, these are the ones our AVIF users reach for most.

[WP Watermark Images](https://grandplugins.com/product/wp-images-watermark/?utm_source=free&utm_medium=readme&utm_content=avif-support&utm_term=wp-images-watermark) &mdash; watermark images in bulk, on upload, or per WooCommerce order.

[WP Image Converter & Optimizer](https://grandplugins.com/product/wp-image-converter/?utm_source=free&utm_medium=readme&utm_content=avif-support&utm_term=wp-image-converter) &mdash; convert a whole library between png, jpg, gif, webp and avif. No quota, no third-party service.

[WP PDF Password Protect](https://grandplugins.com/product/pdf-password-protect/?utm_source=free&utm_medium=readme&utm_content=avif-support&utm_term=pdf-password-protect) &mdash; password-protect the PDFs in your media library.

[WP Watermark PDF](https://grandplugins.com/product/wp-watermark-pdf/?utm_source=free&utm_medium=readme&utm_content=avif-support&utm_term=wp-watermark-pdf) &mdash; stamp PDFs the same way you stamp images.

[Image Sizes Controller](https://grandplugins.com/product/image-sizes-controller/?utm_source=free&utm_medium=readme&utm_content=avif-support&utm_term=image-sizes-controller) &mdash; see every image size your theme and plugins register, and switch off the ones you never use.

[WP GIF Editor](https://grandplugins.com/product/wp-gif-editor/?utm_source=free&utm_medium=readme&utm_content=avif-support&utm_term=wp-gif-editor) &mdash; resize, crop and optimise animated GIFs inside WordPress.

[WP Large Images Uploader](https://grandplugins.com/product/wp-large-images-uploader/?utm_source=free&utm_medium=readme&utm_content=avif-support&utm_term=wp-large-images-uploader) &mdash; upload very large images without hitting server limits.

[WP Image Magnifier and Lightbox](https://grandplugins.com/product/wp-image-zoom-on-hover/?utm_source=free&utm_medium=readme&utm_content=avif-support&utm_term=wp-image-zoom-on-hover) &mdash; zoom on hover and a lightbox, without a page builder.

== If You Run WooCommerce ==

[Coming Soon Products](https://grandplugins.com/product/woo-coming-soon-products/?utm_source=free&utm_medium=readme&utm_content=avif-support&utm_term=woo-coming-soon-products) &mdash; hide or tease WooCommerce products before they launch.

[Quick View and Buy Now](https://grandplugins.com/product/quick-view-and-buy-now-for-woocommerce/?utm_source=free&utm_medium=readme&utm_content=avif-support&utm_term=quick-view-and-buy-now-for-woocommerce) &mdash; a product preview and a one-click buy button.

[Paddle Checkout](https://grandplugins.com/product/woo-paddle-checkout/?utm_source=free&utm_medium=readme&utm_content=avif-support&utm_term=woo-paddle-checkout) &mdash; take payments through Paddle, with subscriptions.

[Browse everything](https://grandplugins.com/product-category/plugin/?utm_source=free&utm_medium=readme&utm_content=avif-support&utm_term=browse_all)

== Changelog ==

= 1.1.4 =
* Added: a note on the Media screens showing how many images in your library are not yet AVIF, with a way to convert them in bulk.
* Added: a note showing how many image sizes your theme and plugins register, and how many files that produces.
* Both read your own site, are dismissible, and stay quiet for a month after you dismiss one.
* Changed: plugin renamed to AVIF Uploader, matching its name on WordPress.org.
* Changed: rewrote the description and recommended plugins; removed a mention of SVG support that was never active.
* Tested up to WordPress 7.1.
