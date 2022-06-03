<?php
    include "config.php";

    $id = $_GET['id'];
    
    $sql = "SELECT * FROM student WHERE studentID = '$id'";

    if($result = $conn->query($sql))
    {
        $row = $result->fetch_assoc();

        $id = $row['studentID'];
        $nome = $row['nome'];
        $cpf= $row['cpf'];
        $endi = $row['endi'];
        $telefone = $row['telefone'];
        $email = $row['email'];
        $senha = $row['senha'];
        $image = $row['imgLoc'];

    }
    else
    { 
        echo "Fail";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Menu</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <div class = "container">
            <div class="buttons">
                <button><a href="listar.php">Home</a></button>
            </div>
            <div class = "editdetails box">
            <div class = "border">
                <img src="<?php echo $image ?>" alt="" class = "editimage">

                <form action="editStudentValidate.php?oldID=<?php echo $id?>" method = "POST" enctype = "multipart/form-data">
                    <p> ID : <input type="text" name = "id" value = "<?php echo $id ?>"></p><br>
                    <p> Nome : <input type="text" name = "nome" value = "<?php echo $nome ?>"></p><br>
                    <p> Cpf : <input type="text" name = "cpf" value = "<?php echo $cpf ?>"></p><br>
                    <p> Endereço : <input type="text" name = "endi"value = "<?php echo $endi ?>"></p><br>
                    <p> Telefone : <input type="text" name = "telefone"value = "<?php echo $telefone ?>"></p><br>
                    <p> E-mail : <input type="text" name = "email" value = "<?php echo $email ?>"></p><br>
                    <p> Senha : <input type="text" name = "senha" value = "<?php echo $senha ?>"></p><br>
                    <p>Student Image : <input type="file" name = "image" value = "<?php echo $image ?>"></p><br>

                    <input type="submit" value = "Editar" class = "button">
                </form>

            </div>

        </div>

        </div>
    </body>
</html>