<?php
/**
 * Template name: Xem trước
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

get_header();
global $product;
$id=$_GET['mau'];
$product_info = wc_get_product($id)
 ?>
<style>
#header,#footer{display:none;visibility:hidden}strong{color:#000}.abw-price--wrap i{margin-right:8px;font-size:18px;vertical-align:middle}#wrapper,#main{background-color:#fff;position:relative;height:100vh;background:#fff url(/wp-content/uploads/2022/11/bg-preview2.png) 0 0 repeat;overflow:hidden}#abw_header{background:#fff;height:65px;border-bottom:1px solid #ddd;box-shadow:1px 1px 10px rgb(0 0 0 / 15%);position:absolute;left:0;right:0;top:0;display:flex;align-items:center;padding:0 10px}#abw_header a:hover{color:#08c;border-color:#08c}#abw_header .abw-logo--wrap a{color:#1e5f8d;display:flex;align-items:center;text-decoration:none;font-size:25px;margin-right:20px;font-weight:500}#abw_header .abw-logo--wrap img{height:55px}embed, iframe, object { max-width: 100%; }#preview{position:absolute;left:0;right:0;top:65px;bottom:0;transition:all .2s}.abw-mode--view a{display:inline-block;padding:5px;margin:0 5px;border-bottom:2px solid transparent;color:#333;line-height:1.4;transition:all .2s}.abw-mode--view a.active{color:#08c;border-color:#08c}.abw-mode--view a i{font-size:18px}.abw-navigate--wrap{display:flex;align-items:center;margin-left:auto}.abw-navigate--wrap a:not(.abw-buy--btn){display:flex;align-items:center;justify-content:center;width:40px;height:40px;line-height:40px;transition:.3s;border:solid 1px #dfdfdf;border-radius:5px;color:#828282;text-align:center;margin-left:8px}.abw-buy--btn{text-transform:uppercase;font-size:14px;font-weight:700;color:#fff!important;background:#08c;width:auto;height:38px;line-height:38px;padding:0 15px;margin-left:8px;transition:.3s;border-radius:5px;-webkit-box-shadow:0 2px 0 #1e6da7;box-shadow:0 2px 0 #1e6da7}.mode-view[data-view="mobile"] iframe{width:100%;height:calc(780px - 80px)}.mode-view[data-view="laptop"] iframe{width:100%;height:100%}.mode-view[data-view="mobile"] iframe::-webkit-scrollbar{display:none;width:0}.mode-view[data-view="mobile"]{position:relative;margin:90px auto;width:360px;height:780px;border-radius:40px;box-shadow:0 0 0 11px #1f1f1f,0 0 0 13px #191919,0 0 0 20px #111;overflow:hidden}.mode-view[data-view="mobile"]:before,.mode-view[data-view="mobile"]:after{content:'';position:absolute;left:50%;transform:translateX(-50%)}.mode-view[data-view="mobile"]:after{bottom:7px;width:140px;height:5px;background-color:#f2f2f2;border-radius:10px}.mode-view[data-view="mobile"]:before{top:0;width:56%;height:30px;background-color:#1f1f1f;border-radius:0 0 40px 40px}.mode-view[data-view="mobile"]>i,.mode-view[data-view="mobile"]>b,.mode-view[data-view="mobile"]>s,.mode-view[data-view="mobile"]>span{position:absolute;display:block;color:transparent}.mode-view[data-view="laptop"]>i,.mode-view[data-view="laptop"]>b,.mode-view[data-view="laptop"]>s,.mode-view[data-view="laptop"]>span,.mode-view[data-view="laptop"] .abw-bar--adr{display:none}.mode-view[data-view="mobile"]>i{top:0;left:50%;transform:translate(-50%,6px);height:8px;width:15%;background-color:#101010;border-radius:8px;box-shadow:inset 0 -3px 3px 0 rgba(256,256,256,.2)}.mode-view[data-view="mobile"]>b{left:10%;top:0;transform:translate(180px,5px);width:12px;height:12px;background-color:#101010;border-radius:12px;box-shadow:inset 0 -3px 2px 0 rgba(256,256,256,.2)}.mode-view[data-view="tablet"]{position:relative;margin:30px auto;width:798px;height:calc(100% - 100px);border-radius:0;box-shadow:0 0 0 11px #1f1f1f,0 0 0 13px #191919,0 0 0 20px #111;overflow:hidden}.mode-view[data-view="tablet"]>i{top:0;left:50%;transform:translate(-50%,6px);height:8px;width:15%;background-color:#101010;border-radius:8px;box-shadow:inset 0 -3px 3px 0 rgba(256,256,256,.2)}.mode-view[data-view="tablet"]>b{left:10%;top:0;transform:translate(180px,5px);width:12px;height:12px;background-color:#101010;border-radius:12px;box-shadow:inset 0 -3px 2px 0 rgba(256,256,256,.2)}.mode-view[data-view="tablet"] iframe::-webkit-scrollbar{display:none;width:0}.mode-view[data-view="tablet"]:before,.mode-view[data-view="tablet"]:after{content:'';position:absolute;left:50%;transform:translateX(-50%)}.mode-view[data-view="tablet"]:after{bottom:7px;width:140px;height:5px;background-color:#f2f2f2;border-radius:10px}.mode-view[data-view="tablet"]:before{top:0;width:56%;height:30px;background-color:#1f1f1f;border-radius:0 0 40px 40px}.mode-view[data-view="tablet"]>i,.mode-view[data-view="tablet"]>b,.mode-view[data-view="tablet"]>s,.mode-view[data-view="tablet"]>span{position:absolute;display:block;color:transparent}.mode-view[data-view="tablet"] iframe{width:100%;height:calc(100% - 80px)}.abw-bar--adr{padding:40px 10px 5px 10px;background:rgba(255,255,255,.97)}.abw-bar--adr span{text-align:center;display:block;background:#f1f1f1;padding:6px 10px;border-radius:9px;font-size:15px;color:#000}.abw-bar--adr span i{font-size:12px;margin-right:8px}.abw-info--preview{margin-left:35px;margin-right:35px;display:flex;justify-content:space-between;flex:1 auto}.abw-chat--now,.abw-faqs{width:auto!important;padding:0 15px}.abw-chat--now i,.abw-faqs i,.abw-note--show a i{vertical-align:middle;margin-right:8px;margin-top:5px}.abw-price--wrap .amount{color:red}.abw-note--show{margin-left:15px}.abw-note--show a{display:flex;align-items:center;height:40px;line-height:40px;padding:0 15px;color:#828282;border:1px solid #dfdfdf;border-radius:5px;transition:all 200ms ease-in-out}.hien_note{position:fixed;z-index:99;top:50%;left:50%;transform:translate(-50%,-50%);max-width:500px;width:90%;padding:20px;border-radius:10px;display:none}.hien_note.active{display:block}.hien_note p{margin:0;font-size:16px;text-align:justify}body.bg-black::before{background-color:rgba(0 0 0/.8);content:'';height:100%;left:0;position:fixed;top:0;width:100%;z-index:11}.abw-close--popup{position:absolute;top:-10px;right:-10px;width:30px;height:30px;line-height:30px;text-align:center;background:#fff;border-radius:99px;z-index:9;box-shadow:3px 3px 20px 0 rgb(0 0 0 / 30%);cursor:pointer}.demo_store{display:none!important}@media screen and (max-width:768px){.abw-mode--view,.abw-note--show,.abw-note--show,.abw-info--preview{display:none}.abw-navigate--wrap a:not(.abw-buy--btn){display:none}}
</style>
<?php do_action( 'flatsome_before_page' ); ?>

<div id="content" role="main" class="content-area">

<div class="hien_note lightbox-content">
<p>Một số tính năng sẽ không hoạt động tại đây vì hạn chế của thẻ iframe. eg: Add To Cart, Build PC, Wishlist, Compare... Vui lòng <a href="<?php echo get_field('link_demo',$id); ?>" target="_blank">Click vào đây</a> để xem giao diện web với đầy đủ tính năng và hoạt động tốt nhất! </p>
<span class="abw-close--popup"><i class="fad fa-times"></i></span>
</div>
<div id="abw_header">
<div class="abw-logo--wrap">
<?php echo bloginfo('name') ?>
</div>
<div class="abw-mode--view">
<a href="javascript:void(0)" class="abw-global--btn active" data-mode="laptop">
<i class="fal fa-desktop"></i>
</a>
<a href="javascript:void(0)" class="abw-global--btn" data-mode="tablet">
<i class="fal fa-tablet"></i>
</a>
<a href="javascript:void(0)" class="abw-global--btn" data-mode="mobile">
<i class="fal fa-mobile-android"></i>
</a>
</div>
<div class="abw-note--show">
<a href="javascript:void(0)"><i class="fal fa-exclamation"></i><span>Lưu ý</span></a>
</div>
<div class="abw-info--preview">
<div>Giao diện web: <strong> <?php echo $product_info->get_name();?>- Mã sản phẩm #<?php echo $product_info->get_sku(); ?></strong></div>
<div class="abw-price--wrap"><i class="fal fa-usd-circle"></i>Giá bán: <?php  if( $product_info->is_on_sale() ) { echo wc_price( wc_get_price_to_display( $product_info, array( 'price' => $product_info->get_sale_price() ) ) ); } else { echo wc_price( wc_get_price_to_display( $product_info, array( 'price' => $product_info->get_regular_price() ) ) );} ?></div>
</div>
<div class="abw-navigate--wrap">
<a href="<?php echo get_home_url(); ?>/cau-hoi-thuong-gap/" class="abw-faqs" target="_blank"><i class="fal fa-question"></i>FAQs</a>
<a href="https://www.facebook.com/messages/t/105387409056921" class="abw-chat--now" title="Chat Ngay" target="_blank"><i class="fal fa-comment-alt-dots"></i><span>Chat Ngay</span></a>
<a href="<?php echo get_home_url(); ?>" target="_top" title="Ẩn thanh công cụ"><i class="fal fa-external-link-alt"></i></a>
<a href="https://wecommiz.com/" title="Trở về trang chủ"><i class="fal fa-home-alt"></i></a>
<a href="<?php echo get_permalink($id); ?>" class="abw-buy--btn" title="Mua giao diện này"><span>Mua ngay</span></a>
</div>
</div>
<div id="preview" class="mode-view" data-view="laptop">
<i>Speaker</i>
<b>Camera</b>
<div class="abw-bar--adr">
<span><i class="fas fa-lock"></i><?php echo get_field('link_demo',$id); ?> </span>
</div>
<iframe src="<?php echo get_field('link_demo',$id); ?>" frameborder="0" id="abw-frame--demo"></iframe>
</div>


</div>

<?php do_action( 'flatsome_after_page' ); ?>
 <script>
jQuery(function() {
  jQuery('.abw-note--show').click(function() {
    jQuery('.hien_note').addClass("active"); 
	jQuery('body').addClass("lightbox"); 
	jQuery('body').addClass("bg-black"); 
  });
  jQuery('.abw-close--popup').click(function() {
    jQuery('.hien_note').removeClass("active"); 
	jQuery('body').removeClass("lightbox"); 
	jQuery('body').removeClass("bg-black"); 
  });
  
   jQuery('.abw-global--btn').click(function() {
    jQuery('.abw-global--btn').removeClass("active");
	jQuery('#preview').removeAttr('data-view');
	jQuery(this).addClass("active");
	$data_mode=jQuery(this).data('mode');
	jQuery('#preview').attr('data-view',$data_mode);
	
  }); 
});
</script>
<?php get_footer(); ?>
