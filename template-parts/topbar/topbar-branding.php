 <?php
/**
 * Template part for displaying topbar branding
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @since 1.0.0
 */

?>

 <a class="d-flex flex-justify-between flex-items-center" href="<?php echo get_bloginfo('url'); ?>"
     title="<?php echo get_bloginfo('description'); ?>">

     <svg class="mr-2 lh-0" width="48" height="48" viewBox="0 0 48 48" aria-hidden="true" version="1.1">
        <g transform="matrix(0.191001,0,0,0.191001,6.68072,6.03045)">
            <path d="M47.243,12.929L47.243,38.837L68.579,38.837L77.342,65.888L12.192,166.851L44.195,166.851L90.677,98.272L121.156,175.233L169.161,159.993L161.541,136.371L139.444,143.229L87.629,12.929L47.243,12.929Z" style="fill:#ff6702;"/>
        </g>
     </svg>

     <span class="f4 text-bold hide-sm" style="color:#ff6702;">
         <?php echo get_bloginfo('name'); ?>
     </span>

 </a>