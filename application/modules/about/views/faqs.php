<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

// Dynamic variables passed directly from Controller.php ($this->comp array)
$exp_raw = isset($experience) ? $experience : (isset($yearsExperience) ? $yearsExperience : '20+');
$exp_num = (int) preg_replace('/\D+/', '', $exp_raw);
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => 'GOT QUESTIONS? • WE HAVE ANSWERS • 24x7 SUPPORT',
    'bc_h1' => 'Frequently Asked Questions',
    'bc_desc' => 'Find instant answers to common questions about household shifting, packing materials, pricing estimates, live tracking, and transit insurance.',
    'breadcrumbs' => [
        ['name' => 'Frequently Asked Questions']
    ]
]);
?>

<!-- Main FAQs Section (Full Width Layout) -->
<section class="vrl-about-section py-5">
  <div class="container">

    <!-- ============ HERO OVERVIEW CARD ============ -->
    <div class="vrl-choose-spotlight-card p-4 p-md-5 mb-5 text-center">
      <div class="max-w-700 mx-auto">
        <span class="vrl-about-tag mb-2">
          <i class="bi bi-question-circle-fill me-1"></i> FAQ KNOWLEDGE HUB
        </span>
        <h2 class="vrl-choose-heading mb-3">
          Everything You Need to Know About <span class="vrl-about-highlight">Vince Roadline</span>
        </h2>
        <p class="vrl-about-prose text-muted mb-0">
          Have queries about how we estimate costs, pack your valuable items, or track container trucks? Browse our top FAQs below or contact our 24x7 helpdesk.
        </p>
      </div>
    </div>

    <!-- ============ INTERACTIVE FAQ ACCORDION ============ -->
    <div class="max-w-900 mx-auto mb-5">
      <div class="accordion" id="vrlFaqAccordion">

        <!-- FAQ 1 -->
        <div class="accordion-item vrl-faq-item">
          <h2 class="accordion-header" id="faqHeadingOne">
            <button class="accordion-button vrl-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
              <i class="bi bi-patch-question-fill text-danger me-3"></i> 1. How far in advance should I book my relocation with Vince Roadline?
            </button>
          </h2>
          <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#vrlFaqAccordion">
            <div class="accordion-body vrl-faq-body">
              We recommend booking your move at least <strong>3 to 5 days in advance</strong> for local household shifting and <strong>7 days in advance</strong> for interstate moving. However, we also accommodate urgent same-day or 24-hour emergency shifting requests depending on truck availability.
            </div>
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="accordion-item vrl-faq-item">
          <h2 class="accordion-header" id="faqHeadingTwo">
            <button class="accordion-button vrl-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
              <i class="bi bi-patch-question-fill text-danger me-3"></i> 2. How is the shifting cost calculated? Are there any hidden charges?
            </button>
          </h2>
          <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#vrlFaqAccordion">
            <div class="accordion-body vrl-faq-body">
              Our quotation is <strong>100% transparent with zero hidden charges</strong>. Pricing depends on:
              <ul class="vrl-policy-list mt-2 mb-0">
                <li>Total inventory volume and weight of goods.</li>
                <li>Distance between origin and destination addresses.</li>
                <li>Packing material tier (e.g., 3-layer bubble cushion, wooden crates).</li>
                <li>Floor elevation and availability of service lifts.</li>
              </ul>
              You receive a binding written contract before work starts — guaranteed no post-move price hikes!
            </div>
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="accordion-item vrl-faq-item">
          <h2 class="accordion-header" id="faqHeadingThree">
            <button class="accordion-button vrl-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
              <i class="bi bi-patch-question-fill text-danger me-3"></i> 3. What packing materials do you use for fragile goods and electronics?
            </button>
          </h2>
          <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#vrlFaqAccordion">
            <div class="accordion-body vrl-faq-body">
              We utilize premium industrial packaging materials including <strong>heavy-duty 3-layer bubble wrap, corrugated cardboard sheets, stretch film rolls, edge guards, and custom wooden crates</strong> for fragile glassware, mirrors, LED TVs, and antique artwork.
            </div>
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="accordion-item vrl-faq-item">
          <h2 class="accordion-header" id="faqHeadingFour">
            <button class="accordion-button vrl-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
              <i class="bi bi-patch-question-fill text-danger me-3"></i> 4. How can I track my shipment container in real-time?
            </button>
          </h2>
          <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour" data-bs-parent="#vrlFaqAccordion">
            <div class="accordion-body vrl-faq-body">
              All Vince Roadline long-distance container trucks are fitted with <strong>24x7 GPS tracking systems</strong>. Once your goods are loaded, your dedicated Move Manager provides a live tracking link or direct phone updates so you can monitor transit progress step by step.
            </div>
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="accordion-item vrl-faq-item">
          <h2 class="accordion-header" id="faqHeadingFive">
            <button class="accordion-button vrl-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive">
              <i class="bi bi-patch-question-fill text-danger me-3"></i> 5. Do you provide transit insurance for household goods and vehicles?
            </button>
          </h2>
          <div id="faqCollapseFive" class="accordion-collapse collapse" aria-labelledby="faqHeadingFive" data-bs-parent="#vrlFaqAccordion">
            <div class="accordion-body vrl-faq-body">
              Yes, absolutely! We offer comprehensive <strong>Full Transit Insurance Coverage</strong> protecting your household items, furniture, car, or motorcycle against accidental damage, fire, or weather risks during transit across India.
            </div>
          </div>
        </div>

        <!-- FAQ 6 -->
        <div class="accordion-item vrl-faq-item">
          <h2 class="accordion-header" id="faqHeadingSix">
            <button class="accordion-button vrl-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSix" aria-expanded="false" aria-controls="faqCollapseSix">
              <i class="bi bi-patch-question-fill text-danger me-3"></i> 6. Are your move specialists background-verified?
            </button>
          </h2>
          <div id="faqCollapseSix" class="accordion-collapse collapse" aria-labelledby="faqHeadingSix" data-bs-parent="#vrlFaqAccordion">
            <div class="accordion-body vrl-faq-body">
              Yes! We do not hire casual day laborers. Every member of the Vince Roadline packing crew is <strong>full-time, background-verified, trained, and uniformed</strong> to ensure complete safety and privacy for your home.
            </div>
          </div>
        </div>

        <!-- FAQ 7 -->
        <div class="accordion-item vrl-faq-item">
          <h2 class="accordion-header" id="faqHeadingSeven">
            <button class="accordion-button vrl-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSeven" aria-expanded="false" aria-controls="faqCollapseSeven">
              <i class="bi bi-patch-question-fill text-danger me-3"></i> 7. How does car and bike transportation work?
            </button>
          </h2>
          <div id="faqCollapseSeven" class="accordion-collapse collapse" aria-labelledby="faqHeadingSeven" data-bs-parent="#vrlFaqAccordion">
            <div class="accordion-body vrl-faq-body">
              Vehicles are transported using <strong>specialized multi-car hydraulic car carriers and enclosed bike trailers</strong>. Cars are locked onto safety ramps with wheel stoppers and foam bumper guards to guarantee 100% scratch-free delivery.
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- ============ CALL-TO-ACTION BANNER ============ -->
    <div class="vrl-about-cta-card p-4 p-md-5 text-center text-md-start">
      <div class="row align-items-center g-4 position-relative z-2">
        <div class="col-lg-8">
          <span class="badge bg-warning text-dark fw-bold px-3 py-1.5 rounded-pill mb-2 fs-7">Still Have Questions?</span>
          <h3 class="fw-bold text-white mb-2 fs-3">Our Relocation Experts Are Available 24x7</h3>
          <p class="text-white-50 mb-0 fs-6">Call our helpline or request an instant free quote to speak with a senior move consultant.</p>
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