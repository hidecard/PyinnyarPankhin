# TODO: Add Intake ID FK to IntakeDetail and Update Admin CRUD UI

## Steps to Complete

- [ ] Create migration to add intake_id column and foreign key to intake_detail table
- [ ] Update IntakeDetail model: add belongsTo Intake relationship
- [ ] Update Intake model: add hasMany IntakeDetail relationship
- [ ] Update IntakeDetailController: add Intake parameter to methods (nested resource)
- [ ] Update routes/web.php: change to nested resource Route::resource('admin/intakes.details', IntakeDetailController::class, ['as' => 'admin'])
- [ ] Update views: add intake dropdown selection in admin/intake-details create/edit forms
- [ ] Run the new migration
- [ ] Test the admin intake-details page
