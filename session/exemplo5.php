<?php 

require_once("config.php");

echo session_save_path();

echo "<br>";

echo session_status();

echo "<br>";

switch (session_status()) {
    case PHP_SESSION_DISABLED:
        echo "as sessões estiverem desabilitadas";
        break;
    case PHP_SESSION_NONE:
        echo "as sessões estiverem desabilitadas, mas nenhuma exist";
        break;
    case PHP_SESSION_ACTIVE:
        echo "as sessões estiverem habilitadas, e uma existe";
        break;
    
    default:
        // code...
        break;
}

 ?>