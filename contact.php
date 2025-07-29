<!DOCTYPE html>
<html lang="en">

<head>
<?php
        $USE_BOOTSTRAP = true;
        $TITLE = 'Contact';
        require('components/head.php');
    ?>
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <?php 
    require_once('components/navbar.php'); ?>

    <div class="container-fluid py-5">
        <div class="container">
            <!-- Page Header -->
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h1 class="display-4 fw-bold text-primary mb-3">Contact Us</h1>
                    <p class="lead text-muted">Get in touch with HIMTI and find our campus locations</p>
                </div>
            </div>

            <!-- Reversible Card -->
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="card shadow-lg border-0 rounded-4 fixed-height-card" id="reversible-card">
                        <!-- Card Header with Toggle Button -->
                        <div class="card-header bg-primary text-white text-center py-4 rounded-top-4 position-relative">
                            <h3 class="mb-0" id="card-title">
                                <i class="fas fa-envelope me-2"></i>Contact Information
                            </h3>
                            <button class="btn btn-light btn-sm position-absolute top-50 end-0 translate-middle-y me-3" 
                                    id="toggle-btn" onclick="toggleCard()">
                                <i class="fas fa-exchange-alt me-1"></i>Switch View
                            </button>
                        </div>
                        
                        <!-- Card Body -->
                        <div class="card-body p-5">
                                                         <!-- Contact Information View -->
                             <div id="contact-view" class="card-content">
                                 <div class="row h-100">
                                     <!-- Organization Logo Section -->
                                     <div class="col-12 text-center mb-4">
                                         <img src="assets/img/organization-logo/HIMTI.png" alt="HIMTI Logo" class="img-fluid mb-3" style="max-width: 200px;">
                                         <h4 class="text-primary fw-bold">HIMTI BINUS University</h4>
                                         <p class="text-muted">Get in touch with us through any of these channels</p>
                                     </div>
                                     
                                     <!-- Contact Cards Row 1 -->
                                     <div class="col-lg-6 col-md-6 col-12 mb-4">
                                         <div class="h-100 p-4 border-0 rounded-4 shadow-sm text-white" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); transition: all 0.3s ease;">
                                             <div class="d-flex align-items-center mb-3">
                                                 <div class="me-3" style="width: 60px; height: 60px; background: rgba(255, 255, 255, 0.2); border-radius: 15px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(255, 255, 255, 0.3);">
                                                     <i class="fas fa-globe fa-2x"></i>
                                                 </div>
                                                 <div>
                                                     <h5 class="fw-bold mb-1">Website</h5>
                                                     <p class="mb-0 opacity-75">Visit our official website</p>
                                                 </div>
                                             </div>
                                             <a href="https://www.himti.or.id" target="_blank" class="btn btn-light btn-sm w-100">
                                                 <i class="fas fa-external-link-alt me-2"></i>www.himti.or.id
                                             </a>
                                         </div>
                                     </div>

                                     <div class="col-lg-6 col-md-6 col-12 mb-4">
                                         <div class="h-100 p-4 border-0 rounded-4 shadow-sm text-white" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); transition: all 0.3s ease;">
                                             <div class="d-flex align-items-center mb-3">
                                                 <div class="me-3" style="width: 60px; height: 60px; background: rgba(255, 255, 255, 0.2); border-radius: 15px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(255, 255, 255, 0.3);">
                                                     <i class="fas fa-envelope fa-2x"></i>
                                                 </div>
                                                 <div>
                                                     <h5 class="fw-bold mb-1">Email</h5>
                                                     <p class="mb-0 opacity-75">Send us a message</p>
                                                 </div>
                                             </div>
                                             <a href="mailto:mail@himti.or.id" class="btn btn-light btn-sm w-100">
                                                 <i class="fas fa-paper-plane me-2"></i>mail@himti.or.id
                                             </a>
                                         </div>
                                     </div>

                                     <!-- Contact Cards Row 2 -->
                                     <div class="col-lg-6 col-md-6 col-12 mb-4">
                                         <div class="h-100 p-4 border-0 rounded-4 shadow-sm text-white" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); transition: all 0.3s ease;">
                                             <div class="d-flex align-items-center mb-3">
                                                 <div class="me-3" style="width: 60px; height: 60px; background: rgba(255, 255, 255, 0.2); border-radius: 15px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(255, 255, 255, 0.3);">
                                                     <i class="fab fa-facebook fa-2x"></i>
                                                 </div>
                                                 <div>
                                                     <h5 class="fw-bold mb-1">Facebook</h5>
                                                     <p class="mb-0 opacity-75">Follow us on Facebook</p>
                                                 </div>
                                             </div>
                                             <a href="https://www.facebook.com/himtibinus/" target="_blank" class="btn btn-light btn-sm w-100">
                                                 <i class="fab fa-facebook me-2"></i>@himtibinus
                                             </a>
                                         </div>
                                     </div>

                                     <div class="col-lg-6 col-md-6 col-12 mb-4">
                                         <div class="h-100 p-4 border-0 rounded-4 shadow-sm text-white" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); transition: all 0.3s ease;">
                                             <div class="d-flex align-items-center mb-3">
                                                 <div class="me-3" style="width: 60px; height: 60px; background: rgba(255, 255, 255, 0.2); border-radius: 15px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(255, 255, 255, 0.3);">
                                                     <i class="fab fa-instagram fa-2x"></i>
                                                 </div>
                                                 <div>
                                                     <h5 class="fw-bold mb-1">Instagram</h5>
                                                     <p class="mb-0 opacity-75">Follow us on Instagram</p>
                                                 </div>
                                             </div>
                                             <a href="https://instagram.com/himti_binus" target="_blank" class="btn btn-light btn-sm w-100">
                                                 <i class="fab fa-instagram me-2"></i>@himti_binus
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                            <!-- Campus Locations View -->
                            <div id="campus-view" class="card-content" style="display: none;">
                                <div class="row h-100">
                                    <!-- First Row - 3 Cards -->
                                    <!-- Alam Sutera Campus -->
                                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                                        <div class="campus-card h-100 p-4 border rounded-3 shadow-sm">
                                            <div class="d-flex align-items-start mb-3">
                                                <i class="fas fa-university text-primary me-3 fa-2x"></i>
                                                <div>
                                                    <h5 class="fw-bold text-primary mb-2">Alam Sutera Campus</h5>
                                                    <p class="text-muted mb-0">Student Club and Activity Center (SCAC)</p>
                                                </div>
                                            </div>
                                            <p class="mb-0">
                                                Jl. Jalur Sutera Barat Kav. 21,<br>
                                                Alam Sutera, Tangerang
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Syahdan Campus -->
                                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                                        <div class="campus-card h-100 p-4 border rounded-3 shadow-sm">
                                            <div class="d-flex align-items-start mb-3">
                                                <i class="fas fa-university text-primary me-3 fa-2x"></i>
                                                <div>
                                                    <h5 class="fw-bold text-primary mb-2">Syahdan Campus</h5>
                                                    <p class="text-muted mb-0">Student Club and Activity Center (SCAC)</p>
                                                </div>
                                            </div>
                                            <p class="mb-0">
                                                Jl. K H. Syahdan No. 9, Kemanggisan – Palmerah<br>
                                                Jakarta Barat 11480
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Senayan Campus -->
                                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                                        <div class="campus-card h-100 p-4 border rounded-3 shadow-sm">
                                            <div class="d-flex align-items-start mb-3">
                                                <i class="fas fa-university text-primary me-3 fa-2x"></i>
                                                <div>
                                                    <h5 class="fw-bold text-primary mb-2">Senayan Campus</h5>
                                                    <p class="text-muted mb-0">FX Sudirman Lantai 6</p>
                                                </div>
                                            </div>
                                            <p class="mb-0">
                                                Jalan Pintu Satu Senayan No.3, RT.1/RW.3<br>
                                                Jakarta
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Second Row - 2 Cards -->
                                    <!-- Bandung Campus -->
                                    <div class="col-lg-6 col-md-6 col-12 mb-4">
                                        <div class="campus-card h-100 p-4 border rounded-3 shadow-sm">
                                            <div class="d-flex align-items-start mb-3">
                                                <i class="fas fa-university text-primary me-3 fa-2x"></i>
                                                <div>
                                                    <h5 class="fw-bold text-primary mb-2">Bandung Campus</h5>
                                                    <p class="text-muted mb-0">Paskal Hyper Square</p>
                                                </div>
                                            </div>
                                            <p class="mb-0">
                                                Jalan Pasirkaliki No. 25-27<br>
                                                Bandung
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Malang Campus -->
                                    <div class="col-lg-6 col-md-6 col-12 mb-4">
                                        <div class="campus-card h-100 p-4 border rounded-3 shadow-sm">
                                            <div class="d-flex align-items-start mb-3">
                                                <i class="fas fa-university text-primary me-3 fa-2x"></i>
                                                <div>
                                                    <h5 class="fw-bold text-primary mb-2">Malang Campus</h5>
                                                    <p class="text-muted mb-0">Araya Mansion</p>
                                                </div>
                                            </div>
                                            <p class="mb-0">
                                                Jalan Araya Mansion No. 8 – 22, Araya<br>
                                                Malang 65154
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('components/footer.php') ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>
        function toggleCard() {
            const contactView = document.getElementById('contact-view');
            const campusView = document.getElementById('campus-view');
            const cardTitle = document.getElementById('card-title');
            const toggleBtn = document.getElementById('toggle-btn');
            
            if (contactView.style.display !== 'none') {
                // Switch to Campus View
                contactView.style.display = 'none';
                campusView.style.display = 'block';
                cardTitle.innerHTML = '<i class="fas fa-map-marker-alt me-2"></i>Campus Locations';
                toggleBtn.innerHTML = '<i class="fas fa-exchange-alt me-1"></i>Switch to Contact';
                
                // Animate the transition
                campusView.style.opacity = '0';
                setTimeout(() => {
                    campusView.style.opacity = '1';
                }, 50);
            } else {
                // Switch to Contact View
                campusView.style.display = 'none';
                contactView.style.display = 'block';
                cardTitle.innerHTML = '<i class="fas fa-envelope me-2"></i>Contact Information';
                toggleBtn.innerHTML = '<i class="fas fa-exchange-alt me-1"></i>Switch to Locations';
                
                // Animate the transition
                contactView.style.opacity = '0';
                setTimeout(() => {
                    contactView.style.opacity = '1';
                }, 50);
            }
        }
    </script>

</body>

</html>