






<div class="col-md-4">

<!--

<?php
//if (isset($_POST['submit'])) {

//$search = $_POST['search'];

//$query="SELECT * FROM posts WHERE post_tags LIKE '%$search%' ";
//$search_query =mysqli_query($connection, $query);

//if (!$search_query) {
//    die("QUERY FAILED". mysqli_error($connection));
//}

//$count = mysqli_num_rows($search_query);
//if ($count ==0) {
//    echo "<h1> NO RESULT </h1>";
//}else{

//echo "something";
//}} ?>

-->



                          <!-- BLOG SEARCH WELL -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="search.php" method="post">
                    <div class="form-group">
                      <input name="search" type="text" class="form-control" placeholder="Enter Word">
                      <span class="input-group-btn">
                          <button name="submit" class="btn btn-default" type="submit">
                              <span class="glyphicon glyphicon-search"></span>
                          </button>
                      </span>
                  </form> <!-- search form -->
                         </div>
                     </div>

               
                <!-- Login -->
                <div class="well">

  <?php if (isset($_SESSION['user_role'])): ?> 
     <h4>Logged in as <?php echo $_SESSION['username'] ?></h2>
     <a href="Logout.php" class="btn btn-primary">Logout</a>

<?php else: ?>
  

                    <h4>Login</h4>
                    <form action="includes/login.php" method="post">
                    <div class="form-group">
                      <input name="username" type="text" class="form-control" placeholder="Enter username">
                         </div>
                <div class="input-group">
                    <input name="password" type="password" class="form-control" placeholder="Enter password">
                  <span class="input-group-btn">
              <button class="btn btn-primary" name="login" type="submit">Submit</button>

                  </div>            
                  </span>                   

                </div>
                </form><!---Search form--->
                    <!-- /.input-group -->



  <?php endif; ?>          









                </div>






                <!-- Blog Categories Well -->
                <div class="well">

                    <?php

  $query= "SELECT * FROM heroku_597cf2e5c9cb274.categories LIMIT 3";
                $select_categories_sidebar = mysqli_query($connection, $query);
?>



                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">

                                <?php

   while($row =mysqli_fetch_assoc($select_categories_sidebar)){

                    $cat_title = $row['cat_title'];
                     $cat_id = $row['cat_id'];

                    echo "<li> <a href='category.php?category=$cat_id'>{$cat_title}</a></li>";

    }
?>

                        </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>

                            <?php include "widget.php";?>   
                    </div>
            