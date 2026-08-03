<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => 'SECURE • FAST • TWO WHEELER RELOCATION',
    'bc_h1' => 'Bike Transportation Services',
    'bc_desc' => 'Door-to-door motorcycle, scooter, and superbike relocation with 4-layer cushion wrapping, wooden crate framing, and 100% scratch-free delivery.',
    'breadcrumbs' => [
        ['name' => 'Bike Transportation']
    ]
]);
?>

<!-- Main Bike Transportation Section (Clean Simple Box Format) -->
<section class="vrl-about-section py-5">
  <div class="container">

    <!-- ============ SECTION 1: CLEAN SIMPLE CONTENT BOX ============ -->
    <div class="vrl-simple-content-box p-4 p-md-5 mb-5">
      <h2 class="vrl-simple-heading mb-4">
        Professional Bike Transportation Services Across India
      </h2>

      <p class="vrl-about-prose mb-3">
        Welcome to <strong><?= htmlspecialchars($company3) ?></strong>, India's leading vehicle transportation and logistics specialist. We offer safe, door-to-door bike shipping for all types of two-wheelers — including daily commuter scooters, heavy Royal Enfield cruisers, and high-performance luxury superbikes.
      </p>

      <p class="vrl-about-prose text-muted mb-4">
        With over <?= $yearsExperience ?> years of experience and <?= $happyClients ?> vehicles delivered, our move specialists utilize multi-layer bubble wrapping, customized wooden crate packaging, enclosed container trucks, and 24x7 live GPS tracking to ensure zero-scratch delivery.
      </p>

      <!-- 3 Feature Check Pills -->
      <div class="d-flex flex-wrap align-items-center gap-2 mb-4">
        <div class="vrl-bike-pill-item d-flex align-items-center gap-2">
          <i class="bi bi-check-circle-fill text-danger"></i> 3-Layer Bubble Cushioning
        </div>
        <div class="vrl-bike-pill-item d-flex align-items-center gap-2">
          <i class="bi bi-check-circle-fill text-danger"></i> Enclosed Weatherproof GPS Carriers
        </div>
        <div class="vrl-bike-pill-item d-flex align-items-center gap-2">
          <i class="bi bi-check-circle-fill text-danger"></i> 360° Custom Wooden Crates
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

    <!-- ============ SECTION 2: 3 TWO-WHEELER CLASS CATEGORIES ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Tailored Relocation</span>
        <h3 class="vrl-about-title mb-2">Specialized Transport for <span class="vrl-about-highlight">Every Bike Category</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">Customized packaging protocols engineered specifically for your vehicle type.</p>
      </div>

      <div class="row g-4">
        <!-- Class 1: Scooters & Commuters -->
        <div class="col-md-4">
          <div class="vrl-bike-type-card d-flex flex-column align-items-start">
            <div class="vrl-bike-type-icon">
              <i class="bi bi-scooter"></i>
            </div>
            <span class="badge bg-light text-dark fw-bold border mb-2 fs-8">100cc - 200cc</span>
            <h5 class="fw-bold text-dark mb-2 fs-6">Scooters &amp; Daily Commuters</h5>
            <p class="small text-muted mb-3">High-density foam padding over body fairings, handlebar covers, 3-layer bubble wrapping, and enclosed truck loading.</p>
            <div class="mt-auto pt-2 border-top w-100 d-flex justify-content-between align-items-center">
              <span class="small text-danger fw-bold"><i class="bi bi-check-circle-fill me-1"></i> Scratch-Free Guarantee</span>
            </div>
          </div>
        </div>

        <!-- Class 2: Cruisers & Royal Enfields -->
        <div class="col-md-4">
          <div class="vrl-bike-type-card d-flex flex-column align-items-start">
            <div class="vrl-bike-type-icon">
              <i class="bi bi-bicycle"></i>
            </div>
            <span class="badge bg-danger text-white fw-bold mb-2 fs-8">350cc - 800cc</span>
            <h5 class="fw-bold text-dark mb-2 fs-6">Royal Enfield &amp; Heavy Cruisers</h5>
            <p class="small text-muted mb-3">Reinforced chassis straps, silencer heat guards, fuel tank cushion armor, and custom wooden base plate locking.</p>
            <div class="mt-auto pt-2 border-top w-100 d-flex justify-content-between align-items-center">
              <span class="small text-danger fw-bold"><i class="bi bi-check-circle-fill me-1"></i> Reinforced Chassis Lock</span>
            </div>
          </div>
        </div>

        <!-- Class 3: Sports & Luxury Superbikes -->
        <div class="col-md-4">
          <div class="vrl-bike-type-card d-flex flex-column align-items-start">
            <div class="vrl-bike-type-icon">
              <i class="bi bi-lightning-charge-fill"></i>
            </div>
            <span class="badge bg-warning text-dark fw-bold mb-2 fs-8">1000cc+ Superbikes</span>
            <h5 class="fw-bold text-dark mb-2 fs-6">Sports &amp; Luxury Superbikes</h5>
            <p class="small text-muted mb-3">Customized 360° wooden crate framing, shock-absorbing interior lining, full insurance, and dedicated carrier shipping.</p>
            <div class="mt-auto pt-2 border-top w-100 d-flex justify-content-between align-items-center">
              <span class="small text-danger fw-bold"><i class="bi bi-check-circle-fill me-1"></i> 360° Wooden Crate Protection</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ SECTION 3: THE 4-LAYER ARMOR PACKING PROCESS ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Uncompromised Protection</span>
        <h3 class="vrl-about-title mb-2">Our Signature 4-Layer <span class="vrl-about-highlight">Armor Packaging</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">How we protect your vehicle from dust, rain, scratches, and transit vibrations.</p>
      </div>

      <div class="row g-4">
        <!-- Layer 1 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-armor-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-armor-badge">L1</div>
              <i class="bi bi-shield-fill-check fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">High-Density Foam Guards</h6>
            <p class="small text-muted mb-0">Custom foam sleeves wrapped around rear-view mirrors, brake levers, silencers, and fuel tank edges.</p>
          </div>
        </div>

        <!-- Layer 2 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-armor-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-armor-badge">L2</div>
              <i class="bi bi-box-seam-fill fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">3-Layer Bubble Wrapping</h6>
            <p class="small text-muted mb-0">Heavy-duty shock-absorbing air bubble rolls wrapped tightly across all body panels and headlights.</p>
          </div>
        </div>

        <!-- Layer 3 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-armor-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-armor-badge">L3</div>
              <i class="bi bi-layers-fill fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">Waterproof Stretch Film</h6>
            <p class="small text-muted mb-0">Industrial stretch film sealing the entire motorcycle to shield against moisture, dust, and rain.</p>
          </div>
        </div>

        <!-- Layer 4 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-armor-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-armor-badge">L4</div>
              <i class="bi bi-grid-3x3-gap-fill fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">Wooden Crate &amp; Wheel Lock</h6>
            <p class="small text-muted mb-0">Heavy wooden crate casing with nylon tie-down belts and wheel chocks locking the bike in place.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ SECTION 4: ESTIMATED TURNAROUND & SERVICE MATRIX ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Transit Timeline</span>
        <h3 class="vrl-about-title mb-2">Estimated Delivery <span class="vrl-about-highlight">Timeframes</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">Fast, reliable, and trackable bike shipping across all major Indian routes.</p>
      </div>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="vrl-bike-rate-card">
            <i class="bi bi-clock-history fs-2 text-danger mb-2 d-block"></i>
            <h6 class="fw-bold text-dark mb-1 fs-6">Local / Intra-State</h6>
            <span class="badge bg-danger-subtle text-danger fw-bold rounded-pill px-3 py-1 mb-2 fs-8">24 to 48 Hours</span>
            <p class="small text-muted mb-0">Same-day pickup and doorstep delivery for local city shifting.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="vrl-bike-rate-card">
            <i class="bi bi-truck-front-fill fs-2 text-danger mb-2 d-block"></i>
            <h6 class="fw-bold text-dark mb-1 fs-6">Inter-State Metro Express</h6>
            <span class="badge bg-warning-subtle text-dark fw-bold rounded-pill px-3 py-1 mb-2 fs-8">3 to 5 Days</span>
            <p class="small text-muted mb-0">Direct enclosed carrier shipping between major metro cities with live GPS tracking.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="vrl-bike-rate-card">
            <i class="bi bi-shield-check fs-2 text-danger mb-2 d-block"></i>
            <h6 class="fw-bold text-dark mb-1 fs-6">Superbike Crate Shipping</h6>
            <span class="badge bg-success-subtle text-success fw-bold rounded-pill px-3 py-1 mb-2 fs-8">Dedicated Carrier</span>
            <p class="small text-muted mb-0">Exclusive wooden crate framing and dedicated transport for luxury bikes.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ SECTION 5: BIKE TRANSPORT FAQS ACCORDION ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Common Queries</span>
        <h3 class="vrl-about-title mb-2">Bike Transportation <span class="vrl-about-highlight">FAQs</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">Got questions about documents or fuel limits? Here are the top answers.</p>
      </div>

      <div class="max-w-900 mx-auto">
        <div class="accordion" id="vrlBikeFaq">

          <!-- FAQ 1 -->
          <div class="accordion-item vrl-faq-item">
            <h2 class="accordion-header" id="bikeFaqOne">
              <button class="accordion-button vrl-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#bikeCollapseOne" aria-expanded="true" aria-controls="bikeCollapseOne">
                <i class="bi bi-patch-question-fill text-danger me-3"></i> 1. What documents are required for bike transportation?
              </button>
            </h2>
            <div id="bikeCollapseOne" class="accordion-collapse collapse show" aria-labelledby="bikeFaqOne" data-bs-parent="#vrlBikeFaq">
              <div class="accordion-body vrl-faq-body">
                To transport a motorcycle or scooter interstate, you need to provide photocopies of:
                <ul class="vrl-policy-list mt-2 mb-0">
                  <li>Bike Registration Certificate (RC Book / Smart Card).</li>
                  <li>Valid Bike Insurance Policy copy.</li>
                  <li>Owner's Government ID Proof (Aadhaar / Driving License).</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item vrl-faq-item">
            <h2 class="accordion-header" id="bikeFaqTwo">
              <button class="accordion-button vrl-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bikeCollapseTwo" aria-expanded="false" aria-controls="bikeCollapseTwo">
                <i class="bi bi-patch-question-fill text-danger me-3"></i> 2. How much fuel should be left in the bike tank?
              </button>
            </h2>
            <div id="bikeCollapseTwo" class="accordion-collapse collapse" aria-labelledby="bikeFaqTwo" data-bs-parent="#vrlBikeFaq">
              <div class="accordion-body vrl-faq-body">
                For safety regulations, the fuel tank must be nearly empty, containing <strong>no more than 1 to 2 liters</strong> of petrol. Excess fuel must be drained prior to loading to prevent fire hazards during container transit.
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item vrl-faq-item">
            <h2 class="accordion-header" id="bikeFaqThree">
              <button class="accordion-button vrl-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bikeCollapseThree" aria-expanded="false" aria-controls="bikeCollapseThree">
                <i class="bi bi-patch-question-fill text-danger me-3"></i> 3. Do you provide wooden crate packing for superbikes and Royal Enfields?
              </button>
            </h2>
            <div id="bikeCollapseThree" class="accordion-collapse collapse" aria-labelledby="bikeFaqThree" data-bs-parent="#vrlBikeFaq">
              <div class="accordion-body vrl-faq-body">
                Yes! For heavy motorcycles, Royal Enfields, and high-value superbikes (KTM, BMW, Ducati, Harley Davidson), we construct custom heavy-duty wooden crates lined with foam cushioning to guarantee complete 360-degree protection.
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="accordion-item vrl-faq-item">
            <h2 class="accordion-header" id="bikeFaqFour">
              <button class="accordion-button vrl-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bikeCollapseFour" aria-expanded="false" aria-controls="bikeCollapseFour">
                <i class="bi bi-patch-question-fill text-danger me-3"></i> 4. How long does interstate bike delivery take?
              </button>
            </h2>
            <div id="bikeCollapseFour" class="accordion-collapse collapse" aria-labelledby="bikeFaqFour" data-bs-parent="#vrlBikeFaq">
              <div class="accordion-body vrl-faq-body">
                Delivery time depends on transit distance:
                <ul class="vrl-policy-list mt-2 mb-0">
                  <li><strong>Local / Same-State Shifting:</strong> 24 to 48 hours.</li>
                  <li><strong>Major Metro Inter-State (e.g. Delhi to Bangalore):</strong> 4 to 6 days.</li>
                </ul>
                You receive live GPS tracking updates throughout the journey!
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
          <span class="badge bg-warning text-dark fw-bold px-3 py-1.5 rounded-pill mb-2 fs-7">Ready To Ship Your Bike?</span>
          <h3 class="fw-bold text-white mb-2 fs-3">Book Safe &amp; Scratch-Free Bike Transportation Today</h3>
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