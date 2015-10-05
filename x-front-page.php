<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header>

<div class="row">
    <div class="main large-4-centered columns">
        <h1 class="tk-futura-pt">Hello, I'm Nelle!</h1>

        <p>Thank you for taking the time to visit my portfolio site. Sorry to block your entry, but the site is undergoing renovations and some much-needed upgrades.</p> 

        <p>If you are interested in my work, check out my doodles on <a href="https://dribbble.com/nellemcdade" target="_blank">dribbble</a>, thoughts on <a href="https://twitter.com/nelle_mcdade" target="_blank">twitter</a>, and my most recent projects, Button&#39;s new <a href="https://www.usebutton.com/" target="_blank">website</a> and the <a href="https://app.usebutton.com/" target="_blank">developer dashboard.</a></p>

        <p>For questions regarding potential projects please email me at <a href="mailto:nellemcdade@gmail.com">nellemcdade@gmail.com.</a></p>

        <p>Thanks for listening.</p>
    </div>
</div>


<section class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>