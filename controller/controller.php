<?php
function fetchData($dbconn)
{
    $state = $dbconn->prepare("SELECT * FROM user");
    $state->execute();
    while ($row = $state->fetch(PDO::FETCH_BOTH)) {
        echo "<li>" . $row['fullname'] . "</li>";
    }
}
