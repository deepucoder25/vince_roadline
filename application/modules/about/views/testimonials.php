<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

// Dynamic variables passed directly from Controller.php ($this->comp array)
$rating_num = (float) (isset($ratingValue) ? $ratingValue : '4.9');
$clients_raw = isset($happyClients) ? $happyClients : '19,850+';
$clients_num = (int) preg_replace('/\D+/', '', $clients_raw);
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_eyebrow' => 'CUSTOMER REVIEWS • VERIFIED TESTIMONIALS • 100% SATISFACTION',
    'bc_h1' => 'Customer Testimonials',
    'bc_desc' => 'Read authentic feedback and relocation reviews from over ' . $clients_num . '+ happy families and corporate clients across India.',
    'breadcrumbs' => [
        ['name' => 'Testimonials']
    ]
]);
?>

<!-- Main Testimonials Section (Full Width Layout) -->
<section class="vrl-about-section py-5">
  <div class="container">

    <!-- ============ HERO OVERVIEW CARD ============ -->
    <div class="vrl-choose-spotlight-card p-4 p-md-5 mb-5 text-center">
      <div class="max-w-700 mx-auto">
        <span class="vrl-about-tag mb-2">
          <i class="bi bi-star-fill text-warning me-1"></i> VERIFIED REVIEWS
        </span>
        <h2 class="vrl-choose-heading mb-3">
          What Our Clients Say About <span class="vrl-about-highlight">Vince Roadline</span>
        </h2>
        <p class="vrl-about-prose text-muted mb-4">
          Real stories from homeowners, corporate executives, and vehicle owners who experienced zero-damage, stress-free shifting with Vince Roadline Packers and Movers.
        </p>

        <!-- Rating Score Capsule -->
        <div class="d-inline-flex align-items-center gap-3 bg-light border rounded-pill px-4 py-2 shadow-sm mb-2">
          <div class="d-flex align-items-center gap-1 text-warning fs-5">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </div>
          <span class="fw-extrabold text-dark fs-5 mb-0"><?= $rating_num ?> / 5.0</span>
          <span class="text-muted small">Based on <?= number_format($clients_num) ?>+ Moves</span>
        </div>
      </div>
    </div>

    <!-- ============ REVIEWS GRID (6 HIGH-IMPACT TESTIMONIAL CARDS) ============ -->
    <div class="row g-4 mb-5">

      <!-- Review 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="vrl-tst-card d-flex flex-column justify-content-between h-100">
          <div class="vrl-tst-quote-watermark"><i class="bi bi-quote"></i></div>
          <div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-tst-stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <span class="vrl-tst-route-pill">Bangalore ➔ Delhi</span>
            </div>

            <p class="vrl-about-prose text-dark mb-4">
              "Vince Roadline moved my entire 3BHK household from Bangalore to Delhi without a single scratch! Their 3-layer bubble wrapping for glassware and LED TV was incredible. Highly recommended!"
            </p>
          </div>

          <div class="d-flex align-items-center gap-3 pt-3 border-top">
            <div class="vrl-tst-avatar">RK</div>
            <div>
              <h6 class="fw-bold text-dark mb-0 fs-7">Rajesh Kumar</h6>
              <span class="small text-muted fs-8"><i class="bi bi-patch-check-fill text-success me-1"></i> Verified Household Move</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Review 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="vrl-tst-card d-flex flex-column justify-content-between h-100">
          <div class="vrl-tst-quote-watermark"><i class="bi bi-quote"></i></div>
          <div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-tst-stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <span class="vrl-tst-route-pill">Mumbai ➔ Hyderabad</span>
            </div>

            <p class="vrl-about-prose text-dark mb-4">
              "Superb office relocation service! They packed 25 workstation setups, servers, and office furniture over the weekend. Our team resumed work on Monday morning without any downtime."
            </p>
          </div>

          <div class="d-flex align-items-center gap-3 pt-3 border-top">
            <div class="vrl-tst-avatar bg-dark">PS</div>
            <div>
              <h6 class="fw-bold text-dark mb-0 fs-7">Priya Sharma</h6>
              <span class="small text-muted fs-8"><i class="bi bi-patch-check-fill text-success me-1"></i> Corporate Office Shifting</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Review 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="vrl-tst-card d-flex flex-column justify-content-between h-100">
          <div class="vrl-tst-quote-watermark"><i class="bi bi-quote"></i></div>
          <div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-tst-stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <span class="vrl-tst-route-pill">Pune ➔ Gurgaon</span>
            </div>

            <p class="vrl-about-prose text-dark mb-4">
              "Transported my Hyundai Creta car via Vince Roadline hydraulic carrier. The car arrived in Gurgaon on exact schedule without a single dent. Live GPS link kept me updated throughout!"
            </p>
          </div>

          <div class="d-flex align-items-center gap-3 pt-3 border-top">
            <div class="vrl-tst-avatar">AM</div>
            <div>
              <h6 class="fw-bold text-dark mb-0 fs-7">Amit Mehta</h6>
              <span class="small text-muted fs-8"><i class="bi bi-patch-check-fill text-success me-1"></i> Car Transportation</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Review 4 -->
      <div class="col-md-6 col-lg-4">
        <div class="vrl-tst-card d-flex flex-column justify-content-between h-100">
          <div class="vrl-tst-quote-watermark"><i class="bi bi-quote"></i></div>
          <div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-tst-stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <span class="vrl-tst-route-pill">Chennai ➔ Kolkata</span>
            </div>

            <p class="vrl-about-prose text-dark mb-4">
              "Transparent written quotation with zero hidden charges. The crew arrived on time in Chennai, loaded everything into a waterproof container truck, and unloaded smoothly in Kolkata."
            </p>
          </div>

          <div class="d-flex align-items-center gap-3 pt-3 border-top">
            <div class="vrl-tst-avatar">SN</div>
            <div>
              <h6 class="fw-bold text-dark mb-0 fs-7">Siddharth Nair</h6>
              <span class="small text-muted fs-8"><i class="bi bi-patch-check-fill text-success me-1"></i> Interstate Shifting</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Review 5 -->
      <div class="col-md-6 col-lg-4">
        <div class="vrl-tst-card d-flex flex-column justify-content-between h-100">
          <div class="vrl-tst-quote-watermark"><i class="bi bi-quote"></i></div>
          <div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-tst-stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <span class="vrl-tst-route-pill">Ahmedabad ➔ Surat</span>
            </div>

            <p class="vrl-about-prose text-dark mb-4">
              "Exceptional local home shifting in Gujarat. The packing team was polite, background-verified, and took extra care of our wooden furniture and glass cabinets."
            </p>
          </div>

          <div class="d-flex align-items-center gap-3 pt-3 border-top">
            <div class="vrl-tst-avatar bg-dark">VP</div>
            <div>
              <h6 class="fw-bold text-dark mb-0 fs-7">Vikram Patel</h6>
              <span class="small text-muted fs-8"><i class="bi bi-patch-check-fill text-success me-1"></i> Local Home Relocation</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Review 6 -->
      <div class="col-md-6 col-lg-4">
        <div class="vrl-tst-card d-flex flex-column justify-content-between h-100">
          <div class="vrl-tst-quote-watermark"><i class="bi bi-quote"></i></div>
          <div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-tst-stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <span class="vrl-tst-route-pill">Chandigarh ➔ Jaipur</span>
            </div>

            <p class="vrl-about-prose text-dark mb-4">
              "Best bike transportation service! They packed my Royal Enfield bike with thick foam sheets and wooden crate framing. Received in Jaipur in mint condition."
            </p>
          </div>

          <div class="d-flex align-items-center gap-3 pt-3 border-top">
            <div class="vrl-tst-avatar">GS</div>
            <div>
              <h6 class="fw-bold text-dark mb-0 fs-7">Gurpreet Singh</h6>
              <span class="small text-muted fs-8"><i class="bi bi-patch-check-fill text-success me-1"></i> Bike Transport</span>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- ============ CALL-TO-ACTION BANNER ============ -->
    <div class="vrl-about-cta-card p-4 p-md-5 text-center text-md-start">
      <div class="row align-items-center g-4 position-relative z-2">
        <div class="col-lg-8">
          <span class="badge bg-warning text-dark fw-bold px-3 py-1.5 rounded-pill mb-2 fs-7">Experience Premium Relocation</span>
          <h3 class="fw-bold text-white mb-2 fs-3">Join Over 50,000+ Satisfied Vince Roadline Customers</h3>
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