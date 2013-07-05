<?php

/* db connection */
include('connect.php');
/* id posted with AJAX */
$id =$_POST['id'];


$query = mysql_query("SELECT * FROM votes WHERE user_id = " . $id);
/* check if row exists */
if (mysql_num_rows($query) == 1) {
    /* if id found -> update row in db */
    mysql_query("UPDATE votes SET vote_up = vote_up + 1 WHERE user_id = " . $id);
} else {
    /* if id not found -> insert into db */
    mysql_query("INSERT INTO votes SET vote_up = 1,user_id = " . $id);
}




?>
