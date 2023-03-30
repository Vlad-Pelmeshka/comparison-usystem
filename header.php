<?php
/**
 * HEADER
 *
 */
?>

<!DOCTYPE html>
<html class="no-js noscroll" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php if (strpos($_SERVER['HTTP_USER_AGENT'], "MSIE 8")) {
        header("X-UA-Compatible: IE=Edge");
    } ?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600;700&family=Inter:wght@400;500;600;700&family=Manrope&family=Poppins:wght@400;500;600;700&family=Roboto&display=swap"
          rel="stylesheet">

    <?php wp_head(); ?>

</head>
<body id="page-id-<?php the_ID(); ?>"  <?php body_class(); ?>>
<?php wp_body_open();

include('components/parts/header-block.php');
?>
