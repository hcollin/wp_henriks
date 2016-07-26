<?php
/*
 Template Name: Page with 2nd navigation
 *
 * This template is used for pages that want to show a second level navigation.
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

                    <div id="nav2nd" class="sidebar fixed menu-2nd m-all t-lof3 d-2of7 last-col" role="complementary">
                   
                        <?php if ( is_active_sidebar( 'nav2nd' ) ) : ?>

                            <?php dynamic_sidebar( 'nav2nd' ); ?>

                        <?php else : ?>


                        <?php endif; ?>

				    </div>

                

                    <main id="main" class="fixed-sidebar-left m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                            <header class="article-header">

                                <h1 class="page-title"><?php the_title(); ?></h1>

                                

                            </header>

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
                            </section>


                            <footer class="article-footer">

                <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

                            </footer>

                            <?php comments_template(); ?>

                        </article>

                        <?php endwhile; else : ?>

                                <article id="post-not-found" class="hentry cf">
                                        <header class="article-header">
                                            <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                                    </header>
                                        <section class="entry-content">
                                            <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                                    </section>
                                    <footer class="article-footer">
                                            <p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
                                    </footer>
                                </article>

                        <?php endif; ?>

                    </main>

				</div>

			</div>


<?php get_footer(); ?>
