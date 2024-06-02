<?php

include "../../Services/Permission/HasPermission.php";


$has_permission = new HasPermission();

echo $has_permission->HasPermission(1,2);