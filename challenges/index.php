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

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sass revision</title>
        <link rel="stylesheet" href="./static/external/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="./static/external/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" media="screen and (max-width: 1200px)" href="smallscreen.css" type="text/css" />
        <link rel="stylesheet" media="screen and (max-width: 770px)" href="smallscreen.css" type="text/css" />
        <link rel="stylesheet" href="./static/css/style.css">
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="#">catalog</a></li>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">Stores</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-zoom-out"></i></a></li>
                </ul>
            </nav>
            <h1>sundays</h1>
            <h2>We craft ocean frinedly apparel</h2>
            <button type="button" name="button" class="btn-group btn-group-lg">browse our products</button>
        </header>
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
                    <h4 class="buy">buy</h4>
                    <p>red hate and worf</p>
                    <span>$20.00</span>
                </section>
                <section>
                    <img src='http://lorempixel.com/200/150/abstract' alt="ecran noir">
                    <h4 class="buy">buy</h4>
                    <p>green coat</p>
                    <span>$220.00</span>
                </section>
                <section>
                    <img src='http://lorempixel.com/200/150/abstract' alt="ecran noir">
                    <h4 class="onsale">on sale</h4>
                    <p>dark coat</p>
                    <span>$220.00</span>
                </section>
                <section>
                    <img src='http://lorempixel.com/200/150/abstract' alt="ecran noir">
                    <h4 class="buy">buy</h4>
                    <p>blue trousers</p>
                    <span>$220.00</span>
                </section>
                <section>
                    <img src='http://lorempixel.com/200/150/abstract' alt="ecran noir">
                    <h4 class="soldout">sold out</h4>
                    <p>blue sweater</p>
                    <span>$220.00</span>
                </section>
                <section>
                    <img src='http://lorempixel.com/200/150/abstract' alt="ecran noir">
                    <h4 class="buy">buy</h4>
                    <p>blue shirt</p>
                    <span>$220.00</span>
                </section>
                <section>
                    <img src='http://lorempixel.com/200/150/abstract' alt="ecran noir">
                    <h4 class="onsale">on sale</h4>
                    <p>blue backpack</p>
                    <span>$120.00</span>
                </section>
                <section>
                    <img src='http://lorempixel.com/200/150/abstract' alt="ecran noir">
                    <h4 class="onsale">on sale</h4>
                    <p>beach chair</p>
                    <span>$80.00</span>
                </section>
                <section>
                    <img src='http://lorempixel.com/200/150/abstract' alt="ecran noir">
                    <h4 class="onsale">on sale</h4>
                    <p>decoration letter</p>
                    <span>$120.00</span>
                </section>
                <section>
                    <img src='http://lorempixel.com/200/150/abstract' alt="ecran noir">
                    <h4 class="onsale">on sale</h4>
                    <p>sutoonbeach</p>
                    <span>$120.00</span>
                </section>
                <section>
                    <img src='http://lorempixel.com/200/150/abstract' alt="ecran noir">
                    <h4 class="buy">buy</h4>
                    <p>red trousers</p>
                    <span>$220.00</span>
                </section>
                <section>
                    <img src='http://lorempixel.com/200/150/abstract' alt="ecran noir">
                    <h4 class="onsale">on sale</h4>
                    <p>winter sandals</p>
                    <span>$220.00</span>
                </section>
                <section>
                    <img src='http://lorempixel.com/200/150/abstract' alt="ecran noir">
                    <h4 class="buy">buy</h4>
                    <p>blue backpack</p>
                    <span>$80.00</span>
                </section>
                <section>
                    <img src='http://lorempixel.com/200/150/abstract' alt="ecran noir">
                    <h4 class="onsale">on sale</h4>
                    <p>green backpackr</p>
                    <span>$180.00</span>
                </section>
                <section>
                    <img src='http://lorempixel.com/200/150/abstract' alt="ecran noir">
                    <h4 class="onsale">on sale</h4>
                    <p>decoration letter</p>
                    <span>$120.00</span>
                </section>
                <section>
                    <img src='http://lorempixel.com/200/150/abstract' alt="ecran noir">
                    <h4 class="soldout">sold out</h4>
                    <p>neavy sweater</p>
                    <span>$220.00</span>
                </section>
            </div>
        </main>
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <section>
                            <h5>quick links</h5>
                            <ul>
                                <li><a href="#">about us</a></li>
                                <li><a href="#">blog</a></li>
                                <li><a href="#">careers</a></li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <section>
                            <h5>contact us</h5>
                            <ul>
                                <li><i class="fa fa-twitter" aria-hidden="true"></i><a href="#">@californiatheme</a></li>
                                <li><i class="glyphicon glyphicon-envelope"></i><a href="#">support@smallvictories.co</a></li>
                                <li><i class="glyphicon glyphicon-earphone"></i><a href="#">+1 917 (123) 4567</a></li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <section>
                            <h5>Newsletter</h5>
                            <input type="text" name="" value="">
                            <button type="button" name="button">ok</button>
                        </section>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <section>
                            <h5>follow us</h5>
                            <ul>
                                <li><i class="fa fa-pinterest-square" aria-hidden="true"></i><a href="#">Pintesrest</a></li>
                                <li><i class="fa fa-instagram" aria-hidden="true"></i><a href="#">instagam</a></li>
                                <li><i class="fa fa-vimeo-square" aria-hidden="true"></i><a href="#">vimeo</a></li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="./static/external/jquery/dist/jquery.js"></script>
        <script type="text/javascript" src="./static/external/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>
