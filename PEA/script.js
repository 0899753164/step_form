//   Multi step form using with jQuery
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
            zipcode_vatadd: "required",
            ENnameLastname: "required",
            Date_of_issue: "required",
            expire_date: "required",
            baccountid: "required",
            owncontact: "required",
            getphone: "required",
            idcard: { required: true, minlength: 13 },
            district: { accept: " ^[ก-๏\s]+$ " }
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
          zipcode_vatadd: "กรุณาป้อนตัวเลขเท่านั้น",
          ENnameLastname: "อักขระภาษาอังกฤษเท่านั้น",
          Date_of_issue: "กรุณาป้อนวันที่ออกบัตร",
          expire_date: "กรุณาป้อนวันที่หมดอายุบัตร",
          baccountid: "กรุณาป้อนตัวเลขเท่านั้น",
          district: "อักขระเท่านั้น",
          getphone: "กรุณาป้อนตัวเลขเท่านั้น",
          idcard: "กรุณาป้อนเลขให้ครบ 13 หลัก"
        },
        highlight: function (element) {
            $(element).parent().addClass('error')
        },
        unhighlight: function (element) {
            $(element).parent().removeClass('error')
        }//,
        // submitHandler: function(form) { // <- pass 'form' argument in
        //     $(".submit").attr("disabled", true);
        //     form.submit(); // <- use 'form' argument here.
        // }

    })
     jQuery.validator.addMethod("accept", function(value, element, param) {
  return value.match(new RegExp("." + param + "$"));
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
// END
  
// // Example starter JavaScript for disabling form submissions if there are invalid fields
// (function() {
//   'use strict';
//   window.addEventListener('load', function() {
//     // Fetch all the forms we want to apply custom Bootstrap validation styles to
//     var forms = document.getElementsByClassName('needs-validation');
//     // Loop over them and prevent submission
//     var validation = Array.prototype.filter.call(forms, function(form) {
//       form.addEventListener('submit', function(event) {
//         if (form.checkValidity() === false) {
//           event.preventDefault();
//           event.stopPropagation();
//         }
//         form.classList.add('was-validated');
//       }, false);
//     });
//   }, false);
// })();
//END bootstrap validate//

//validate Check box
$(function()
{
    var checkbox_required = false;
    $(":checkbox.required").on("click",
        function()
        {
            var is_checked = $(this).prop("checked");
            if(is_checked)
            {
                $(":checkbox.required").prop('required',false);
                checkbox_required = true;
            }
            else
            {
                if($(":checkbox.required:checked").length==0)
                {
                    checkbox_required = false;
                    $(":checkbox.required").prop('required',true);
                }
            }      
        });
    $("#regiration_form").on("submit",
        function()
        {
            var form = $(this)[0];
            if (form.checkValidity() === false || checkbox_required===false) 
            {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');         
        });
    });
//END validate Check box

//select onlyOne checkbox 'inlineCheckbox1'
function onlyOne(checkbox) 
{
    var checkboxes = document.getElementsByName('inlineCheckbox1')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}

//select onlyOne checkbox 'inlineCheckbox2'
function only(checkbox) 
{
    var check = document.getElementsByName('inlineCheckbox2')
    
    //inlineCheckbox1
    check.forEach((items) => {
        if (items !== checkbox) items.checked = false
    })
}
// title name checkbox validate only one
function Ctitlename(checkbox)
{
  var checktname = document.getElementsByName('titlenamecheckbox')

  checktname.forEach((itemss) => {
    if (itemss !== checkbox) itemss.checked = false
  })
}
// END//