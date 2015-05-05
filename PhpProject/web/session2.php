<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite page is " . $_SESSION["favpage"] . ".<br>";
?>

</body>
</html>