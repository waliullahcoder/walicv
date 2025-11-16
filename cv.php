<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Senior Software Engineer — CV</title>
  <style>
    :root{
      --accent:#1f6feb;
      --muted:#6b7280;
      --bg:#f7fafc;
      --paper:#ffffff;
      --radius:10px;
      --max-width:900px;
      font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }
    *{box-sizing:border-box}
    body{
      background:var(--bg);
      padding:30px 20px;
      color:#111827;
      -webkit-font-smoothing:antialiased;
    }

    .cv-wrap{
      max-width:var(--max-width);
      margin:0 auto;
      background:linear-gradient(180deg, rgba(255,255,255,0.95), rgba(255,255,255,0.98));
      border-radius:var(--radius);
      box-shadow:0 6px 30px rgba(2,6,23,0.08);
      overflow:hidden;
      display:grid;
      grid-template-columns: 300px 1fr;
    }

    /* left column */
.left{
background:linear-gradient(180deg,#f3f8ff, #ffffff);
padding:28px 22px;
}
.photo{
width:100%;
display:flex;align-items:center;justify-content:center;margin-bottom:16px;
}
.avatar{
width:120px;height:120px;border-radius:12px;background:linear-gradient(135deg,var(--accent),#6c5ce7);display:flex;align-items:center;justify-content:center;color:white;font-weight:700;font-size:34px;box-shadow:0 8px 20px rgba(31,111,235,0.18);
}
h1{font-size:20px;margin:6px 0 0;color:#0e64b1;padding-top:120px;padding-left:5px;text-align:center;
}
.title{color:##8a929f;font-weight:700;font-size:13px;padding-left:5px;color:var(--muted)}


.contact{font-size:13px;color:var(--muted);line-height:1.6}
.divider{height:1px;background:rgba(15,23,42,0.06);margin:18px 0}


.section-title{font-size:12px;color:var(--muted);text-transform:uppercase;letter-spacing:1px;margin-bottom:8px}
.skill-badges{display:flex;flex-wrap:wrap;gap:8px}
.badge{background:rgba(31,111,235,0.08);color:var(--accent);padding:6px 8px;border-radius:8px;font-size:12px}


.skill-list{display:grid;grid-template-columns:1fr 1fr;gap:6px;margin-top:8px}
.skill-item{font-size:13px;color:#111827}


.left-footer{margin-top:16px;font-size:12px;color:var(--muted)}

    /* right column */
.right{padding:28px 32px}
.summary{font-size:14px;color:#374151;line-height:1.6}


.job{margin-bottom:16px}
.job h3{margin:0;font-size:15px}
.job .meta{font-size:12px;color:var(--muted);margin-bottom:6px}
.job p{margin:6px 0;color:#374151;font-size:13px}


.chips{display:flex;flex-wrap:wrap;gap:8px;margin-top:8px}
.chip{padding:6px 10px;border-radius:999px;border:1px solid rgba(15,23,42,0.06);font-size:13px}


.project{margin-bottom:12px}


footer small{color:var(--muted)}


/* print button */
.controls {
  position: relative;
  padding: 12px 20px;
  display: flex;
  gap: 10px;
}

.print-btn {
  background: var(--accent);
  color: white;
  border: none;
  padding: 10px 14px;
  border-radius: 8px;
  cursor: pointer;
  font-weight: 600;
  font-size: 14px;
  text-decoration: none; /* for the HOME link */
  display: inline-flex;
  align-items: center;
  justify-content: center;
  transition: 0.2s ease;
}

.print-btn:hover {
  opacity: 0.9;
  transform: translateY(-1px);
}

.print-btn:active {
  transform: translateY(0);
}

/* Hide both buttons in PDF */
@media print {
  .controls {
    display: none !important;
  }
}

.controls{position:relative;padding:12px 20px;background:transparent}
.print-btn{position:absolute;right:197px;top:-20px;background:var(--accent);color:white;border:none;padding:10px 12px;border-radius:8px;cursor:pointer;font-weight:600}


/* Responsive */
@media (max-width:800px){
.cv-wrap{grid-template-columns:1fr;}
.left{order:1}
.right{order:2}
}


/* ==========================
PRINT — UPDATED FOR PDF
========================== */
@media print{
body{background:white;padding:0;margin:0}
.controls{display:none !important}


/* Keep the A4 layout clean */
@page{
size:A4;
margin:10mm 10mm 10mm 10mm;
}


.cv-wrap{
box-shadow:none !important;
border-radius:0 !important;
max-width:100% !important;
width:100% !important;
grid-template-columns:260px 1fr !important; /* keeps 2-column layout */
}


.left{padding:16px !important}
.right{padding:16px !important}


/* Ensure backgrounds, gradients, colors appear */
*{-webkit-print-color-adjust:exact !important; print-color-adjust:exact !important; color-adjust:exact !important;}


/* Prevent elements from breaking across pages */
.left, .right, .section, .job, .project{
page-break-inside: avoid;
}
}


.muted{color:var(--muted)}
.inline{display:inline-block}

  </style>
</head>
<body>
  <div class="controls">
    <a href="index.html" class="print-btn" style="margin-right: 140px;">HOME</a>
    <button class="print-btn" onclick="window.print()">Print / Save PDF</button>
</div>

  <main class="cv-wrap" role="document" aria-label="Senior Software Engineer CV">
    <aside class="left">
      <div class="photo">
        <div class="avatar"><img src="assets/img/pf.png" alt="Wali Ullah" style="width:260px;margin-top:120px"></div>
      </div>
      <h1>Wali Ullah</h1>
      <div class="title">Senior Software Engineer(Fulll-Stack) Laravel · React · Node · Java . DBMS . Deployment . Production

      <div class="divider"></div>

      <div class="section">
        <div class="section-title">Contact</div>
        <div class="contact">
          <div>Email: waliullahbiplo78@gmail.com</div>
          <div>Phone: +880 1X-XXXX-XXXX</div>
          <div>Location: Dhaka, Bangladesh</div>
          <div>GitHub: github.com/wali</div>
          <div>LinkedIn: linkedin.com/in/wali</div>
        </div>
      </div>

      <div class="divider"></div>

      <div class="section">
        <div class="section-title">Core Skills</div>
        <div class="skill-badges">
          <div class="badge">Laravel</div>
          <div class="badge">React</div>
          <div class="badge">Node.js</div>
          <div class="badge">Spring Boot</div>
          <div class="badge">Databases</div>
          <div class="badge">Deployment</div>
        </div>
        <div style="height:8px"></div>
        <div class="skill-list">
          <div class="skill-item">REST & GraphQL APIs</div>
          <div class="skill-item">Microservices</div>
          <div class="skill-item">MySQL / PostgreSQL</div>
          <div class="skill-item">Docker & CI/CD</div>
          <div class="skill-item">TDD / Unit Testing</div>
          <div class="skill-item">Caching & Queues</div>
        </div>
      </div>

      <div class="divider"></div>

      <div class="section">
        <div class="section-title">Tech Stack</div>
        <div class="chips">
          <div class="chip">PHP 8</div>
          <div class="chip">Laravel 10</div>
          <div class="chip">React 18</div>
          <div class="chip">Node 18+</div>
          <div class="chip">Java 17</div>
          <div class="chip">Docker</div>
          <div class="chip">AWS</div>
        </div>
      </div>

      <div class="divider"></div>

      <div class="section">
        <div class="section-title">Education</div>
        <div class="contact">
          <div><strong>B.Sc. in Computer Science</strong></div>
          <div class="muted">University Name — 2014</div>
        </div>
      </div>

      <div class="left-footer">Available for remote and on-site roles · Open to leadership & architecture positions</div>
    </aside>

    <section class="right">
      <div class="summary">
        <strong>Professional Summary</strong>
        <p>
          Senior Software Engineer with 8+ years designing and delivering web applications and backend services. Strong expertise in Laravel ecosystem, modern React front-ends, Node.js microservices, and Spring Boot-based Java systems. Experienced in API design, cloud deployments, team leadership, and performance optimization.
        </p>
      </div>

      <div class="divider"></div>

      <div class="experience">
        <div class="section-title">Professional Experience</div>

        <article class="job">
          <h3>Lead Backend Engineer — Acme Tech</h3>
          <div class="meta">Jan 2022 — Present · Dhaka, Bangladesh</div>
          <p>
            Architected microservices-based billing platform using Laravel and Node.js. Migrated monolith to services, implemented event-driven queues (Redis), and improved throughput by 4x.
          </p>
          <ul>
            <li>Designed RESTful and GraphQL APIs consumed by React SPA and mobile apps.</li>
            <li>Implemented CI/CD pipelines with GitHub Actions and Docker image builds.</li>
            <li>Led a team of 5 engineers and performed code reviews, mentoring, and onboardings.</li>
          </ul>
        </article>

        <article class="job">
          <h3>Senior Software Engineer — Beta Systems</h3>
          <div class="meta">May 2019 — Dec 2021 · Remote</div>
          <p>
            Built and maintained customer management systems in Laravel and Spring Boot microservices for high-availability environments.
          </p>
          <ul>
            <li>Integrated third-party payments and webhooks (Stripe, PayPal).</li>
            <li>Improved API latency and implemented caching strategies.</li>
          </ul>
        </article>

        <article class="job">
          <h3>Software Engineer — Gamma Labs</h3>
          <div class="meta">Jul 2016 — Apr 2019 · Dhaka</div>
          <p>
            Full-stack development with React frontends and Node.js backends, delivering multiple product launches and maintaining CI pipelines.
          </p>
        </article>

      </div>

      <div class="divider"></div>

      <div class="projects">
        <div class="section-title">Selected Projects</div>

        <div class="project">
          <strong>InvoicePro (Laravel + React)</strong>
          <div class="muted">Role: Architect & Lead Developer</div>
          <p>Multi-tenant invoicing platform with real-time collaboration, PDF generation, and role-based access control.</p>
        </div>

        <div class="project">
          <strong>Realtime Chat (Node.js + Socket.io)</strong>
          <div class="muted">Role: Backend Lead</div>
          <p>Scalable websocket service supporting rooms, typing indicators, and message persistence in PostgreSQL.</p>
        </div>

      </div>

      <div class="divider"></div>

      <div class="section">
        <div class="section-title">Certifications & Education</div>
        <div class="contact">
          <div>Oracle Certified Professional, Java SE</div>
          <div>Certified Laravel Developer (online)</div>
        </div>
      </div>

      <div class="divider"></div>

      <footer>
        <small>References available on request · Last updated: Nov 15, 2025</small>
      </footer>
    </section>
  </main>

</body>
</html>
