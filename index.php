<?php

require_once ('core/core.php');

if(!empty($_SESSION['id'])){
    redirect('list.php');
} else {
    redirect('login.php');
}