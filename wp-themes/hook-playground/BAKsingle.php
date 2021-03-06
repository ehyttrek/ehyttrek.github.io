<!DOCTYPE html>
<html lang="de">
<head>
    <title><?php bloginfo('title'); ?></title>
    
    <style>
    
        body {
            background-color: red;
        }
    
    </style>
</head>
    
<body <?php body_class() ?>>
    

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

    
</body>    

</html>