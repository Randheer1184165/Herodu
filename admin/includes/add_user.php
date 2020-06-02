<?php
if (isset($_POST['create_user'])) {

$username = $_POST['username'];	
$user_password = $_POST['user_password'];
$user_firstname = $_POST['user_firstname'];
$user_lastname = $_POST['user_lastname'];
$user_email = $_POST['user_email'];
$user_role = $_POST['user_role'];

//$post_image = $_FILES['image']['name'];
//$post_image_temp = $_FILES['image']['tmp_name'];







//$post_date = date('d-m-y');
//$post_comment_count= 4;


$user_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost' => 10));



//move_uploaded_file($post_image_temp, "../images/$post_image");

$query= "INSERT INTO heroku_597cf2e5c9cb274.users(user_firstname, user_lastname, user_role, username,user_email,user_password)";

$query .= "VALUES('{$user_firstname}','{$user_lastname}','{$user_role}','{$username}','{$user_email}','{$user_password}')";


$create_user_query= mysqli_query($connection, $query);



confirmQuery($create_user_query);

echo "User Created:"  . " " . "<a href='users.php'>View Users</a>";

}

?>

<form action="" method="post" enctype="multipart/form-data">


<div class="form-group">
	<label for="title">Firstname</label>
	<input type="text" class="form-control" name="user_firstname">
</div>

<div class="form-group">
	<label for="post_status">Lastname</label>
	<input type="text" class="form-control" name="user_lastname">
</div>

<div class="form-group">

	<select name="user_role" id="">
   <option value="subscriber">Select Options</option>
    <option value="admin">Admin</option>
    <option value="subscriber">Subscriber</option>


</select>
</div>

<div class="form-group">
	<label for="title">Username</label>
	<input type="text" class="form-control" name="username">
</div>
 
 <div class="form-group">
	<label for="title">Email</label>
	<input type="email" class="form-control" name="user_email">
</div>


<div class="form-group">
	<label for="post_status">Password</label>
	<input type="password" class="form-control" name="user_email">
</div>



                          
                        
                            <div class="form-group">
                                <input class="btn btn-primary"type="submit" name="create_user" value="Add User">
                         </div>
                               
               	

</form>