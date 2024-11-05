<?php get_header(); ?>


  <div id="content">
   
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
    
      <h1><?php the_permalink(  ); ?></h1>

      <?php the_content(); ?>
        
        <footer>
            <p class="byline">
                Author:
                <a href="<?php echo get_author_post_url( $post->post_author); ?>">
                  <?php the_autor(); ?>
                 </a>
                 Date:
                 <?php the_time('M, j, Y');?>
                Categores:
                <?php the_category( ',' ); ?>
                Tags:
                <?php the_tags('', '', ''); ?>
          
            </p>
        </footer>


    <?php endwhile; else: ?>
        <?php -e () ; ?>
        <?php endif; ?>
  </div>

<?php get_footer(); ?>