<div class="header-img">
<?php

//if ( $post->post_parent )
//    $post_id = $post->post_parent;
//else
//    $post_id = $post->ID;
	
if (has_post_thumbnail())
	$post_id = $post->ID;
else
	$post_id = $post->post_parent;

if ( $thumbnail = get_the_post_thumbnail( $post_id, 'post-thumbnail' ) ) {
    echo $thumbnail;
}
?>
<!-- the above makes the parent page's featured image show up when there isn't one set on this page -->
</div>