<section class="
	tab_section
	<?= get_sub_field('tab_list_type') ?>-tab-type
">

    <div class="wrapper-tabs">
        <div class="tab_section-container">
            <?php switch (get_sub_field('tab_list_type')) {
                case 'standart':
                    include('parts/tab_standart-list.php');
                    break;

                case 'contact':
                    include('parts/tab_contact-list.php');
                    break;

            } ?>
        </div>
    </div>

</section>