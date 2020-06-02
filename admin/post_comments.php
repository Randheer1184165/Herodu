<?php include "includes/admin_header.php"; ?>
<?php include "functions.php"; ?>
<?php ob_start(); ?>

    <div id="wrapper">
      
      <?php include "includes/admin_navigation.php";?>




        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                                          <h1 class="page-header">
                            WELCOME TO Comments
                            <small>Author</small>
                        </h1>


<?php
if (isset($_POST['checkBoxArray'])) {
  
foreach ($_POST['checkBoxArray'] as $commentValueId ) {
  
 echo $bulk_options=$_POST['bulk_options'];

switch ($bulk_options) {
  case 'approved':

   $query="UPDATE heroku_597cf2e5c9cb274.comments SET comment_status='{$bulk_options}' WHERE comment_id={$commentValueId} ";

   $update_to_approved_status = mysqli_query($connection, $query);

   confirmQuery($update_to_approved_status);

    break;
  
 case 'unapproved':

   $query="UPDATE heroku_597cf2e5c9cb274.comments SET comment_status='{$bulk_options}' WHERE comment_id={$commentValueId} ";

   $update_to_unapproved_status = mysqli_query($connection, $query);

   confirmQuery($update_to_unapproved_status);

    break;



 case 'delete':

   $query="DELETE FROM heroku_597cf2e5c9cb274.comments WHERE comment_id={$commentValueId} ";

   $update_to_delete = mysqli_query($connection, $query);

   confirmQuery($update_to_delete);

    break;

   }

 }

}

?>




<form action="" method='post'>
<table class="table table-bordered table-hover">

  <div id="bulkOptionContainer" class="col-xs-4">
 
 <select class="form-control" name="bulk_options" id="">

    <option value="">Select Options</option>
    <option value="approve">Approve</option>
    <option value="unapprove">Unapprove</option>
    <option value="delete">Delete</option>
</select>
</div>

<div class="col-xs-4">
<input type="submit" name="submit" class="btn btn-success" value="Apply"> 
</div>





                        <table class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>Author</th>
                              <th>Comments</th>
                              <th>Email</th>
                              <th>Status</th>
                              <th>Date</th>
                              <th>In Response to</th>
                              <th>Approve</th>
                              <th>Unapprove</th>
                              <th>Delete</th>
                             </tr>
                           </thead>
                                <tbody>

                                <?php


$query= "SELECT * FROM heroku_597cf2e5c9cb274.comments WHERE comment_post_id =" .mysqli_real_escape_string($connection, $_GET['id']) ."";
$select_comments = mysqli_query($connection, $query);
while($row =mysqli_fetch_assoc($select_comments)){
$comment_id = $row['comment_id'];
$comment_post_id = $row['comment_post_id'];
$comment_author = $row['comment_author'];
$comment_content = $row['comment_content'];
$comment_email = $row['comment_email'];
$comment_status = $row['comment_status'];
$comment_date = $row['comment_date'];



echo "<tr>";
echo "<td>$comment_id </td>";
echo "<td>$comment_author </td>";
echo "<td>$comment_content </td>";



//$query= "SELECT * FROM categories WHERE cat_id={$post_category_id}";
  //$select_categories_id = mysqli_query($connection, $query);
  //  while($row =mysqli_fetch_assoc($select_categories_id)){
     //     $cat_id = $row['cat_id'];
   //                         $cat_title = $row['cat_title'];

///echo "<td>{$cat_title}</td>";


//}

}


echo "<td>$comment_email </td>";
echo "<td>$comment_status </td>";


$query= "SELECT * FROM heroku_597cf2e5c9cb274.posts WHERE post_id =$comment_post_id";
$select_post_id_query =mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($select_post_id_query)) {

  $post_id= $row['post_id'];
  $post_title= $row['post_title'];
   
   echo "<td><a href='../post.php?p_id=$post_id'>$post_title</a></td>";

  }





echo "<td>$comment_date </td>";
echo "<td><a href='comments.php?approve=$comment_id'>Approve</a></td>";
echo "<td><a href='comments.php?Unapprove=$comment_id'>Unapprove</a></td>";
echo "<td><a onClick=\"javascript: return confirm('Are you you want to delete'); \" href='post_comments.php?delete=$comment_id&id=" .$_GET['id'] ."'>Delete</a></td>";
echo "</tr>";


echo "</tr>";
?>                        

                              
                            <!--
                            <td>10</td>
                            <td>Randheer</td>
                            <td>Bootstrap</td>
                            <td>category</td>
                            <td>Status</td>
                            <td>Image</td>
                            <td>Tags</td>
                            <td>Comments</td>
                            <td>Date</td>

                          -->
           <?php


          if(isset($_GET[''])){
     $the_comment_id =$_GET['approve'];

     $query ="UPDATE heroku_597cf2e5c9cb274.comments SET comment_status ='approve' where comment_id=$the_comment_id ";
     $approve_comment_query=mysqli_query($connection, $query);
    header("location: comments.php");

           }



          if(isset($_GET[''])){
     $the_comment_id =$_GET['Unapprove'];

     $query ="UPDATE heroku_597cf2e5c9cb274.comments SET comment_status ='Unapprove' where comment_id=$the_comment_id ";
     $Unapprove_comment_query=mysqli_query($connection, $query);
    header("location: comments.php? id=" .$_GET['id'] ."");

           }






           if(isset($_GET['delete'])){
     $the_comment_id =$_GET['delete'];

     $query ="DELETE FROM heroku_597cf2e5c9cb274.comments WHERE comment_id ={$the_comment_id}";
     $delete_query=mysqli_query($connection, $query);
    header("location: post_comments.php");

           }


              ?>            

                        </tbody>
                        </table>
                   

                      
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include "includes/admin_footer.php";?>