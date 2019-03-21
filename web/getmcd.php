<?php
header('Content-Type: text/plain;charset=utf8');
define('DEFAULT_MOCODO', __DIR__.'/../mocodo/pristine_sandbox.mcd');

if (!isset($_GET['room']) ||
    !file_exists($file = __DIR__.'/../rooms/'.$_GET['room'].'.mcd') || true
) {
    echo file_get_contents(DEFAULT_MOCODO);
} else {
    echo file_get_contents($file);
}