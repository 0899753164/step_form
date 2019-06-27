<!DOCTYPE html>
<html>
<head>
	<title>2</title>
</head>
<body>
	<!-- header -->


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
                    <span class="step">2</span>
                <br>
                <br><p class="col-lg-12">รายละเอียดของผู้รับผลตอบแทน</p>
                </li>
                <li class="list-group-item col-md-3">
                    <span class="step" style="border: 3px solid #F3F3F3; color: #999999;">3</span>
                <br>
                <br><p class="col-lg-10" style="color: #999999;">Retail Excellence</p>
                </li>
                <li class="list-group-item col-md-3">
                    <span class="step" style="border: 3px solid #F3F3F3; color: #999999;">4</span>
                <br>
                <br><p class="col-lg-10" style="color: #999999;">ยืนยัน</p>
                </li>
             </ul>
              
          </div>
		
			<hr style="color: #F5F5F5; 2px;">

		 <div class="form-check form-check-inline col-lg-3">
		  <label class="form-check-label" for="inlineCheckbox1">11.คำนำหน้าชื่อ</label>
		</div>

		<div class="form-check form-check-inline col-lg-2">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		  <label class="form-check-label" for="inlineCheckbox2">นาย(Mr.)</label>
		</div>


		<div class="form-check form-check-inline col-lg-2">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		  <label class="form-check-label" for="inlineCheckbox2">นาง(Mrs.)</label>
		</div>


		<div class="form-check form-check-inline col-lg-2">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		  <label class="form-check-label" for="inlineCheckbox2">นางสาว(Miss)</label>
		</div><br>
		<br>
		<br>	

		<div class="row">
			<div class="col-md-5">
                <div class="form-group control-label">
                    <label for="Email">12.ชื่อ-นามสกุล(<u>ภาษาไทย</u>ไม่ต้องมีคำนำหน้าชื่อ)</label>
                </div>
            </div>

            <div class="col-lg-7">
            	<div id="THnameLastname" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The Name andLastname field is not a valid" data-val-required="The Name and Lastname field is required." id="txtnameLastname" name="THnameLastname" placeholder="ชื่อ-นามสกุล" type="text" value="" />
                    <label id="THnameLastnameError" class="text-danger" hidden>กรุณาใส่ชื่อ-นามสกุลให้ถูกต้อง</label>
                </div>
            </div>
        </div>

        <div class="form-group row">
		   
		    <div class="col-md-5">
                <div class="form-group control-label">
                    <label for="Email">13.ชื่อ-นามสกุล(<u>ภาษาอังกฤษ</u>ไม่ต้องมีคำนำหน้าชื่อ)</label>
                </div>
            </div>
		    
		    <div class="col-lg-7">
            	<div id="ENnameLastname" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The ENnameLastname field is not a valid" data-val-required="The ENnameLastname field is required." id="ENnameLastname" name="ENnameLastname" placeholder="ชื่อ-สกุลภาษาอังกฤษ" type="text" value="" />
                    <label id="ENnameLastnameError" class="text-danger" hidden>กรุณาใส่ชื่อ-สกุล</label>
                </div>
            </div>

             <div class="col-md-3">
                <div class="form-group control-label">
                    <label for="">14.เลขบัตรประชาชน</label>
                </div>
            </div>
		    
		    <div class="col-lg-9">
            	<div id="idcard" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The idcard field is not a valid" data-val-required="The idcard field is required." id="txtidcard" name="idcard" placeholder="เลขบัตรประชาชน" type="text" value="" maxlength="13" />
                    <label id="idcardError" class="text-danger" hidden>กรุณาใส่เลขบัตรประชาชน</label>
                </div>
            </div>

		</div>

		<div class="row">
			<div class="col-md-4">
                <div class="form-group control-label">
                    <label for="Email">15.วันที่ออกบัตรประชาชน(ว/ด/ป)</label>
                </div>
            </div>

            <div class="col-lg-8">
            	<div id="Date_of_issue" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The Date_of_issue field is not a valid" data-val-required="The Date_of_issue field is required." id="txtDate_of_issue" name="Date_of_issue" placeholder="วันที่ออกบัตรประชาชน(ว/ด/ป)" type="date" value="" />
                    <label id="Date_of_issueError" class="text-danger" hidden>กรุณาใส่วันที่ออกบัตรให้ถูกต้อง</label>
                </div>
            </div>
        </div>

        <div class="row">
			<div class="col-md-4">
                <div class="form-group control-label">
                    <label for="Email">16.วันที่หมดอายุบัตรประชาชน(ว/ด/ป)</label>
                </div>
            </div>

            <div class="col-lg-8">
            	<div id="expire_date" class="form-group">
                    <input class="form-control" data-val="true" data-val-name="The expire_date field is not a valid" data-val-required="The expire_date field is required." id="txtexpire_date" name="expire_date" placeholder="วันที่หมดอายุบัตรประชาชน(ว/ด/ป)" type="date" value="" />
                    <label id="expire_dateError" class="text-danger" hidden>กรุณาใส่วันที่หมดอายุบัตรให้ถูกต้อง</label>
                     <label id="expire_dateError" class="text-danger">หมายเหตุ:สำเนาเอกสารที่แนบเข้ามาจะต้องเป็นความจริงและสำเนาบัตรประชาชนยังไม่หมดอายุ</label>
                </div>
            </div>

        </div>

        <div class="row">
        <div class="col-md-3">
                <div class="form-group control-label">
                    <label for="Email">17.ที่อยู่ตามบัตรประชาชน:</label>
                </div>
            </div>
         </div>

		  <div class="form-row">
		  	<div class="form-group col-md-4">
		      <label for="inputCity">รายละเอียด:ล็อคห้อง</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>

		    <div class="form-group col-md-2">
		      <label for="inputState">ชั้น</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>

		    <div class="form-group col-md-4">
		      <label for="inputState">อาคาร</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>

		    <div class="form-group col-md-2">
		      <label for="inputState">เลขที่</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>

		    <div class="form-group col-md-4">
		      <label for="inputState">ซอย</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>

		    <div class="form-group col-md-3">
		      <label for="inputState">หมู่ที่</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>
		    <div class="form-group col-md-5">
		      <label for="inputState">ถนน</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>

		    <div class="form-group col-md-4">
		      <label for="inputState">ตำบล/แขวง</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>

		    <div class="form-group col-md-3">
		      <label for="inputState">อำเภอ/เขต</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>
		    <div class="form-group col-md-5">
		      <label for="inputState">จังหวัด</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>

		     <div class="form-group col-md-5">
		      <label for="inputState">ภูมิภาค</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>
		    <div class="form-group col-md-7">
		      <label for="inputState">รหัสไปรษณีย์</label>
		      <input type="number" class="form-control" id="inputCity">
		    </div>



		  </div>

		   <div class="row">
        <div class="col-md-5">
                <div class="form-group control-label">
                    <label for="Email">18.ที่อยู่ในการจัดส่งเอกสารภาษีหัก ณ ที่จ่าย:</label>
                </div>
            </div>
         </div>

		  <div class="form-row">
		  	<div class="form-group col-md-4">
		      <label for="inputCity">รายละเอียด:ล็อคห้อง</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>

		    <div class="form-group col-md-2">
		      <label for="inputState">ชั้น</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>

		    <div class="form-group col-md-4">
		      <label for="inputState">อาคาร</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>

		    <div class="form-group col-md-2">
		      <label for="inputState">เลขที่</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>

		    <div class="form-group col-md-4">
		      <label for="inputState">ซอย</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>

		    <div class="form-group col-md-3">
		      <label for="inputState">หมู่ที่</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>
		    <div class="form-group col-md-5">
		      <label for="inputState">ถนน</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>

		    <div class="form-group col-md-4">
		      <label for="inputState">ตำบล/แขวง</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>

		    <div class="form-group col-md-3">
		      <label for="inputState">อำเภอ/เขต</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>
		    <div class="form-group col-md-5">
		      <label for="inputState">จังหวัด</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>

		     <div class="form-group col-md-5">
		      <label for="inputState">ภูมิภาค</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>
		    <div class="form-group col-md-7">
		      <label for="inputState">รหัสไปรษณีย์</label>
		      <input type="number" class="form-control" id="inputCity">
		    </div>
		</div>

		  <div class="row">
        <div class="col-md-5">
                <div class="form-group control-label">
                    <label for="Email">19.บัญชีธนาคาร(ต้องเป็นบัญชีออกทรัพย์เท่านั้น)</label>
                </div>
            </div>
         </div>

		  <div class="form-row">
		  	<div class="form-group col-md-7">
		      <label for="inputCity">หมายเลขบัญชี</label>
		      <input type="number" class="form-control" id="inputCity">
		    </div>

		    <div class="form-group col-md-5">
		      <label for="inputState">ธนาคาร</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>

		    <div class="form-group col-md-5">
		      <label for="inputState">ชื่อบัญชี</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>

		    <div class="form-group col-md-7">
		      <label for="inputState">สาขา</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>
		  </div>

		  <div class="form-group">
		  	<div class="div-login" style="margin: auto;text-align: center;">
		  		<a class="<?php active('btn_prev'); ?>" href="index.php?page=btn_prev" style="text-decoration: none;">
                	<button type="button" style="display: inline;width:150px;margin: 5px 5px 5px 5px; background-color: #7F3E98;" id="cancel-form" class="btn btn-primary" onclick="javascript:gotoLoginpage()">กลับสู่หน้าหลัก</button>
             	</a>
             	<a class="<?php active('btn_back'); ?>" href="index.php?page=btn_back" style="text-decoration: none;">  
                	<button type="button" style="display: inline;width:150px;margin: 5px 5px 5px 5px; background-color: #7F3E98;" id="previous-step" class="btn btn-primary disabled" onclick="javascript:PreviousStep()" disabled>ย้อนกลับ</button>
               	</a>
               	<a class="<?php active('btn_continue_3'); ?>" href="index.php?page=btn_continue_3" style="text-decoration: none;">  
               		<button type="button" style="display: inline;width:150px;margin: 5px 5px 5px 5px; background-color: #7F3E98;" id="next-step" class="btn btn-primary" onclick="javascript:NextStep()">ถัดไป
               		</button>
                </a>
            </div>
          </div>

<!-- </div> -->
</form>

	</div>

</body>
</html>