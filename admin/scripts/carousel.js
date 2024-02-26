

let contacts_data;


let carousel_s_form = document.getElementById('carousel_s_form');
let carousel_picture_inp = document.getElementById('carousel_picture_inp');


carousel_s_form.addEventListener('submit',function(e)
{    
    e.preventDefault();
    add_image();
});

function add_image()
{
    let data = new FormData();
    data.append('picture',carousel_picture_inp.files[0]);
    data.append('add_image','');

    let xhr = new XMLHttpRequest();

    // Define the callback function to handle the response
    xhr.onload = function() 
    {
        
        var myModal = document.getElementById('carousel-s');
        var modal = bootstrap.Modal.getInstance(myModal); // Returns a Bootstrap modal instance
        modal.hide();//to hide the changes module
        
        if(this.responseText == 'inv_img')
        {
            alert('error','Only jpeg and png images are allowed');
        }
        else if(this.responseText == 'inv_size')
        {
            alert('error','Image should be less than 2mb');
        }
        else if(this.responseText == 'upd_failed')
        {
            alert('error','Image upload failed. server down');
        }
        else
        {
            alert('success','New Image added');
           
            carousel_picture_inp.value = '';
            get_carousel();
        }
    };

    // Configure the request
    xhr.open("POST", "ajax/carousel_crud.php", true);

    xhr.send(data);
}

function get_carousel()
{
    let xhr = new XMLHttpRequest();

    // Define the callback function to handle the response
    xhr.onload = function() 
    {
        document.getElementById('carousel-data').innerHTML = this.responseText;
    };



    // Configure the request
    xhr.open("POST", "ajax/carousel_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Send the request with the specified data
    xhr.send('get_carousel');
}   

function rem_member(val) 
{
    let xhr = new XMLHttpRequest();

    // Define the callback function to handle the response
    xhr.onload = function() {
        if (this.responseText == 1) {
            alert('success', 'Member removed');
            get_carousel();
        } else {
            alert('error', 'Server down');
        }
    };

    xhr.open("POST", "ajax/carousel_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Send the request with the specified data
    xhr.send('rem_member=' + val);
}


// Call the get_general function when the window finishes loading
window.onload = function() 
{
        get_carousel();
};
