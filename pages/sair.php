<?php

$status = session_status();
if($status == PHP_SESSION_NONE){
session_start();
session_destroy();
};

?>
<script>
  location.href='/pages/login.php';
</script>