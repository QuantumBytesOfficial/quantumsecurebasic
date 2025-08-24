<?php 
include 'products.php'; 

$searchQuery = isset($_GET['q']) ? trim($_GET['q']) : '';
$searchResults = [];

if (!empty($searchQuery)) {
    $searchResults = searchProducts($searchQuery);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results - QuantumSecure</title>
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
        
        .search-section {
            background: white;
            padding: 30px 0;
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
        }
        
        .category-link:hover {
            background: white;
            color: var(--secondary-color);
            border-left-color: var(--secondary-color);
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .category-count {
            background: var(--secondary-color);
            color: white;
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 0.8em;
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
        
        .search-highlight {
            background-color: yellow;
            font-weight: bold;
        }
        
        .no-results {
            text-align: center;
            padding: 60px 0;
            color: #6c757d;
        }
        
        .no-results i {
            font-size: 4em;
            margin-bottom: 20px;
        }
        
        @media (max-width: 768px) {
            .sidebar {
                margin-bottom: 30px;
                position: static;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="bi bi-fingerprint"></i> BiometricHub
            </a>
            
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">
                    <i class="bi bi-arrow-left"></i> Back to Home
                </a>
            </div>
        </div>
    </nav> -->

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
                </ul>
                
 
            </div>

            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">
                    <i class="bi bi-arrow-left"></i> Back to Home
                </a>
            </div>
        </div>
    </nav>

    <!-- Search Section -->
    <section class="search-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form action="search.php" method="GET" class="search-box">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control form-control-lg" 
                                   placeholder="Search products, categories, or models..." 
                                   value="<?php echo htmlspecialchars($searchQuery); ?>">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </form>
                    
                    <?php if (!empty($searchQuery)): ?>
                    <div class="mt-3 text-center">
                        <p class="text-muted">
                            Search results for "<strong><?php echo htmlspecialchars($searchQuery); ?></strong>" 
                            (<?php echo count($searchResults); ?> results found)
                        </p>
                    </div>
                    <?php endif; ?>
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
                    
                    <a href="index.php" class="category-link">
                        <span><i class="bi bi-grid"></i> All Products</span>
                        <span class="category-count"><?php echo count(getAllProducts()); ?></span>
                    </a>
                    
                    <?php foreach ($categories as $category => $models): ?>
                    <a href="index.php?category=<?php echo urlencode($category); ?>" class="category-link">
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
                    
                    <?php if (!empty($searchQuery)): ?>
                    <hr>
                    <div class="mt-3">
                        <h6><i class="bi bi-clock-history"></i> Quick Actions</h6>
                        <a href="index.php" class="btn btn-outline-primary btn-sm w-100 mb-2">
                            <i class="bi bi-house"></i> View All Products
                        </a>
                        <a href="search.php" class="btn btn-outline-secondary btn-sm w-100">
                            <i class="bi bi-search"></i> New Search
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            
            <!-- Search Results -->
            <div class="col-lg-9 col-md-8">
                <?php if (empty($searchQuery)): ?>
                <div class="no-results">
                    <i class="bi bi-search"></i>
                    <h3>Search Products</h3>
                    <p>Enter a search term to find products, categories, or models.</p>
                    <a href="index.php" class="btn btn-primary">
                        <i class="bi bi-grid"></i> Browse All Products
                    </a>
                </div>
                <?php elseif (empty($searchResults)): ?>
                <div class="no-results">
                    <i class="bi bi-emoji-frown"></i>
                    <h3>No Results Found</h3>
                    <p>Sorry, we couldn't find any products matching "<strong><?php echo htmlspecialchars($searchQuery); ?></strong>"</p>
                    <div class="mt-4">
                        <h5>Suggestions:</h5>
                        <ul class="list-unstyled">
                            <li>• Check your spelling</li>
                            <li>• Try different keywords</li>
                            <li>• Use more general terms</li>
                            <li>• Browse our categories</li>
                        </ul>
                    </div>
                    <a href="index.php" class="btn btn-primary">
                        <i class="bi bi-grid"></i> Browse All Products
                    </a>
                </div>
                <?php else: ?>
                <div class="row">
                    <?php foreach ($searchResults as $product): ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
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
                                            <a href="https://wa.me/919876543210?text=Hi, I'm interested in <?php echo urlencode($product['name'] . ' - ₹' . number_format($product['discounted_price'])); ?>" 
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
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>QuantumSecure</h5>
                    <p>Your trusted partner for biometric security solutions.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">Powered by QuantumBytes</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function searchProduct(query) {
           window.location.href = 'search.php?q=' + encodeURIComponent(query);
        }
    </script>
</body>
</html>
