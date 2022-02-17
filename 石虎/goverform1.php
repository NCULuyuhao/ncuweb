<?php session_start();
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="style2.css">

</head>
<body>
  <!-- partial:index.partial.html -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <br>
  <br>
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
          發展二預計要調查的地點!
        </div>
        <div class="faq-label-icon" >
          <span class="material-icons">

            expand_more
          </span>
        </div>

      </div>
      <div class="faq-answer ">
        <div class="faq-answer-content">


          <form method="POST" action="goverform1.php">
           <select name="round" class="form-control">

            <option value="2">調查二</option>

          </select>
          <select name="location" class="form-control">
            <option>選擇調查地點</option>
             <option value="苗栗市">苗栗市</option>
            <option value="頭份市">頭份市</option>
            <option value="苑裡鎮">苑裡鎮</option>
            <option value="通霄鎮">通霄鎮</option>
            <option value="竹南鎮">竹南鎮</option>
            <option value="後龍鎮">後龍鎮</option>
            <option value="卓蘭鎮">卓蘭鎮</option>
            <option value="大湖鄉">大湖鄉</option>
            <option value="公館鄉">公館鄉</option>
            <option value="銅鑼鄉">銅鑼鄉</option>
            <option value="南庄鄉">南庄鄉</option>
            <option value="頭屋鄉">頭屋鄉</option>
            <option value="三義鄉">三義鄉</option>
            <option value="西湖鄉">西湖鄉</option>
            <option value="造橋鄉">造橋鄉</option>
            <option value="三灣鄉">三灣鄉</option>
            <option value="獅潭鄉">獅潭鄉</option>
            <option value="泰安鄉">泰安鄉</option>
          </select>
          <select name="type" class="form-control">
         <option>要調查甚麼呢?</option>
            <option value="渡假村">經濟</option>
            <option value="百貨公司">環境保育</option>
          </select>



          <div class='input-control'>
            <textarea rows="10" cols="20" minlength="30" id='x' type='text' class='input-control__input' placeholder=' ' name="text1" /></textarea>

            <label for='x'  class='input-control__label'>
              請輸入原因:
            </label> 



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
              <option>請選擇河川是否受汙染?</option>
              <option value="未(稍)受污染">未(稍)受污染</option>
              <option value="輕度污染">輕度污染</option>
              <option value="中度污染">中度污染</option>
              <option value="嚴重污染">嚴重污染</option>

            </select>
            <div class='input-control'>
              請填入溶氧量 (DO) mg/L:
              <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="DO" /></textarea>



            </div>
            <div class='input-control'>
             請填入生化需氧量 (BOD5) mg/L:
             <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="BOD5" /></textarea>

             
             
           </div>
           <div class='input-control'> 
            請填入懸浮固體 (SS) mg/L:
            <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="SS" /></textarea>


            
          </div>
          <div class='input-control'>
            請填入氨氮 (NH3-N) mg/L:
            <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="NH3-N" /></textarea>


            
          </div>
          <div class='input-control'>
            請寫出是觀察哪一個監測站，且RPI指數為多少:
           <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="RPI" /></textarea>



         </div>
       </div>





     </div>
     <!-- 3 question -->
     <div class="faq-container">
      <div class="faq-label">
        <div class="faq-label-text">
          該地點的森林型態有甚麼?
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

          森林型態請依占比排序:
          <textarea rows="5" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="text2" /></textarea>
        </div>
        </div>
      </div>
    </div>
    <!-- 4 question -->
    <div class="faq-container">
      <div class="faq-label">
        <div class="faq-label-text">
          該地點是否有石虎蹤跡?
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
            <option>請選擇有或沒有?</option>
            <option value="有">有</option>
            <option value="沒有">沒有</option>

          </select>
        </div>
        <div class='input-control'>

          出現的地點及海拔高度為何?以及是否與公路重疊?
          <textarea rows="3" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="text3" /></textarea>
        </div>


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
            <option>有沒有位於石虎遷移廊道上?</option>
            <option value="有">有</option>
            <option value="沒有">沒有</option>

          </select>
        </div>

      </div>
    </div>
  </div>




              <button type="submit" class="btn btn-primary"  name="sendform" onclick="return confirm('一經送出即無法更改，確定嗎?')"><span class="glyphicon glyphicon-save"></span>送出</button>
              

            </div>

          </div>

        </div>

      </form>
     <?php 
if(isset($_POST['location']))
{  
 $location = $_POST["location"];
 $type=$_POST['type'];
 $text1=$_POST['text1'];
 $round=$_POST['round']; 
 $type2= $_POST['type2'];
 $DO=$_POST['DO'];  
 $BOD5=$_POST['BOD5'];  
 $SS=$_POST['SS'];  
 $NH3N=$_POST['NH3-N']; 
 $RPI=$_POST['RPI'];
 $text2=$_POST['text2']; 
 
 $type3=$_POST['type3'];
 $text3=$_POST['text3'];
 $type4=$_POST['type4'];


 $sql="INSERT INTO goverform1(id,location,type,text1,round,createtime,profession,country,type2,DO,BOD5,SS,NH3N,RPI,text2,type3,text3,type4) values ('".$_SESSION['id']."','$location','$type','$text1','$round',now(),'".$_SESSION['profession']."','".$_SESSION['country']."','$type2','$DO','$BOD5','$SS','$NH3N','$RPI','$text2','$type3','$text3','$type4')";
  $query=$conn->query($sql);
  ?>
        <script>
        window.alert('送出成功，歡迎!');
        window.location.href='finish.html';  
        </script>
      <?php
      
    }
       ?>
</div>

</div>
<!-- partial -->
<script  src="script2.js"></script>

</body>
</html>