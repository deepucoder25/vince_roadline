<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$services = [
    [
        'title' => 'HOME RELOCATION',
        'icon' => 'bi bi-house-door-fill',
        'icon_theme' => 'vrl-icon-bg-red',
        'desc' => 'Safe and secure shifting of your household items with perfect packing and on-time delivery.',
        'image' => 'home.jpg',
        'link' => 'home-relocation'
    ],
    [
        'title' => 'OFFICE SHIFTING',
        'icon' => 'bi bi-building',
        'icon_theme' => 'vrl-icon-bg-yellow',
        'desc' => 'Hassle-free office relocation with minimal downtime and complete care.',
        'image' => 'office.jpg',
        'link' => 'office-relocation'
    ],
    [
        'title' => 'CAR TRANSPORTATION',
        'icon' => 'bi bi-car-front-fill',
        'icon_theme' => 'vrl-icon-bg-red',
        'desc' => 'Door-to-door transportation of cars with advanced safety measures.',
        'image' => 'car.jpg',
        'link' => 'car-transportation'
    ],
    [
        'title' => 'BIKE TRANSPORTATION',
        'icon' => 'bi bi-bicycle',
        'icon_theme' => 'vrl-icon-bg-yellow',
        'desc' => 'Safe and scratch-free bike carrier transportation to any city with complete safety.',
        'image' => 'bike.jpg',
        'link' => 'bike-transportation'
    ],
    [
        'title' => 'PACKING & MOVING',
        'icon' => 'bi bi-box-seam-fill',
        'icon_theme' => 'vrl-icon-bg-red',
        'desc' => 'High-quality packing materials and expert packing for maximum protection of your goods.',
        'image' => 'packing_unpacking.jpg',
        'link' => 'packing-and-moving'
    ],
    [
        'title' => 'LOADING & UNLOADING',
        'icon' => 'bi bi-truck-flatbed',
        'icon_theme' => 'vrl-icon-bg-yellow',
        'desc' => 'Trained professionals for safe loading and unloading of your heavy belongings.',
        'image' => 'loading_unloading.jpg',
        'link' => 'loading-unloading'
    ],
];
?>

<section class="vrl-services-section py-4">
  <div class="container position-relative">
    
    <!-- Section Header -->
    <div class="vrl-sec-header text-center mb-4 mb-lg-5">
      <div class="vrl-sec-eyebrow mb-2">
        <span class="vrl-eyebrow-line"></span>
        <span>OUR SERVICES</span>
        <span class="vrl-eyebrow-line"></span>
      </div>
      
      <h2 class="vrl-sec-title mb-2">
        COMPLETE RELOCATION <span class="vrl-text-red">SOLUTIONS</span> FOR YOU
      </h2>
      
      <!-- Dashed Route Line + Truck Graphic -->
      <div class="vrl-sec-route-wrap mb-3">
        <span class="vrl-sec-route-line"></span>
        <i class="bi bi-truck vrl-sec-route-icon"></i>
        <span class="vrl-sec-route-line"></span>
      </div>
      
      <p class="vrl-sec-subtitle">
        From careful packing to safe delivery, we offer end-to-end moving services tailored to meet your needs with trust and care.
      </p>
    </div>

    <!-- 6 Service Cards Grid (3 columns x 2 rows on desktop) -->
    <div class="row g-4 justify-content-center">
      <?php foreach ($services as $service): ?>
        <div class="col-lg-4 col-md-6 col-6 d-flex">
          <a href="<?= site_url($service['link']) ?>" class="vrl-service-card w-100">
            
            <!-- Top Content Area -->
            <div class="vrl-service-content">
              <div class="vrl-service-header">
                <div class="vrl-service-icon-box <?= $service['icon_theme'] ?>">
                  <i class="<?= $service['icon'] ?>"></i>
                </div>
                <h3 class="vrl-service-title"><?= htmlspecialchars($service['title']) ?></h3>
              </div>
              
              <p class="vrl-service-desc"><?= htmlspecialchars($service['desc']) ?></p>
              <div class="vrl-service-underline"></div>
            </div>

            <!-- Card Accent Gradient Divider -->
            <div class="vrl-service-card-divider"></div>

            <!-- Real Service Image Container -->
            <div class="vrl-service-img-wrap">
              <img src="<?= base_url('assets/images/services_modules/' . $service['image']) ?>" alt="<?= htmlspecialchars($service['title']) ?>" class="vrl-service-img" loading="lazy">
            </div>

          </a>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Bottom Dark Trust Badge Bar -->
    <div class="vrl-trust-bar">
      <div class="row g-3 align-items-center text-start text-md-start">
        
        <div class="col-lg col-md-6 col-6">
          <div class="vrl-trust-item">
            <div class="vrl-trust-icon-ring"><i class="bi bi-shield-check"></i></div>
            <div>
              <h6 class="vrl-trust-title">Safe &amp; Secure</h6>
              <p class="vrl-trust-sub mb-0">Your belongings are in safe hands.</p>
            </div>
          </div>
        </div>

        <div class="col-lg col-md-6 col-6">
          <div class="vrl-trust-item">
            <div class="vrl-trust-icon-ring"><i class="bi bi-people-fill"></i></div>
            <div>
              <h6 class="vrl-trust-title">Experienced Team</h6>
              <p class="vrl-trust-sub mb-0">Skilled professionals for smooth move.</p>
            </div>
          </div>
        </div>

        <div class="col-lg col-md-6 col-6">
          <div class="vrl-trust-item">
            <div class="vrl-trust-icon-ring"><i class="bi bi-clock-history"></i></div>
            <div>
              <h6 class="vrl-trust-title">On-Time Delivery</h6>
              <p class="vrl-trust-sub mb-0">We deliver on promised schedule.</p>
            </div>
          </div>
        </div>

        <div class="col-lg col-md-6 col-6">
          <div class="vrl-trust-item">
            <div class="vrl-trust-icon-ring"><i class="bi bi-currency-rupee"></i></div>
            <div>
              <h6 class="vrl-trust-title">Affordable Pricing</h6>
              <p class="vrl-trust-sub mb-0">Best services at competitive rates.</p>
            </div>
          </div>
        </div>

        <div class="col-lg col-md-6 col-6">
          <div class="vrl-trust-item">
            <div class="vrl-trust-icon-ring"><i class="bi bi-headset"></i></div>
            <div>
              <h6 class="vrl-trust-title">24/7 Support</h6>
              <p class="vrl-trust-sub mb-0">We are here to assist you anytime.</p>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>
