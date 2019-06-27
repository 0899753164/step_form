<!DOCTYPE html>
<html lang="EN">
<head>
	<title>index</title>
	   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- bootstrap framework -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- jQuery step framework -->
 <!--  <script type="text/javascript" src="js/jquery.steps.js"></script> -->
 <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.js"></script> -->
    <!-- jquery framework -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!-- jQuery Ajax framework -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  
  <!-- jQuery validate framework -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
  
  <!-- bootstrap js framework -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- Animate -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

<!-- FontAweasome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

<!-- style.css -->
<link rel="stylesheet" type="text/css" href="css/style.css">

<!-- font typography -->
<link href="https://fonts.googleapis.com/css?family=Prompt:300,400&display=swap" rel="stylesheet">
<style type="text/css">
#regiration_form fieldset:not(:first-of-type) {
    display: none;
  }
     .error {
      color: red;
      background-color: #acf;
   }
</style>
</head>
<body>

  <!-- header -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><b>LOGO</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end">
    <ul class="navbar-nav">
      <li class="nav-item active">
       <!--  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
         <a class="nav-link" href="">
          <i class="fab fa-twitter animated fadeIn animation-delay-9 twitter" style="font-size: 20px; text-align: right;" ></i>
         </a>
      </li>
      <li class="nav-item">
       <!--  <a class="nav-link" href="#">Features</a> -->
       <a class="nav-link" href="">
         <i class="fab fa-facebook-f animated fadeIn animation-delay-9 facebook" style="font-size: 20px; text-align: right;"></i>
       </a>
      </li>
    </ul>
  </div>
  <hr>
</nav>
<div class="PeaColorHeader"></div>
<!-- END header -->
 <div class="container">
    <!-- Conditio if Simulate a smartphone / tablet Navtop !-->
    <?php 
    // btn_prev page 2 to page 1
    if ($_GET["page"] =="" or $_GET["page"] =="btn_prev") 
    {
      include("1.php");
    }
    elseif ($_GET["page"] =="btn_continue_2") 
    {
      include("2.php");  
    }
    elseif ($_GET["page"] =="btn_continue_3") 
    {
      include("3.php");
      
    }
    elseif ($_GET["page"] =="btn_prev3") 
    {
      include("2.php");
      
    }
    elseif ($_GET["page"] =="btn_confirm" or $_GET["page"] =="btn_continuetest") 
    {
      include("4.php");     
    }
      else 
      {

      } 
    ?>

<!--Script active link !-->
<?php
function active($current_page)
{
  $page = $_GET['page'];
  if(isset($page) && $page == $current_page)
  {
    echo 'active';
  }
}
?>

</div>
    <!-- Multi step form using with jQuery -->
<script type="text/javascript">
  // <!--  Multi step form using with jQuery
    $(document).ready(
      function()
      {
        var current = 1,current_step,next_step,steps;
        steps = $("fieldset").length;
        $(".next").click(
          function()
          {
            current_step = $(this).parent();
            next_step = $(this).parent().next();
            next_step.show();
            current_step.hide();
            setProgressBar(++current);
          });
        $(".previous").click(
          function()
          {
            current_step = $(this).parent();
            next_step = $(this).parent().prev();
            next_step.show();
            current_step.hide();
            setProgressBar(--current);
          });
          setProgressBar(current);
        // Change progress bar action
        function setProgressBar(curStep)
        {
          var percent = parseFloat(100 / steps) * curStep;
          percent = percent.toFixed();
          $(".progress-bar")
            .css("width",percent+"%")
            .html(percent+"%");   
        }
      });
    //END


//jQurery Validate//
$().ready(function() 
{
    $("#regiration_form").validate({
        errorClass: 'errors',
        rules: {
            validationCustom01: "required",
            validationCustom02: "required",
            validationCustomUsername: {
                required: true,
                maxlength: 10
            },
            contact: "required",
            rcpcontact: "required",
            telshop: "required",
            email: "required",
            zipcode: "required",
            THnameLastname: "required",
            idcard: "required",
            zipcode_conf: "required",
            zipcode_vatadd: "required"
        },
        messages: {
          contact: "กรุณาป้อนตัวเลขเท่านั้น!",
          rcpcontact: "กรุณาป้อนตัวเลขเท่านั้น!",
          telshop: "กรุณาป้อนตัวเลขเท่านั้น",
          email: "กรุณาป้อนอีเมล์ เช่น example@gmail.com",
          zipcode: "กรุณาป้อนตัวเลขเท่านั้น",
          THnameLastname: "อักขระภาษาไทยเท่านั้น",
          idcard: "กรุณาป้อนเลข 13 หลัก",
          zipcode_conf: "กรุณาป้อนตัวเลขเท่านั้น",
          zipcode_vatadd: "กรุณาป้อนตัวเลขเท่านั้น"


        }
    })
})

//Ajax posts
// jQuery("#regiration_form").submit(
//   function () 
//   {
//   //Validate the input here
//   jQuery.ajax({
//     type: 'POST',
//     url: 'getdata.php',
//     data: jQuery('#regiration_form').serialize(),
//     success: function (msg) 
//     {
//       msg = jQuery.trim(msg);
//       if (msg == 'Success') 
//       {
//         console.log('success');
//         //Do Whatever                    
//         //jQuery("#thanks_message").show('slow');
//          $('#success_result').html(data);
//          $('.success').fadeIn(200).show();
//           $('.error').fadeOut(200).hide();
//       }
//     }
//     });
//     return false;
//   });

</script>
</body>
</html>