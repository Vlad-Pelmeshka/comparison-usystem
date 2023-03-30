<?php
get_header();

$case_item = get_field('case_item_main_data');

$case_item['title'] = 'Case Study';
$case_item['pretitle'] = get_the_title();
/*
    'pretitle',
    'title'
    'logo',
    'description',
    'case_study_download' => array(
        'url',
        'filename'
    ),
    'image'
*/

$site_name = $case_item['title'];

$is_h1 = true;

?>

<section class="first-case-item-block">
    <div class="wrapper-container">

        <div class="case__block">
            <div class="case__block-img flex align-center justify-center">
                <img src="<?= $case_item['image'] ?>" alt="<?= $case_item['alt'] ?>">
                <div class="logo flex align-center justify-center">
                    <div>
                        <img src="<?= $case_item['logo'] ?>" alt="logo">
                    </div>
                </div>
            </div>
            <div class="case__block-info flex flow-column align-center justify-center">
                <div class="subtitle fw-semibold text-red text-size018"><?= $case_item['title'] ?></div>
                <h1 class="title fw-semibold text-size048 text-black"><?= $case_item['pretitle'] ?></h1>
                <div class="description fw-regular text-size016 inter"><?= $case_item['description'] ?></div>
            </div>
        </div>
        <?php
        if ($case_item['case_study_download']):
            ?>
            <div class="case__download flex align-center justify-center flow-column">
                <div class="case__download-subtitle text-red text-size016 fw-semibold">Case Study Download</div>
                <div class="case__download-block flex align-center">
                    <div class="image flex align-center justify-center">
                        <svg width="65" height="64" viewBox="0 0 65 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M44.1803 40.2725C44.1803 40.2725 59.8786 37.3555 59.8786 42.8513C59.8786 48.347 50.1534 46.1114 44.1803 40.2725ZM32.574 40.6913C30.0798 41.2561 27.6492 42.0831 25.3206 43.1591L27.2903 38.6172C29.26 34.0752 31.3035 27.883 31.3035 27.883C33.6539 31.9371 36.3885 35.7439 39.4678 39.248C37.1457 39.6029 34.8442 40.0881 32.574 40.7014V40.6913ZM26.3596 7.88839C26.3596 3.09916 27.8713 1.79209 29.0482 1.79209C30.2251 1.79209 31.5497 2.37245 31.594 6.53085C31.2106 10.7123 30.3563 14.8342 29.0482 18.8143C27.2564 15.4726 26.3291 11.7165 26.3547 7.90353L26.3596 7.88839ZM3.467 60.9585C-1.34887 58.0062 13.5665 48.9173 16.2699 48.6246C16.2552 48.6296 8.50938 64.047 3.467 60.9585ZM64.4631 43.5023C64.4138 42.9976 63.9707 37.411 54.27 37.6482C50.2266 37.5814 46.1851 37.8736 42.1909 38.5213C38.3218 34.5264 34.9899 30.0204 32.2834 25.1225C33.9885 20.073 35.0205 14.8107 35.3512 9.47807C35.2084 3.42214 33.7952 -0.0499235 29.2649 0.000542602C24.7346 0.0510087 24.0748 4.11353 24.6706 10.1594C25.2543 14.2221 26.3552 18.1889 27.9452 21.9583C27.9452 21.9583 25.8524 28.635 23.085 35.2763C20.3176 41.9176 18.4267 45.3998 18.4267 45.3998C13.6144 47.0053 9.08421 49.3906 5.00828 52.4651C0.95074 56.3358 -0.698869 59.3083 1.43823 62.2807C3.27988 64.8444 9.72567 65.4247 15.487 57.6883C18.5481 53.6925 21.3448 49.491 23.8581 45.1122C23.8581 45.1122 32.6429 42.6444 35.3758 41.9681C38.1088 41.2919 41.4129 40.7569 41.4129 40.7569C41.4129 40.7569 49.4344 49.0283 57.1703 48.7356C64.9063 48.4429 64.532 43.9969 64.4828 43.5124"
                                  fill="black"/>
                        </svg>
                    </div>
                    <div class="info">
                        <a class="inter text-size014 text-black" href="<?= $case_item['case_study_download']['url'] ?>"
                           download>
                            <?= $case_item['case_study_download']['filename'] ?>
                        </a>
                        <div class="file-volume inter fw-regular text-size012">
                            pdf - <?= $case_item['case_study_download']['filesize'] ?>kb
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endif;
        ?>
    </div>
</section>
<?php

page_content_f();


?>

<?php get_footer(); ?>
 