<?php 


// wordpress commnets form  start
function custom_comment_form_fields($fields) {
    $commenter = wp_get_current_commenter();
    $req = get_option('require_name_email');    

    $fields = array(
        'author' => '<div class="alliput">'.'<input type="text" name="author" id="author" placeholder="' . esc_attr__('Name*', 'textdomain') . '" value="' . esc_attr($commenter['comment_author']) . '" ' . ($req ? 'required' : '') . '>',

        'email' => '<input type="email" name="email" id="email" placeholder="' . esc_attr__('Email', 'textdomain') . '" value="' . esc_attr($commenter['comment_author_email']) . '" ' . ($req ? 'required' : '') .'>',        
        
        'subject' => '<input type="subject" name="url" id="url" placeholder="' . esc_attr__('Subject', 'textdomain') . '" value="' . esc_attr($commenter['comment_author_url']) .'">, </div>',

    );
    return $fields;
}
add_filter('comment_form_default_fields', 'custom_comment_form_fields');

// Customize the comment form textarea
function custom_comment_form_comment($comment_field) {
    $comment_field = '<textarea rows="6" id="comment" name="comment" placeholder="' . esc_attr__('Your Comment Here...', 'textdomain') . '" required></textarea>';
    return $comment_field;
}

add_filter('comment_form_field_comment', 'custom_comment_form_comment');


// Move the comment textarea to the bottom
function move_comment_textarea_to_bottom($fields) {
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;

    return $fields;
}

add_action('comment_form_fields', 'move_comment_textarea_to_bottom');


// Customize the comment form checkbox
function custom_comment_form_agree($fields) {
    $fields['cookies'] = '<div class="col-xxl-12"><div class="postbox__comment-agree d-flex align-items-start mb-25">' .
        '<input class="e-check-input" type="checkbox" id="e-agree" name="wp-comment-agree" value="1" checked>' .
        '<label class="e-check-label" for="e-agree">' . esc_html__('Save my name, email, and website in this browser for the next time I comment.', 'textdomain') . '</label></div></div>';

    return $fields;
}

// add_filter('comment_form_fields', 'custom_comment_form_agree');

// Customize the submit button
function custom_comment_form_submit_button($submit_button) {
    $submit_button = '<button type="submit" class="custom-btn">' . esc_html__('Submit Comment', 'textdomain') . '</button>';
    return $submit_button;
}

add_filter('comment_form_submit_button', 'custom_comment_form_submit_button');
// comments for end 

// custom_comment_list
function custom_comment_list($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;

    if ($comment->comment_type == 'pingback' || $comment->comment_type == 'trackback') {
        // Display pingbacks and trackbacks differently if needed
        ?>
        <li class="pingback">
            <p><?php esc_html_e('Pingback:', 'biddut'); ?> <?php comment_author_link(); ?></p>
        </li>
        <?php
    } else {
        // Display regular comments
        ?>           
        <li <?php comment_class('comment'); ?> id="comment-<?php comment_ID(); ?>">
            <div class="img">
                    <?php echo get_avatar($comment, 150); ?>
            </div>
            <div class="commentsarea">
                <div class="name-replaybtn">
                    <div class="name">                           
                        <h6><?php comment_author(); ?></h6>                            
                        <span class="post-meta"><?php comment_date(); ?></span>
                    </div>
                    <div class="replaybtn">
                        <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
                        <a class="d-none" href="#"><i class="fa-regular fa-arrow-turn-down-left"></i>Reply</a>                                        
                    </div>
                </div>
                    <?php comment_text(); ?>
            </div>                                
    <?php
    }
}

// Use the custom callback for wp_list_comments
function custom_comments_list_args($args) {
    $args['callback'] = 'custom_comment_list';
    return $args;
}

add_filter('wp_list_comments_args', 'custom_comments_list_args');