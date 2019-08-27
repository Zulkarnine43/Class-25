<?php

function view(){
$link = mysqli_connect("localhost","root","","blog");
$sql = "SELECT * FROM oxy ";
$result =mysqli_query($link,$sql);
return $result;
}
$result=view();


?>


<hr/>
<a href="add.blade.php"> Add student</a>
<a href="view.blade.php"> view student</a>
<hr/>
<table border="1" width="700">
    <tr>
        <th>ID</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>phone</th>
         <th>email</th>
          <th>gender</th>
           <th>divission</th>
            <th>comment</th>

    </tr>
 <?php while ($student=mysqli_fetch_assoc($result)) {?>
    <tr>
    	<td><?php  echo $student['id']; ?></td>
        <td><?php  echo $student['firstname'];   ?></td>
        <td><?php  echo $student['lastname'];   ?></td>
        <td><?php  echo $student['phone']; ?></td>
        <td><?php  echo $student['email']; ?></td>
        <td><?php  echo $student['gender']; ?></td>
        <td><?php  echo $student['division']; ?></td>
        <td><?php  echo $student['comment']; ?></td>
        
    </tr>
 <?php } ?>

</table>