<?php

// test
// $post_data = array(
//   'item' => array(
//     'item_type_id' => 2,
//     'string_key' => 'test',
//     'string_value' => 'Hello',
//     'string_extra' => 'web',
//     'is_public' => 1,
//    'is_public_for_contacts' => 0
//   )
// );

//echo json_encode($post_data)."\n";


// $fields = array(
//   // 'shop' => urlencode($_POST['inlineCheckbox1']),
//   // 'shoptype' => urlencode($_POST['inlineCheckbox2']),
//   'shopname' => urlencode($_POST['shopname']),
//   'ownername' => urlencode($_POST['ownername'])
// );
// consol.log('test');
 // if (isset($_POST['submitconf'])) 
 // {
  if (isset($_POST['submit'])) 
  {
  $response = array(
    'shoptype:' => $_POST['inlineCheckbox1'],
    'shopattr:'=> $_POST['inlineCheckbox2'],
    "shopname:" => $_POST['shopname'],
    "ownername:" => $_POST['ownername'],
    "owncontact:" => $_POST['owncontact'],
    "recipientsname:" => $_POST['recipientsname'],
    "rcpcontact:" => $_POST['rcpcontact'],
    "companyname:" => $_POST['companyname'],
    "vatcomp:" => $_POST['vatcomp'],
    "telshop:" => $_POST['telshop'],
    "email:" => $_POST['email'],
    "rdetail:" => $_POST['rdetail'],
    "floor:" => $_POST['floor'],
    "building:" => $_POST['building'],
    "NO.:" => $_POST['NO_a'],
    "soi:" => $_POST['soi'],
    "moo:" => $_POST['moo'],
    "street:" => $_POST['street'],
    "tambon:" => $_POST['tambon'],
    "district:" => $_POST['district'],
    "province:" => $_POST['province'],
    "region:" => $_POST['region'],
    "zipcode:" => $_POST['zipcode']//,
    // "titlenamecheckbox:" => $_POST[''],
    // "THnameLastname:" => $_POST['THnameLastname'],
    // "ENnameLastname:" => $_POST['ENnameLastname'],
    // "idcard:" => $_POST['idcard'],
    // "Date_of_issue:" => $_POST['Date_of_issue'],
    // "expire_date:" => $_POST['expire_date'],
    // "detailroom:" => $_POST['detailroom'],
    // "floorconf:" => $_POST['floorconf'],
    // "buildingconf:" => $_POST['buildingconf'],
    // "NO_conf:" => $_POST['NO_conf'],
    // "soi_conf:" => $_POST['soi_conf'],
    // "moo_conf:" => $_POST['moo_conf'],
    // "street_conf:" => $_POST['street_conf'],
    // "tambon_conf:" => $_POST['tambon_conf'],
    // "district_conf:" => $_POST['district_conf'],
    // "province_conf:" => $_POST['province_conf'],
    // "region_conf:" => $_POST['region_conf'],
    // "zipcode_conf:" => $_POST['zipcode_conf'],
    // "vatAdd:" => $_POST['dtvatAdd'],
    // "floor_vatadd:" => $_POST['floor_vatadd'],
    // "building_vatadd:" => $_POST['building_vatadd'],
    // "NO_vatadd:" => $_POST['NO_vatadd'],
    // "soi_vatadd:" => $_POST['soi_vatadd'],
    // "moo_vatadd:" => $_POST['moo_vatadd'],
    // "street_vatadd:" => $_POST['street_vatadd'],
    // "tambon_vatadd:" => $_POST['tambon_vatadd'],
    // "district_vatadd:" => $_POST['district_vatadd'],
    // "province_vatadd:" => $_POST['province_vatadd'],
    // "region_vatadd:" => $_POST['region_vatadd'],
    // "zipcode_vatadd:" => $_POST['zipcode_vatadd'],
    // "baccountid:" => $_POST['baccountid'],
    // "bankname:" => $_POST['bankname'],
    // "accountname:" => $_POST['accountname'],
    // "boffset:" => $_POST['boffset'],
    // "rexnameLastname:" => $_POST['rexnameLastname'],
    // "emploid:" => $_POST['emploid'],
    // "getphone:" => $_POST['getphone'],
    // "location:" => $_POST['location'],
    // "rexregion:" => $_POST['rexregion'],
    // "doc:" => $_POST['doc'],
    // "cfdud:" => $_POST['cfdud']
  );

echo json_encode($response);
//print_r($response);



$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://samsungplus-api.podrealm.com/api/Letter",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
    
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "content-type: application/x-www-form-urlencoded",
    "letterdata: test",
    "letterid: 1",
    "postman-token: 0d6d03ef-b00b-4dd4-089f-2a55d7ac6333"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) 
{
  echo "cURL Error #:" . $err;
} 
else if ($response === 'null') 
{
  $response = 'ลงทะเบียนไม่สำเร็จ';
  echo $response;
}
else 
{
  echo $response.'ลงทะเบียนสำเร็จ';
}
}
?>