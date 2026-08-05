<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$phone = isset($phone) ? $phone : '+91 9996340820';
$phonehtml = isset($phonehtml) ? $phonehtml : 'tel:' . preg_replace('/\D+/', '', (string)$phone);

$faqs_list = [
    [
        'question' => 'How much do Packers and Movers charge?',
        'answer' => 'The price depends on the distance, quantity of items, packing requirements, manpower, transportation vehicle and other selected services. Contact us to get a moving quotation.'
    ],
    [
        'question' => 'Does VRL provide home and office relocation?',
        'answer' => 'Yes. We provide both Home Relocation and Office Relocation services.'
    ],
    [
        'question' => 'Can you transport cars and bikes?',
        'answer' => 'Yes. Car Transportation and Bike Transportation are included in our main moving services.'
    ]
];
?>

<section class="vrl-faq-section position-relative py-4">

  <!-- Top-Right Background Dot Matrix Watermark -->
  <div class="vrl-faq-dot-bg"></div>

  <div class="container position-relative z-2">

    <!-- Section Header (Reuses SAME classes as Service Section) -->
    <div class="vrl-sec-header text-center mb-4 mb-lg-5">
      <div class="vrl-sec-eyebrow mb-2">
        <span class="vrl-eyebrow-line"></span>
        <span class="vrl-text-red">FAQS</span>
        <span class="vrl-eyebrow-line"></span>
      </div>

      <h2 class="vrl-sec-title mb-2">
        Frequently <span class="vrl-text-red">Asked Questions</span>
      </h2>

      <!-- Dashed Route Line + Truck Graphic -->
      <div class="vrl-sec-route-wrap mb-3">
        <span class="vrl-sec-route-line"></span>
        <i class="bi bi-truck vrl-sec-route-icon"></i>
        <span class="vrl-sec-route-line"></span>
      </div>

      <p class="vrl-sec-subtitle">
        Find quick answers to common questions about our<br class="d-none d-sm-inline"> <span class="vrl-text-red">packing and moving services.</span>
      </p>
    </div>

    <!-- FAQ Accordion List -->
    <div class="vrl-faq-list">
      <?php foreach ($faqs_list as $index => $item): ?>
        <?php $num = sprintf('%02d', $index + 1); ?>
        <div class="vrl-faq-item <?= $index === 0 ? 'active-item' : '' ?>" id="vrlFaqItem-<?= $index ?>">
          
          <div class="vrl-faq-header" onclick="vrlToggleFaq(<?= $index ?>)">
            <div class="vrl-faq-header-left">
              <div class="vrl-faq-num-badge"><?= $num ?></div>
              <h3 class="vrl-faq-question"><?= htmlspecialchars($item['question']) ?></h3>
            </div>
            
            <div class="vrl-faq-toggle-btn">
              <i class="bi <?= $index === 0 ? 'bi-dash-lg' : 'bi-plus-lg' ?>" id="vrlFaqIcon-<?= $index ?>"></i>
            </div>
          </div>

          <div class="vrl-faq-body vrl-faq-collapse" id="vrlFaqCollapse-<?= $index ?>" style="<?= $index === 0 ? 'display: block;' : 'display: none;' ?>">
            <div class="vrl-faq-answer-inner">
              <?= htmlspecialchars($item['answer']) ?>
            </div>
          </div>

        </div>
      <?php endforeach; ?>
    </div>

    <!-- Bottom Feature Trust Capsule Bar -->
    <div class="vrl-faq-capsule-wrap">
      <div class="vrl-faq-capsule">
        <div class="row g-3 align-items-center">

          <!-- Item 1: Still Have Questions / Call (Full width on mobile, auto on desktop) -->
          <div class="col-12 col-lg vrl-faq-capsule-divider">
            <div class="vrl-faq-capsule-item justify-content-center justify-content-lg-start">
              <a href="<?= $phonehtml ?>" class="vrl-faq-call-btn" aria-label="Call Us">
                <i class="bi bi-telephone-fill"></i>
              </a>
              <div>
                <div class="vrl-faq-call-sub">STILL HAVE QUESTIONS?</div>
                <div class="vrl-faq-call-main">We're here to help!</div>
              </div>
            </div>
          </div>

          <!-- Feature 1: Safe & Secure (2-2 grid on mobile) -->
          <div class="col-6 col-md-6 col-lg vrl-faq-capsule-divider">
            <div class="vrl-faq-capsule-item">
              <div class="vrl-faq-feature-icon">
                <i class="bi bi-shield-check"></i>
              </div>
              <div>
                <div class="vrl-faq-feature-title">SAFE &amp; SECURE</div>
                <div class="vrl-faq-feature-sub">Your belongings are in safe hands.</div>
              </div>
            </div>
          </div>

          <!-- Feature 2: On Time Delivery (2-2 grid on mobile) -->
          <div class="col-6 col-md-6 col-lg vrl-faq-capsule-divider">
            <div class="vrl-faq-capsule-item">
              <div class="vrl-faq-feature-icon">
                <i class="bi bi-clock"></i>
              </div>
              <div>
                <div class="vrl-faq-feature-title">ON TIME DELIVERY</div>
                <div class="vrl-faq-feature-sub">We value your time and deliver on time.</div>
              </div>
            </div>
          </div>

          <!-- Feature 3: Experienced Team (2-2 grid on mobile) -->
          <div class="col-6 col-md-6 col-lg vrl-faq-capsule-divider">
            <div class="vrl-faq-capsule-item">
              <div class="vrl-faq-feature-icon">
                <i class="bi bi-people"></i>
              </div>
              <div>
                <div class="vrl-faq-feature-title">EXPERIENCED TEAM</div>
                <div class="vrl-faq-feature-sub">Trained professionals for a hassle-free move.</div>
              </div>
            </div>
          </div>

          <!-- Feature 4: Customer Satisfaction (2-2 grid on mobile) -->
          <div class="col-6 col-md-6 col-lg">
            <div class="vrl-faq-capsule-item">
              <div class="vrl-faq-feature-icon">
                <i class="bi bi-award"></i>
              </div>
              <div>
                <div class="vrl-faq-feature-title">CUSTOMER SATISFACTION</div>
                <div class="vrl-faq-feature-sub">Your satisfaction is our top priority.</div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>

</section>

<!-- Minimal JS for FAQ Accordion Toggle -->
<script>
function vrlToggleFaq(idx) {
  const item = document.getElementById('vrlFaqItem-' + idx);
  const collapse = document.getElementById('vrlFaqCollapse-' + idx);
  const icon = document.getElementById('vrlFaqIcon-' + idx);
  if (!item || !collapse) return;

  const isOpen = item.classList.contains('active-item');

  document.querySelectorAll('.vrl-faq-item').forEach((el, i) => {
    el.classList.remove('active-item');
    const c = document.getElementById('vrlFaqCollapse-' + i);
    const ic = document.getElementById('vrlFaqIcon-' + i);
    if (c) c.style.display = 'none';
    if (ic) ic.className = 'bi bi-plus-lg';
  });

  if (!isOpen) {
    item.classList.add('active-item');
    collapse.style.display = 'block';
    if (icon) icon.className = 'bi bi-dash-lg';
  }
}
</script>

