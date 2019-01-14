<?php
    
    if($action === 'closeSession'){
        session_destroy();
    }
        require('./view/frontend/welcome.php');