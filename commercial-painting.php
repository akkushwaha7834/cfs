<?php
/**
 * Template Name: Commercial Painting Page Template
 
 */
 


get_header();?>


<div class="commercial_page_banner">
	<h1 class="about_us_banner_heading">
		<?php echo CFS()->get('page_title');?>
	</h1>
</div>

<div class="get_quote_contact_page_redirect">
	<button id="myButton">
		Get Quote
	</button>
</div>

<div class="about_us_page_main_heading">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
				<h1 class="page_main_heading_main">
					<?php echo CFS()->get('page_main_heading_main');?>
				</h1>
				<h2 class="page_main_heading_sub">
					<?php echo CFS()->get('page_main_heading_sub'); ?>
				</h2>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
			<div class="row home_pgae_banner_form">
				<?php echo do_shortcode('[contact-form-7 id="41" title="Home Page Banner Get Quote"]'); ?>
			</div>
		</div>
	</div>
</div>

<div class="give_us_a_call_about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="give_us_a_call_heading">
                    <?php echo CFS()->get('give_us_a_call_heading');?>
                </h2>
                <div class="give_a_call">
                  <i class="fa fa-volume-control-phone give_us_call_icon" aria-hidden="true"></i>  <?php echo CFS()->get('give_us_a_call_mobile_number');?>
					<i class="fa fa-volume-control-phone give_us_call_icon" aria-hidden="true"></i>  <?php echo CFS()->get('give_us_a_call_mobile_number_2');?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about_us_content_section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 service_title_content">
				<h1>
					<?php echo CFS()->get('page_title');?>
				</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<?php echo CFS()->get('inners_page_services_content_para');?>				
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<img class="about_us_content_image_left" src="<?php echo CFS()->get('inners_page_services_content_image');?>">
			</div>
			<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 painters_sydney_section_paragraph_two">
                <p>
                    <?php echo CFS()->get('inners_page_services_content_para_full_width');?>
                </p>
            </div>
		</div>
	</div>
</div>


<div class="gallery_slider_inner_services_page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="items">
                    <?php $fields = CFS()->get('inner_page_gallery_slider_loop');
						foreach ($fields as $field) {
							echo '<div class="card">';
							echo '<div class="card-body">';
							echo '<div class="row">';
							echo '<div class="col-sm-12">';
							echo '<img src="'. $field['inner_page_gallery_slider_loop_single_image'] .'" alt="Gallery" />';
							echo '</div>';
							echo '</div>';
							echo '</div>';
							echo '</div>';
						}
					?>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="innerpage_content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php echo '<p class="innerpage_content_para">'.CFS()->get('inner_services_page_content_main').'</p>';?>
				<?php echo '<p class="innerpage_content_para">'.CFS()->get('inner_services_page_content_para').'</p>';?>
			</div>
		</div>
		<div class="row">
			<?php $fields = CFS()->get('inner_services_page_content_list_type_loop');
					foreach ($fields as $field) {
						echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">';
						echo  '<li class="innerpage_content_list_content">'.$field['inner_services_page_content_list_type'].'</li>';
						echo '</div>';
					}
				?>
		</div>
	</div>
</div>


<?php echo do_shortcode('[contentblock id=1]'); ?>
<?php get_footer(); ?>
<script type='text/javascript'>$(document).ready(function(){
$('.items').slick({
dots: true,
infinite: true,
speed: 800,
autoplay: true,
autoplaySpeed: 2000,
slidesToShow: 3,
slidesToScroll: 1,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 3,
slidesToScroll: 3,
infinite: true,
dots: true
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 2,
slidesToScroll: 2
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
}

]
});
});</script>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "/peacock/contact-us/";
    };
</script>