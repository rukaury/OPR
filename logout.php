<?php

/*
 * This file represents the logout compartment.
 * It simply destroys your session and redirects you to the home page.
 *
 * For further understanding take a look at: http://php.net/manual/en/book.session.php
 *
 */

   session_start();
   
   if(session_destroy()) {
      header("Location: index.php");
   }
?>