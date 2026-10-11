-- ============================================================
-- Tasks for Today Management System
-- Course: IT0049 - Web System Technologies
-- Compatible with local XAMPP and InfinityFree phpMyAdmin
-- ============================================================

-- ------------------------------------------------------------
-- Table structure for `users`
-- ------------------------------------------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(50) NOT NULL UNIQUE,
    `full_name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `created_at` DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ------------------------------------------------------------
-- Seed data for `users` (Single demo user)
-- ------------------------------------------------------------
INSERT INTO `users` (`id`, `username`, `full_name`, `email`, `created_at`) VALUES
(1, 'msumiguel', 'Mark Snowpher Miguel', 'miguelmarksnowpher@gmail.com', NOW());

-- ------------------------------------------------------------
-- Table structure for `tasks`
-- ------------------------------------------------------------
DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `title` VARCHAR(150) NOT NULL,
    `status` VARCHAR(20) NOT NULL DEFAULT 'pending',
    `task_date` DATE NOT NULL,
    `created_at` DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ------------------------------------------------------------
-- Seed data for `tasks` (At least 8 records spanning 3+ dates, including CURDATE())
-- ------------------------------------------------------------
INSERT INTO `tasks` (`title`, `status`, `task_date`, `created_at`) VALUES
('Review IT0049 lecture notes on MVC architecture', 'completed', CURDATE() - INTERVAL 1 DAY, NOW()),
('Configure local XAMPP Apache and MySQL server', 'completed', CURDATE() - INTERVAL 1 DAY, NOW()),
('Implement TaskModel and UserModel with database queries', 'in_progress', CURDATE(), NOW()),
('Design responsive UI for Welcome and Task List views', 'in_progress', CURDATE(), NOW()),
('Verify date filtering query for Welcome page', 'pending', CURDATE(), NOW()),
('Test mobile layout and keyboard accessibility navigation', 'pending', CURDATE(), NOW()),
('Prepare technical documentation and submission report', 'pending', CURDATE() + INTERVAL 1 DAY, NOW()),
('Review database normalization and query performance', 'pending', CURDATE() + INTERVAL 1 DAY, NOW()),
('Submit IT0049 Web Systems Laboratory Activity on LMS', 'pending', CURDATE() + INTERVAL 3 DAY, NOW()),
('Conduct peer code review and repository backup', 'pending', CURDATE() + INTERVAL 3 DAY, NOW());
