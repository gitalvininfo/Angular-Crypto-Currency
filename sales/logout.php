<?php
session_start();
?>


<?php
unset($_SESSION['user_id']);
echo '<meta http-equiv="refresh" content="2;url=index.php">';
echo '<i>Logging out. Please wait...</i>';
?>