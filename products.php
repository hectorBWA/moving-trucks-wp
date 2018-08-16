<?php
/**
* The template for displaying all pages
*
* Template Name: Products template
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package whc-theme-0
*/

get_header();
?>
<section>
   <div class="row">
       <?php $productArgs = array(
           'post_type' => 'products',
           'posts_per_page' => 3,
           'order' => 'ASC'
       );
       $products = new WP_Query($productArgs);
           ?>

       <?php if($products -> have_posts()):while($products -> have_posts()):$products -> the_post() ?>
    
        <div class="col-md-4">
            <h2>
            <?php the_title();?>
            </h2>

            <div class="prod-img-box">
            <?php the_post_thumbnail();?>
                </div>

                <p>
                <?php the_content();?>
               </p>
       </div>
       <?php endwhile; endif; ?>
   </div>
</section>
