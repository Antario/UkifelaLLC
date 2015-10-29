<?php
/*
Template Name: Select Services Pages
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="bread-title-holder">
            <div class="bread-title-bg-image full-bg-breadimage-fixed"></div>
            <div class="container">
                <div class="row-fluid">
                    <div class="container_inner clearfix">
                        <h1 class="title"><?php the_title(); ?></h1>
                        <?php if (get_theme_mod('breadcrumb_sec', 'on') == 'on') {
                            if ((class_exists('advertica_lite_breadcrumb_class'))) {
                                $advertica_breadcumb->advertica_lite_custom_breadcrumb();
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content fullwidth-temp">
        <div class="container post-wrap">
        <div class="row-fluid">
        <div id="content" class="span6">
            <div class="post" id="post-<?php the_ID(); ?>">
                <div class="skepost">
                    <div class="clearfix">
                        <div id="left">
                            <p>First Name (required)<br />
                                [text* your-first_name] </p>
                        </div>
                        <div id="right">
                            <p>Last Name (required)<br />
                                [text* your-last_name] </p>
                        </div>
                        <div id="left">
                            <p>Your Phone (required)<br />
                                [tel* your-telephone] </p>
                        </div>
                        <div id="right">
                            <p>Your Email (required)<br />
                                [email* your-email] </p>
                        </div>
                        <div id="left">
                            <p>Select Services<br />
                                [select* select_services] </p>
                        </div>
                        <div id="right">
                            <p>Select Date<br />
                                [date* select_date] </p>
                        </div>
                    </div>

                    <p>Additional Information<br />
                        [textarea your-message] </p>

                    <p>[submit "Send"]</p>
                </div>
            </div>
        </div>
    <?php endwhile; ?>

<?php else : ?>
    <div class="post">
        <h2><?php _e('Not Found', 'advertica-lite'); ?></h2>
    </div>
<?php endif; ?>
    </div>
    </div>
    </div>
<?php get_footer(); ?>