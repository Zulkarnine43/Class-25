<?php
if(isset($_POST['btn'])){

 function saveStudentInfo($data){
$link = mysqli_connect("localhost","root","","blog");
$sql = "INSERT INTO oxy (firstname,lastname,phone,email,gender,division,comment) VALUES ('$data[firstname]','$data[lastname]','$data[phone]','$data[email]','$data[gender]','$data[division]','$data[comment]')" ;
 mysqli_query($link,$sql);

}
saveStudentInfo($_POST);

}

?>

<hr/>
<a href="add.blade.php"> Add student</a>
<a href="view.blade.php"> view student</a>
<hr/>


<h1 style="color: #32c867">Hello PHP OXY</h1>

<html>
<head>
    <title></title>
</head>
<body>
	<form method="POST" action="">
<div>First Name::</div>
<div><input type="text" name="firstname" value="" ></div>
<div>Last Name::</div>
<div><input type="text" name="lastname" value="" ></div>
<div>Phone::</div>
<div><input type="text" name="phone" value="" ></div>
<div>Email::</div>
<div><input type="email" name="email" value="" ></div>
<div>Gender::</div>
<div>
    <input type="radio" name="gender" value="1">Male
    <input type="radio" name="gender" value="0">Female

</div>
<div>District::</div>
<div><select name="division">
        <option>SElect district name</option>
        <option>Dhaka</option>
        <option>Rajshahi</option>
        <option>Chittagong</option>
        <option>Comilla</option>
    </select></div>
<div >Comment::</div>
<div><textarea name="comment" cols="20" rows="5"> </textarea></div>

<div><input type="submit" name="btn" value="submit"></div>
</form>
</body>


</html>