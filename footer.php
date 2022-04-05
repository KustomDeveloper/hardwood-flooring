<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3>Contact</h3>
                <ul class="ftr-location">
                    <!--ADDRESS AND PHONE IS SET INSIDE WORDPRESS CUSTOMIZER-->
                    <li class="ftr-name"><?php echo get_bloginfo('site_title'); ?></li>
                    <!-- <li class="ftr-email"><?php //echo get_theme_mod('bus_info_email'); ?></li> -->
                    <li class="ftr-address">
                        <span class="str-addr"><?php echo get_theme_mod('bus_info_street_address'); ?></span>
                        <span class="cty-addr"><?php echo get_theme_mod('bus_info_city_address'); ?></span>
                        <span class="st-addr"><?php echo get_theme_mod('bus_info_state_address'); ?></span>
                        <span class="zip-addr"><?php echo get_theme_mod('bus_info_zip_address'); ?></span>
                        
                    </li>
                    <li class="ftr-phone"><a href="tel:<?php echo preg_replace('/[^0-9]/', '', get_theme_mod('bus_info_phone')); ?>"><?php echo get_theme_mod('bus_info_phone'); ?></a></li>
                </ul>

            </div>

            <div class="col-md-3">
                <div class="ftr-recent-posts">
                    <h3>Recent Posts</h3>
                    <?php $footer_posts_query = new WP_Query(array('posts_per_page' => 5,));
            
                    while($footer_posts_query->have_posts()) : $footer_posts_query->the_post(); ?>

                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); // reset the query ?>
                </div>
            </div>

            <div class="col-md-3 ftr-social">
                <h3>Stay Connected</h3>
                <!--SOCIAL ICONS ARE SET INSIDE WORDPRESS CUSTOMIZER-->
                <a href="<?php echo get_theme_mod('bus_info_facebook'); ?>"><img class="ftr-fb lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/fb-icon.png" /></a>
                <a href="<?php echo get_theme_mod('bus_info_twitter'); ?>"><img class="ftr-tw lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/tw-icon.png" /></a>
                <a href="<?php echo get_theme_mod('bus_info_youtube'); ?>"><img class="ftr-yt lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/yt-icon.png" /></a>
                <a href="<?php echo get_theme_mod('bus_info_linkedin'); ?>"><img class="ftr-li lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/li-icon.png" /></a>
                <a href="<?php echo get_theme_mod('bus_info_pinterest'); ?>"><img class="ftr-pi lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/pi-icon.png" /></a>

                <iframe class="ftr-map" src="<?php echo get_theme_mod('bus_info_map_url'); ?>" width="200" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="col-md-3">
                <h3>Reviews</h3>
                <div class="customer-review" itemscope="" itemtype="https://schema.org/Product"> 
               <span itemprop="name"><?php bloginfo('site_title'); ?></span><br>  
               <em><span></span>
            <div itemprop="aggregateRating" itemscope="" itemtype="https://schema.org/AggregateRating">
                <span itemprop="ratingValue"><strong>5</strong></span><strong>/<span itemprop="bestRating">5</span></strong> stars
                based on <span itemprop="reviewCount">5</span> customer reviews
              </div><br>
            <span itemprop="description"><strong>The Best.</strong><br><?php bloginfo('site_title'); ?> was professional, prompt, and supportive during our entire process. Thanks for all your help!</span>
            <p><a class="ftr-review-link" href="<?php bloginfo('url'); ?>/reviews/">Leave a Review</a></p>
            </em></div>
                
            </div>

        </div><!--.row-->
    </div><!--.container-->
    <div class="copyright">
        &copy; <?php echo date('Y'); ?> <?php bloginfo('site_title'); ?> | <a href="<?php bloginfo('url'); ?>/sitemap_index.xml">Sitemap</a>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>