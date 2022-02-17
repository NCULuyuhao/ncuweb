<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="style2.css">


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
        <select name="typex" class="form-control">
          <option>材質是:<?php  echo $res['typex'];   ?></option>

        </select>


        <div class='input-control'>
          <textarea rows="10" cols="20" minlength="30" id='x' type='text' class='input-control__input' placeholder=' ' name="text1"readonly="readonly" />原因:<?php  echo $res['text1'];   ?>

        </textarea>




      </div>

    </div>

  </div>

  <!--2 question-->
  <div class="faq-container">
    <div class="faq-label">
      <div class="faq-label-text">
        該區水質如何?
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
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="DO" readonly="readonly" />
          <?php  echo $res['DO'];   ?></textarea>



        </div>
        <div class='input-control'>
          生化需氧量 (BOD5) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="BOD5" readonly="readonly" />
          <?php  echo $res['BOD5'];   ?></textarea>



        </div>
        <div class='input-control'> 
          懸浮固體 (SS) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="SS" readonly="readonly"/>
          <?php  echo $res['SS'];   ?></textarea>



        </div>
        <div class='input-control'>
          氨氮 (NH3-N) mg/L:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="NH3-N" readonly="readonly"/>
          <?php  echo $res['NH3N'];   ?></textarea>



        </div>
        <div class='input-control'>
          RPI指數:
          <textarea rows="1" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="RPI" readonly="readonly"/>
          <?php  echo $res['RPI'];   ?></textarea>



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

            欲砍伐林型請依占比排序:
            <textarea rows="5" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="text2" readonly="readonly" />
            <?php  echo $res['text2'];   ?>
          </textarea>
        </div>
      </div>
    </div>
 
  <!-- 4 question -->
  <div class="faq-container">
    <div class="faq-label">
      <div class="faq-label-text">
        該地點有沒有石虎出現?
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

        出現的時間點及次數?
        <textarea rows="3" cols="1" id='x' type='text' class='input-control__input' placeholder=' ' name="text3" readonly="readonly" />
        <?php  echo $res['type3'];   ?>石虎出現
      </textarea>
    </div>


  </div>

<!-- 5 question -->
<div class="faq-container">
  <div class="faq-label">
    <div class="faq-label-text">
      有沒有位於石虎遷移廊道上?
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

