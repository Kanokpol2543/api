
<?php 
session_start();
include_once("connect_TU_test.php");
//if(isset($_post['submit'])){
	if ($err) {
  echo "cURL Error #:" . $err;
} else {
	if($check['status'] == 'true'){
	$_SESSION['ID'] = $check['displayname_en'];
		//$name = $check['displayname_en'];
		//echo $_POST['ID'];
		//header('location:Loginout.php');
	}else{
		/*echo"<script language=\"JavaScript\">";
		echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
		echo"</script>";*/
		//$num = 'true';
       
		header('location:alert.php');
		
	}
}

	
//}


?>
