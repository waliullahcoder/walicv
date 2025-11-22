<header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
      <img src="assets/img/my-profile-img.jpg" alt="" class="img-fluid rounded-circle">
    </div>

    <a href="index.php" class="logo d-flex align-items-center justify-content-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1 class="sitename">Wali Ullah</h1>
    </a>
<?php
$data = json_decode(file_get_contents("assets/json/cv.json"),true);
?>
    <div class="social-links text-center">

    <!-- GitHub -->
    <?php if (!empty($data['contact']['github'])): ?>
    <a href="https://<?= $data['contact']['github']; ?>" target="_blank" class="github">
        <i class="bi bi-github"></i>
    </a>
    <?php endif; ?>

    <!-- Facebook -->
    <?php if (!empty($data['contact']['facebook'])): ?>
    <a href="https://<?= $data['contact']['facebook']; ?>" target="_blank" class="facebook">
        <i class="bi bi-facebook"></i>
    </a>
    <?php endif; ?>

    <!-- LinkedIn -->
    <?php if (!empty($data['contact']['linkedin'])): ?>
    <a href="https://<?= $data['contact']['linkedin']; ?>" target="_blank" class="linkedin">
        <i class="bi bi-linkedin"></i>
    </a>
    <?php endif; ?>

    <!-- SignalHire -->
    <?php if (!empty($data['contact']['signalhire'])): ?>
    <a href="https://<?= $data['contact']['signalhire']; ?>" target="_blank" class="signalhire">
        <i class="bi bi-person-lines-fill"></i>
    </a>
    <?php endif; ?>

    <!-- TheOrg -->
    <?php if (!empty($data['contact']['theorg'])): ?>
    <a href="https://<?= $data['contact']['theorg']; ?>" target="_blank" class="theorg">
        <i class="bi bi-diagram-3"></i>
    </a>
    <?php endif; ?>
</div>


    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
        <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
        <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
        <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio </a></li>
        <li><a href="#gallery"><i class="bi bi-images navicon"></i> Gallery </a></li>
        <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
        <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
      </ul>
    </nav>

  </header>