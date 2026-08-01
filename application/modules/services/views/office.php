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
    'bc_eyebrow' => 'ZERO DOWNTIME • SECURE • COMMERCIAL LOGISTICS',
    'bc_h1' => 'Office Relocation Services',
    'bc_desc' => 'Corporate office shifting, commercial logistics, IT server relocation, and workstation moving with weekend zero-downtime execution across India.',
    'breadcrumbs' => [
        ['name' => 'Services', 'url' => site_url('our-services')],
        ['name' => 'Office Relocation']
    ]
]);
?>

<!-- Main Office Relocation Section (Clean Simple Box Format) -->
<section class="vrl-about-section py-5">
  <div class="container">

    <!-- ============ SECTION 1: CLEAN SIMPLE CONTENT BOX ============ -->
    <div class="vrl-simple-content-box p-4 p-md-5 mb-5">
      <h2 class="vrl-simple-heading mb-4">
        Corporate Office Relocation &amp; Commercial Logistics
      </h2>

      <p class="vrl-about-prose mb-3">
        Welcome to <strong><?= htmlspecialchars($company3) ?></strong>, India's leading corporate office shifting and commercial logistics specialist. We provide end-to-end relocation solutions for startups, corporate offices, IT hubs, bank branches, and commercial warehouses.
      </p>

      <p class="vrl-about-prose text-muted mb-4">
        With over <?= $exp_num ?>+ years of commercial logistics expertise, our certified project managers execute weekend and overnight relocations to guarantee <strong>Zero Business Downtime</strong>. We handle modular desk dismantling, color-coded workstation tagging, IT server rack packing, and sealed container transportation.
      </p>

      <!-- 3 Feature Check Pills -->
      <div class="d-flex flex-wrap align-items-center gap-2 mb-4">
        <div class="vrl-bike-pill-item d-flex align-items-center gap-2">
          <i class="bi bi-check-circle-fill text-danger"></i> Weekend Zero-Downtime Execution
        </div>
        <div class="vrl-bike-pill-item d-flex align-items-center gap-2">
          <i class="bi bi-check-circle-fill text-danger"></i> IT Server &amp; Electronic Packing
        </div>
        <div class="vrl-bike-pill-item d-flex align-items-center gap-2">
          <i class="bi bi-check-circle-fill text-danger"></i> Color-Coded Workstation Labeling
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

    <!-- ============ SECTION 2: 3 COMMERCIAL CATEGORY CARDS ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Tailored Commercial Logistics</span>
        <h3 class="vrl-about-title mb-2">Specialized Relocation for <span class="vrl-about-highlight">Every Business Type</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">Customized project management plans engineered specifically for corporate infrastructures.</p>
      </div>

      <div class="row g-4">
        <!-- Category 1: Workstation & Office Furniture -->
        <div class="col-md-4">
          <div class="vrl-bike-type-card d-flex flex-column align-items-start">
            <div class="vrl-bike-type-icon">
              <i class="bi bi-building-fill"></i>
            </div>
            <span class="badge bg-light text-dark fw-bold border mb-2 fs-8">Workstations &amp; Furniture</span>
            <h5 class="fw-bold text-dark mb-2 fs-6">Office Workstation Shifting</h5>
            <p class="small text-muted mb-3">Dismantling of modular desks, executive chairs, conference tables, file cabinets, and color-coded box labeling.</p>
            <div class="mt-auto pt-2 border-top w-100 d-flex justify-content-between align-items-center">
              <span class="small text-danger fw-bold"><i class="bi bi-check-circle-fill me-1"></i> Color-Coded Labeling</span>
            </div>
          </div>
        </div>

        <!-- Category 2: IT Infrastructure & Servers -->
        <div class="col-md-4">
          <div class="vrl-bike-type-card d-flex flex-column align-items-start">
            <div class="vrl-bike-type-icon">
              <i class="bi bi-cpu-fill"></i>
            </div>
            <span class="badge bg-danger text-white fw-bold mb-2 fs-8">Servers &amp; Electronics</span>
            <h5 class="fw-bold text-dark mb-2 fs-6">IT &amp; Server Rack Relocation</h5>
            <p class="small text-muted mb-3">Anti-static bubble wrap, padded flight cases, shock-proof loading ramps, and climate-controlled container transit.</p>
            <div class="mt-auto pt-2 border-top w-100 d-flex justify-content-between align-items-center">
              <span class="small text-danger fw-bold"><i class="bi bi-check-circle-fill me-1"></i> Anti-Static Protection</span>
            </div>
          </div>
        </div>

        <!-- Category 3: Industrial & Warehouse Machinery -->
        <div class="col-md-4">
          <div class="vrl-bike-type-card d-flex flex-column align-items-start">
            <div class="vrl-bike-type-icon">
              <i class="bi bi-gear-wide-connected"></i>
            </div>
            <span class="badge bg-warning text-dark fw-bold mb-2 fs-8">Warehouse &amp; Heavy Units</span>
            <h5 class="fw-bold text-dark mb-2 fs-6">Commercial Machinery Move</h5>
            <p class="small text-muted mb-3">Heavy-duty crane rigging, forklift loading, customized wooden crates, and full commercial transit insurance.</p>
            <div class="mt-auto pt-2 border-top w-100 d-flex justify-content-between align-items-center">
              <span class="small text-danger fw-bold"><i class="bi bi-check-circle-fill me-1"></i> Crane &amp; Rigging Support</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ SECTION 3: 4-STEP COMMERCIAL PROCESS ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Step-by-Step Workflow</span>
        <h3 class="vrl-about-title mb-2">Our 4-Step <span class="vrl-about-highlight">Office Move Process</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">A systematic corporate procedure designed to guarantee 100% zero business downtime.</p>
      </div>

      <div class="row g-4">
        <!-- Step 1 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-armor-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-armor-badge">01</div>
              <i class="bi bi-diagram-3-fill fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">Site Audit &amp; Move Plan</h6>
            <p class="small text-muted mb-0">On-site commercial audit, floor plan mapping, elevator scheduling, and milestone execution plan.</p>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-armor-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-armor-badge">02</div>
              <i class="bi bi-tags-fill fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">Tagging &amp; Desk Packing</h6>
            <p class="small text-muted mb-0">Modular furniture dismantling, employee desk labeling, and anti-static wrapping for IT equipment.</p>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-armor-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-armor-badge">03</div>
              <i class="bi bi-truck-front-fill fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">Sealed Container Transit</h6>
            <p class="small text-muted mb-0">Sealed weatherproof container trucks equipped with 24x7 live GPS tracking and dedicated move manager.</p>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="col-md-6 col-lg-3">
          <div class="vrl-armor-card d-flex flex-column">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-armor-badge">04</div>
              <i class="bi bi-check-square-fill fs-4 text-danger opacity-75"></i>
            </div>
            <h6 class="fw-bold text-dark mb-2 fs-6">Unpacking &amp; Re-Assembly</h6>
            <p class="small text-muted mb-0">Off-hours unloading, workstation re-assembly, IT cable positioning, and final floor plan signoff.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ SECTION 4: ESTIMATED TURNAROUND ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Transit Timeline</span>
        <h3 class="vrl-about-title mb-2">Estimated Execution <span class="vrl-about-highlight">Timeframes</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">Fast, efficient, and trackable corporate shifting across all major Indian commercial hubs.</p>
      </div>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="vrl-bike-rate-card">
            <i class="bi bi-clock-history fs-2 text-danger mb-2 d-block"></i>
            <h6 class="fw-bold text-dark mb-1 fs-6">Weekend Overnight Shifting</h6>
            <span class="badge bg-danger-subtle text-danger fw-bold rounded-pill px-3 py-1 mb-2 fs-8">24 to 36 Hours</span>
            <p class="small text-muted mb-0">Friday evening packing &amp; Sunday night setup for zero Monday office downtime.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="vrl-bike-rate-card">
            <i class="bi bi-truck-front-fill fs-2 text-danger mb-2 d-block"></i>
            <h6 class="fw-bold text-dark mb-1 fs-6">Inter-State Corporate Moving</h6>
            <span class="badge bg-warning-subtle text-dark fw-bold rounded-pill px-3 py-1 mb-2 fs-8">3 to 5 Days</span>
            <p class="small text-muted mb-0">Multi-container fleet movement with live GPS tracking between branch offices.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="vrl-bike-rate-card">
            <i class="bi bi-shield-check fs-2 text-danger mb-2 d-block"></i>
            <h6 class="fw-bold text-dark mb-1 fs-6">IT &amp; Server Special Transit</h6>
            <span class="badge bg-success-subtle text-success fw-bold rounded-pill px-3 py-1 mb-2 fs-8">Climate-Controlled</span>
            <p class="small text-muted mb-0">Exclusive flight-cased server rack transportation under insurance coverage.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ SECTION 5: OFFICE RELOCATION FAQS ACCORDION ============ -->
    <div class="mb-5">
      <div class="text-center mb-4 pb-2">
        <span class="vrl-about-tag mb-2">Common Queries</span>
        <h3 class="vrl-about-title mb-2">Office Relocation <span class="vrl-about-highlight">FAQs</span></h3>
        <p class="text-muted fs-6 mx-auto" style="max-width: 580px;">Got questions about weekend moves or IT server safety? Here are the top answers.</p>
      </div>

      <div class="max-w-900 mx-auto">
        <div class="accordion" id="vrlOfficeFaq">

          <!-- FAQ 1 -->
          <div class="accordion-item vrl-faq-item">
            <h2 class="accordion-header" id="officeFaqOne">
              <button class="accordion-button vrl-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#officeCollapseOne" aria-expanded="true" aria-controls="officeCollapseOne">
                <i class="bi bi-patch-question-fill text-danger me-3"></i> 1. Can you execute office shifting on weekends to avoid business downtime?
              </button>
            </h2>
            <div id="officeCollapseOne" class="accordion-collapse collapse show" aria-labelledby="officeFaqOne" data-bs-parent="#vrlOfficeFaq">
              <div class="accordion-body vrl-faq-body">
                Yes, absolutely! Over 80% of our corporate relocations are executed on <strong>Friday evenings, Saturdays, and Sundays</strong> so your office is 100% operational on Monday morning.
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item vrl-faq-item">
            <h2 class="accordion-header" id="officeFaqTwo">
              <button class="accordion-button vrl-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#officeCollapseTwo" aria-expanded="false" aria-controls="officeCollapseTwo">
                <i class="bi bi-patch-question-fill text-danger me-3"></i> 2. How do you protect sensitive IT servers, monitors &amp; electronics?
              </button>
            </h2>
            <div id="officeCollapseTwo" class="accordion-collapse collapse" aria-labelledby="officeFaqTwo" data-bs-parent="#vrlOfficeFaq">
              <div class="accordion-body vrl-faq-body">
                We pack IT hardware using <strong>anti-static bubble wrap, padded flight crates, corner foam protectors, and customized wooden crating</strong>. Containers are sealed and monitored 24x7.
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item vrl-faq-item">
            <h2 class="accordion-header" id="officeFaqThree">
              <button class="accordion-button vrl-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#officeCollapseThree" aria-expanded="false" aria-controls="officeCollapseThree">
                <i class="bi bi-patch-question-fill text-danger me-3"></i> 3. Do you dismantle and re-assemble modular workstations?
              </button>
            </h2>
            <div id="officeCollapseThree" class="accordion-collapse collapse" aria-labelledby="officeFaqThree" data-bs-parent="#vrlOfficeFaq">
              <div class="accordion-body vrl-faq-body">
                Yes! Our carpenters and technical crew dismantle modular office cubicles, executive desks, conference tables, and wall-mounted whiteboards, and re-assemble them according to your new floor plan layout.
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="accordion-item vrl-faq-item">
            <h2 class="accordion-header" id="officeFaqFour">
              <button class="accordion-button vrl-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#officeCollapseFour" aria-expanded="false" aria-controls="officeCollapseFour">
                <i class="bi bi-patch-question-fill text-danger me-3"></i> 4. Do you provide commercial transit insurance?
              </button>
            </h2>
            <div id="officeCollapseFour" class="accordion-collapse collapse" aria-labelledby="officeFaqFour" data-bs-parent="#vrlOfficeFaq">
              <div class="accordion-body vrl-faq-body">
                Yes, we provide comprehensive <strong>Commercial Transit &amp; Goods Insurance</strong> protecting all office furniture, IT servers, computers, and official files during transit.
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
          <span class="badge bg-warning text-dark fw-bold px-3 py-1.5 rounded-pill mb-2 fs-7">Planning an Office Relocation?</span>
          <h3 class="fw-bold text-white mb-2 fs-3">Ensure Zero Business Downtime with Vince Roadline</h3>
          <p class="text-white-50 mb-0 fs-6">Contact our senior commercial logistics consultant for a site survey and customized quotation.</p>
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
