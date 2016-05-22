<?php
include 'const.inc.php';
include 'db.inc.php';
?>

<!DOCTYPE html> 
<html> 
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">

<title>Портал СіВ відділу</title> 
<meta charset="UTF-8"> 
</head> 
<body> 
<div class="main"> 
  
<?php require_once 'menu.inc.php';?>  
          
	<div class="work">


<?php
$id = '';
if(isset($_GET['id'])){
  $id=$_GET['id'];

  switch ($id) {
    case 'showUsers.php': include 'showUsers.php';
      break;
    
  }
}






?>




	</div>

</div> 

</body>
</html>



