# Tasks for Today Management System

A focused, database-backed web application built for **IT0049 — Web System Technologies** (Laboratory Activity / TSA1) using **CodeIgniter 4** and **MySQL**.

The system provides a clear interface for viewing tasks scheduled specifically for the current day, browsing all tasks ordered chronologically, inspecting the demo user profile, and reviewing project specifications.

---

## Application Structure & Routes

| Route | Page | Purpose |
| :--- | :--- | :--- |
| `/` | **Today's Tasks** | Queries and displays only tasks scheduled for the current date (`task_date = CURDATE()`). Displays an intentional empty state if no tasks are scheduled. |
| `/tasks` | **All Tasks** | Retrieves and lists every task record from the database, ordered chronologically by `task_date ASC`. |
| `/profile` | **User Profile** | Displays the single demo user record retrieved via `UserModel` (`username`, `full_name`, `email`, `created_at`). |
| `/about` | **About System** | Static information page identifying the developer, course details, and system architecture. |

---

## Database Schema

The database `tasks_for_today` utilizes two tables:

### 1. `tasks` Table
```sql
CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    status VARCHAR(20) NOT NULL DEFAULT 'pending',
    task_date DATE NOT NULL,
    created_at DATETIME NOT NULL
);
```

### 2. `users` Table
```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL
);
```

---

## Local Setup & Installation

### Prerequisites
- PHP 8.2 or higher
- MySQL / MariaDB (via XAMPP)
- Composer

### Step 1: Database Setup
1. Start **Apache** and **MySQL** in your XAMPP Control Panel.
2. Open phpMyAdmin (`http://localhost/phpmyadmin/`) or your MySQL client.
3. Import the included **`database.sql`** file located in the project root:
   - This creates the `tasks_for_today` database and tables.
   - It seeds 10 sample tasks spanning past, current, and upcoming dates.
   - It seeds 1 demo user record.

*Alternatively, using CodeIgniter CLI:*
```bash
php spark migrate
php spark db:seed DatabaseSeeder
```

### Step 2: Configure Environment
Ensure your `.env` file contains your local MySQL credentials:
```ini
CI_ENVIRONMENT = development

app.baseURL = 'http://localhost:8080/'

database.default.hostname = localhost
database.default.database = tasks_for_today
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
```

### Step 3: Run the Application

#### Option A: Using CodeIgniter Built-in Server
Run the following in the project root:
```bash
php spark serve
```
Open your browser to: **`http://localhost:8080/`**

#### Option B: Using XAMPP Apache
If the project folder is inside `C:\xampp\htdocs\Tasks-for-Today-Management-System`, visit:
**`http://localhost/Tasks-for-Today-Management-System/public/`**

---

## Live Deployment

- **Live URL:** [http://taskfortoday.page.gd/](http://taskfortoday.page.gd/)
- **Hosting Platform:** InfinityFree
- **Database Engine:** MySQL via phpMyAdmin


