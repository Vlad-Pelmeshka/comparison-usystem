<?php
/**
 * INDEX PAGE
 *
 */

get_header();

?>

<section class="not-found flex align-center justify-center">
<!--    <div class="uk-container 404-page">-->
    <div class="not-found__wrapper flex flow-column align-center justify-center">
        <div class="top-text text-size018 fw-semibold text-center">USystems</div>
        <h1 class="text-size0128 fw-semibold text-red">404</h1>
        <p class="subtitle text-size032 fw-medium">Sorry, the page you were looking for was <span class="fw-bold">not found.</span>
        </p>
        <div class="buttons flex align-center justify-between">
            <a class="btn btn-red" href="<?php echo home_url(); ?>">Return Home</a>
            <span>or</span>
            <a class="btn btn-red" href="#">Contact Us</a>
        </div>
    </div>

<!--    </div>-->
</section>


<?php get_footer(); ?>
