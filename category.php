<?php include "includes/header.php";?>

<?php include "includes/db.php"; ?>


    <!-- Navigation -->

    <?php include "includes/navigation.php"; ?>


 

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->

            <div class="col-md-8">

                <?php

if (isset($_GET['category'])) {

$post_category_id= $_GET['category'];




if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'admin') {
    
$query = "SELECT * FROM heroku_597cf2e5c9cb274.posts WHERE post_category_id=$post_category_id";


}else{


$query = "SELECT * FROM heroku_597cf2e5c9cb274.posts WHERE post_category_id=$post_category_id AND post_status ='published'";

}

    


///working this line
///$query = "SELECT * FROM posts WHERE post_category_id=$post_category_id AND post_status ='published'";


                        $select_all_posts_query= mysqli_query($connection, $query);
  if (mysqli_num_rows($select_all_posts_query) <1){
      
  echo "<h1 class='text-center'>NO CATEGORY AVAIABLE</h1>";

  }else{



                while($row =mysqli_fetch_assoc($select_all_posts_query)){
        $post_id = escape($row['post_id']);
        $post_title = escape($row['post_title']);
        $post_author = escape($row['post_author']);
        $post_date = escape($row['post_date']);
        $post_image = escape($row['post_image']);
        $post_content = substr($row['post_content'], 0,8);
       
?>
                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="post.php?p_id=$post_id"><?php echo $post_id; ?>"<?php echo $post_title  ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author  ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date  ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image;?> alt="">
                <hr>
                <p><?php echo $post_content  ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

            <?php } } }else{

            header("location: index.php"); 
                     



        }?>

            </div>

        




            <!-- Blog Sidebar Widgets Column -->
          <?php include "includes/sidebar.php";?>


                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

     


     

     <?php include "includes/footer.php";?>



