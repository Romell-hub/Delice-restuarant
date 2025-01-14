<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar with Footer</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Navbar Styling */
    .navbar {
      background-color: #333333; /* Dark background */
    }
    .navbar-brand,
    .nav-link {
      color: #FA8072; /* Salmon text color */
    }
    .nav-link:hover {
      color: #FFFFFF; /* White text on hover */
    }
    .navbar-toggler-icon {
      background-color: #FA8072; /* Salmon color for toggler */
    }

    /* Footer Styling */
    footer {
      background-color: #333333; /* Dark background */
      color: #FA8072; /* Salmon text color */
      padding: 20px 0;
    }
    footer a {
      color: #FA8072; /* Salmon text color for links */
      text-decoration: none;
    }
    footer a:hover {
      color: #FFFFFF; /* White on hover */
    }
    footer .social-icons a {
      margin-right: 10px;
      font-size: 20px;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">DANIELS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#works">Works</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#clients">Clients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <!-- About Us -->
        <div class="col-md-4 mb-3">
          <h5>About Us</h5>
          <p>
            Discover the finest baked goods crafted with love and tradition. From flaky pastries to artisan breads, indulge in the taste of authentic French baking.
          </p>
        </div>
        
        <!-- Quick Links -->
        <div class="col-md-4 mb-3">
          <h5>Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="#learnmore">About Us</a></li>
            <li><a href="#features">Contact Us</a></li>
            <li><a href="#signup">Sign Up</a></li>
          </ul>
        </div>
        
        <!-- Contact Us -->
        <div class="col-md-4 mb-3">
          <h5>Contact Us</h5>
          <p><i class="fas fa-envelope"></i> support@delice.com</p>
          <p><i class="fas fa-phone"></i> +237 653-432-022</p>
          <p><i class="fas fa-map-marker-alt"></i> UB-Junction</p>
          <div class="social-icons">
            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <hr>
      <div class="text-center">
        <p class="mb-0">© 2024 Delice. All Rights Reserved. | <a href="#privacy">Privacy Policy</a></p>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
