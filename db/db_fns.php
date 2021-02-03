<?php
function get_validate($sql)
{
    require_once 'db/connection.php';
    $conn = get_connection();
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            mysqli_close($conn);
            return $row;
        }
    } else {
        mysqli_close($conn);
        return null;
    }
}

function insert_items($sql)
{
    require_once 'db/connection.php';
    $conn = get_connection();
    if (mysqli_query($conn, $sql)) {
        return  true;
    } else {
        return false;
    }
    mysqli_close($conn);
}