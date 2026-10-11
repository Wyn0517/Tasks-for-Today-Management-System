<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <h1 class="page-title">Tasks for Today</h1>
    <div class="page-subtitle">
        <time datetime="<?= esc($todayDate) ?>"><?= esc($todayDisplay) ?></time>
        <span class="meta-pill"><?= count($tasks) ?> <?= count($tasks) === 1 ? 'task' : 'tasks' ?> scheduled</span>
    </div>
</div>

<?php if (!empty($tasks)): ?>
    <div class="card">
        <ul class="task-list" aria-label="Today's task list">
            <?php foreach ($tasks as $task): ?>
                <li class="task-item">
                    <div class="task-content">
                        <div class="task-title"><?= esc($task['title']) ?></div>
                        <div class="task-meta">
                            <span class="task-meta-item">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                Created <?= esc(date('M j, Y \a\t g:i A', strtotime($task['created_at']))) ?>
                            </span>
                        </div>
                    </div>
                    <div>
                        <span class="status-badge status-<?= esc($task['status']) ?>">
                            <?= esc(str_replace('_', ' ', $task['status'])) ?>
                        </span>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php else: ?>
    <div class="empty-state">
        <svg class="empty-state-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
            <line x1="16" y1="2" x2="16" y2="6"></line>
            <line x1="8" y1="2" x2="8" y2="6"></line>
            <line x1="3" y1="10" x2="21" y2="10"></line>
            <path d="M9 16l2 2 4-4"></path>
        </svg>
        <h2 class="empty-state-title">No tasks scheduled for today</h2>
        <p class="empty-state-text">There are currently no items queued for <?= esc($todayDisplay) ?>. Check the complete task list to view previous or upcoming tasks.</p>
        <a href="<?= base_url('tasks') ?>" class="btn-secondary">
            View All Tasks
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
        </a>
    </div>
<?php endif; ?>

<?= $this->endSection() ?>
