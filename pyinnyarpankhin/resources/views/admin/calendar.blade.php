<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyinnyar Pankhin Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin-style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM8z4+2e5c7e5a5e5a5e5a5e5a5e5a5e5a5e
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.css" rel="stylesheet">
</head>
<body>
    <!-- Sidebar start-->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h3><i class="fas fa-university me-2"></i>Pyinnyar Pankhin</h3>
            <small>Admin Dashboard</small>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a href="{{ route('admin') }}">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="has-submenu">
                <a href="">
                    <i class="fas fa-graduation-cap"></i>
                    <span>Academic</span>
                    <i class="fas fa-angle-down ms-auto"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('admin.academic') }}" id="navDegree">Degree Programs</a></li>
                    <li><a href="{{ route('admin.academic') }}" id="navMajor">Majors</a></li>
                    <li><a href="{{ route('admin.academic') }}" id="navDepartment">Departments</a></li>
                    <li><a href="{{ route('admin.academic') }}" id="navFaculty">Faculties</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('admin.students') }}">
                    <i class="fas fa-users"></i>
                    <span>Students</span>
                </a>
            </li>
            <li class="has-submenu">
                <a href="{{ route('admin.calendar') }}" class="active">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Academic Calendar</span>
                    <i class="fas fa-angle-down ms-auto"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('admin.calendar') }}">Events</a></li>
                    <li><a href="{{ route('admin.calendar') }}">Holidays</a></li>
                    <li><a href="{{ route('admin.calendar') }}">Exam Schedule</a></li>
                    <li><a href="{{ route('admin.calendar') }}">Class Schedules</a></li>
                </ul>
            </li>
            <li class="has-submenu">
                <a href="{{ route('admin.reports') }}">
                    <i class="fas fa-file-alt"></i>
                    <span>Reports</span>
                    <i class="fas fa-angle-down ms-auto"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('admin.reports') }}">Enrollment Reports</a></li>
                    <li><a href="{{ route('admin.reports') }}">Grade Reports</a></li>
                    <li><a href="{{ route('admin.reports') }}">Faculty Workload</a></li>
                    <li><a href="{{ route('admin.reports') }}">Financial Reports</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('admin.settings') }}">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Sidebar end -->

    <!-- Main Content -->
    <div class="main-content" id="main-content">
        <div class="container-fluid">
            <div class="header">
                <button id="sidebar-toggle" class="btn btn-primary d-md-none">
                    <i class="fas fa-bars"></i>
                </button>
                <h1 style="color: #FF7300;"><i class="fas fa-calendar-alt me-2"></i>Academic Calendar</h1>
                <div class="user-info">
                    <span style="color: #FF7300;">{{ Auth::user()->name ?? 'Admin User' }}</span>
                </div>
            </div>
            <div class="calendar-container">
                <div class="calendar-header">
                    <div class="calendar-nav">
                        <button id="prev-month" aria-label="Previous month"><i class="fas fa-chevron-left"></i></button>
                        <h3 class="calendar-title" id="calendar-title"></h3>
                        <button id="next-month" aria-label="Next month"><i class="fas fa-chevron-right"></i></button>
                    </div>
                    <div class="calendar-view-options">
                        <button class="active" data-view="month">Month</button>
                        <button data-view="week">Week</button>
                        <button data-view="day">Day</button>
                    </div>
                </div>
                <div class="calendar-view" id="month-view">
                    <div class="calendar-grid" id="calendar-days-header">
                        <div class="calendar-day-header">Sun</div>
                        <div class="calendar-day-header">Mon</div>
                        <div class="calendar-day-header">Tue</div>
                        <div class="calendar-day-header">Wed</div>
                        <div class="calendar-day-header">Thu</div>
                        <div class="calendar-day-header">Fri</div>
                        <div class="calendar-day-header">Sat</div>
                    </div>
                    <div class="calendar-grid" id="calendar-days">
                        <!-- Calendar days populated by JS -->
                    </div>
                </div>
                <div class="calendar-view d-none" id="week-view">
                    <div class="text-center py-4">
                        <h4 style="color: #FF7300;">Week View</h4>
                        <p style="color: #6C3428;">Week view content will be displayed here</p>
                    </div>
                </div>
                <div class="calendar-view d-none" id="day-view">
                    <div class="text-center py-4">
                        <h4 style="color: #FF7300;">Day View</h4>
                        <p style="color: #6C3428;">Day view content will be displayed here</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title" style="color: #6C3428;"><i class="fas fa-plus-circle me-2"></i>Add New Event</h5>
                        </div>
                        <div class="card-body">
                            <form id="add-event-form">
                                <div class="form-group mb-3">
                                    <label for="event-title" class="form-label" style="color: #6C3428;">Event Title</label>
                                    <input type="text" class="form-control" id="event-title" required style="color: #6C3428;">
                                    <div class="invalid-feedback">Please enter an event title.</div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="event-date" class="form-label" style="color: #6C3428;">Date</label>
                                    <input type="date" class="form-control" id="event-date" required style="color: #6C3428;">
                                    <div class="invalid-feedback">Please select a valid date.</div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="event-type" class="form-label" style="color: #6C3428;">Event Type</label>
                                    <select class="form-control" id="event-type" required style="color: #6C3428;">
                                        <option value="general">General Event</option>
                                        <option value="holiday">Holiday</option>
                                        <option value="exam">Exam</option>
                                        <option value="class">Class Schedule</option>
                                    </select>
                                    <div class="invalid-feedback">Please select an event type.</div>
                                </div>
                                <button type="submit" class="btn btn-primary" style="background-color: #FF7300; border-color: #FF7300;">Add Event</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title" style="color: #6C3428;"><i class="fas fa-list me-2"></i>Upcoming Events</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group" id="upcoming-events">
                                <!-- Populated by JS -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Toggle sidebar submenus
            $('.has-submenu > a').on('click', function(e) {
                e.preventDefault();

                // Close other open submenus
                $(this).parent().siblings().removeClass('active').find('.sidebar-submenu').slideUp();

                // Toggle current submenu
                $(this).parent().toggleClass('active');
                $(this).next('.sidebar-submenu').slideToggle();
            });

            // Mobile sidebar toggle
            $('#sidebar-toggle').on('click', function() {
                $('#sidebar').toggleClass('active');
                $('#main-content').toggleClass('active');
            });

            // Calendar functionality
            let currentDate = new Date('2025-06-02');
            let currentMonth = currentDate.getMonth();
            let currentYear = currentDate.getFullYear();

            const calendarTitle = $('#calendar-title');
            const calendarDays = $('#calendar-days');
            const prevMonthBtn = $('#prev-month');
            const nextMonthBtn = $('#next-month');
            const viewButtons = $('.calendar-view-options button');

            // Sample events data
            const events = [
                { title: 'Semester Begins', date: new Date(currentYear, currentMonth, 1), type: 'general' },
                { title: 'Faculty Meeting', date: new Date(currentYear, currentMonth, 5), type: 'general' },
                { title: 'Midterm Exams', date: new Date(currentYear, currentMonth, 15), type: 'exam' },
                { title: 'Midterm Exams', date: new Date(currentYear, currentMonth, 16), type: 'exam' },
                { title: 'Midterm Exams', date: new Date(currentYear, currentMonth, 17), type: 'exam' },
                { title: 'University Holiday', date: new Date(currentYear, currentMonth, 25), type: 'holiday' },
                { title: 'Workshop Day', date: new Date(currentYear, currentMonth, 28), type: 'general' }
            ];

            // Persist events to localStorage
            function saveEvents() {
                localStorage.setItem('calendarEvents', JSON.stringify(events));
            }

            // Load events from localStorage
            function loadEvents() {
                const saved = localStorage.getItem('calendarEvents');
                if (saved) {
                    const parsed = JSON.parse(saved);
                    parsed.forEach(event => {
                        event.date = new Date(event.date);
                        events.push(event);
                    });
                }
            }

            // Get month name
            function getMonthName(monthIndex) {
                const months = [
                    'January', 'February', 'March', 'April', 'May', 'June',
                    'July', 'August', 'September', 'October', 'November', 'December'
                ];
                return months[monthIndex];
            }

            // Render calendar
            function renderCalendar() {
                calendarTitle.text(`${getMonthName(currentMonth)} ${currentYear}`);
                calendarDays.empty();

                const firstDay = new Date(currentYear, currentMonth, 1).getDay();
                const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
                const prevMonthDays = new Date(currentYear, currentMonth, 0).getDate();

                // Add empty cells for previous month
                for (let i = 0; i < firstDay; i++) {
                    const dayElement = $('<div>')
                        .addClass('calendar-day text-muted')
                        .html(`<div class="day-number">${prevMonthDays - firstDay + i + 1}</div>`);
                    calendarDays.append(dayElement);
                }

                // Add days of current month
                for (let i = 1; i <= daysInMonth; i++) {
                    const dayElement = $('<div>').addClass('calendar-day');
                    const dayDate = new Date(currentYear, currentMonth, i);
                    if (dayDate.toDateString() === new Date('2025-06-02').toDateString()) {
                        dayElement.addClass('border-primary');
                    }
                    dayElement.attr('tabindex', '0');
                    dayElement.attr('aria-label', `Day ${i} of ${getMonthName(currentMonth)} ${currentYear}`);
                    dayElement.html(`<div class="day-number">${i}</div>`);

                    // Add events for this day
                    const dayEvents = events.filter(event =>
                        event.date.getDate() === i &&
                        event.date.getMonth() === currentMonth &&
                        event.date.getFullYear() === currentYear
                    );
                    dayEvents.forEach(event => {
                        const eventElement = $('<div>')
                            .addClass(`event-item ${event.type}`)
                            .text(event.title);
                        dayElement.append(eventElement);
                    });

                    // Accessibility events
                    dayElement.on('click', () => {
                        alert(`Selected: ${i} ${getMonthName(currentMonth)} ${currentYear}`);
                    });
                    dayElement.on('keypress', (e) => {
                        if (e.key === 'Enter') {
                            alert(`Selected: ${i} ${getMonthName(currentMonth)} ${currentYear}`);
                        }
                    });

                    calendarDays.append(dayElement);
                }

                // Add empty cells for next month if needed
                const totalCells = firstDay + daysInMonth;
                if (totalCells % 7 !== 0) {
                    const remainingCells = 7 - (totalCells % 7);
                    for (let i = 1; i <= remainingCells; i++) {
                        const dayElement = $('<div>')
                            .addClass('calendar-day text-muted')
                            .html(`<div class="day-number">${i}</div>`);
                        calendarDays.append(dayElement);
                    }
                }
            }

            // Update upcoming events
            function updateUpcomingEvents() {
                const upcomingList = $('#upcoming-events');
                upcomingList.empty();
                const today = new Date('2025-06-02');
                const upcoming = events
                    .filter(event => event.date >= today)
                    .sort((a, b) => a.date - b.date)
                    .slice(0, 5);
                upcoming.forEach(event => {
                    const li = $('<li>')
                        .addClass('list-group-item d-flex justify-content-between align-items-center')
                        .html(`
                            ${event.title}
                            <span class="badge bg-${event.type === 'holiday' ? 'success' : event.type === 'exam' ? 'danger' : 'primary'} rounded-pill">
                                ${event.date.toLocaleDateString()}
                            </span>
                        `);
                    upcomingList.append(li);
                });
            }

            // Previous month
            prevMonthBtn.on('click', function() {
                currentMonth--;
                if (currentMonth < 0) {
                    currentMonth = 11;
                    currentYear--;
                }
                renderCalendar();
            });

            // Next month
            nextMonthBtn.on('click', function() {
                currentMonth++;
                if (currentMonth > 11) {
                    currentMonth = 0;
                    currentYear++;
                }
                renderCalendar();
            });

            // View buttons
            viewButtons.on('click', function() {
                viewButtons.removeClass('active');
                $(this).addClass('active');
                $('.calendar-view').addClass('d-none');
                const viewId = `${$(this).data('view')}-view`;
                $(`#${viewId}`).removeClass('d-none');
            });

            // Add event form
            $('#add-event-form').on('submit', function(e) {
                e.preventDefault();
                const title = $('#event-title');
                const dateInput = $('#event-date');
                const type = $('#event-type');

                if (!title.val() || !dateInput.val()) {
                    title.addClass('is-invalid');
                    dateInput.addClass('is-invalid');
                    return;
                }

                const date = new Date(dateInput.val());
                const today = new Date('2025-06-02');
                if (date < today && date.toDateString() !== today.toDateString()) {
                    dateInput.addClass('is-invalid');
                    dateInput.next('.invalid-feedback').text('Date cannot be in the past!');
                    return;
                }

                title.removeClass('is-invalid');
                dateInput.removeClass('is-invalid');

                events.push({ title: title.val(), date, type: type.val() });
                saveEvents();
                renderCalendar();
                updateUpcomingEvents();
                $(this)[0].reset();
                alert('Event added successfully!');
            });

            // Load and render
            loadEvents();
            renderCalendar();
            updateUpcomingEvents();
        });
    </script>
</body>
</html>
