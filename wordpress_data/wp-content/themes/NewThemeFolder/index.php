<?php get_header(); ?>
    <div id="ttr_main" class="row">
        <div id="ttr_content" class="col-lg-8 col-sm-8 col-md-8 col-xs-12">

            <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                     <h2> <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                             <?php the_title(); ?></a>
                     </h2>
                        <p>Posted on <?php the_time('F jS, Y') ?></p>
                      <p> By <?php the_author(); ?></p>
                        <p><?php the_content(__('(more...)')); ?></p>

                        <p>Latest comments</p>
                        <?php $comments = get_comments('status=approve&number=5'); ?>
                        <ul style="font-size:5px">
                            <?php foreach ($comments as $comment) { ?>
                                <h1 style="font-size:10px">
                                    <div style="float:left;margin-right:3px"></div>
                                    <em style="font-size:12px"><?php echo strip_tags($comment->comment_author); ?></em>
                                    (<a href="<?php echo get_option('home'); ?>/?p=<?php echo($comment->comment_post_ID); ?>
                                    /#comment-<?php echo($comment->comment_ID); ?>">link</a>)<br>

                                </h1>
                            <?php }  ?>
                        </ul>
                    </div>

                <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
               <?php get_sidebar(); ?>
            </div>
        </div>

    </div>

<?php get_footer(); ?>