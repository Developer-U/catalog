<?php
$popup_text = '';
// Получаем ID текущей страницы
global $wp_query;
$page_id = $wp_query->post->ID;
if ($page_id) {
    $popup_title = get_field('request_popup_title', $page_id);
    if (!$popup_title) $popup_title = 'Оставить заявку';
    $popup_text = get_field('request_popup_text', $page_id);
}
?>
<div id="modal-contact-form" style="display: none">
    <div class="row">
        <div class="col-lg-6">
            <div class="py-32 px-32">
                <?php echo $popup_text ?>
            </div>
        </div>
        <div class="col-lg-6">
            <h4 class="mb-32"><?php echo $popup_title ?></h4>
            <?php echo do_shortcode('[contact-form-7 id="9" title="Контактная форма 1"]') ?>
        </div>
    </div>
</div>
