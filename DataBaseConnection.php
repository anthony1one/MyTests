<?php
$mysqli = new mysqli("localhost", "root", "", "mytests_schema");
if ($mysqli->connect_error) die("Connect Error");
$mysqli->query("SET NAMES 'utf8'");