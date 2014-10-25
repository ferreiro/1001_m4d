
<?php comment_form(); ?>
 
<!-- Edit the better commments going to >> functions -->
<div class="Comments">
<?php wp_list_comments(
    array(
      'callback' => 'better_comments'
      ));
?>
</div>
