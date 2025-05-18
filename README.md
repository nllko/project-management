# Laravel + React Learning Project
---

A simple project management application built to learn Laravel (PHP), React, and Inertia.js.

## 💻 Tech Stack
---
**Frontend**  
![React](https://img.shields.io/badge/-React-61DAFB?logo=react&logoColor=white)
![Inertia.js](https://img.shields.io/badge/-Inertia.js-000000?logo=inertia&logoColor=white)

**Backend**  
![Laravel](https://img.shields.io/badge/-Laravel-FF2D20?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/-PHP-777BB4?logo=php&logoColor=white)

**Database**  
![SQLite](https://img.shields.io/badge/-SQLite-003B57?logo=sqlite&logoColor=white)

## ✨ Features
---
### 🔐 Authentication
- User registration & login
- Protected routes

<img alt="login" src="assets/login_screen.png">
<img alt="register" src="assets/register_screen.png">

### 📂 Projects Management
- Create/Edit/Delete projects
- Project list with pagination
- Sorting & filtering by:
  - Name
  - Completion Status

<img alt="projects" src="assets/projects_page.png">
<img alt="project" src="assets/project_view.png">

### ✅ Tasks System
- Nested task creation within projects
- Assign tasks to users
- Task filtering by:
  - Name
  - Completion status
  - Priority (High/Medium/Low)
- "My Tasks" view for assigned work

<img alt="tasks" src="assets/tasks_page.png">
<img alt="task_create" src="assets/new_task.png">

### 📊 Dashboard
- Overview statistics:
  - Total active projects
  - Completed tasks
  - Upcoming deadlines

<img alt="dashboard" src="assets/dashboard_page.png">


## 🛠️ Installation
---
1. **Clone repository**
   ```bash
   git clone https://github.com/nllko/project-management.git
   cd project-management
2. **Install dependencies**
    ```bash
    composer install
    npm install
3. **Configure environment**
    ```bash
    cp .env.example .env
4. **Initialize database**
    ```bash
    php artisan migrate --seed
5. **Generate app key**
    ```bash
    php artisan key:generate
6. **Start development servers**
    ```bash
    php artisan serve
    npm run dev

Visit http://localhost:8000 in your browser.

## 🤝 Contributing
---
This is primarily a personal learning project, but suggestions are welcome through issues. Not actively seeking contributions at this time.