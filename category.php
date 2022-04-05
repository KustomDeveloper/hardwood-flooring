<?php
/*
*  Category template
*/
get_header(); ?>

<div class="section-head-wrapper">
    <div class="container-fluid">

            <div class="row pageheader">
                <h1>Categories</h1> 
            </div><!--.pageheader-->

    </div><!--.container-fluid-->
</div><!--.section-three-wrapper-->

<div class="section-page-wrapper">
    <div class="container-fluid">
        <!-- Start the Loop. -->

            <div class="row pagecontent">
                <div class="col-8">
                <?php 
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'posts_per_page' => 10,
                    'paged' => $paged
                ); 
                $custom_query = new WP_Query($args); 
                while($custom_query->have_posts()) : $custom_query->the_post(); ?>

                    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_excerpt(); ?>
                        <hr />
                    </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); // reset the query ?>


                <div class="pagination">
                    <?php 
                    $chev_left = '<img class="chev-left" src="' . get_bloginfo('stylesheet_directory') . '/img/chev-left.png' . '"' . ' />';
                    $chev_right = '<img class="chev-right" src="' . get_bloginfo('stylesheet_directory') . '/img/chev-right.png' . '"' . ' />';
                        echo paginate_links( array(
                            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                            'total'        => $custom_query->max_num_pages,
                            'current'      => max( 1, get_query_var( 'paged' ) ),
                            'format'       => '?paged=%#%',
                            'show_all'     => false,
                            'type'         => 'plain',
                            'end_size'     => 2,
                            'mid_size'     => 1,
                            'prev_next'    => true,
                            'prev_text'    => sprintf( '<i></i> %1$s', __( $chev_left, 'kitchen_modern' ) ),
                            'next_text'    => sprintf( '%1$s <i></i>', __( $chev_right, 'kitchen_modern' ) ),
                            'add_args'     => false,
                            'add_fragment' => '',
                        ) );
                    ?>
                </div>
 
                </div><!-- .col-8 -->

                <div class="col-4 sidebar-container">
                    <div class="sidebar-content">
                        <?php get_template_part('template-part/part', 'sidebar'); ?>
                    </div>
                </div><!-- .col-4 -->
            </div><!-- .row -->

    </div><!--.container-fluid-->
</div><!--.section-three-wrapper-->
<?php get_footer(); ?>