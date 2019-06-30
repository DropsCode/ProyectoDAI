<?php

$mysql = NEW MySQLi('localhost', 'dbproyecto', 'dbproyecto', 'dbproyecto');

$resultSet = $mysql->query("select COD_PROFESSION, NAME_PROFESSION from professions");

?>

<select name="profesiones">
<?php
while($rows = $resultSet->fetch_assoc())
{
    $COD_PROFESSION = $rows['COD_PROFESSION'];
    $NAME_PROFESSION = $rows['NAME_PROFESSION'];
    echo "<option value='$COD_PROFESSION'>$NAME_PROFESSION</option>";
}
?>
</select>