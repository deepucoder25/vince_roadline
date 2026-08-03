<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => 'SAFE • HYDRAULIC CARRIERS • PAN-INDIA TRANSPORT',
    'bc_h1' => 'Car Transportation Services',
    'bc_desc' => 'Door-to-door car shipping and vehicle transportation with multi-car enclosed hydraulic carriers, wheel stopper locks, and 100% scratch-free delivery.',
    'breadcrumbs' => [
        ['name' => 'Car Transportation']
    ]
]);
?>

<!-- Main Car Transportation Section (Clean Simple Box Format) -->
<section class="vrl-about-section py-5">
  <div class="container">

    <!-- ============ SECTION 1: CLEAN SIMPLE CONTENT BOX ============ -->
    <div class="vrl-simple-content-box p-4 p-md-5 mb-5">
      <h2 class="vrl-simple-heading mb-4">
        Car Transportation &amp; Vehicle Logistics Across India
      </h2>

      <p class="vrl-about-prose mb-3">
        Welcome to <strong><?= htmlspecialchars($company3) ?></strong>, India's premier automobile logistics provider. We offer door-to-door car shipping services for hatchbacks, sedans, SUVs, luxury vehicles, and vintage cars across a nationwide network of 150+ cities.
      </p>

      <p class="vrl-about-prose text-muted mb-4">
        With over <?= $yearsExperience ?> years of logistics excellence and <?= number_format($clients_num) ?>+ vehicles safely delivered, our specialized multi-car hydraulic car carriers are equipped with safety ramps, rubber bumper guards, wheel locks, and 24x7 live GPS tracking to guarantee zero damage.
      </p>

      <!-- 3 Feature Check Pills -->
      <div class="d-flex flex-wrap align-items-center gap-2 mb-4">
        <div class="vrl-bike-pill-item d-flex align-items-center gap-2">
          <i class="bi bi-check-circle-fill text-danger"></i> Multi-Car Hydraulic Carriers
        </div>
        <div class="vrl-bike-pill-item d-flex align-items-center gap-2">
          <i class="bi bi-check-circle-fill text-danger"></i> Wheel Stopper Locks &amp; Bumper Guards
        </div>
        <div class="vrl-bike-pill-item d-flex align-items-center gap-2">
          <i class="bi bi-check-circle-fill text-danger"></i> 24x7 Live GPS Tracking
        </div>
      </div>

      <!-- Action Buttons Pair -->
      <div class="d-flex flex-wrap align-items-center gap-3 pt-2">
        <a href="<?= $phonehtml ?>" class="btn btn-danger btn-lg rounded-pill px-4 py-3 fw-bold d-inline-flex align-items-center gap-2 shadow">
          <i class="bi bi-telephone-fill"></i> Call <?= htmlspecialchars($phone) ?>
        </a>
        <button type="button" class="btn btn-warning btn-lg rounded-pill px-4 py-3 fw-bold text-dark d-inline-flex align-items-center gap-2 border-0 shadow-sm" data-bs-toggle="modal" data-bs-target="#qteModal">
          <i class="bi bi-calculator-fill"></i> Get Instant Quote
        </button>
      </div>
    </div>

    <!-- ============ SECTION 2: 3 CAR CATEGORY CARDS ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Tailored Vehicle Care</span>
        <h3 class="vrl-about-title mb-2">Specialized Transport for <span class="vrl-about-highlight">Every Car Category</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">Customized loading protocols engineered specifically for your automobile class.</p>
      </div>

      <div class="row g-4">
        <!-- Category 1: Hatchbacks & Compact Sedans -->
        <div class="col-md-4">
          <div class="vrl-bike-type-card d-flex flex-column align-items-start">
            <div class="vrl-bike-type-icon">
              <i class="bi bi-car-front-fill"></i>
            </div>
            <span class="badge bg-light text-dark fw-bold border mb-2 fs-8">Hatchbacks &amp; Compacts</span>
            <h5 class="fw-bold text-dark mb-2 fs-6">Hatchbacks &amp; Small Sedans</h5>
            <p class="small text-muted mb-3">Foam bumper wrapping, tire block locking, hydraulic ramp loading, and enclosed multi-car trailer shipping.</p>
            <div class="mt-auto pt-2 border-top w-100 d-flex justify-content-between align-items-center">
              <span class="small text-danger fw-bold"><i class="bi bi-check-circle-fill me-1"></i> Scratch-Free Guarantee</span>
            </div>
          </div>
        </div>

        <!-- Category 2: SUVs & Luxury Sedans -->
        <div class="col-md-4">
          <div class="vrl-bike-type-card d-flex flex-column align-items-start">
            <div class="vrl-bike-type-icon">
              <i class="bi bi-truck-front-fill"></i>
            </div>
            <span class="badge bg-danger text-white fw-bold mb-2 fs-8">SUVs, MUVs &amp; Executive</span>
            <h5 class="fw-bold text-dark mb-2 fs-6">SUVs &amp; Executive Sedans</h5>
            <p class="small text-muted mb-3">Reinforced wheel harness belts, underbody clearance checks, custom deck alignment, and 24x7 GPS tracking.</p>
            <div class="mt-auto pt-2 border-top w-100 d-flex justify-content-between align-items-center">
              <span class="small text-danger fw-bold"><i class="bi bi-check-circle-fill me-1"></i> Reinforced Deck Harness</span>
            </div>
          </div>
        </div>

        <!-- Category 3: Luxury & Super Cars -->
        <div class="col-md-4">
          <div class="vrl-bike-type-card d-flex flex-column align-items-start">
            <div class="vrl-bike-type-icon">
              <i class="bi bi-star-fill"></i>
            </div>
            <span class="badge bg-warning text-dark fw-bold mb-2 fs-8">Imported &amp; Luxury Cars</span>
            <h5 class="fw-bold text-dark mb-2 fs-6">Luxury &amp; Imported Cars</h5>
            <p class="small text-muted mb-3">Exclusive single-car enclosed trailer option, zero-contact body covers, dedicated driver, and 100% full insurance.</p>
            <div class="mt-auto pt-2 border-top w-100 d-flex justify-content-between align-items-center">
              <span class="small text-danger fw-bold"><i class="bi bi-check-circle-fill me-1"></i> Enclosed Single-Car Option</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ SECTION 3: 4-STEP CAR TRANSPORT PROCESS ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Step-by-Step Workflow</span>
        <h3 class="vrl-about-title mb-2">Our 4-Step <span class="vrl-about-highlight">Car Shifting Process</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">A systematic procedure designed to guarantee 100% scratch-free car shipping.</p>
      </div>

      <div class="row g-4">
        <!-- Step 1 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-armor-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-armor-badge">01</div>
              <i class="bi bi-clipboard-check-fill fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">Pre-Transport Check</h6>
            <p class="small text-muted mb-0">Joint inspection report recording odometer reading, car condition, accessories, and existing paint marks.</p>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-armor-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-armor-badge">02</div>
              <i class="bi bi-shield-fill-check fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">Foam Guard Protection</h6>
            <p class="small text-muted mb-0">Foam wrapping on bumpers, side mirrors, and door edges to shield against dust and gravel.</p>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-armor-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-armor-badge">03</div>
              <i class="bi bi-truck-front-fill fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">Hydraulic Carrier Transit</h6>
            <p class="small text-muted mb-0">Zero-tilt ramp loading onto specialized multi-car carriers with wheel stopper locks and live GPS tracking.</p>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-armor-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-armor-badge">04</div>
              <i class="bi bi-key-fill fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">Doorstep Delivery</h6>
            <p class="small text-muted mb-0">Safe unloading at your destination address, final inspection walkaround, and key &amp; document handover.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ SECTION 4: ESTIMATED TURNAROUND ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Transit Timeline</span>
        <h3 class="vrl-about-title mb-2">Estimated Delivery <span class="vrl-about-highlight">Timeframes</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">Fast, trackable, and safe car shipping across all major Indian routes.</p>
      </div>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="vrl-bike-rate-card">
            <i class="bi bi-clock-history fs-2 text-danger mb-2 d-block"></i>
            <h6 class="fw-bold text-dark mb-1 fs-6">Local / Intra-State Shifting</h6>
            <span class="badge bg-danger-subtle text-danger fw-bold rounded-pill px-3 py-1 mb-2 fs-8">24 to 48 Hours</span>
            <p class="small text-muted mb-0">Doorstep pickup and fast delivery for city or neighboring state transport.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="vrl-bike-rate-card">
            <i class="bi bi-truck-front-fill fs-2 text-danger mb-2 d-block"></i>
            <h6 class="fw-bold text-dark mb-1 fs-6">Inter-State Metro Express</h6>
            <span class="badge bg-warning-subtle text-dark fw-bold rounded-pill px-3 py-1 mb-2 fs-8">3 to 6 Days</span>
            <p class="small text-muted mb-0">Direct multi-car carrier shipping between major metro hubs with live GPS tracking.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="vrl-bike-rate-card">
            <i class="bi bi-shield-check fs-2 text-danger mb-2 d-block"></i>
            <h6 class="fw-bold text-dark mb-1 fs-6">Single-Car Enclosed Crate</h6>
            <span class="badge bg-success-subtle text-success fw-bold rounded-pill px-3 py-1 mb-2 fs-8">Dedicated Carrier</span>
            <p class="small text-muted mb-0">Exclusive enclosed single-car container transit for luxury &amp; sports automobiles.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ SECTION 5: CAR TRANSPORT FAQS ACCORDION ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Common Queries</span>
        <h3 class="vrl-about-title mb-2">Car Transportation <span class="vrl-about-highlight">FAQs</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">Got questions about car shipping documents or carrier safety? Here are the top answers.</p>
      </div>

      <div class="max-w-900 mx-auto">
        <div class="accordion" id="vrlCarFaq">

          <!-- FAQ 1 -->
          <div class="accordion-item vrl-faq-item">
            <h2 class="accordion-header" id="carFaqOne">
              <button class="accordion-button vrl-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#carCollapseOne" aria-expanded="true" aria-controls="carCollapseOne">
                <i class="bi bi-patch-question-fill text-danger me-3"></i> 1. What documents are needed for car shipping across India?
              </button>
            </h2>
            <div id="carCollapseOne" class="accordion-collapse collapse show" aria-labelledby="carFaqOne" data-bs-parent="#vrlCarFaq">
              <div class="accordion-body vrl-faq-body">
                To transport a car interstate, you must provide photocopies of:
                <ul class="vrl-policy-list mt-2 mb-0">
                  <li>Car Registration Certificate (RC Smart Card).</li>
                  <li>Valid Car Insurance Policy document.</li>
                  <li>Owner's Government ID Proof (Aadhaar / Driving License).</li>
                  <li>Pollution Under Control (PUC) certificate copy.</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item vrl-faq-item">
            <h2 class="accordion-header" id="carFaqTwo">
              <button class="accordion-button vrl-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#carCollapseTwo" aria-expanded="false" aria-controls="carCollapseTwo">
                <i class="bi bi-patch-question-fill text-danger me-3"></i> 2. How is my car secured on the carrier truck?
              </button>
            </h2>
            <div id="carCollapseTwo" class="accordion-collapse collapse" aria-labelledby="carFaqTwo" data-bs-parent="#vrlCarFaq">
              <div class="accordion-body vrl-faq-body">
                Cars are loaded onto hydraulic ramps and locked securely using <strong>heavy-duty wheel stoppers, rubber bumper pads, and high-tensile nylon tire harness belts</strong> to ensure zero movement or sway during transit.
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item vrl-faq-item">
            <h2 class="accordion-header" id="carFaqThree">
              <button class="accordion-button vrl-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#carCollapseThree" aria-expanded="false" aria-controls="carCollapseThree">
                <i class="bi bi-patch-question-fill text-danger me-3"></i> 3. Can I keep personal belongings inside my car during transport?
              </button>
            </h2>
            <div id="carCollapseThree" class="accordion-collapse collapse" aria-labelledby="carFaqThree" data-bs-parent="#vrlCarFaq">
              <div class="accordion-body vrl-faq-body">
                We strongly advise removing all valuable personal belongings, cash, jewelry, and important papers from the car prior to loading. Minor non-valuable items in the trunk are permissible under customer responsibility.
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="accordion-item vrl-faq-item">
            <h2 class="accordion-header" id="carFaqFour">
              <button class="accordion-button vrl-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#carCollapseFour" aria-expanded="false" aria-controls="carCollapseFour">
                <i class="bi bi-patch-question-fill text-danger me-3"></i> 4. Do you offer transit insurance for car shipping?
              </button>
            </h2>
            <div id="carCollapseFour" class="accordion-collapse collapse" aria-labelledby="carFaqFour" data-bs-parent="#vrlCarFaq">
              <div class="accordion-body vrl-faq-body">
                Yes! We offer <strong>Full Transit Insurance Coverage</strong> protecting your vehicle against accidental damage, fire, or overturning during transportation across India.
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- ============ SECTION 6: HIGH-IMPACT CALL-TO-ACTION BANNER ============ -->
    <div class="vrl-about-cta-card p-4 p-md-5 text-center text-md-start">
      <div class="row align-items-center g-4 position-relative z-2">
        <div class="col-lg-8">
          <span class="badge bg-warning text-dark fw-bold px-3 py-1.5 rounded-pill mb-2 fs-7">Ready To Transport Your Car?</span>
          <h3 class="fw-bold text-white mb-2 fs-3">Book Safe &amp; Scratch-Free Car Shipping Today</h3>
          <p class="text-white-50 mb-0 fs-6">Contact our senior vehicle relocation specialist for a free quote and instant discount estimate.</p>
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
