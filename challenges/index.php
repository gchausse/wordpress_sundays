<?php
/**
 * The main template file
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
    <h3>spring summer 2017</h3>
    <div class="catalog">
        <section>
            <img src='http://lorempixel.com/200/150/abstract' alt="ecran noir">
            <h4 class="buy">buy</h4>
            <p>WInter Scarf</p>
            <span>$180.00</span>
        </section>
        <section>
            <img src='http://lorempixel.com/200/150/abstract' alt="ecran noir">
            <h4 class="onsale">on sale</h4>
            <p>summer sandals</p>
            <span>$220.00</span>
        </section>
        <section>
            <img src='http://lorempixel.com/200/150/abstract' alt="ecran noir">
            <h4 class="soldout">sold out</h4>
            <p>blue sweater</p>
            <span>$220.00</span>
        </section>
    </div>
</main>

<?php  get_footer(); ?>
