<?php
/*
Template Name: About Us Template
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
                <div class="about">
                    <div id="about_left">
                        <p><img src="http://awd-src.esy.es/wp-content/uploads/2015/11/KKC-1.jpg"></p>
                        <h4>Lorem ipsum dolor sit amet, qui at hinc discere, eam prima viris nihil eu, tollit partem molestiae est id. Et quodsi ocurreret expetendis est, no duo albucius consectetuer, mel scripta veritus noluisse ad. Brute dicunt delicata no nam, has ne ferri conceptam. Illum idque ex sea. Aliquip malorum iuvaret vix ei, unum quodsi consectetuer vim ea, agam possim fastidii in ius.

                            Mutat liber verterem id pro, cu indoctum suavitate pertinacia cum. Vidisse alterum vim te, mel utinam aliquid an, nec unum fastidii deterruisset no. Facete omnium phaedrum usu eu. Molestiae pertinacia has te, modus mundi intellegat vel ea, ut decore feugait mei.

                            Ignota cetero no mea, vel lorem incorrupte eu. Eum ea aeque possim reformidans, ad platonem accommodare est, has movet congue omnium id. Has albucius voluptua te, nisl autem fuisset quo cu. Nec et epicurei signiferumque, sit luptatum definitiones no. Mei elitr delenit explicari an. Sit eu mutat nusquam similique, in ponderum vulputate nec. Vis no convenire definiebas eloquentiam.</h4>
                        <p><img src="http://awd-src.esy.es/wp-content/uploads/2015/11/GM-workers.jpg"></p>
                        <h4>Lorem ipsum dolor sit amet, qui at hinc discere, eam prima viris nihil eu, tollit partem molestiae est id. Et quodsi ocurreret expetendis est, no duo albucius consectetuer, mel scripta veritus noluisse ad. Brute dicunt delicata no nam, has ne ferri conceptam. Illum idque ex sea. Aliquip malorum iuvaret vix ei, unum quodsi consectetuer vim ea, agam possim fastidii in ius.

                            Mutat liber verterem id pro, cu indoctum suavitate pertinacia cum. Vidisse alterum vim te, mel utinam aliquid an, nec unum fastidii deterruisset no. Facete omnium phaedrum usu eu. Molestiae pertinacia has te, modus mundi intellegat vel ea, ut decore feugait mei.

                            Ignota cetero no mea, vel lorem incorrupte eu. Eum ea aeque possim reformidans, ad platonem accommodare est, has movet congue omnium id. Has albucius voluptua te, nisl autem fuisset quo cu. Nec et epicurei signiferumque, sit luptatum definitiones no. Mei elitr delenit explicari an. Sit eu mutat nusquam similique, in ponderum vulputate nec. Vis no convenire definiebas eloquentiam.</h4>
                    </div>
                    <div id="about_right">
                        <h4>Lorem ipsum dolor sit amet, qui at hinc discere, eam prima viris nihil eu, tollit partem molestiae est id. Et quodsi ocurreret expetendis est, no duo albucius consectetuer, mel scripta veritus noluisse ad. Brute dicunt delicata no nam, has ne ferri conceptam. Illum idque ex sea. Aliquip malorum iuvaret vix ei, unum quodsi consectetuer vim ea, agam possim fastidii in ius.

                            Mutat liber verterem id pro, cu indoctum suavitate pertinacia cum. Vidisse alterum vim te, mel utinam aliquid an, nec unum fastidii deterruisset no. Facete omnium phaedrum usu eu. Molestiae pertinacia has te, modus mundi intellegat vel ea, ut decore feugait mei.

                            Ignota cetero no mea, vel lorem incorrupte eu. Eum ea aeque possim reformidans, ad platonem accommodare est, has movet congue omnium id. Has albucius voluptua te, nisl autem fuisset quo cu. Nec et epicurei signiferumque, sit luptatum definitiones no. Mei elitr delenit explicari an. Sit eu mutat nusquam similique, in ponderum vulputate nec. Vis no convenire definiebas eloquentiam.</h4>
                        <p><img src="http://awd-src.esy.es/wp-content/uploads/2015/11/DSC02789_800x600.jpg"></p>
                        <h4>Lorem ipsum dolor sit amet, qui at hinc discere, eam prima viris nihil eu, tollit partem molestiae est id. Et quodsi ocurreret expetendis est, no duo albucius consectetuer, mel scripta veritus noluisse ad. Brute dicunt delicata no nam, has ne ferri conceptam. Illum idque ex sea. Aliquip malorum iuvaret vix ei, unum quodsi consectetuer vim ea, agam possim fastidii in ius.

                            Mutat liber verterem id pro, cu indoctum suavitate pertinacia cum. Vidisse alterum vim te, mel utinam aliquid an, nec unum fastidii deterruisset no. Facete omnium phaedrum usu eu. Molestiae pertinacia has te, modus mundi intellegat vel ea, ut decore feugait mei.

                            Ignota cetero no mea, vel lorem incorrupte eu. Eum ea aeque possim reformidans, ad platonem accommodare est, has movet congue omnium id. Has albucius voluptua te, nisl autem fuisset quo cu. Nec et epicurei signiferumque, sit luptatum definitiones no. Mei elitr delenit explicari an. Sit eu mutat nusquam similique, in ponderum vulputate nec. Vis no convenire definiebas eloquentiam.</h4>
                        <p><img src="http://awd-src.esy.es/wp-content/uploads/2015/11/7_raildelivery_truck_graphics_iconography.jpg"></p>
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