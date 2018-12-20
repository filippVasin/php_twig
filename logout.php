<?php

require_once ('core/core.php');

session_destroy();
redirect('/login.php');