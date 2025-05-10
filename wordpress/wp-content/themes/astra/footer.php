<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php
	astra_content_after();

	astra_footer_before();

	astra_footer();

	astra_footer_after();
?>
	</div><!-- #page -->
<?php
	astra_body_bottom();
	wp_footer();
?>
<script>
document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    const calendar = document.querySelector("#wp-calendar");
    const caption = calendar?.querySelector("caption");
    const navPrev = document.querySelector(".wp-calendar-nav-prev a");
    const navNext = document.querySelector(".wp-calendar-nav-next a");

    if (caption) {
      const text = caption.innerText;

      caption.innerHTML = "";

      if (navPrev) {
        const prevLink = document.createElement("a");
        prevLink.href = navPrev.href;
        prevLink.className = "wp-calendar-nav-prev-link";
        prevLink.textContent = "이전달";
        caption.appendChild(prevLink);
        caption.append(" ");
      }

      caption.append(text);

      if (navNext && navNext.href) {
        caption.append(" ");
        const nextLink = document.createElement("a");
        nextLink.href = navNext.href;
        nextLink.className = "wp-calendar-nav-next-link";
        nextLink.textContent = "다음달";
        caption.appendChild(nextLink);
      }
    }
  }, 300);
});
</script>



	</body>
</html>
