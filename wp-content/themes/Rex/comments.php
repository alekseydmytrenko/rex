<?php
$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );
$fields =  array(
    'author' => '<div class="form-group"><input id="author" type="text" name="author" placeholder="' . __('Name') . '" class="form-control" value="' . esc_attr( $commenter['comment_author'] ) . '"/></div>',

    'email'  => '<div class="form-group"><input id="email" type="email" name="email" placeholder="' . __('Enter Email'). '" class="form-control" value="' . esc_attr(  $commenter['comment_author_email'] ) . '"/></div>',
);

$comments_args = array(
    'fields'                =>  apply_filters( 'comment_form_default_fields', $fields),

    'comment_field'         => '<div class="form-group"><textarea id="comment" name="comment" class="form-control" aria-required="true"></textarea></div>',

    'title_reply'           => '<h2>' . __('Post a comment') . '</h2>',
    'comment_notes_before'  => '',
    'comment_notes_after'  => '<button class="button button-default" data-text="Comment" type="submit"><span>' . __('Comment') . '</span></button>',
    'label_submit' => 'Send',

);

comment_form($comments_args);