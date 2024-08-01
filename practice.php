
<?php 
class dred{

    public static $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

    public static function generateRandomString($length) {
         $randomString = 'GZ';
         for ($i = 0; $i < $length; $i++) {
             $randomString .= self::$characters[rand(0, strlen(self::$characters) - 1)];
         }
     
         return $randomString;
     }

}
 
$number='0123456789';

function generateTelNumber($len){
    $Countrycode = '024';
     

    for($i=0;$i<$len;$i++){
        global $number;
        $Countrycode.=$number[rand(0,strlen($number))-1];
    }
     $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "telelines";
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Insert the generated phone number into the database
    $sql = "INSERT INTO mtn (number) VALUES ('$Countrycode')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    return $Countrycode;

}
ini_set('max_input_vars', 3000);

//$ticketId = dred:: generateRandomString(10);
//echo $ticketId;

echo dred::generateRandomString(10);  
echo "<br>";
for($y=0;$y<1000;$$y++){
echo generateTelNumber(7);


}
//echo generateTelNumber(7);






?>
