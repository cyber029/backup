<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Welcome to the Administrator Dashboard</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Administrator Information</h4>
                        </div>
                        <div class="card-body">
                            <p>Welcome, [Admin Name]! Here's some information about your profile:</p>
                            <ul>
                                <li><strong>Admin ID:</strong> [Your Admin ID]</li>
                                <li><strong>Email:</strong> [Your Email]</li>
                                <li><strong>Role:</strong> Administrator</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Manage Students</h4>
                        </div>
                        <div class="card-body">
                            <!-- Student Management Tools -->
                            <div class="mb-3">
                                <button class="btn btn-primary">Add Student</button>
                                <button class="btn btn-info">Edit Student</button>
                                <button class="btn btn-danger">Delete Student</button>
                            </div>
                            <!-- Student Listing -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Student ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Program</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Student data will be dynamically generated here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Manage Courses</h4>
                        </div>
                        <div class="card-body">
                            <!-- Course Management Tools -->
                            <div class="mb-3">
                                <button class="btn btn-primary">Add Course</button>
                                <button class="btn btn-info">Edit Course</button>
                                <button class="btn btn-danger">Delete Course</button>
                            </div>
                            <!-- Course Listing -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Course Code</th>
                                        <th>Course Name</th>
                                        <th>Instructor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Course data will be dynamically generated here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class= "card-header">
                            <h4>Calendar</h4>
                        </div>
                        <div class="card-body">
                            <!-- Add a calendar widget or content for administrative tasks -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>