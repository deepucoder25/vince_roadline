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

<!-- Main Testimonials Section -->
<section class="vrl-about-section py-5">
  <div class="container">

    <!-- Flash Alert Notifications -->
    <?php if ($this->session->flashdata('success')): ?>
      <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm rounded-4 p-4 mb-4" role="alert">
        <div class="d-flex align-items-center gap-3">
          <i class="bi bi-check-circle-fill fs-2 text-success"></i>
          <div>
            <h5 class="fw-bold mb-1">Review Submitted Successfully!</h5>
            <p class="mb-0 small"><?= $this->session->flashdata('success') ?></p>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')): ?>
      <div class="alert alert-warning alert-dismissible fade show border-0 shadow-sm rounded-4 p-4 mb-4" role="alert">
        <div class="d-flex align-items-center gap-3">
          <i class="bi bi-exclamation-triangle-fill fs-2 text-warning"></i>
          <div>
            <h5 class="fw-bold mb-1">Notice</h5>
            <p class="mb-0 small"><?= $this->session->flashdata('error') ?></p>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

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

    <!-- ============ REVIEWS GRID (DYNAMIC DB REVIEWS + FEATURED CARDS) ============ -->
    <div class="row g-4 mb-5" id="reviewsContainer">

      <!-- Dynamic Customer Reviews from Database -->
      <?php if (!empty($db_reviews)): ?>
        <?php foreach ($db_reviews as $rev): 
          $stars = (int) (isset($rev['stars']) ? $rev['stars'] : 5);
          $name = isset($rev['name']) ? htmlspecialchars($rev['name']) : 'Verified Customer';
          $city = !empty($rev['r_title']) ? htmlspecialchars($rev['r_title']) : (!empty($rev['city']) ? htmlspecialchars($rev['city']) : 'India');
          $type = !empty($rev['r_type']) ? htmlspecialchars($rev['r_type']) : 'Relocation Service';
          $desc = isset($rev['r_desc']) ? nl2br(htmlspecialchars($rev['r_desc'])) : '';
          $initials = strtoupper(substr($name, 0, 2));
          $img_str = isset($rev['r_img']) ? trim($rev['r_img']) : '';
        ?>
          <div class="col-md-6 col-lg-4">
            <div class="vrl-tst-card d-flex flex-column justify-content-between h-100 border rounded-4 p-4 bg-white shadow-sm hover-lift">
              <div class="vrl-tst-quote-watermark"><i class="bi bi-quote"></i></div>
              <div>
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <div class="vrl-tst-stars text-warning fs-6">
                    <?php for ($s = 1; $s <= 5; $s++): ?>
                      <i class="bi bi-star-<?= ($s <= $stars) ? 'fill' : 'blank' ?>"></i>
                    <?php endfor; ?>
                  </div>
                  <span class="vrl-tst-route-pill badge bg-light text-danger border px-3 py-1.5 rounded-pill fw-bold fs-8"><?= $city ?></span>
                </div>

                <p class="vrl-about-prose text-dark mb-3" style="font-size: 0.95rem; line-height: 1.6;">
                  "<?= $desc ?>"
                </p>

                <!-- Attached Photos if available -->
                <?php if (!empty($img_str)): 
                  $imgs = explode(',', $img_str);
                ?>
                  <div class="d-flex gap-2 mb-3 overflow-auto">
                    <?php foreach ($imgs as $img_path): 
                      $img_trimmed = trim($img_path);
                      if (empty($img_trimmed)) continue;
                      $final_src = (strpos($img_trimmed, '/') !== false) ? base_url($img_trimmed) : base_url('assets/uploads/reviewimg/' . $img_trimmed);
                    ?>
                      <a href="<?= $final_src ?>" target="_blank">
                        <img src="<?= $final_src ?>" alt="Customer Upload" class="rounded-3 border" style="width: 55px; height: 55px; object-fit: cover;">
                      </a>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
              </div>

              <div class="d-flex align-items-center gap-3 pt-3 border-top mt-2">
                <div class="vrl-tst-avatar bg-danger text-white rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 44px; height: 44px; font-size: 1rem;">
                  <?= $initials ?>
                </div>
                <div>
                  <h6 class="fw-bold text-dark mb-0 fs-7"><?= $name ?></h6>
                  <span class="small text-muted fs-8"><i class="bi bi-patch-check-fill text-success me-1"></i> <?= $type ?></span>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>

      <!-- Featured Testimonial Card 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="vrl-tst-card d-flex flex-column justify-content-between h-100">
          <div class="vrl-tst-quote-watermark"><i class="bi bi-quote"></i></div>
          <div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-tst-stars text-warning">
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

      <!-- Featured Testimonial Card 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="vrl-tst-card d-flex flex-column justify-content-between h-100">
          <div class="vrl-tst-quote-watermark"><i class="bi bi-quote"></i></div>
          <div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-tst-stars text-warning">
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
            <div class="vrl-tst-avatar bg-dark text-white">PS</div>
            <div>
              <h6 class="fw-bold text-dark mb-0 fs-7">Priya Sharma</h6>
              <span class="small text-muted fs-8"><i class="bi bi-patch-check-fill text-success me-1"></i> Corporate Office Shifting</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Featured Testimonial Card 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="vrl-tst-card d-flex flex-column justify-content-between h-100">
          <div class="vrl-tst-quote-watermark"><i class="bi bi-quote"></i></div>
          <div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="vrl-tst-stars text-warning">
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

    </div>

    <!-- ============ WRITE A REVIEW CTA CARD (OPEN REVIEW MODAL FROM REVIEWS MODULE) ============ -->
    <div class="vrl-review-form-card mb-5 p-4 p-md-5 rounded-4 shadow-sm position-relative overflow-hidden bg-white border" id="write-review-box">
      <!-- Top Red & Yellow Gradient Line -->
      <div style="position: absolute; top:0; left:0; width:100%; height:5px; background: linear-gradient(90deg, #D60412 0%, #FFB800 100%);"></div>

      <div class="row align-items-center g-3">
        <div class="col-lg-8">
          <span class="badge bg-danger text-white rounded-pill px-3 py-1.5 mb-2 fw-bold fs-8">SHARE YOUR FEEDBACK</span>
          <h3 class="fw-bold text-dark mb-1">Have You Used Our Relocation Services?</h3>
          <p class="text-muted mb-0">Help future families by sharing your moving experience with Vince Roadline Packers and Movers.</p>
        </div>
        <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
          <button type="button" class="btn btn-danger btn-lg rounded-pill px-4 py-3 fw-bold text-white shadow-sm d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#rvwmdl" data-toggle="modal" data-target="#rvwmdl">
            <i class="bi bi-pencil-square fs-5"></i> Write a Review
          </button>
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

<!-- Load Review Modal View from Reviews Module -->
<?php $this->load->view('reviews/reviewmodal'); ?>