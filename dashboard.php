<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-hrmPO4HCmSpvwyuLWHX5z5xXkz8TjJU5pXcFpFQwqfOeG8Bl/5+PtcO87NNb5O4" crossorigin="anonymous">
    <link href='https://unpkg.com/@fullcalendar/core@5.10.1/main.min.css' rel='stylesheet' />
    <link rel="stylesheet" href="dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link re="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src ="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Stay organized with our user-friendly Calendar featuring events, reminders, and a customizable interface. Built with HTML, CSS, and JavaScript. Start scheduling today!"
    />
    <meta
      name="keywords"
      content="calendar, events, reminders, javascript, html, css, open source coding"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>
<body>
    <div class="progress"></div>
    <div class="wrapper">
        <aside id ="sidebar">
        <div class="top">
            <div class="logo">
                <img src="/system/images/laundry_logo.png" alt="Laundry logo">
                <span>Azia Skye</span>
            </div>
            <i class='bx bx-menu' id="btnMenu"></i>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a href="laundry_system/dashboard/dashboard.php" class="sidebar-link">
                    <i class="bx bxs-grid-alt"></i>
                    <span class="nav-item">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>

            <li>
                <a href="laundry_system/my_profile/profile.html" class="sidebar-link">
                    <i class='bx bxs-user'></i>
                    <span class="nav-item">Profile</span>
                </a>
                <span class="tooltip">Profile</span>
            </li>

            <li>
                <a href="/system/users/users.html">
                    <i class='bx bxs-group'></i>
                    <span class="nav-item">Users</span>
                </a>
                <span class="tooltip">Users</span>
            </li>

            
            <li class="sidebar-item">
                <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse"
                    data-bs-target="#records" aria-expanded="false" aria-controls="records">
                    <i class='bx bxs-folder-open'></i>
                    <span class="nav-item">Records</span>
                </a>

                <ul id="records" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Customer</a>
                    </li>

                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Service</a>
                    </li>

                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Category</a>
                    </li>
                </ul>
                <span class="tooltip">Records</span>
            </li>
            

            <li>
                <a href="/system/transaction/transaction.html">
                    <i class='bx bx-transfer-alt'></i>
                    <span class="nav-item">Transaction</span>
                </a>
                <span class="tooltip">Transaction</span>
            </li>

            <li>
                <a href="/system/sales report/report.html">
                    <i class='bx bx-line-chart'></i>
                    <span class="nav-item">Report</span>
                </a>
                <span class="tooltip">Report</span>
            </li>

            <li>
                <a href="/system/settings/settings.html">
                    <i class='bx bxs-cog'></i>
                    <span class="nav-item">Settings</span>
                </a>
                <span class="tooltip">Settings</span>
            </li>

            
            <li>
                <a href="/system/archive/archive.html">
                    <i class='bx bxs-archive-in'></i>
                    <span class="nav-item">Archived</span>
                </a>
                <span class="tooltip">Archived</span>
            </li>

            <li>
                <a href="logout.php">
                    <i class='bx bx-log-out'></i>
                    <span class="nav-item">Logout</span>
                </a>
                <span class="tooltip">Logout</span>
            </li>
        </ul>
        </aside>
    </div>

    <div class="main-content">
        <div class="cards-container">
            <h1>Dashboard</h1>
            <div class="cards">
                <div class="card">
                    <h3>Pick-up request</h3>
                    <p id="pickup-orders">0</p>
                </div>
                <div class="card">
                    <h3>Delivery request</h3>
                    <p id="pickup-orders">0</p>
                </div>
                <div class="card">
                    <h3>Rush request</h3>
                    <p id="pickup-orders">0</p>
                </div>
            </div>
        </div>

        <div class = "charts-container">
            <div class = "charts">
                <div class = "chart">
                    <h3>Orders In Day</h3>
                    <canvas id="daychart" width="230" height="235"></canvas>
                    <div id="chart_dialog" title="View Chart">
                    </div>
                        <?php
                        // Connect to database
                        $servername = "localhost";
                        $username = "root";
                        $password = "padayon143";
                        $dbname = "orders_graph";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $query = "SELECT SUM(amount) as total_amount FROM orders WHERE DATE(created) = CURDATE()";
                        $result = $conn->query($query);

                        // Fetch data from query
                        $row = $result->fetch_assoc();
                        $total_amount = $row['total_amount'];

                        // Close connection
                        $conn->close();
                        ?>

                        <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            const ctx = document.getElementById('daychart').getContext('2d');
                            const daychart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ['Today'],
                                    datasets: [{
                                        label: 'Today\'s Orders',
                                        data: [<?php echo $total_amount; ?>],
                                        backgroundColor: 'rgba(255, 99, 132, 1)',
                                        borderColor: 'rgba(255, 99, 132, 1)',
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        });
                        </script>
                    </div>  
              
     <!-------------------------------------ORDERS WEEK-=--------------------------------------->          
                <div class="chart">
                    <h3>Orders In Week</h3>
                    <canvas id="weekchart" width="290" height="270"></canvas>
                        <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "padayon143";
                            $dbname = "orders_graph";

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            // Retrieve data from database
                            $query = "SELECT DAYNAME(created) as day, SUM(amount) as total_amount
                                    FROM orders
                                    GROUP BY DAYNAME(created)
                                    ORDER BY MIN(created) ASC"; // Add ORDER BY clause to sort by date
                            $result = $conn->query($query);

                            $data = array();
                            $labels = array();
                            $amount = array();

                            while ($row = $result->fetch_assoc()) {
                                $labels[] = $row['day'];
                                $amount[] = $row['total_amount'];
                            }

                            $conn->close();
                            ?>

                            <script>
                            const labels = <?php echo json_encode($labels); ?>;
                            const data = {
                            labels: labels,
                            datasets: [{
                                label: 'Total Orders',
                                data: <?php echo json_encode($amount); ?>,
                                backgroundColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255, 99, 132, 1)',
                                ],
                                borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255, 99, 132, 1)',
                                ],
                                borderWidth: 1
                            }]
                            };

                            const config = {
                            type: 'doughnut',
                            data: data,
                            options: {
                                responsive: true,
                                plugins: {
                                legend: {
                                    position: 'top',
                                },
                                title: {
                                    display: true,
                                }
                                }
                            },
                            };

                            var weekchart = new Chart(
                            document.getElementById('weekchart'),
                            config
                            );
                            </script>
                         </div>
<!----------------------------------------ORDERS IN A MONTH---------------------------------->

            <div class="chart">
                <h3>Orders In Month</h3>
                <canvas id="monthchart" width="230" height="240"></canvas>
                
                <?php
                    // Connect to database
                    $servername = "localhost";
                    $username = "root";
                    $password = "padayon143";
                    $dbname = "orders_graph";

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $query = "SELECT MONTHNAME(created) as monthname, SUM(amount) as amount FROM orders GROUP BY monthname";
                    $result = $conn->query($query);

                    // Create arrays to store data
                    $month = array();
                    $amount = array();

                    // Fetch data from query
                    while ($row = $result->fetch_assoc()) {
                        $month[] = $row['monthname'];
                        $amount[] = $row['amount'];
                    }

                    // Close connection
                    $conn->close();
                    ?>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            const ctx = document.getElementById('monthchart').getContext('2d');
                            const daychart = new Chart(ctx, {
                                type: 'doughnut',
                                data: {
                                    labels: <?php echo json_encode($month); ?>,
                                    datasets: [{
                                        label: 'Month',
                                        data: <?php echo json_encode($amount); ?>,
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)',
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)',
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        });
                            </script> 
                        </div>

<!--------------------------------YEAR CHART----------------------------->
            <div class="chart">
                <h3>Orders In Year</h3>
                <canvas id="yearchart" width="230" height="230"></canvas>
                    <?php
                        // Connect to database
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "orders_graph";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                                        // Create table if it doesn't exist
                        $query = "CREATE TABLE IF NOT EXISTS orders (
                            id INT PRIMARY KEY AUTO_INCREMENT,
                            created YEAR,
                            amount DECIMAL(10, 2)
                        )";
                        $conn->query($query);
                                        // Query to get orders data by year
                        $query = "SELECT YEAR(created) as year, SUM(amount) as amount FROM orders GROUP BY year";
                        $result = $conn->query($query);

                        // Check if query was successful
                        if (!$result) {
                            die("Query failed: " . $conn->error);
                        }

                        // Create arrays to store data
                        $year = array();
                        $amount = array();

                        // Fetch data from query
                        while ($row = $result->fetch_assoc()) {
                            $year[] = $row['year'];
                            $amount[] = $row['amount'];
                        }
                                        ?>

                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                const labels = <?php echo json_encode($year); ?>;
                                const data = {
                                    labels: labels,
                                    datasets: [{
                                        label: 'Orders',
                                        data: <?php echo json_encode($amount); ?>,
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)',
                                            'rgba(255, 99, 132, 1)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)',
                                            'rgba(255, 99, 132, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                };

                                const config = {
                                    type: 'line',
                                    data: data,
                                    options: {
                                        responsive: true,
                                        plugins: {
                                            legend: {
                                                position: 'top',
                                            },
                                            title: {
                                                display: true,
                                            }
                                        }
                                    },
                                };

                                var yearchart = new Chart(
                                    document.getElementById('yearchart'),
                                    config
                                );
                            });
                        </script>
                   </div>
                </div><!--end of charts-->      
            </div>

 <!----------------------------Calendar---------------------------------------------------->
            <div class="container">
            <div class="left">
                <div class="calendar">
                <div class="month">
                    <i class="fas fa-angle-left prev"></i>
                    <div class="date">December 2015</div>
                    <i class="fas fa-angle-right next"></i>
                </div>
                <div class="weekdays">
                    <div>Sun</div>
                    <div>Mon</div>
                    <div>Tue</div>
                    <div>Wed</div>
                    <div>Thu</div>
                    <div>Fri</div>
                    <div>Sat</div>
                </div>
                <div class="days"></div>
                </div>
            </div>
            <div class="right">
                <div class="event-title">Events</div>
                <hr>
                <div class="events"></div>
            </div>

            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "laundry_db";

            // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $query = "SELECT request_id, laundry_service_option, request_datetime, service_request_datetime FROM service_request";
                $result = $conn->query($query);

                if (!$result) {
                    die("Query failed: " . $conn->error);
                }

                $events = array();

                while ($row = $result->fetch_assoc()) {
                    $events[] = array(
                    'title' => $row['laundry_service_option'],
                    'start' => $row['request_datetime'],
                    'end' => $row['service_request_datetime'],
                    );
                }

                // Close connection
                $conn->close();
                ?>

            <script>
                const calendar = document.querySelector(".calendar"),
                date = document.querySelector(".date"),
                daysContainer = document.querySelector(".days"),
                prev = document.querySelector(".prev"),
                next = document.querySelector(".next");

                let today = new Date();
                let activeDay;
                let month = today.getMonth();
                let year = today.getFullYear();

                const months = [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December",
                ];

                // Function to add days in days with class day and prev-date next-date on previous month and next month days and active on today
                function initCalendar() {
                const firstDay = new Date(year, month, 1);
                const lastDay = new Date(year, month + 1, 0);
                const prevLastDay = new Date(year, month, 0);
                const prevDays = prevLastDay.getDate();
                const lastDate = lastDay.getDate();
                const day = firstDay.getDay();
                const nextDays = 7 - lastDay.getDay() - 1;

                date.innerHTML = months[month] + " " + year;

                let days = "";
                // Prev
                    for (let x = day; x > 0; x--) {
                        days += `<div class="day prev-date">${prevDays - x + 1}</div>`;
                    }

                    for (let i = 1; i <= lastDate; i++) {
                        // Check if event is present on that day
                        
                        const eventDate = new Date(year, month, i);
                        const eventsForDay = <?php echo json_encode($events); ?>.filter((event) => {
                        const eventDateTime = new Date(event.start);
                        return eventDateTime.getDate() === i && eventDateTime.getMonth() === month && eventDateTime.getFullYear() === year;
                        });

                        if (eventsForDay.length > 0) {
                        days += `<div class="day has-event mark">${i}</div>`; // Add the mark class
                        } else if (
                        i === new Date().getDate() &&
                        year === new Date().getFullYear() &&
                        month === new Date().getMonth()
                        ) {
                        days += `<div class="day today">${i}</div>`;
                        } else {
                        days += `<div class="day">${i}</div>`;
                        }
                    }

                    for (let j = 1; j < nextDays; j++) {
                        days += `<div class="day next-date">${j}</div>`;
                    }
                    
                    daysContainer.innerHTML = days;

                    
                    }

                    initCalendar();

                    function prevMonth() {
                    month--;
                    if (month < 0) {
                        month = 11;
                        year--;
                    }      initCalendar();
                    }

                    function nextMonth() {
                    month++;
                    if (month > 11) {
                        month = 0;
                        year++;
                    }
                    initCalendar();
                    }

                    prev.addEventListener("click", prevMonth);
                    next.addEventListener("click", nextMonth);

                    function displayEventsForDate(date, events) {
                    const eventsContainer = document.querySelector(".events");
                    let eventList = "";

                    events.forEach((event) => {
                        const eventDate = new Date(event.start);
                        if (eventDate.getDate() === date) {
                        eventList += `
                            <hr><div class="event">
                            <h4><li>${event.title}</li></h4>
                            <p>Start: ${event.start}</p>
                            <p>End: ${event.end}</p>
                            </div></hr>
                        `;
                        }
                    });

                    eventsContainer.innerHTML = eventList;
                    }
                    daysContainer.addEventListener("click", (e) => {
                    if (e.target.classList.contains("day")) {
                        const date = parseInt(e.target.textContent);
                        displayEventsForDate(date, <?php echo json_encode($events); ?>);
                    }
                    });
                    displayEventsForDate(new Date().getDate(), <?php echo json_encode($events); ?>);
            </script>
        </div>
    </div><!--end of main-container-->      
</body>
<script src="dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
</html>