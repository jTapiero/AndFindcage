<?php
function SecurePost($Array)
{
    $NewArray = array();
    foreach($Array as $key => $value )
    {
        $NewArray[$key] = htmlspecialchars($Array[$key]);
    }
    return $NewArray;   
}
$yo=SecurePost($_POST);







include('Tableau.php');
//redirection
//header ('location :tableau.php');
?>