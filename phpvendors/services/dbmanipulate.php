<?php

//Osnovne funkcije koje frse direktnu manipulaciju sa podacima iz baze
include "dbconnection.php";
include "dbconfig.php";

function query($query)
{
    global $con;
    try {
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $con->beginTransaction();
        $query = $con->prepare($query);
        $query->execute();
        $con->commit();
    } catch (Exception $e) {
        $con->rollBack();
        echo "Failed: " . $e->getMessage();
    } finally {
        return $query;
    }
}


    function escape($string)
    {
        global $con;
        return $con->quote($string);
    }

    function fetch_array($result)
    {
        global $con;
        $row = $result->fetch();
        return $row;
    }

    function confirm($result)
    {
        global $con;
        if (!$result) {
            die("FAILED" . mysqli_error($con));
        }
    }

    function row_count($result)
    {
        return $result->rowCount();
    }