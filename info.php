<?php
echo '<p>';
    
echo 'PHP version: ', phpversion(), '<br />';
echo 'DOCUMENT_ROOT: ', $_SERVER['DOCUMENT_ROOT'], '<br />';
echo 'SERVER_ROOT: ', $_SERVER['SERVER_ROOT'], '<br />';
echo 'SERVER_NAME: ', $_SERVER['SERVER_NAME'], '<br />';
echo 'PATH_TRANSLATED: ', $_SERVER['PATH_TRANSLATED'], '<br />';
echo 'SCRIPT_NAME: ', $_SERVER['SCRIPT_NAME'], '<br />';
echo '</p>';

?>