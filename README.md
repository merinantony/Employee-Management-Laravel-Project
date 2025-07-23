# 🚀 Employee Management System (Laravel 12)

A Laravel 12 application to manage employees with filtering and Excel export functionality. Built as part of a machine test.

---

## ✨ Features

- ✅ Add new employees with validation
- 🔍 Filter by **department** and **joining date range**
- 📄 View list of all employees in a Bootstrap-styled table
- 📊 Export filtered list to Excel (`.xlsx`) with **total salary**
- ⚙️ Built using Laravel 12 + Bootstrap 5 + Laravel Excel

---

## 📦 Requirements

- PHP >= 8.1
- MySQL
- Composer
- Laravel 12
- Git

---

## ⚙️ Setup Instructions

1. **Clone the Repository**

```bash
git clone https://github.com/merinantony/Employee-Management-Laravel-Project.git
cd Employee-Management-Laravel-Project

2. Install Dependencies
composer install

3. Configure .env

cp .env.example .env
php artisan key:generate

3. Edit .env and update DB settings:
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

4. Run Migrations
php artisan migrate

5. Serve the Application
php artisan serve

(Visit http://localhost:8000 in your browser.) 

📤 Export Feature
Use the filter form to narrow down employees by department or date.

Click the Export to Excel button to download a .xlsx file.

The file includes all filtered employees and a total salary row.

📁 Folder Structure

app/Http/Controllers/EmployeeController.php – Main controller
app/Exports/EmployeesExport.php – Excel export logic
resources/views/employees/index.blade.php – Main UI
resources/views/exports/employees.blade.php – Export view

🙋‍♀️ Author
Merin Antony
GitHub Profile :

https://github.com/merinantony
https://github.com/merinantony/Employee-Management-Laravel-Project