<form method="post" action="<?php echo $this->post_url ?>">
    <p class="comment-form-author">
        <input type="text" name="post_title" value="" placeholder="Post Title....">
    </p>
    <p class="comment-form-comment">
        <textarea name="post_content" placeholder="Post Content...."></textarea>
    </p>
    <?php echo \Brain\Nonces\formField($this->nonce);?>
    <input type="hidden" name="action" value="create_post">
    <button type="submit">Submit</button>
</form>
