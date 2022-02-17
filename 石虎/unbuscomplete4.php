<?php include("tt.php");


?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <!-- <link rel="stylesheet" href="style2.css"> -->

</head>
<body>
  <!-- partial:index.partial.html -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" href="style2.css">
  <div class='faq'  style="overflow-y:auto" >
    <div class="global-label">

      

    </div>
    <!--1 question-->
    <div class="faq-container">
      <div class="faq-label">
        <div class="faq-label-text">
          請點開輸入此案件未通過的原因
        </div>
        <div class="faq-label-icon" >
          <span class="material-icons">

            expand_more
          </span>
        </div>

      </div>
      <div class="faq-answer ">
        <div class="faq-answer-content">


          <form method="POST" action="tt.php">
           
          



          <div class='input-control'>
            <textarea rows="10" cols="20"  id='x' type='text' class='input-control__input' placeholder=' ' name="why" /></textarea>

            <label for='x'  class='input-control__label'>
              請輸入原因:
            </label> 



          </div>

        </div>

      </div>

     

  <button type="submit" class="btn btn-primary"  name="unsendformwhy4" onclick="return confirm('一經送出即無法更改，確定嗎?')"><span class="glyphicon glyphicon-save"></span>不通過</button>



</form>

</div>

<!-- partial -->
<script  src="script2.js"></script>

</body>
</html>