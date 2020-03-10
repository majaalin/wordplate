<?php get_header(); ?>

<div class="row mt-5 mb-5">
        <div class="col">
        <?php if (have_posts()): ?>

    <?php while (have_posts()): the_post(); ?> 
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
    <?php endwhile; ?>

    <?php endif; ?>
        </div>

    <?php 
    $args = [
        'numberposts' => 2,
        'order' => 'desc',
    ];

    $latestPosts = get_posts($args);

    ?>
    <div class="col-6">
        <?php foreach ($latestPosts as $post): setup_postdata($post)?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_excerpt(); ?></p>
        <?php endforeach; ?>
        <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
More blog posts</a>
    </div>
    </div> 

<?php get_footer(); ?>