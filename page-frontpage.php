<?php
/*
 Template Name: Front Page Template
 *
 * The Template that is used in the front page
*/
?>


<?php get_header('frontpage'); ?>

			<div id="content" class="frontpage">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="frontpage m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

									<!--<p class="byline vcard">
										<?php printf( __( 'Posted', 'bonestheme').' <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> '.__( 'by',  'bonestheme').' <span class="author">%3$s</span>', get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
									</p>-->

								</header> <?php // end article header ?>

								<section class="entry-content cf" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
										the_content();

										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										 *
										 * Also, breaking content up into multiple pages is a horrible experience,
										 * so don't do it. While there are SOME edge cases where this is useful, it's
										 * mostly used for people to get more ad views. It's up to you but if you want
										 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
										 *
										 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
										 *
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
								</section> <?php // end article section ?>

								<footer class="article-footer cf">

								</footer>

								

							</article>

							<?php endwhile; endif; ?>

							<div id="fp-left-column" class="fp-column left-column m-all t-1of3 d-2of7 first-col cf" role="complementary">

								<?php if ( is_active_sidebar( 'frontpage_left' ) ) : ?>

									<?php dynamic_sidebar( 'frontpage_left' ); ?>

								<?php else : ?>

								<?php endif; ?>

							</div>

							<div id="fp-middle-column" class="fp-column middle-column m-all t-1of3 d-3of7 cf" role="complementary">

								<?php if ( is_active_sidebar( 'frontpage_middle' ) ) : ?>

									<?php dynamic_sidebar( 'frontpage_middle' ); ?>

								<?php else : ?>

								<?php endif; ?>

							</div>




						</main>

						<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
