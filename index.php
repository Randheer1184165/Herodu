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

                $per_page =2;
        if (isset($_GET['page'])) {

        $page =$_GET['page'];

    }else{

        $page="";
    }
     if ($page =="" || $page ==1) {
         $page_1 =0;

     }else{

        $page_1=($page *$per_page) -$per_page;


     }


///code access and who can see

if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'admin') {
    
$post_query_count ="SELECT * FROM heroku_597cf2e5c9cb274.posts";


}else{


$post_query_count ="SELECT * FROM heroku_597cf2e5c9cb274.posts WHERE post_status = 'published'";

}





         ///working below code
         ///$post_query_count ="SELECT * FROM posts WHERE post_status = 'published'";
         

         $find_count= mysqli_query($connection, $post_query_count);
         $count = mysqli_num_rows($find_count);


         if ($count < 1) {
           echo "<h1 class='text-center'>No Posts available</h1>";
         }else{

         $count =ceil($count /$per_page);





          $query = "SELECT * FROM heroku_597cf2e5c9cb274.posts LIMIT $page_1, $per_page";

                        $select_all_posts_query= mysqli_query($connection, $query);
                while($row =mysqli_fetch_assoc($select_all_posts_query)){
        $post_id = $row['post_id'];
        $post_title = $row['post_title'];
       //// $post_author = $row['post_author'];   {working this code}
        $post_user = $row['post_user'];
        $post_date = $row['post_date'];
        $post_image = $row['post_image'];
        $post_content = substr($row['post_content'], 0,500);
        $post_status = $row['post_status'];

    if ($post_status == 'published'){
    }
       
?>
              
                <!-- First Blog Post -->
              <h2 class='text-center'>WELCOME  ALL!!</h2>


              <!--
              <h1><?php //echo $count; ?></h1>
               -->          


                <h2>
                   <a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a>
                   
                </h2>
                <p class="lead">
                    <!--  by <a href="author_posts.php?author=<?php //echo $post_author  ?>&p_id=<?php //echo $post_id; ?> "><?php //echo $post_author  ?></a>    -->
                

                 by <a href="author_posts.php?user=<?php echo $post_user  ?>&p_id=<?php echo $post_id; ?> "><?php echo $post_user  ?></a>

                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date  ?></p>
                <hr>



                <a href="post.php?p_id=<?php echo $post_id; ?>"></a>
                <img class="img-responsive" src="images/<?php echo $post_image;?>" alt="">
            </a>


          <hr>
          <p><?php echo $post_content ?></p>
          <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id; ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
      </hr>



                <hr>
                <p><?php echo $post_content  ?></p>
                

                <hr>

            <?php } }?>

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
     <ul class="pager">
<?php
       
for ($i=1; $i<=$count ; $i++) { 


if ($i== $page) {

echo "<li><a class ='active_link' href='index.php?page={$i}'>{$i}</a></li>";

}else{

    echo "<li><a href='index.php?page={$i}'>{$i}</a></li>";
}
}
     

?>

     </ul>
     <?php include "includes/footer.php";?>



