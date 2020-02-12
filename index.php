<?php
include_once('displayform.php');
$query= "SELECT * FROM person"; 
$result=mysql_query($query);


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