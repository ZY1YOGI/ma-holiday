<?php

try {
    $dbh = new PDO('pgsql:host=koyeb-adm:n2kDmgAisjl1@ep-still-unit-a2255m93.eu-central-1.pg.koyeb.app;port=5432;dbname=koyebdb;user=koyeb-adm;password=n2kDmgAisjl1');
    echo "PDO connection object created";
} catch (PDOException $e) {
    echo $e->getMessage();
}
postgres://koyeb-adm:n2kDmgAisjl1@ep-still-unit-a2255m93.eu-central-1.pg.koyeb.app/koyebdb
