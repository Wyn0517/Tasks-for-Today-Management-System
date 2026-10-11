<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <h1 class="page-title">All Tasks</h1>
    <div class="page-subtitle">
        <span>Complete task register ordered chronologically by scheduled date</span>
        <span class="meta-pill"><?= esc($totalCount) ?> <?= $totalCount === 1 ? 'record' : 'records' ?> total</span>
    </div>
</div>

<?php if (!empty($tasks)): ?>
    <div class="card">
        <div class="table-responsive">
            <table class="task-table" aria-label="Database tasks table">
                <thead>
                    <tr>
                        <th scope="col" style="width: 50px;">#</th>
                        <th scope="col">Task Description</th>
                        <th scope="col" style="width: 140px;">Status</th>
                        <th scope="col" style="width: 170px;">Scheduled Date</th>
                        <th scope="col" style="width: 170px;">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $currentDate = date('Y-m-d');
                    foreach ($tasks as $task): 
                        $isToday = ($task['task_date'] === $currentDate);
                    ?>
                        <tr>
                            <td class="task-id"><?= esc($task['id']) ?></td>
                            <td>
                                <span class="task-title"><?= esc($task['title']) ?></span>
                            </td>
                            <td>
                                <span class="status-badge status-<?= esc($task['status']) ?>">
                                    <?= esc(str_replace('_', ' ', $task['status'])) ?>
                                </span>
                            </td>
                            <td>
                                <span class="date-badge"><?= esc(date('M j, Y', strtotime($task['task_date']))) ?></span>
                            </td>
                            <td>
                                <span class="date-badge" style="color: var(--color-text-muted);">
                                    <?= esc(date('M j, Y H:i', strtotime($task['created_at']))) ?>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php else: ?>
    <div class="empty-state">
        <svg class="empty-state-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
            <polyline points="14 2 14 8 20 8"></polyline>
            <line x1="9" y1="15" x2="15" y2="15"></line>
        </svg>
        <h2 class="empty-state-title">No tasks found</h2>
        <p class="empty-state-text">No records currently exist in the tasks database. Run the database seeder to populate sample tasks.</p>
    </div>
<?php endif; ?>

<?= $this->endSection() ?>
