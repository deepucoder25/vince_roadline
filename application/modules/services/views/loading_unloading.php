<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

// Dynamic variables passed directly from Controller.php ($this->comp array)
$exp_raw = isset($experience) ? $experience : (isset($yearsExperience) ? $yearsExperience : '20+');
$exp_num = (int) preg_replace('/\D+/', '', $exp_raw);

$clients_raw = isset($happyClients) ? $happyClients : '19,850+';
$clients_num = (int) preg_replace('/\D+/', '', $clients_raw);

$rating_num = (float) (isset($ratingValue) ? $ratingValue : '4.9');
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => 'VERIFIED CREW • HYDRAULIC LIFTS • HEAVY EQUIPMENT',
    'bc_h1' => 'Loading & Unloading Services',
    'bc_desc' => 'Professional loading and unloading services across India using trained background-verified movers, heavy-duty lifting belts, hydraulic ramps, and corner door-frame protection.',
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('our-services')],
        ['name' => 'Loading & Unloading']
    ]
]);
?>

<!-- Main Loading & Unloading Section (Clean Simple Box Format) -->
<section class="vrl-about-section py-5">
  <div class="container">

    <!-- ============ SECTION 1: CLEAN SIMPLE CONTENT BOX ============ -->
    <div class="vrl-simple-content-box p-4 p-md-5 mb-5">
      <h2 class="vrl-simple-heading mb-4">
        Safe Loading &amp; Unloading Services Across India
      </h2>

      <p class="vrl-about-prose mb-3">
        Welcome to <strong><?= htmlspecialchars($company3) ?></strong>, India's premier loading and unloading logistics specialist. Loading heavy furniture, fragile electronics, and commercial goods into container trucks requires skilled handling, proper weight distribution, and professional lifting equipment.
      </p>

      <p class="vrl-about-prose text-muted mb-4">
        With over <?= $exp_num ?>+ years of logistics excellence and <?= number_format($clients_num) ?>+ successful moves, our background-verified moving crews use heavy-duty lifting straps, hydraulic ramps, corner wall protectors, and wheel dollies to ensure zero scratches or structural damage.
      </p>

      <!-- 3 Feature Check Pills -->
      <div class="d-flex flex-wrap align-items-center gap-2 mb-4">
        <div class="vrl-bike-pill-item d-flex align-items-center gap-2">
          <i class="bi bi-check-circle-fill text-danger"></i> Background-Verified Moving Crew
        </div>
        <div class="vrl-bike-pill-item d-flex align-items-center gap-2">
          <i class="bi bi-check-circle-fill text-danger"></i> Heavy Lifting Slings &amp; Hydraulic Ramps
        </div>
        <div class="vrl-bike-pill-item d-flex align-items-center gap-2">
          <i class="bi bi-check-circle-fill text-danger"></i> Door-Frame &amp; Floor Protection
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

    <!-- ============ SECTION 2: 3 HANDLING CATEGORY CARDS ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Tailored Handling Solutions</span>
        <h3 class="vrl-about-title mb-2">Specialized Handling for <span class="vrl-about-highlight">Every Cargo Type</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">Customized equipment and crew deployment engineered specifically for heavy items.</p>
      </div>

      <div class="row g-4">
        <!-- Category 1: Household Furniture Loading -->
        <div class="col-md-4">
          <div class="vrl-bike-type-card d-flex flex-column align-items-start">
            <div class="vrl-bike-type-icon">
              <i class="bi bi-truck-flatbed"></i>
            </div>
            <span class="badge bg-light text-dark fw-bold border mb-2 fs-8">Household Goods</span>
            <h5 class="fw-bold text-dark mb-2 fs-6">Household Furniture Loading</h5>
            <p class="small text-muted mb-3">Safe handling of double beds, wardrobes, glass dining tables, sofas, and heavy double-door refrigerators.</p>
            <div class="mt-auto pt-2 border-top w-100 d-flex justify-content-between align-items-center">
              <span class="small text-danger fw-bold"><i class="bi bi-check-circle-fill me-1"></i> Heavy Furniture Slings</span>
            </div>
          </div>
        </div>

        <!-- Category 2: Commercial & Heavy Machinery -->
        <div class="col-md-4">
          <div class="vrl-bike-type-card d-flex flex-column align-items-start">
            <div class="vrl-bike-type-icon">
              <i class="bi bi-gear-wide-connected"></i>
            </div>
            <span class="badge bg-danger text-white fw-bold mb-2 fs-8">Commercial Cargo</span>
            <h5 class="fw-bold text-dark mb-2 fs-6">Machinery &amp; Pallet Handling</h5>
            <p class="small text-muted mb-3">Forklift loading, pallet jack maneuvering, heavy machinery rigging, and container weight balance lashing.</p>
            <div class="mt-auto pt-2 border-top w-100 d-flex justify-content-between align-items-center">
              <span class="small text-danger fw-bold"><i class="bi bi-check-circle-fill me-1"></i> Forklift &amp; Rigging Lifts</span>
            </div>
          </div>
        </div>

        <!-- Category 3: High-Rise Staircase & Elevator Handling -->
        <div class="col-md-4">
          <div class="vrl-bike-type-card d-flex flex-column align-items-start">
            <div class="vrl-bike-type-icon">
              <i class="bi bi-building-up"></i>
            </div>
            <span class="badge bg-warning text-dark fw-bold mb-2 fs-8">High-Rise Apartments</span>
            <h5 class="fw-bold text-dark mb-2 fs-6">High-Rise Elevator Handling</h5>
            <p class="small text-muted mb-3">Specialized harness belts, staircase padding, and elevator wall protectors for multi-story apartment moves.</p>
            <div class="mt-auto pt-2 border-top w-100 d-flex justify-content-between align-items-center">
              <span class="small text-danger fw-bold"><i class="bi bi-check-circle-fill me-1"></i> Door &amp; Floor Padding</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ SECTION 3: 4-STEP LOADING PROCESS ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Step-by-Step Workflow</span>
        <h3 class="vrl-about-title mb-2">Our 4-Step <span class="vrl-about-highlight">Loading Process</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">A systematic procedure designed to guarantee 100% zero damage during truck loading and unloading.</p>
      </div>

      <div class="row g-4">
        <!-- Step 1 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-armor-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-armor-badge">01</div>
              <i class="bi bi-shield-check fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">Property Protection Setup</h6>
            <p class="small text-muted mb-0">Applying protective padding on door frames, elevator walls, and stair railings before moving heavy items.</p>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-armor-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-armor-badge">02</div>
              <i class="bi bi-person-arms-up fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">Harness &amp; Ramp Loading</h6>
            <p class="small text-muted mb-0">Using heavy-duty lifting straps, wheel dollies, and ramps for smooth loading into container trucks.</p>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-armor-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-armor-badge">03</div>
              <i class="bi bi-truck-front-fill fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">Container Weight Lashing</h6>
            <p class="small text-muted mb-0">Strategic weight distribution inside the container, secured with nylon tie-down belts to prevent shifting.</p>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-armor-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-armor-badge">04</div>
              <i class="bi bi-house-heart-fill fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">Unloading &amp; Placement</h6>
            <p class="small text-muted mb-0">Careful unloading at destination, item inspection with customer, and room-by-room item placement.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ SECTION 4: ESTIMATED TURNAROUND ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Execution Timeline</span>
        <h3 class="vrl-about-title mb-2">Estimated Handling <span class="vrl-about-highlight">Timeframes</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">Fast, efficient, and careful loading executed by background-verified specialists.</p>
      </div>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="vrl-bike-rate-card">
            <i class="bi bi-clock-history fs-2 text-danger mb-2 d-block"></i>
            <h6 class="fw-bold text-dark mb-1 fs-6">1BHK / 2BHK Loading</h6>
            <span class="badge bg-danger-subtle text-danger fw-bold rounded-pill px-3 py-1 mb-2 fs-8">2 to 3 Hours</span>
            <p class="small text-muted mb-0">Complete household furniture loading handled by a 4-member crew.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="vrl-bike-rate-card">
            <i class="bi bi-truck-flatbed fs-2 text-danger mb-2 d-block"></i>
            <h6 class="fw-bold text-dark mb-1 fs-6">3BHK / Villa Loading</h6>
            <span class="badge bg-warning-subtle text-dark fw-bold rounded-pill px-3 py-1 mb-2 fs-8">3 to 5 Hours</span>
            <p class="small text-muted mb-0">Multi-mover deployment with specialized lifting harnesses for large estates.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="vrl-bike-rate-card">
            <i class="bi bi-shield-check fs-2 text-danger mb-2 d-block"></i>
            <h6 class="fw-bold text-dark mb-1 fs-6">Commercial Cargo Handling</h6>
            <span class="badge bg-success-subtle text-success fw-bold rounded-pill px-3 py-1 mb-2 fs-8">Forklift &amp; Rigging</span>
            <p class="small text-muted mb-0">Industrial machinery and palletized cargo loading under insurance coverage.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ SECTION 5: LOADING & UNLOADING FAQS ACCORDION ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Common Queries</span>
        <h3 class="vrl-about-title mb-2">Loading &amp; Unloading <span class="vrl-about-highlight">FAQs</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">Got questions about crew safety or high-rise moves? Here are the top answers.</p>
      </div>

      <div class="max-w-900 mx-auto">
        <div class="accordion" id="vrlLoadFaq">

          <!-- FAQ 1 -->
          <div class="accordion-item vrl-faq-item">
            <h2 class="accordion-header" id="loadFaqOne">
              <button class="accordion-button vrl-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#loadCollapseOne" aria-expanded="true" aria-controls="loadCollapseOne">
                <i class="bi bi-patch-question-fill text-danger me-3"></i> 1. Are your loading laborers background-verified?
              </button>
            </h2>
            <div id="loadCollapseOne" class="accordion-collapse collapse show" aria-labelledby="loadFaqOne" data-bs-parent="#vrlLoadFaq">
              <div class="accordion-body vrl-faq-body">
                Yes! We do not hire casual day laborers. Every member of our loading and unloading crew is <strong>full-time, background-verified, trained, and uniformed</strong>.
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item vrl-faq-item">
            <h2 class="accordion-header" id="loadFaqTwo">
              <button class="accordion-button vrl-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#loadCollapseTwo" aria-expanded="false" aria-controls="loadCollapseTwo">
                <i class="bi bi-patch-question-fill text-danger me-3"></i> 2. How do you handle heavy items when there is no elevator?
              </button>
            </h2>
            <div id="loadCollapseTwo" class="accordion-collapse collapse" aria-labelledby="loadFaqTwo" data-bs-parent="#vrlLoadFaq">
              <div class="accordion-body vrl-faq-body">
                Our movers utilize <strong>heavy-duty shoulder lifting straps, staircase corner padding, and stair-climbing wheel dollies</strong> to navigate tight staircases without touching or scratching walls.
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item vrl-faq-item">
            <h2 class="accordion-header" id="loadFaqThree">
              <button class="accordion-button vrl-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#loadCollapseThree" aria-expanded="false" aria-controls="loadCollapseThree">
                <i class="bi bi-patch-question-fill text-danger me-3"></i> 3. Do you provide unloading and room placement at the destination?
              </button>
            </h2>
            <div id="loadCollapseThree" class="accordion-collapse collapse" aria-labelledby="loadFaqThree" data-bs-parent="#vrlLoadFaq">
              <div class="accordion-body vrl-faq-body">
                Yes! Unloading includes placing furniture, heavy boxes, and electronic appliances into designated bedrooms, living rooms, and kitchens as requested by the customer.
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="accordion-item vrl-faq-item">
            <h2 class="accordion-header" id="loadFaqFour">
              <button class="accordion-button vrl-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#loadCollapseFour" aria-expanded="false" aria-controls="loadCollapseFour">
                <i class="bi bi-patch-question-fill text-danger me-3"></i> 4. Are goods insured against accidental drops during loading?
              </button>
            </h2>
            <div id="loadCollapseFour" class="accordion-collapse collapse" aria-labelledby="loadFaqFour" data-bs-parent="#vrlLoadFaq">
              <div class="accordion-body vrl-faq-body">
                Yes! Our <strong>Full Transit &amp; Handling Insurance</strong> covers declared household items and machinery against accidental drops or handling damage.
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
          <span class="badge bg-warning text-dark fw-bold px-3 py-1.5 rounded-pill mb-2 fs-7">Need Loading &amp; Unloading Crew?</span>
          <h3 class="fw-bold text-white mb-2 fs-3">Book Verified Moving Crew with Vince Roadline Today</h3>
          <p class="text-white-50 mb-0 fs-6">Contact our senior logistics supervisor for a free quote and instant discount estimate.</p>
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
