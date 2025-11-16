# Update Important Dates & Deadlines in Admissions Page

## Tasks
- [x] Update the Important Dates & Deadlines table in `resources/views/admissions.blade.php` to dynamically pull dates from the database via the IntakeSeeder data
  - Modified the view to use Blade templating to fetch intake details from the database
  - Dates now reflect the actual data from IntakeSeeder.php: Fall Intake (June 1, August 15, September 1), Spring Intake (October 1, December 15, January 10), Summer Intake (January 1, April 1, May 5)
