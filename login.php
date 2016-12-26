<?php
setcookie("todayDate", date('l \t\h\e jS'));

	//echo $_POST['password'];
	//echo $_POST['mail'];
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('sqlite/users.db');
      }

      
   }

   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
     // echo "Opened database successfully\n";
   }

   $sql =<<<EOF
      SELECT * from user_id;
EOF;
$ret = $db->query($sql);

while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
     // echo "mail = ". $row['mail'] . "\n";
     //  echo "password = ". $row['password'] ."\n";
	if(($_POST['mail'] === $row['mail'])&($_POST['password'] === $row['password'] )){ 
		header ('Location: calc.php'); 
		exit();
	}
      }
  		
      header('Location: index.php');
      exit();
   echo "Operation done successfully\n";
   $db->close();

   
?>