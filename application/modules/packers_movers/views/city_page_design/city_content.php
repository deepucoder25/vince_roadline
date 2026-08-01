<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

$htmlcontent = '';
$htmlcontent1 = '';
$htmlcontent2 = '';

$htmlcontent = "
<!-- Main Intro Prose -->
<div class='pm-about-intro-text mb-4'>
    <p class='fs-6 text-dark mb-3 pm-about-intro-p'>
        Welcome to <strong>{$company3}</strong> in <strong>{$city}</strong> — your trusted relocation partner for <strong>All India Door-to-Door Packing & Moving Services</strong>. 
        Whether you are planning a local house move within <strong>{$city}, {$state}</strong> or a long-distance interstate relocation, our experienced team provides 24x7 complete shifting solutions with 100% safety commitment.
    </p>
    <p class='fs-6 text-muted mb-0 pm-about-intro-p'>
        As leading <strong>Packers and Movers in {$city}</strong>, we specialize in multi-layer protective wrapping, dedicated enclosed container trucks, real-time GPS tracking, and transparent pricing with zero hidden charges.
    </p>
</div>

<!-- Clean Feature Checklist -->
<div class='row g-3 my-3'>
    <div class='col-6 col-sm-6'>
        <div class='d-flex align-items-center gap-2 text-dark fw-semibold p-3 rounded-3 bg-light'>
            <i class='bi bi-patch-check-fill text-danger fs-5 flex-shrink-0'></i> <span>All India Door-to-Door Service</span>
        </div>
    </div>
    <div class='col-6 col-sm-6'>
        <div class='d-flex align-items-center gap-2 text-dark fw-semibold p-3 rounded-3 bg-light'>
            <i class='bi bi-box-seam-fill text-danger fs-5 flex-shrink-0'></i> <span>Multi-Layer Packing</span>
        </div>
    </div>
    <div class='col-6 col-sm-6'>
        <div class='d-flex align-items-center gap-2 text-dark fw-semibold p-3 rounded-3 bg-light'>
            <i class='bi bi-truck-front-fill text-danger fs-5 flex-shrink-0'></i> <span>Enclosed Container Trucks</span>
        </div>
    </div>
    <div class='col-6 col-sm-6'>
        <div class='d-flex align-items-center gap-2 text-dark fw-semibold p-3 rounded-3 bg-light'>
            <i class='bi bi-clock-fill text-danger fs-5 flex-shrink-0'></i> <span>24x7 Customer Support</span>
        </div>
    </div>
</div>
";

$htmlcontent1 = "
<!-- Normal Content Relocation Process Workflow -->
<div class='pm-process-section'>
    <div class='mb-4'>
        <span class='badge bg-danger-subtle text-danger border border-danger-subtle rounded-pill px-3 py-1 fw-bold fs-7 text-uppercase mb-2 d-inline-block'><i class='bi bi-gear-wide-connected me-1'></i> Systematic Workflow</span>
        <h3 class='pm-section-title fw-bold text-dark mb-2'>How Our Relocation Process Works in {$city}</h3>
        <p class='text-muted fs-6 mb-0 pm-about-intro-p'>
            At <strong>{$company3}</strong>, we follow a structured and stress-free relocation process to ensure your household goods and commercial assets reach their destination safely:
        </p>
    </div>

    <div class='pm-normal-process-content d-flex flex-column gap-3 my-4'>
        
        <!-- Step 1 -->
        <div class='pm-process-item d-flex align-items-start gap-3'>
            <div class='pm-process-step-num'>01</div>
            <div>
                <h6 class='fw-bold text-dark mb-1 fs-6'>Pre-Move Survey & Transparent Quote</h6>
                <p class='text-muted small mb-0 pm-about-intro-p'>Our relocation expert conducts a thorough assessment of your inventory (furniture, appliances, electronics), providing a clear written quotation with zero hidden taxes or extra charges.</p>
            </div>
        </div>

        <!-- Step 2 -->
        <div class='pm-process-item d-flex align-items-start gap-3'>
            <div class='pm-process-step-num'>02</div>
            <div>
                <h6 class='fw-bold text-dark mb-1 fs-6'>Multi-Layer Protective Packaging</h6>
                <p class='text-muted small mb-0 pm-about-intro-p'>On moving day, our background-verified staff uses premium bubble wrap, corrugated cardboard sheets, stretch films, and custom wooden crates for delicate glass and electronics.</p>
            </div>
        </div>

        <!-- Step 3 -->
        <div class='pm-process-item d-flex align-items-start gap-3'>
            <div class='pm-process-step-num'>03</div>
            <div>
                <h6 class='fw-bold text-dark mb-1 fs-6'>Safe Loading & Enclosed Container Transport</h6>
                <p class='text-muted small mb-0 pm-about-intro-p'>Items are loaded carefully using heavy-duty ramps and safety straps into dedicated waterproof container trucks equipped with real-time GPS tracking for safe transit in {$city}.</p>
            </div>
        </div>

        <!-- Step 4 -->
        <div class='pm-process-item d-flex align-items-start gap-3'>
            <div class='pm-process-step-num'>04</div>
            <div>
                <h6 class='fw-bold text-dark mb-1 fs-6'>Doorstep Unloading & Furniture Placement</h6>
                <p class='text-muted small mb-0 pm-about-intro-p'>Upon arrival, our crew handles unloading, unpacking, furniture reassembly, and arranges all heavy goods according to your preferences in your new home or office.</p>
            </div>
        </div>

    </div>
</div>

<!-- Spacious & Elegant Relocation Services Matrix -->
<div class='pm-services-matrix-section mt-5 pt-4 border-top'>
    <div class='mb-4'>
        <span class='badge bg-warning-subtle text-warning-emphasis border border-warning-subtle rounded-pill px-3 py-1 fw-bold fs-7 text-uppercase mb-2 d-inline-block'>Our Expertise</span>
        <h3 class='pm-section-title fw-bold text-dark mb-1'>Comprehensive Relocation Services in {$city}</h3>
        <p class='text-muted small mb-0'>Custom moving solutions tailored for households, corporate offices, and vehicle owners across {$city}:</p>
    </div>
    
    <div class='row g-3 g-md-4'>
        <!-- Service 1 -->
        <div class='col-md-6'>
            <div class='d-flex align-items-start gap-3 p-4 rounded-4 bg-light border-0 h-100 pm-service-item'>
                <div class='pm-service-icon-circle flex-shrink-0'>
                    <i class='bi bi-house-door-fill'></i>
                </div>
                <div class='py-1'>
                    <h6 class='fw-bold text-dark mb-1 fs-6'>Household Shifting in {$city}</h6>
                    <p class='small text-muted mb-0'>Complete home relocation for 1BHK, 2BHK, 3BHK & Villas with 100% safety.</p>
                </div>
            </div>
        </div>

        <!-- Service 2 -->
        <div class='col-md-6'>
            <div class='d-flex align-items-start gap-3 p-4 rounded-4 bg-light border-0 h-100 pm-service-item'>
                <div class='pm-service-icon-circle flex-shrink-0'>
                    <i class='bi bi-building-gear'></i>
                </div>
                <div class='py-1'>
                    <h6 class='fw-bold text-dark mb-1 fs-6'>Office & Commercial Moving</h6>
                    <p class='small text-muted mb-0'>Systematic packing of workstations, IT assets & records with minimal downtime.</p>
                </div>
            </div>
        </div>

        <!-- Service 3 -->
        <div class='col-md-6'>
            <div class='d-flex align-items-start gap-3 p-4 rounded-4 bg-light border-0 h-100 pm-service-item'>
                <div class='pm-service-icon-circle flex-shrink-0'>
                    <i class='bi bi-truck-front-fill'></i>
                </div>
                <div class='py-1'>
                    <h6 class='fw-bold text-dark mb-1 fs-6'>Car & Bike Transportation</h6>
                    <p class='small text-muted mb-0'>Scratch-free specialized car carriers and enclosed two-wheeler transport.</p>
                </div>
            </div>
        </div>

        <!-- Service 4 -->
        <div class='col-md-6'>
            <div class='d-flex align-items-start gap-3 p-4 rounded-4 bg-light border-0 h-100 pm-service-item'>
                <div class='pm-service-icon-circle flex-shrink-0'>
                    <i class='bi bi-box-seam-fill'></i>
                </div>
                <div class='py-1'>
                    <h6 class='fw-bold text-dark mb-1 fs-6'>Warehouse & Storage Solutions</h6>
                    <p class='small text-muted mb-0'>Secure short-term and long-term climate-controlled luggage storage.</p>
                </div>
            </div>
        </div>
    </div>
</div>
";

$htmlcontent2 = "
<!-- Modern Why Choose Us Section -->
<div class='pm-why-choose-section mt-5 pt-4 border-top'>
    <div class='mb-4'>
        <span class='badge bg-danger-subtle text-danger border border-danger-subtle rounded-pill px-3 py-1 fw-bold fs-7 text-uppercase mb-2 d-inline-block'><i class='bi bi-award-fill me-1'></i> Why Choose Us</span>
        <h3 class='pm-section-title fw-bold text-dark mb-1'>Why Choose <span class='text-danger'>{$company3}</span> in {$city}?</h3>
        <p class='text-muted small mb-0'>We understand local routes, society rules, parking regulations, and apartment elevator restrictions in {$city}:</p>
    </div>
    
    <div class='row g-3 g-md-4'>
        <!-- Card 1 -->
        <div class='col-md-4'>
            <div class='pm-why-card p-4 rounded-4 bg-white border position-relative text-center h-100 d-flex flex-column align-items-center justify-content-center'>
                <div class='pm-why-icon-box mb-3'>
                    <i class='bi bi-people-fill'></i>
                </div>
                <h6 class='fw-bold text-dark mb-2 fs-6'>Trained In-House Staff</h6>
                <p class='small text-muted mb-0'>No casual day laborers. Only background-verified professional packers.</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class='col-md-4'>
            <div class='pm-why-card p-4 rounded-4 bg-white border position-relative text-center h-100 d-flex flex-column align-items-center justify-content-center'>
                <div class='pm-why-icon-box mb-3'>
                    <i class='bi bi-shield-check'></i>
                </div>
                <h6 class='fw-bold text-dark mb-2 fs-6'>Transparent Pricing</h6>
                <p class='small text-muted mb-0'>Zero hidden taxes or surprise loading fees after job completion.</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class='col-md-4'>
            <div class='pm-why-card p-4 rounded-4 bg-white border position-relative text-center h-100 d-flex flex-column align-items-center justify-content-center'>
                <div class='pm-why-icon-box mb-3'>
                    <i class='bi bi-person-badge-fill'></i>
                </div>
                <h6 class='fw-bold text-dark mb-2 fs-6'>Dedicated Move Manager</h6>
                <p class='small text-muted mb-0'>Single point of contact from packing day to final delivery at your doorstep.</p>
            </div>
        </div>
    </div>
</div>
";