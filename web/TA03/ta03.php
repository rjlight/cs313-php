<?php
echo 'Your name is: '. $_POST["name"].'<br>';
echo 'Your email is: '. $_POST["email"].'<br>';
echo 'Your major is: '. $_POST["major"].'<br>';
echo 'Your comment is: '. $_POST["comments"].'<br>';
echo '<a href="mailto:' .$_POST["email"]. ' ">'.$_POST["email"].'</a>';
?>