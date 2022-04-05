<?php get_header(); ?>

<div class="section-head-wrapper">
    <div class="container-fluid">

            <div class="row pageheader">
              <?php global $post ?>
              <h1><?php echo get_the_title($post->ID); ?></h1>        
            </div><!--.pageheader-->

    </div><!--.container-fluid-->
</div><!--.section-three-wrapper-->

<div class="section-page-wrapper">
    <div class="container-fluid">
        <!-- Start the Loop. -->
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="row blogsingle pagecontent">
            
                <div class="col-8">
                    <p><?php the_content(); ?></p>
                </div><!-- .col-8 -->

                <div class="col-4 sidebar-container">
                    <div class="sidebar-content">
                        <?php get_template_part('template-part/part', 'sidebar'); ?>
                    </div>
                </div><!-- .col-4 -->
            </div><!-- .row -->

        <?php endwhile; ?><!-- End of the loop.  -->
    </div><!--.container-fluid-->
</div><!--.section-three-wrapper-->
<?php get_footer(); ?>
      