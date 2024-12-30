<?php 
$conn = mysqli_connect("localhost", "root", "", "puskesmas");

function tampil($query){
    global $conn;
    $array  = [];
    $result = mysqli_query($conn, $query);
    while($arr = mysqli_fetch_assoc($result)){
        $array [] = $arr;
    } 
    return $array;
}

?>