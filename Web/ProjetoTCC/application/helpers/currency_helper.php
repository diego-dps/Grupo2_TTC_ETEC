<?php
function reais($numero){
    return "R$ " . number_format($numero, 2, ",", ".");
}
function FormatarData($entrada){
    $data = date('H:i', strtotime($entrada));
    return $data;
}
