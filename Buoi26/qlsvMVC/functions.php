<?php 
function convertDatetoVNFormat ($date) {

$timestamp = strtotime ($date);
// strtotime: đổi sang đơn vị giây tính từ 1/1/1970
$vnFormatDate = date("d/m/Y", $timestamp );
	return $vnFormatDate;
}

// lấy giới tính
function getGender ($gender) {
	$genderMap 	= [ 0 => "Nam", 1 => "Nữ", 2 => "Không Biết"];
	$genderName = $genderMap [$gender];
	return $genderName;
}


 ?>