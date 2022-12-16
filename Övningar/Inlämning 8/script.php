<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inlämning 8";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error)
{
    die("connection to dataase failed :(");
}


$name = $_POST["name"];
$email = $_POST["email"];
$homepage = $_POST["homepage"];
$comment = $_POST["comment"];
$sql = "INSERT INTO guestbook (name, email, homepage, comment, time) VALUES ('$name', '$email', '$homepage', '$comment', now())";
$conn->query($sql);

$request = $conn->prepare("SELECT * FROM guestbook");

$request->execute();

$result = $request->get_result();

echo "POSTS: <br> <br>";

if (mysqli_num_rows($result) > 0){
  while ($obj = mysqli_fetch_assoc($result)) {
    foreach($obj as $value){
      $colum = array_search(str_replace("LP", "", $value), $obj);
      echo "$colum: ";
      echo $value;
      echo "<br>";
    }
    echo "<br> <hr> <br>"; 
  }
}

?>