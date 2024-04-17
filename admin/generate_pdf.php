
<?php

require('inc/essentials.php');
require('inc/db_config.php');


adminlogin();

if(isset($_GET['gen_pdf']) && isset($_GET['id']))
{
    $frm_data = filteration($_GET);

    $query = "SELECT bo.*, bd.*, uc.email 
          FROM booking_order bo
          INNER JOIN booking_details bd ON bo.booking_id = bd.booking_id
          INNER JOIN user_cred uc ON bo.user_id = uc.id
          WHERE ((bo.booking_status = 'booked' AND bo.arrival = 1)
          OR (bo.booking_status = 'cancelled' AND bo.refund = 1)
          OR (bo.booking_status = 'payment failed'))
          AND bo.booking_id = '{$frm_data['id']}'";

    $res = mysqli_query($con, $query);

    $total_rows = mysqli_num_rows($res);

    if($total_rows == 0)
    {
        header('location: dashboard.php');
        exit;
    }

    $data = mysqli_fetch_assoc($res);
    $date = date("d-m-Y | h:i a", strtotime($data['datentime']));
    $checkin = date("d-m-Y", strtotime($data['check_in']));
    $checkout = date("d-m-Y", strtotime($data['check_out']));

    $booking_id = $data['order_id'];
    $booking_date = $date;
    $booking_status = $data['booking_status'];
    $customer_name = $data['user_name'];
    $email = $data['email'];
    $phone_number = $data['phonenum'];
    $address = $data['address'];
    $room_name = $data['room_name'];
    $price = $data['price'];
    $room_number = $data['room_no'];
    $trans_amt = $data['trans_amt'];
    $refund_status = ($data['refund']) ? "Amount Refunded" : "Not Refunded";
    $trans_resp_msg = $data['trans_resp_msg'];

    // Booking Receipt HTML content
    ob_start(); // Start output buffering
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <link rel="shortcut icon" href="dashboard_logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <h2>Booking Receipt</h2>

    <table>
        <tr>
            <th>Booking ID</th>
            <td><?php echo $booking_id; ?></td>
        </tr>
        <tr>
            <th>Booking Date</th>
            <td><?php echo $booking_date; ?></td>
        </tr>
        <tr>
            <th>Status</th>
            <td><?php echo $booking_status; ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?php echo $customer_name; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <th>Phone Number</th>
            <td><?php echo $phone_number; ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo $address; ?></td>
        </tr>
        <tr>
            <th>Room Name</th>
            <td><?php echo $room_name; ?></td>
        </tr>
        <tr>
            <th>Price per Night</th>
            <td><?php echo '₹' . $price; ?></td>
        </tr>
        <tr>
            <th>Room Number</th>
            <td><?php echo $room_number; ?></td>
        </tr>
        <?php if($booking_status == 'cancelled'): ?>
            <tr>
                <th>Amount Paid</th>
                <td><?php echo $trans_amt; ?></td>
            </tr>
            <tr>
                <th>Refund Status</th>
                <td><?php echo $refund_status; ?></td>
            </tr>
        <?php elseif($booking_status == 'payment failed'): ?>
            <tr>
                <th>Transaction Amount</th>
                <td><?php echo $trans_amt; ?></td>
            </tr>
            <tr>
                <th>Failure Response</th>
                <td><?php echo $trans_resp_msg; ?></td>
            </tr>
        <?php else: ?>
            <tr>
                <th>Amount Paid</th>
                <td><?php echo $trans_amt; ?></td>
            </tr>
        <?php endif; ?>
    </table>

    <script>
        // Print the booking receipt when the page is loaded
        window.onload = function() {
            window.print();
        };
    </script>

    </body>
</html>

    <?php

    $html_content = ob_get_clean(); // Get the contents of output buffer and clean it

    echo $html_content; // Output the booking receipt HTML content

    exit;
}
else
{
    header('location: dashboard.php');
    exit;
}
?>