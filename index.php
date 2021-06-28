
<?php

$servername = "localhost"; // الخاص بالسيرفر ip اسم السيرفر أو 
$username = "root"; // اسم المستخدم الخاص بقاعدة البيانات
$password = ""; // كلمة المرور الخاصة بقاعدة البيانات
$dbname = "robotdb";// اسم قاعدة البيانات المراد استخدامها

// انشاء الاتصال بالقاعدة
$conn = new mysqli($servername, $username, $password);

// هذا المتغير الخاص بالاتصال سوف نحتاجه في اي عملية نرغب بإجرائها على قاعدة البيانات $conn 
// التأكد من عملية الاتصال بقاعدة البيانات 
if ($conn->connect_error)
{
    echo "توجد مشكلة في الاتصال: " . $conn->connect_error;
}
else
{
echo "تم الاتصال بنجاح";
}
	$v1=$_POST[v1];
	$v2=$_POST[v2];
	$v3=$_POST[v3];
	$v4=$_POST[v4];
	$v5=$_POST[v5];
	$v6=$_POST[v6];
if(isset($_POST['run'])) {
	$read_data = $conn->query("SELECT * FROM motors LIMIT 1");
	

}

if(isset($_POST['save'])){
	$inser_data = $conn -> query("INSERT INTO motors (m1, m2, m3, m4, m5, m6)
VALUES ('$v1', '$v2', '$v3', '$v4', '$v5', '$v6')");
if (($inser_data) === TRUE) {
    echo "تم إضافة البيانات للجدول";
}
else
{
    echo " خطأ، لم يتم اضافة البيانات :". $conn->error;
}
}

?>