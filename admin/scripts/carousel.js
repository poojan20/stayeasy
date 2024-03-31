    
    let carousel_s_form = document.getElementById('carousel_s_form');
   
    let carousel_picture_inp = document.getElementById('carousel_picture_inp');



    carousel_s_form.addEventListener('submit',function(e)
    {
        e.preventDefault();
        add_image();
    });

     function  add_image()
    {
        let data = new FormData();
        data.append('picture',carousel_picture_inp.files[0]);
        data.append('add_image','');

        let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/carousel_crud.php",true);

        xhr.onload = function()
        {
            var myModal = document.getElementById('carousel-s');
            var modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();

            if(this.responseText == 'inv_img')
            {
                alert('error','Only jpg and png image are allowed!');
            }
            else if(this.responseText == 'inv_size')
            {
                alert('error','Image should be less than 4mb');
            }
            else if(this.responseText == 'upd_failed')
            {
                alert('error','Server Down');
            }
            else
            {
                alert('success','New Image added');
                carousel_picture_inp.value = '';
                get_carousel();
            }
        }
        xhr.send(data);
     }

     function get_carousel()
     {
        let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/carousel_crud.php",true);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        xhr.onload = function()
        {
            document.getElementById('carousel-data').innerHTML = this.responseText;
        }
        xhr.send('get_carousel');
     }
    
     function rem_image(val)
     {
        let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/carousel_crud.php",true);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        xhr.onload = function()
        {
            if(this.responseText=1)
            {
                alert('success','Image Removed');
                get_carousel();
            }
            else
            {
                alert('error','Server Down');
            }
        }
        xhr.send('rem_image='+val);
     }


    // Call the get_general function when the window finishes loading
    window.onload = function() 
    {
            get_carousel();
    };
    














    // let contacts_data;

    // let general_s_form = document.getElementById('general_s_form'); // Corrected typo
    // let site_title_inp = document.getElementById('site_title_inp');
    // let site_about_inp = document.getElementById('site_about_inp');

    // let contacts_s_form = document.getElementById('contacts_s_form');

    // let team_s_form = document.getElementById('team_s_form');
    // let member_name_inp = document.getElementById('member_name_inp');
    // let member_picture_inp = document.getElementById('member_picture_inp');

    // function get_general() 
    // {
    //     // Get references to HTML elements
    //     let siteTitleElement = document.getElementById('site_title');
    //     let siteAboutElement = document.getElementById('site_about');
    //     let shutdown_toggle = document.getElementById('shutdown-toggle');

    //     // Create a new XMLHttpRequest object
    //     let xhr = new XMLHttpRequest();

    //     // Define the callback function to handle the response
    //     xhr.onload = function() 
    //     {
    //         // Check if the request was successful (status code 200)
    //         if (xhr.status === 200) 
    //         {
    //             // Parse the JSON response
    //             let general_data = JSON.parse(xhr.responseText);

    //             // Update the content of HTML elements with the received data
    //             siteTitleElement.textContent = general_data.site_title;
    //             siteAboutElement.textContent = general_data.site_about;

    //             site_title_inp.value = general_data.site_title;
    //             site_about_inp.value = general_data.site_about;

    //             if (general_data.shutdown == 0) 
    //             {
    //                 shutdown_toggle.checked = false;
    //                 shutdown_toggle.value = 0;
    //             } 
    //             else 
    //             {
    //                 shutdown_toggle.checked = true;
    //                 shutdown_toggle.value = 1;
    //             }
    //         } else 
    //         {
    //             // If the request was not successful, log the error
    //             console.error('Request failed. Status: ' + xhr.status);
    //         }
    //     };

    //     // Configure the request
    //     xhr.open("POST", "ajax/settings_crud.php", true);
    //     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    //     // Send the request with the specified data
    //     xhr.send('get_general');
    // }

    // // Adding event listener to form submission
    // general_s_form.addEventListener('submit', function(e) 
    // {
    //     e.preventDefault();
    //     upd_general(site_title_inp.value, site_about_inp.value);
    // });


    // function upd_general(site_title_val , site_about_val)
    // {
    //     let xhr = new XMLHttpRequest();

    //     // Define the callback function to handle the response
    //     xhr.onload = function() 
    //     {
    //         var myModal = document.getElementById('general-s');
    //         var modal = bootstrap.Modal.getInstance(myModal); // Returns a Bootstrap modal instance
    //         modal.hide();//to hide the changes module
            
    //         if(this.responseText == 1)
    //         {
    //             alert('success','Changes Saved!');
    //             get_general();
    //         }
    //         else
    //         {
    //             alert('alert','No changes made');
    //         }
    //     };

    //     // Configure the request
    //     xhr.open("POST", "ajax/settings_crud.php", true);
    //     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
    //     xhr.send('siteTitleElement='+site_title_val + '&siteAboutElement=' + site_about_val + '&upd_general');
    // }

    // function upd_shutdown(val) 
    // {
    //     let xhr = new XMLHttpRequest();

    //     // Define the callback function to handle the response
    //     xhr.onload = function() {
    //         if (this.responseText == 1 && val == 0) {
    //             alert('alert', 'Site has been shutdown');
    //         } else {
    //             alert('success', 'Shutdown mode off');
    //         }
    //         get_general();
    //     };

    //     // Configure the request
    //     xhr.open("POST", "ajax/settings_crud.php", true);
    //     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    //     xhr.send('upd_shutdown=' + val);
    // }

    // function get_contacts() 
    // {
    //     let contacts_p_id = ['address','gmap','pn1','pn2','email','fb','insta','tw']; 
    //     let iframe = document.getElementById('iframe');
    //     // Create a new XMLHttpRequest object
    //     let xhr = new XMLHttpRequest();

    //     // Define the callback function to handle the response
    //     xhr.onload = function() 
    //     {
    //         contacts_data = JSON.parse(this.responseText);
    //         contacts_data = Object.values(contacts_data);
			
	// 		for(i=0; i<contacts_p_id.length; i++)
	// 		{
	// 				document.getElementById(contacts_p_id[i]).innerText = contacts_data[i+1];
	// 		}
	// 		iframe.src = contacts_data[9];
    //         contacts_inp(contacts_data);
    //     };

        

    //     // Configure the request
    //     xhr.open("POST", "ajax/settings_crud.php", true);
    //     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    //     // Send the request with the specified data
    //     xhr.send('get_contacts');
    // }  
    
    
    // function contacts_inp(data) 
    // {
    //      let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'tw_inp', 'iframe_inp'];

    //      for (let i = 0; i < contacts_inp_id.length; i++) 
    //      {
    //          document.getElementById(contacts_inp_id[i]).value = data[i+1];
    //      }
    // }
    // contacts_s_form.addEventListener('submit',function(e)
    // {
    //     e.preventDefault();
    //     upd_contacts();
    // });

    // function upd_contacts()
    // {
    //     let index = ['address','gmap','pn1','pn2','email','fb','insta','tw','iframe'];
    //     let contacts_inp_id = ['address_inp','gmap_inp','pn1_inp','pn2_inp','email_inp','fb_inp','insta_inp','tw_inp','iframe_inp'];
        
    //     let data_str = "";
        
    //     for(i=0; i<index.length; i++)
    //     {
    //         data_str += index[i] + "=" + document.getElementById(contacts_inp_id[i]).value + '&'; 
    //     }
    //    data_str += "upd_contacts";

    //    let xhr = new XMLHttpRequest();
    //     xhr.open("POST", "ajax/settings_crud.php", true);
    //     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    //     xhr.onload = function()
    //     {
    //         var myModal = document.getElementById('contacts-s');
    //         var modal = bootstrap.Modal.getInstance(myModal); // Returns a Bootstrap modal instance
    //         modal.hide();//to hide the changes module
    //         if (this.responseText == 1) 
    //         {
    //             alert('success', 'Changes Saved');
    //             get_contacts();
    //         } 
    //         else 
    //         {
    //             alert('success', 'No changes made');
    //         }
            
    //     }
    //    xhr.send(data_str);
    // }

    


    // // Call the get_general function when the window finishes loading
    // window.onload = function() 
    // {
    //         get_general();
    // };
    