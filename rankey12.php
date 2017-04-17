<?php
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
$link = mysql_connect("localhost", "root", "");
mysql_select_db("vedic");
echo "success";
$sql = "update rankey set Password='$randomString'";
if(mysql_query($sql)){

    echo "Records update successfully.";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}
    return $randomString;

}
echo generateRandomString();
