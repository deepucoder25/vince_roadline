<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => 'SAFE • RELIABLE • VEHICLE CARRIER',
    'bc_h1' => 'Car Transportation',
    'bc_desc' => 'Professional car carrier & enclosed vehicle transport services across India with zero damage guarantee.',
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('our-services')],
        ['name' => 'Car Transportation']
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
