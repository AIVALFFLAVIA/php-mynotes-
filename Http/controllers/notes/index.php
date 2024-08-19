<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
/** @var array $notes */
$notes = $db->query('SELECT * from notes where user_id = 16')->get();

view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);