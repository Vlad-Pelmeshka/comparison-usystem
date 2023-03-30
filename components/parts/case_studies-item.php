<?php
// $case_studies_id

$case_item = get_field('case_item_main_data', $case_studies_id);

$case_item['title'] = 'Case Study';
$case_item['link'] = get_permalink($case_studies_id);
$case_item['pretitle'] = get_the_title($case_studies_id);
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

//    var_dump($case_item);

?>
<li class="case__item flex justify-between">
    <div class="info">
        <div class="info__subtitle fw-semibold text-red text-size018"><?= $case_item['title'] ?></div>
        <div class="info__title fw-semibold text-size026 text-black"><?= $case_item['pretitle'] ?></div>
        <div class="info__description inter text-size016 fw-regular"><?= $case_item['description'] ?></div>
        <a class="btn btn-red" href="<?= $case_item['link'] ?>">View</a>
    </div>
    <div class="image flex align-center justify-center">
        <img src="<?= $case_item['image'] ?>" alt="<?= $case_item['title'] ?>">
        <div class="image__logo flex align-center justify-center">
            <div>
                <img src="<?= $case_item['logo'] ?>" alt="<?= $case_item['title'] ?>">
            </div>
        </div>
    </div>
</li>
