<?php
$mysqli = new mysqli("test.com", "root", "", "mytests_schema");
if ($mysqli->connect_error) die("Connect Error");
$mysqli->query("SET NAMES 'utf8'");