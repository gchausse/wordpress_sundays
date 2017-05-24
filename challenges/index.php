<?php
/**
 *
 * The main template file
 *
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package challenges
 */
 get_header();
 ?>

<main>
    <?php
    $blog = get_posts($arrayName = array('category_name' => 'blog', ));
    ?>
    <a href="<?php  echo get_permalink()?>">BLOG</a>
    <h3>spring summer 2017</h3>
    <div class="catalog">
        <?php
            $myposts = get_posts($arrayName = array('category_name' => 'produits', ));
                foreach ($myposts as $post):
                    ?>
                    <section>
                        <img src="http://lorempixel.com/200/150/abstract" alt="ecran noir">
                        <h4><?php the_title();?></h4>
                        <?php $categories = get_the_category($post->id);
                            foreach ($categories as $cat) :
                                if ($cat->name != 'produits'):?>
                                    <h4 class="<?php echo $cat->slug?>">status: <?php echo $cat->name;?></h4>
                                    <a href="<?php echo get_permalink($post->id) ?>">voir plus</a>
                                    <?php
                                endif;
                            endforeach;
                        ?>
                        <span>prix: <?php echo get_post_meta($post->ID, 'price', true);?></span>
                    </section>
                    <?php
                endforeach
             ?>
    </div>
</main>

<?php  get_footer(); ?>
