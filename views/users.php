<?php
$user = "" ;
$usercontroller = new UserController () ;
$objectUser = $usercontroller->getUser ($user = "") ;
print $objectUser[0]["name"];
