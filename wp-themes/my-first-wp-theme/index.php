<!DOCTYPE html>

<html lang="de">
<head>
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>
    
<body <?php body_class() ?>>
    <header id="header"> 
    <h1><?php bloginfo('title'); ?></h1>
        
    <nav id="main-menu">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </nav>    
    </header>
    
    <main>
        
                <?php while ( have_posts() ) : the_post(); ?>

                        <div <?php post_class(); ?>> 
                            <h2 class="my-post-title"><?php the_title(); ?></h2>
                            <?php if ( has_post_thumbnail() ) : ?>
                            <div id="<?php the_ID(); ?>" class="my-post-thumbnail-wrapper">
                                
                                    
                               <div class="my-post-thumbnail">
                                   <?php the_post_thumbnail(); ?>
                                   
                                </div><!--.my-post-thumbnail-->
                            </div><!--.my-post-thumbnail-wrapper-->
                            <?php endif; ?> 
                        <p><?php the_content(); ?></p>
                        </div>
          
                <?php endwhile; ?>
    
    </main>
    
    <footer>

        <?php dynamic_sidebar( 'footer-widget' ); ?>
 
    </footer>
</body>    

</html>