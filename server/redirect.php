<?php 


$redirect = isset($_REQUEST['redirect']) ?
                stripslashes($_REQUEST['redirect']) : null;
$json = '{code:200}';

if ($redirect) {
    header('Location: '.sprintf($redirect, rawurlencode($json)));
}

 ?>