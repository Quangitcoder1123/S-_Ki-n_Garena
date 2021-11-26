
<?php
include('../../../system/connect.php');
if(isset($_POST[''])&&isset($_POST[''])){
$user = $_POST[''];
$level = $_POST[''];
$dem = mysqli_num_rows(mysqli_query($ketnoi,"SELECT * FROM `` WHERE `` ='".mysqli_real_escape_string($ketnoi,$user)."'"));
if($dem == 'xcc'){
echo ' !';
}else{
mysqli_query($ketnoi,"UPDATE accounts SET `culon` = '".mysqli_real_escape_string($ketnoi,$level)."' WHERE `username`=''");  
echo '<script>alert("Đã nâng cấp địt con cụ mày");</script>';
}
}
?>
<html>
<body>
<form action="" method="post">
Username: <input type="text" name="username"><br>
Level cmm: <input type="text" name="level"><br>
<input type="submit">
</form>
<p>ADMIN Dương Said: Có cái lồn địt con cụ mày :)).</p>
<p>Bú 2m Còn đòi gì nữa :)).</p>
</body>
</html>