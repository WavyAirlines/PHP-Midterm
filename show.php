<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shows</title>
</head>
<body>
<h1> Service Selected!</h1>

<?php
$postId = $_GET;
   $db = new PDO('mysql:host=172.31.22.43;dbname=Cameron200535424', 'Cameron200535424', 'UsgiRKk21q');


   $sql = "SELECT * FROM shows WHERE serviceId = :serviceId";

   $cmd = $db->prepare($sql);

   $cmd->execute();

   $rows = $cmd->fetchAll();

       if ($db = !null){
           echo "You are connected to the database.";
       } else{
           echo "you are not connected to the database";
       }


   
   $table_html = "<table>\n";
   $table_html .= "
   <tr>
   <th>serviceId</th>
   <th>title</th>
</tr>\n";

foreach ($rows as $row) {
   $table_html .= "
   <tr>
       <td>{$row['serviceId']}</td>    
       <td>{$row['name']}</td>
   </tr>\n";
}

$table_html .= "</table>\n";

echo $table_html;

?>
</body>
</html>