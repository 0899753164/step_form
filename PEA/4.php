<!DOCTYPE html>
<html>
<head>
	<title>Samsung</title>
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootstrap framework -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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

        <!-- using fieldset -->
    <style type="text/css">
      #regiration_form fieldset:not(:first-of-type) {
    display: none;
  }

#regiration_form .error {
    background-color: #ffffff;
    font-size: 80%;
    color: #dc3545;
}
  </style>
</head>
<body>

      <!-- header -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <b>LOGO</b>
</a>
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
	
<!-- Content! -->
	<div class="container">
        <form class="needs-validation" action="getdata.php"  method="POST" id="regiration_form">
            <!-- aniamte -->
            <div class="page-icon animated bounceInDown">
                <!-- <img src="/img/login-questionmark-icon.png" alt="Key icon"> -->
                <i class="fas fa-question" style="font-size:36px; padding-top: 30px; color: #ffffff;"></i>
            </div>
                <!-- Tap Step -->
            <div class="d-flex justify-content-center">
             <ul role="tablist" class="list-group list-group-horizontal col-lg-12" algn="center">
                <li class="list-group-item col-md-3" id="step1">
                    <a href="#step1" style="text-decoration: none;">
                        <span class="step" style="border: 3px solid #009EFB; color: #009EFB;">1</span>
                        <br>
                        <br>
                        <p class="col-lg-10" style="color: #009EFB;">ข้อมูลทั่วไป</p>
                    </a>
                </li>

                <li class="list-group-item col-md-4" id="step2">
                    <a href="#step2" style="text-decoration: none;">
                        <span class="step" style="border: 3px solid #009EFB; color: #009EFB; left: 25%;">2</span>
                        <br>
                        <br>
                        <p class="col-lg-12" style="color: #009EFB;">ผู้รับผลตอบแทน</p>
                    </a>
                </li>

                <li class="list-group-item col-md-4" id="step3">
                    <a href="#step3" style="text-decoration: none;">
                        <span class="step" style="border: 3px solid #009EFB; color: #009EFB;">3</span>
                        <br>
                        <br>
                        <p class="col-lg-10" style="color: #009EFB;">Retail Excellence</p>
                    </a>
                </li>

                <li class="list-group-item col-md-2" id="step4">
                    <a href="#step4" style="text-decoration: none;">
                        <span class="step" style="border: 3px solid #009EFB; color: #009EFB;">4</span>
                        <br>
                        <br>
                        <p class="col-lg-10" style="color: #009EFB;">ยืนยัน</p>
                    </a>
                </li>
             </ul>
            </div>
            <hr style="color: #F5F5F5; 2px;">

            <fieldset id="regiration_form">
                <h6>
                    <b>1: ข้อมูลทั่วไป</b>
                </h6>
                <div class="form-check form-check-inline col-lg-3">
                    <label class="form-check-label" for="inlineCheckbox1">1.ประเภทขอร้านค้า</label>
                </div>

                <div class="form-check form-check-inline col-lg-2">
                    <input class="form-check-input" type="checkbox" name="inlineCheckbox1" id="inlineCheckbox1" value="ขายปลีก" onclick="onlyOne(this)" required>
                    <label class="form-check-label" for="inlineCheckbox1">ขายปลีก</label>
                </div>
                
                <div class="form-check form-check-inline col-lg-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="inlineCheckbox1" value="ขายส่ง" onclick="onlyOne(this)" required>
                    <label class="form-check-label" for="inlineCheckbox1">ขายส่ง</label>
                </div>

                <div class="form-check form-check-inline col-lg-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="inlineCheckbox1" value="Band Shop" onclick="onlyOne(this)" required>
                    <label class="form-check-label" for="inlineCheckbox1">Band Shop</label>
                </div>
                  <div class="invalid-feedback">
            
                  </div> 
                <br>

                <div class="form-check form-check-inline col-lg-3">
                    <label class="form-check-label" for="inlineCheckbox2">2.ลักษณะของร้านค้าเปิดในนาม</label>
                </div>

                <div class="form-check form-check-inline col-lg-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="inlineCheckbox2" value="บุคคลธรรมดา" onclick="only(this)" required>
                    <label class="form-check-label" for="inlineCheckbox2">บุคคลธรรมดา</label>
                </div>

                <div class="form-check form-check-inline col-lg-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="inlineCheckbox2" value="นิติบุคคล" onclick="only(this)" required>
                    <label class="form-check-label" for="inlineCheckbox2">นิติบุคคล</label>
                </div>
                <br>    

        <div class="row">
            <div class="col-md-3">
                <div class="form-group control-label">
                    <label for="shopname">3.ชื่อร้าน</label>
                </div>
            </div>

            <div class="col-lg-9">
                <div id="shopname" class="form-group">
                    <input class="form-control required" data-val="true" data-val-name="The shop name field is not a valid" data-val-required="The Shop name field is required." id="shopname" name="shopname" placeholder="ชื่อร้าน" type="text" value="" required />
                   <!--  <label id="ShopnameError" class="text-danger" hidden>กรุณาใส่ชื่อร้านให้ถูกต้อง</label> -->
                   <div class="invalid-feedback">
                       
                    </div>
                    <div class="valid-feedback">
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
           
            <div class="col-md-3">
                <div class="form-group control-label">
                    <label for="validationCustom02">4.ชื่อเจ้าของกิจการ</label>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div id="Owner name" class="form-group">
                    <input class="form-control required" data-val="true" data-val-name="The Owner name field is not a valid" data-val-required="The Owner name field is required." id="validationCustom02" name="ownername" placeholder="ชื่อเจ้าของกิจการ" type="text" value="" data-error="Bruh, that email address is invalid required" required/>
                   <div class="invalid-feedback">
                       
                    </div>
                    <div class="valid-feedback">
                      
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group control-label">
                    <label for="validationCustomUsername">เบอร์ติดต่อ</label>
                </div>
            </div>
            
             <div class="col-lg-3">
                <div id="owncontact" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The contact field is not a valid" data-val-required="The contact field is required." id="owncontact" name="owncontact" placeholder="" holder="เบอร์ติดต่อ" type="number" value="" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required/>
                       <div class="invalid-feedback">
                        
                    </div>
                    <div class="valid-feedback">
                    
                    </div>
                </div>
            </div>

             <div class="col-md-3">
                <div class="form-group control-label">
                    <label for="validationCustom02">5.ชื่อผู้รับผลตอบแทน</label>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div id="recipientsname" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The recipientsname field is not a valid" data-val-required="The recipientsname field is required." id="validationCustom02" name="recipientsname" placeholder="ชื่อผู้รับผลตอบแทน" type="text" value="" required/>
                   <div class="invalid-feedback">
                        
                    </div>
                    <div class="valid-feedback">
                    
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group control-label">
                    <label for="validationCustom03">เบอร์ติดต่อ</label>
                </div>
            </div>
            
             <div class="col-lg-3">
                <div id="contact2" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The contact field is not a valid" data-val-required="The contact field is required." id="validationCustom03" name="rcpcontact" placeholder="เบอร์ติดต่อ" type="number" value="" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required />
                   
                        <div class="invalid-feedback">
                        
                    </div>
                    <div class="valid-feedback">
                    
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group control-label">
                    <label for="validationCustom04">6.ชื่อบริษัท(หากเป็นนิติบุคคล)</label>
                </div>
            </div>

            <div class="col-lg-9">
                <div id="companyname" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The company name field is not a valid" data-val-required="The company name field is required." id="validationCustom04" name="companyname" placeholder="ชื่อบริษัท" type="text" value="" required />
                   
                   <div class="invalid-feedback">
                       
                    </div>
                    <div class="valid-feedback">
                   
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group control-label">
                    <label for="validationCustom05">7.เลขที่จดทะเบียนผู้เสียภาษี(หากเป็นนิติบุคคล)</label>
                </div>
            </div>

            <div class="col-lg-9">
                <div id="companyname" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The company name field is not a valid" data-val-required="The company name field is required." id="validationCustom05" name="vatcomp" placeholder="ชื่อบริษัท" type="text" value="" required />
                  
                  <div class="invalid-feedback">
                    
                    </div>
                    <div class="valid-feedback">
                  
                    </div>
                </div>
            </div>
        </div>

         <div class="row">
            <div class="col-md-3">
                <div class="form-group control-label">
                    <label for="validationCustom06">8.เบอร์โทรร้านค้าที่สามารถติดต่อได้</label>
                </div>
            </div>

            <div class="col-lg-9">
                <div id="tel" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The tel field is not a valid" data-val-required="The tel field is required." id="txtTel" name="telshop" placeholder="เบอร์โทรร้านค้าที่สามารถติดต่อได้" type="number" value="" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required />
                  
                    <div class="invalid-feedback">
                       
                    </div>
                    <div class="valid-feedback">
                  
                    </div>
                </div>
            </div>
        </div>

         <div class="row">
            <div class="col-md-3">
                <div class="form-group control-label">
                    <label for="validationCustom07">9.อีเมลล์</label>
                </div>
            </div>

            <div class="col-lg-9">
                <div id="alidationCustom07" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The Email field is not a valid" data-val-required="The Email field is required." id="alidationCustom07" name="email" placeholder="อีเมลล์" type="email" value="" required />
                  
                   <div class="invalid-feedback">
                       
                    </div>
                    <div class="valid-feedback">
                  
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
        <div class="col-md-3">
                <div class="form-group control-label">
                    <label for="shoplocat">10.ที่ตั้งร้านค้า:</label>
                </div>
            </div>
         </div>

          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="">รายละเอียด:ล็อคห้อง</label>
              <input type="text" name="rdetail" class="form-control" id="inputCity">
            </div>

            <div class="form-group col-md-2">
              <label for="inputState">ชั้น</label>
              <input type="text" name="floor" class="form-control" id="inputCity">
            </div>

            <div class="form-group col-md-4">
              <label for="inputState">อาคาร</label>
              <input type="text" name="building" class="form-control" id="inputCity">
            </div>

            <div class="form-group col-md-2">
              <label for="inputState">เลขที่</label>
              <input type="text" name="NO_a" class="form-control" id="inputCity">
            </div>

            <div class="form-group col-md-4">
              <label for="inputState">ซอย</label>
              <input type="text" name="soi" class="form-control" id="inputCity">
            </div>

            <div class="form-group col-md-3">
              <label for="inputState">หมู่ที่</label>
              <input type="text" name="moo" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-5">
              <label for="inputState">ถนน</label>
              <input type="text" name="street" class="form-control" id="inputCity">
            </div>

            <div class="form-group col-md-4">
              <label for="inputState">ตำบล/แขวง</label>
              <input type="text" name="tambon" class="form-control" id="inputCity">
            </div>

            <div class="form-group col-md-3">
              <label for="district">อำเภอ/เขต</label>
              <input type="text" name="district" class="form-control" id="district">
               <div class="invalid-feedback">
                       
                    </div>
            </div>
            <div class="form-group col-md-5">
              <label for="inputState">จังหวัด</label>
              <input type="text" name="province" class="form-control" id="inputCity">
            </div>

             <div class="form-group col-md-5">
              <label for="inputState">ภูมิภาค</label>
              <input type="text" name="region" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-7">
              <label for="inputState">รหัสไปรษณีย์</label>
              <input type="number" name="zipcode" class="form-control" id="inputState" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="5">
              <div class="invalid-feedback">
                       
                    </div>
            </div>
          </div>

        <!-- button next -->
       <!--  <div class="form-group" style="margin: auto;text-align: center;"> -->
    <input type="submit" name="submit" class="next btn btn-info justify-content-center submit" value="submit" style="display: inline; width:150px; margin: 5px 5px 5px 5px; background-color: #7F3E98;">
<!-- </div> -->
  </fieldset>

  <fieldset id="regiration_form">
    <h6><b>2: ผู้รับผลตอบแทน</b></h6>

         <div class="form-check form-check-inline col-lg-3">
          <label class="form-check-label" for="titlenamecheckbox">11.คำนำหน้าชื่อ</label>
        </div>

        <div class="form-check form-check-inline col-lg-2">
          <input class="form-check-input" name="titlenamecheckbox" type="checkbox" id="titlenamecheckbox" value="นาย" onclick="Ctitlename(this)" required>
          <label class="form-check-label" for="titlenamecheckbox">นาย(Mr.)</label>
        </div>

        <div class="form-check form-check-inline col-lg-2">
          <input class="form-check-input" type="checkbox" name="titlenamecheckbox" id="titlenamecheckbox" value="นาง" onclick="Ctitlename(this)" required>
          <label class="form-check-label" for="titlenamecheckbox">นาง(Mrs.)</label>
        </div>

        <div class="form-check form-check-inline col-lg-2">
          <input class="form-check-input" type="checkbox" name="titlenamecheckbox" id="titlenamecheckbox" value="นางสาว" onclick="Ctitlename(this)" required>
          <label class="form-check-label" for="titlenamecheckbox">นางสาว(Miss)</label>
        </div><br>
        <br>
        <br>    

        <div class="row">
            <div class="col-md-5">
                <div class="form-group control-label">
                    <label for="THname">12.ชื่อ-นามสกุล(<u>ภาษาไทย</u>ไม่ต้องมีคำนำหน้าชื่อ)</label>
                </div>
            </div>

            <div class="col-lg-7">
                <div id="THname" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The Name andLastname field is not a valid" data-val-required="The Name and Lastname field is required." id="THname" name="THnameLastname" placeholder="ชื่อ-นามสกุล" type="text" value="" pattern="^[ก-๏\s]+$"  required />
                    <div class="invalid-feedback">
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
           
            <div class="col-md-5">
                <div class="form-group control-label">
                    <label for="ENname">13.ชื่อ-นามสกุล(<u>ภาษาอังกฤษ</u>ไม่ต้องมีคำนำหน้าชื่อ)</label>
                </div>
            </div>
            
            <div class="col-lg-7">
                <div id="ENname" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The ENnameLastname field is not a valid" data-val-required="The ENnameLastname field is required." id="ENname" name="ENnameLastname" placeholder="ชื่อ-สกุลภาษาอังกฤษ" type="text" value="" onkeypress="return (event.charCode > 64 && 
                    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required />
                    <div class="invalid-feedback">
             
                    </div>
                </div>
            </div>

             <div class="col-md-3">
                <div class="form-group control-label">
                    <label for="idcard">14.เลขบัตรประชาชน</label>
                </div>
            </div>
            
            <div class="col-lg-9">
                <div id="idcard" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The idcard field is not a valid" data-val-required="The idcard field is required." id="idcard" name="idcard" placeholder="เลขบัตรประชาชน" type="number" value="" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="13" required />
                    <div class="invalid-feedback">
              
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group control-label">
                    <label for="Date_of_issue">15.วันที่ออกบัตรประชาชน(ว/ด/ป)</label>
                </div>
            </div>

            <div class="col-lg-8">
                <div id="Date_of_issue" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The Date_of_issue field is not a valid" data-val-required="The Date_of_issue field is required." id="Date_of_issue" name="Date_of_issue" placeholder="วันที่ออกบัตรประชาชน(ว/ด/ป)" type="date" value="" required />
                   <div class="invalid-feedback">
                      
                    </div>
                    <div class="valid-feedback">
                      
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group control-label">
                    <label for="expire_date">16.วันที่หมดอายุบัตรประชาชน(ว/ด/ป)</label>
                </div>
            </div>

            <div class="col-lg-8">
                <div id="expire_date" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The expire_date field is not a valid" data-val-required="The expire_date field is required." id="expire_date" name="expire_date" placeholder="วันที่หมดอายุบัตรประชาชน(ว/ด/ป)" type="date" value="" required />
                    <div class="invalid-feedback">
                      
                    </div>
                     <label id="expire_dateError" class="text-danger">หมายเหตุ:สำเนาเอกสารที่แนบเข้ามาจะต้องเป็นความจริงและสำเนาบัตรประชาชนยังไม่หมดอายุ</label>
                </div>
            </div>
        </div>

        <div class="row">
        <div class="col-md-3">
                <div class="form-group control-label">
                    <label for="address">17.ที่อยู่ตามบัตรประชาชน:</label>
                </div>
            </div>
         </div>

          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="address">รายละเอียด:ล็อคห้อง</label>
              <input type="text" name="detailroom" class="form-control" id="building">
            </div>

            <div class="form-group col-md-2">
              <label for="floor">ชั้น</label>
              <input type="text" name="floorconf" class="form-control" id="floor">
            </div>

            <div class="form-group col-md-4">
              <label for="building">อาคาร</label>
              <input type="text" name="buildingconf" class="form-control" id="inputCity">
            </div>

            <div class="form-group col-md-2">
              <label for="NO.">เลขที่</label>
              <input type="number" name="NO_conf" class="form-control" id="NO.">
            </div>

            <div class="form-group col-md-4">
              <label for="soi">ซอย</label>
              <input type="text" name="soi_conf" class="form-control" id="soi">
            </div>

            <div class="form-group col-md-3">
              <label for="moo">หมู่ที่</label>
              <input type="text" name="moo_conf" class="form-control" id="moo">
            </div>
            <div class="form-group col-md-5">
              <label for="street">ถนน</label>
              <input type="text" name="street_conf" class="form-control" id="street">
            </div>

            <div class="form-group col-md-4">
              <label for="tambon">ตำบล/แขวง</label>
              <input type="text" name="tambon_conf" class="form-control" id="tambon">
            </div>

            <div class="form-group col-md-3">
              <label for="district">อำเภอ/เขต</label>
              <input type="text" name="district_conf" class="form-control" id="district">
            </div>
            <div class="form-group col-md-5">
              <label for="province">จังหวัด</label>
              <input type="text" name="province_conf" class="form-control" id="province">
            </div>

             <div class="form-group col-md-5">
              <label for="region">ภูมิภาค</label>
              <input type="text" name="region_conf" class="form-control" id="region">
            </div>
            <div class="form-group col-md-7">
              <label for="zipcode_conf">รหัสไปรษณีย์</label>
              <input type="number" name="zipcode_conf" class="form-control" id="zipcode_conf" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="5" required />
              <div class="invalid-feedback">
                      
              </div>
            </div>



          </div>

           <div class="row">
        <div class="col-md-5">
                <div class="form-group control-label">
                    <label for="vatAdd">18.ที่อยู่ในการจัดส่งเอกสารภาษีหัก ณ ที่จ่าย:</label>
                </div>
            </div>
         </div>

          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="vatAdd">รายละเอียด:ล็อคห้อง</label>
              <input type="text" class="form-control" id="vatAdd" name="dtvatAdd">
            </div>

            <div class="form-group col-md-2">
              <label for="floor">ชั้น</label>
              <input type="text" name="floor_vatadd" class="form-control" id="floor">
            </div>

            <div class="form-group col-md-4">
              <label for="building">อาคาร</label>
              <input type="text" name="building_vatadd" class="form-control" id="building">
            </div>

            <div class="form-group col-md-2">
              <label for="NO_vatadd">เลขที่</label>
              <input type="text" name="NO_vatadd" class="form-control" id="NO_vatadd">
            </div>

            <div class="form-group col-md-4">
              <label for="soi">ซอย</label>
              <input type="text" name="soi_vatadd" class="form-control" id="soi">
            </div>

            <div class="form-group col-md-3">
              <label for="moo">หมู่ที่</label>
              <input type="text" name="moo_vatadd" class="form-control" id="moo">
            </div>
            <div class="form-group col-md-5">
              <label for="street">ถนน</label>
              <input type="text" name="street_vatadd" class="form-control" id="street">
            </div>

            <div class="form-group col-md-4">
              <label for="tambon">ตำบล/แขวง</label>
              <input type="text" name="tambon_vatadd" class="form-control" id="tambon">
            </div>

            <div class="form-group col-md-3">
              <label for="district">อำเภอ/เขต</label>
              <input type="text" name="district_vatadd" class="form-control" id="district">
            </div>
            <div class="form-group col-md-5">
              <label for="province">จังหวัด</label>
              <input type="text" name="province_vatadd" class="form-control" id="province">
            </div>

             <div class="form-group col-md-5">
              <label for="region">ภูมิภาค</label>
              <input type="text" name="region_vatadd" class="form-control" id="region">
            </div>

            <div class="form-group col-md-7">
              <label for="zipcode">รหัสไปรษณีย์</label>
              <input type="number" name="zipcode_vatadd" class="form-control" id="zipcode" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="5" required />
              <div class="invalid-feedback">
                      
              </div>
            </div>
        </div>

          <div class="row">
        <div class="col-md-5">
                <div class="form-group control-label">
                    <label for="baccount">19.บัญชีธนาคาร(ต้องเป็นบัญชีออกทรัพย์เท่านั้น)</label>
                </div>
            </div>
         </div>

          <div class="form-row">
            <div class="form-group col-md-7">
              <label for="baccountid">หมายเลขบัญชี</label>
              <input type="number" name="baccountid" class="form-control" id="baccountid" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="13" required />
            </div>

            <div class="form-group col-md-5">
              <label for="bank">ธนาคาร</label>
              <input type="text" name="bankname" class="form-control" id="accountname">
            </div>

            <div class="form-group col-md-5">
              <label for="accountname">ชื่อบัญชี</label>
              <input type="text" name="accountname" class="form-control" id="accountname">
            </div>

            <div class="form-group col-md-7">
              <label for="offset">สาขา</label>
              <input type="text" name="boffset" class="form-control" id="offset">
            </div>
          </div>

            <!-- button -->
    <input type="button" name="previous" class="previous btn btn-default" value="Previous" style="display: inline; 
    width:150px; margin: 5px 5px 5px 5px; background-color: #7F3E98; color: #ffffff;"/>
    <input type="button" name="next" class="next btn btn-info" value="Next" style="display: inline; width:150px; 
    margin: 5px 5px 5px 5px; background-color: #7F3E98;"/>

  </fieldset>

  <fieldset id="regiration_form">
    <h6><b>3: Retail Excellence</b></h6>

    <div class="row">
            <div class="col-md-2">
                <div class="form-group control-label">
                    <label for="nameLastname">1.ชื่อ-นามสกุล</label>
                </div>
            </div>

            <div class="col-lg-4">
                <div id="nameLastname" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The Name andLastname field is not a valid" data-val-required="The Name and Lastname field is required." id="txtnameLastname" name="rexnameLastname" placeholder="ชื่อ-นามสกุล" type="text" value="" />
                    <label id="nameLastnameError" class="text-danger" hidden>กรุณาใส่ชื่อ-นามสกุลให้ถูกต้อง</label>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group control-label">
                    <label for="emploid">รหัสพนักงาน</label>
                </div>
            </div>

            <div class="col-lg-4">
                <div id="emploid" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The employee id field is not a valid" data-val-required="The employee id field is required." id="emploid" name="emploid" placeholder="รหัสพนักงาน" type="text" value="" />
                    <label id="emploid" class="text-danger" hidden>กรุณาใส่รหัสพนักงานให้ถูกต้อง</label>
                </div>
            </div>
        </div>

        <div class="form-group row">
           
            <div class="col-md-3">
                <div class="form-group control-label">
                    <label for="getphone">2.เบอร์โทรที่สามารถติดต่อได้</label>
                </div>
            </div>
            
            <div class="col-lg-9">
                <div id="getphone" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The ENnameLastname field is not a valid" data-val-required="The phone field is required." id="getphone" name="getphone" placeholder="เบอร์โทรที่สามารถติดต่อได้" type="number" value=""  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required />
                    <label id="getphone" class="text-danger" hidden>กรุณาใส่เบอร์โทรที่สามารถติดต่อได้</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group control-label">
                    <label for="location">3.Location</label>
                </div>
            </div>

            <div class="col-lg-5">
                <div id="location" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The location field is not a valid" data-val-required="The location field is required." id="location" name="location" placeholder="Location" type="text" value="" />
                    <label id="location" class="text-danger" hidden>กรุณาใส่ Location ให้ถูกต้อง</label>
                </div>
            </div>

            <div class="col-md-1">
                <div class="form-group control-label">
                    <label for="region">Region</label>
                </div>
            </div>

            <div class="col-lg-4">
                <div id="region" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The Region field is not a valid" data-val-required="The Region field is required." id="region" name="rexregion" placeholder="Region" type="text" value="" />
                    <label id="region" class="text-danger" hidden>กรุณาใส่ Region ให้ถูกต้อง</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group control-label">
                    <label for="cause">4.สาเหตุในการส่งเอกสารครั้งนี้</label>
                </div>
            </div>

            <div class="col-lg-9">
                <div id="cause" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The Document field is not a valid" data-val-required="The Document field is required." id="cause" name="doc" placeholder="สาเหตุในการส่งเอกสารครั้งนี้" type="text" value="" />
                    <label id="doc" class="text-danger" hidden>กรุณาใส่สาเหตุในการส่งเอกสารให้ถูกต้อง</label>
                </div>
            </div>

            <div class="col-md-5">
                <div class="form-group control-label">
                    <label for="cfdud">(Cut of Document/Update Document)วันที่</label>
                </div>
            </div>

            <div class="col-lg-7">
                <div id="cfdud" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The date field is not a valid" data-val-required="The date field is required." id="cfdud" name="cfdud" placeholder="วันที่" type="date" value="" />
                    <label id="cfdud" class="text-danger" hidden>กรุณาใส่วันที่ให้ถูกต้อง</label>
                </div>
            </div>


        </div>

           <!--  button -->
    <input type="button" name="previous" class="previous btn btn-default" value="Previous" style="display: inline; 
    width:150px; margin: 5px 5px 5px 5px; background-color: #7F3E98; color: #ffffff;"/>
    <input type="submit" name="submit" class="next btn btn-info" value="ยืนยัน" onclick="doPreview();" style="display: inline; width:150px; 
    margin: 5px 5px 5px 5px; background-color: #7F3E98;"/>

  </fieldset>

   <!-- <fieldset>

                <!-- correct check -->
		<!-- <div class="row justify-content-center">
            <div class="card justify-content-center">
                <div class="card-body justify-content-center">
                    <blockquote class="blockquote mb-0 justify-content-center">
                        <i class="far fa-check-circle" style="font-size: 50px; color: #64DD17;" align="center"></i>
                        <br>
                    </blockquote>
                </div>
            </div>
        </div>
        <br>
        <br>
        <h3 style="text-align: center;">ข้อมูลของคุณไดรับการยืนยันแล้ว</h3>
        <br>
        <br>
        <br> -->
</form>
</div>
<!-- all js script -->
<script src="script.js"></script>
<script type="text/javascript">
     function doPreview()
    {
        form=document.getElementById('#regiration_form');
        form.submit();
        form.action='getdata.php';
        form.target='';
    }
</script>
</body>
</html>