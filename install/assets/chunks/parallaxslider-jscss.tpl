/**
 * parallaxslider-jscss
 *
 * include js and css for parallaxslider multitv
 *
 * @category	chunk
 * @version 	2.0
 * @license 	http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal	@modx_category MultiTV add-ons
 * @internal    @installset base
 * @internal    @overwrite false
 */


<link rel="stylesheet" type="text/css" href="/assets/templates/common/js/parallaxslider/css/style2.css" />
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> -->
<script type="text/javascript" src="/assets/templates/common/js/parallaxslider/js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="/assets/templates/common/js/parallaxslider/js/jquery.cslider.js"></script>

		<script type="text/javascript">
			   (function($) {

				var $slider	= $('#da-slider');

				// initialize the slider
				$slider.cslider();

			 })(jQuery);
		</script>