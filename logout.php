<?php
include "common.php";

session_start();
session_unset();
session_destroy();


header("Location:http://localhost/site/videos.php");




  ?>