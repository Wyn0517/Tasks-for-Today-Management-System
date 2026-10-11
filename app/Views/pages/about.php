<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <h1 class="page-title">About the System</h1>
    <div class="page-subtitle">
        <span>Academic project overview and technical specifications</span>
    </div>
</div>

<div class="content-block">
    <h2 class="section-title">Project Purpose</h2>
    <p>
        The <strong>Tasks for Today Management System</strong> is a focused web application developed as a laboratory activity for <strong>IT0049 - Web System Technologies</strong>. 
        It demonstrates core competencies in modern full-stack web engineering using the <strong>CodeIgniter 4</strong> PHP framework and relational database management with MySQL.
    </p>
    <p>
        The application illustrates strict MVC (Model-View-Controller) architecture, database abstraction via CodeIgniter Models, programmatic date-based query filtering, and accessible frontend presentation without external framework bloat.
    </p>
</div>

<div class="content-block">
    <h2 class="section-title">Developer & Course Identification</h2>
    <div class="info-grid">
        <div class="info-item">
            <span class="info-label">Developer</span>
            <span class="info-value">Mark Snowpher Miguel</span>
        </div>
        <div class="info-item">
            <span class="info-label">Course</span>
            <span class="info-value">IT0049 - Web System Technologies</span>
        </div>
        <div class="info-item">
            <span class="info-label">Assignment</span>
            <span class="info-value">Laboratory Activity: Tasks for Today (TSA1)</span>
        </div>
        <div class="info-item">
            <span class="info-label">Institutional Context</span>
            <span class="info-value">Bachelor of Science in Information Technology</span>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
