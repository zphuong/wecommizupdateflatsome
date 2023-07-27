<?php
/**
 * The template for displaying the footer.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

global $flatsome_opt;
?>

</main>

<footer id="footer" class="footer-wrapper">

	<?php do_action('flatsome_footer'); ?>

</footer>

</div>

<?php wp_footer(); ?>

<?php if ( is_front_page() || is_home() ) { ?>
<script type='text/javascript' src='/wp-content/themes/abweb-vn/js/typing.js' id='typing-script-js'></script>
<script type="text/javascript">
       jQuery(document).ready(function() {
            var typed = new Typed('#sologan-trailer', {
                strings: ["Dễ Dàng Nâng Cấp Thêm Tính Năng", "Tư Vấn Đưa Ra Giải Pháp Tối Ưu Nhất", "Sử Dụng Ít Plugin , Web Tải Nhanh"],
                loop: true,
                typeSpeed: 30,
                cursorChar: '',
                startDelay: 1000
            });
        });
    </script>
	
<script type='text/javascript' src='/wp-content/themes/abweb-vn/js/partical.js' id='partical-script-js'></script>
<script type='text/javascript' src='/wp-content/themes/abweb-vn/js/partical-script.js' id='partical-script-js'></script>
<script>
 jQuery('.append--canvas .banner-inner.fill' ).append( '<div id="particles-js"></div>' );
</script>
<?php } ?>
</body>
</html>
