<?php
/*
Template Name: Testing
*/
get_header(); ?>

<pre>
<?php
$all_settings = get_theme_mods();
print_r( $all_settings );
?>
</pre>










<?php get_footer(); ?>