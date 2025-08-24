<?php include 'products.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuantumSecure - Best Deals on Biometric Machines</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
        }
        
        .navbar-brand {
            font-weight: bold;
            color: var(--primary-color) !important;
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 60px 0;
            margin-bottom: 30px;
        }
        
        .search-section {
            background: white;
            padding: 20px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        
        .sidebar {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            height: fit-content;
            position: sticky;
            top: 100px;
        }
        
        .category-link {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 15px;
            margin: 5px 0;
            text-decoration: none;
            color: var(--primary-color);
            border-radius: 8px;
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
            cursor: pointer;
        }
        
        .category-link:hover {
            background: white;
            color: var(--secondary-color);
            border-left-color: var(--secondary-color);
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .category-link.active {
            background: var(--secondary-color);
            color: white;
            border-left-color: var(--primary-color);
        }
        
        .category-count {
            background: var(--secondary-color);
            color: white;
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 0.8em;
        }
        
        .category-link.active .category-count {
            background: white;
            color: var(--secondary-color);
        }
        
        .product-card {
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            margin-bottom: 30px;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0,0,0,0.2);
        }
        
        .product-image {
            height: 200px;
            object-fit: cover;
        }
        
        .original-price {
            text-decoration: line-through;
            color: #6c757d;
            font-size: 0.9em;
        }
        
        .discounted-price {
            color: var(--accent-color);
            font-weight: bold;
            font-size: 1.2em;
        }
        
        .discount-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: var(--accent-color);
            color: white;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 0.8em;
        }
        
        .whatsapp-btn {
            background: #25D366;
            border-color: #25D366;
        }
        
        .whatsapp-btn:hover {
            background: #128C7E;
            border-color: #128C7E;
        }
        
        footer {
            background: var(--primary-color);
            color: white;
            padding: 40px 0;
            margin-top: 80px;
        }
        
        .dropdown-menu {
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .search-box {
            position: relative;
        }
        
        .search-box .form-control {
            border-radius: 25px;
            padding-left: 20px;
            padding-right: 50px;
        }
        
        .search-box .btn {
            position: absolute;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }
        
        .pagination {
            margin-top: 30px;
            justify-content: center;
        }
        
        .no-products {
            display: none;
            text-align: center;
            padding: 40px 0;
        }
        
        @media (max-width: 768px) {
            .sidebar {
                margin-bottom: 30px;
                position: static;
            }
        }

        /* .hero-section {
            height: auto; 
            min-height: 70vh; 
            background: url('images/biometric-banner.png') no-repeat center center;
            background-size: contain;
            background-color: #000;  
        } */


        /* .hero-section .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        } */

        /* .hero-section h1,
        .hero-section p {
            text-shadow: 0 3px 6px rgba(0,0,0,0.7);
        } */
        

    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="bi bi-fingerprint"></i> QuantumSecure
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <?php foreach ($categories as $category => $models): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <?php echo $category; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach ($models as $model): ?>
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="searchProduct('<?php echo $model; ?>')"><?php echo $model; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <?php endforeach; ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#downloads">Downloads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#csr">CSR</a>
                    </li>
                </ul>
                
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="display-4 mb-4">Best Deals on Biometric Machines</h1>
            <p class="lead mb-5">Secure your premises with our advanced biometric solutions. Get up to 20% off on all products!</p>
        </div>
    </section>

    <!-- Hero Banner Section -->
    <!-- <section class="hero-section position-relative text-white text-center d-flex align-items-center justify-content-center">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
        <div class="container position-relative"> -->
            <!-- <h1 class="display-4 fw-bold mb-3">Best Deals on Biometric Machines</h1>
            <p class="lead mb-4">Secure your premises with our advanced biometric solutions. Get up to 20% off on all products!</p>
            <a href="#products" class="btn btn-primary btn-lg me-2">Shop Now</a>
            <a href="contact.php" class="btn btn-outline-light btn-lg">Contact Us</a> -->
        <!-- </div>
    </section> -->


    <!-- Search Section -->
    <section class="search-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form action="search.php" method="GET" class="search-box">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control form-control-lg" 
                                   placeholder="Search products, categories, or models..." 
                                   value="<?php echo isset($_GET['q']) ? htmlspecialchars($_GET['q']) : ''; ?>">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3 col-md-4">
                <div class="sidebar">
                    <h5 class="mb-3"><i class="bi bi-list-ul"></i> Categories</h5>
                    
                    <a href="javascript:void(0)" class="category-link active" data-category="all">
                        <span><i class="bi bi-grid"></i> All Products</span>
                        <span class="category-count"><?php echo count(getAllProducts()); ?></span>
                    </a>
                    
                    <?php foreach ($categories as $category => $models): ?>
                    <a href="javascript:void(0)" class="category-link" data-category="<?php echo htmlspecialchars($category); ?>">
                        <span>
                            <?php
                            $icon = match($category) {
                                'Fingerprint' => 'bi-fingerprint',
                                'Face' => 'bi-person-circle',
                                'Boom Barrier' => 'bi-stop-circle',
                                'Turnstiles' => 'bi-arrow-repeat',
                                'Flap Barriers' => 'bi-door-open',
                                default => 'bi-gear'
                            };
                            ?>
                            <i class="<?php echo $icon; ?>"></i> <?php echo $category; ?>
                        </span>
                        <span class="category-count"><?php echo getCategoryCount($category); ?></span>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <!-- Products Grid -->
            <div class="col-lg-9 col-md-8">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 id="current-category">All Products</h2>
                    <span class="text-muted" id="product-count">
                        <?php echo count(getAllProducts()); ?> products found
                    </span>
                </div>
                
                <div class="row" id="products-container">
                    <?php 
                    $displayProducts = getAllProducts();
                    if (empty($displayProducts)): 
                    ?>
                    <div class="col-12 text-center py-5 no-products" id="no-products-message">
                        <i class="bi bi-search" style="font-size: 4em; color: #ccc;"></i>
                        <h4 class="mt-3 text-muted">No products found</h4>
                        <p class="text-muted">Try selecting a different category or search term.</p>
                    </div>
                    <?php else: ?>
                    <?php foreach ($displayProducts as $product): ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 product-item" data-category="<?php echo htmlspecialchars($product['category']); ?>">
                        <div class="card product-card h-100">
                            <div class="position-relative">
                                <img src="<?php echo $product['image']; ?>" class="card-img-top product-image" alt="<?php echo $product['name']; ?>">
                                <span class="discount-badge"><?php echo $product['discount']; ?>% OFF</span>
                            </div>
                            
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title"><?php echo $product['name']; ?></h5>
                                <p class="text-muted small"><?php echo $product['category']; ?></p>
                                <div class="price-section mb-3">
                                    <div class="original-price">₹<?php echo number_format($product['original_price']); ?></div>
                                    <div class="discounted-price">₹<?php echo number_format($product['discounted_price']); ?></div>
                                </div>
                                
                                <div class="mt-auto">
                                    <div class="row g-2">
                                        <div class="col-12">
                                            <a href="product.php?id=<?php echo $product['id']; ?>" class="btn btn-outline-primary w-100">
                                                <i class="bi bi-eye"></i> View Details
                                            </a>
                                        </div>
                                        <div class="col-12">
                                            <a href="https://wa.me/919478210404?text=Hi, I'm interested in <?php echo urlencode($product['name'] . ' - ₹' . number_format($product['discounted_price'])); ?>" 
                                               target="_blank" class="btn btn-success whatsapp-btn w-100">
                                                <i class="bi bi-whatsapp"></i> Order on WhatsApp
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                
                <!-- Pagination -->
                <nav aria-label="Products pagination" id="pagination-container">
                    <ul class="pagination">
                        <!-- Pagination will be generated by JavaScript -->
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-4 bg-dark text-white">
    <div class="container">
        <div class="row">
            <!-- About Us -->
            <div class="col-md-4 mb-4">
                <h5>About Us</h5>
                <p class="text-white-50">
                We are selling <strong>eSSL Biometric Machines</strong> at wholesale prices,
                providing secure and reliable attendance solutions for businesses and organizations.
                </p>
            </div>

            <!-- Contact Us -->
            <div class="col-md-4 mb-4">
                <h5>Get in Touch</h5>
                <ul class="list-unstyled">
                    <li><i class="bi bi-geo-alt me-2"></i> OFF. 14, 25 ACRE, BARNALA, PUNJAB</li>
                    <li><i class="bi bi-phone me-2"></i> +91 9023521632, +91 9478210404</li>
                    <li><i class="bi bi-envelope me-2"></i> support@quantumbytes.co.in</li>
                    <li><i class="bi bi-clock me-2"></i> Monday - Friday: 9AM - 6PM</li>
                </ul>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4 mb-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white-50 text-decoration-none" data-bs-toggle="modal" data-bs-target="#privacyModal">Privacy Policy</a></li>
                    <li><a href="#" class="text-white-50 text-decoration-none" data-bs-toggle="modal" data-bs-target="#termsModal">Terms of Service</a></li>
                    <li><a href="#" class="text-white-50 text-decoration-none" data-bs-toggle="modal" data-bs-target="#supportModal">Support Center</a></li>
                </ul>
            </div>
        </div>

        <hr class="bg-light">
        <div class="text-center py-2">
            <p class="mb-0">
                Powered by <a href="https://quantumbytes.co.in/" target="_blank" class="text-white fw-bold text-decoration-none">QuantumBytes</a>
            </p>
        </div>
    </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="privacyModalLabel">Privacy Policy</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>
            At QuantumSecure, we value your privacy. We ensure that all personal data collected is used
            solely for business communication, order processing, and customer support. We do not share
            or sell your information with third parties.
            </p>
            <p>
            For detailed queries about data handling, please contact us at
            <a href="mailto:support@quantumbytes.co.in">support@quantumbytes.co.in</a>.
            </p>
        </div>
        </div>
    </div>
    </div>

    <!-- Terms of Service Modal -->
    <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="termsModalLabel">Terms of Service</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>
            By purchasing from QuantumSecure, you agree to comply with our terms of service. Products
            sold are subject to warranty conditions as specified by the manufacturer.
            </p>
            <p>
            All disputes will be subject to jurisdiction in Punjab, India. For further assistance,
            please contact our support team.
            </p>
        </div>
        </div>
    </div>
    </div>

    <!-- Support Center Modal -->
    <div class="modal fade" id="supportModal" tabindex="-1" aria-labelledby="supportModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="supportModalLabel">Support Center</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>
            Need help with our products? Our support team is here to assist you with installation,
            troubleshooting, and maintenance of eSSL biometric machines.
            </p>
            <p>
            Contact us at <a href="mailto:support@quantumbytes.co.in">support@quantumbytes.co.in</a>
            or call +91 9023521632, +91 9478210404.
            </p>
        </div>
        </div>
    </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Pagination settings
            const productsPerPage = 9;
            let currentPage = 1;
            let currentCategory = 'all';
            
            // Initialize pagination
            updatePagination();
            
            // Category filter click handler
            $('.category-link').on('click', function() {
                // Update active category
                $('.category-link').removeClass('active');
                $(this).addClass('active');
                
                // Get selected category
                currentCategory = $(this).data('category');
                currentPage = 1; // Reset to first page
                
                // Update category title
                if (currentCategory === 'all') {
                    $('#current-category').text('All Products');
                } else {
                    $('#current-category').text(currentCategory + ' Products');
                }
                
                // Filter and display products
                filterProducts();
                updatePagination();
            });
            
            // Function to filter products by category
            function filterProducts() {
                // Step 1: hide/show based on category
                if (currentCategory === 'all') {
                    $('.product-item').show().addClass('filtered');
                } else {
                    $('.product-item').each(function() {
                        if ($(this).data('category') === currentCategory) {
                            $(this).show().addClass('filtered');
                        } else {
                            $(this).hide().removeClass('filtered');
                        }
                    });
                }

                // Step 2: update product count
                const visibleProducts = $('.product-item.filtered').length;
                $('#product-count').text(visibleProducts + ' products found');

                // Step 3: refresh pagination
                currentPage = 1;
                updatePagination();
            }

   
            // Function to show specific page of products
            function showPage(page) {
                const startIndex = (page - 1) * productsPerPage;
                const endIndex = startIndex + productsPerPage;

                $('.product-item.filtered').each(function(index) {
                    if (index >= startIndex && index < endIndex) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }

            
            // Function to update pagination controls
            function updatePagination() {
                const visibleProducts = $('.product-item.filtered').length;
                const totalPages = Math.ceil(visibleProducts / productsPerPage);

                $('.pagination').empty();

                // Prev
                $('.pagination').append(
                    `<li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
                        <a class="page-link" href="#" data-page="prev">Previous</a>
                    </li>`
                );

                // Numbers
                for (let i = 1; i <= totalPages; i++) {
                    $('.pagination').append(
                        `<li class="page-item ${i === currentPage ? 'active' : ''}">
                            <a class="page-link" href="#" data-page="${i}">${i}</a>
                        </li>`
                    );
                }

                // Next
                $('.pagination').append(
                    `<li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
                        <a class="page-link" href="#" data-page="next">Next</a>
                    </li>`
                );

                // Show products for this page
                showPage(currentPage);

                if (totalPages <= 1) {
                    $('#pagination-container').hide();
                } else {
                    $('#pagination-container').show();
                }
            }

            
            // Pagination click handler
            $(document).on('click', '.page-link', function() {
                let pageAction = $(this).data('page');
                
                if (pageAction === 'prev' && currentPage > 1) {
                    currentPage--;
                } else if (pageAction === 'next') {
                    const visibleProducts = currentCategory === 'all' ? 
                        $('.product-item').length : 
                        $('.product-item[data-category="' + currentCategory + '"]').length;
                    const totalPages = Math.ceil(visibleProducts / productsPerPage);
                    
                    if (currentPage < totalPages) {
                        currentPage++;
                    }
                } else if (!isNaN(parseInt(pageAction))) {
                    currentPage = parseInt(pageAction);
                }
                
                updatePagination();
            });


            
            // Initialize with all products showing
            filterProducts();
        });
        
        function searchProduct(query) {
            window.location.href = 'search.php?q=' + encodeURIComponent(query);
        }
    </script>
</body>
</html>