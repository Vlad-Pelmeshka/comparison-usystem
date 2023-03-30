<?php

get_header();


/* Start search */
$search_query = get_search_query();

if (isset($_GET['s'])) {
    $search_query = $_GET['s'];
}

$args = array(
    's' => $search_query,
    'post_type' => array('post', 'page', 'product'),
    // 'posts_per_page' => 10
);

$query = new WP_Query($args);

$total_results = $query->found_posts; // загальна кількість результатів

/* End search */

$main_block = array(
    'title' => 'Results for',
    'subtitle' => 'USystems',
    'text' => '“' . $search_query . '”',
    'button_group' => array(
        'show_button' => false
    ),
);


?>

<section class="
	search_section
">

    <div class="wrapper-container search-container">
        <?php include('components/parts/main_block-part.php'); ?>
        <div class="search-block">

            <form class="uk-search uk-search-navbar uk-width-1-1 flex align-center justify-center" action="/">
                <input class="uk-search-input text-size014" name="s" type="search"
                       placeholder="Search..."
                       value="<?= $search_query ?>"
                       aria-label="Search" autofocus>
                <button class="btn btn-red" type="submit">Search</button>
            </form>
        </div>
    </div>

    <div class="wrapper-container">
        <div class="found-block">
            <h2 class="text-size036 fw-semibold text-black">Found
                <span class="text-red"><?= $total_results ?></span> results
            </h2>
            <div class="search-line text-size018 text-black popins fw-regular"><?= $search_query ?></div>
        </div>

        <div class="search-list flex wrap">
            <?php
            if ($query->have_posts()):
                while ($query->have_posts()): $query->the_post();
                    ?>
                    <div class="block flex align-center justify-center flow-column">
                        <div class="breadcrumbs fw-semibold text-size018 text-red">Product</div>
                        <div class="title text-size032 text-black fw-semibold"><?= get_the_title(); ?></div>
                        <div class="btn btn-red"><a href="<?= get_permalink(); ?>">View Page</a></div>
                    </div>

                <?php
                endwhile;
                wp_reset_postdata();
            else:
                ?>
                <div class="no_result"> No result text</div>
            <?php
            endif;
            ?>
        </div>
    </div>

</section>


<?php get_footer(); ?>
