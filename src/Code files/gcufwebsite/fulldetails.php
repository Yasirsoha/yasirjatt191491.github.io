<div class="post-container">
<?php
$conn=mysqli_connect("localhost","root","","gcufwebsite") or die("connection error:". mysqli_connect_error());
                        $sql = "SELECT role,name,image,discription FROM staffdetails ORDER BY name";

                        $result = mysqli_query($conn, $sql) or die("Query Failed.");
                        if($row=mysqli_num_rows($result) > 0){?>
							<div class="post-content">
                            <h3><?php echo $row['role']; ?></h3>
							<h5><?php echo $row['name']; ?></h5>
                            <img src="images/<?php echo $row['image']; ?>" alt=""/>
                            <p class="description">
                                <?php echo $row['description']; ?>
                            </p>
							
                        </div>
                        <?php
                          
                        }else{
                          echo "<h2>No Record Found.</h2>";
                        }

                        ?>
                    <!-- /post-container -->

                       </div>