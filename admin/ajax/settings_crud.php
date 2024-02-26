<?php 
    
    require('../inc/db_config.php');
    require('../inc/essentials.php');
    
    adminLogin();

    if(isset($_POST['get_general']))
    {
        $q = "SELECT * FROM settings WHERE sr_no=? ";   
        $values = [1];
        $res = select($q,$values,"i");
        $data = mysqli_fetch_assoc($res);
        $json_data = json_encode($data);
        echo $json_data;    
    }   
   
    if(isset($_POST['upd_general']))
    {
       $frm_data = filteration($_POST);

       $q = "UPDATE settings SET site_title=?, site_about=? WHERE sr_no=?";
       $values = [$frm_data['siteTitleElement'],$frm_data['siteAboutElement'],1];
       $res = update($q,$values,'ssi');
       echo $res;
         
    }
     
    if(isset($_POST['upd_shutdown']))
    {
       $frm_data = ($_POST['upd_shutdown']==0) ? 1 : 0;//if else is implimented here

       $q = "UPDATE settings SET shutdown=?  WHERE sr_no=?";
       $values = [$frm_data,1];
       $res = update($q,$values,'ii');
       echo $res;
         
    }

    if(isset($_POST['get_contacts']))
    {
        $q = "SELECT * FROM contact_details WHERE sr_no=? ";   
        $values = [1];
        $res = select($q,$values,"i");
        $data = mysqli_fetch_assoc($res);
        $json_data = json_encode($data);
        echo $json_data;    
    } 

    if(isset($_POST['upd_contacts']))
    {
       $frm_data = filteration($_POST);

       $q = "UPDATE contact_details SET address=?,gmap=?,pn1=?,pn2=?,email=?,fb=?,insta=?,tw=?,iframe=? WHERE sr_no=?";
       $values = [$frm_data['address'],$frm_data['gmap'],$frm_data['pn1'],$frm_data['pn2'],$frm_data['email'],$frm_data['fb'],$frm_data['insta'],$frm_data['tw'],$frm_data['iframe'],1];
       $res = update($q,$values,'sssssssssi');//first letter of the datatype of each column
       echo $res;
         
    }

    
        if(isset($_POST['add_member']))
        {
            // Check if the form was submitted and handle form data
            $frm_data = filteration($_POST);
            $img_r = uploadImage($_FILES['picture'], ABOUT_FOLDER);
            // Check if the image file was uploaded successfully
            if(isset($_FILES['picture']) && $_FILES['picture']['error'] === UPLOAD_ERR_OK) 
            {
                
                
                if($img_r === 'inv_img') 
                {
                    echo $img_r;
                } 
                else if($img_r === 'inv_size') 
                {
                    echo $img_r;
                } 
                else if($img_r === 'upd_failed') 
                {
                    echo $img_r;
                }
                else 
                {
                    // Insert member details into the database
                    $q = "INSERT INTO team_details(name, picture) VALUES (?,?)";
                    $values = [$frm_data['name'], $img_r];
                    $res = insert($q, $values, 'ss');
                    echo $res;
                }
            } 
            else
             {
                // Handle file upload errors
                echo 'Error uploading image file.';
            }
        }

        if(isset($_POST['get_members']))
        {
            $res = selectAll('team_details'); //stores result
            
            while($data = mysqli_fetch_assoc($res))
            {
                $path = ABOUT_IMG_PATH;
                echo <<<data

                <div class="col-md-2 mb-3">
                     <div class="card bg-dark text-white">
                        <img src="$path$data[picture]" class="card-img" >
                            <div class="card-img-overlay text-end">
                                <button type = "button" onclick="rem_member($data[sr_no])" class = "btn btn-danger btn-sm shadow-none">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </div>
                            <p class = "card-text text-center px-3 py-2 ">$data[name]</p>
                    </div>
                </div>

                data;
            }
        }

        if(isset($_POST['rem_member'])) 
        {
            $frm_data = filteration($_POST);
            $values = [$frm_data['rem_member']];
            
            $pre_q = "SELECT * FROM `team_details` WHERE `sr_no`=?";
            $res = select($pre_q, $values, 'i');
            $img = mysqli_fetch_assoc($res);
        
            // Check if image deletion was successful
            if(deleteImage($img['picture'], ABOUT_FOLDER)) {
                $q = "DELETE FROM `team_details` WHERE `sr_no`=?";
                $res = delete($q, $values, 'i');
                echo $res; 
            } else {
                echo 0;
            }
        }
        

?>
