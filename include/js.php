<!-- JAVASCRIPT FILES ========================================= -->
<script src="assets/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELEECT -->
<script src="assets/vendor/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="assets/vendor/masonry/masonry-4.2.2.js"></script><!-- MASONRY -->
<script src="assets/vendor/masonry/isotope.pkgd.min.js"></script><!-- ISOTOPE -->
<script src="assets/vendor/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="assets/vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="assets/vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script><!-- OWL-CAROUSEL -->
<script src="assets/vendor/particles/particles.js"></script>
<script src="assets/vendor/particles/particles-app.js"></script>
<script src="assets/js/dz.carousel.min.js"></script><!-- OWL-CAROUSEL -->
<script src="assets/js/dz.ajax.js"></script><!-- AJAX -->
<script src="assets/js/custom.min.js"></script><!-- CUSTOM JS -->
<script src="assets/vendor/rangeslider/rangeslider.js"></script><!-- CUSTOM JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js'></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Check if there's a hash in the URL
        if (window.location.hash) {
            var hash = window.location.hash.substring(1); // Remove the '#' from the hash
            scrollToSection(hash);
        }
    });

    function scrollToSection(id) {
        var element = document.getElementById(id);
        if (element) {
            var windowHeight = window.innerHeight;
            var scrollOffset = element.getBoundingClientRect().top - (windowHeight / 2) + (element.offsetHeight / 2);
            window.scrollTo({
                top: scrollOffset,
                behavior: 'smooth' // This enables smooth scrolling
            });
        }
    }
</script>