<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select-service</title>
</head>

<body>
    <h1>Welcome to bloccbuster!</h1>
    <!-- <fieldset>
        <legend>Select your Service!</legend>
     <form action="shows.php" method="post">
    <select name="service" id="service">
    </select>
     </form>
</fieldset> -->

    <?php
    $db = new PDO('mysql:host=172.31.22.43;dbname=Cameron200535424', 'Cameron200535424', 'UsgiRKk21q');

    $sql = "SELECT * FROM services";

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
    <th>name</th>
    <th>select</th>
</tr>\n";

foreach ($rows as $row) {
    $shows_link = "show.php?id={$row['serviceId']}";
    $table_html .= "
    <tr>
        <td>{$row['serviceId']}</td>    
        <td>{$row['name']}</td>
        <td><a href=\"$shows_link\">Select</a></td>
    </tr>\n";
}

$table_html .= "</table>\n";

echo $table_html;

?>
    
    <!-- // $table_html .= "<table>\n";
    //     echo $table_html; 
        // if ($db = !null){
        //     echo "You are connected to the database.";
        // } else{
        //     echo "you are not connected to the database";
        // }
        // foreach ($rows as $row) {
        //      echo '<fieldset>
        //      <legend>Select your Service!<legend/>
        //      <form action="shows.php" method="post>
        //      <select name="service" id = "service"' . $row['serviceId']'>
        //      </form>
        //     </fieldset>';
        // }
            
         -->
    
   
</body>
</html>