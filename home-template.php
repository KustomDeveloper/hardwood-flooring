<?php
/*
Template Name: Home Template
*/
get_header(); ?>

<div id="home-banner" class="section-one-wrapper">
    <div class="container">
        <div class="home-banner-box">
            <h3>NEED PROFESSIONALS?</h3>
            <p>Hire us for a</p>
            <h1 class="home-title">Hardwood Flooring Install <span>in <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?></span></h1>
            
            <a class="bb-cta" href="tel:<?php echo preg_replace('/[^0-9]/', '', get_theme_mod('bus_info_phone')); ?>"><button>Call Now <img src="<?php bloginfo("stylesheet_directory"); ?>/img/arrow.png" /></button></a>
        </div>
    </div>
</div><!--.section-one-wrapper-->

<div class="ft-container">
    <div class="container">
        <div class="row ft-info">
            <h3 class="small-title">SERVICES</h3>
            <div class="col-md-4">
                <h3 class="featured-title">Professional Hardwood Floor Installers</h3>
            </div>

            <div class="col-md-4">
               <p class="featured-subtitle">We Help Connect you to the Best Hardwood Flooring Contractors in the Area.</p>
            </div>

            <div class="col-md-4">
                <div class="below-banner-cta"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/blue-phone-icon.png" />CALL US ANYTIME <br/><a class="bb-cta" href="tel:<?php echo preg_replace('/[^0-9]/', '', get_theme_mod('bus_info_phone')); ?>"><?php echo get_theme_mod('bus_info_phone'); ?></a></div>
            </div>
        </div>

            <div class="row ft-row">
                <div class="ftb-1 ft-box box-two col-md-4">
                    <div><img src="<?php bloginfo("stylesheet_directory"); ?>/img/hw-1.png">
                    <h2>Hardwood Flooring Installation</h2> 
                    <p>Hardwood flooring installation needs to be done correctly to achieve the maximum beauty, performance, and durability.</p>
                    </div>
                </div>
                <div class="ftb-2 ft-box box-three col-md-4">
                    <div><img src="<?php bloginfo("stylesheet_directory"); ?>/img/hw-2.png">
                    <h2>Laminate Flooring Installation</h2>
                    <p>Laminate manufacturers have developed products with great surface texture and visual appeal.</p>
                    </div>
                </div>
                <div class="ftb-3 ft-box box-three col-md-4">
                    <div><img src="<?php bloginfo("stylesheet_directory"); ?>/img/hw-3.png">
                    <h2>Hardwood Flooring Maintenance</h2>
                    <p>Hardwood floor maintenance is quite easy and doesn’t take up as much time as carpeting, tiles, or even vinyl does.</p>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>


<div class="container main-content">
    <div class="row two-column">
        <div class="left-column">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/modern-floor-content.png" />
            <?php 
                // The Query
                $rp_args = array(
                    'posts_per_page' => 5,
                    'post_type' => 'post',
                ); 
                $recent_posts = new WP_Query( $rp_args );

                $count = $recent_posts->found_posts;
                //Show recent posts if posts exist
                if($count > 0) { ?>

            <div class="hp-recent-posts-box">
                <h3>RECENT POSTS</h3>

                   <?php // The Loop
                    if ( $recent_posts->have_posts() ) {
                        echo '<ul>';
                        while ( $recent_posts->have_posts() ) {
                            $recent_posts->the_post(); ?>
                            <li><a href="<?php the_permalink(); ?>"></a><?php the_title(); ?></li>
                        <?php }
                        echo '</ul>';
                    } else {
                        // no posts found
                    }
                    wp_reset_postdata(); ?>
                    </div>
                <?php } 

            $tags = get_tags();
            $tag_count = count($tags);
            //Show tag cloud if tags exist
            if($tag_count > 0) { ?>
                <div class="hp-tags-box">
                    <h3>TAGS</h3>
                    <?php
                        $tags = wp_tag_cloud(array('echo' => false, 'orderby' => 'count', 'order' => 'DESC', 'number' => 25)); 
                        echo $tags; ?>
                </div>
             <?php } ?>
       
            <div class="hp-map">
                <iframe src="<?php echo get_theme_mod('bus_info_map_url'); ?>" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>


        <h2>Floor Refinishing</h2>

        <p>Hardwood floor refinishing effectually returns your floors to their previous glory, sanding out any problem areas, indentations, scrapes, and anything else that may make your flooring look older than it actually is. Many flooring contractors in <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> provide many diverse types of flooring as well as hardwood flooring and refinishing services – you don’t want that. As an alternative, hire a company that offers you competence and a concentration in hardwood flooring, hardwood floor restoration, and hardwood floor refinishing.</p>

        <p>Work with a hardwood flooring <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> refinishing company that focuses on hardwood flooring because they will give you the best results and the best floors. They know how to refinish difficult floors and can help you to select the best choices for a floor that needs specific care. Even better, they can problem solve as they go – making changes or alterations as necessary.</p>

        <p>Look for a company that uses only the best products. Top rated <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> hardwood flooring refinishing companies and contractors will not cut corners at the expense of your flooring. Instead, they will use the highest rated products that they have worked with for themselves before. They don’t trick you by using lower rated products in areas you won’t see – that is a common occurrence with some companies.</p>

        <h2>Hardwood Floor Repair</h2>

        <p>Hardwood flooring is one of the most attractive and sturdy flooring types, but just like many others, it eventually starts to show signs of wear and tear and necessitates hardwood floor repair. If you have ever seen a wooden floor, you should be able to tell quickly if your wood floors are in need of maintenance. Staining and waxing only cover up some of the scratches and other damage. Still, this alone won’t remove the problem, instead it will only mask it. You need assistance from a professional hardwood floor repair company in <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?>. An expert company will visibly restore your wood floors and make them feel safer as well.</p>

        <p>Just because your hardwood floor is older or has visible damage, that doesn’t mean you need entirely new flooring. As an alternative, you may be able to repair or refinish your flooring and reverse some of the signs of damage. This approach will cost you less money and less time.</p>

        <h2>Interested in Hardwood Flooring Repair In <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?>?</h2>

        <p>If you are interested in hardwood flooring repair or installation for your home, vacation home, apartments, shed, basement, or pretty much any other structure that you have, we can help you! Contact us today, and we can help you to determine the best hardwood flooring company in <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> that can answer these questions and help you to make the best choices.</p>

        <h2>New Hardwood Flooring Installation</h2>

        <p>Looking to put hardwood flooring in a new home? Or is your flooring so bad that you need to start over? A hardwood flooring <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> installation team rebuilds and builds your flooring from the ground up, giving it a natural feel. Installing sub flooring, creating a level surface in older homes, and working to ensure that your floor looks and feels new for years to come is a special skill, one that not all <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> companies have. Nothing compares to a team that has years of experience.</p>

        <p>Make sure to hire a professional hardwood flooring installation team that is experienced at installing all kinds of floors. Maybe you want a specific design on the floor. Maybe you have a difficult space. Maybe you just won’t settle for nothing less than what you want – you need to ensure that you get it. Top rated hardwood flooring <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> installation can completely change the look and feel of your home.</p>
                
</div><!--Left Column-->

<div class="right-column">   
        <h3 class="content-first-h3">WHY CHOOSE US</h3>
        <h2 class="content-first-h2">Hardwood Flooring <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?></h2>

        <p>Do you want to add warmth, beauty, and a touch of class to any room in your home? It is easy when you use hardwood flooring in your interior design. Working with a hardwood flooring <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> company helps you to add uniqueness, beauty, and ease to your home without creating more of a mess for yourself. Hardwood floors make any room in your home seem more attractive, more welcoming, and better designed.</p>

        <p>It is important to work with a top rated hardwood flooring <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> company because that allows you to have complete control over all facets of your hardwood flooring, from the size and scope of it to the hardwood flooring refinishing and cleaning.</p>

        <p>A hardwood flooring <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> company offers a complete selection of hardwood floors that fit into your budget in any design, color, or style that you can imagine. The best hardwood flooring companies have relationships all over the world, which means you can get what you need from them. It is amazing how a unique hardwood floor can completely change your <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> home.</p>

        <h2>Hardwood Flooring: The Right Choice for Any Room in the House</h2>

        <p>Hardwood flooring has beautiful designs and excellent qualities that will never fade or go out of style. Even better, they never need to be updated and can work in rooms of almost any style. They have more character and elegance than any other flooring option – taking even the most basic of rooms and making it stand out. There is truly nothing better than hardwood flooring in a <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> home – so don’t settle for less than the best.</p>

        <h2>Types of Hardwood Flooring <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?></h2>

        <p>Oak hardwood flooring, Brazilian cherry hardwood flooring, engineered hardwood, solid hardwood, and anything in between – you can find it when you work with a top hardwood flooring <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> company. You have many choices that you can make, and the professionals can help you to determine what will look better in your home and what you should stay away from.</p>

        <p>Planked flooring, hand scraped flooring, wire brushed flooring, or something else altogether – experienced <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> hardwood flooring services will have seen it all and done it all. Whether you want something that is brand new and exciting or you just want traditional flooring that will never go out of style, you can have it all.</p>

        <h2>New Hardwood Flooring Installation</h2>

        <p>Looking to put hardwood flooring in a new home? Or is your flooring so bad that you need to start over? A hardwood flooring <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> installation team rebuilds and builds your flooring from the ground up, giving it a natural feel. Installing sub flooring, creating a level surface in older homes, and working to ensure that your floor looks and feels new for years to come is a special skill, one that not all <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> companies have. Nothing compares to a team that has years of experience.</p>

        <p>Make sure to hire a professional hardwood flooring installation team that is experienced at installing all kinds of floors. Maybe you want a specific design on the floor. Maybe you have a difficult space. Maybe you just won’t settle for nothing less than what you want – you need to ensure that you get it. Top rated hardwood flooring <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> installation can completely change the look and feel of your home.</p>

        <h2>Hardwood Flooring: The Right Choice for Any Room in the House</h2>

        <p>Hardwood flooring has beautiful designs and excellent qualities that will never fade or go out of style. Even better, they never need to be updated and can work in rooms of almost any style. They have more character and elegance than any other flooring option – taking even the most basic of rooms and making it stand out. There is truly nothing better than hardwood flooring in a <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> home – so don’t settle for less than the best.</p>

        <h2>Types of Hardwood Flooring <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?></h2>

        <p>Oak hardwood flooring, Brazilian cherry hardwood flooring, engineered hardwood, solid hardwood, and anything in between – you can find it when you work with a top hardwood flooring <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> company. You have many choices that you can make, and the professionals can help you to determine what will look better in your home and what you should stay away from.</p>

        <p>Planked flooring, hand scraped flooring, wire brushed flooring, or something else altogether – experienced <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> hardwood flooring services will have seen it all and done it all. Whether you want something that is brand new and exciting or you just want traditional flooring that will never go out of style, you can have it all.</p>

        <h2>Hardwood Flooring <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?></h2>

        <p>Do you want to add warmth, beauty, and a touch of class to any room in your home? It is easy when you use hardwood flooring in your interior design. Working with a hardwood flooring <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> company helps you to add uniqueness, beauty, and ease to your home without creating more of a mess for yourself. Hardwood floors make any room in your home seem more attractive, more welcoming, and better designed.</p>

        <p>It is important to work with a top rated hardwood flooring <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> company because that allows you to have complete control over all facets of your hardwood flooring, from the size and scope of it to the hardwood flooring refinishing and cleaning.</p>

        <p>A hardwood flooring <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> company offers a complete selection of hardwood floors that fit into your budget in any design, color, or style that you can imagine. The best hardwood flooring companies have relationships all over the world, which means you can get what you need from them. It is amazing how a unique hardwood floor can completely change your <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> home.</p>

        </div><!--Right Column-->
    </div><!--.row-->
</div>

<div class="clean-cta">
    <div class="container">
        <div class="row">
                <a class="desktop-cta" href="tel:<?php echo preg_replace('/[^0-9]/', '', get_theme_mod('bus_info_phone')); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/ad-cta.png" /><span class="desktop-cta-phone"><?php echo get_theme_mod('bus_info_phone'); ?></span>
            </a>
           <div class="mobile-cta">
                <img class="tiny-cta" src="<?php bloginfo('stylesheet_directory'); ?>/img/Mobile-cta.png">
                <a class="mobile-cta-phone" href="tel:<?php echo preg_replace('/[^0-9]/', '', get_theme_mod('bus_info_phone')); ?>"><?php echo get_theme_mod('bus_info_phone'); ?></a>
           </div>
        </div> <!--.row-->
    </div><!--.container-->
</div><!--.orange-cta-->



<div class="customer-reviews">
    <div class="section-title">
    <h2>Customer Reviews</h2>
    </div>

    <?php echo do_shortcode('[WPCR_SHOW POSTID="ALL" NUM="3"]'); ?>
    <a class="reviews-cta-link" href="<?php bloginfo('url'); ?>/reviews">See All Reviews <img src="<?php bloginfo('stylesheet_directory');?>/img/arrow-right.png" /></a>
</div>

<div class="media-wrapper">
    <div class="container media-gallery">
        <div class="section-title">
        <h2>Media</h2>
        </div>

        <div class="row video-row">
            <div class="col-md-4 vid1">
                <div itemprop="video" itemscope="" itemtype="http://schema.org/VideoObject">
                <meta itemprop="name" content="Carpet Cleaning <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> | Call Us Today <?php echo get_theme_mod('bus_info_phone'); ?>"><br>
                <iframe class="vid-col1" width="100%" height="auto" data-src="https://www.youtube.com/embed/<?php echo get_theme_mod('bus_info_video_id_1'); ?>?rel=0&amp;autoplay=1&mute=1" src="about:blank" frameborder="0" allowfullscreen=""></iframe><br>
                <link itemprop="embedURL" href="https://youtube.googleapis.com/v/<?php echo get_theme_mod('bus_info_video_id_1'); ?>">
                <link itemprop="thumbnailUrl" href="https://img.youtube.com/vi/<?php echo get_theme_mod('bus_info_video_id_1'); ?>/mqdefault.jpg">
                <meta itemprop="description" content="Carpet Cleaning <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> | Call Us Today <?php echo get_theme_mod('bus_info_phone'); ?>. No matter what the size and scope of your project is, our Carpet Cleaning Pros <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> partners are available to help.">
                <meta itemprop="duration" content="PT0M55S">
                <meta itemprop="uploadDate" content="2018-05-03">
                <span class="short-video-title">LUXURY VINYL FLOORING</span>
                </div>
            </div>  

            <div class="col-md-4 vid2">
                <div itemprop="video" itemscope="" itemtype="http://schema.org/VideoObject">
                <meta itemprop="name" content="Carpet Stain Removal <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> | Call Us <?php echo get_theme_mod('bus_info_phone'); ?>"><br>
                <iframe class="vid-col2" width="100%" height="auto" data-src="https://www.youtube.com/embed/<?php echo get_theme_mod('bus_info_video_id_2'); ?>?rel=0&amp;autoplay=1&mute=1" src="about:blank" frameborder="0" allowfullscreen=""></iframe><br>
                <link itemprop="embedURL" href="https://youtube.googleapis.com/v/<?php echo get_theme_mod('bus_info_video_id_2'); ?>">
                <link itemprop="thumbnailUrl" href="https://img.youtube.com/vi/<?php echo get_theme_mod('bus_info_video_id_2'); ?>/mqdefault.jpg">
                <meta itemprop="description" content="Carpet Stain Removal <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> | Call Us <?php echo get_theme_mod('bus_info_phone'); ?>. No matter what the size and scope of your project is, our Carpet Cleaning Pros <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> partners are available to help.">
                <meta itemprop="duration" content="PT0M54S">
                <meta itemprop="uploadDate" content="2018-06-15">
                <span class="short-video-title">FLOORING INSTALLATION</span>
                </div>
            </div>  

            <div class="col-md-4 vid3">
                <div itemprop="video" itemscope="" itemtype="http://schema.org/VideoObject">
                <meta itemprop="name" content="Area Rug Cleaning <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> | Call Today <?php echo get_theme_mod('bus_info_phone'); ?>"><br>
                <iframe class="vid-col3" width="100%" height="auto" data-src="https://www.youtube.com/embed/<?php echo get_theme_mod('bus_info_video_id_3'); ?>?rel=0&amp;autoplay=1&mute=1" src="about:blank" frameborder="0" allowfullscreen=""></iframe><br>
                <link itemprop="embedURL" href="https://youtube.googleapis.com/v/<?php echo get_theme_mod('bus_info_video_id_3'); ?>">
                <link itemprop="thumbnailUrl" href="https://img.youtube.com/vi/<?php echo get_theme_mod('bus_info_video_id_3'); ?>/mqdefault.jpg">
                <meta itemprop="description" content="Area Rug Cleaning <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> | Call Today <?php echo get_theme_mod('bus_info_phone'); ?>. No matter what the size and scope of your project is, our Carpet Cleaning Pros <?php echo get_theme_mod('bus_info_city_address'); ?> <?php echo get_theme_mod('bus_info_state_address'); ?> partners are available to help.">
                <meta itemprop="duration" content="PT0M55S">
                <meta itemprop="uploadDate" content="2018-06-05">
                <span class="short-video-title">FLOORING CONTRACTOR</span>
                </div>
            </div>  
        </div>
    </div>
</div>

<?php get_footer(); ?>