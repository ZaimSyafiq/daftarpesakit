<?php
    include_once('connection.php');
    $query= "SELECT * FROM person"; 
    $result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Senarai Pesakit</title>
</head>
<body>
    <h1>Senarai Pesakit</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php
             while($rows=mysqli_fetch_assoc($result))
            {
        ?>  
        <tr>
            <td><?php echo $rows['ID']; ?></td>
            <td><?php echo $rows['Name']; ?></td>
            <td><?php echo $rows['Email']; ?></td>
        </tr>
        <?php        
            }
        ?>    
    </table>   
</body>
</html>