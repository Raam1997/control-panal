<?php
$servername = "localhost"; // الخاص بالسيرفر ip اسم السيرفر أو 
$username = "root"; // اسم المستخدم الخاص بقاعدة البيانات
$password = ""; // كلمة المرور الخاصة بقاعدة البيانات
$dbname = "robotdb";         // اسم قاعدة البيانات المراد استخدامها

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

if(isset($_POST['forward'])){

    $my_query = "select * from dirction1 WHERE  ID=1 ";
    $result = mysqli_query($conn, $my_query);



}else if(isset($_POST['right'])){

    $my_query = "select * from dirction1 ID=2 ";
    $result = mysqli_query($conn, $my_query);

   

}else if(isset($_POST['left'])){

    $my_query = "select * from dirction1 ID=3 ";
    $result = mysqli_query($conn, $my_query);



}else if(isset($_POST['stop'])){

    $my_query = "select * from dirction1 ID=5 ";
    $result = mysqli_query($conn, $my_query);

    
}else if(isset($_POST['backward'])){

    $my_query = "select * from dirction1 ID=4 ";
    $result = mysqli_query($conn, $my_query);

   
}
?>