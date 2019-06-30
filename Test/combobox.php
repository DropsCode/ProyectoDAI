<?php

$mysql = NEW MySQLi('localhost', 'dbproyecto', 'dbproyecto', 'dbproyecto');

$resultSet = $mysql->query("select COD_NAME_COMM from commune");

?>

<select name="comunas">
<?php
while($rows = $resultSet->fetch_assoc())
{
    $COD_NAME_COMM = $rows['COD_NAME_COMM'];
    echo "<option value='$COD_NAME_COMM'>$COD_NAME_COMM</option>";
}
?>
</select>