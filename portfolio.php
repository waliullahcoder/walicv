<?php
// Get ID from URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Load JSON
$data = json_decode(file_get_contents("assets/json/portfolio.json"), true);
$details = $data['details'] ?? [];

// Find the portfolio item
$item = null;
foreach ($details as $d) {
    if ($d['id'] === $id) {
        $item = $d;
        break;
    }
}

// If not found
if (!$item) {
    echo "<h2>Portfolio item not found.</h2>";
    exit;
}
?>

<!-- Page Title -->
<div class="page-title dark-background">
  <div class="container d-lg-flex justify-content-between align-items-center">
    <h1 class="mb-2 mb-lg-0">Portfolio Details</h1>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="index.php">Home</a></li>
        <li class="current">Portfolio Details</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- Portfolio Details Section -->
<section id="portfolio-details" class="portfolio-details section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <!-- Slider -->
      <div class="col-lg-8">
        <div class="portfolio-details-slider swiper init-swiper">

          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>

          <div class="swiper-wrapper align-items-center">
            <?php foreach ($item['images'] as $img): ?>
            <div class="swiper-slide">
              <img src="<?php echo $img; ?>" alt="">
            </div>
            <?php endforeach; ?>
          </div>

          <div class="swiper-pagination"></div>
        </div>
      </div>

      <!-- Project Info & Description -->
      <div class="col-lg-4">
        <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
          <h3>Project information</h3>
          <ul>
            <li><strong>Category</strong>: <?php echo $item['category']; ?></li>
            <li><strong>Client</strong>: <?php echo $item['client']; ?></li>
            <li><strong>Project date</strong>: <?php echo $item['project_date']; ?></li>
            <li><strong>Github URL</strong>: <a href="<?php echo $item['github_url']; ?>" target="_blank"><?php echo $item['github_url']; ?></a></li>
            <li><strong>Project URL</strong>: <a href="<?php echo $item['project_url']; ?>" target="_blank"><?php echo $item['project_url']; ?></a></li>

            <li>
  <strong>Admin Access</strong>:
  <button id="revealBtn" class="btn btn-sm btn-dark">Show Login</button>
</li>

<!-- Modal -->
<div id="modal" style="display:none; margin-top:10px;">
  <input id="reauthPw" type="password" placeholder="Enter secret key" class="form-control mb-2">
  <button id="confirm" class="btn btn-success btn-sm">Confirm</button>
  <button id="cancel" class="btn btn-secondary btn-sm">Cancel</button>
  <div id="msg" style="color:red; margin-top:5px;"></div>
</div>

<div id="result" style="margin-top:10px;font-weight:bold;"></div>

          </ul>
        </div>

        <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
          <h2><?php echo $item['description_title']; ?></h2>
          <p><?php echo $item['description']; ?></p>
        </div>
      </div>

    </div>

  </div>
<script>
  const ADMIN_DATA = {
  login_url: <?= json_encode($item['login_url']) ?>,
  login_creds: <?= json_encode($item['login_creds']) ?>
};
document.getElementById('revealBtn').addEventListener('click', () => {
  document.getElementById('modal').style.display = 'block';
  document.getElementById('msg').innerText = '';
  document.getElementById('reauthPw').value = '';
});

document.getElementById('confirm').addEventListener('click', () => {
  const pw = document.getElementById('reauthPw').value.trim();

  // YOUR MANUAL PASSWORD
  const MASTER_PASSWORD = "wali";

  if (!pw) {
    document.getElementById('msg').innerText = "Enter password first";
    return;
  }

  if (pw === MASTER_PASSWORD) {

    document.getElementById('result').innerHTML = `
       <div>✅Login URL: <a href="${ADMIN_DATA.login_url}" target="_blank">${ADMIN_DATA.login_url}</a></div>
       <div>✅Login Creds: ${ADMIN_DATA.login_creds}</div>
    `;

    document.getElementById('modal').style.display = 'none';

    // Auto hide after 15 seconds
    setTimeout(() => {
      document.getElementById('result').innerHTML = '••••••••••';
    }, 15000);

  } else {
    document.getElementById('msg').innerText = "Wrong password!";
  }
});

document.getElementById('cancel').addEventListener('click', () => {
  document.getElementById('modal').style.display = 'none';
});
</script>

</section><!-- /Portfolio Details Section -->
