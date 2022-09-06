
<?php

if (isset($_GET["module"]) && isset($_GET["id"])) {

    $sqlDel = "DELETE FROM category WHERE id=".$_GET["id"];
    mysqli_query($conn, $sqlDel);
    header('Location: index.php?module=listcategory');
}
?>
 
