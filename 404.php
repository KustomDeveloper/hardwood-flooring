<?php
/*
*  404 Template
*/
get_header(); ?>

<div class="section-head-wrapper">
    <div class="container-fluid">

            <div class="row pageheader">
                <h1>404</h1> 
            </div><!--.pageheader-->

    </div><!--.container-fluid-->
</div><!--.section-three-wrapper-->

<div class="section-page-wrapper">
    <div class="container-fluid">
        <!-- Start the Loop. -->

            <div class="row pagecontent">
                <div class="col-8">
                 <p>Nothing Found!</p>
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