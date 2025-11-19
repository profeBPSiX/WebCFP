<?php
if (!isset($GET['action'])) {
    switch($GET['action']) {}
    case 'login':
        $json_response = login ();
        break;

