<?php
    include "config.php";

    $nome = $_POST['nome'];

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
            <div class = "editdetails box results">
            <div class = "border">
                <table>
                <tr>
                        <th>ID</th><th>E-mail</th><th>Telefone</th><th>Nome</th><th>Cpf</th><th>Endereço</th><th>Image</th>
                    </tr>
                    <?php
                       $sql = "SELECT * FROM student WHERE nome LIKE '%$nome%'";
                       $result = $conn->query($sql);

                       if ($result -> num_rows > 0)
                       {
                           while($row = $result->fetch_assoc())
                           {
                            $id = $row['studentID'];
                            $nome = $row['nome'];
                            $cpf= $row['cpf'];
                            $endi = $row['endi'];
                            $telefone = $row['telefone'];
                            $email = $row['email'];
                            $image = $row['imgLoc'];
                          
                            echo '<tr><td>'.$id.'</td><td>'.$email.'</td><td>'.$telefone.'</td><td>'.$nome.'</td><td>'.$cpf.'</td><td>'.$endi.'</td>';
                            if ($image == NULL)
                                {
                                    echo '<td><h4>No<br>Image</h4></td></tr>';
                                }
                                else
                                {
                                    echo'<td>';
                                    echo'<img src="'.$image.'" alt="" style = "width:50px; height:50px; margin-top:5px;">';
                                    echo'</td></tr>';
                                }
                           }
                       }    
                       else
                       {
                        echo '<p> Sem usuário</p>';
                       }               
                    ?>
                </table>

            </div>

        </div>

        </div>
    </body>
</html>

