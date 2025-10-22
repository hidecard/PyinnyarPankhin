<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
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
