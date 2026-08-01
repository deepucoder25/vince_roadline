<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => 'INDIA\'S TRUSTED • RELIABLE • EXPERIENCED',
    'bc_h1' => 'About Vince Roadline',
    'bc_desc' => 'Discover India\'s premier household, commercial, and vehicle relocation experts with over ' . $yearsExperience . '+ years of nationwide service excellence.',
    'breadcrumbs' => [
        ['name' => 'About Us']
    ]
]);
?>

<!-- Main About Us Section (Full Width Narrative - No Sidebar Column) -->
<section class="vrl-about-section py-5">
  <div class="container">

    <!-- ============ SECTION 1: EXECUTIVE BRAND STORY ============ -->
    <div class="vrl-about-hero-section p-4 p-md-5 mb-5">
      <div class="row g-4 g-lg-5 align-items-center">

        <!-- Left Column: Story & Executive Quote -->
        <div class="col-lg-6">
          <div class="mb-3">
            <span class="vrl-about-tag mb-2">
              <i class="bi bi-award-fill me-1"></i> ESTABLISHED <?= $startYear ?> • <?= $yearsExperience ?> YEARS OF EXCELLENCE
            </span>
            <h2 class="vrl-about-hero-heading mb-3">
              Architects of Safe &amp; Reliable <span class="vrl-about-highlight">Relocation Across India</span>
            </h2>
          </div>

          <!-- Highlight Quote Banner -->
          <div class="vrl-about-hero-quote mb-4">
            <i class="bi bi-quote fs-4 text-danger me-1"></i>
            Over <?= $yearsExperience ?> years of defining gold standards in household shifting, corporate logistics, and scratch-free vehicle transport.
          </div>

          <p class="vrl-about-prose mb-3">
            Welcome to <strong><?= htmlspecialchars($company3) ?></strong>, India's leading household shifting, corporate relocation, and vehicle transportation logistics company. Founded with a single mission — to make moving simple, safe, and stress-free — we operate across a nationwide network of <?= $statesCovered ?>+ major states and cities.
          </p>
          
          <p class="vrl-about-prose text-muted mb-4">
            Whether you are relocating your home locally or moving your entire corporate headquarters interstate, our background-verified move specialists use multi-layer bubble wrapping, dedicated weatherproof container trucks, real-time GPS tracking, and transparent written quotes.
          </p>

          <!-- Action Buttons Pair -->
          <div class="d-flex flex-wrap align-items-center gap-3">
            <a href="<?= $phonehtml ?>" class="btn btn-danger btn-lg rounded-pill px-4 py-3 fw-bold d-inline-flex align-items-center gap-2 shadow">
              <i class="bi bi-telephone-fill"></i> Call <?= htmlspecialchars($phone) ?>
            </a>
            <button type="button" class="btn btn-warning btn-lg rounded-pill px-4 py-3 fw-bold text-dark d-inline-flex align-items-center gap-2 border-0 shadow-sm" data-bs-toggle="modal" data-bs-target="#qteModal">
              <i class="bi bi-calculator-fill"></i> Get Instant Quote
            </button>
          </div>

        </div>

        <!-- Right Column: Visual Showcase with Overlapping Floating Badges -->
        <div class="col-lg-6">
          <div class="vrl-about-img-container">
            <img src="<?= base_url('assets/images/services_modules/relocation_packing_team.jpg') ?>" class="img-fluid w-100 vrl-about-main-img" alt="<?= htmlspecialchars($company3) ?> Relocation Experts" loading="lazy">
            
            <!-- Top Left Dark Experience Badge -->
            <div class="vrl-about-exp-float text-center">
              <div class="vrl-exp-num"><?= $yearsExperience ?>+</div>
              <small class="text-white-50 fw-semibold text-uppercase fs-8 d-block">Years Legacy</small>
            </div>

            <!-- Bottom Right GPS Tracking Pill -->
            <div class="vrl-about-gps-float d-flex align-items-center gap-2">
              <i class="bi bi-geo-alt-fill text-warning fs-5"></i>
              <span>24x7 Live GPS Tracked Fleet</span>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- ============ SECTION 2: ANIMATED KEY STATS BANNER (RED TO YELLOW GRADIENT) ============ -->
    <div class="vrl-about-stats-banner p-4 p-md-5 mb-5 text-center position-relative">
      <div class="vrl-about-stats-glow"></div>

      <div class="row g-4 position-relative z-2">
        <!-- Stat 1: Experience Years from Controller.php -->
        <div class="col-6 col-md-3">
          <div class="vrl-about-stat-card">
            <div class="vrl-about-stat-num vrl-counter-num" data-target="<?= $yearsExperience ?>" data-suffix="+">0+</div>
            <div class="vrl-about-stat-label">Years of Industry Leadership</div>
          </div>
        </div>

        <!-- Stat 2: Happy Clients from Controller.php -->
        <div class="col-6 col-md-3">
          <div class="vrl-about-stat-card">
            <div class="vrl-about-stat-num vrl-counter-num" data-target="<?= $happyClients ?>" data-suffix="+">0+</div>
            <div class="vrl-about-stat-label">Happy Families Relocated</div>
          </div>
        </div>

        <!-- Stat 3: States Covered from Controller.php -->
        <div class="col-6 col-md-3">
          <div class="vrl-about-stat-card">
            <div class="vrl-about-stat-num vrl-counter-num" data-target="<?= $statesCovered ?>" data-suffix="+">0+</div>
            <div class="vrl-about-stat-label">States Nationwide Covered</div>
          </div>
        </div>

        <!-- Stat 4: Rating Value from Controller.php -->
        <div class="col-6 col-md-3">
          <div class="vrl-about-stat-card">
            <div class="vrl-about-stat-num vrl-counter-num" data-target="<?= $ratingValue ?>" data-suffix="/5" data-float="true">0/5</div>
            <div class="vrl-about-stat-label">Customer Rating Score</div>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ SECTION 3: OUR CORE VALUES & COMMITMENT ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Pillars of Excellence</span>
        <h3 class="vrl-about-title mb-2">Why Customers Trust <span class="vrl-about-highlight">Vince Roadline</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">Built on uncompromised safety, fixed transparent pricing, and 24x7 customer support.</p>
      </div>

      <div class="row g-4">
        <!-- Value 1 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-value-card h-100 d-flex flex-column align-items-start">
            <div class="vrl-value-icon-circle mb-3">
              <i class="bi bi-shield-fill-check"></i>
            </div>
            <h5 class="fw-bold text-dark mb-2 fs-6">Multi-Layer Safety</h5>
            <p class="small text-muted mb-0">Heavy-duty bubble wrap, corrugated sheets, stretch films, and custom crates for fragile items.</p>
          </div>
        </div>

        <!-- Value 2 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-value-card h-100 d-flex flex-column align-items-start">
            <div class="vrl-value-icon-circle mb-3">
              <i class="bi bi-receipt-cutoff"></i>
            </div>
            <h5 class="fw-bold text-dark mb-2 fs-6">Transparent Pricing</h5>
            <p class="small text-muted mb-0">Zero hidden costs, toll surprises, or loading fee hikes. Fixed itemized written quotes.</p>
          </div>
        </div>

        <!-- Value 3 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-value-card h-100 d-flex flex-column align-items-start">
            <div class="vrl-value-icon-circle mb-3">
              <i class="bi bi-truck-front-fill"></i>
            </div>
            <h5 class="fw-bold text-dark mb-2 fs-6">GPS Tracked Fleet</h5>
            <p class="small text-muted mb-0">All-weather enclosed container trucks fitted with live GPS tracking for real-time updates.</p>
          </div>
        </div>

        <!-- Value 4 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-value-card h-100 d-flex flex-column align-items-start">
            <div class="vrl-value-icon-circle mb-3">
              <i class="bi bi-people-fill"></i>
            </div>
            <h5 class="fw-bold text-dark mb-2 fs-6">Verified Packers Crew</h5>
            <p class="small text-muted mb-0">No casual day laborers. Background-verified, experienced, and uniformed move specialists.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ NEW SECTION 4: PROVEN RELOCATION METHODOLOGY ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Seamless Shifting</span>
        <h3 class="vrl-about-title mb-2">Our Proven 4-Step <span class="vrl-about-highlight">Relocation Process</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">A systematic workflow that guarantees maximum safety and zero hassle for your move.</p>
      </div>

      <div class="row g-4">
        <!-- Step 1 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-about-timeline-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-about-step-badge">01</div>
              <i class="bi bi-clipboard2-check-fill fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">Survey &amp; Fixed Quote</h6>
            <p class="small text-muted mb-0">Physical or virtual inventory check with an itemized written quote and zero hidden charges.</p>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-about-timeline-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-about-step-badge">02</div>
              <i class="bi bi-box-seam-fill fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">Multi-Layer Cushioning</h6>
            <p class="small text-muted mb-0">3-layer bubble wrap, corrugated sheets, stretch film, and wooden crates for fragile assets.</p>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-about-timeline-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-about-step-badge">03</div>
              <i class="bi bi-truck-front-fill fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">GPS Tracked Transit</h6>
            <p class="small text-muted mb-0">All-weather enclosed container trucks fitted with live GPS tracking for safe transit across India.</p>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-about-timeline-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-about-step-badge">04</div>
              <i class="bi bi-house-heart-fill fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">Doorstep Placement</h6>
            <p class="small text-muted mb-0">Careful unloading, unpacking, furniture reassembly, and room-by-room item placement.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ NEW SECTION 5: INFRASTRUCTURE & FLEET POWER ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Our Assets</span>
        <h3 class="vrl-about-title mb-2">Pan-India <span class="vrl-about-highlight">Infrastructure &amp; Fleet Power</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">Equipped with state-of-the-art vehicles, warehouses, and handling tools.</p>
      </div>

      <div class="row g-4">
        <!-- Asset 1 -->
        <div class="col-md-4">
          <div class="vrl-about-fleet-card d-flex align-items-start gap-3">
            <div class="vrl-about-fleet-icon">
              <i class="bi bi-truck-flatbed"></i>
            </div>
            <div>
              <h6 class="fw-bold text-dark mb-1 fs-6">Enclosed Container Trucks</h6>
              <p class="small text-muted mb-0">Weatherproof sealed vehicles preventing rain, dust, and transit vibration damage.</p>
            </div>
          </div>
        </div>

        <!-- Asset 2 -->
        <div class="col-md-4">
          <div class="vrl-about-fleet-card d-flex align-items-start gap-3">
            <div class="vrl-about-fleet-icon">
              <i class="bi bi-building-lock"></i>
            </div>
            <div>
              <h6 class="fw-bold text-dark mb-1 fs-6">CCTV Warehousing Hubs</h6>
              <p class="small text-muted mb-0">24x7 monitored climate-controlled storage hubs across major Indian metros.</p>
            </div>
          </div>
        </div>

        <!-- Asset 3 -->
        <div class="col-md-4">
          <div class="vrl-about-fleet-card d-flex align-items-start gap-3">
            <div class="vrl-about-fleet-icon">
              <i class="bi bi-car-front-fill"></i>
            </div>
            <div>
              <h6 class="fw-bold text-dark mb-1 fs-6">Hydraulic Car Carriers</h6>
              <p class="small text-muted mb-0">Specialized multi-car trailers ensuring 100% scratch-free vehicle shipping.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ SECTION 6: HIGH-IMPACT CALL-TO-ACTION BANNER ============ -->
    <div class="vrl-about-cta-card p-4 p-md-5 text-center text-md-start">
      <div class="row align-items-center g-4 position-relative z-2">
        <div class="col-lg-8">
          <span class="badge bg-warning text-dark fw-bold px-3 py-1.5 rounded-pill mb-2 fs-7">Ready To Relocate?</span>
          <h3 class="fw-bold text-white mb-2 fs-3">Plan Your Stress-Free Move with Vince Roadline Today</h3>
          <p class="text-white-50 mb-0 fs-6">Contact our senior move manager for a free pre-move survey and customized discount estimate.</p>
        </div>

        <div class="col-lg-4 text-center text-lg-end">
          <div class="d-flex flex-column flex-sm-row justify-content-lg-end gap-3">
            <a href="<?= $phonehtml ?>" class="btn vrl-about-cta-btn-call rounded-pill text-decoration-none d-inline-flex align-items-center justify-content-center gap-2">
              <i class="bi bi-telephone-fill text-danger"></i> Call <?= htmlspecialchars($phone) ?>
            </a>
            <button type="button" class="btn vrl-about-cta-btn-quote rounded-pill d-inline-flex align-items-center justify-content-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal">
              <i class="bi bi-calculator-fill"></i> Get Free Quote
            </button>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Scroll-Triggered 0-to-Target Counter Animation Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const statsBanner = document.querySelector('.vrl-about-stats-banner');
  const counters = document.querySelectorAll('.vrl-counter-num');
  let animated = false;

  function runCounters() {
    if (animated) return;
    animated = true;

    counters.forEach(counter => {
      const targetRaw = counter.getAttribute('data-target') || '0';
      const cleanTargetStr = targetRaw.replace(/[^0-9.]/g, '');
      const target = parseFloat(cleanTargetStr) || 0;

      const suffix = counter.getAttribute('data-suffix') || '';
      const isFloat = counter.getAttribute('data-float') === 'true' || (cleanTargetStr.includes('.') && !cleanTargetStr.endsWith('.'));
      const duration = 2000; // 2 seconds animation
      const startTime = performance.now();

      function updateCounter(currentTime) {
        const elapsedTime = currentTime - startTime;
        const progress = Math.min(elapsedTime / duration, 1);
        // Easing Out Quad: progress * (2 - progress)
        const easedProgress = progress * (2 - progress);
        const currentVal = isFloat 
          ? (easedProgress * target).toFixed(1) 
          : Math.floor(easedProgress * target).toLocaleString('en-IN');

        counter.innerText = currentVal + suffix;

        if (progress < 1) {
          requestAnimationFrame(updateCounter);
        } else {
          counter.innerText = (isFloat ? target.toFixed(1) : Math.floor(target).toLocaleString('en-IN')) + suffix;
        }
      }

      requestAnimationFrame(updateCounter);
    });
  }

  // Scroll Trigger via IntersectionObserver
  if ('IntersectionObserver' in window && statsBanner) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          runCounters();
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.25 }); // Triggers when 25% of banner is scrolled into view

    observer.observe(statsBanner);
  } else {
    runCounters();
  }
});
</script>