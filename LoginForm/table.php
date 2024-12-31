<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Database</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="the-form tb">

        <div class="text">
            <h2>List Of Users</h2>
        </div>

        <table class="table">

            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    
                </tr>
           </thead>

            <tbody>
                <?php include('errors.php'); ?> 
                <?php 
                // connect to the database
                $db = mysqli_connect('localhost', 'root', '', 'project');

                //check connection
                if ($db->connect_error){
                    die("Conneciton Failed: " . $db->connect_error);
                }

                //read all data from database
                $sql = "SELECT * FROM users";
                $result = $db->query($sql);

                //check query validation
                //if valid we fetch the data
                if(!$result){
                    die("Invalid Query: " . $db->connect_error);
                }
                ?>  

                <?php 
                while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[username]</td>
                        <td>$row[email]</td>
                        <td>$row[password]</td>
                        <td>
                            <a class='btn btn-edit' href='edit.php?id=$row[id]'>Edit</a>
                            <a class='btn btn-del' href='delete.php?id=$row[id]'>Delete</a>
                        </td>
                    </tr>
                    ";
                }
                ?> 
            

            </tbody>
        </table>
        <a class="btn btn-new" href="register.php">New User</a>
    </div>
</body>
</html>