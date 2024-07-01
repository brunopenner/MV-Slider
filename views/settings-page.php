<!-- <form action="">
    <label for="test">Name</label>
    <input type="text" id="test" name="test">

    <label for="test">Phone number</label>
    <input type="text" id="test" name="test">

    <label for="textarea">Your message</label>
    <textarea name="textarea" id="textarea"></textarea>
</form>

<style>
    label,
    input,
    textarea {
        display: block;
        width: 100%;
        max-width: 500px;
    }
</style> -->

<div class="wrap">
    <h1><?php esc_html(get_admin_page_title()); ?></h1>
    <form action="options.php" method="POST">
        <?php
        settings_fields('mv_slider_group');
        do_settings_sections('mv_slider_page1');
        submit_button('Save Settings');
        ?>
    </form>
</div>