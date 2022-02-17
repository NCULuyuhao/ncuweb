<?php 
include('conn.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="style3.css">
</head>


    <!-- Navigation-->
            <!-- Masthead-->
        
           
                <div class="buttons">
                           <button data-pop="first"  class="show">開啟調查書</button>

                        </div>

                        <div class="popup first">
                            <div class="alert" >

                         <?php 
                        if($_SESSION['profession']=='government')
                        {
                            $sql = "select * from goverform where id='".$_SESSION['id']."'";
                            $query=mysqli_query($conn,$sql);
                            $res = mysqli_fetch_array($query);

                            $sql1 = "select * from goverform1 where id='".$_SESSION['id']."'";
                            $query1=mysqli_query($conn,$sql1);
                            $res1 = mysqli_fetch_array($query1);

                          

                            if(mysqli_num_rows($query)==0)
                            {
                                ?>
                                 <iframe width="100%" height="500px" src="goverform.php" frameborder="0" scrolling="yes" > </iframe>
                                 
                                 <?php 
                            }
                            else
                            {
                                if(mysqli_num_rows($query1)==0)
                                {
                                     ?>
                                     <iframe width="100%" height="500px" src="goverform1.php" frameborder="0" scrolling="yes" > </iframe>
                                     
                                     <?php 
                                }
                                
                           } 
                        }

            
                        elseif($_SESSION['profession']=='business')
                        {
                            $sql = "select * from busform where id='".$_SESSION['id']."'";
                            $query=mysqli_query($conn,$sql);
                            $res = mysqli_fetch_array($query);

                            $sql1 = "select * from busform1 where id='".$_SESSION['id']."'";
                            $query1=mysqli_query($conn,$sql1);
                            $res1 = mysqli_fetch_array($query1);

                            $sql2 = "select * from busform2 where id='".$_SESSION['id']."'";
                            $query2=mysqli_query($conn,$sql2);
                            $res2 = mysqli_fetch_array($query2);

                            if(mysqli_num_rows($query)==0)
                            {
                                ?>
                                 <iframe width="100%" height="500px" src="busform.php" frameborder="0" scrolling="yes" > </iframe>
                                
                                 <?php 
                            }
                            else
                            {
                                if(mysqli_num_rows($query1)==0)
                                {
                                     ?>
                                     <iframe width="100%" height="500px" src="busform1.php" frameborder="0" scrolling="yes" > </iframe>
                                     
                                     <?php 
                                }
                                else
                                {
                                    if(mysqli_num_rows($query2)==0)
                                    {


                                        ?>
                                         <iframe width="100%" height="500px" src="busform2.php" frameborder="0" scrolling="yes" > </iframe>
                                         
                                        <?php 
                                    }
                                    else
                                    {

                                    }

                                }
                           } 
                         }

                         else
                         {
                            $sql = "select * from conform where id='".$_SESSION['id']."'";
                            $query=mysqli_query($conn,$sql);
                            $res = mysqli_fetch_array($query);

                            $sql1 = "select * from conform1 where id='".$_SESSION['id']."'";
                            $query1=mysqli_query($conn,$sql1);
                            $res1 = mysqli_fetch_array($query1);

                            $sql2 = "select * from conform2 where id='".$_SESSION['id']."'";
                            $query2=mysqli_query($conn,$sql2);
                            $res2 = mysqli_fetch_array($query2);

                            if(mysqli_num_rows($query)==0)
                            {
                                ?>
                                 <iframe width="100%" height="500px" src="conform.php" frameborder="0" scrolling="yes" > </iframe>
                                
                                 <?php 
                            }
                            else
                            {
                                if(mysqli_num_rows($query1)==0)
                                {
                                     ?>
                                     <iframe width="100%" height="500px" src="conform1.php" frameborder="0" scrolling="yes" > </iframe>
                                     
                                     <?php 
                                }
                                else
                                {
                                    if(mysqli_num_rows($query2)==0)
                                    {


                                        ?>
                                         <iframe width="100%" height="500px" src="conform2.php" frameborder="0" scrolling="yes" > </iframe>
                                         

                                        <?php 
                                    }
                                    else
                                    {

                                    }

                                }
                           }                 
                        }
                      ?>
                         </div>
                     </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                    <div class="col-lg-12 align-self-end">
                                        
                </div>
                </div>
           
 
        
       
        <!-- Footer-->
        
        <!-- Bootstrap core JS-->
        
 
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script  src="script3.js"></script>


</html>
