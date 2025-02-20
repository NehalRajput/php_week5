<?php

use core\Session;

//$_SESSION = [];


view('session/create.view.php',[


    'errors'=> Session::get('errors')

]);