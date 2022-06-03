<?php
    include "config.php";


    $oldID = $_GET['oldID'];
    $newID = $_POST['id'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endi = $_POST['endi'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $image = $_FILES['image'];
    $imgname = $_FILES['image']['name'];
    $targetDir = 'img/profile/';

    $extention = pathinfo($imgname , PATHINFO_EXTENSION);
    $rand_val = date('YMDHIS') . rand(11111, 99999);
    $targetFile = $targetDir.md5($rand_val).'.'.$extention;

    if (isset($_FILES['image']))
    {
        if(move_uploaded_file($_FILES['image']['tmp_name'] , $targetFile))
        {
            echo 'pass image';
        }
        else
        {
            echo 'fail image';
            $fail = true;
        }
    }
    else
    {
        echo 'upload failed';
    }

    echo $targetFile;
    
    if($fail)
    {
        $sql = "UPDATE student SET studentID = '$newID' , nome = '$nome' , cpf = '$cpf' , endi = '$endi' ,  telefone = '$telefone'   email = '$email'  senha = '$senha' WHERE studentID = '$oldID'";
    }
    else
    {
        $sql = "UPDATE student SET studentID = '$newID' , nome = '$nome' , cpf = '$cpf' , endi = '$endi' ,  telefone = '$telefone'   email = '$email'  senha = '$senha' WHERE studentID = '$oldID'";
    }


    
    if($conn->query($sql))
    {
        echo "done";
        header("Location:listar.php?status=pass");
    }
    else
    {
        echo "Error";
        header("Location:listar.php?status=fail");
    }

    $conn->$close();
?>