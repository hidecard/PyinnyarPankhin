# TODO: Implement Subjects and Sub-Subjects for Certificate Page

## 1. Database Migrations
- [x] Create migration for subjects table (id, name, status)
- [x] Create migration for sub_subjects table (id, sub_id fk, name, status, remark)

## 2. Models
- [x] Create Subject model with fillable fields
- [x] Create SubSubject model with fillable fields and relationship to Subject

## 3. Controllers
- [x] Create SubjectController with CRUD methods
- [x] Create SubSubjectController with CRUD methods

## 4. Admin Views
- [x] Create admin/subjects/index.blade.php
- [x] Create admin/subjects/create.blade.php
- [x] Create admin/subjects/edit.blade.php
- [x] Create admin/subjects/show.blade.php
- [x] Create admin/sub-subjects/index.blade.php
- [x] Create admin/sub-subjects/create.blade.php
- [x] Create admin/sub-subjects/edit.blade.php
- [x] Create admin/sub-subjects/show.blade.php

## 5. Routes
- [x] Add resource routes for subjects and sub-subjects in admin group

## 6. Certificate Page Update
- [x] Update resources/views/certificate.blade.php to display subjects and sub-subjects dynamically
- [x] Update routes/web.php to use CertificateController@publicIndex for /certificate route
- [x] Add publicIndex method to CertificateController

## 7. Testing
- [x] Run migrations
- [ ] Test admin CRUD operations
- [x] Verify dynamic display on certificate page
