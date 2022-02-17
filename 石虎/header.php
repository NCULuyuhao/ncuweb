<?php session_start();
include('conn.php');
?>
<?php
$sql="select * from busform where country= '".$_SESSION['country']."'";
$query=mysqli_query($conn,$sql);
$count=mysqli_num_rows($query);

$sql1="select * from busform1 where country= '".$_SESSION['country']."'";
$query1=mysqli_query($conn,$sql1);
$count1=mysqli_num_rows($query1);

$sql2="select * from busform2 where country= '".$_SESSION['country']."'";
$query2=mysqli_query($conn,$sql2);
$count2=mysqli_num_rows($query2);

$sql3="select * from conform where country= '".$_SESSION['country']."'";
$query3=mysqli_query($conn,$sql3);
$count3=mysqli_num_rows($query3);

$sql4="select * from conform1 where country= '".$_SESSION['country']."'";
$query4=mysqli_query($conn,$sql4);
$count4=mysqli_num_rows($query4);

$sql5="select * from conform2 where country= '".$_SESSION['country']."'";
$query5=mysqli_query($conn,$sql5);
$count5=mysqli_num_rows($query5);

$total=$count+$count1+$count2+$count3+$count4+$count5;
$sql6="select * from point where country= '".$_SESSION['country']."'";
$query6=mysqli_query($conn,$sql6);
$res=mysqli_fetch_array($query6);
?>


    <!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index2.php">歡迎來到苗苗國</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    
                    <li class="nav-item"><a class="nav-link" >發展指數:<?php echo $res['develop']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" >保育指數:<?php echo $res['protect']; ?></a></li>
                    
                    
                    <?php if($_SESSION['profession']=='government'):?>
                      
                         <li class="nav-item"><a class="nav-link" onclick="window.open('centerform.php')">國家發展公告</a></li> 
                         <li class="nav-item"><a class="nav-link" href="selectform.php">調查申請書<span class="badge badge-danger"><?php echo $total;?></span></a></li>
                      <?php 
                      ?>
                      <?php else :?>
                         
                         <li class="nav-item"><a class="nav-link" onclick="window.open('centerform.php')">調查計畫書</a></li> 
                         <li class="nav-item"><a class="nav-link" href="form.php">計畫書完成表</a></li>
                         <?php
                      ?>
                  <?php endif;?>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">水資源</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" onclick="window.open('https://wq.epa.gov.tw/EWQP_GIS/')">看問題</a></li>
                        <li><a class="dropdown-item" href="水資源數據.php">水資源數據</a></li>
                        <li><a class="dropdown-item" href="RPI.php">RPI計算</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">土地</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="遙測中心.php">遙測中心衛星圖</a></li>
                        <li><a class="dropdown-item" href="土地利用圖.php">土地利用圖</a></li>
                        <li><a class="dropdown-item" href="等高線.php">其他土地資訊</a></li>
                      </ul>
                    </li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#portfolio">土地開發</a></li> -->
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#contact" role="button" data-bs-toggle="dropdown">動物保育</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="石虎簡介.php">看石虎簡介</a></li>
                        <li><a class="dropdown-item" href="石虎出現點位.php">石虎出現位置</a></li>
                        <li><a class="dropdown-item" href="石虎其他資訊.php">石虎其他資訊</a></li>
                      </ul>
                    </li>
                    
                    <li class="nav-item"><a class="nav-link" href="林務局.php">植被</a></li>                                        
                    <li class="nav-item"><a class="nav-link"href="logout.php"> <?php echo $_SESSION['name'];?> &nbsp;&nbsp;&nbsp;登出</a></li>

                    
                   
                </ul>
            </div>
        </div>
    </nav>

   

