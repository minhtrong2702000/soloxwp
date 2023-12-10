<?php
/**
 * The template for displaying the footer.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

global $flatsome_opt;
?>

</main>

<footer id="footer" class="footer-wrapper">

	<?php do_action('flatsome_footer'); ?>
   <!-- cuộn số -->
	<script type="text/javascript">
    var a = 0;
jQuery(window).scroll(function() {

  var oTop = jQuery('.number-srcoll').offset().top - window.innerHeight;
  if (a == 0 && jQuery(window).scrollTop() > oTop) {
    jQuery('.number').each(function() {
      var $this = jQuery(this),
        countTo = $this.attr('count-up');
      jQuery({
        countNum: $this.text() }).animate({
          countNum: countTo
        },

        {

          duration: 1500,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');  
          }

        });
    });
    a = 1;
  }
});
</script>
<!-- slider ficky -->
<script>
(function ($){
	$(document).ready(function() {
		$('.slider-testimonials').each(function(){
			$(this).find('style[scope="scope"]').remove();
			$(this).lazyFlickity({
			cellAlign:'left',
			contain:true,
			autoPlay: 1500,
			groupCells:1,
			wrapAround: true,
			prevNextButtons:true,
			pageDots:true,
			});
		});
	});
})(jQuery);
</script>

<!-- // thanh doi con tro chuot -->
<script type="text/javascript">
var cursor = document.querySelector('.cursor');
var cursorinner = document.querySelector('.cursor2');
var a = document.querySelectorAll('a');

document.addEventListener('mousemove', function(e){
  var x = e.clientX;
  var y = e.clientY;
  cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
});

document.addEventListener('mousemove', function(e){
  var x = e.clientX;
  var y = e.clientY;
  cursorinner.style.left = x + 'px';
  cursorinner.style.top = y + 'px';
});
// document.addEventListener('click',()=>{
//   cursor.classList.add('expanding')
// });
document.addEventListener('mousedown', function(){
  cursor.classList.add('click');
  cursorinner.classList.add('cursorinnerhover')
});

document.addEventListener('mouseup', function(){
  cursor.classList.remove('click')
  cursorinner.classList.remove('cursorinnerhover')
});

a.forEach(item => {
  item.addEventListener('mouseover', () => {
    cursor.classList.add('hover');
  });
  item.addEventListener('mouseleave', () => {
    cursor.classList.remove('hover');
  });
})
</script>
<!-- load trang -->
<script>
	jQuery(window).load(function () {
            // Preloader
            jQuery('.preloader').fadeOut();
            jQuery('.preloader__image').delay(550).fadeOut('slow');
        });
</script>
</footer>

</div>
<?php wp_footer(); ?>

</body>
</html>
