<?php
/**
 * Template Name: Front Page Template
 
 */
 

get_header(); ?>

<div class="home_page_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="home_page_banner_heading">
                    <?php echo CFS()->get('home_page_banner_heading');?>
                </h1>
            </div>  
        </div>
        <div class="row home_pgae_banner_form">
            <?php echo do_shortcode('[contact-form-7 id="41" title="Home Page Banner Get Quote"]'); ?>
        </div>
    </div>
</div>
<div class="get_quote_contact_page_redirect">
	<button id="myButton">
		Get Quote
	</button>
</div>
<div class="give_us_a_call">
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

<div class="painters_sydney_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-7 painters_sydney_left_section">
                <img src="<?php echo CFS()->get('painters_sydney_left_image');?>">
            </div>
            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 painters_sydney_heading_right">
                <div class="painters_sydney_right_heading">
                    <h1>
                        <?php echo CFS()->get('painters_sydney_heading');?>
                    </h1>
                    
                </div>
                <div class="painters_sydney_section_paragraph">
                
                  <?php echo CFS()->get('painters_sydney_para_right');?>
                
                </div>
            </div>
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 painters_sydney_section_paragraph_two">
                <p>
                    <?php echo CFS()->get('painters_sydney_para_full_width');?>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="portfolio_section">
	<div class="container-fluid">
		<div class="row portfolio_first_row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12">
						<h1 class="portfolio_main_heading">
							<?php echo CFS()->get('home_page_portfolio_heading');?>
						</h1>
						<h2 class="portfolio_page_link_heading">
							<?php echo CFS()->get('home_page_portfolio_link_portfolio_page');?>
						</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6 portfolio_row_two_left_image_one">
						<img src="<?php echo CFS()->get('home_page_portfolio_first_row_image_one');?>">
					</div>
					<div class="col-md-6 portfolio_row_two_left_image_two">
						<img src="<?php echo CFS()->get('home_page_portfolio_first_row_image_two');?>">
					</div>
				</div>
			</div>
			<div class="col-md-6 home_page_portfolio_first_row_right_image">
				<img src="<?php echo CFS()->get('home_page_portfolio_first_row_right_image');?>">
				
			</div>
		</div>
		<div class="row portfolio_section_row_three">
			<?php $fields = CFS()->get('portfolio_section_row_three_multi_image');
				foreach ($fields as $field) {                    
					echo'<div class="col-md-4 portfolio_section_row_three_multi_image_col">';
					
					echo'<img src="'. $field['portfolio_section_row_three_multi_image_one'] .'" alt="slider" />';
					echo'</div>';
			}?>
        </div>
	</div>
</div>




<?php echo do_shortcode('[contentblock id=1]'); ?>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "/peacock/contact-us/";
    };
</script>
<?php get_footer(); ?>
<script type='text/javascript'>$(document).ready(function(){
$('.items').slick({
dots: true,
infinite: true,
speed: 800,
autoplay: true,
autoplaySpeed: 2000,
slidesToShow: 4,
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