<?php
require "libs/rb.php";
 R::setup( 'mysql:host=localhost;dbname=mysite',
        'root', '' );
		if (isset($_SESSION['logged_user'])) { 
session_start();
}
