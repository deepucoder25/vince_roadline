<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => 'PREMIUM PACKAGING • SAFE TRANSIT',
    'bc_h1' => 'Packing & Moving',
    'bc_desc' => 'High-grade bubble wrap, corrugated boxes, and expert packing & moving solutions for complete peace of mind.',
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('our-services')],
        ['name' => 'Packing & Moving']
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
