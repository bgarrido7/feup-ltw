<?php
include_once('../includes/init.php');
include_once('../database/rents.php');

$houseID=$_POST['houseID'];
$init=$_POST['init'];
$end=$_POST['end'];
$touristID=$_POST['touristID'];

if(strcmp($init,$end)>=0){
    echo "departure date must be after arrival date";
    ?>
      <form action="../pages/house.php" method="post" >
        <input type="hidden" name="id" value="<?php echo $houseID; ?>"/>
            <input type="submit" value="try again" />
            </form>
<?php
}
else {
$datetime1 = strtotime(date('Y-m-d', strtotime($init)));
$datetime2 = strtotime(date('Y-m-d', strtotime($end)));

//só conta em dias
$stayLength = ($datetime2 - $datetime1) /(24*60*60); //para tirar as horas e minutos 
addDates($touristID, $houseID, $init, $stayLength) ;

}
header('Location:  ../pages/homepage.php');

?>