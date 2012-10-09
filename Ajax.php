<?php
require_once 'MainController.php';
require_once 'Autoloader.php';


/** TODO !!!
 * Check here if the connection is from the same server, if not don't response
 *
*/

$ctrl = MainController::getInstance();
$ctrl->coreConnector->SendRequest();

?>