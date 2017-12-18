<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

define('ROOT', __DIR__);
define('DS', DIRECTORY_SEPARATOR);
define('VIEWS', ROOT.DS.'views'.DS);
define('LAYOUTS', VIEWS.'layouts'.DS);
require_once ROOT . DS . 'components/functions/autoload.php';

$factory = new \components\core\Model();
$customers=$factory->getCustomers();
$customers->setHeaderLayout('header');
$customers->setView('index');
$customers->setFooterLayout('footer');

if (!empty($_POST['action']) && $_POST['action'] == 'get_customer') {

    $data=$customers->getData($_POST);
    $error=$customers->error?:false;
    echo json_encode(array('data'=>$data,'result'=>$error));
    exit;
}
?>
<?php include($customers->getHeader()); ?>
<?php include($customers->getView()); ?>
<?php include($customers->getFooter()); ?>