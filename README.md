# Mini-CRM
This project aims to test Junior Developers Skills and Knowledge. I received this task from one of the companies and was asked to participate. I had a bit of fun, so I thought I'm going to share it with you all too:) Hopefully, you will find this project helpful! Feel free to take this project to the next level :mortar_board:

This project was built with Laravel v9.17.0

# Given / Completed Requirments
- [x] Ability to login as administrator
- [x] CRUD functionality (Create / Read / Update / Delete) for two menu items: Companies and
Employees.
- [x] Companies DB table consists of these fields: name (required), email, logo (minimum 100×100),
website.
- [x] Employees DB table consists of these fields: first name (required), last name (required),
Company (foreign key to Companies), email, phone.
- [x] Use database migrations to create schemas above.
- [x] Use seeders with factories to create fake data for companies and employees. Create
administrator user with email admin@admin.com and password “password”.
- [x] Store companies' logos in storage/app/public folder and make them accessible from public.
- [x] Use basic Laravel resource controllers with default methods – index, create, store etc.
- [x] Use Laravel’s validation function, using Request classes.
- [x] Use Laravel’s validation function, using Request classes.

# Bonus Points
- [x] Host project on GitHub.
- [x] Simple README with simple instructions on how to launch the project.
- [ ] Basic testing with phpunit.
- [ ] Dockerize the application.

# How to install

| Task           | Steps |  
|----------------|---------------|
| 1  | Clone the repo : git clone [https://github.com/vrbin90s/laravel-mini-CRM.git) |         |
| 2  | $ cd laravel-mini-CRM-master (for root directory) |  |
| 3  | $ composer install  |  |
| 4  | Create database on MySQL or SQLite For.eg [ mysql -uroot -p -e "CREATE DATABASE test_app_db"  ]   |  |
| 5  | Make changes in your .env file - change default settings with yours ]   |  |
| 5  |$ php artisan migrate --seed  |  | 
| 6  |$ php artisan db:seed --class=UserTableSeeder |
| 7  |$ php artisan serve |
|8| Login with: :shipit: admin@admin.com :shipit: password

# Screenshots

Login Page - I know that two login buttons are not neccessary :trollface:

![image](https://user-images.githubusercontent.com/72602872/172951663-018e145c-2886-4a9a-a1e5-6ab2e39f57ef.png)

Welcome Page & Navigation 

![image](https://user-images.githubusercontent.com/72602872/172952046-f0a717e4-c081-4768-9e5c-0fa4cc22066b.png)

Companies Page - Add/Delete/View/Edit + Pagination (10 items as per requirments) Functionalities

![image](https://user-images.githubusercontent.com/72602872/172952139-8fd9f30c-021b-4d78-9c18-7cd0009b083c.png)

Employees Table - Simillar functionalities - Add/Delete/View/Edit + Pagination + Companies Filtering

![image](https://user-images.githubusercontent.com/72602872/172952614-fe46f5e5-830a-439e-aa6a-cdbe48f8ae39.png)


# Copyrights

This software is open-source software, and you can use it as you wish. No credits are required. Have Fun! :thumbsup:
