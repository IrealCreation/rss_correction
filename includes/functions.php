<?php

function convertDate($date, $formatInput, $formatOutput)
{
    $myDateTime = DateTime::createFromFormat($formatInput, $date);
    return $myDateTime->format($formatOutput);
}

?>