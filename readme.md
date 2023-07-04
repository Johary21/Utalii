## **Laravel tourism management system** 

**Utalii** is built on Laravel 8

**SCREENSHOTS** 

<hr />  

There are 3 types of user accounts. They include:
 
Administrators (Super Admin & Admin)
- Guest

**Requirements** 

Check Laravel 8 Requirements https://laravel.com/docs/8.x

**Installation**
- Install dependencies (composer install)
- Set Database Credentials & App Settings in dotenv file (.env)
- Migrate Database (php artisan migrate)
- Database seed (php artisan db:seed)

**Login Credentials**
After seeding. Login details as follows:

| Account Type  | Username | Email | Password |
| ------------- | -------- | ----- | -------- |
| Super Admin | cj | cj@cj.com | cj |
|  Admin | admin | admin@admin.com | cj |
|  Guest | Guest | guest@guest.com | cj |

#### **FUNCTIONS OF ACCOUNTS** 

**-- SUPER ADMIN**
- Only Super Admin can delete any record
- Create any user account
 
**-- Administrators (Super Admin & Admin)**

- Manage students class/sections
- 
- Create, Edit and manage all user accounts & profiles
- Create, Edit and manage places
- Create, Edit and manage Budget questions
- Manage calender events
- Edit system settings

**-- Guest**
- Manage own profile
- Search for places
- Budgetting
