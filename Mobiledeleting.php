<html>
<head>
<style>
h2{
	color:red;
	font-family: gotham;
	text-align: center;
	font-size:80px;
}


   img{
                 position: absolute;
                 background: none;
                 padding-top:100px;
                 float: left;
                 overflow: hidden;
                 width: 100px;
                 height: 100px;
               
                 padding-left: 600px;
                 padding-bottom:50px;

}


	
}
</style>
</head>
<body>
	<body bgcolor="#0a0a0a">
<?php
$dbserver="localhost";
$dbusername="root";
$dbpassword="";
$dbname="website";

$connection=mysqli_connect($dbserver,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_errno())
{
  die('Database connect failed'.mysqli_connect_error());
  }
  else
  {
  $query="delete from student where mobile='{$_POST["mo"]}'";

   $result=mysqli_query($connection,$query);
  
  if($result)

  {
    echo "<img src='SU.png'>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<h2>RECORD DELETED!!"."</h2>"."<meta http-equiv='refresh' content='1 url=show table.php'>";



    }
    else
    {
      echo "<img src='delete.png'>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<h2> NO RECORD DELETED!!"."</h2>"."<meta http-equiv='refresh' content='1 url=show table.php'>";

      }
    }
?>
</body>
</html>