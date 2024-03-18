<?php 
    
    require('../inc/db_config.php');
    require('../inc/essentials.php');
    
    adminLogin();



if(isset($_POST['get_bookings']))
{
    $query = "SELECT bo.*,bd.* FROM `booking_order` bo
    INNER JOIN `booking_details` bd ON bo.booking_id = bd.booking_id
    WHERE bo.booking_status = 'booked' AND bo.arrival = 0 ORDER BY bo.booking_id ASC";

    $res = mysqli_query($con,$query);
    $i=1;
    $table_data ="";

    while($data = mysqli_fetch_assoc($res))
    {
        $date = date("d-m-Y",strtotime($data['datentime']));
        $checkin = date("d-m-Y",strtotime($data['check_in']));
        $checkout = date("d-m-Y",strtotime($data['check_out']));

        $table_data.="
            <tr>
                <td>$i</td>
                <td>
                    <span class = 'badge-bg-primary'>
                        Order Id:$data[order_id]
                    </span>
                    <br>
                    <b>Name :</b>$data[user_name]
                    <br>
                    <b>Phone No :</b>$data[phonenum]
                </td>
                <td>
                    <b>Room:</b>$data[room_name]
                    <br>
                    <b>Price:</b>₹$data[price]
                </td>
                <td>
                    <b>Check in:</b> $checkin
                    <br>
                    <b>Check in:</b> $checkout
                    <br>
                    <b>Paid:</b> $data[trans_amt]
                    <br>
                    <b>Date:</b> $date
                </td>
                <td>
                    Some Actions
                </td>
            </tr>
        ";
        $i++;
    }
    echo $table_data;
}




if(isset($_POST['assign_room']))
{
    $frm_data = filteration($_POST);

    $query = "UPDATE `booking_order` bo INNER JOIN `booking_details` bd 
    ON bo.booking_id = bd.booking_id
    SET bo.arrival = ?,bo.rate_review = ?,bd.room_no = ?
    WHERE bo.booking_id = ?";

    $values = [1,0,$frm_data['room_no'],$frm_data['booking_id']];

    $res = update($query,$values,'iisi');
    
    echo ($res==2) ? 1 : 0;


}

if(isset($_POST['search_user']))
{
    $frm_data = filteration($_POST);

    $query = "SELECT * FROM `user_cred` WHERE `name` LIKE ?";
    
    $res = select($query,["%$frm_data[name]%"],'s');
    $i = 1;
    $path = USERS_IMG_PATH;



    $data = "";

    while($row = mysqli_fetch_assoc($res))
    {
        $del_btn = "<button type='button'onclick='remove_user($row[id])' class='btn btn-danger shadow-none btn-sm'>
                        <i class='bi bi-trash'></i> 
                    </button>";

        // $verified = "<span class ='badge bg-warning'><i class ='bi bi-x-lg'></i></span>";
        // if($row['is_verified'])
        // {
        //     $verified = "<span class ='badge bg-warning'><i class ='bi bi-check-lg'></i></span>";
        // }

        $status = "<button onclick='toggle_status($row[id],0)' class = 'btn btn-dark btn-sm shadow-none'>active</button>";

            if(!$row['status'])
            {
                $status = "<button onclick='toggle_status($row[id],1)' class = 'btn btn-danger btn-sm shadow-none'>
                            inactive
                            </button>";
            }

        $date = date("d-m-Y",strtotime($row['datentime']));

        $data.= "
            <tr>
                <td>$i</td>
                <td>
                    <img src='$path$row[profile]' width='55px'>
                    <br>
                    $row[name]</td>
                <td>$row[email]</td>
                <td>$row[phonenum]</td>
                <td>$row[address] | $row[pincode]</td>
                <td>$row[dob]</td>
                <td>$status</td>
                <td>$date</td>
                <td>$del_btn</td>
                

            </tr>
        ";
        $i++;

    }
    echo $data;
}


?>
