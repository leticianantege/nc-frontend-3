<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side Menu</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <style>
        .frame-1 {
            display: flex;
            align-items: center;
            margin-bottom: 10px; /* Add space between divs */
        }

        .menu-icons {
            font-size: 20px; /* Set the font size of the icons */
            margin-right: 10px; /* Add space between icons and text */
        }

        .dashboard {
            font-family: "Poppins";
            font-size: 20px;
            font-weight: 400;
            line-height: 30px;
            color: rgba(240, 238, 237, 1);
            text-decoration: none; /* Remove underline */
            transition: color 0.3s; /* Add a smooth transition effect */
            cursor: pointer; /* Change cursor to pointer on hover */
            display: inline-flex; /* Ensure proper spacing with the icon */
            align-items: center; /* Align items vertically */
        }

        /* Add a hover state for the elements with the "dashboard" class */
        .dashboard:hover {
            color: #007bff; /* Your desired color for the hover state */
        }

        /* Add an active state for the elements with the "dashboard" class */
        .dashboard.active {
            color: #28a745;
        }
    </style>
</head>
<body>
    <div class="frame-1">
        <div class="menu-icons">🏠</div>
        <a href="/index" class="dashboard">Home</a>
    </div>
    <br>

    <div class="frame-1">
        <div class="menu-icons">📚</div>
        <a href="/tests" class="dashboard">Tests</a>
    </div><br>

    <div class="frame-1">
        <div class="menu-icons">📊</div>
        <a href="/results" class="dashboard">Results</a>
    </div><br>

    <div class="frame-1">
        <div class="menu-icons">👤</div>
        <a href="/profile" class="dashboard">Profile</a>
    </div><br>

    <div class="frame-1">
        <div class="menu-icons">➕</div>
        <a href="/create" class="dashboard">Create New</a>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <div class="frame-1">
        <div class="menu-icons">🚪</div>
        <a href="/logout" class="dashboard">Logout</a>
    </div>

    <script>
        // Add a script to handle the click event and add/remove the "active" class
        const dashboardItems = document.querySelectorAll('.dashboard');

        dashboardItems.forEach(item => {
            item.addEventListener('click', () => {
                // Remove "active" class from all items
                dashboardItems.forEach(otherItem => otherItem.classList.remove('active'));
                // Add "active" class to the clicked item
                item.classList.add('active');
            });
        });
    </script>
</body>
</html>
