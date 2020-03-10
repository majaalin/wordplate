<?php get_header(); ?>

<div class="row">
    <div class="col">
        <?php if (have_posts()) : ?>

            <?php while (have_posts()): the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <?php if (get_field('email')) : ?>
                <p>Contact: <a href="mailto:<?php the_field('email')?>"><?php the_field('email')?></a></p>
                <?php endif ?>
                <?php if (get_field('github')): ?>
                <p><a href="<?php the_field('github')?>"><?php the_field('github')?></a></p>
                <?php endif; ?>

                <?php the_content(); ?>

                <?php the_date();?>

                <?php next_post_link('%link', 'Next'); ?>
                <?php previous_post_link('%link', 'Previous'); ?>

            <?php endwhile; ?>

        <?php endif; ?>
    </div><!-- /col -->
</div><!-- /row -->

<?php get_footer(); ?>