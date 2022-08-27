<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Max-Age: 1000');
include 'koneksi.php';
date_default_timezone_set('Asia/Jakarta');

$q = explode(",",$_REQUEST["q"]);
$sql = "SELECT user_name, jabatan FROM tb_user WHERE user_name = '$q[0]' AND user_pass = '$q[1]'";

$myObj = new stdClass();
if ($result=mysqli_query($con,$sql)){
	while ($row=mysqli_fetch_assoc($result)){
		if($row['user_name']){
			$_sql = "SELECT CASE WHEN COUNT(1) > 0 THEN 1 ELSE 0 END as result FROM tb_user WHERE user_name = '$q[0]' AND status = '1'";
			if ($_result=mysqli_query($con,$_sql)){
				while ($_row=mysqli_fetch_assoc($_result)){
					if($_row['result']){
						mysqli_query($con, "UPDATE tb_user SET user_update = '".date("Y-m-d H:i:s")."' WHERE user_name = '$q[0]'");
						$myObj->username = $row['user_name'];
						$myObj->userjabatan = $row['jabatan'];
						$myObj->status = '1';
					} else {
						$myObj->status = '0';
					}
				}
			}
		}
	}
	echo json_encode($myObj);
}
?>