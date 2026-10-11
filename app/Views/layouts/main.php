<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tasks for Today Management System - Student Laboratory Activity for IT0049 Web System Technologies">
    <title><?= esc($pageTitle ?? 'Tasks for Today') ?> - Tasks for Today</title>
    <link rel="stylesheet" href="<?= base_url('public/css/style.css?v=5') ?>">
</head>
<body>
    <a href="#main-content" class="skip-link">Skip to main content</a>

    <header class="site-header" role="banner">
        <div class="header-container">
            <a href="<?= base_url('/') ?>" class="site-brand" aria-label="Tasks for Today Home">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
                <span>Tasks for Today</span>
            </a>

            <nav class="main-nav" role="navigation" aria-label="Primary navigation">
                <a href="<?= base_url('/') ?>" 
                   class="nav-link <?= ($activeNav ?? '') === 'home' ? 'active' : '' ?>"
                   <?= ($activeNav ?? '') === 'home' ? 'aria-current="page"' : '' ?>>
                    Today
                </a>
                <a href="<?= base_url('tasks') ?>" 
                   class="nav-link <?= ($activeNav ?? '') === 'tasks' ? 'active' : '' ?>"
                   <?= ($activeNav ?? '') === 'tasks' ? 'aria-current="page"' : '' ?>>
                    All Tasks
                </a>
                <a href="<?= base_url('profile') ?>" 
                   class="nav-link <?= ($activeNav ?? '') === 'profile' ? 'active' : '' ?>"
                   <?= ($activeNav ?? '') === 'profile' ? 'aria-current="page"' : '' ?>>
                    Profile
                </a>
                <a href="<?= base_url('about') ?>" 
                   class="nav-link <?= ($activeNav ?? '') === 'about' ? 'active' : '' ?>"
                   <?= ($activeNav ?? '') === 'about' ? 'aria-current="page"' : '' ?>>
                    About
                </a>
            </nav>
        </div>
    </header>

    <main id="main-content" class="site-main" role="main">
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="site-footer" role="contentinfo">
        <div class="footer-container">
            <p>IT0049 Web System Technologies - Tasks for Today</p>
            <p>Developer: Mark Snowpher Miguel</p>
        </div>
    </footer>
</body>
</html>
