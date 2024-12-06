
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <style>
        .team-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }
        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }
        .team-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }
        .modal-dialog {
            transform: scale(0.8);
            transition: transform 0.3s ease-out;
        }
        .modal.fade.show .modal-dialog {
            transform: scale(1);
        }
    </style>
</head>
<body>
    
    <section class="py-5 bg-light">

        <div class="container">
            <h2 class="text-center mb-4" data-aos="fade-up">Meet Our Team</h2>
            <p class="text-center text-muted mb-5" data-aos="fade-up" data-aos-delay="200">Click on a team member to know more about their journey and expertise.</p>
            <div class="row g-4">
                <!-- Team Member 1 -->
                <div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="team-card text-center p-3 bg-white rounded" data-bs-toggle="modal" data-bs-target="#profileSophia">
                        <img src="https://via.placeholder.com/120" class="team-img mx-auto" alt="Sophia Green">
                        <h5 class="fw-bold">Sophia Green</h5>
                        <p class="text-muted">Senior Stylist</p>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="team-card text-center p-3 bg-white rounded" data-bs-toggle="modal" data-bs-target="#profileMichael">
                        <img src="https://via.placeholder.com/120" class="team-img mx-auto" alt="Michael Jones">
                        <h5 class="fw-bold">Michael Jones</h5>
                        <p class="text-muted">Master Barber</p>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                    <div class="team-card text-center p-3 bg-white rounded" data-bs-toggle="modal" data-bs-target="#profileEmily">
                        <img src="https://via.placeholder.com/120" class="team-img mx-auto" alt="Emily Clark">
                        <h5 class="fw-bold">Emily Clark</h5>
                        <p class="text-muted">Spa Therapist</p>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
                    <div class="team-card text-center p-3 bg-white rounded" data-bs-toggle="modal" data-bs-target="#profileOliver">
                        <img src="https://via.placeholder.com/120" class="team-img mx-auto" alt="Oliver King">
                        <h5 class="fw-bold">Oliver King</h5>
                        <p class="text-muted">Color Specialist</p>
                    </div>
                </div>

                <!-- Team Member 5 -->
                <div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="500">
                    <div class="team-card text-center p-3 bg-white rounded" data-bs-toggle="modal" data-bs-target="#profileAva">
                        <img src="https://via.placeholder.com/120" class="team-img mx-auto" alt="Ava Brown">
                        <h5 class="fw-bold">Ava Brown</h5>
                        <p class="text-muted">Makeup Artist</p>
                    </div>
                </div>

                <!-- Team Member 6 -->
                <div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="600">
                    <div class="team-card text-center p-3 bg-white rounded" data-bs-toggle="modal" data-bs-target="#profileJames">
                        <img src="https://via.placeholder.com/120" class="team-img mx-auto" alt="James Wilson">
                        <h5 class="fw-bold">James Wilson</h5>
                        <p class="text-muted">Nail Technician</p>
                    </div>
                </div>

                <!-- Team Member 7 -->
                <div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="700">
                    <div class="team-card text-center p-3 bg-white rounded" data-bs-toggle="modal" data-bs-target="#profileLily">
                        <img src="https://via.placeholder.com/120" class="team-img mx-auto" alt="Lily Roberts">
                        <h5 class="fw-bold">Lily Roberts</h5>
                        <p class="text-muted">Skin Specialist</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal for Sophia Green -->
    <div class="modal fade" id="profileSophia" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sophia Green</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="Sophia Green">
                        <p><strong>Position:</strong> Senior Stylist</p>
                        <p><strong>Experience:</strong> 10+ years</p>
                        <p><strong>Achievements:</strong></p>
                        <ul class="list-unstyled">
                            <li>🏆 Best Hair Stylist of the Year 2022</li>
                            <li>🌟 Expert in modern cuts & styling</li>
                            <li>📖 Published in Hair Trends Magazine</li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Michael Jones -->
    <div class="modal fade" id="profileMichael" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Michael Jones</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="Michael Jones">
                        <p><strong>Position:</strong> Master Barber</p>
                        <p><strong>Experience:</strong> 8+ years</p>
                        <p><strong>Achievements:</strong></p>
                        <ul class="list-unstyled">
                            <li>✂️ Precision cutting expert</li>
                            <li>📖 Featured in Barber Monthly</li>
                            <li>🏆 Best Male Grooming Specialist 2021</li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Repeat similar modal structures for other team members -->
    <!-- Modal for Emily Clark -->
    <div class="modal fade" id="profileEmily" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Emily Clark</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="Emily Clark">
                        <p><strong>Position:</strong> Spa Therapist</p>
                        <p><strong>Experience:</strong> 5+ years</p>
                        <p><strong>Achievements:</strong></p>
                        <ul class="list-unstyled">
                            <li>🌸 Aromatherapy Certified</li>
                            <li>🌟 5-star customer ratings</li>
                            <li>🧖‍♀️ Expert in relaxation therapies</li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional modals for Oliver, Ava, James, and Lily follow the same structure -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Initialize AOS (Animation on Scroll)
        AOS.init({
            duration: 800,
            once: true,
        });
    </script>
</body>
</html>
