<?php
// Load JSON data
$jsonData = file_get_contents("assets/json/cv.json");
$data = json_decode($jsonData, true);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= htmlspecialchars($data['name']) ?> — CV</title>
  <link href="assets/css/cv.css" rel="stylesheet">
  <style>
    .badge { display:inline-block; padding:4px 10px; margin:2px; background:#007bff; color:#fff; border-radius:4px; font-size:0.8em; }
    .section { margin-bottom:20px; }
  </style>
</head>
<body>
  <div class="controls">
    <a href="index.php" class="print-btn" style="margin-right: 140px;">HOME</a>
    <button class="print-btn" onclick="window.print()">Print / Save PDF</button>
  </div>

  <main class="cv-wrap">
    <aside class="left">
      <div class="photo">
        <div class="avatar">
          <img src="<?= htmlspecialchars($data['photo']) ?>" alt="<?= htmlspecialchars($data['name']) ?>" style="width:260px;margin-top:120px">
        </div>
      </div>
      <h1><?= htmlspecialchars($data['name']) ?></h1>
      <div class="title"><?= $data['title'] ?></div>

      <div class="divider"></div>

      <div class="section">
        <div class="section-title">Contact</div>
        <div class="contact">
          <?php foreach ($data['contact'] as $key => $value): ?>
            <div><strong><?= ucfirst($key) ?>:</strong> <?= is_array($value) ? implode(' | ', $value) : $value ?></div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="divider"></div>

      <div class="section">
        <div class="section-title">Core Skills</div>
        <div class="skill-badges">
          <?php foreach ($data['skills']['core'] as $skill): ?>
            <div class="badge"><?= $skill ?></div>
          <?php endforeach; ?>
        </div>

        <div class="divider"></div>
        <div class="section-title">Other Skills</div>
        <div class="skill-badges">
          <?php foreach ($data['skills']['others'] as $skill): ?>
            <div class="badge"><?= $skill ?></div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="divider"></div>

      <div class="section">
        <div class="section-title">Education</div>
        <div class="contact">
          <?php foreach ($data['education'] as $edu): ?>
            <div><strong><?= $edu['degree'] ?></strong> — <?= $edu['institution'] ?>
              <div class="muted">Result: <?= $edu['result'] ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="divider"></div>

      <div class="section">
        <div class="section-title">Certifications(Course)</div>
        <div class="contact">
          <?php foreach ($data['certifications'] as $i => $cert): ?>
            <div><?= ($i+1) ?>. <?= $cert ?></div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="left-footer">
        <?= $data['footer'] ?>
      </div>
    </aside>

    <section class="right">
      <div class="summary">
        <strong>Professional Summary</strong>
        <p><?= $data['summary'] ?></p>
      </div>

      <div class="divider"></div>

      <div class="experience">
        <div class="section-title">Professional Experience</div>
        <?php foreach ($data['experience'] as $job): ?>
          <article class="job">
            <h3><?= $job['role'] ?> — <?= $job['company'] ?></h3>
            <div class="meta"><?= $job['duration'] ?> · <?= $job['location'] ?></div>
            <?php if (!empty($job['details'])): ?>
              <p><?= $job['details'] ?></p>
            <?php endif; ?>
          </article>
        <?php endforeach; ?>
      </div>

      <div class="divider"></div>

      <div class="projects">
        <div class="section-title">Selected Projects</div>
        <?php foreach ($data['projects'] as $proj): ?>
          <div class="project">
            <strong><?= $proj['name'] ?></strong>
            <div class="muted"><i>Technologies: <?= $proj['technologies'] ?><br>
            Functionality: <?= $proj['description'] ?></i></div>
            <span class="muted"><?= $proj['link'] ?></span>
            <a href="<?= $proj['link'] ?>" target="_blank">Live</a><br>
            
          </div>
        <?php endforeach; ?>
      </div>

      <div class="divider"></div>
      <div class="section">
  <div class="section-title">Personal Information</div>

  <?php foreach ($data['personal_info'] as $key => $value): ?>
    <?php if ($key !== 'apps'): ?>
      <div><strong><?= ucwords(str_replace('_', ' ', $key)) ?>:</strong> <?= $value ?></div>
    <?php endif; ?>
  <?php endforeach; ?>

</div>


      <div class="divider"></div>

      <div class="section">
        <div class="section-title">Android Apps</div>
        <div class="contact">
          <?php foreach ($data['apps'] as $app): ?>
            <div><?= $app ?></div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="divider"></div>

      <footer>
        <small>References available on request · Last updated: <?= $data['last_updated'] ?></small>
      </footer>
    </section>
  </main>
</body>
</html>
