<?php
$categories_classes_map = [
    'Создание веб-сайта' => 'site-development',
    'Поддержка веб-сайта' => 'site-support',
    'SEO-оптимизация' => 'seo-optimization',
    'Контекстная реклама' => 'context-ads',
    'Таргет' => 'target',
    'Дизайн' => 'design',
    'Копирайтинг' => 'copyrighting',
    'Маркетинг' => 'marketing'
];
$project_image = get_field('projects_page_image') ? get_field('projects_page_image') : get_the_post_thumbnail_url();
$subcategory = get_field('project_service_subcategory');
if (!is_array($subcategory)) $subcategory = array($subcategory);
$category_class = [];
foreach ($subcategory as $subcat) {
    $category_class[] = $categories_classes_map[$subcat];
}
$category_class = array_unique($category_class);
$category_classes_str = implode(' ', $category_class);
?>
<div class="masonry__item  <?php echo $category_classes_str ?>">
    <div data-anim="slide-up" class="portfolioCard -type-2 -hover shadow-light">
        <div class="ratio">
            <div class="portfolioCard__img">
                <div class="portfolioCard__img__inner">
                    <div class="bg-image js-lazy" data-bg="<?php echo $project_image ?>"></div>
                </div>
            </div>

            <div class="portfolioCard__content text-center">
                <a href="#" class="portfolioCard__category text-light mb-8"><?php echo implode(', ', $subcategory) ?></a>
                <h3 class="portfolioCard__title text-3xl md:text-2xl fw-600 text-white"><?php the_title() ?></h3>
            </div>
            <?php if (get_post_status() === 'publish') { ?>
            <a href="<?php the_permalink(); ?>" data-barba class="portfolioCard__link"></a>
            <?php } ?>
        </div>
    </div>
</div>
