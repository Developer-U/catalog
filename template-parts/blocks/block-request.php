<?php get_template_part('template-parts/blocks/block-modal-contact-form');

$text_color = 'text-white';
$button_colors = '-white text-black';
$shapes_color = '-black -shadow-dark';

// Получаем ID текущей страницы
global $wp_query;
$page_id = $wp_query->post->ID;

if ($page_id) {
    $background_type = get_field('request_background_type', $page_id);
    if ($background_type === 'Изображение') {
        $background_image = get_field('request_background_image', $page_id);
        $text_color = 'text-white';
        $button_colors = '-white text-black';
    } 
    $title = get_field('request_title', $page_id);
    $text =  get_field('request_text', $page_id);
    $button_text = get_field('request_button_text', $page_id);
    $popup_text = get_field('request_popup_text', $page_id);
}
if (!$title) $title = 'Поможем и вам продать недвижимость!';
if (!$text) $text = 'Оставьте заявку на добавление вашего объекта недвижимости';
if (!$button_text) $button_text = 'Оставить заявку';


?>
<!-- section start -->
<?php if ($background_type == 'По умолчанию') { ?>
    <section class="layout-pt-lg layout-pb-lg bg-dark-2 <?php if (is_front_page()) echo 'bg-dark-2'?>" style="overflow: hidden; height: auto">
    
<?php } ?>
<?php if ($background_type == 'Изображение' || !$background_type) { ?>
    <section class="layout-pt-lg layout-pb-lg" data-parallax="0.7">
    <div data-parallax-target class="overlay-black-md bg-image js-lazy" data-bg="<?php echo $background_image ?>"></div>
<?php } ?>
    <!-- container start -->
    <div class="container z-5">
        <!-- row start -->
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <h2 class="js-title text-5xl sm:text-5xl xs:text-4xl leading-sm fw-700 <?php echo $text_color ?>">
                    <?php echo $title ?>
                </h2>
                
                <p class="js-text text-xl md:text-lg <?php echo $text_color ?> mt-16">
                    <?php echo $text ?>
                </p>

                <a href="#modal-contact-form" class="js-button glightbox button -md <?php echo $button_colors ?> mt-32" data-glightbox="width: 900; height: auto;">
                    <?php echo $button_text ?>
                </a>
            </div>
        </div>
        <!-- row end -->
    </div>
    <!-- container end -->
</section>
<!-- section end -->

 
