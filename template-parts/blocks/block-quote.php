<?php
$quote_title = get_field('quote_title');
$quote_text = get_field('quote_text');
$quote_img = get_field('quote_img');
if ($quote_text) { ?>
<section class="layout-pt-sm layout-pb-sm bg-light-2">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-5 col-md-7">
				<div class="text-accent text-2xl mb-16">
                <?php echo $quote_title ?>
				</div>	
				<div class="text-xl mb-16">
                <?php echo $quote_text ?>
				</div>
                <?php echo $quote_img ?>
            </div>
        </div>
    </div>
</section>
<?php } ?>