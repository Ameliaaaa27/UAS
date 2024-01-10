<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Name - @yield('title')</title>

    <!-- Internal CSS Starts Here -->
    <style>
        /* Style for User Management Table */
        /* Basic reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f4f4;
    padding: 20px;
}

/* Sidebar styles */
.sidebar {
    background-color: #003366;
    padding: 15px;
    border-radius: 5px;
    color: white;
    margin-bottom: 20px;
}

.sidebar a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 5px 0;
}

.sidebar a:hover {
    text-decoration: underline;
}

/* Main content styles */
.content {
    background: white;
    padding: 20px;
    border-radius: 5px;
}

.content h1 {
    color: #003366;
    margin-bottom: 20px;
}

/* Table styles */
.table {
    width: 100%;
    margin-bottom: 20px;
    border-collapse: collapse;
}

.table th,
.table td {
    border: 1px solid #ddd;
    text-align: left;
    padding: 8px;
}

.table th {
    background-color: #003366;
    color: white;
}

.table tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Button styles */
.button {
    display: inline-block;
    padding: 5px 10px;
    margin-right: 5px;
    border-radius: 3px;
    cursor: pointer;
    color: white;
}

.button.edit {
    background-color: #4CAF50; /* Green */
}

.button.delete {
    background-color: #f44336; /* Red */
}

/* Utility classes */
.mb-20 {
    margin-bottom: 20px;
}

/* Alert box */
.alert {
    padding: 20px;
    background-color: #4CAF50; /* Green */
    color: white;
    margin-bottom: 15px;
    border-radius: 3px;
}

.alert-error {
    background-color: #f44336; /* Red */
}

.alert-success {
    background-color: #4CAF50; /* Green */
}

.alert-info {
    background-color: #2196F3; /* Blue */
}

.alert-warning {
    background-color: #ff9800; /* Orange */
}

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table tr:hover {
            background-color: #ddd;
        }

        /* Style for buttons */
        .button, a.button {
            display: inline-block;
            padding: 8px 15px;
            margin: 5px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }

        .button:hover, a.button:hover {
            background-color: #45a049;
        }

        .button.delete {
            background-color: #f44336;
        }

        .button.delete:hover {
            background-color: #d32f2f;
        }

        /* Additional styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
        }

        h1 {
            color: #333;
        }
    </style>
    <!-- Internal CSS Ends Here -->
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="sidebar">
                    <!-- Navigation Links -->
                    <a href="/dashboard">Dashboard</a>
                    <a href="/user-management">Manajemen User</a>
                    <a href="/logout">Logout</a>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS or your own scripts here -->
</body>
</html>
