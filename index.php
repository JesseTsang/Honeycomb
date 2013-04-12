<?php //index.php
include_once 'header.php';

echo "<br /><span class='main'>Welcome to Honeycomb,";

if ($loggedin) echo " Welcome $user, you are logged in.";
else           echo ' Please sign up or log in.';

?>

</span><br /><br /></body></html>
