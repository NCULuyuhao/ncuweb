<?php session_start();
include('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>環境保育很重要</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

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

<body id="page-top">   
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
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">水</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#services">看問題</a></li>
                        <li><a class="dropdown-item" href="水資源數據.php">水資源數據</a></li>
                        <li><a class="dropdown-item" href="RPI.php">RPI</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">土地</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="遙測中心.php">遙測中心</a></li>
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
    <!-- Masthead-->
    <header class="masthead" id="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                    <h1 class="text-white font-weight-bold">國家發展與環境議題:探討石虎滅絕的原因</h1>
                
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">這是一場僵持不下的競賽。人與自然的衝突，日益嚴重。 石虎在亞洲其他國家活得好好的，為什麼在台灣卻瀕臨絕種？面對經濟發展與環境保護的爭論，雙贏策略，有沒有可能？</p>
                    
                </div>
            </div>
        </div>
    </header>

    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">

            <h2 class="text-center mt-0">水資源問題</h2>
            <hr>
            <h5 class="text-center mt-0">河川的標準不該只是「乾淨」，及時是統計生態、物種多少也都還是不夠的；河川其實承載了許多公共政策，上游的水源水質水量保護水土林、中游的生活污水工業廢水、下游出海口的河海交界生態敏感區，都有可能面臨不當政策造成的必然危機。</h5>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="text-center">
                    <div class="mt-5">

                        <a class="btn btn-primary btn-xl-center" onclick="window.open('https://wq.epa.gov.tw/EWQP_GIS/')">看問題</a>

                        <p class="text-muted mb-0"></p>
                    </div>
                </div>
            </div>    
        </div>

    </section>
    <!-- Portfolio-->
    
    <section class="page-section bg-dark text-white" id= portfolio>
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mb-4">歷年來的台灣土地變化</h2>
            <a class="btn btn-light btn-xl" onclick="javascript:location.href='遙測中心.php'">遙測中心</a>
                    </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
             <div class="col-lg-8 col-xl-6 ">
                <h2 class="text-center mt-0">石虎的困境</h2>
                <hr>
                <p>曾經在臺灣廣泛分布的石虎，如今數量可能已少於500隻，若不加以保護，恐將消失在臺灣。</p>

                <p>臺灣石虎的介紹：</p>
                <ul>
                    <li>石虎的體型與家貓大致相仿，外表來看易被誤認為家貓。</li>
                    <li>石虎是夜行動物，以魚類、爬行類及哺乳動物為食。</li>
                    
                </ul>
            </p>
            <p>目前臺灣的石虎數量仍在減少，唯有大眾的觀念和行為有所改變，牠們才能生存下去。</p><br />

            <div class="auto">
                <img class="img-fluid" src="石虎.webp" alt="..." />
                <div class="portfolio-box-caption">
                </div>
            
        </div>
    </div>
</div>                        
</div>
</div>
</div>
</section>
<!-- Footer-->
<footer class="bg-light py-5">
    <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2021 - Company Name</div></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- SimpleLightbox plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>

<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


</body>
</html>
