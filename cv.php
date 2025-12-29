<?php
// Load JSON data
$jsonData = file_get_contents("assets/json/cv.json");
$data = json_decode($jsonData, true);

$data2 = json_decode(file_get_contents("assets/json/portfolio.json"), true);
$details = $data2['details'] ?? [];

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= htmlspecialchars($data['name']) ?> — CV</title>
  <link href="assets/css/cv.css" rel="stylesheet">
 
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
        <div class="divider"></div>
        <div class="contact">
          <?php foreach ($data['contact'] as $key => $value): ?>
            <div><strong><?= ucfirst($key) ?>:</strong> <a href="https://<?= $value ?>" target="_blank"><?= is_array($value) ? implode(' | ', $value) : $value ?></a></div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="divider"></div>

      <div class="section">
        <div class="section-title">Core Skills</div>
        <div class="divider"></div>
        <div class="skill-badges">
          <?php foreach ($data['skills']['core'] as $skill): ?>
            <div class="badge"><?= $skill ?></div>
          <?php endforeach; ?>
        </div>
         </div>
       <div class="section">
        <div class="divider"></div>
        <div class="section-title">Other Skills</div>
        <div class="divider"></div>
        <div class="skill-badges">
          <?php foreach ($data['skills']['others'] as $skill): ?>
            <div class="badge"><?= $skill ?></div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="divider"></div>

      <div class="section">
        <div class="section-title">Education</div>
        <div class="divider"></div>
        <div class="contact">
          <?php foreach ($data['education'] as $edu): ?>
            <div><strong><?= $edu['degree'] ?></strong> — <?= $edu['institution'] ?>
              <div class="muted">Result: <?= $edu['result'] ?></div>
              Passing Year: <?= $edu['year'] ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="divider"></div>

      <div class="section">
        <div class="section-title">Languages(Communication)</div>
        <div class="divider"></div>
        <div class="contact">
          <?php foreach ($data['languages'] as $lang): ?>
            <div><strong><?= $lang['language'] ?></strong> <div class="muted">Written: <?= $lang['written'] ?>, Spoken: <?= $lang['spoken'] ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="divider"></div>

      <div class="section">
        <div class="section-title">Certifications(Course)</div>
        <div class="divider"></div>
        <div class="contact">
          <?php foreach ($data['certifications'] as $i => $cert): ?>
            <div><?= ($i+1) ?>. <?= $cert ?></div>
          <?php endforeach; ?>
        </div>
      </div>

       <div class="divider"></div>
      <div class="section">
  <div class="section-title">Personal Information</div>
  <div class="divider"></div>

  <?php foreach ($data['personal_info'] as $key => $value): ?>
    <?php if ($key !== 'apps'): ?>
      <div><strong><?= ucwords(str_replace('_', ' ', $key)) ?>:</strong> <?= $value ?></div>
    <?php endif; ?>
  <?php endforeach; ?>

</div>


      <div class="divider"></div>

      <div class="section">
        <div class="section-title">REFERENCES</div>
        <div class="divider"></div>
        <div class="contact">
         <?php foreach ($data['references'] as $i => $ref): ?>
            <div><strong><?= ($i+1) ?>. <?= $ref['name'] ?><br></strong> Designation: <?= $ref['designation'] ?><br> Internal Phone: <?= $ref['internal_phone'] ?><br> IP Landline: <?= $ref['ip_landline'] ?><br> IP Direct Dial: <?= $ref['ip_direct_dial'] ?><br> Email: <?= $ref['email'] ?></div>
          <?php endforeach; ?>
        </div>
      </div>

      
    </aside>

    <section class="right">
      <div class="divider"></div>
        <div class="section-title">Professional Summary (10+ years Experience)</div>
        <div class="divider"></div>
      <div class="summary">
        <p><?= $data['summary'] ?></p>
      </div>

      <div class="divider"></div>

      <div class="experience">
        <div class="section-title">Professional Experience</div>
        <div class="divider"></div>
        <?php foreach ($data['experience'] as $job): ?>
          <article class="job">
            <strong><?= $job['role'] ?> — <?= $job['company'] ?></strong>
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
        <div class="divider"></div>
        <?php foreach ($details as $proj): ?>
          <div class="project">
            <strong><?= $proj['description_title'] ?></strong><br>
            <strong>Project Date: </strong> <?= $proj['project_date'] ?><br>
            <strong>Git URL: </strong> <a href="<?= $proj['github_url'] ?>" target="_blank"><?= $proj['github_url'] ?></a><br>
            <strong>Live URL: </strong> <a href="<?= $proj['project_url'] ?>" target="_blank"><?= $proj['project_url'] ?></a><br>
            <div class="muted"><strong>Technologies: </strong><?= $proj['tools'] ?><br>
            <strong>Functionality: </strong> <?= $proj['description'] ?></div>
            
          </div>
        <?php endforeach; ?>
      </div>

     

      <div class="divider"></div>

      <div class="section">
        <div class="section-title">Android Apps</div>
        <div class="divider"></div>
        <div class="contact">
          <?php foreach ($data['apps'] as $app): ?>
            <div><?= $app ?></div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="divider"></div>

      <footer>
        <small><div class="left-footer">
        <?= $data['footer'] ?>
      </div></small>
      </footer>
    </section>
  </main>
</body>
</html>
