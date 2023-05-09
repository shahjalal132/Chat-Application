<?php

require_once('config.php');

function user_logged_in()
{
    if (isset($_SESSION['login'])) {
        return true;
    }
}
