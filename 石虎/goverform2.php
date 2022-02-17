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
        國家發展公告!
      </div>

    </div>
    <!--1 question-->
    <div class="faq-container">
      <div class="faq-label">
        <div class="faq-label-text">
          發展三預計要公告的內容!
        </div>
        <div class="faq-label-icon" >
          <span class="material-icons">

            expand_more
          </span>
        </div>

      </div>
      <div class="faq-answer ">
        <div class="faq-answer-content">


          <form method="POST" action="goverform2.php">
           <select name="round" class="form-control">
              
              <option value="3">發展三</option>
             
          </select>
            <select name="location" class="form-control">
              <option>選擇改善地點</option>
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
              <option>要改善甚麼呢?</option>
              <option value="經濟">經濟</option>
              <option value="生態">生態</option>
            </select>

            <div class='input-control'>
              <textarea rows="10" cols="20" minlength="30" id='x' type='text' class='input-control__input' placeholder=' ' name="text" /></textarea>

              <label for='x'  class='input-control__label'>
                請輸入原因:
              </label> 

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
       
       $text= $_POST['text'];
       $round=$_POST['round'];     
       
        $sql="INSERT INTO goverform2(id,location,type,text1,round,createtime,profession,country) values ('".$_SESSION['id']."','$location','$type','$text','$round',now(),'".$_SESSION['profession']."','".$_SESSION['country']."')";
        $query=$conn->query($sql);
       ?>
        <script>
        window.alert('送出成功，歡迎!');
         
        </script>
      <?php
      
    }
       ?>
</div>
<!--2 question-->
<!-- <div class="faq-container">
  <div class="faq-label">
    <div class="faq-label-text">
      How to do something?
    </div>
    <div class="faq-label-icon">
      <span class="material-icons">
        expand_more
      </span>
    </div>

  </div>
  <div class="faq-answer ">
    <div class="faq-answer-content">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et eros in sapien malesuada sodales nec eu purus. Aliquam venenatis aliquet nisi, dictum tristique lectus faucibus vitae.

    </div>

  </div>
</div> -->
<!-- 3 question -->
<!-- <div class="faq-container">
  <div class="faq-label">
    <div class="faq-label-text">
      How to do something?
    </div>
    <div class="faq-label-icon">
      <span class="material-icons">
        expand_more
      </span>
    </div>

  </div>
  <div class="faq-answer ">
    <div class="faq-answer-content">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et eros in sapien malesuada sodales nec eu purus. Aliquam venenatis aliquet nisi, dictum tristique lectus faucibus vitae.
      Aliquam venenatis aliquet nisi, dictum tristique lectus faucibus vitae.
      Aliquam venenatis aliquet nisi, dictum tristique lectus faucibus vitae.

    </div>

  </div>
</div> -->
</div>
<!-- partial -->
<script  src="script2.js"></script>

</body>
</html>
