<?php
session_start();
error_reporting(0);
if($_SESSION['name']==null)
        header('Location: login.php');
require_once('function.php');
$words=$_GET['words'];
//echo $words;
$table=kmptable($words);
//print_r($table);
$connection=mysql_connect("db4free.net","weisong","victor1234") or die("host connection error");
mysql_select_db("fisonguser",$connection) or die("database error");
$query="SELECT * FROM songs";
$songs_list=mysql_query($query);
$num=mysql_numrows($songs_list);
//mysql_close();

$i=0;
$score=array();
while($i<$num)
{
  //echo "$i";
 $song_id=mysql_result($songs_list, $i,"id");
$song_lyric=mysql_result($songs_list, $i, "lyric");
//echo $song_id;
//echo $song_lyric;
  if(kmp($table,$words,$song_lyric))
  {
    //echo "haha$i";
    $count=contoarray($words);
    $score[$song_id]=count($count)+1;
  }
  else {
   // echo "hehe$i";
    $score[$song_id]=LCS($song_lyric,$words);
  }
  $i++;
}
arsort($score);
$result=array_keys($score);

//print_r($score);
?>


<head>
   <title>fiSong</title>
      <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='icon' href='http://localhost/example/image/m0.jpg'>



       <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>


        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css'>

  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
  <link type='text/css' rel='stylesheet' href='http://localhost/example/css/style.css'>
       </head>
        <ul>
      <li><a href='main.php'>fiSong</a></li>

      <ul style='float:right;list-style-type:none;'>
        <?php if($_SESSION['admin']==1)  echo "<li><a href='admin.php'>Admin Pannel</a></li>";  ?>
       <?php echo "<li><a class='active'>WELCOME  " . $_SESSION['name']. "</a></li>" ?>
      <li><a href="logout.php">Logout</a></li>
      </ul>
  </ul>


  <body>

            <div class="container">
                <a href="addsong.php" class="btn btn-primary btn-lg active" role="button">Add a Song</a>

                <table class="table table-hover">
                  <thead>
                  <tr>
                    <th><font class='font'>Songs</font></th>
                    <th><font class='font'>Options</font></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                 
                  
                  $i=0;
                  while($i<3)
                  {
                    $id=mysql_real_escape_string($result[$i]);
                    //echo $result[$i];
                    $tmp=mysql_fetch_array(mysql_query("SELECT `title` FROM `songs` WHERE `id`='$id'"));
                    $title=$tmp['title'];
                    echo "<tr>
                    <td><font class='font'>$title</font></td>
          
                      
                    <td><a href='play.php?id=$id' >Play</a></td>
                    </tr>";
                    $i++;
                  }

                  //print_r($score);
                  //print_r($result);
                  ?>
                 </tbody>
                </table>


            </div>
        </body>