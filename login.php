<?php
setcookie("todayDate", date('l \t\h\e jS'));

//	echo $_POST['password'];
//	echo $_POST['email'];
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
  //    echo "Opened database successfully\n";
   }

   $sql =<<<EOF
      SELECT * from users;
EOF;
$ret = $db->query($sql);

while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
    //  echo "email = ". $row['email'] . "\n";
    //  echo "password = ". $row['password'] ."\n";
	if(($_POST['email'] === $row['email'])&($_POST['password'] === $row['password'] )){ 
		header ('Location: calc.php'); 
		exit();
	}
      }
  		
      header('Location: index.php');
      exit();
   echo "Operation done successfully\n";
   $db->close();

   
?>
