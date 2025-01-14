<?php
include 'navbar2.php';
?>
  <!-- Including your header -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - DELICE</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom Styling for About Page */
    .section-title {
      text-align: center;
      margin-top: 50px;
      font-size: 2.5rem;
      font-weight: bold;
      color:#FA8072;
    }
    .services, .mission, .vision {
      /* background-color: #f8f9fa; */
      padding: 40px 20px;
      margin-bottom: 40px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .services {
      background-color: #333333;
    }
    .mission {
      background-color: #333333;
    }
    .vision {
      background-color: #333333;
    }
    .services h2, .mission h2, .vision h2 {
      color:#FA8072;
    }
    .services p, .mission p, .vision p {
      text-align: center;
      font-size: 1.1rem;
      color:#FA8072;
    }
    .team-member {
      text-align: center;
      margin-bottom: 30px;
    }
    .team-member img {
      width: 100%;
      height: auto;
      border-radius: 50%;
      transition: transform 0.3s ease;
    }
    .team-member img:hover {
      transform: scale(1.1);
    }
    
    .carousel-item img {
      height: 400px;
      object-fit: cover;
    }
    .carousel {
      margin-bottom: 40px;
    }
  </style>
</head>
<body>

  <!-- Main Content -->
  <div class="container">

    <!-- Carousel for Restaurant Images -->
    <div id="restaurantCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./images/image1.avif" class="d-block w-100" alt="Restaurant Image 1">
        </div>
        <div class="carousel-item">
          <img src="./images/image2.avif" class="d-block w-100" alt="Restaurant Image 2">
        </div>
        <div class="carousel-item">
          <img src="./images/image3.avif" class="d-block w-100" alt="Restaurant Image 3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#restaurantCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#restaurantCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- History Section -->
    <div class="services">
      <h2 class="section-title">Our Services</h2>
      <p>At DELICE, we are committed to quality, hospitality, and making every visit unforgettable. Come dine with us and discover why DELICE is more than just a restaurant – it’s an experience!.</p>
    </div>

    <!-- Mission Section -->
    <div class="mission">
      <h2 class="section-title">Our Mission</h2>
      <p>At DELICE, our mission is to provide an unforgettable dining experience with exceptional food and service. We are committed to using only the finest ingredients and ensuring every customer leaves with a smile.</p>
    </div>

    <!-- Vision Section -->
    <div class="vision">
      <h2 class="section-title">Our Vision</h2>
      <p>Our vision is to expand DELICE into a globally recognized brand known for its quality, sustainability, and dedication to the art of fine dining. We aim to create a community who appreciate good food and and will enjoy the great experiences.</p>
    </div>

    <!-- Team Section -->
    <div class="team">
      <h2 class="section-title">Meet Our Team</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="./images/server_image.jpg" class="card-img-top" alt="Team Member 1">
            <div class="card-body text-center">
              <p class="card-text">Chef</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="./images/cook_image.jpg" class="card-img-top" alt="Team Member 2">
            <div class="card-body text-center">
              <p class="card-text">Restaurant Manager</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="./images/server_image.jpg" class="card-img-top" alt="Team Member 3">
            <div class="card-body text-center">
              <p class="card-text">Head Waiter</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    

    <!-- Including the  footer -->
    <?php
    include 'footer2.php';
    ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
