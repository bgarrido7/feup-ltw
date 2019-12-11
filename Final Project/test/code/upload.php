
<?php
$userID="1";


$target_dir = "../images/users/";

$file = $_FILES['fileToUpload']['name'];
$path = pathinfo($file);
$filename = $path['filename'];

$target_file = ( $target_dir.$userID.".".$path['extension'] ) ;

$source_file = $_FILES["fileToUpload"]["tmp_name"];

if( move_uploaded_file($source_file, $target_file)!==TRUE){
    $_SESSION['error']="error uploading photo";
 //   header("Location: ../pages/register.php");

}
else
//unset($_SESSION['error']);
echo "sucess";

?>
