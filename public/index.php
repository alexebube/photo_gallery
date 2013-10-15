<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once("../includes/database.php");

if (isset($database)): 
    echo "true";
else:
    echo "false";
endif;

echo $database->mysql_prep("It's working well<br/>");

/**
$sql  = "INSERT INTO users (id, username, password, first_name, last_name) ";
$sql .= "VALUES (1, 'alexebube', 'alexebube', 'Alex', 'Obi')";
$result = $database->query($sql);  **/

$sql = "SELECT * FROM users WHERE id = 1";
$result_set = $database->query($sql);
$found_user = $database->fetch_array($result_set);
echo $found_user['username'];

?>
