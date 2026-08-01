<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => 'SECURE • FAST • TWO WHEELER RELOCATION',
    'bc_h1' => 'Bike Transportation',
    'bc_desc' => 'Door-to-door bike shipping and two-wheeler transport services with multi-layer protective packaging.',
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('our-services')],
        ['name' => 'Bike Transportation']
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