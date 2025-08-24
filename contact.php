<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - QuantumSecure</title>
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
        
        .contact-section {
            padding: 80px 0;
        }
        
        .contact-card {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
            margin-bottom: 30px;
        }
        
        .contact-card i {
            font-size: 3em;
            color: var(--secondary-color);
            margin-bottom: 20px;
        }
        
        .contact-info {
            background: #f8f9fa;
            padding: 40px;
            border-radius: 10px;
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
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="bi bi-fingerprint"></i> QuantumSecure
            </a>
            
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">Home</a>
                <a class="nav-link" href="about.php">About</a>
            </div>
        </div>
    </nav>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h1 class="mb-4">Contact Us</h1>
                    <p class="lead">Get in touch with our biometric security experts</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h3 class="mb-4">Get In Touch</h3>
                        <p class="mb-4">We are selling eSSL biometric machines at wholesale prices. Reach out to us for expert advice and the best offers.</p>
                        
                        <div class="mb-4">
                            <h5><i class="bi bi-telephone me-2"></i>Phone</h5>
                            <p class="text-muted">+91 9023521632, +91 9478210404</p>
                        </div>
                        
                        <div class="mb-4">
                            <h5><i class="bi bi-envelope me-2"></i>Email</h5>
                            <p class="text-muted">support@quantumbytes.co.in</p>
                        </div>
                        
                        <div class="mb-4">
                            <h5><i class="bi bi-geo-alt me-2"></i>Address</h5>
                            <p class="text-muted">
                                OFF. 14, 25 ACRE,<br>
                                Barnala, Punjab, India
                            </p>
                        </div>
                        
                        <div class="mb-4">
                            <h5><i class="bi bi-clock me-2"></i>Business Hours</h5>
                            <p class="text-muted">
                                Monday - Friday: 9:00 AM - 6:00 PM
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-card">
                                <i class="bi bi-whatsapp"></i>
                                <h4>WhatsApp</h4>
                                <p>Quick support and instant quotes</p>
                                <a href="https://wa.me/919023521632" target="_blank" class="btn btn-success">
                                    Chat Now
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="contact-card">
                                <i class="bi bi-telephone"></i>
                                <h4>Call Us</h4>
                                <p>Speak directly with our experts</p>
                                <a href="tel:+919023521632" class="btn btn-primary">
                                    Call Now
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="contact-card">
                                <i class="bi bi-envelope"></i>
                                <h4>Email Us</h4>
                                <p>Send us your detailed requirements</p>
                                <a href="mailto:support@quantumbytes.co.in" class="btn btn-outline-primary">
                                    Send Email
                                </a>
                            </div>
                        </div>
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
                    <p class="mb-0">Powered by <a href="https://quantumbytes.co.in/" class="text-white text-decoration-none">QuantumSecure</a></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
