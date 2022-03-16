<?php 

//Declare Vars
$comment_send = 'POST COMMENT';
$comment_reply = 'Leave a Reply';
$comment_reply_to = 'Reply';
 
$comment_author = 'Name';
$comment_email = 'E-Mail';
$comment_body = 'Comment';
$comment_url = 'Website';
$comment_cookies_1 = '';
$comment_cookies_2 = 'Save my name, email, and website in this browser for the next time I comment.';
 
$comment_before = '';
 
$comment_cancel = 'Cancel Reply';
 
//Array
$comments_args = array(
    //Define Fields

    'fields' => array(
        //Author field
        'author' => '<div class="nameAndEmail"><div class="comment-form-author formGroup"><input id="author" class="form-control" name="author" placeholder="' . $comment_author .'"></input></div>',
        'email' => '<div class="comment-form-email formGroup"><input class="form-control" id="email" name="email" placeholder="' . $comment_email .'"></input></div></div>',

        //URL Field
        'url' => '<div class="comment-form-url formGroup"><input class="form-control" id="url" name="url" placeholder="' . $comment_url .'"></input></div>',
        //Cookies
        'cookies' => '<div class="checkBoxDiv formGroup mt-4"><input type="checkbox" required>' . $comment_cookies_1 . $comment_cookies_2.'</div>',
    ),
    // Change the title of send button
    'label_submit' => __( $comment_send ),
    // Change the title of the reply section
    'title_reply' => __( $comment_reply ),
    // Change the title of the reply section
    'title_reply_to' => __( $comment_reply_to ),
    //Cancel Reply Text
    'cancel_reply_link' => __( $comment_cancel ),
    // Redefine your own textarea (the comment body).
    'comment_field' => '<div class="comment-form-comment"><textarea  class="form-control" id="comment" name="comment" aria-required="true" placeholder="' . $comment_body .'"></textarea></div>',
    //Message Before Comment
    'comment_notes_before' => __( $comment_before),
    // Remove "Text or HTML to be displayed after the set of comment fields".
    'comment_notes_after' => '',
    //Submit Button ID
    'id_submit' => __( 'comment-submit' ),
);
comment_form( $comments_args );



?>




