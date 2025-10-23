<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\Duration;
use App\Models\Department;
use App\Models\Major;
use App\Models\Degree;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create durations
        $duration4Years = Duration::firstOrCreate(['length' => 4]);
        $duration3Years = Duration::firstOrCreate(['length' => 3]);
        $duration2Years = Duration::firstOrCreate(['length' => 2]);
        $duration5Years = Duration::firstOrCreate(['length' => 5]);

        // Create departments
        $scienceDept = Department::firstOrCreate(['department_name' => 'Department of Science']);
        $engineeringDept = Department::firstOrCreate(['department_name' => 'Department of Engineering']);
        $businessDept = Department::firstOrCreate(['department_name' => 'Department of Business']);
        $humanitiesDept = Department::firstOrCreate(['department_name' => 'Department of Humanities']);

        // Create majors
        Major::firstOrCreate(['major_name' => 'Computer Science', 'department_id' => $scienceDept->id]);
        Major::firstOrCreate(['major_name' => 'Physics', 'department_id' => $scienceDept->id]);
        Major::firstOrCreate(['major_name' => 'Mechanical Engineering', 'department_id' => $engineeringDept->id]);
        Major::firstOrCreate(['major_name' => 'Electrical Engineering', 'department_id' => $engineeringDept->id]);
        Major::firstOrCreate(['major_name' => 'Business Administration', 'department_id' => $businessDept->id]);
        Major::firstOrCreate(['major_name' => 'English Literature', 'department_id' => $humanitiesDept->id]);

        // Create degrees
        $bsc = Degree::firstOrCreate([
            'degree_name' => 'Bachelor of Science (BSc)',
            'duration_id' => $duration4Years->id,
            'level' => 'undergraduate'
        ]);

        $ba = Degree::firstOrCreate([
            'degree_name' => 'Bachelor of Arts (BA)',
            'duration_id' => $duration3Years->id,
            'level' => 'undergraduate'
        ]);

        $beng = Degree::firstOrCreate([
            'degree_name' => 'Bachelor of Engineering (BEng)',
            'duration_id' => $duration4Years->id,
            'level' => 'undergraduate'
        ]);

        $mba = Degree::firstOrCreate([
            'degree_name' => 'Master of Business Administration (MBA)',
            'duration_id' => $duration2Years->id,
            'level' => 'masters'
        ]);

        $msc = Degree::firstOrCreate([
            'degree_name' => 'Master of Science (MSc)',
            'duration_id' => $duration2Years->id,
            'level' => 'masters'
        ]);

        $meng = Degree::firstOrCreate([
            'degree_name' => 'Master of Engineering (MEng)',
            'duration_id' => $duration2Years->id,
            'level' => 'masters'
        ]);

        $phdScience = Degree::firstOrCreate([
            'degree_name' => 'PhD in Sciences',
            'duration_id' => $duration5Years->id,
            'level' => 'doctoral'
        ]);

        $phdHumanities = Degree::firstOrCreate([
            'degree_name' => 'PhD in Humanities',
            'duration_id' => $duration5Years->id,
            'level' => 'doctoral'
        ]);

        $professionalDoctorate = Degree::firstOrCreate([
            'degree_name' => 'Professional Doctorates',
            'duration_id' => $duration4Years->id,
            'level' => 'doctoral'
        ]);

        // Attach majors to degrees
        $bsc->majors()->sync([1, 2]); // Computer Science, Physics
        $ba->majors()->sync([6]); // English Literature
        $beng->majors()->sync([3, 4]); // Mechanical, Electrical Engineering
        $mba->majors()->sync([5]); // Business Administration
        $msc->majors()->sync([1, 2]); // Computer Science, Physics
        $meng->majors()->sync([3, 4]); // Mechanical, Electrical Engineering
        $phdScience->majors()->sync([1, 2]); // Computer Science, Physics
        $phdHumanities->majors()->sync([6]); // English Literature
        $professionalDoctorate->majors()->sync([5]); // Business Administration

        // Create roles
        $adminRole = Role::firstOrCreate(
            ['name' => 'admin'],
            [
                'description' => 'Administrator with full access',
                'permissions' => ['manage_users', 'manage_roles', 'manage_content', 'view_reports', 'manage_settings']
            ]
        );

        $teacherRole = Role::firstOrCreate(
            ['name' => 'teacher'],
            [
                'description' => 'Teacher with content management access',
                'permissions' => ['manage_content', 'view_students', 'grade_assignments']
            ]
        );

        $studentRole = Role::firstOrCreate(
            ['name' => 'student'],
            [
                'description' => 'Student with basic access',
                'permissions' => ['view_content', 'submit_assignments', 'view_grades']
            ]
        );

        // Create test users with roles
        $admin = User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'email_verified_at' => now(),
            ]
        );
        $admin->roles()->sync([$adminRole->id]);

        $student = User::firstOrCreate(
            ['email' => 'student@example.com'],
            [
                'name' => 'Student User',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );
        $student->roles()->sync([$studentRole->id]);

        $teacher = User::firstOrCreate(
            ['email' => 'teacher@example.com'],
            [
                'name' => 'Teacher User',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );
        $teacher->roles()->sync([$teacherRole->id]);
    }
}
