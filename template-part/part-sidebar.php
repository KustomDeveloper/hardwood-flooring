<div class="sb-map">
    <iframe id="sb-googlemap" src="<?php echo get_theme_mod('bus_info_map_url'); ?>" width="600" height="450" style="border:0;" allowfullscreen=""></iframe>
</div>
<div class="sb-xtra sb-social">
    <h2>Stay Connected</h2>
    <!--SOCIAL ICONS ARE SET INSIDE WORDPRESS CUSTOMIZER-->
    <a class="social-icon" href="<?php echo get_theme_mod('bus_info_facebook'); ?>"><img class="lazy" data-src="<?php bloginfo("stylesheet_directory"); ?>/img/facebook.png" /></a>
    <a class="social-icon" href="<?php echo get_theme_mod('bus_info_twitter'); ?>"><img class="lazy" data-src="<?php bloginfo("stylesheet_directory"); ?>/img/twitter.png" /></a>
    <a class="social-icon" href="<?php echo get_theme_mod('bus_info_linkedin'); ?>"><img class="lazy" data-src="<?php bloginfo("stylesheet_directory"); ?>/img/linkedin.png" /></a>
    <a class="social-icon" href="<?php echo get_theme_mod('bus_info_youtube'); ?>"><img class="lazy" data-src="<?php bloginfo("stylesheet_directory"); ?>/img/youtube.png" /></a>
    <a class="social-icon" href="<?php echo get_theme_mod('bus_info_pinterest'); ?>"><img class="lazy" data-src="<?php bloginfo("stylesheet_directory"); ?>/img/pinterest.png" /></a>
</div>

<?php
$recent_posts_query = new WP_Query('posts_per_page=5');
$count = $recent_posts_query->found_posts;

//Show recent posts if posts exist
if($count > 0) { ?>
    <div class="sb-xtra sb-recent-posts">
        <h2>Recent Posts</h2>
        <ul>
        <?php
            while($recent_posts_query->have_posts()) : $recent_posts_query->the_post(); ?>
                <li><a class="wp-recent-post" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
    </div>
<?php } ?>

<?php
$tags = get_tags();
$tag_count = count($tags);

//Show tag cloud if tags exist
if($tag_count > 0) { ?>
    <div class="sb-xtra sb-tags">
        <h2>Tags</h2>
        <?php 
            $tags = wp_tag_cloud(array('echo' => false, 'orderby' => 'count', 'order' => 'DESC', 'number' => 25)); 
            echo $tags;
        ?>
    </div>
<?php } ?>