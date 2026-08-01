<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Interactive FAQ Section -->
<div class="pm-faq-section mt-5 pt-4 border-top">

  <!-- Interactive Section Header -->
  <div class="mb-4">
    <span class="badge bg-danger-subtle text-danger border border-danger-subtle rounded-pill px-3 py-1 fw-bold fs-7 text-uppercase mb-2 d-inline-block">
      <i class="bi bi-question-circle-fill me-1"></i> Help &amp; FAQs
    </span>
    <h3 class="pm-section-title fw-bold text-dark mb-1">
      Frequently Asked Questions in <span class="text-danger"><?= htmlspecialchars($city) ?></span>
    </h3>
    <p class="text-muted small mb-0">Everything you need to know about booking Vince Roadline Packers and Movers in <?= htmlspecialchars($city) ?></p>
  </div>

  <!-- Accordion List -->
  <div class="city-faq-accordion accordion" id="cityFaqAccordion">
    <?php
    $faqs = [
      [
        "q" => "How early should I book Packers and Movers in $city?",
        "a" => "We recommend booking at least 3 to 7 days in advance to secure your preferred shifting slot, especially for month-end weekends when demand is highest in $city."
      ],
      [
        "q" => "Do you provide multi-layer packing materials for fragile items?",
        "a" => "Yes! We bring premium packing materials including bubble wrap, corrugated sheets, stretch film, heavy-duty cartons, and corner guards for electronics and glass items."
      ],
      [
        "q" => "Are there any hidden costs added after shifting in $city?",
        "a" => "No. We provide a transparent written quotation upfront covering packing, loading, transport, unloading, and toll taxes with zero hidden charges."
      ],
      [
        "q" => "Can I transport my bike or car along with household goods?",
        "a" => "Yes. We offer combined household and vehicle relocation services in $city using specialized covered car carriers and two-wheeler safety stands."
      ],
      [
        "q" => "Is transit insurance included during relocation?",
        "a" => "Full transit insurance coverage is available to protect your goods against unexpected accidents or natural hazards during transportation."
      ],
      [
        "q" => "Do you assist with dismantling and assembling furniture?",
        "a" => "Yes! Our trained staff handles basic dismantling and reassembly of wooden beds, wardrobes, dining tables, and TV units free of hassle."
      ],
    ];

    foreach ($faqs as $i => $faq):
      $isFirst = ($i === 0);
    ?>
      <div class="accordion-item pm-faq-item mb-3 rounded-4 overflow-hidden border shadow-sm">
        <h2 class="accordion-header" id="headingFaq<?= $i ?>">
          <button class="accordion-button pm-faq-button <?= $isFirst ? '' : 'collapsed' ?> fw-semibold" 
                  type="button" 
                  data-bs-toggle="collapse" 
                  data-bs-target="#collapseFaq<?= $i ?>" 
                  aria-expanded="<?= $isFirst ? 'true' : 'false' ?>" 
                  aria-controls="collapseFaq<?= $i ?>">
            <i class="bi bi-patch-question-fill text-danger me-3 fs-5 flex-shrink-0"></i>
            <span class="pm-faq-q-text"><?= htmlspecialchars($faq['q']) ?></span>
          </button>
        </h2>
        <div id="collapseFaq<?= $i ?>" 
             class="accordion-collapse collapse <?= $isFirst ? 'show' : '' ?>" 
             aria-labelledby="headingFaq<?= $i ?>" 
             data-bs-parent="#cityFaqAccordion">
          <div class="accordion-body pm-faq-answer text-muted border-start border-danger border-3 bg-white ms-3 my-2 ps-3">
            <?= htmlspecialchars($faq['a']) ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

</div>