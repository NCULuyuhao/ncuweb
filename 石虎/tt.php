<?php 
include('conn.php'); 
session_start();
if(isset($_POST['sendform']))
{  
 $location = $_POST["location"];
 $type=$_POST['type'];
 $type2= $_POST['type2'];
 $text2=$_POST['text2']; 
 $typex=$_POST['typex'];
 $country=$_SESSION['country'];
 
 
 
  $sql="INSERT into buscomform (country,buscase,location,type,type2,text2) values 
  ('$country','1','$location','$type','$type2','$text2')";
  $query=$conn->query($sql);


  header('Location:selectform.php');
}





if(isset($_POST['sendform1']))
{  

 $location = $_POST["location"];
 $type=$_POST['type'];
 $type2= $_POST['type2'];
 $text2=$_POST['text2']; 
 
 $country=$_SESSION['country'];
 
 
 
  $sql="INSERT into buscomform (country,buscase,location,type,type2,text2) values 
  ('$country','2','$location','$type','$type2','$text2')";
  $query=$conn->query($sql);


  header('Location:selectform.php');
}

if(isset($_POST['sendform2']))
{  
 $location = $_POST["location"];
 $type=$_POST['type'];
 $type2= $_POST['type2'];
 $text2=$_POST['text2']; 
 
 $country=$_SESSION['country'];
 
 
 
  $sql="INSERT into buscomform (country,buscase,location,type,type2,text2) values 
  ('$country','3','$location','$type','$type2','$text2')";
  $query=$conn->query($sql);


  header('Location:selectform.php');
}


if(isset($_POST['sendform3']))
{  
 $location = $_POST["location"];
 $type=$_POST['type'];
 $type2= $_POST['type2'];
 $text2=$_POST['text2']; 
 
 $country=$_SESSION['country'];
 
 
 
  $sql="INSERT into concompleteform (country,concase,location,type,type2,text2) values 
  ('$country','1','$location','$type','$type2','$text2')";
  $query=$conn->query($sql);


  header('Location:selectform.php');
}

if(isset($_POST['sendform4']))
{  
 $location = $_POST["location"];
 $type=$_POST['type'];
 $type2= $_POST['type2'];
 $text2=$_POST['text2']; 
 
 $country=$_SESSION['country'];
 
 
 
  $sql="INSERT into concompleteform (country,concase,location,type,type2,text2) values 
  ('$country','2','$location','$type','$type2','$text2')";
  $query=$conn->query($sql);


  header('Location:selectform.php');
}



if(isset($_POST['sendform5']))
{  
 $location = $_POST["location"];
 $type=$_POST['type'];
 $type2= $_POST['type2'];
 $text2=$_POST['text2']; 
 
 $country=$_SESSION['country'];
 
 
 
  $sql="INSERT into concompleteform (country,concase,location,type,type2,text2) values 
  ('$country','3','$location','$type','$type2','$text2')";
  $query=$conn->query($sql);


  header('Location:selectform.php');
}


if(isset($_POST['unsendform']))
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



 
 
 
  $sql="INSERT INTO unbuscomform(id,location,concase,type,text1,round,createtime,profession,country,type2,DO,BOD5,SS,NH3N,RPI,text2,type3,text3,type4) values ('".$_SESSION['id']."','$location','1','$type','$text1','$round',now(),'".$_SESSION['profession']."','".$_SESSION['country']."','$type2','$DO','$BOD5','$SS','$NH3N','$RPI','$text2','$type3','$text3','$type4')";
  $query=$conn->query($sql);

  header('Location:unbuscomplete.php');
}


if(isset($_POST['unsendformwhy']))
{  

  
  
  $why = $_POST['why'];
  
  $sql="UPDATE unbuscomform SET why='$why' WHERE concase='1' AND country='".$_SESSION['country']."'";
  $query=$conn->query($sql);
  header('Location:index2.php');
}



if(isset($_POST['unsendform1']))
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



 
 
 
  $sql="INSERT INTO unbuscomform(id,location,concase,type,text1,round,createtime,profession,country,type2,DO,BOD5,SS,NH3N,RPI,text2,type3,text3,type4) values ('".$_SESSION['id']."','$location','2','$type','$text1','$round',now(),'".$_SESSION['profession']."','".$_SESSION['country']."','$type2','$DO','$BOD5','$SS','$NH3N','$RPI','$text2','$type3','$text3','$type4')";
  $query=$conn->query($sql);
  header('Location:unbuscomplete1.php');
}

if(isset($_POST['unsendformwhy1']))
{  

  
  
  $why = $_POST['why'];
  
  $sql="UPDATE unbuscomform SET why='$why' WHERE concase='2' AND country='".$_SESSION['country']."'";
  $query=$conn->query($sql);
  header('Location:index2.php');
}




if(isset($_POST['unsendform2']))
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



 
 
 
  $sql="INSERT INTO unbuscomform(id,location,concase,type,text1,round,createtime,profession,country,type2,DO,BOD5,SS,NH3N,RPI,text2,type3,text3,type4) values ('".$_SESSION['id']."','$location','2','$type','$text1','$round',now(),'".$_SESSION['profession']."','".$_SESSION['country']."','$type2','$DO','$BOD5','$SS','$NH3N','$RPI','$text2','$type3','$text3','$type4')";
  $query=$conn->query($sql);
  header('Location:unbuscomplete2.php');
}
if(isset($_POST['unsendformwhy2']))
{  

  
  
  $why = $_POST['why'];
  
  $sql="UPDATE unbuscomform SET why='$why' WHERE concase='3' AND country='".$_SESSION['country']."'";
  $query=$conn->query($sql);
  header('Location:index2.php');
}




if(isset($_POST['unsendform3']))
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



 
 
 
  $sql="INSERT INTO unconcomform(id,location,concase,type,text1,round,createtime,profession,country,type2,DO,BOD5,SS,NH3N,RPI,text2,type3,text3,type4) values ('".$_SESSION['id']."','$location','1','$type','$text1','$round',now(),'".$_SESSION['profession']."','".$_SESSION['country']."','$type2','$DO','$BOD5','$SS','$NH3N','$RPI','$text2','$type3','$text3','$type4')";
  $query=$conn->query($sql);
  header('Location:unbuscomplete3.php');
}

if(isset($_POST['unsendformwhy3']))
{  

  
  
  $why = $_POST['why'];
  
  $sql="UPDATE unconcomform SET why='$why' WHERE concase='1' AND country='".$_SESSION['country']."'";
  $query=$conn->query($sql);
  header('Location:index2.php');
}

if(isset($_POST['unsendform4']))
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



 
 
 
  $sql="INSERT INTO unconcomform(id,location,concase,type,text1,round,createtime,profession,country,type2,DO,BOD5,SS,NH3N,RPI,text2,type3,text3,type4) values ('".$_SESSION['id']."','$location','2','$type','$text1','$round',now(),'".$_SESSION['profession']."','".$_SESSION['country']."','$type2','$DO','$BOD5','$SS','$NH3N','$RPI','$text2','$type3','$text3','$type4')";
  $query=$conn->query($sql);
  header('Location:unbuscomplete4.php');
}

if(isset($_POST['unsendformwhy4']))
{  

  
  
  $why = $_POST['why'];
  
  $sql="UPDATE unconcomform SET why='$why' WHERE concase='2' AND country='".$_SESSION['country']."'";
  $query=$conn->query($sql);
  header('Location:index2.php');
}


if(isset($_POST['unsendform5']))
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



 
 
 
  $sql="INSERT INTO unconcomform(id,location,concase,type,text1,round,createtime,profession,country,type2,DO,BOD5,SS,NH3N,RPI,text2,type3,text3,type4) values ('".$_SESSION['id']."','$location','3','$type','$text1','$round',now(),'".$_SESSION['profession']."','".$_SESSION['country']."','$type2','$DO','$BOD5','$SS','$NH3N','$RPI','$text2','$type3','$text3','$type4')";
  $query=$conn->query($sql);
  header('Location:unbuscomplete5.php');
}

if(isset($_POST['unsendformwhy5']))
{  

  
  
  $why = $_POST['why'];
  
  $sql="UPDATE unconcomform SET why='$why' WHERE concase='3' AND country='".$_SESSION['country']."'";
  $query=$conn->query($sql);
  header('Location:index2.php');
}

?>


