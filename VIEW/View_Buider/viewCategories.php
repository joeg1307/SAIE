<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
header('Content-Type: text/html; charset=utf-8');

include_once '../Services/Includer.php';
$translator = new UserTranslator(DomainEnumeration::USER,  ProcessEnum::INSERT);
$translator->saveRow();
?>
