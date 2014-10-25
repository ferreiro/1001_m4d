<?php
function better_comments($comment, $args, $depth) {
 $GLOBALS['comment'] = $comment;
?>
	<div class="Comments">
		ddd

	</div>






 <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
 <div id="comment-<?php comment_ID(); ?>" class="comment-body">
 <div class="comment-body-inner">
 <div class="comment-avatar">
 <?php echo get_avatar($comment, $size = '45', $default = get_bloginfo('stylesheet_directory').'/images/default-avatar.png' ); ?>
 </div>
 <!-- END avatar -->
 <div class="comment-author vcard">
 <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
 </div>
 <!-- END comment-author vcard -->
 <?php if ($comment->comment_approved == '0') : ?>
 <em><?php _e('Your comment is awaiting moderation.') ?></em>
 <br />
 <?php endif; ?>
 <div class="comment-meta commentmetadata">
 <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a>
 <?php edit_comment_link(__('(Edit)'),'  ','') ?>
 </div>
 <!-- END comment-meta commentmetadata -->

 <?php comment_text() ?>

 <div class="reply">
 <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
 </div>
 <!-- END reply -->
 </div>
 <!-- END comment-body-inner -->
 </div>
 <!-- END comment -->
<?php
}
?>