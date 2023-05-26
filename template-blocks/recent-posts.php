<?php

// TODO
// https://www.wpexplorer.com/
// 1 - view block logic
// 2 - about thumbs
// 3 - finish design   
const BLOCK_TITLE = 'Recent Posts from the Blog';
const view_blog_link_text = 'View blog';
const IMAGE_PLACEHOLDER_ALT_TEXT = "wordpress tutorials last post";
const IMAGE_PLACEHOLDER_LAST_ALT_TEXT = "wordpress tutorial post";

// Custom query setup
$args = array( 
	'post_type' => 'post',
  'posts_per_page' => 4,  
 );
$custom_query = new WP_Query( $args );
?>

<?php if( isset($custom_query) ) : ?>
  <div id="home-recent-posts" class="py-4 home-recent-posts-block">
    <h4 class="text-center pb-3">
      <?= BLOCK_TITLE ?>
    </h4>
    
    <div class="row">
    <?php 
      if ( $custom_query->have_posts() ) : $n = 0; // set iteration number to use it for colside dividing 
      
        while ( $custom_query->have_posts() ) : $custom_query->the_post(); 
        $n = ++$n;
      
        if ($n === 1) :
      ?>

        <!-- left  -->
          <div class="col-md-7">
            <article class="latest">
              <div class="image pb-4">
                <!-- <a href="<?php //the_permalink() ?>" title="<?php //the_title() ?>"> -->
                  <?php if ( has_post_thumbnail() ) : the_post_thumbnail('large', array( 'class' => 'img-fluid') ) ?>
                    <?php else : ?>
                    <img src="<?= IMAGE_PLACEHOLDER_CUSTOM ?>" class="image-placeholder img-fluid" 
                      alt="<?= IMAGE_PLACEHOLDER_ALT_TEXT ?>" 
                      loading="lazy"
                    >
                  <?php endif ?>
                <!-- </a> -->
              </div>
              <div class="date text-secondary"><?php the_time( 'F d, y' ) ?></div>
              <header class="pt-2">
                <h6>
                  <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                </h6>
              </header>
              <p class="excerpt"><?php wp_trim_words( get_the_excerpt(), 30, ' ...') ?></p>
            </article>
          </div><!-- end .left -->

          <!-- right -->
          <div class="col-md-5">
            <?php endif ?>
              <?php if ($n !== 1) : // generate posts lists in right side ?>
              <article class="small-thumbs clr mb-4">
                <div class="image">
                  <?php if ( has_post_thumbnail() ) : the_post_thumbnail('medium', array( 'class' => 'img-fluid')) ?>
                    <?php else : ?>
                    <img src="<?= IMAGE_PLACEHOLDER_250x150 ?>" 
                      class="image-placeholder img-fluid" 
                      alt="<?= IMAGE_PLACEHOLDER_LAST_ALT_TEXT ?>" 
                      loading="lazy"
                    >
                  <?php endif ?>
                </div>
                <div class="content">
                  <header>
                    <h6>
                      <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                    </h6>
                  </header>
                  <div class="date text-secondary"><?php the_time( 'F d, y' ) ?></div>
                </div>
              </article>
              <?php endif ?>
            <?php endwhile ?>
          <?php endif ?>
            <div class="blog-more-posts">
              <a href="<?php home_url('/') ?>/blog" class="link-primary">
                <?= view_blog_link_text ?>
              </a>
            </div>
          </div><!-- end .right  -->
    </div><!-- end .row  -->
  </div><!-- end #home-recent-posts  -->
  <?php wp_reset_postdata() ?>
<?php endif; ?>
