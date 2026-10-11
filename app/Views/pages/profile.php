<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <h1 class="page-title">User Profile</h1>
    <div class="page-subtitle">
        <span>Active system demo user record retrieved from database</span>
    </div>
</div>

<?php if (!empty($user)): ?>
    <div class="info-card">
        <h2 class="section-title">Account Details</h2>
        <div class="info-grid">
            <div class="info-item">
                <span class="info-label">Full Name</span>
                <span class="info-value"><?= esc($user['full_name']) ?></span>
            </div>

            <div class="info-item">
                <span class="info-label">Username</span>
                <span class="info-value"><code>@<?= esc($user['username']) ?></code></span>
            </div>

            <div class="info-item">
                <span class="info-label">Email Address</span>
                <span class="info-value"><?= esc($user['email']) ?></span>
            </div>

            <div class="info-item">
                <span class="info-label">Member Since</span>
                <span class="info-value"><?= esc(date('F j, Y', strtotime($user['created_at']))) ?></span>
            </div>
        </div>
    </div>

<?php else: ?>
    <div class="empty-state">
        <svg class="empty-state-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
        </svg>
        <h2 class="empty-state-title">No user profile found</h2>
        <p class="empty-state-text">No user record exists in the <code>users</code> table. Please run the seeder or import <code>database.sql</code> to create the demo user record.</p>
    </div>
<?php endif; ?>

<?= $this->endSection() ?>
