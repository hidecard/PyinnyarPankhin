# TODO: Convert Static HTML University Website to Laravel React Project

## Setup Phase
- [x] Move Frontend/style.css to pyinnyarpankhin/public/assets/css/
- [x] Move Admin/style.css to pyinnyarpankhin/public/assets/css/
- [x] Move image/ directory to pyinnyarpankhin/public/assets/images/
- [x] Install Laravel dependencies: run `composer install` in pyinnyarpankhin/
- [x] Install Node.js dependencies: run `npm install` in pyinnyarpankhin/
- [x] Ensure Laravel project is set up: check .env, run `php artisan key:generate` if needed

## Backend Development
- [x] Create News model and migration
- [x] Create Event model and migration
- [x] Create User model (already exists, but ensure it's set up)
- [x] Set up authentication using Laravel Breeze or Fortify (already configured)
- [x] Run database migrations

## Frontend Conversion
- [x] Convert index.html to React Home component (pyinnyarpankhin/resources/js/pages/Home.tsx)
- [x] Convert Frontend/academics.html to React Academics component
- [ ] Convert Frontend/admissions.html to React Admissions component
- [ ] Convert Frontend/department.html to React Department component
- [ ] Convert Frontend/library.html to React Library component
- [ ] Convert Frontend/about.html to React About component
- [ ] Convert Frontend/event.html to React Event component
- [ ] Convert Frontend/contact.html to React Contact component
- [ ] Convert Admin/index.html to React AdminDashboard component
- [ ] Convert Admin/login.html to React AdminLogin component
- [ ] Convert Admin/signup.html to React AdminSignup component
- [x] Convert Admin/student.html to Blade admin.students view
- [ ] Convert Admin/academic.html to React AdminAcademic component
- [ ] Convert Admin/reports.html to React AdminReports component
- [ ] Convert Admin/setting.html to React AdminSetting component
- [x] Convert Admin/academics-clendar.html to Blade admin.calendar view

## Routing and Navigation
- [x] Set up Inertia routes in pyinnyarpankhin/routes/web.php
- [ ] Update navbar and links in React components to use Inertia navigation
- [ ] Create shared layout components if needed

## Followup Steps
- [x] Run database migrations
- [x] Test the app locally: run `php artisan serve` and `npm run dev`
- [ ] Verify all pages load correctly
- [ ] Check authentication flows

## Admin UI Blade Template Update
- [x] Update admin blade template to match home.blade.php format (doctype, head, bootstrap version)
- [x] Test /admin route: Page loads with HTTP 200, correct HTML structure, Bootstrap 5.3.6, and Font Awesome links
