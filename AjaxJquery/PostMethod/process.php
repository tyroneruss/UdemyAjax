
<?php

$name  = $_POST["name"];
$email = $_POST["email"];

?>
<span style="color: blue;"> 
    <b>This is the new content <?php echo $name . ' ' . $email ?> which has been loaded by Ajax.</b>
</span>