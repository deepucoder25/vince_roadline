<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => 'DOORSTEP • ZERO-DAMAGE • HOUSEHOLD SHIFTING',
    'bc_h1' => 'Household Shifting Services',
    'bc_desc' => 'Complete home relocation and household shifting services with 3-layer protective packaging, background-verified movers, and zero-damage delivery across India.',
    'breadcrumbs' => [
        ['name' => 'Home Relocation']
    ]
]);
?>

<!-- Main Home Shifting Section (Clean Simple Box Format) -->
<section class="vrl-about-section py-5">
  <div class="container">

    <!-- ============ SECTION 1: CLEAN SIMPLE CONTENT BOX ============ -->
    <div class="vrl-simple-content-box p-4 p-md-5 mb-5">
      <h2 class="vrl-simple-heading mb-4">
        Complete Household Shifting &amp; Home Relocation Services
      </h2>

      <p class="vrl-about-prose mb-3">
        Welcome to <strong><?= htmlspecialchars($company3) ?></strong>, India's most trusted household shifting and home relocation company. We offer seamless door-to-door moving services for 1BHK, 2BHK, 3BHK apartments, villas, and independent bungalows across all major cities and states in India.
      </p>

      <p class="vrl-about-prose text-muted mb-4">
        With over <?= $yearsExperience ?> years of expertise and <?= $happyClients ?> happy families relocated, our trained move specialists handle every aspect of your shift — from 3-layer bubble packaging of fragile crockery and electronic appliances to disassembly, container transport, unpacking, and room placement.
      </p>

      <!-- 3 Feature Check Pills -->
      <div class="d-flex flex-wrap align-items-center gap-2 mb-4">
        <div class="vrl-bike-pill-item d-flex align-items-center gap-2">
          <i class="bi bi-check-circle-fill text-danger"></i> 3-Layer Bubble Cushioning
        </div>
        <div class="vrl-bike-pill-item d-flex align-items-center gap-2">
          <i class="bi bi-check-circle-fill text-danger"></i> Background-Verified Crew
        </div>
        <div class="vrl-bike-pill-item d-flex align-items-center gap-2">
          <i class="bi bi-check-circle-fill text-danger"></i> Room-by-Room Unpacking Placement
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

    <!-- ============ SECTION 2: 3 HOME SHIFTING CATEGORY CARDS ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Tailored Relocation</span>
        <h3 class="vrl-about-title mb-2">Specialized Services for <span class="vrl-about-highlight">Every Home Type</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">Customized packing and crew deployment engineered specifically for your property size.</p>
      </div>

      <div class="row g-4">
        <!-- Category 1: 1BHK / 2BHK Apartment Move -->
        <div class="col-md-4">
          <div class="vrl-bike-type-card d-flex flex-column align-items-start">
            <div class="vrl-bike-type-icon">
              <i class="bi bi-house-door-fill"></i>
            </div>
            <span class="badge bg-light text-dark fw-bold border mb-2 fs-8">1BHK &amp; 2BHK Apartments</span>
            <h5 class="fw-bold text-dark mb-2 fs-6">1BHK / 2BHK Home Shifting</h5>
            <p class="small text-muted mb-3">Fast local and interstate moving with 3-layer bubble packaging, furniture padding, and dedicated container truck transit.</p>
            <div class="mt-auto pt-2 border-top w-100 d-flex justify-content-between align-items-center">
              <span class="small text-danger fw-bold"><i class="bi bi-check-circle-fill me-1"></i> Same-Day Local Move</span>
            </div>
          </div>
        </div>

        <!-- Category 2: 3BHK / 4BHK Villa Move -->
        <div class="col-md-4">
          <div class="vrl-bike-type-card d-flex flex-column align-items-start">
            <div class="vrl-bike-type-icon">
              <i class="bi bi-houses-fill"></i>
            </div>
            <span class="badge bg-danger text-white fw-bold mb-2 fs-8">3BHK, 4BHK &amp; Villas</span>
            <h5 class="fw-bold text-dark mb-2 fs-6">3BHK / Villa Relocation</h5>
            <p class="small text-muted mb-3">Dedicated Move Supervisor, multi-truck deployment, custom wooden crating for glassware, and full unpacking service.</p>
            <div class="mt-auto pt-2 border-top w-100 d-flex justify-content-between align-items-center">
              <span class="small text-danger fw-bold"><i class="bi bi-check-circle-fill me-1"></i> Dedicated Move Manager</span>
            </div>
          </div>
        </div>

        <!-- Category 3: Interstate Long-Distance Move -->
        <div class="col-md-4">
          <div class="vrl-bike-type-card d-flex flex-column align-items-start">
            <div class="vrl-bike-type-icon">
              <i class="bi bi-map-fill"></i>
            </div>
            <span class="badge bg-warning text-dark fw-bold mb-2 fs-8">Interstate Relocation</span>
            <h5 class="fw-bold text-dark mb-2 fs-6">Interstate Long-Distance</h5>
            <p class="small text-muted mb-3">Weatherproof sealed container trucks fitted with 24x7 live GPS tracking and complete transit insurance coverage.</p>
            <div class="mt-auto pt-2 border-top w-100 d-flex justify-content-between align-items-center">
              <span class="small text-danger fw-bold"><i class="bi bi-check-circle-fill me-1"></i> 24x7 Live GPS Tracking</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ SECTION 3: 4-STEP HOME RELOCATION PROCESS ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Step-by-Step Workflow</span>
        <h3 class="vrl-about-title mb-2">Our 4-Step <span class="vrl-about-highlight">Home Shifting Process</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">A systematic procedure designed to guarantee 100% zero damage household shifting.</p>
      </div>

      <div class="row g-4">
        <!-- Step 1 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-armor-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-armor-badge">01</div>
              <i class="bi bi-clipboard2-check-fill fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">Pre-Move Survey &amp; Quote</h6>
            <p class="small text-muted mb-0">Physical or virtual inventory check with an itemized written quote and zero hidden charges.</p>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-armor-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-armor-badge">02</div>
              <i class="bi bi-box-seam-fill fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">3-Layer Cushion Packaging</h6>
            <p class="small text-muted mb-0">Heavy-duty bubble wrap, corrugated sheets, stretch film, and wooden crates for fragile glassware.</p>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-armor-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-armor-badge">03</div>
              <i class="bi bi-truck-front-fill fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">GPS Tracked Transit</h6>
            <p class="small text-muted mb-0">Weatherproof container trucks fitted with live GPS tracking for safe transit across India.</p>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-armor-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-armor-badge">04</div>
              <i class="bi bi-house-heart-fill fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">Unpacking &amp; Room Setup</h6>
            <p class="small text-muted mb-0">Careful unloading, unpacking, furniture reassembly, and room-by-room item placement.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ SECTION 4: ESTIMATED TURNAROUND ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Transit Timeline</span>
        <h3 class="vrl-about-title mb-2">Estimated Delivery <span class="vrl-about-highlight">Timeframes</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">Fast, trackable, and safe household shifting across all major Indian routes.</p>
      </div>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="vrl-bike-rate-card">
            <i class="bi bi-clock-history fs-2 text-danger mb-2 d-block"></i>
            <h6 class="fw-bold text-dark mb-1 fs-6">Local City Shifting</h6>
            <span class="badge bg-danger-subtle text-danger fw-bold rounded-pill px-3 py-1 mb-2 fs-8">Same-Day (6-8 Hours)</span>
            <p class="small text-muted mb-0">Morning packing, loading, local transit, and evening doorstep placement.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="vrl-bike-rate-card">
            <i class="bi bi-truck-front-fill fs-2 text-danger mb-2 d-block"></i>
            <h6 class="fw-bold text-dark mb-1 fs-6">Inter-State Metro Moving</h6>
            <span class="badge bg-warning-subtle text-dark fw-bold rounded-pill px-3 py-1 mb-2 fs-8">3 to 5 Days</span>
            <p class="small text-muted mb-0">Direct container truck shipment between major metro hubs with live GPS tracking.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="vrl-bike-rate-card">
            <i class="bi bi-shield-check fs-2 text-danger mb-2 d-block"></i>
            <h6 class="fw-bold text-dark mb-1 fs-6">Villa &amp; Dedicated Truck</h6>
            <span class="badge bg-success-subtle text-success fw-bold rounded-pill px-3 py-1 mb-2 fs-8">Dedicated Fleet</span>
            <p class="small text-muted mb-0">Exclusive container truck reserved solely for your household goods.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ SECTION 5: HOME SHIFTING FAQS ACCORDION ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Common Queries</span>
        <h3 class="vrl-about-title mb-2">Household Shifting <span class="vrl-about-highlight">FAQs</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">Got questions about packing materials or pricing? Here are the top answers.</p>
      </div>

      <div class="max-w-900 mx-auto">
        <div class="accordion" id="vrlHomeFaq">

          <!-- FAQ 1 -->
          <div class="accordion-item vrl-faq-item">
            <h2 class="accordion-header" id="homeFaqOne">
              <button class="accordion-button vrl-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#homeCollapseOne" aria-expanded="true" aria-controls="homeCollapseOne">
                <i class="bi bi-patch-question-fill text-danger me-3"></i> 1. How is the household shifting cost calculated?
              </button>
            </h2>
            <div id="homeCollapseOne" class="accordion-collapse collapse show" aria-labelledby="homeFaqOne" data-bs-parent="#vrlHomeFaq">
              <div class="accordion-body vrl-faq-body">
                Our quotation is <strong>100% fixed and transparent with zero hidden costs</strong>. Pricing depends on total inventory volume, packing material quality, floor height/elevator access, and transit distance.
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item vrl-faq-item">
            <h2 class="accordion-header" id="homeFaqTwo">
              <button class="accordion-button vrl-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#homeCollapseTwo" aria-expanded="false" aria-controls="homeCollapseTwo">
                <i class="bi bi-patch-question-fill text-danger me-3"></i> 2. How do you protect fragile items like mirrors, glass tables &amp; TVs?
              </button>
            </h2>
            <div id="homeCollapseTwo" class="accordion-collapse collapse" aria-labelledby="homeFaqTwo" data-bs-parent="#vrlHomeFaq">
              <div class="accordion-body vrl-faq-body">
                We wrap all delicate items in <strong>heavy-duty 3-layer bubble wrap, corrugated sheets, corner guards, and custom wooden crates</strong>. Electronic appliances are packed inside padded cardboard cartons.
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item vrl-faq-item">
            <h2 class="accordion-header" id="homeFaqThree">
              <button class="accordion-button vrl-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#homeCollapseThree" aria-expanded="false" aria-controls="homeCollapseThree">
                <i class="bi bi-patch-question-fill text-danger me-3"></i> 3. Do you assist with unpacking and furniture reassembly?
              </button>
            </h2>
            <div id="homeCollapseThree" class="accordion-collapse collapse" aria-labelledby="homeFaqThree" data-bs-parent="#vrlHomeFaq">
              <div class="accordion-body vrl-faq-body">
                Yes! Our unpacking team unloads, unwraps, reassembles beds, wardrobes, and dining tables, and places furniture in designated rooms according to your layout preference.
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="accordion-item vrl-faq-item">
            <h2 class="accordion-header" id="homeFaqFour">
              <button class="accordion-button vrl-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#homeCollapseFour" aria-expanded="false" aria-controls="homeCollapseFour">
                <i class="bi bi-patch-question-fill text-danger me-3"></i> 4. Do you provide transit insurance for household goods?
              </button>
            </h2>
            <div id="homeCollapseFour" class="accordion-collapse collapse" aria-labelledby="homeFaqFour" data-bs-parent="#vrlHomeFaq">
              <div class="accordion-body vrl-faq-body">
                Yes, we offer comprehensive <strong>Full Transit Insurance Coverage</strong> protecting your furniture, appliances, and personal goods against accidental damage, fire, or weather risks during transit across India.
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
          <span class="badge bg-warning text-dark fw-bold px-3 py-1.5 rounded-pill mb-2 fs-7">Ready To Move Your Home?</span>
          <h3 class="fw-bold text-white mb-2 fs-3">Plan Your Stress-Free Household Move Today</h3>
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
