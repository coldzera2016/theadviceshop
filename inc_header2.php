<?php
$filename = substr(strrchr($_SERVER['SCRIPT_NAME'], "/"), 1); // missing '' around index - notice error
$name = substr($filename, 0, strrpos($filename, ".")); ?>
<header id="pageHeader2">
    <h1><span class="glyphicon glyphicon-ok"></span> The Advice Shop</h1>
</header>
