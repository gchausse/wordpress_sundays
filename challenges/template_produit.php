<?php
/**
*Template Name: template_produit
*Template Post Type: post
*/
 get_header();
 ?>
 <main>
     <h3><?php  the_title(); ?></h3>
         <img src="http://lorempixel.com/200/150/abstract" alt="image du produit" class="imgproduit">
         <article>
             <p><?php echo get_post_field('post_content');?> </p>
             <p><?php echo get_post_field('post_date');?></p>
             <h4>prix: <?php echo get_post_meta($post->ID, 'price', true);?></h4>
             <button type="button" name="button">Ajouter au panier</button>
         </article>
 </main>
<?php
get_footer();
 ?>
