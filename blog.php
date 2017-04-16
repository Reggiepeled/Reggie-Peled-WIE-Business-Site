<?php 
/*
Template Name: Blog Posts
*/
?>

<?php get_header(); ?>
<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
    <div class="row">
        <div class="twelve columns">
            <header class="blog">
                <?php if ( has_post_thumbnail() ) { ?>
                    <figure>  
                        <?php       
                            the_post_thumbnail('full');
                      }?> 
                    </figure>
                    <h2>Slick’s Blog.&nbsp;&nbsp;&nbsp;&nbsp;<span>Great Tips and Tricks</span></h2>
            </header>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php if (have_posts()) : 
                while (have_posts()) : the_post(); ?> 
                    <div class="four columns post-wrapper">
                        <?php the_post_thumbnail('medium'); ?>
                        <div class="text-wrapper">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <h5><?php the_date(); ?></h5>
                            <?php the_excerpt(__('Continue reading »','example')); ?>
                            <h4><a href="<?php the_permalink(); ?>">Read More</a></h4>
                        </div>
                    </div> 
                        <?php
                    endwhile; ?>
                    <div class="navigation">
                        <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
                    </div>
                    <?php else: ?>
                        <div class="404-section">
                            <p><?php _e('None found.','example'); ?></p>
                        </div>
                <?php endif; 
                wp_reset_query(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>