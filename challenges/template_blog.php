<?php
/**
*Template Name: template_blog
*Template Post Type: post, page
*/
 get_header();
 ?>
 <main>
     <?php
     $myposts = get_posts($arrayName = array('category_name' => 'blog', ));
     foreach ($myposts as $post) :?>
         <h3><?php  the_title(); ?></h3>
         <div class="container-fluid">
             <div class="row">
                 <div class="col-xs-2">
                     <?php the_post_thumbnail() ;?>
                 </div>
                 <div class="col-xs-10">
                     <article>
                         <p>posted: <?php echo get_post_field('post_date');?></p>
                         <p><?php echo get_post_field('post_content');?> </p>
                         <h4>prix: <?php echo get_post_meta($post->ID, 'price', true);?></h4>
                         <button type="button" name="button">Ajouter au panier</button>
                     </article>

                 </div>
             </div>
         </div>
         <?php
    endforeach
    ?>
 </main>
    
 <?php
 get_footer();
  ?>
