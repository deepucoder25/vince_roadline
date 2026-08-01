<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

// Dynamic variables passed directly from Controller.php ($this->comp array)
$exp_raw = isset($experience) ? $experience : (isset($yearsExperience) ? $yearsExperience : '20+');
$exp_num = (int) preg_replace('/\D+/', '', $exp_raw);

$clients_raw = isset($happyClients) ? $happyClients : '19,850+';
$clients_num = (int) preg_replace('/\D+/', '', $clients_raw);

$states_raw = isset($statesCovered) ? $statesCovered : '20+';
$states_num = (int) preg_replace('/\D+/', '', $states_raw);

$rating_num = (float) (isset($ratingValue) ? $ratingValue : '4.9');
$start_year_val = isset($startYear) ? $startYear : '2006';
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => 'UNMATCHED RELIABILITY • TRANSPARENT PRICING • 100% SAFETY',
    'bc_h1' => 'Why Choose Vince Roadline',
    'bc_desc' => 'Discover why over ' . $clients_num . '+ happy families and corporate clients choose Vince Roadline for safe, hassle-free relocation across India.',
    'breadcrumbs' => [
        ['name' => 'Why Choose Us']
    ]
]);
?>

<!-- Main Why Choose Us Section (Full Width Executive Layout) -->
<section class="vrl-about-section py-5">
  <div class="container">

    <!-- ============ SECTION 1: EXECUTIVE SPOTLIGHT HERO ============ -->
    <div class="vrl-choose-spotlight-card p-4 p-md-5 mb-5">
      <div class="row g-4 g-lg-5 align-items-center">

        <!-- Left Column: Executive Checklist & Narrative -->
        <div class="col-lg-6">
          <div class="mb-3">
            <span class="vrl-about-tag mb-2">
              <i class="bi bi-patch-check-fill me-1"></i> 100% RELIABILITY GUARANTEE
            </span>
            <h2 class="vrl-choose-heading mb-3">
              Why Smart Movers Choose <span class="vrl-about-highlight">Vince Roadline</span>
            </h2>
          </div>

          <p class="vrl-about-prose text-muted mb-4">
            Relocating your household goods or business assets requires more than just transport — it requires a trustworthy partner who respects your time, belongings, and budget. Here is how Vince Roadline sets the industry standard:
          </p>

          <!-- Executive Guarantee List -->
          <div class="d-flex flex-column gap-3 mb-4">
            <div class="vrl-choose-check-item d-flex align-items-center gap-3">
              <i class="bi bi-check-circle-fill text-danger fs-5 flex-shrink-0"></i>
              <div>
                <strong class="d-block text-dark fs-6">100% Written Fixed Estimate</strong>
                <span class="small text-muted fs-8">Zero hidden costs, toll surprises, or loading fee hikes after job completion.</span>
              </div>
            </div>

            <div class="vrl-choose-check-item d-flex align-items-center gap-3">
              <i class="bi bi-check-circle-fill text-danger fs-5 flex-shrink-0"></i>
              <div>
                <strong class="d-block text-dark fs-6">Multi-Layer Bubble Cushioning</strong>
                <span class="small text-muted fs-8">Heavy-duty 3-layer wrapping, corrugated sheets, and customized wooden crates.</span>
              </div>
            </div>

            <div class="vrl-choose-check-item d-flex align-items-center gap-3">
              <i class="bi bi-check-circle-fill text-danger fs-5 flex-shrink-0"></i>
              <div>
                <strong class="d-block text-dark fs-6">Weatherproof Enclosed GPS Containers</strong>
                <span class="small text-muted fs-8">Real-time GPS location updates sent directly to your phone 24/7.</span>
              </div>
            </div>

            <div class="vrl-choose-check-item d-flex align-items-center gap-3">
              <i class="bi bi-check-circle-fill text-danger fs-5 flex-shrink-0"></i>
              <div>
                <strong class="d-block text-dark fs-6">100% Verified In-House Move Crew</strong>
                <span class="small text-muted fs-8">No daily casual day laborers. Background-verified &amp; uniformed specialists.</span>
              </div>
            </div>
          </div>



        </div>

        <!-- Right Column: Visual Feature Showcase -->
        <div class="col-lg-6">
          <div class="vrl-about-img-container">
            <img src="<?= base_url('assets/images/services_modules/packing_unpacking.jpg') ?>" class="img-fluid w-100 vrl-about-main-img" alt="<?= htmlspecialchars($company3) ?> Quality Relocation Team" loading="lazy">
            
            <!-- Top Left Rating Badge -->
            <div class="vrl-about-exp-float text-center">
              <div class="vrl-exp-num"><?= $rating_num ?></div>
              <small class="text-white-50 fw-semibold text-uppercase fs-8 d-block">★ Customer Rating</small>
            </div>

            <!-- Bottom Right Guarantee Pill -->
            <div class="vrl-about-gps-float d-flex align-items-center gap-2">
              <i class="bi bi-shield-check text-warning fs-5"></i>
              <span>100% Transit Insured Move</span>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- ============ SECTION 2: 4 INTERACTIVE FEATURE PILLARS ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Our Commitments</span>
        <h3 class="vrl-about-title mb-2">Core Pillars of <span class="vrl-about-highlight">Excellence</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">Built on uncompromised safety, fixed transparent pricing, and 24x7 customer support.</p>
      </div>

      <div class="row g-4">
        <!-- Feature 1 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-choose-feature-box d-flex flex-column align-items-start h-100">
            <div class="vrl-choose-icon-box mb-3">
              <i class="bi bi-shield-lock-fill"></i>
            </div>
            <h5 class="fw-bold text-dark mb-2 fs-6">Safety First Protocol</h5>
            <p class="small text-muted mb-0">Multi-layer cushion wrapping, shockproof ramps, and customized wooden crates for fragile assets.</p>
          </div>
        </div>

        <!-- Feature 2 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-choose-feature-box d-flex flex-column align-items-start h-100">
            <div class="vrl-choose-icon-box mb-3">
              <i class="bi bi-receipt-cutoff"></i>
            </div>
            <h5 class="fw-bold text-dark mb-2 fs-6">Transparent Costing</h5>
            <p class="small text-muted mb-0">Fixed itemized written quotes with zero post-move hidden fees, toll surprises, or loading hikes.</p>
          </div>
        </div>

        <!-- Feature 3 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-choose-feature-box d-flex flex-column align-items-start h-100">
            <div class="vrl-choose-icon-box mb-3">
              <i class="bi bi-truck-front-fill"></i>
            </div>
            <h5 class="fw-bold text-dark mb-2 fs-6">Live GPS Fleet</h5>
            <p class="small text-muted mb-0">All-weather enclosed container trucks equipped with 24x7 live GPS location tracking.</p>
          </div>
        </div>

        <!-- Feature 4 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-choose-feature-box d-flex flex-column align-items-start h-100">
            <div class="vrl-choose-icon-box mb-3">
              <i class="bi bi-headset"></i>
            </div>
            <h5 class="fw-bold text-dark mb-2 fs-6">Dedicated Support</h5>
            <p class="small text-muted mb-0">Single point of contact move manager guiding your shift from packing day to final delivery.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ SECTION 3: COMPARISON MATRIX TABLE ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Clear Difference</span>
        <h3 class="vrl-about-title mb-2"><span class="vrl-about-highlight">Vince Roadline</span> vs Unorganized Movers</h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">See how our professional standards compare against unorganized local operators.</p>
      </div>

      <div class="vrl-choose-table-card table-responsive">
        <table class="table vrl-choose-table text-start align-middle">
          <thead>
            <tr>
              <th scope="col">Relocation Feature</th>
              <th scope="col" class="text-center text-warning"><i class="bi bi-trophy-fill me-1"></i> Vince Roadline</th>
              <th scope="col" class="text-center text-white-50">Local Unorganized Movers</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="fw-bold text-dark"><i class="bi bi-receipt me-2 text-danger"></i> Written Fixed Quote</td>
              <td class="text-center fw-bold text-success"><i class="bi bi-check-circle-fill me-1"></i> Fixed Itemized Price</td>
              <td class="text-center text-danger"><i class="bi bi-x-circle-fill me-1"></i> Post-Move Extra Charges</td>
            </tr>
            <tr>
              <td class="fw-bold text-dark"><i class="bi bi-box-seam me-2 text-danger"></i> Packing Material Quality</td>
              <td class="text-center fw-bold text-success"><i class="bi bi-check-circle-fill me-1"></i> 3-Layer Bubble Cushion &amp; Crates</td>
              <td class="text-center text-danger"><i class="bi bi-x-circle-fill me-1"></i> Thin Used Cardboard</td>
            </tr>
            <tr>
              <td class="fw-bold text-dark"><i class="bi bi-people me-2 text-danger"></i> Crew Verification</td>
              <td class="text-center fw-bold text-success"><i class="bi bi-check-circle-fill me-1"></i> 100% In-House Verified Staff</td>
              <td class="text-center text-danger"><i class="bi bi-x-circle-fill me-1"></i> Daily Casual Laborers</td>
            </tr>
            <tr>
              <td class="fw-bold text-dark"><i class="bi bi-truck me-2 text-danger"></i> Transport Fleet</td>
              <td class="text-center fw-bold text-success"><i class="bi bi-check-circle-fill me-1"></i> Enclosed Weatherproof GPS Containers</td>
              <td class="text-center text-danger"><i class="bi bi-x-circle-fill me-1"></i> Open Tarpaulin Trucks</td>
            </tr>
            <tr>
              <td class="fw-bold text-dark"><i class="bi bi-shield-check me-2 text-danger"></i> Goods Transit Insurance</td>
              <td class="text-center fw-bold text-success"><i class="bi bi-check-circle-fill me-1"></i> Full Transit Policy Coverage</td>
              <td class="text-center text-danger"><i class="bi bi-x-circle-fill me-1"></i> No Insurance Policy</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- ============ SECTION 4: HIGH-IMPACT CALL-TO-ACTION BANNER ============ -->
    <div class="vrl-about-cta-card p-4 p-md-5 text-center text-md-start">
      <div class="row align-items-center g-4 position-relative z-2">
        <div class="col-lg-8">
          <span class="badge bg-warning text-dark fw-bold px-3 py-1.5 rounded-pill mb-2 fs-7">Ready To Relocate?</span>
          <h3 class="fw-bold text-white mb-2 fs-3">Choose Peace of Mind with Vince Roadline Today</h3>
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