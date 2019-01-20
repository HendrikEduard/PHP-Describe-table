<?php require_once 'db.php';

//The SQL statement is: DESCRIBE [INSERT TABLE NAME]
$tableToDescribe = 'users';
$statement = $db->query('DESCRIBE ' . $tableToDescribe);

//Fetch our result.
$result = $statement->fetchAll();

//  Loop through the result and print out the column names and their type.
foreach($result as $column){
    echo $column->Field, ' - ', $column->Type, '<br>';
}







