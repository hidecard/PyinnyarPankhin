@extends('admin.layout')

@section('title', 'System Settings')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="settings-container">
                <div class="settings-tabs">
                    <button class="tab-btn active mb-3" data-tab="university-info" style="color: white; background-color: #FF7300; border: none; padding: 8px; border-radius: 10px;">
                        <i class="fas fa-university me-2"></i>University Info
                    </button>
                    <button class="tab-btn" data-tab="user-management" style="color: white; background-color: #FF7300; border: none; padding: 8px; border-radius: 10px;">
                        <i class="fas fa-users me-2"></i>User Management
                    </button>
                    <button class="tab-btn" data-tab="academic-settings"  style="color: white; background-color: #FF7300; border: none; padding: 8px; border-radius: 10px;">
                        <i class="fas fa-graduation-cap me-2"></i>Academic
                    </button>
                    <button class="tab-btn" data-tab="student-settings"  style="color: white; background-color: #FF7300; border: none; padding: 8px; border-radius: 10px;">
                        <i class="fas fa-user-graduate me-2"></i>Students
                    </button>
                    <button class="tab-btn" data-tab="faculty-settings"  style="color: white; background-color: #FF7300; border: none; padding: 8px; border-radius: 10px;">
                        <i class="fas fa-chalkboard-teacher me-2"></i>Faculty
                    </button>
                    <button class="tab-btn" data-tab="finance-settings"  style="color: white; background-color: #FF7300; border: none; padding: 8px; border-radius: 10px;">
                        <i class="fas fa-money-bill-wave me-2"></i>Finance
                    </button>
                    <button class="tab-btn" data-tab="system-settings"  style="color: white; background-color: #FF7300; border: none; padding: 8px; border-radius: 10px;">
                        <i class="fas fa-desktop me-2"></i>System
                    </button>
                    <button class="tab-btn" data-tab="security-settings"  style="color: white; background-color: #FF7300; border: none; padding: 8px; border-radius: 10px;">
                        <i class="fas fa-shield-alt me-2"></i>Security
                    </button>
                </div>

                <div class="settings-content">
                    <!-- University Information Settings -->
                    <div class="tab-pane active mt-3" id="university-info">
                        <h3 style="color: #6C3428;"><i class="fas fa-university me-2"></i>University Information</h3>
                        <form>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label" style="color: #6C3428;">University Name</label>
                                    <input type="text" style="color: #6C3428;" class="form-control" value="Pyinnyar Pankhin University">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" style="color: #6C3428;">University Motto</label>
                                    <input type="text" style="color: #6C3428;" class="form-control" value="Knowledge, Wisdom, Excellence">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" style="color: #6C3428;">University Logo</label>
                                <input type="file" class="form-control" style="color: #6C3428;">
                                <small style="color: #6C3428;">Recommended size: 300x100 pixels</small>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label" style="color: #6C3428;">Phone Number</label>
                                    <input type="text" style="color: #6C3428;" class="form-control" value="+95 123456789">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" style="color: #6C3428;">Email Address</label>
                                    <input type="email" style="color: #6C3428;" class="form-control" value="info@ppu.edu.mm">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" style="color: #6C3428;">Website</label>
                                    <input type="url" style="color: #6C3428;" class="form-control" value="https://www.ppu.edu.mm">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" style="color: #6C3428;">Address</label>
                                <textarea class="form-control" style="color: #6C3428;" rows="2">123 University Avenue, Yangon, Myanmar</textarea>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label" style="color: #6C3428;">Academic Year Start</label>
                                    <input type="date" class="form-control" style="color: #6C3428;" value="2023-06-01">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" style="color: #6C3428;">Academic Year End</label>
                                    <input type="date" style="color: #6C3428;" class="form-control" value="2024-03-31">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" style="color: #6C3428;">Current Semester</label>
                                    <select class="form-select" style="color: #6C3428;">
                                        <option>Semester 1</option>
                                        <option selected>Semester 2</option>
                                        <option>Summer Semester</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" style="color: white; background-color: #FF7300; border: none; padding: 8px; border-radius: 10px;">Save Changes</button>
                        </form>
                    </div>

                    <!-- User Management Settings -->
                    <div class="tab-pane mt-3" id="user-management">
                        <h3 style="color: #6C3428;"><i class="fas fa-users me-2"></i>User Management</h3>

                        <div class="card mb-4">
                            <div class="card-header">
                                <h4 style="color: #6C3428;">Roles & Permissions</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="color: #6C3428;">Role</th>
                                                <th style="color: #6C3428;">Dashboard Access</th>
                                                <th style="color: #6C3428;">Student Records</th>
                                                <th style="color: #6C3428;">Academic Settings</th>
                                                <th style="color: #6C3428;">Financial Access</th>
                                                <th style="color: #6C3428;">System Settings</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="color: #6C3428;">Administrator</td>
                                                <td><input type="checkbox" checked disabled></td>
                                                <td><input type="checkbox" checked disabled></td>
                                                <td><input type="checkbox" checked disabled></td>
                                                <td><input type="checkbox" checked disabled></td>
                                                <td><input type="checkbox" checked disabled></td>
                                            </tr>
                                            <tr>
                                                <td style="color: #6C3428;">Faculty</td>
                                                <td><input type="checkbox" checked></td>
                                                <td><input type="checkbox" checked></td>
                                                <td><input type="checkbox"></td>
                                                <td><input type="checkbox"></td>
                                                <td><input type="checkbox"></td>
                                            </tr>
                                            <tr>
                                                <td style="color: #6C3428;">Student</td>
                                                <td><input type="checkbox" checked></td>
                                                <td><input type="checkbox"></td>
                                                <td><input type="checkbox"></td>
                                                <td><input type="checkbox"></td>
                                                <td><input type="checkbox"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h4 style="color: #6C3428;">Password Policy</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Minimum Password Length</label>
                                            <input type="number" class="form-control" value="8">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Password Complexity</label>
                                            <select class="form-select">
                                                <option>Low (Letters only)</option>
                                                <option selected>Medium (Letters + Numbers)</option>
                                                <option>High (Letters, Numbers, Special Characters)</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Password Expiry (days)</label>
                                            <input type="number" class="form-control" value="90">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 style="color: #6C3428;">Authentication Methods</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="twoFactorAuth" checked>
                                            <label class="form-check-label" for="twoFactorAuth" style="color: #6C3428;">Two-Factor Authentication</label>
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="ssoAuth">
                                            <label class="form-check-label" for="ssoAuth" style="color: #6C3428;">Single Sign-On (SSO)</label>
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="ldapAuth">
                                            <label class="form-check-label" for="ldapAuth" style="color: #6C3428;">LDAP Integration</label>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="googleAuth" checked>
                                            <label class="form-check-label" for="googleAuth" style="color: #6C3428;">Google Authentication</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" style="color: white; background-color: #FF7300; border: none; padding: 8px; border-radius: 10px;">Save User Settings</button>
                    </div>

                    <!-- Academic Settings -->
                    <div class="tab-pane mt-3" id="academic-settings">
                        <h3 style="color: #6C3428;"><i class="fas fa-graduation-cap me-2"></i>Academic Settings</h3>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h4 style="color: #6C3428;">Grading System</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Grading Scale</label>
                                            <select class="form-select" style="color: #6C3428;">
                                                <option selected>Letter Grades (A-F)</option>
                                                <option>Percentage Scale</option>
                                                <option>GPA Scale (4.0)</option>
                                                <option>Custom Scale</option>
                                            </select>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="color: #6C3428;">Grade</th>
                                                        <th style="color: #6C3428;">Minimum %</th>
                                                        <th style="color: #6C3428;">Points</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td  style="color: #6C3428;">A</td>
                                                        <td><input type="number" class="form-control" value="90"></td>
                                                        <td><input type="number" class="form-control" value="4.0"></td>
                                                    </tr>
                                                    <tr>
                                                        <td  style="color: #6C3428;">B</td>
                                                        <td><input type="number" class="form-control" value="80"></td>
                                                        <td><input type="number" class="form-control" value="3.0"></td>
                                                    </tr>
                                                    <tr>
                                                        <td  style="color: #6C3428;">C</td>
                                                        <td><input type="number" class="form-control" value="70"></td>
                                                        <td><input type="number" class="form-control" value="2.0"></td>
                                                    </tr>
                                                    <tr>
                                                        <td  style="color: #6C3428;">D</td>
                                                        <td><input type="number" class="form-control" value="60"></td>
                                                        <td><input type="number" class="form-control" value="1.0"></td>
                                                    </tr>
                                                    <tr>
                                                        <td  style="color: #6C3428;">F</td>
                                                        <td><input type="number" class="form-control" value="0"></td>
                                                        <td><input type="number" class="form-control" value="0.0"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h4 style="color: #6C3428;">Credit System</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label"  style="color: #6C3428;">Credit Hours per Course</label>
                                            <input type="number" class="form-control" value="3">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label"  style="color: #6C3428;">Full-time Student Minimum Credits</label>
                                            <input type="number" class="form-control" value="12">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Maximum Credits Allowed</label>
                                            <input type="number" class="form-control" value="18">
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h4 style="color: #6C3428;">Academic Calendar</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Semester Duration (weeks)</label>
                                            <input type="number" class="form-control" value="16">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Examination Period (weeks)</label>
                                            <input type="number" class="form-control" value="2">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Break Between Semesters (weeks)</label>
                                            <input type="number" class="form-control" value="4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" style="color:white; background-color: #FF7300;border: none;padding: 8px; border-radius: 10px;">Save Academic Settings</button>
                    </div>

                    <!-- Student Settings -->
                    <div class="tab-pane mt-3" id="student-settings">
                        <h3 style="color: #6C3428;"><i class="fas fa-user-graduate me-2"></i>Student Management Settings</h3>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h4 style="color: #6C3428;">Admission Settings</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Admission Intake Periods</label>
                                            <select class="form-select" multiple  style="color: #6C3428;">
                                                <option selected>January Intake</option>
                                                <option selected>June Intake</option>
                                                <option>October Intake</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Application Fee</label>
                                            <div class="input-group">
                                                <span class="input-group-text" style="color: #6C3428;">$</span>
                                                <input type="number" class="form-control" value="20">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Minimum Admission Age</label>
                                            <input type="number" class="form-control" value="16">
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h4 style="color: #6C3428;">Student ID Generation</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">ID Format</label>
                                            <input type="text" class="form-control" value="PPU-{year}-{dept}-{seq}">
                                            <small style="color: #6C3428;">Available placeholders: {year}, {dept}, {seq}, {random}</small>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Starting Sequence Number</label>
                                            <input type="number" class="form-control" value="1001">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h4 style="color: #6C3428;">Attendance Policy</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Minimum Attendance %</label>
                                            <input type="number" class="form-control" value="75">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Attendance Tracking Method</label>
                                            <select class="form-select" style="color: #6C3428;">
                                                <option selected>Manual Entry by Faculty</option>
                                                <option>Biometric System</option>
                                                <option>QR Code Scanning</option>
                                                <option>Mobile App Check-in</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h4 style="color: #6C3428;">Graduation Requirements</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Minimum GPA for Graduation</label>
                                            <input type="number" step="0.1" class="form-control" value="2.0">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Required Community Service Hours</label>
                                            <input type="number" class="form-control" value="40">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Thesis Requirement</label>
                                            <select class="form-select" style="color: #6C3428;">
                                                <option selected>Required for all programs</option>
                                                <option>Required for graduate programs only</option>
                                                <option>Optional</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" style="color: white; background-color: #FF7300; border: none; padding: 8px; border-radius: 10px;">Save Student Settings</button>
                    </div>

                    <!-- Faculty Settings -->
                    <div class="tab-pane mt-3" id="faculty-settings">
                        <h3 style="color: #6C3428;"><i class="fas fa-chalkboard-teacher me-2"></i>Faculty & Staff Settings</h3>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h4 style="color: #6C3428;">Faculty Positions</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Faculty Ranks</label>
                                            <textarea class="form-control" rows="4" style="color: #6C3428;">Lecturer
Assistant Professor
Associate Professor
Professor
Emeritus Professor</textarea>
                                            <small style="color: #6C3428;">Enter one rank per line</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h4 style="color: #6C3428;">Teaching Load</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Standard Teaching Load (hours/week)</label>
                                            <input type="number" class="form-control" value="12">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Maximum Teaching Load</label>
                                            <input type="number" class="form-control" value="18">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h4 style="color: #6C3428;">Leave Management</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Annual Leave Days</label>
                                            <input type="number" class="form-control" value="30">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Sick Leave Days</label>
                                            <input type="number" class="form-control" value="15">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Maternity/Paternity Leave</label>
                                            <input type="number" class="form-control" value="90">
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <h4 style="color: #6C3428;">Evaluation Criteria</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Evaluation Frequency</label>
                                            <select class="form-select" style="color: #6C3428;">
                                                <option>Every Semester</option>
                                                <option selected>Annually</option>
                                                <option>Every 2 Years</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Evaluation Components</label>
                                            <select class="form-select" multiple style="color: #6C3428;">
                                                <option selected>Teaching Quality</option>
                                                <option selected>Research Output</option>
                                                <option selected>Student Feedback</option>
                                                <option selected>Committee Participation</option>
                                                <option>Community Service</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" style="color: #FFFF; background-color: #FF7300; border: none;padding: 8px;border-radius: 10px;">Save Faculty Settings</button>
                    </div>

                    <!-- Finance Settings -->
                    <div class="tab-pane mt-3" id="finance-settings">
                        <h3 style="color: #6C3428;"><i class="fas fa-money-bill-wave me-2"></i>Financial Settings</h3>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h4 style="color: #6C3428;">Tuition Fees</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Base Tuition per Credit</label>
                                            <div class="input-group">
                                                <span class="input-group-text" style="color: #6C3428;">$</span>
                                                <input type="number" class="form-control" value="150">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Science Program Surcharge (%)</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" value="10">
                                                <span class="input-group-text" style="color: #6C3428;">%</span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Graduate Program Surcharge (%)</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" value="20">
                                                <span class="input-group-text" style="color: #6C3428;">%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h4 style="color: #6C3428;">Payment Options</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="installmentPayments" checked>
                                            <label class="form-check-label" for="installmentPayments" style="color: #6C3428;">Allow Installment Payments</label>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Maximum Installments</label>
                                            <input type="number" class="form-control" value="3">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Late Payment Fee (%)</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" value="5">
                                                <span class="input-group-text" style="color: #6C3428;">%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h4 style="color: #6C3428;">Payment Gateways</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="creditCardPayments" checked>
                                            <label class="form-check-label" for="creditCardPayments" style="color: #6C3428;">Credit/Debit Cards</label>
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="bankTransfer" checked>
                                            <label class="form-check-label" for="bankTransfer" style="color: #6C3428;">Bank Transfer</label>
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="mobilePayments">
                                            <label class="form-check-label" for="mobilePayments" style="color: #6C3428;">Mobile Payments</label>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="cashPayments" checked>
                                            <label class="form-check-label" for="cashPayments" style="color: #6C3428;">Cash Payments</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <h4 style="color: #6C3428;">Scholarships & Discounts</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Merit Scholarship Threshold (GPA)</label>
                                            <input type="number" step="0.1" class="form-control" value="3.5">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Merit Scholarship Discount (%)</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" value="25">
                                                <span class="input-group-text" style="color: #6C3428;">%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" style="color: white; background-color: #FF7300; border: none; padding: 8px; border-radius: 10px;">Save Finance Settings</button>
                    </div>

                    <!-- System Settings -->
                    <div class="tab-pane mt-3" id="system-settings">
                        <h3 style="color: #6C3428;"><i class="fas fa-desktop me-2"></i>System Settings</h3>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h4 style="color: #6C3428;">General Settings</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">System Language</label>
                                            <select class="form-select" style="color: #6C3428;">
                                                <option selected>English</option>
                                                <option>Myanmar</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Timezone</label>
                                            <select class="form-select" style="color: #6C3428;">
                                                <option selected>Asia/Yangon</option>
                                                <option>UTC</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Date Format</label>
                                            <select class="form-select" style="color: #6C3428;">
                                                <option selected>DD/MM/YYYY</option>
                                                <option>MM/DD/YYYY</option>
                                                <option>YYYY-MM-DD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h4 style="color: #6C3428;">Maintenance Mode</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="maintenanceMode">
                                            <label class="form-check-label" for="maintenanceMode" style="color: #6C3428;">Enable Maintenance Mode</label>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Maintenance Message</label>
                                            <textarea class="form-control" rows="3" style="color: #6C3428;" placeholder="System is under maintenance. Please check back later."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" style="color: white; background-color: #FF7300; border: none; padding: 8px; border-radius: 10px;">Save System Settings</button>
                    </div>

                    <!-- Security Settings -->
                    <div class="tab-pane mt-3" id="security-settings">
                        <h3 style="color: #6C3428;"><i class="fas fa-shield-alt me-2"></i>Security Settings</h3>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h4 style="color: #6C3428;">Login Security</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Maximum Login Attempts</label>
                                            <input type="number" class="form-control" value="5">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Lockout Duration (minutes)</label>
                                            <input type="number" class="form-control" value="30">
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="forcePasswordChange" checked>
                                            <label class="form-check-label" for="forcePasswordChange" style="color: #6C3428;">Force Password Change on First Login</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h4 style="color: #6C3428;">Data Encryption</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="encryptData" checked>
                                            <label class="form-check-label" for="encryptData" style="color: #6C3428;">Encrypt Sensitive Data</label>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color: #6C3428;">Encryption Algorithm</label>
                                            <select class="form-select" style="color: #6C3428;">
                                                <option selected>AES-256</option>
                                                <option>RSA</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" style="color: white; background-color: #FF7300; border: none; padding: 8px; border-radius: 10px;">Save Security Settings</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Tab switching functionality
        document.addEventListener('DOMContentLoaded', function() {
            const tabButtons = document.querySelectorAll('.tab-btn');
            const tabPanes = document.querySelectorAll('.tab-pane');

            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons and panes
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    tabPanes.forEach(pane => pane.classList.remove('active'));

                    // Add active class to clicked button and corresponding pane
                    this.classList.add('active');
                    const tabId = this.getAttribute('data-tab');
                    document.getElementById(tabId).classList.add('active');
                });
            });
        });
    </script>
@endsection
