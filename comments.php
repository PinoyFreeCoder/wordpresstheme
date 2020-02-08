<div class="comments">
    <h3>Comments</h3>

    <?php

    $defaults = array(
        'walker'            => null,
        'max_depth'         => '',
        'style'             => 'ul',
        'callback'          => null,
        'end-callback'      => null,
        'type'              => 'all',
        'page'              => '',
        'per_page'          => '',
        'avatar_size'       => 60,
        'reverse_top_level' => null,
        'reverse_children'  => '',
        'format'            => current_theme_supports( 'html5', 'comment-list' ) ? 'html5' : 'xhtml',
        'short_ping'        => false,
        'echo'              => true,
    );


    ?>

    <?php wp_list_comments($defaults, $comments);
    

     $comments_args = array(

        'label_submit' => 'Send',
        'class_submit' => 'btn btn-primary',
        'title_reply' => 'Write a reply or comment',
        'comment_notes_after' => '',
        'comment_field' => '<p class="comment-form-comment"><label>Write Comments</label><textarea id="comment" name="comment" cols="35" rows="8" maxlenght="300" required="required" class="form-control"></textarea></p>'


     );

     comment_form($comments_args);
    
    
    
    ?>






</div>