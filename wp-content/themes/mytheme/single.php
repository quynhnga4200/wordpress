<?php get_header() ; ?>
<?php 
if ($wp_query->have_posts()){
    while($wp_query->have_posts()){
        $wp_query->the_post();
        echo the_title('<h1>','<h1>');
        echo "<p>".the_content()."</p>";
        echo "Writen by: " .the_author();
        $comments_args = array(
            // Change the title of send button 
            'label_submit' => __( 'Send', 'textdomain' ),
            // Change the title of the reply section
            'title_reply' => __( 'Write a Reply or Comment', 'textdomain' ),
            // Remove "Text or HTML to be displayed after the set of comment fields".
            'comment_notes_after' => '',
            // Redefine your own textarea (the comment body).
            'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',

    );
    comment_form( $comments_args );
    }
}

?>
<?php get_footer(); ?>
