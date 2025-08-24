<?php 
include 'products.php'; 

$productId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$product = getProductById($productId);

if (!$product) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['name']; ?> - QuantumSecure</title>
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
        
        .product-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        .original-price {
            text-decoration: line-through;
            color: #6c757d;
            font-size: 1.2em;
        }
        
        .discounted-price {
            color: var(--accent-color);
            font-weight: bold;
            font-size: 2em;
        }
        
        .discount-badge {
            background: var(--accent-color);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9em;
            display: inline-block;
        }
        
        .whatsapp-btn {
            background: #25D366;
            border-color: #25D366;
            font-size: 1.1em;
            padding: 12px 30px;
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
        
        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .product-section {
            padding: 60px 0;
        }
        
        .feature-list {
            list-style: none;
            padding: 0;
        }
        
        .feature-list li {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }
        
        .feature-list li:last-child {
            border-bottom: none;
        }
        
        .feature-list li i {
            color: var(--secondary-color);
            margin-right: 10px;
        }
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
                </ul>
                
 
            </div>

            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">
                    <i class="bi bi-arrow-left"></i> Back to Home
                </a>
            </div>
        </div>
    </nav>

    <!-- Product Detail Section -->
    <!-- Product Detail Section -->
    <section class="product-section py-5">
        <div class="container">
            <div class="row">
                
                <!-- Left: Image -->
                <div class="col-lg-6 mb-4 text-center">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="img-fluid rounded shadow-sm">
                </div>
                
                <!-- Right: Product Info -->
                <div class="col-lg-6">
                    <div class="discount-badge mb-2"><?php echo $product['discount']; ?>% OFF</div>
                    <h2 class="mb-3"><?php echo $product['name']; ?></h2>
                    
                    <!-- Price Section -->
                    <div class="mb-3">
                        <span class="original-price me-2 text-muted text-decoration-line-through">
                            ₹<?php echo number_format($product['original_price']); ?>
                        </span>
                        <span class="discounted-price h4 text-success">
                            ₹<?php echo number_format($product['discounted_price']); ?>
                        </span>
                        <p class="text-success mt-1 mb-0">
                            <i class="bi bi-tag"></i> You save ₹<?php echo number_format($product['original_price'] - $product['discounted_price']); ?>
                        </p>
                    </div>

                    <!-- Product Meta -->
                    <ul class="list-unstyled small mb-4">
                        <li><strong>Brand:</strong> <?php echo $product['brand']; ?></li>
                        <li><strong>Category:</strong> <?php echo $product['category']; ?></li>
                        <li><strong>Model:</strong> <?php echo $product['model']; ?></li>
                    </ul>

                    <!-- Tabs -->
                    <ul class="nav nav-tabs mb-3" id="productTab" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link active" id="resources-tab" data-bs-toggle="tab" data-bs-target="#resources" type="button" role="tab">Resources</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link " id="desc-tab" data-bs-toggle="tab" data-bs-target="#desc" type="button" role="tab">Description</button>
                        </li>
                        <?php if (!empty($product['specifications'])): ?>
                        <li class="nav-item">
                            <button class="nav-link" id="specs-tab" data-bs-toggle="tab" data-bs-target="#specs" type="button" role="tab">Specifications</button>
                        </li>
                        <?php endif; ?>
                      
                    </ul>

                    <div class="tab-content border rounded p-3 bg-light" id="productTabContent">
                        <!-- Description -->
                        <div class="tab-pane fade" id="desc" role="tabpanel">
                            <p class="text-muted"><?php echo $product['description']; ?></p>
                        </div>

                        <!-- Specifications -->
                        <?php if (!empty($product['specifications'])): ?>
                        <div class="tab-pane fade" id="specs" role="tabpanel">
                            <ul class="feature-list mb-0">
                                <?php foreach ($product['specifications'] as $key => $value): ?>
                                    <li><i class="bi bi-check-circle text-success"></i> <strong><?php echo $key; ?>:</strong> <?php echo $value; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>

                        <!-- Resources -->
                        <div class="tab-pane fade show active" id="resources" role="tabpanel">
                            <div class="d-flex flex-wrap gap-2">
                                <?php if (!empty($product['pdf_catalogue'])): ?>
                                    <a href="<?php echo $product['pdf_catalogue']; ?>" target="_blank" class="btn btn-outline-primary btn-sm">
                                        <i class="bi bi-file-earmark-pdf"></i> Catalogue
                                    </a>
                                <?php endif; ?>
                                <?php if (!empty($product['installation_guide_pdf'])): ?>
                                    <a href="<?php echo $product['installation_guide_pdf']; ?>" target="_blank" class="btn btn-outline-secondary btn-sm">
                                        <i class="bi bi-tools"></i> Installation Guide
                                    </a>
                                <?php endif; ?>
                                <?php if (!empty($product['manual_pdf'])): ?>
                                    <a href="<?php echo $product['manual_pdf']; ?>" target="_blank" class="btn btn-outline-dark btn-sm">
                                        <i class="bi bi-journal-text"></i> User Manual
                                    </a>
                                <?php endif; ?>
                                <?php if (!empty($product['video'])): ?>
                                    <a href="<?php echo $product['video']; ?>" target="_blank" class="btn btn-outline-danger btn-sm">
                                        <i class="bi bi-youtube"></i> Watch Video
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-grid gap-2 d-md-flex mt-4">
                        <a href="https://wa.me/919876543210?text=Hi, I want to order <?php echo urlencode($product['name'] . ' - ₹' . number_format($product['discounted_price'])); ?>. Please provide more details." 
                        target="_blank" class="btn btn-success whatsapp-btn me-md-2">
                            <i class="bi bi-whatsapp"></i> Order on WhatsApp
                        </a>
                        <a href="index.php" class="btn btn-outline-secondary">
                            <i class="bi bi-arrow-left"></i> Back to Products
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>


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
