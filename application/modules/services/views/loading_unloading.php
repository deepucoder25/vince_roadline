<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => 'TRAINED LABOUR • CAREFUL HANDLING',
    'bc_h1' => 'Loading & Unloading',
    'bc_desc' => 'Trained moving professionals and modern lifting gear for heavy goods loading, unloading, and placement.',
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('our-services')],
        ['name' => 'Loading & Unloading']
    ]
]);
?>

<!-- Main Page Content Section -->
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <!-- Left Side Content -->
            <div class="col-lg-12">
                <div class="service-main-content">

                </div>
            </div>
        </div>
    </div>
</section>
