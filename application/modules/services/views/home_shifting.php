<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => 'SAFE • RELIABLE • STRESS-FREE',
    'bc_h1' => 'Home Shifting',
    'bc_desc' => 'We make your home shifting experience smooth, safe and hassle-free with our professional moving solutions.',
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('our-services')],
        ['name' => 'Home Shifting']
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
