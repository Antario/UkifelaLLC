

<?php
/*
Template Name: Services Template
*/
?>

<?php get_header(); ?>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

    <div class="bread-title-holder">
        <div class="bread-title-bg-image full-bg-breadimage-fixed"></div>
        <div class="container">
            <div class="row-fluid">
                <div class="container_inner clearfix">
                    <h1 class="title"><?php the_title(); ?></h1>
                    <?php  if( get_theme_mod('breadcrumb_sec', 'on') == 'on' ) {
                        if ((class_exists('advertica_lite_breadcrumb_class'))) {$advertica_breadcumb->advertica_lite_custom_breadcrumb();}
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

<div class="page-content fullwidth-temp">
    <div class="container post-wrap">
        <div class="row-fluid">
            <div id="content" class="span12">
                <div class="post" id="post-<?php the_ID(); ?>">
                    <div class="skepost">
                        <div class="services">
<!--                            <ul id="services_list">-->
<!--                                <li>Repair</li>-->
<!--                                <li>Engine repairs and diagnosis</li>-->
<!--                                <li>Tire repairs</li>-->
<!--                                <li>Cooling System</li>-->
<!--                                <li>Air ride systems</li>-->
<!--                                <li>Transmissions diagnosis</li>-->
<!--                                <li>ABS System</li>-->
<!--                                <li>Trailer Repairs</li>-->
<!--                                <li>Reefer Diagnostics & repair</li>-->
<!--                                <li>We offer great rates for returning costumers</li>-->
<!--                                <li>Our goal is to be your reliable provider</li>-->
<!--                                <li>We do the job right no games or gimmicks</li>-->
<!--                                <li>Only experienced and qualified technicians on team to give you the best service</li>-->
<!--                                <li>No over charging or surprises</li>-->
<!--                            </ul>-->
                            <div id="services_list">
                                <h3> - Repair</h3>
                                <h3> - Engine repairs and diagnosis</h3>
                                <h3> - Tire repairs</h3>
                                <h3> - Cooling System</h3>
                                <h3> - Air ride systems</h3>
                                <h3> - Transmissions diagnosis</h3>
                                <h3> - ABS System</h3>
                                <h3> - Trailer Repairs</h3>
                                <h3> - Reefer Diagnostics & repair</h3>
                                <h3> - We offer great rates for returning costumers</h3>
                                <h3> - Our goal is to be your reliable provider</h3>
                                <h3> - We do the job right no games or gimmicks</h3>
                                <h3> - Only experienced and qualified technicians on team to give you the best service</h3>
                                <h3> - No over charging or surprises</h3>
                            </div>
                            <div id="servicev_post">
                                <p><img src="http://awd-src.esy.es/wp-content/uploads/2015/11/photo_truck_open.png"></p>
                                <h3>
                                    American Truck Service is a full service shop. We perform heavy / medium duty truck repairs and routine maintenance . We have the capability to perform all types of repairs from engines to transmissions, brakes, ECM diagnostics, and much more. We can also customize a maintenance program that's right for your fleet. We also have mobile service trucks stocked with parts, that can assist you on the side of the road or come to your location.
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- skepost -->
                </div>
                <!-- post -->

                <?php endwhile; ?>
                <?php else :  ?>
                    <div class="post">
                        <h2><?php _e('Not Found','advertica-lite'); ?></h2>
                    </div>
                <?php endif; ?>
            </div>
            <!-- content -->
        </div>
    </div>
</div>
<?php get_footer(); ?>