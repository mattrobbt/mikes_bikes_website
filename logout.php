<?php

session_start();

session_unsset();

session_destroy();

header("Location: /");

?>