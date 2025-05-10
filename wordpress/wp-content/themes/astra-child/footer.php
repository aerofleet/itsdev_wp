

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
  
<script>
function initDarkModeToggle() {
  const html = document.documentElement;
  const btn = document.getElementById("theme-toggle");

  if (!btn) {
    setTimeout(initDarkModeToggle, 100);
    return;
  }

  if (localStorage.getItem("theme") === "dark") {
    html.classList.add("theme-dark");
  }

  btn.addEventListener("click", () => {
    html.classList.toggle("theme-dark");
    const isDark = html.classList.contains("theme-dark");
    localStorage.setItem("theme", isDark ? "dark" : "light");
  });
}

document.addEventListener("DOMContentLoaded", initDarkModeToggle);
</script>

<!-- JS 코드 삽입 위치 -->

<?php
	wp_footer();
?>


</body>
</html>
