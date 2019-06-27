<!DOCTYPE html>
<html>
<head>
	<title>3</title>
</head>
<body>
	

<!-- Content! -->
	<div class="container">
		
		<form action="" method="">
			<!-- aniamte -->
			<div class="page-icon animated bounceInDown">
                    <!-- <img src="/img/login-questionmark-icon.png" alt="Key icon"> -->
                    <i class="fas fa-question" style="font-size:36px; padding-top: 30px; color: #ffffff;"></i>
            </div>
			
			 <div class="d-flex justify-content-center">
             <ul class="list-group list-group-horizontal" algn="center">
                <li class="list-group-item col-md-3">
                    <span class="step" style="border: 3px solid #009EFB; color: #009EFB;">1</span>
                <br>
                <br>
                <p class="col-lg-10" style="color: #009EFB;">ข้อมูลทั่วไปของร้านค้า</p>

                </li>

                <li class="list-group-item col-md-3">
                    <span class="step" style="border: 3px solid #009EFB; color: #009EFB;">2</span>
                <br>
                <br><p class="col-lg-12" style="color: #009EFB;">รายละเอียดของผู้รับผลตอบแทน</p>
                </li>
                <li class="list-group-item col-md-3">
                    <span class="step">3</span>
                <br>
                <br><p class="col-lg-10">Retail Excellence</p>
                </li>
                <li class="list-group-item col-md-3">
                    <span class="step" style="border: 3px solid #F3F3F3; color: #999999;">4</span>
                <br>
                <br><p class="col-lg-10" style="color: #999999;">ยืนยัน</p>
                </li>
             </ul>
              
          </div>

			<hr style="color: #F5F5F5; 2px;">


		<div class="row">
			<div class="col-md-2">
                <div class="form-group control-label">
                    <label for="Email">1.ชื่อ-นามสกุล</label>
                </div>
            </div>

            <div class="col-lg-4">
            	<div id="nameLastname" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The Name andLastname field is not a valid" data-val-required="The Name and Lastname field is required." id="txtnameLastname" name="THnameLastname" placeholder="ชื่อ-นามสกุล" type="text" value="" />
                    <label id="THnameLastnameError" class="text-danger" hidden>กรุณาใส่ชื่อ-นามสกุลให้ถูกต้อง</label>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group control-label">
                    <label for="Email">รหัสพนักงาน</label>
                </div>
            </div>

            <div class="col-lg-4">
            	<div id="emploid" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The employee id field is not a valid" data-val-required="The employee id field is required." id="txtemploid" name="emploid" placeholder="รหัสพนักงาน" type="text" value="" />
                    <label id="emploidError" class="text-danger" hidden>กรุณาใส่รหัสพนักงานให้ถูกต้อง</label>
                </div>
            </div>
        </div>

        <div class="form-group row">
		   
		    <div class="col-md-3">
                <div class="form-group control-label">
                    <label for="Email">2.เบอร์โทรที่สามารถติดต่อได้</label>
                </div>
            </div>
		    
		    <div class="col-lg-9">
            	<div id="ENnameLastname" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The ENnameLastname field is not a valid" data-val-required="The ENnameLastname field is required." id="ENnameLastname" name="ENnameLastname" placeholder="เบอร์โทรที่สามารถติดต่อได้" type="text" value="" />
                    <label id="ENnameLastnameError" class="text-danger" hidden>กรุณาใส่เบอร์โทรที่สามารถติดต่อได้</label>
                </div>
            </div>
		</div>
		<div class="row">
			<div class="col-md-2">
                <div class="form-group control-label">
                    <label for="Email">3.Location</label>
                </div>
            </div>

            <div class="col-lg-5">
            	<div id="location" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The location field is not a valid" data-val-required="The location field is required." id="txtlocation" name="location" placeholder="Location" type="text" value="" />
                    <label id="locationError" class="text-danger" hidden>กรุณาใส่ Location ให้ถูกต้อง</label>
                </div>
            </div>

            <div class="col-md-1">
                <div class="form-group control-label">
                    <label for="Email">Region</label>
                </div>
            </div>

            <div class="col-lg-4">
            	<div id="Region" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The Region field is not a valid" data-val-required="The Region field is required." id="txtRegion" name="Region" placeholder="Region" type="text" value="" />
                    <label id="RegionError" class="text-danger" hidden>กรุณาใส่ Region ให้ถูกต้อง</label>
                </div>
            </div>
        </div>

        <div class="row">
			<div class="col-md-3">
                <div class="form-group control-label">
                    <label for="Email">4.สาเหตุในการส่งเอกสารครั้งนี้</label>
                </div>
            </div>

            <div class="col-lg-9">
            	<div id="doc" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The Document field is not a valid" data-val-required="The Document field is required." id="txtdoc" name="doc" placeholder="สาเหตุในการส่งเอกสารครั้งนี้" type="text" value="" />
                    <label id="docError" class="text-danger" hidden>กรุณาใส่สาเหตุในการส่งเอกสารให้ถูกต้อง</label>
                </div>
            </div>

            <div class="col-md-5">
                <div class="form-group control-label">
                    <label for="Email">(Cut of Document/Update Document)วันที่</label>
                </div>
            </div>

            <div class="col-lg-7">
            	<div id="date" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The date field is not a valid" data-val-required="The date field is required." id="txtdate" name="date" placeholder="วันที่" type="date" value="" />
                    <label id="dateError" class="text-danger" hidden>กรุณาใส่วันที่ให้ถูกต้อง</label>
                </div>
            </div>


        </div>

		  <div class="form-group">
		  	<div class="div-login" style="margin: auto;text-align: center;">
		  		<a class="<?php active('btn_prev3'); ?>" href="index.php?page=btn_prev3" 
		  			style="text-decoration: none;">
                	<button type="button" style="display: inline;width:150px;margin: 5px 5px 5px 5px; background-color: #7F3E98; text-decoration: none;" id="cancel-form" class="btn btn-primary" onclick="javascript:gotoLoginpage()">กลับสู่หน้าหลัก</button>
             	</a>
             	<a class="<?php active('btn_back'); ?>" href="index.php?page=btn_back" style="text-decoration: none;">  
                	<button type="button" 
                	style="display: inline;
                	width:150px;margin: 5px 5px 5px 5px; 
                	background-color: #7F3E98;
                	text-decoration: none;" id="previous-step" class="btn btn-primary disabled" onclick="javascript:PreviousStep()" disabled>ย้อนกลับ</button>
               	</a>
               	<a class="<?php active('btn_confirm'); ?>" href="index.php?page=btn_confirm" style="text-decoration: none;">  
               		<button type="button" 
               		style="display: inline;
               		width:150px;
               		margin: 5px 5px 5px 5px;
               		background-color: #7F3E98;
               		text-decoration: none;" id="next-step" class="btn btn-primary" onclick="javascript:NextStep()">ยืนยัน
               		</button>
                </a>
            </div>
          </div>

<!-- </div> -->
</form>

	</div>

</body>
</html>