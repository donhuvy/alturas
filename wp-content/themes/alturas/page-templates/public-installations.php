<?php
/**
 * Template Name: Artists in Residence
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div class="gray-background">
  <div class="wrap">
    <div class="intro">
      <div class="intro-content">
        <h1>Public Installations</h1>
        <h5>Alturas Foundation stimulates public dialogue on American culture by supporting public installations of art works from its collection. Beginning in 2001, the Foundation has installed works of art in communities from New York to California.</h5>
      </div>
    </div>
  </div>
</div>

<div class="wrap">
  <div class="intro secondary">
    <div class="intro-content">
      <h1>Installations</h1>
    </div>
  </div>

<?php
  $args = array(
    'post_type' => 'public_installations',
    'posts_per_page' => 7,
    'orderby' => 'date',
    'order' => 'asc',
    'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
    );
  query_posts($args);
  while(have_posts()): the_post(); ?>
  
  <?php if (has_post_thumbnail( $post->ID ) ):
  $imagebottom = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
  $imagebottom = $imagebottom[0]; 
  endif; ?>

    <div class="col2 image-block">
      <div class="image-block-background-image-wrapper">
        <div class="image-block-background-image" style="background: url('<?php echo $imagebottom; ?>') no-repeat 50% 50%; background-size:cover">
        </div>
      </div>
        <div class="image-block-content">
          <div class="image-block-content-inner">
            <h3><?php the_title(); ?></h3>
            <p>2013 - 2014</p>
          </div>
        </div>
    </div>

<?php endwhile;?>

</div>


<?php
get_footer();
