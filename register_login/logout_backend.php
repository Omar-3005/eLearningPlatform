<?php

session_start();
session_unset();
session_destroy();

header('Location: /Website-Building/home_page/home_page.php');
exit();

?>