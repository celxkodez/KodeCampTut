<?php
require_once __DIR__ . "/app/database/Query.php";

use App\Database\Query;

if (isset($_GET['id'])) {

    $query = new Query();

    $query->execute("DELETE FROM todos where id = {$_GET['id']}");
}
header("Location: /");
