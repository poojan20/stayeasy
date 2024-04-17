<?php

require('admin/inc/essentials.php');
require('admin/inc/db_config.php');

session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] == true)) {
    redirect('index.php');
}

if (isset($_GET['gen_pdf']) && isset($_GET['id'])) {
    $frm_data = filteration($_GET);

    $query = "SELECT bo.*, bd.*, uc.email FROM booking_order bo
    INNER JOIN booking_details bd ON bo.booking_id = bd.booking_id
    INNER JOIN user_cred uc ON bo.user_id = uc.id
    WHERE ((bo.booking_status = 'booked' AND bo.arrival = 1)
    OR (bo.booking_status = 'cancelled' AND bo.refund = 1)
    OR (bo.booking_status = 'payment failed'))
    AND bo.booking_id ='{$frm_data['id']}'";

    $res = mysqli_query($con, $query);

    $total_rows = mysqli_num_rows($res);

    if ($total_rows == 0) {
        header('location: index.php');
        exit;
    }
    $data = mysqli_fetch_assoc($res);
    $date = date("d-m-Y |h:ia ", strtotime($data['datentime']));
    $checkin = date("d-m-Y", strtotime($data['check_in']));
    $checkout = date("d-m-Y", strtotime($data['check_out']));

    $table_data = "
        <h2>Booking Receipt</h2>
        <table border='1'>
            <tr>
                <td colspan='2'>Status:&nbsp;{$data['booking_status']}</td>
            </tr>
            <tr>
                <td>Order Id:&nbsp;{$data['order_id']}</td>
                <td>Booking Date:&nbsp;$date</td>
            </tr>
            
            <tr>
                <td>Name :&nbsp;{$data['user_name']}</td>
                <td>Email:&nbsp;{$data['email']}</td>
            </tr>
            <tr>
                <td>Phone Number :&nbsp;{$data['phonenum']}</td>
                <td>Address:&nbsp;{$data['address']}</td>
            </tr>
            <tr>
                <td>Room Name :&nbsp;{$data['room_name']}</td>
                <td>Price:&nbsp;₹{$data['price']} per night</td>
            </tr>
            <tr>
                <td>Check-in :&nbsp;$checkin</td>
                <td>Check-out:&nbsp;$checkout</td>
            </tr>
    ";

    if ($data['booking_status'] == 'cancelled') {
        $refund = ($data['refund']) ? "Amount Refunded" : "Not Refunded";
        $table_data .= "<tr>
            <td>Amount Paid : {$data['trans_amt']}</td>
            <td>Refund: $refund</td>
        </tr>";
    } elseif ($data['booking_status'] == 'payment failed') {
        $table_data .= "<tr>
            <td>Transaction Amount : {$data['trans_amt']}</td>
            <td>Failure Response: {$data['trans_resp_msg']}</td>
        </tr>";
    } else {
        $table_data .= "<tr>
            <td>Room Number : {$data['room_no']}</td>
            <td>Amount Paid: {$data['trans_amt']}</td>
        </tr>";
    }

    $table_data .= "</table>";

    // Booking Receipt HTML content
    $html_content = "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
        <link rel='shortcut icon' href='s.png'>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Booking Receipt</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                }
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
                th, td {
                    padding: 8px;
                    border-bottom: 1px solid #ddd;
                }
                th {
                    background-color: #f2f2f2;
                }
            </style>
        </head>
        <body>

        $table_data

        <script>
            // Print the booking receipt when the page is loaded
            window.onload = function() {
                window.print();
            };
        </script>

        </body>
        </html>
    ";

    echo $html_content; // Output the booking receipt HTML content

    exit;
} else {
    header('location: index.php');
    exit;
}