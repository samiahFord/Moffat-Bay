<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Summary</title>
    <style>
        .container {
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .summary-table-container {
            display: inline-block;
            width: 100%;
            overflow-x: auto;
        }

        .summary-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 18px;
        }

        .summary-table th,
        .summary-table td {
            border: 1px solid #dddddd;
            padding: 8px;
        }

        .summary-table th {
            background-color: #f2f2f2;
        }

        .details-link {
            color: #000000; /* Change the color if needed */
            text-decoration: none;
            transition: color 0.3s ease; /* Smooth color transition */
        }

        .details-link:hover {
            color: #666666; /* Change the color on hover if needed */
        }
    </style>
</head>
<body>
    <?php include 'shared/navigation.html'; ?>
    <div class="container">
        <h1>Reservation Summary</h1>
        <div class="summary-table-container">
            <table class="summary-table">
                <thead>
                    <tr>
                        <th>Reservation ID</th>
                        <th>Guest Name</th>
                        <th>Room ID</th>
                        <th>Check-in Date</th>
                        <th>Check-out Date</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Include database connection
                    include 'config.php';

                    // Query to fetch reservation summary
                    $query = "SELECT r.*, g.first_name, g.last_name 
                              FROM reservations r
                              INNER JOIN guests g ON r.guest_id = g.guest_id";
                    $result = $con->query($query);

                    // Display reservation summary
                    if ($result && $result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['reservation_id'] . "</td>";
                            echo "<td>" . $row['first_name'] . " " . $row['last_name'] . "</td>";
                            echo "<td>" . $row['room_id'] . "</td>";
                            echo "<td>" . $row['check_in_date'] . "</td>";
                            echo "<td>" . $row['check_out_date'] . "</td>";
                            echo "<td><a href='reservation_details.php?id=" . $row['reservation_id'] . "' class='details-link'>Details</a></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No reservations found.</td></tr>";
                    }

                    // Close database connection
                    $con->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>


