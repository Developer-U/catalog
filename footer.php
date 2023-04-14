<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress*/

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->


<?php if (is_front_page()) {
    get_template_part( 'template-parts/blocks/block-footer-white' );
} else {
    get_template_part( 'template-parts/blocks/block-footer-black' );
}?>

</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js"></script>
<script>
	window.addEventListener('DOMContentLoaded', function(){ 
	
		// Маска телефонного номера
		let selector = $('input[type="tel"]');
		$(selector).inputmask({"mask": "+7(999) 999-9999"}); 

		// Ограничим число символов в превью статей "Мы в СМИ"
		var str = $('.post-descr').html();
			str = str.substr(0,80) + '...';//к примеру, если величина блока 200 символов.
		$('.post-descr').html(str);


	});
</script>
</body>
</html>
