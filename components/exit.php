<?php
function goOut(){
    session_start();
    session_destroy();
    unset($_SESSION);

 header('Location: /');
        };

goOut();