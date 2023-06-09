<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Wordsmith</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
<!--    -->
<!--    <link rel="stylesheet" href="css/base.css">-->
<!--    <link rel="stylesheet" href="css/vendor.css">-->
<!--    <link rel="stylesheet" href="css/main.css">-->
<!--    -->

    <!-- script
    ================================================== -->
<!--     <script src="--><?php //echo get_template_directory_uri(); ?><!--/js/modernizr.js"></script>-->

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">

    <?php wp_head(); ?>
</head>

<body id="top">

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header
    ================================================== -->
    <?php get_header('./header.php') ?>
    <!-- s-header -->


    <!-- featured 
    ================================================== -->
    <section class="s-featured">
        <div class="row">
            <div class="col-full">

                <div class="featured-slider featured" data-aos="zoom-in">

                    <div class="featured__slide">
                        <div class="entry">

                            <div class="entry__background" style="background-image:url('images/thumbs/featured/featured-guitarman.jpg');"></div>
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">Music</a></span>

                                <h1><a href="#0" title="">What Your Music Preference Says About You and Your Personality.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="<?php echo get_template_directory_uri(); ?>/images/avatars/user-05.jpg" alt="">
                                    </a>
                                    <ul class="entry__meta">
                                        <li><a href="#0">Jonathan Smith</a></li>
                                        <li>June 02, 2018</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->
                    </div> <!-- end featured__slide -->

                    <div class="featured__slide">

                        <div class="entry">

                            <div class="entry__background" style="background-image:url('images/thumbs/featured/featured-watch.jpg');"></div>
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">Management</a></span>

                                <h1><a href="#0" title="">The Pomodoro Technique Really Works.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="<?php echo get_template_directory_uri(); ?>/images/avatars/user-03.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">John Doe</a></li>
                                        <li>June 13, 2018</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->

                    </div> <!-- end featured__slide -->

                    <div class="featured__slide">

                        <div class="entry">

                            <div class="entry__background" style="background-image:url('images/thumbs/featured/featured-beetle.jpg');"></div>

                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">LifeStyle</a></span>

                                <h1><a href="#0" title="">The difference between Classics, Vintage & Antique Cars.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src=<?php echo get_template_directory_uri(); ?>/"images/avatars/user-03.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">John Doe</a></li>
                                        <li>June 12, 2018</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->

                        </div> <!-- end entry -->

                    </div> <!-- end featured__slide -->
                    
                </div> <!-- end featured -->

            </div> <!-- end col-full -->
        </div>
    </section> <!-- end s-featured -->


    <!-- s-content
    ================================================== -->
    <section class="s-content">
        
        <div class="row entries-wrap wide">
            <div class="entries">

                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="single-standard.html" class="item-entry__thumb-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/post/lamp-400.jpg"
                                     srcset="<?php echo get_template_directory_uri(); ?>/images/thumbs/post/lamp-400.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/thumbs/post/lamp-800.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">    
                            <div class="item-entry__cat">
                                <a href="category.html">Design</a> 
                            </div>
    
                            <h1 class="item-entry__title"><a href="single-standard.html">3 Benefits of Minimalism In Interior Design.</a></h1>
                                
                            <div class="item-entry__date">
                                <a href="single-standard.html">June 15, 2018</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->

                </article> <!-- end article -->

                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="single-standard.html" class="item-entry__thumb-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/post/tulips-400.jpg"
                                     srcset="<?php echo get_template_directory_uri(); ?>/images/thumbs/post/tulips-400.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/thumbs/post/tulips-800.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="category.html">Health</a>
                            </div>
    
                            <h1 class="item-entry__title"><a href="single-standard.html">10 Interesting Facts About Caffeine.</a></h1>
                                
                            <div class="item-entry__date">
                                <a href="single-standard.html">June 14, 2018</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->
    
                </article> <!-- end article -->

                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="single-standard.html" class="item-entry__thumb-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/post/music-400.jpg"
                                     srcset="<?php echo get_template_directory_uri(); ?>/images/thumbs/post/music-400.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/thumbs/post/music-800.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="category.html">Health</a>
                            </div>
    
                            <h1 class="item-entry__title"><a href="single-standard.html">The Power of Music to Reduce Stress.</a></h1>
                                
                            <div class="item-entry__date">
                                <a href="single-standard.html">June 14, 2018</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->
    
                </article> <!-- end article -->

                <article class="col-block">
                
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="single-standard.html" class="item-entry__thumb-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/post/watch-400.jpg"
                                     srcset="<?php echo get_template_directory_uri(); ?>/images/thumbs/post/watch-400.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/thumbs/post/watch-800.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="category.html">Management</a>
                            </div>
    
                            <h1 class="item-entry__title"><a href="single-standard.html">The Pomodoro Technique Really Works.</a></h1>
                                
                            <div class="item-entry__date">
                                <a href="single-standard.html">June 12, 2018</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->

                </article> <!-- end article -->

                <article class="col-block">
                
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="single-standard.html" class="item-entry__thumb-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/post/wheel-400.jpg"
                                     srcset="<?php echo get_template_directory_uri(); ?>/images/thumbs/post/wheel-400.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/thumbs/post/wheel-800.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="category.html">Lifestyle</a>
                            </div>
    
                            <h1 class="item-entry__title"><a href="single-standard.html">Visiting Theme Parks Improves Your Health.</a></h1>
                                
                            <div class="item-entry__date">
                                <a href="single-standard.html">June 12, 2017</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->
    
                </article> <!-- end article -->

                <article class="col-block">
                
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="single-standard.html" class="item-entry__thumb-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/post/guitarist-400.jpg"
                                     srcset="<?php echo get_template_directory_uri(); ?>/images/thumbs/post/guitarist-400.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/thumbs/post/guitarist-800.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="category.html">Music</a>
                            </div>
    
                            <h1 class="item-entry__title"><a href="single-standard.html">What Your Music Preference Says About You and Your Personality.</a></h1>
                                
                            <div class="item-entry__date">
                                <a href="single-standard.html">June 02, 2018</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->
    
                </article> <!-- end article -->

                <article class="col-block">
                
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="single-standard.html" class="item-entry__thumb-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/post/jump-400.jpg"
                                     srcset="<?php echo get_template_directory_uri(); ?>/images/thumbs/post/jump-400.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/thumbs/post/jump-800.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="category.html">Relationships</a> 
                            </div>
    
                            <h1 class="item-entry__title"><a href="single-standard.html">Create Meaningful Family Moments.</a></h1>
                                
                            <div class="item-entry__date">
                                <a href="single-standard.html">June 02, 2018</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->
    
                </article> <!-- end article -->

                <article class="col-block">
                
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="single-standard.html" class="item-entry__thumb-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/post/flowers-400.jpg"
                                     srcset="<?php echo get_template_directory_uri(); ?>/images/thumbs/post/flowers-400.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/thumbs/post/flowers-800.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="category.html">Lifestyle</a>
                            </div>
    
                            <h1 class="item-entry__title"><a href="single-standard.html">Gardening: The Secret to Happiness.</a></h1>
                                
                            <div class="item-entry__date">
                                <a href="single-standard.html">June 01, 2018</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->
    
                </article> <!-- end article -->

                <article class="col-block">
                
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="single-standard.html" class="item-entry__thumb-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/post/woodcraft-400.jpg"
                                     srcset="<?php echo get_template_directory_uri(); ?>/images/thumbs/post/woodcraft-400.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/thumbs/post/woodcraft-800.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="category.html">Creativity</a>
                            </div>
    
                            <h1 class="item-entry__title"><a href="single-standard.html">An Examination of Minimalistic Design.</a></h1>
                                
                            <div class="item-entry__date">
                                <a href="single-standard.html">May 30, 2018</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->
    
                </article> <!-- end article -->

                <article class="col-block">
                
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="single-standard.html" class="item-entry__thumb-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/post/fuji-400.jpg"
                                     srcset="<?php echo get_template_directory_uri(); ?>/images/thumbs/post/fuji-400.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/thumbs/post/fuji-800.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="category.html">Creativity</a>
                            </div>
    
                            <h1 class="item-entry__title"><a href="single-standard.html">What Skills Are Required For a Photographer?</a></h1>
                                
                            <div class="item-entry__date">
                                <a href="single-standard.html">May 30, 2018</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->
    
                </article> <!-- end article -->

                <article class="col-block">
                
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="single-standard.html" class="item-entry__thumb-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/post/beetle-400.jpg"
                                     srcset="<?php echo get_template_directory_uri(); ?>/images/thumbs/post/beetle-400.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/thumbs/post/beetle-800.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="category.html">Lifestyle</a>
                            </div>
    
                            <h1 class="item-entry__title"><a href="single-standard.html">Throwback To The Good Old Days.</a></h1>
                                
                            <div class="item-entry__date">
                                <a href="single-standard.html">May 28, 2018</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->
    
                </article> <!-- end article -->

                <article class="col-block">
                
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="single-standard.html" class="item-entry__thumb-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/post/sydney-400.jpg"
                                     srcset="<?php echo get_template_directory_uri(); ?>/images/thumbs/post/sydney-400.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/thumbs/post/sydney-800.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="category.html">Travel</a> 
                            </div>
    
                            <h1 class="item-entry__title"><a href="single-standard.html">Planning Your First Trip To Sydney.</a></h1>
                                
                            <div class="item-entry__date">
                                <a href="single-standard.html">May 28, 2018</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->
    
                </article> <!-- end article -->

            </div> <!-- end entries -->
        </div> <!-- end entries-wrap -->

        <div class="row pagination-wrap">
            <div class="col-full">
                <nav class="pgn" data-aos="fade-up">
                    <ul>
                        <li><a class="pgn__prev" href="#0">Prev</a></li>
                        <li><a class="pgn__num" href="#0">1</a></li>
                        <li><span class="pgn__num current">2</span></li>
                        <li><a class="pgn__num" href="#0">3</a></li>
                        <li><a class="pgn__num" href="#0">4</a></li>
                        <li><a class="pgn__num" href="#0">5</a></li>
                        <li><span class="pgn__num dots">…</span></li>
                        <li><a class="pgn__num" href="#0">8</a></li>
                        <li><a class="pgn__next" href="#0">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </section> <!-- end s-content -->


    <!-- s-extra
    ================================================== -->
    <section class="s-extra">

        <div class="row">

            <div class="col-seven md-six tab-full popular">
                <h3>Popular Posts</h3>

                <div class="block-1-2 block-m-full popular__posts">
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/small/tulips-150.jpg" alt="">
                        </a>
                        <h5>10 Interesting Facts About Caffeine.</h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="#0">John Doe</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2018-06-14">Jun 14, 2018</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/small/wheel-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">Visiting Theme Parks Improves Your Health.</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="#0">John Doe</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2018-06-12">Jun 12, 2018</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/small/shutterbug-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">Key Benefits Of Family Photography.</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="#0">John Doe</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2018-06-12">Jun 12, 2018</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/small/cookies-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">Absolutely No Sugar Oatmeal Cookies.</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2018-06-12">Jun 12, 2018</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/small/beetle-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">Throwback To The Good Old Days.</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="#0">John Doe</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2018-06-12">Jun 12, 2018</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/thumbs/small/salad-150.jpg" alt="">
                        </a>
                        <h5>Healthy Mediterranean Salad Recipes</h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2018-06-12">Jun 12, 2018</time></span>
                        </section>
                    </article>
                </div> <!-- end popular_posts -->
            </div> <!-- end popular -->

            <div class="col-four md-six tab-full end">
                <div class="row">
                    <div class="col-six md-six mob-full categories">
                        <h3>Categories</h3>
        
                        <ul class="linklist">
                            <li><a href="#0">Lifestyle</a></li>
                            <li><a href="#0">Travel</a></li>
                            <li><a href="#0">Recipes</a></li>
                            <li><a href="#0">Management</a></li>
                            <li><a href="#0">Health</a></li>
                            <li><a href="#0">Creativity</a></li>
                        </ul>
                    </div> <!-- end categories -->
        
                    <div class="col-six md-six mob-full sitelinks">
                        <h3>Site Links</h3>
        
                        <ul class="linklist">
                            <li><a href="#0">Home</a></li>
                            <li><a href="#0">Blog</a></li>
                            <li><a href="#0">Styles</a></li>
                            <li><a href="#0">About</a></li>
                            <li><a href="#0">Contact</a></li>
                            <li><a href="#0">Privacy Policy</a></li>
                        </ul>
                    </div> <!-- end sitelinks -->
                </div>
            </div>
        </div> <!-- end row -->

    </section> <!-- end s-extra -->


    <!-- s-footer
    ================================================== -->
    <?php get_footer('./footer.php') ?> <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

    <?php wp_footer(); ?>
</body>

</html>