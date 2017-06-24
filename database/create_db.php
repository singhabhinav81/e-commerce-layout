<?php

// connect to mysql
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "abhinav21";
$dbname = "website";

$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  if(mysqli_connect_errno()){
    die('could not connect: ' . mysqli_connect_error() .
           "(" . mysqli_connect_errno() . ")"
           );
  }
?>
<?php
 // create databse if not exist

   $query = 'CREATE DATABASE IF NOT EXISTS website';
     if(mysqli_query($db, $query)){
     	echo "database created successfully.. \n";
     }else {
     	die('could not connect: ' . mysqli_error($db));
     }

 // make sure that recently database is active one

  mysqli_select_db( $db, 'website');
  if(! $db){
  	die('could not connect: ' . mysqli_error($db));
  }

 // create table

 $query = 'CREATE TABLE products(
           product_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
           title VARCHAR(255) NOT NULL,
           price DECIMAL(10,2) NOT NULL,
           list_price DECIMAL(10,2) NOT NULL,
           brand INT NOT NULL,
           categories VARCHAR(255) NOT NULL, 
           image VARCHAR(255) NOT NULL,
           description TEXT NOT NULL,
           PRIMARY KEY(product_id)

  )
  ENGINE = MYISAM ';

  mysqli_query($db, $query);
if(! $db){

	die('could not connect:' . mysqli_error($db));
}else{

 echo "database is created";
 }

?>
