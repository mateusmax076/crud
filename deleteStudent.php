<?php
    include "config.php";

    $id = $_GET['id'];
    
    $sql = "DELETE FROM student WHERE studentID = '$id'";

    if($conn->query($sql))
    {
        header("Location:listar.php?status=pass");
    }
    else
    {
        header("Location:listar.php?status=fail");
    }
?>