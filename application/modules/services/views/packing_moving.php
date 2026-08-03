<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => '3-LAYER CUSHIONING • BUBBLE WRAP • WOODEN CRATES',
    'bc_h1' => 'Packing & Moving Services',
    'bc_desc' => 'Professional household and commercial packing services utilizing 3-layer air bubble wrap, corrugated sheets, custom wooden crates, and heavy-duty cartons.',
    'breadcrumbs' => [
        ['name' => 'Packing & Moving']
    ]
]);
?>

<!-- Main Packing & Moving Section (Clean Simple Box Format) -->
<section class="vrl-about-section py-5">
  <div class="container">

    <!-- ============ SECTION 1: CLEAN SIMPLE CONTENT BOX ============ -->
    <div class="vrl-simple-content-box p-4 p-md-5 mb-5">
      <h2 class="vrl-simple-heading mb-4">
        Professional Household &amp; Commercial Packing Services
      </h2>

      <p class="vrl-about-prose mb-3">
        Welcome to <strong><?= htmlspecialchars($company3) ?></strong>, India's leading packing and moving company. The key to a zero-damage relocation lies in superior packaging quality. We provide specialized packing solutions for household goods, fragile glassware, electronic appliances, and office equipment.
      </p>

      <p class="vrl-about-prose text-muted mb-4">
        With over <?= $yearsExperience ?> years of packing mastery and <?= number_format($clients_num) ?>+ successful moves, our trained packing crew uses heavy-duty 3-layer bubble wrap, corrugated cardboard sheets, edge foam protectors, stretch film, and custom wooden crating to guarantee 100% safety.
      </p>

      <!-- 3 Feature Check Pills -->
      <div class="d-flex flex-wrap align-items-center gap-2 mb-4">
        <div class="vrl-bike-pill-item d-flex align-items-center gap-2">
          <i class="bi bi-check-circle-fill text-danger"></i> 3-Layer Air Bubble Cushioning
        </div>
        <div class="vrl-bike-pill-item d-flex align-items-center gap-2">
          <i class="bi bi-check-circle-fill text-danger"></i> Customized Wooden Crating
        </div>
        <div class="vrl-bike-pill-item d-flex align-items-center gap-2">
          <i class="bi bi-check-circle-fill text-danger"></i> Sealed &amp; Labeled Storage Cartons
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

    <!-- ============ SECTION 2: 3 PACKING TIER CATEGORY CARDS ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Tailored Packaging Tiers</span>
        <h3 class="vrl-about-title mb-2">Specialized Packing Solutions for <span class="vrl-about-highlight">Every Item Type</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">Customized packing materials engineered specifically for maximum protection.</p>
      </div>

      <div class="row g-4">
        <!-- Tier 1: Standard Household Packaging -->
        <div class="col-md-4">
          <div class="vrl-bike-type-card d-flex flex-column align-items-start">
            <div class="vrl-bike-type-icon">
              <i class="bi bi-box-seam-fill"></i>
            </div>
            <span class="badge bg-light text-dark fw-bold border mb-2 fs-8">Household Furniture &amp; Goods</span>
            <h5 class="fw-bold text-dark mb-2 fs-6">Standard 3-Layer Packaging</h5>
            <p class="small text-muted mb-3">High-density bubble wrap, corrugated sheets, stretch film rolls, and heavy-duty 5-ply cardboard boxes.</p>
            <div class="mt-auto pt-2 border-top w-100 d-flex justify-content-between align-items-center">
              <span class="small text-danger fw-bold"><i class="bi bi-check-circle-fill me-1"></i> Heavy-Duty 5-Ply Cartons</span>
            </div>
          </div>
        </div>

        <!-- Tier 2: Wooden Crate Packaging -->
        <div class="col-md-4">
          <div class="vrl-bike-type-card d-flex flex-column align-items-start">
            <div class="vrl-bike-type-icon">
              <i class="bi bi-grid-3x3-gap-fill"></i>
            </div>
            <span class="badge bg-danger text-white fw-bold mb-2 fs-8">Glass, Marble &amp; Artwork</span>
            <h5 class="fw-bold text-dark mb-2 fs-6">Custom Wooden Crate Packing</h5>
            <p class="small text-muted mb-3">Customized wooden frame crates with foam lining engineered for glass dining tables, marble tops, mirrors &amp; art.</p>
            <div class="mt-auto pt-2 border-top w-100 d-flex justify-content-between align-items-center">
              <span class="small text-danger fw-bold"><i class="bi bi-check-circle-fill me-1"></i> Custom Wooden Frame Crates</span>
            </div>
          </div>
        </div>

        <!-- Tier 3: Electronic & Appliance Packing -->
        <div class="col-md-4">
          <div class="vrl-bike-type-card d-flex flex-column align-items-start">
            <div class="vrl-bike-type-icon">
              <i class="bi bi-tv-fill"></i>
            </div>
            <span class="badge bg-warning text-dark fw-bold mb-2 fs-8">TVs, Fridges &amp; Appliances</span>
            <h5 class="fw-bold text-dark mb-2 fs-6">Electronic &amp; Appliance Packing</h5>
            <p class="small text-muted mb-3">Corner foam guards, screen protectors, bubble wrapping, and waterproof thermocol box enclosures.</p>
            <div class="mt-auto pt-2 border-top w-100 d-flex justify-content-between align-items-center">
              <span class="small text-danger fw-bold"><i class="bi bi-check-circle-fill me-1"></i> Corner Foam Guards</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ SECTION 3: 4-STEP PACKING WORKFLOW ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Step-by-Step Workflow</span>
        <h3 class="vrl-about-title mb-2">Our 4-Step <span class="vrl-about-highlight">Packing Process</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">A systematic procedure designed to guarantee zero damage during loading and transit.</p>
      </div>

      <div class="row g-4">
        <!-- Step 1 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-armor-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-armor-badge">01</div>
              <i class="bi bi-list-check fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">Sorting &amp; Inventory Check</h6>
            <p class="small text-muted mb-0">Sorting items by fragility, material type, and size to select the exact packaging materials required.</p>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-armor-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-armor-badge">02</div>
              <i class="bi bi-shield-fill-check fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">Bubble &amp; Foam Layering</h6>
            <p class="small text-muted mb-0">Wrapping items in high-density foam, 3-layer bubble wrap, and corrugated protective sheets.</p>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-armor-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-armor-badge">03</div>
              <i class="bi bi-box-seam-fill fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">Box Sealing &amp; Labeling</h6>
            <p class="small text-muted mb-0">Packing items into 5-ply cartons, taping edges, and labeling box contents and room destination.</p>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-armor-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-armor-badge">04</div>
              <i class="bi bi-arrow-repeat fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">Unpacking &amp; Debris Removal</h6>
            <p class="small text-muted mb-0">Safe unwrapping at destination, item inspection with customer, and eco-friendly packaging disposal.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ SECTION 4: ESTIMATED TURNAROUND ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Packing Speed</span>
        <h3 class="vrl-about-title mb-2">Estimated Packing <span class="vrl-about-highlight">Timeframes</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">Fast, efficient, and methodical packing handled by background-verified specialists.</p>
      </div>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="vrl-bike-rate-card">
            <i class="bi bi-clock-history fs-2 text-danger mb-2 d-block"></i>
            <h6 class="fw-bold text-dark mb-1 fs-6">1BHK / 2BHK Packing</h6>
            <span class="badge bg-danger-subtle text-danger fw-bold rounded-pill px-3 py-1 mb-2 fs-8">2 to 4 Hours</span>
            <p class="small text-muted mb-0">Full household furniture and appliance packing completed in a single morning session.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="vrl-bike-rate-card">
            <i class="bi bi-boxes fs-2 text-danger mb-2 d-block"></i>
            <h6 class="fw-bold text-dark mb-1 fs-6">3BHK / Villa Packing</h6>
            <span class="badge bg-warning-subtle text-dark fw-bold rounded-pill px-3 py-1 mb-2 fs-8">4 to 6 Hours</span>
            <p class="small text-muted mb-0">Multi-packer deployment with specialized wooden crating for large estates.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="vrl-bike-rate-card">
            <i class="bi bi-shield-check fs-2 text-danger mb-2 d-block"></i>
            <h6 class="fw-bold text-dark mb-1 fs-6">Office &amp; IT Packing</h6>
            <span class="badge bg-success-subtle text-success fw-bold rounded-pill px-3 py-1 mb-2 fs-8">Overnight / Weekend</span>
            <p class="small text-muted mb-0">Color-coded workstation and anti-static server rack packing for zero business downtime.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ SECTION 5: PACKING & MOVING FAQS ACCORDION ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Common Queries</span>
        <h3 class="vrl-about-title mb-2">Packing &amp; Moving <span class="vrl-about-highlight">FAQs</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">Got questions about materials or unpacking services? Here are the top answers.</p>
      </div>

      <div class="max-w-900 mx-auto">
        <div class="accordion" id="vrlPackingFaq">

          <!-- FAQ 1 -->
          <div class="accordion-item vrl-faq-item">
            <h2 class="accordion-header" id="packFaqOne">
              <button class="accordion-button vrl-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#packCollapseOne" aria-expanded="true" aria-controls="packCollapseOne">
                <i class="bi bi-patch-question-fill text-danger me-3"></i> 1. What materials do you use for packing household items?
              </button>
            </h2>
            <div id="packCollapseOne" class="accordion-collapse collapse show" aria-labelledby="packFaqOne" data-bs-parent="#vrlPackingFaq">
              <div class="accordion-body vrl-faq-body">
                We use premium industrial packaging materials including <strong>heavy-duty 3-layer bubble wrap, corrugated cardboard sheets, stretch film rolls, edge foam guards, and custom wooden crates</strong>.
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item vrl-faq-item">
            <h2 class="accordion-header" id="packFaqTwo">
              <button class="accordion-button vrl-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#packCollapseTwo" aria-expanded="false" aria-controls="packCollapseTwo">
                <i class="bi bi-patch-question-fill text-danger me-3"></i> 2. Do you provide unpacking services at the destination?
              </button>
            </h2>
            <div id="packCollapseTwo" class="accordion-collapse collapse" aria-labelledby="packFaqTwo" data-bs-parent="#vrlPackingFaq">
              <div class="accordion-body vrl-faq-body">
                Yes! Our unpacking service includes unloading, unwrapping boxes, reassembling furniture, and placing items in designated rooms according to your layout preferences.
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item vrl-faq-item">
            <h2 class="accordion-header" id="packFaqThree">
              <button class="accordion-button vrl-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#packCollapseThree" aria-expanded="false" aria-controls="packCollapseThree">
                <i class="bi bi-patch-question-fill text-danger me-3"></i> 3. Can I pack some personal items myself?
              </button>
            </h2>
            <div id="packCollapseThree" class="accordion-collapse collapse" aria-labelledby="packFaqThree" data-bs-parent="#vrlPackingFaq">
              <div class="accordion-body vrl-faq-body">
                Yes, you may pack personal clothing, books, or non-fragile items yourself. However, we recommend letting our professional packers handle delicate electronics, glassware, and furniture for insurance compliance.
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="accordion-item vrl-faq-item">
            <h2 class="accordion-header" id="packFaqFour">
              <button class="accordion-button vrl-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#packCollapseFour" aria-expanded="false" aria-controls="packCollapseFour">
                <i class="bi bi-patch-question-fill text-danger me-3"></i> 4. Are packing material costs included in the quotation?
              </button>
            </h2>
            <div id="packCollapseFour" class="accordion-collapse collapse" aria-labelledby="packFaqFour" data-bs-parent="#vrlPackingFaq">
              <div class="accordion-body vrl-faq-body">
                Yes! Our written estimate is <strong>100% itemized and all-inclusive</strong>. All bubble wrap, boxes, tape, and crating costs are clearly specified with zero post-job surprises.
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
          <span class="badge bg-warning text-dark fw-bold px-3 py-1.5 rounded-pill mb-2 fs-7">Need Professional Packing?</span>
          <h3 class="fw-bold text-white mb-2 fs-3">Ensure Zero Damage with Vince Roadline Packing Services</h3>
          <p class="text-white-50 mb-0 fs-6">Contact our senior packing consultant for a free site survey and customized quotation.</p>
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
