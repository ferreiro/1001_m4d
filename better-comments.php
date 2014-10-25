<?php
function better_comments($comment, $args, $depth) {
 $GLOBALS['comment'] = $comment;
?>	
<div <?php comment_class(); ?> class="Comment" id="li-comment-<?php comment_ID() ?>">
	<div id="comment-<?php comment_ID(); ?>">
		<div class="CommentAvatar">
			<span></span>
		</div>
		<div class="CommentInfo">
			<?php printf(__('<div class="Autor">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
			<?php if ($comment->comment_approved == '0') : ?>
				<?php _e('Your comment is awaiting moderation.') ?>
			<?php endif; ?>

			<?php comment_text() ?>

			<div class="comment-meta commentmetadata">
			<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a>
			<?php edit_comment_link(__('(Edit)'),'  ','') ?>
			</div>
			<!-- END comment-meta commentmetadata -->

			<div class="Commentreply">
				<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			</div>
			
		</div>

	</div>
</div>

<!-- 

	 <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	 <div  class="comment-body">
	 <div class="comment-body-inner">
	 <div class="comment-avatar">
	 <?php echo get_avatar($comment, $size = '45', $default = get_bloginfo('stylesheet_directory').'/images/default-avatar.png' ); ?>
	 </div>

 		
 -->



<?php
}
?>