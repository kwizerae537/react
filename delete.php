<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $sql="DELETE FROM operation";
    
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:select.php');
    }
    
        echo "not deleted well";
    
}
?>