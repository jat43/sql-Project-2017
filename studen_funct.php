<?php

session_start();

define('DB_NAME', 'jat43');
define('DB_USER', 'jat43');
define('DB_PASSWORD', 'jupiter49');
define('DB_HOST', 'sql.njit.edu');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}


$val = $_POST['courses']


$id = $_SESSION['u_id']

$sql = "select ClassName, Section, ";


if (!mysql_query($sql)) {
	die('Error '. mysql_error());
} else {
	$result = mysql_query($sql);
}

if (mysql_num_rows($result) > 0) {
	while($row = mysql_fetch_assoc($result)) {
        echo "id: " . $row["Id"]. " - Password: " . $row["Password"]. " - " . "Usertype: " . $row["UserType"]. "<br>";

    }
} else {
    echo "User Doesnt Exist";
}


mysql_close();
?>