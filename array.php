<?php
//indexed array.
$faculties = array("BIM","CSIT","BCA");

for($i=0;$i<count($faculties); $i++)
{
    echo $faculties[$i];
    echo "<br>";
}

echo "<br>";

foreach($faculties as $faculty)
{
    echo $faculty;
    echo "<br>";
}

?>