<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - QuantumSecure</title>
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

    .about-section {
      padding: 80px 0;
    }

    .feature-box {
      text-align: center;
      padding: 30px 20px;
      border-radius: 10px;
      transition: transform 0.3s ease;
    }

    .feature-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .feature-box i {
      font-size: 3em;
      color: var(--secondary-color);
      margin-bottom: 20px;
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
        <a class="nav-link" href="contact.php">Contact</a>
      </div>
    </div>
  </nav>

  <!-- About Section -->
  <section class="about-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h1 class="mb-4">About QuantumSecure</h1>
          <p class="lead">Wholesale Distributor of eSSL Biometric Machines</p>
        </div>
      </div>

      <div class="row mb-5">
        <div class="col-lg-6">
          <h3>Our Mission</h3>
          <p>
            At QuantumSecure, we aim to make advanced biometric technology accessible and affordable.
            We specialize in selling <strong>eSSL Biometric Machines</strong> at wholesale prices, delivering
            high-quality security and attendance solutions for organizations across India.
          </p>

          <h3>Why Choose Us?</h3>
          <ul>
            <li>Trusted distributor of eSSL biometric machines</li>
            <li>Competitive wholesale pricing</li>
            <li>Reliable after-sales service & support</li>
            <li>Serving businesses, schools, and organizations nationwide</li>
            <li>Expert guidance for choosing the right solution</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <img src="images/quantumSecureEssl.jpg" alt="About QuantumSecure" class="img-fluid rounded">
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="feature-box">
            <i class="bi bi-shield-check"></i>
            <h4>Secure & Reliable</h4>
            <p>Our biometric devices ensure accuracy, reliability, and security in attendance and access control systems.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box">
            <i class="bi bi-tools"></i>
            <h4>Expert Support</h4>
            <p>We provide full installation guidance, troubleshooting, and ongoing customer support.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box">
            <i class="bi bi-cash-coin"></i>
            <h4>Wholesale Pricing</h4>
            <p>We offer the best wholesale rates so you can get quality biometric machines at affordable prices.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <!-- About Us -->
        <div class="col-md-4 mb-4">
          <h5>About Us</h5>
          <p class="text-white-50">
            We are selling <strong>eSSL Biometric Machines</strong> at wholesale prices,
            offering secure and affordable solutions across India.
          </p>
        </div>

        <!-- Contact Info -->
        <div class="col-md-4 mb-4">
          <h5>Get in Touch</h5>
          <ul class="list-unstyled text-white-50">
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
          Powered by <a href="https://quantumbytes.co.in/" class="text-white text-decoration-underline" target="_blank">QuantumSecure</a>
        </p>
      </div>
    </div>
  </footer>

  <!-- Privacy Modal -->
  <div class="modal fade" id="privacyModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Privacy Policy</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>
            At QuantumSecure, your privacy is important to us. We only collect data required for
            order processing and customer support. We never sell or share your personal information
            with third parties.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Terms Modal -->
  <div class="modal fade" id="termsModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Terms of Service</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>
            By purchasing from QuantumSecure, you agree to our terms. Products come with standard
            warranty as provided by the manufacturer. All disputes will be under Barnala, Punjab jurisdiction.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Support Modal -->
  <div class="modal fade" id="supportModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Support Center</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>
            Need help with your eSSL Biometric Machine? Contact our support team for installation
            guidance, troubleshooting, and product queries.
          </p>
          <p>
            Email: <a href="mailto:support@quantumbytes.co.in">support@quantumbytes.co.in</a><br>
            Phone: +91 9023521632, +91 9478210404
          </p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
