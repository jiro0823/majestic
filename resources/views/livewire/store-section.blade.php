
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon eCommerce Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS CSS for animations -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <style>
        /* Custom Styles */
        .product-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        .product-img {
            transition: transform 0.3s ease;
        }
        .product-card:hover .product-img {
            transform: scale(1.1);
        }

        .add-to-cart {
            transition: transform 0.3s ease-in-out;
        }
        .add-to-cart:active {
            transform: scale(0.9);
        }

        section {
            padding: 60px 0;
        }

        /* Carousel Custom Styles */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header class="bg-dark text-white text-center py-5">
        <h1>Welcome to Our Salon Store</h1>
        <p>Your one-stop shop for all salon products and services</p>
    </header>

    <!-- Carousel Section -->
    <section id="carousel" class="bg-light">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://via.placeholder.com/1200x400?text=Featured+Product+1" class="d-block w-100" alt="Featured Product 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Featured Product 1</h5>
                        <p>Shop our best-selling hair shampoo for a healthier and shinier look.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1200x400?text=Featured+Product+2" class="d-block w-100" alt="Featured Product 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Featured Product 2</h5>
                        <p>Condition your hair with our premium conditioner for all hair types.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1200x400?text=Featured+Product+3" class="d-block w-100" alt="Featured Product 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Featured Product 3</h5>
                        <p>Style your hair with our professional hair styling gel for the perfect hold.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="bg-light">
        <div class="container">
            <h2 class="text-center mb-4" data-aos="fade-up">Our Featured Products</h2>
            <div class="row g-4">
                <!-- Product 1 -->
                <div class="col-md-3" data-aos="fade-up">
                    <div class="product-card text-center p-3 bg-white rounded">
                        <img src="https://via.placeholder.com/250?text=Hair+Shampoo" class="product-img img-fluid mb-3" alt="Hair Shampoo">
                        <h5>Hair Shampoo</h5>
                        <p class="text-muted">$19.99</p>
                        <button class="btn btn-primary add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-md-3" data-aos="fade-up">
                    <div class="product-card text-center p-3 bg-white rounded">
                        <img src="https://via.placeholder.com/250?text=Hair+Conditioner" class="product-img img-fluid mb-3" alt="Hair Conditioner">
                        <h5>Hair Conditioner</h5>
                        <p class="text-muted">$15.99</p>
                        <button class="btn btn-primary add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-md-3" data-aos="fade-up">
                    <div class="product-card text-center p-3 bg-white rounded">
                        <img src="https://via.placeholder.com/250?text=Hair+Styling+Gel" class="product-img img-fluid mb-3" alt="Hair Styling Gel">
                        <h5>Hair Styling Gel</h5>
                        <p class="text-muted">$12.99</p>
                        <button class="btn btn-primary add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-md-3" data-aos="fade-up">
                    <div class="product-card text-center p-3 bg-white rounded">
                        <img src="https://via.placeholder.com/250?text=Hair+Treatment+Oil" class="product-img img-fluid mb-3" alt="Hair Treatment Oil">
                        <h5>Hair Treatment Oil</h5>
                        <p class="text-muted">$22.99</p>
                        <button class="btn btn-primary add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="col-md-3" data-aos="fade-up">
                    <div class="product-card text-center p-3 bg-white rounded">
                        <img src="https://via.placeholder.com/250?text=Facial+Cleanser" class="product-img img-fluid mb-3" alt="Facial Cleanser">
                        <h5>Facial Cleanser</h5>
                        <p class="text-muted">$18.99</p>
                        <button class="btn btn-primary add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="col-md-3" data-aos="fade-up">
                    <div class="product-card text-center p-3 bg-white rounded">
                        <img src="https://via.placeholder.com/250?text=Shampoo+Brush" class="product-img img-fluid mb-3" alt="Shampoo Brush">
                        <h5>Shampoo Brush</h5>
                        <p class="text-muted">$9.99</p>
                        <button class="btn btn-primary add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="col-md-3" data-aos="fade-up">
                    <div class="product-card text-center p-3 bg-white rounded">
                        <img src="https://via.placeholder.com/250?text=Shaving+Cream" class="product-img img-fluid mb-3" alt="Shaving Cream">
                        <h5>Shaving Cream</h5>
                        <p class="text-muted">$14.99</p>
                        <button class="btn btn-primary add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="col-md-3" data-aos="fade-up">
                    <div class="product-card text-center p-3 bg-white rounded">
                        <img src="https://via.placeholder.com/250?text=Hair+Color" class="product-img img-fluid mb-3" alt="Hair Color">
                        <h5>Hair Color</h5>
                        <p class="text-muted">$25.99</p>
                        <button class="btn btn-primary add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 Salon Store. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS for animations -->
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
