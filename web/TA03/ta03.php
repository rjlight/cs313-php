<?php
echo 'Your name is: '. $_POST["name"]. '<br>';
echo 'Your email is: <a href="mailto:' .$_POST["email"]. ' ">'.$_POST["email"].'</a><br>';
echo 'Your major is: '. $_POST["major"]. '<br>';
echo 'Your comment is: '. $_POST["comments"]. '<br>';

$continents = $_POST['continents'];
  if(empty($continents)) 
  {
    echo("You didn't select any continents.");
  } 
  else
  {
    $N = count($continents);

    echo("You selected $N continent: <br>");

    foreach($_POST['continents'] as $selected){
    echo "You have selected: ". $selected."</br>";
    }
  }
?>