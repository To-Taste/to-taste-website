<?php
$host = 'bananasplit2.db.8568849.hostedresource.com';
$user = 'bananasplit2';
$pass = 'Oranges234!';
$db = 'bananasplit2';


//Connecting to your database
$link = mysql_connect($host, $user, $pass);
if (!$link) {
    echo "error connecting, try again later.";
}
mysql_select_db($db);
mysql_set_charset('utf8', $link);

$sql1 = "SELECT * FROM bananasplit2.recipes";
$result1 = mysql_query($sql1, $link);
while ($row1 = mysql_fetch_assoc($result1)) {

    echo "<a href='./article.php?id=" . $row1['id'] . "'>" . $row1['recipe_title'] . "</a><br/>";

}

?>
<p><a href="./article.php">Add a new recipe</a></p>

