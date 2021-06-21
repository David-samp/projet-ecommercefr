<?php

    include("inc/init.inc.php");
    include("inc/functions.inc.php");

    
    session_destroy();
    header("Location:". URL);

?>