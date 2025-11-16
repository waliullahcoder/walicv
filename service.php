<?php
// Load JSON file
$json = file_get_contents("assets/json/services.json");

$data = json_decode($json, true);

$services = $data["services"];

// Get selected service ID
$service_id = isset($_GET['id']) ? intval($_GET['id']) : 1;

// Find selected service
$current_service = null;
foreach ($services as $service) {
    if ($service["id"] == $service_id) {
        $current_service = $service;
        break;
    }
}
?>

<!-- Page Title -->
<div class="page-title dark-background">
  <div class="container d-lg-flex justify-content-between align-items-center">
    <h1 class="mb-2 mb-lg-0"><?php echo $current_service["title"]; ?></h1>

    <nav class="breadcrumbs">
      <ol>
        <li><a href="index.php">Home</a></li>
        <li class="current">Service Details</li>
      </ol>
    </nav>
  </div>
</div>

<!-- Service Details Section -->
<section id="service-details" class="service-details section">
  <div class="container">
    <div class="row gy-4">

      <!-- Left Side: List -->
      <div class="col-lg-4">
        <div class="services-list">
          <?php foreach ($services as $item): ?>
            <a href="service-details.php?id=<?php echo $item['id']; ?>"
               class="<?= ($item['id'] == $service_id) ? 'active' : '' ?>">
              <?php echo $item['title']; ?>
            </a>
          <?php endforeach; ?>
        </div>

        <h4><?php echo $current_service["description_title"]; ?></h4>
        <p><?php echo $current_service["short_description"]; ?></p>
      </div>

      <!-- Right Side: Details -->
      <div class="col-lg-8">
        <img src="<?php echo $current_service['image']; ?>" class="img-fluid services-img">

        <h3><?php echo $current_service["description_title"]; ?></h3>

        <p><?php echo $current_service["description"]; ?></p>

        <ul>
          <?php foreach ($current_service["points"] as $point): ?>
            <li><i class="bi bi-check-circle"></i> <span><?php echo $point; ?></span></li>
          <?php endforeach; ?>
        </ul>

      </div>

    </div>
  </div>
</section>
