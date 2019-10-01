<?php
echo 'Your name is: '. $_POST["name"].'<br>';
echo 'Your email is: '. $_POST["email"].'<br>';
echo 'Your major is: '. $_POST["major"].'<br>';
echo 'Your comment is: '. $_POST["comments"].'<br>';
echo '<a href="mailto:' .$_POST["email"]. ' ">'.$_POST["email"].'</a>';

$continents = $_POST['continents'];
  if(empty($continents)) 
  {
    echo("You didn't select any continents.");
  } 
  else
  {
    $N = count($continents);

    echo("You selected $N continent: ");
    for($i = 0; $i < $N; $i++)
    {
      echo($N. ": ". $continents[$i] . "<br>");
    }
  }
?>