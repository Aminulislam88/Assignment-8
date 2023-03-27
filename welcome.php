
<?php
if (isset($_GET['firstname'])) {
    $firstname = $_GET['firstname'];
    echo "<h1>Welcome, $firstname!</h1>";
}
?>