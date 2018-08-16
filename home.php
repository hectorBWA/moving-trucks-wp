<?php
/**
* The template for displaying all pages
*
* Template Name: Home template
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

<h1 style="text-align:center;font-size: 50px;">OUR SERVICES</h1>


<section style="background-color:red; color:white;">
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
            <?php the_post_thumbnail();?>
            <?php the_content();?>
            </h2>
       </div>


       <?php endwhile; endif; ?>
   </div>
</section>



<section style="background-color:lightblue; color:white;">
<h1 style="text-align:center;font-size: 50px;">OUR EXPERTISE</h1>
   <div class="row">
       <?php $productArgs = array(
           'post_type' => 'services',
           'posts_per_page' => 3,
           'order' => 'ASC'
       );
       $products = new WP_Query($productArgs);
           ?>

       <?php if($products -> have_posts()):while($products -> have_posts()):$products -> the_post() ?>
    
        <div class="col-md-4" style="display:flex; justify-content:center; flex-direction:row;">
            <h2>
            <?php the_title();?>
            <?php the_post_thumbnail();?>
            <?php the_content();?>
            </h2>
       </div>

       
       <?php endwhile; endif; ?>
   </div>
</section>


<section>
    <div style="width:100%; background-color:gold; padding:50px;">
        <h1>COMPANIES WE'VE WORKED WITH</h1>
        <ul style="list-style:none; display:flex; flex-direction: row; justify-content:center; ">
        <li style="margin: 20px;">kfc </li>
        <li style="margin: 20px;">popeyes </li>
        <li style="margin: 20px;">subway</li>
        <li style="margin: 20px;">mcdonalds</li>

        </ul>
    </div>
</section>