<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list</title>
</head>
<body>
<?php
    include 'connection.php';

    ?>
    <table border="1">
        <tr>
            <th>id</th>
            <th>first name</th>
            <th>last name</th>
           
            <th>age</th>
            <th>addresss</th>
        </tr>
   
      <?php
    
        include 'connection.php';
       
        $result=mysqli_query($con,"SELECT * FROM students");
    while($row=mysqli_fetch_array($result)){
        ?>
           <tr>
            <td><?php echo $row['id']  ?></td>
            <td><?php echo $row['firstname']  ?></td>
            <td><?php echo $row['lastname']  ?></td>
            
            <td><?php echo $row['age']  ?></td>
            <td><?php echo $row["addresss"] ?></td>
        </tr>

        <?php

    }
    ?>
        
    </table>
</body>
</html>