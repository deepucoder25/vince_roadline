<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$companyName = isset($company3) ? $company3 : 'Vince Road Line Packers & Movers';
?>

<section class="vrl-about-section">
  <!-- Bottom Red Wave Background Shape -->
  <div class="vrl-about-bottom-wave"></div>

  <div class="container position-relative">
    <div class="row align-items-center g-3 g-lg-3">
      
      <div class="col-lg-6 col-12">
        <div class="vrl-about-content">
          
          <div class="vrl-about-eyebrow">ABOUT US</div>
          <div class="vrl-about-eyebrow-line"></div>

          <h2 class="vrl-about-title">
            WE MAKE MOVING
            <span class="vrl-text-red">EASY &amp; RELIABLE</span>
            <span class="vrl-quote-watermark">”</span>
          </h2>

          <div class="vrl-about-gradient-bar">
            <div class="vrl-about-gradient-line"></div>
            <div class="vrl-about-gradient-dot"></div>
          </div>

          <p class="vrl-about-desc mb-2">
            <strong><?= htmlspecialchars($companyName) ?></strong> is one of the top most trusted names in India in the field of transportation and logistics for delivering a very professionally managed services and defining its logical and technical aspects.
          </p>

          <p class="vrl-about-desc mb-0">
            While moving businesses and people for so many years we have been able to understand those unique challenges that come with each of these jobs. With our operations, specializations and elegant working profile we have become India's one of the top most trusted Movers &amp; Packers.
          </p>

        </div>
      </div>

      <!-- Right Column: 3-Image Layered Composition Grid -->
      <div class="col-lg-6 col-12">
        <div class="vrl-about-multi-img-wrap">
          
          <div class="vrl-about-dots-pattern"></div>

          <div class="vrl-about-img-box vrl-img-box-main">
            <img src="<?= base_url('assets/images/slider/slider.jpg') ?>" 
                 alt="Vince Road Line Relocation Truck" 
                 class="vrl-multi-img" 
                 loading="lazy">
            <div class="vrl-img-badge-overlay">
              <i class="bi bi-shield-check"></i> 100% Safe Move
            </div>
          </div>
          <div class="vrl-about-img-box vrl-img-box-sub">
            <img src="<?= base_url('assets/images/services_modules/packing_unpacking.jpg') ?>" 
                 alt="Packing &amp; Moving Service" 
                 class="vrl-multi-img" 
                 loading="lazy">
          </div>

          <div class="vrl-about-img-box vrl-img-box-accent">
            <img src="<?= base_url('assets/images/services_modules/home.jpg') ?>" 
                 alt="Home Relocation Service" 
                 class="vrl-multi-img" 
                 loading="lazy">
          </div>

          <!-- Floating Experience Badge Box -->
          <div class="vrl-about-exp-card">
            <div class="vrl-exp-num"><?= $yearsExperience ?></div>
            <div class="vrl-exp-text">
              <span>Years Of</span>
              <strong>Excellence</strong>
            </div>
          </div>

        </div>
      </div>

    </div>

    <!-- Bottom Floating Trust Capsule Card -->
    <div class="vrl-about-trust-capsule">
      <div class="row g-3 align-items-center text-start">
        
        <div class="col-lg-3 col-md-6 col-6">
          <div class="vrl-about-trust-item">
            <div class="vrl-about-trust-icon vrl-about-icon-red">
              <i class="bi bi-shield-check"></i>
            </div>
            <div>
              <h6 class="vrl-about-trust-title">Safe &amp; Secure</h6>
              <p class="vrl-about-trust-sub mb-0">Your belongings are in safe hands.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-6">
          <div class="vrl-about-trust-item">
            <div class="vrl-about-trust-icon vrl-about-icon-yellow">
              <i class="bi bi-people-fill"></i>
            </div>
            <div>
              <h6 class="vrl-about-trust-title">Experienced Team</h6>
              <p class="vrl-about-trust-sub mb-0">Skilled professionals you can trust.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-6">
          <div class="vrl-about-trust-item">
            <div class="vrl-about-trust-icon vrl-about-icon-red">
              <i class="bi bi-clock-history"></i>
            </div>
            <div>
              <h6 class="vrl-about-trust-title">On-Time Delivery</h6>
              <p class="vrl-about-trust-sub mb-0">We value your time and schedule.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-6">
          <div class="vrl-about-trust-item">
            <div class="vrl-about-trust-icon vrl-about-icon-yellow">
              <i class="bi bi-hand-thumbs-up-fill"></i>
            </div>
            <div>
              <h6 class="vrl-about-trust-title">Customer First</h6>
              <p class="vrl-about-trust-sub mb-0">Your satisfaction is our top priority.</p>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>
