<?php ini_set('display_errors', 1); ?>

<html>
<style>
        body {
            background:aquamarine
        }
    </style>
<body>

<?php 
echo  $_POST["Username"];
if($_POST["Password"] == "28dussar") {
    header("Location: home.html");
}
else {
    echo " Access denied !";
}
?>
<br>
</body>
</html> 