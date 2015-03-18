<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die (esc_html__('Please do not load this page directly. Thanks!','AmazonBrazilNuts'));

	if ( post_password_required() ) { ?>

<p class="nocomments"><?php esc_html_e('This post is password protected. Enter the password to view comments.','AmazonBrazilNuts') ?></p>
<?php
		return;
	}
?>
<!-- You can start editing here. -->

<div id="comment-wrap">

<?php if ( have_comments() ) : ?>
	
	<h2><?php comments_number(esc_html__('0 Comments','AmazonBrazilNuts'), esc_html__('1 Comment','AmazonBrazilNuts'), '% '.esc_html__('Comments','AmazonBrazilNuts') );?></h2>
		
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<div class="comment_navigation_top clearfix">
			<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'AmazonBrazilNuts' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'AmazonBrazilNuts' ) ); ?></div>
		</div> <!-- .navigation -->
	<?php endif; // check for comment navigation ?>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<div class="comment_navigation_bottom clearfix">
			<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'AmazonBrazilNuts' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'AmazonBrazilNuts' ) ); ?></div>
		</div> <!-- .navigation -->
	<?php endif; // check for comment navigation ?>
		
	<?php if ( ! empty($comments_by_type['pings']) ) : ?>
		<div id="trackbacks">
			<h3 id="trackbacks-title"><?php esc_html_e('Trackbacks/Pingbacks','AmazonBrazilNuts') ?></h3>
			<ol class="pinglist">
				<?php wp_list_comments('type=pings&callback=et_list_pings'); ?>
			</ol>
		</div>
	<?php endif; ?>
<?php else : // this is displayed if there are no comments so far ?>
   <div id="comment-section" class="nocomments">
      <?php if ('open' == $post->comment_status) : ?>
         <!-- If comments are open, but there are no comments. -->
         
      <?php else : // comments are closed ?>
         <!-- If comments are closed. -->
            <div id="respond">
               
            </div> <!-- end respond div -->
      <?php endif; ?>
   </div>
<?php endif; ?>
<?php if ('open' == $post->comment_status) : ?>
	<?php comment_form( array('label_submit' => esc_attr__( 'Submit Comment', 'SimplePress' ), 'title_reply' => '<span>' . esc_attr__( 'Leave a Reply', 'AmazonBrazilNuts' ) . '</span>', 'title_reply_to' => esc_attr__( 'Leave a Reply to %s' )) ); ?>
<?php else: ?>

<?php endif; // if you delete this the sky will fall on your head ?>
</div>