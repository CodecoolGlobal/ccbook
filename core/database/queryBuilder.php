<?php

function selectAllusers(){
    $dbh = new PDO('mysql:host=localhost;dbname=test', 'root', '');

    $stmt = $dbh->query("SELECT * FROM user ");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $dbh = null;
    $stmt = null;
    return $result;
}

function selectUserDetails($column, $table, $field, $fieldValues ){
    $dbh = new PDO('mysql:host=localhost;dbname=codecoolerbook', 'root', '');

    $stmt = $dbh->query( "SELECT *  FROM user WHERE email='pogar@yahoo.com'");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $dbh = null;
    $stmt = null;
    return $result;
}

