<?php
if (isset($_POST)) {
    $host = 'bananasplit2.db.8568849.hostedresource.com';
    $user = 'bananasplit2';
    $pass = 'Oranges234!';
    $db = 'bananasplit2';


//Connecting to your database
    $link = mysqli_connect($host, $user, $pass);
    if (!$link) {
        echo "error connecting, try again later.";
    }
    mysqli_select_db($link,$db);
    mysqli_set_charset($link,'utf8');

    if ($_POST['recipe-type'] == "update") {
        $sql = "UPDATE bananasplit2.recipes SET recipe_title = '" . addslashes($_POST['recipe-title']) . "' , recipe = '" . addslashes($_POST['recipe']) . "' where id =" . $_POST['recipe-id'];
        $result = mysqli_query( $link,$sql);
        if ($result) {
            $sql1 = "SELECT * FROM bananasplit2.recipes where id=" . $_POST['recipe-id'];
            $result1 = mysqli_query($link,$sql1);
            $row1 = mysqli_fetch_assoc($result1);

            echo $row1['recipe'];
        }
    } else {
        $sql = "INSERT INTO bananasplit2.recipes(recipe_title,recipe) VALUES ('" . addslashes($_POST['recipe-title']) . "','" . addslashes($_POST['recipe']) . "')";

        $result = mysqli_query( $link,$sql);

        $recipe_id = mysqli_insert_id($link);
        if ($result) {
            $sql1 = "SELECT * FROM bananasplit2.recipes where id=" . $recipe_id;
            $result1 = mysqli_query( $link,$sql1);
            $row1 = mysqli_fetch_assoc($result1);

            echo $row1['recipe'];


        }
    };
};
?>
<p>&nbsp;</p>
<a href="./recipelist.php">Return to the Recipe List</a>

