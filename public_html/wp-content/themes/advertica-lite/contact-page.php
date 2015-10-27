<?php
/*
Template Name: Contact Page
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
                                <?php echo do_shortcode('[wpgmza id="1"]'); ?>
                            </div>
                        </div>
                    </div>
                    <div id="content" class="span6">
                        <div class="post" id="post-<?php the_ID(); ?>">
                            <div class="skepost">
                                <?php echo do_shortcode('[contact-form-7 id="22" title="Contact form"]'); ?>
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