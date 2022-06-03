<?php
    include "config.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="styles/style.css">
    <style>
        td {
        text-align: center;   
        }
    </style>

</head>

<body onload="view()">
    <script src="scripts/script.js"></script>
    <div class="container">
        <div class="buttons">

        
         <button onclick="view()">Home</button>
            <button onclick="add()">Add</button>
            <button onclick="edit()">Edit</button>
            <button onclick="del()">Delete</button>
            <button onclick="search()">Buscar</button>
        </div><br>
        <div class="view box" id="view">
            <table>
                    <tr>
                        <th>ID</th><th>E-mail</th><th>Telefone</th><th>Nome</th><th>Cpf</th><th>Endereço</th><th>Image</th>
                    </tr>
                    <?php

                       $sql = "SELECT * FROM student";
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
                    ?>
                </table>
        </div>

        <div class="add box" id="add">
            <div class = "border">
                
                <form action="addStudentValidate.php" method = "POST" enctype = "multipart/form-data">
                    <p> Nome : <input type="text" name = "nome"></p><br>
                    <p> Cpf : <input type="text" name = "cpf"></p><br>
                    <p> Endereço : <input type="text" name = "endi"></p><br>
                    <p> Telefone : <input type="text" name = "telefone"></p><br>
                    <p> E-mail: <input type="text" name = "email"></p><br>
                    <p> Senha: <input type="text" name = "senha"></p><br>
                    <p> Image : <input type="file" name = "image"></p><br>
                    <input type = "submit" value = "Add " class = "button">
                    <input type =  "reset" value = "Reset" class = "button">
                </form>

            </div>

        </div>

        <div class="view box" id="edit">
        <table>
                    <tr>
                        <th>ID</th><th>E-mail</th><th>Telefone</th><th>Nome</th><th>Cpf</th><th>Endereço</th><th>Image</th>
                  
                    </tr>
                    <?php

                       $sql = "SELECT * FROM student";
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
                                    echo '<td><h4>No<br>Image</h4></td>';
                                }
                                else
                                {
                                    echo'<td>';
                                    echo'<img src="'.$image.'" alt="" style = "width:50px; height:50px; margin-top:5px;">';
                                    echo'</td>';
                                }
                                
                                echo '<td><a href="editStudent.php?id='.$id.'"><button class = "validate">Editar</button></a></tr></td>';
                           }
                       }                   
                    ?>
                </table>

        </div>

        <div class="delete box" id="delete">
        <table>
                    <tr>
                        <th>ID</th><th>E-mail</th><th>Telefone</th><th>Nome</th><th>Cpf</th><th>Endereço</th><th>Image</th>
                    </tr>
                    <?php

                       $sql = "SELECT * FROM student";
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
                                    echo '<td><h4>No<br>Image</h4></td>';
                                }
                                else
                                {
                                    echo'<td>';
                                    echo'<img src="'.$image.'" alt="" style = "width:50px; height:50px; margin-top:5px;">';
                                    echo'</td>';
                                }
                                
                                echo '<td><a href="deleteStudent.php?id='.$id.'"><button class = "validate">Delete</button></a></tr></td>';
                           }
                       }                   
                    ?>
                </table>

        </div>

        <div class="search box" id="search">
            <div class = "searchform">
                <form action="searchResults.php" method = "POST">
                    <p> Buscar Nome : <input type="text" name = "nome" required></p><br>

                    <input type = "submit" value = "Buscar" class = "button">
                    <input type = "reset" value = "Resetar" class = "button">
                </form>

            </div>

        </div>

    </div>
</body>

</html>


