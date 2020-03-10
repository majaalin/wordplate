<?php /* Template Name: Example Template */ ?>

<?php get_header(); ?>

<div class="row mt-5 mb-5">
    <div class="col">
        <?php if (have_posts()) : ?>

            <?php while (have_posts()): the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <?php the_content(); ?>

            <?php endwhile; ?>

        <?php endif; ?>
    </div><!-- /col -->
</div><!-- /row -->

<?php 

$args = [
    'post_type' => 'student'
];

$students = get_posts($args);

?>

<div class="col-6">
    <?php foreach ($students as $student): setup_postdata($student)?>
    <li><a href="<?php echo $student->guid?>"><?php echo $student->post_title; ?></a></li>
    <?php $terms = get_the_terms($student, 'skill');?>
    <?php foreach ($terms as $term): ?>
    <ul>
<li><?php echo $term->name; ?></li>
</ul>
    <?php endforeach; ?>
    <?php endforeach; ?>
</div> 

<?php get_footer(); ?>