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
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="style4.css">
</head>
</head>
<body id="page-top">
  <!-- Navigation-->  

 <?php include('header.php')?>



 
  <!-- Masthead-->
  <header class="masthead" id="masthead">
   
    <div class="container px-4 px-lg-5 h-100">
      <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
<br>
<br>
<br>
<br>

        <!-- partial:index.partial.html -->
        <div class="wrap">
          <select name="s01" id="s01">
            <option value="0">--請選擇要看誰的計畫書--</option>
            <option value="1">案件一</option>
            <option value="2">案件二</option>
            <option value="3">案件三</option>
            
           
          </select>  
        </div>
        <div class>
        <?php 
          $sql="select * from busform where id ='".$_SESSION['id']."'";
          $query=mysqli_query($conn,$sql);
          $profession=$_SESSION["profession"];
          $res=mysqli_fetch_array($query);

          

          if($res['profession']==$profession)
         {
           ?>
            <div class="show01">
            <div class="embed-responsive embed-responsive-16by9">
            <div class='faq'  style="overflow-y:auto" >
  <div class="global-label">
    <div class="global-label-text">
      環境開發計畫書!
    </div>

  </div>
  <!--1 question-->
  <div class="faq-container">
    <div class="faq-label">
      <div class="faq-label-text">
        開發一預計要開發的地點!
      </div>
      <div class="faq-label-icon" >
        <span class="material-icons">

          expand_more
        </span>
      </div>

    </div>

    <div class="faq-answer ">
      <div class="faq-answer-content">


        <form method="POST" action="busform.php">
         <select name="round" class="form-control">

          <option value="1">開發一</option>

        </select>
        <select name="location" class="form-control">
          <option>選擇開發地點:<?php  echo $res['location'];   ?></option>


        </select>
        <select name="type" class="form-control">
          <option>要開發:<?php  echo $res['type'];   ?></option>


        </select>
        


        <div class='input-control'>
          <textarea rows="10" cols="20" minlength="30" id='x' type='text' class='input-control__input' placeholder=' ' name="text1"readonly="readonly" />原因:
<?php echo $res['text1'];?></textarea>

      </div>

    </div>

  </div>

  <!--2 question-->
  <div class="faq-container">
    <div class="faq-label">
      <div class="faq-label-text">
        該區水質是否受汙染?
      </div>
      <div class="faq-label-icon">
        <span class="material-icons">
          expand_more
        </span>
      </div>

    </div>
    <div class="faq-answer ">
      <div class="faq-answer-content">
        <select name="type2" class="form-control">
          <option>河川污染指數 ( RPI ):<?php  echo $res['type2'];   ?> </option>


        </select>
        <div class='input-control'>
          溶氧量 (DO) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="DO" readonly="readonly" /><?php  echo $res['DO'];?></textarea>



        </div>
        <div class='input-control'>
          生化需氧量 (BOD5) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="BOD5" readonly="readonly" /><?php  echo $res['BOD5'];   ?></textarea>



        </div>
        <div class='input-control'> 
          懸浮固體 (SS) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="SS" readonly="readonly"/><?php  echo $res['SS'];   ?></textarea>



        </div>
        <div class='input-control'>
          氨氮 (NH3-N) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="NH3-N" readonly="readonly"/><?php  echo $res['NH3N'];   ?></textarea>



        </div>
        <div class='input-control'>
          RPI指數:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="RPI" readonly="readonly"/><?php  echo $res['RPI'];   ?></textarea>



        </div>
      </div>





    </div>
    <!-- 3 question -->
    <div class="faq-container">
      <div class="faq-label">
        <div class="faq-label-text">
          該地點的林型有甚麼?
        </div>
        <div class="faq-label-icon">
          <span class="material-icons">
            expand_more
          </span>
        </div>

      </div>
      <div class="faq-answer ">
        <div class="faq-answer-content">

          <div class='input-control'>林型請依占比排序:
            <textarea rows="5" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="text2" readonly="readonly" /><?php  echo $res['text2'];   ?>
          </textarea>
        </div>
      </div>
    </div>
 
  <!-- 4 question -->
  <div class="faq-container">
    <div class="faq-label">
      <div class="faq-label-text">
          該地點是否有石虎的蹤跡?
      </div>
      <div class="faq-label-icon">
        <span class="material-icons">
          expand_more
        </span>
      </div>

    </div>

    <div class="faq-answer ">
      <div class="faq-answer-content"> 


        <select name="type3" class="form-control">
          <option><?php  echo $res['type3'];   ?>石虎出現</option>


        </select>
      </div>
      <div class='input-control'>

        出現的地點為何及是否與公路重疊?
        <textarea rows="3" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="text3" readonly="readonly" /><?php  echo $res['type3'];   ?>
      </textarea>
    </div>


  </div>

<!-- 5 question -->
<div class="faq-container">
  <div class="faq-label">
    <div class="faq-label-text">
      該區的其他資訊?
    </div>
    <div class="faq-label-icon">
      <span class="material-icons">
        expand_more
      </span>
    </div>

  </div>
  <div class="faq-answer ">
    <div class="faq-answer-content">
      <div class='input-control'>
       <select name="type4" class="form-control">
        <option><?php  echo $res['type4'];   ?>位於石虎遷移廊道上</option>


      </select>
    </div>

  </div>
</div>
</div>
</div>
</div>
</div>
</div> 
 <!-- 財團的表一結束 -->
  <?php
           
           ?>
        
            </div> 
            </div>
          <?php
          }
          else
            // 保育的表一開始
          {
            $sql="select * from conform where id ='".$_SESSION['id']."'";
            $query=mysqli_query($conn,$sql);
            $profession=$_SESSION["profession"];
            $res=mysqli_fetch_array($query);
          ?>
            <div class="show01">
            <div class="embed-responsive embed-responsive-16by9">
            <div class='faq'  style="overflow-y:auto" >
  <div class="global-label">
    <div class="global-label-text">
      環境保育計畫書!
    </div>

  </div>
  <!--1 question-->
  <div class="faq-container">
    <div class="faq-label">
      <div class="faq-label-text">
        保育一預計要保育的地點!
      </div>
      <div class="faq-label-icon" >
        <span class="material-icons">

          expand_more
        </span>
      </div>

    </div>

    <div class="faq-answer ">
      <div class="faq-answer-content">


        <form method="POST" action="busform.php">
         <select name="round" class="form-control">

          <option value="1">保育一</option>

        </select>
        <select name="location" class="form-control">
          <option>選擇保育地點:<?php  echo $res['location'];   ?></option>


        </select>
        <select name="type" class="form-control">
          <option>要保育:<?php  echo $res['type'];   ?></option>


        </select>
        


        <div class='input-control'>
          <textarea rows="10" cols="20" minlength="30" id='x' type='text' class='input-control__input' placeholder=' ' name="text1"readonly="readonly" />原因:  <?php echo $res['text1'];?></textarea>

      </div>

    </div>

  </div>

  <!--2 question-->
  <div class="faq-container">
    <div class="faq-label">
      <div class="faq-label-text">
        該區水質是否受汙染?
      </div>
      <div class="faq-label-icon">
        <span class="material-icons">
          expand_more
        </span>
      </div>

    </div>
    <div class="faq-answer ">
      <div class="faq-answer-content">
        <select name="type2" class="form-control">
          <option>河川污染指數 ( RPI ):<?php  echo $res['type2'];   ?> </option>


        </select>
        <div class='input-control'>
          溶氧量 (DO) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="DO" readonly="readonly" /><?php  echo $res['DO'];?></textarea>



        </div>
        <div class='input-control'>
          生化需氧量 (BOD5) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="BOD5" readonly="readonly" /><?php  echo $res['BOD5'];   ?></textarea>



        </div>
        <div class='input-control'> 
          懸浮固體 (SS) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="SS" readonly="readonly"/><?php  echo $res['SS'];   ?></textarea>



        </div>
        <div class='input-control'>
          氨氮 (NH3-N) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="NH3-N" readonly="readonly"/><?php  echo $res['NH3N'];   ?></textarea>



        </div>
        <div class='input-control'>
          RPI指數:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="RPI" readonly="readonly"/><?php  echo $res['RPI'];   ?></textarea>



        </div>
      </div>





    </div>
    <!-- 3 question -->
    <div class="faq-container">
      <div class="faq-label">
        <div class="faq-label-text">
          該地點的林型有甚麼?
        </div>
        <div class="faq-label-icon">
          <span class="material-icons">
            expand_more
          </span>
        </div>

      </div>
      <div class="faq-answer ">
        <div class="faq-answer-content">

          <div class='input-control'>林型請依占比排序:
            <textarea rows="5" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="text2" readonly="readonly" /><?php  echo $res['text2'];   ?>
          </textarea>
        </div>
      </div>
    </div>
 
  <!-- 4 question -->
  <div class="faq-container">
    <div class="faq-label">
      <div class="faq-label-text">
          該地點是否有石虎的蹤跡?
      </div>
      <div class="faq-label-icon">
        <span class="material-icons">
          expand_more
        </span>
      </div>

    </div>

    <div class="faq-answer ">
      <div class="faq-answer-content"> 


        <select name="type3" class="form-control">
          <option><?php  echo $res['type3'];   ?>石虎出現</option>


        </select>
      </div>
      <div class='input-control'>出現的地點為何及是否與公路重疊?
        <textarea rows="3" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="text3" readonly="readonly" /><?php  echo $res['type3'];   ?>
      </textarea>
    </div>


  </div>

<!-- 5 question -->
<div class="faq-container">
  <div class="faq-label">
    <div class="faq-label-text">
      該區的其他資訊?
    </div>
    <div class="faq-label-icon">
      <span class="material-icons">
        expand_more
      </span>
    </div>

  </div>
  <div class="faq-answer ">
    <div class="faq-answer-content">
      <div class='input-control'>
       <select name="type4" class="form-control">
        <option><?php  echo $res['type4'];   ?>位於石虎遷移廊道上</option>
      </select>
    </div>

  </div>
</div>
</div>
</div>
</div>
</div>
</div>  
            <?php
           
           ?>
        
            </div> 
            </div>
          <?php
          } 
          ?>
</div>
       
<!-- 案件一結束 -->
<!-- 案件二開始 -->   
          

<div class>
        <?php 
          $sql="select * from busform1 where id ='".$_SESSION['id']."'";
          $query=mysqli_query($conn,$sql);
          $profession=$_SESSION["profession"];
          $res=mysqli_fetch_array($query);
          

          if($res['profession']==$profession)
         {
           ?>
            <div class="show02">
            <div class="embed-responsive embed-responsive-16by9">
              <div class='faq'  style="overflow-y:auto" >
  <div class="global-label">
    <div class="global-label-text">
      環境開發計畫書!
    </div>

  </div>
  <!--1 question-->
  <div class="faq-container">
    <div class="faq-label">
      <div class="faq-label-text">
        開發二預計要開發的地點!
      </div>
      <div class="faq-label-icon" >
        <span class="material-icons">

          expand_more
        </span>
      </div>

    </div>

    <div class="faq-answer ">
      <div class="faq-answer-content">


        
         <select name="round" class="form-control">

          <option value="1">開發二</option>

        </select>
        <select name="location" class="form-control">
          <option>選擇開發地點:<?php  echo $res['location'];   ?></option>


        </select>
        <select name="type" class="form-control">
          <option>要開發:<?php  echo $res['type'];   ?></option>


        </select>
        

        <div class='input-control'>          
          <textarea rows="10" cols="20" minlength="30" id='x' type='text' class='input-control__input' placeholder=' ' name="text1"readonly="readonly" />原因:
<?php echo $res['text1'];?></textarea>
      </div>

    </div>

  </div>

  <!--2 question-->
  <div class="faq-container">
    <div class="faq-label">
      <div class="faq-label-text">
        該區水質是否受汙染?
      </div>
      <div class="faq-label-icon">
        <span class="material-icons">
          expand_more
        </span>
      </div>

    </div>
    <div class="faq-answer ">
      <div class="faq-answer-content">
        <select name="type2" class="form-control">
          <option>河川污染指數 ( RPI ):<?php  echo $res['type2'];   ?> </option>


        </select>
        <div class='input-control'>
          溶氧量 (DO) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="DO" readonly="readonly" /><?php  echo $res['DO'];?></textarea>



        </div>
        <div class='input-control'>
          生化需氧量 (BOD5) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="BOD5" readonly="readonly" /><?php  echo $res['BOD5'];   ?></textarea>



        </div>
        <div class='input-control'> 
          懸浮固體 (SS) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="SS" readonly="readonly"/><?php  echo $res['SS'];   ?></textarea>



        </div>
        <div class='input-control'>
          氨氮 (NH3-N) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="NH3-N" readonly="readonly"/><?php  echo $res['NH3N'];   ?></textarea>



        </div>
        <div class='input-control'>
          RPI指數:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="RPI" readonly="readonly"/><?php  echo $res['RPI'];   ?></textarea>



        </div>
      </div>





    </div>
    <!-- 3 question -->
    <div class="faq-container">
      <div class="faq-label">
        <div class="faq-label-text">
          該地點的林型有甚麼?
        </div>
        <div class="faq-label-icon">
          <span class="material-icons">
            expand_more
          </span>
        </div>

      </div>
      <div class="faq-answer ">
        <div class="faq-answer-content">

          <div class='input-control'>
            林型請依占比排序:
            <textarea rows="5" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="text2" readonly="readonly" /><?php  echo $res['text2'];   ?></textarea>
        </div>
      </div>
    </div>
 
  <!-- 4 question -->
  <div class="faq-container">
    <div class="faq-label">
      <div class="faq-label-text">
          該地點是否有石虎的蹤跡?
      </div>
      <div class="faq-label-icon">
        <span class="material-icons">
          expand_more
        </span>
      </div>

    </div>

    <div class="faq-answer ">
      <div class="faq-answer-content"> 


        <select name="type3" class="form-control">
          <option><?php  echo $res['type3'];   ?>石虎出現</option>


        </select>
      </div>
      <div class='input-control'>

        出現的地點為何及是否與公路重疊?
        <textarea rows="3" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="text3" readonly="readonly" /><?php  echo $res['type3'];   ?>
      </textarea>
    </div>


  </div>

<!-- 5 question -->
<div class="faq-container">
  <div class="faq-label">
    <div class="faq-label-text">
      該區的其他資訊?
    </div>
    <div class="faq-label-icon">
      <span class="material-icons">
        expand_more
      </span>
    </div>

  </div>
  <div class="faq-answer ">
    <div class="faq-answer-content">
      <div class='input-control'>
       <select name="type4" class="form-control">
        <option><?php  echo $res['type4'];   ?>位於石虎遷移廊道上</option>


      </select>
    </div>

  </div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- 財團案件二結束 -->
            <?php
           
           ?>
        
            </div> 
            </div>
          <?php
          }
          else
            // 保育案件二開始
          {
            $sql="select * from conform1 where id ='".$_SESSION['id']."'";
            $query=mysqli_query($conn,$sql);
            $profession=$_SESSION["profession"];
            $res=mysqli_fetch_array($query);
          ?>
            <div class="show02">
            <div class="embed-responsive embed-responsive-16by9">
              <div class='faq'  style="overflow-y:auto" >
  <div class="global-label">
    <div class="global-label-text">
      環境保育計畫書!
    </div>

  </div>
  <!--1 question-->
  <div class="faq-container">
    <div class="faq-label">
      <div class="faq-label-text">
        保育二預計要保育的地點!
      </div>
      <div class="faq-label-icon" >
        <span class="material-icons">

          expand_more
        </span>
      </div>

    </div>

    <div class="faq-answer ">
      <div class="faq-answer-content">


        <form method="POST" action="busform.php">
         <select name="round" class="form-control">

          <option value="2">保育二</option>

        </select>
        <select name="location" class="form-control">
          <option>選擇保育地點:<?php  echo $res['location'];   ?></option>


        </select>
        <select name="type" class="form-control">
          <option>要保育:<?php  echo $res['type'];   ?></option>
      </select>
             
      <div class='input-control'>
          <textarea rows="10" cols="20" minlength="30" id='x' type='text' class='input-control__input' placeholder=' ' name="text1"readonly="readonly" />原因:
<?php  echo $res['text1'];   ?>
        </textarea>
      </div>
    </div>
  </div>

  <!--2 question-->
  <div class="faq-container">
    <div class="faq-label">
      <div class="faq-label-text">
       該區水質是否受汙染?
      </div>
      <div class="faq-label-icon">
        <span class="material-icons">
          expand_more
        </span>
      </div>

    </div>
    <div class="faq-answer ">
      <div class="faq-answer-content">
        <select name="type2" class="form-control">
          <option>河川污染指數 ( RPI ):<?php  echo $res['type2'];   ?> </option>


        </select>
        <div class='input-control'>
          溶氧量 (DO) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="DO" readonly="readonly" /><?php  echo $res['DO'];   ?></textarea>



        </div>
        <div class='input-control'>
          生化需氧量 (BOD5) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="BOD5" readonly="readonly" /><?php  echo $res['BOD5'];   ?></textarea>



        </div>
        <div class='input-control'> 
          懸浮固體 (SS) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="SS" readonly="readonly"/> <?php  echo $res['SS'];   ?></textarea>



        </div>
        <div class='input-control'>
          氨氮 (NH3-N) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="NH3-N" readonly="readonly"/><?php  echo $res['NH3N'];   ?></textarea>



        </div>
        <div class='input-control'>
          RPI指數:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="RPI" readonly="readonly"/><?php  echo $res['RPI'];   ?></textarea>



        </div>
      </div>





    </div>
    <!-- 3 question -->
    <div class="faq-container">
      <div class="faq-label">
        <div class="faq-label-text">
          該地點的林型有甚麼?
        </div>
        <div class="faq-label-icon">
          <span class="material-icons">
            expand_more
          </span>
        </div>

      </div>
      <div class="faq-answer ">
        <div class="faq-answer-content">

          <div class='input-control'>

            林型請依占比排序:
            <textarea rows="5" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="text2" readonly="readonly" /><?php  echo $res['text2'];   ?>
          </textarea>
        </div>
      </div>
    </div>
 
  <!-- 4 question -->
  <div class="faq-container">
    <div class="faq-label">
      <div class="faq-label-text">
          該地點是否有石虎的蹤跡?
      </div>
      <div class="faq-label-icon">
        <span class="material-icons">
          expand_more
        </span>
      </div>

    </div>

    <div class="faq-answer ">
      <div class="faq-answer-content"> 


        <select name="type3" class="form-control">
          <option><?php  echo $res['type3'];   ?>石虎出現</option>


        </select>
      </div>
      <div class='input-control'>

        出現的地點為何及是否與公路重疊?
        <textarea rows="3" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="text3" readonly="readonly" /><?php  echo $res['text3'];   ?>
      </textarea>
    </div>


  </div>

<!-- 5 question -->
<div class="faq-container">
  <div class="faq-label">
    <div class="faq-label-text">
      該區的其他資訊?
    </div>
    <div class="faq-label-icon">
      <span class="material-icons">
        expand_more
      </span>
    </div>

  </div>
  <div class="faq-answer ">
    <div class="faq-answer-content">
      <div class='input-control'>
       <select name="type4" class="form-control">
        <option><?php  echo $res['type4'];   ?>位於石虎遷移廊道上</option>


      </select>
    </div>

  </div>
</div>
</div>
</div>
</div>
</div>
</div>
            <?php
           
           ?>
        
            </div> 
            </div>
          <?php
          } 
          ?>
</div>

<!-- 案件二結束 -->
<!-- 案件三開始 -->

<div class>
        <?php 
          $sql="select * from busform2 where id ='".$_SESSION['id']."'";
          $query=mysqli_query($conn,$sql);
          $profession=$_SESSION["profession"];
          $res=mysqli_fetch_array($query);
          

          if($res['profession']==$profession)
         {
           ?>
            <div class="show03">
            <div class="embed-responsive embed-responsive-16by9">
<div class='faq'  style="overflow-y:auto" >
  <div class="global-label">
    <div class="global-label-text">
      環境開發計畫書!
    </div>

  </div>
  <!--1 question-->
  <div class="faq-container">
    <div class="faq-label">
      <div class="faq-label-text">
        開發三預計要開發的地點!
      </div>
      <div class="faq-label-icon" >
        <span class="material-icons">

          expand_more
        </span>
      </div>

    </div>

    <div class="faq-answer ">
      <div class="faq-answer-content">


        
         <select name="round" class="form-control">

          <option value="3">開發三</option>

        </select>
        <select name="location" class="form-control">
          <option>選擇開發地點:<?php  echo $res['location'];   ?></option>


        </select>
        <select name="type" class="form-control">
          <option>要開發:<?php  echo $res['type'];   ?></option>


        </select>
        


        <div class='input-control'>
          <textarea rows="10" cols="20" minlength="30" id='x' type='text' class='input-control__input' placeholder=' ' name="text1"readonly="readonly" />原因:
<?php  echo $res['text1'];   ?>

        </textarea>




      </div>

    </div>

  </div>

  <!--2 question-->
  <div class="faq-container">
    <div class="faq-label">
      <div class="faq-label-text">
       該區水質是否受汙染?
      </div>
      <div class="faq-label-icon">
        <span class="material-icons">
          expand_more
        </span>
      </div>

    </div>
    <div class="faq-answer ">
      <div class="faq-answer-content">
        <select name="type2" class="form-control">
          <option>河川污染指數 ( RPI ):<?php  echo $res['type2'];   ?> </option>


        </select>
        <div class='input-control'>
          溶氧量 (DO) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="DO" readonly="readonly" /><?php  echo $res['DO'];   ?></textarea>



        </div>
        <div class='input-control'>
          生化需氧量 (BOD5) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="BOD5" readonly="readonly" /><?php  echo $res['BOD5'];   ?></textarea>



        </div>
        <div class='input-control'> 
          懸浮固體 (SS) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="SS" readonly="readonly"/><?php  echo $res['SS'];   ?></textarea>



        </div>
        <div class='input-control'>
          氨氮 (NH3-N) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="NH3-N" readonly="readonly"/><?php  echo $res['NH3N'];   ?></textarea>



        </div>
        <div class='input-control'>
          RPI指數:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="RPI" readonly="readonly"/><?php  echo $res['RPI'];   ?></textarea>



        </div>
      </div>





    </div>
    <!-- 3 question -->
    <div class="faq-container">
      <div class="faq-label">
        <div class="faq-label-text">
          該地點的林型有甚麼?
        </div>
        <div class="faq-label-icon">
          <span class="material-icons">
            expand_more
          </span>
        </div>

      </div>
      <div class="faq-answer ">
        <div class="faq-answer-content">

          <div class='input-control'>

            林型請依占比排序:
            <textarea rows="5" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="text2" readonly="readonly" /><?php  echo $res['text2'];   ?>
          </textarea>
        </div>
      </div>
    </div>
 
  <!-- 4 question -->
  <div class="faq-container">
    <div class="faq-label">
      <div class="faq-label-text">
          該地點是否有石虎的蹤跡?
      </div>
      <div class="faq-label-icon">
        <span class="material-icons">
          expand_more
        </span>
      </div>

    </div>

    <div class="faq-answer ">
      <div class="faq-answer-content"> 


        <select name="type3" class="form-control">
          <option><?php  echo $res['type3'];   ?>石虎出現</option>


        </select>
      </div>
      <div class='input-control'>

        出現的地點為何及是否與公路重疊?
        <textarea rows="3" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="text3" readonly="readonly" /><?php  echo $res['type3'];   ?>
      </textarea>
    </div>


  </div>

<!-- 5 question -->
<div class="faq-container">
  <div class="faq-label">
    <div class="faq-label-text">
      該區的其他資訊?
    </div>
    <div class="faq-label-icon">
      <span class="material-icons">
        expand_more
      </span>
    </div>

  </div>
  <div class="faq-answer ">
    <div class="faq-answer-content">
      <div class='input-control'>
       <select name="type4" class="form-control">
        <option><?php  echo $res['type4'];   ?>位於石虎遷移廊道上</option>


      </select>
    </div>

  </div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- 財團案件三結束 -->

            <?php
           
           ?>
        
            </div> 
            </div>
          <?php
          }
          else
            // 保育案件三開始
          {
            $sql="select * from conform2 where id ='".$_SESSION['id']."'";
            $query=mysqli_query($conn,$sql);
            $profession=$_SESSION["profession"];
            $res=mysqli_fetch_array($query);
          ?>
            <div class="show03">
            <div class="embed-responsive embed-responsive-16by9">
              <div class='faq'  style="overflow-y:auto" >
  <div class="global-label">
    <div class="global-label-text">
      環境保育計畫書!
    </div>

  </div>
  <!--1 question-->
  <div class="faq-container">
    <div class="faq-label">
      <div class="faq-label-text">
        保育三預計要保育的地點!
      </div>
      <div class="faq-label-icon" >
        <span class="material-icons">

          expand_more
        </span>
      </div>

    </div>

    <div class="faq-answer ">
      <div class="faq-answer-content">


        <form method="POST" action="busform.php">
         <select name="round" class="form-control">

          <option value="3">保育三</option>

        </select>
        <select name="location" class="form-control">
          <option>選擇保育地點:<?php  echo $res['location'];   ?></option>


        </select>
        <select name="type" class="form-control">
          <option>要保育:<?php  echo $res['type'];   ?></option>


        </select>
        
        <div class='input-control'>
          <textarea rows="10" cols="20" minlength="30" id='x' type='text' class='input-control__input' placeholder=' ' name="text1"readonly="readonly" />原因:
<?php  echo $res['text1'];   ?></textarea>

      </div>

    </div>

  </div>

  <!--2 question-->
  <div class="faq-container">
    <div class="faq-label">
      <div class="faq-label-text">
        該區水質是否受汙染?
      </div>
      <div class="faq-label-icon">
        <span class="material-icons">
          expand_more
        </span>
      </div>

    </div>
    <div class="faq-answer ">
      <div class="faq-answer-content">
        <select name="type2" class="form-control">
          <option>河川污染指數 ( RPI ):<?php  echo $res['type2'];   ?> </option>


        </select>
        <div class='input-control'>
          溶氧量 (DO) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="DO" readonly="readonly" /><?php  echo $res['DO'];   ?></textarea>



        </div>
        <div class='input-control'>
          生化需氧量 (BOD5) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="BOD5" readonly="readonly" /><?php  echo $res['BOD5'];   ?></textarea>



        </div>
        <div class='input-control'> 
          懸浮固體 (SS) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="SS" readonly="readonly"/><?php  echo $res['SS'];   ?></textarea>



        </div>
        <div class='input-control'>
          氨氮 (NH3-N) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="NH3-N" readonly="readonly"/><?php  echo $res['NH3N'];   ?></textarea>



        </div>
        <div class='input-control'>
          RPI指數:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="RPI" readonly="readonly"/><?php  echo $res['RPI'];   ?></textarea>



        </div>
      </div>





    </div>
    <!-- 3 question -->
    <div class="faq-container">
      <div class="faq-label">
        <div class="faq-label-text">
          該地點的林型有甚麼?
        </div>
        <div class="faq-label-icon">
          <span class="material-icons">
            expand_more
          </span>
        </div>

      </div>
      <div class="faq-answer ">
        <div class="faq-answer-content">

          <div class='input-control'>

            林型請依占比排序:
            <textarea rows="5" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="text2" readonly="readonly" /><?php  echo $res['text2'];   ?>
          </textarea>
        </div>
      </div>
    </div>
 
  <!-- 4 question -->
  <div class="faq-container">
    <div class="faq-label">
      <div class="faq-label-text">
         該地點是否有石虎的蹤跡?
      </div>
      <div class="faq-label-icon">
        <span class="material-icons">
          expand_more
        </span>
      </div>

    </div>

    <div class="faq-answer ">
      <div class="faq-answer-content"> 


        <select name="type3" class="form-control">
          <option><?php  echo $res['type3'];   ?>石虎出現</option>


        </select>
      </div>
      <div class='input-control'>

        出現的地點為何及是否與公路重疊?
        <textarea rows="3" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="text3" readonly="readonly" /><?php  echo $res['text3'];   ?>
      </textarea>
    </div>


  </div>

<!-- 5 question -->
<div class="faq-container">
  <div class="faq-label">
    <div class="faq-label-text">
      該區的其他資訊?
    </div>
    <div class="faq-label-icon">
      <span class="material-icons">
        expand_more
      </span>
    </div>

  </div>
  <div class="faq-answer ">
    <div class="faq-answer-content">
      <div class='input-control'>
       <select name="type4" class="form-control">
        <option><?php  echo $res['type4'];   ?>位於石虎遷移廊道上</option>


      </select>
    </div>

  </div>
</div>
</div>
</div>
</div>
</div>
</div>

           <?php
           
           ?>
        
            </div> 
            </div>
          <?php
          } 
          ?>
</div>

         
        </div>
        </div>
        <!-- partial -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script><script  src="./script.js"></script>
        <script  src="script2.js"></script>

      
    
  </header>


  <!-- Footer-->
  <footer class="bg-light py-5">
    <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2021 - Company Name</div></div>
  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- SimpleLightbox plugin JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
  <!-- Core theme JS-->
  <script src="landscripts.js"></script>

  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


</body>
</html>