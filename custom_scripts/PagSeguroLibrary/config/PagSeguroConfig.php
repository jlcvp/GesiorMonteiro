<?php
require_once 'config/config.php';
/*
 ************************************************************************
 PagSeguro Config File
 ************************************************************************
 */

$PagSeguroConfig = array();

$PagSeguroConfig['environment'] = "production"; // production, sandbox

$PagSeguroConfig['credentials'] = array();
$PagSeguroConfig['credentials']['email'] = $config['pagseguro']['email'];
$PagSeguroConfig['credentials']['token']['production'] = $config['pagseguro']['apitoken'];
$PagSeguroConfig['credentials']['token']['sandbox'] = "C945FF3DF70F4745BD87C0247BC64877";

$PagSeguroConfig['application'] = array();
$PagSeguroConfig['application']['charset'] = "UTF-8"; // UTF-8, ISO-8859-1

$PagSeguroConfig['log'] = array();
$PagSeguroConfig['log']['active'] = false;
$PagSeguroConfig['log']['fileLocation'] = "";
