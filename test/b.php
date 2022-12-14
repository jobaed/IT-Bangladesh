<?php
if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
echo $_SESSION['a'];
echo "<hr>test";
?>
<html>
    
</html>