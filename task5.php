<?php
// set cookies
setcookie("color","dark");
setcookie("font","boald");

echo"<pre>";
    print_r($_COOKIE);
echo"</pre>";
// set session and destroy it

session_start();
$_SESSION['name']="Alaa";
isset($_SESSION['countviews']) ? $_SESSION['countviews']++ : $_SESSION['countviews']=1;
echo "welcome "  . $_SESSION['name' ]  . "views count is "  . $_SESSION['countviews'] ;

session_destroy();

?>