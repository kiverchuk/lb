<?
require_once 'app/controllers/MasivController.php';

class APP
{
    private static $instance = null;
    public static $db = null;

    public static function getInstance () {
        if(!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function handleRequest($model, $action, $date = null) {
        $modelName = ucfirst($model);
        $actionName = ucfirst($action);
        $controller = "{$modelName}Controller";
        $method = "action{$actionName}";

        $objController = new $controller;

        ob_start();
        $objController->$method($date);
        $viewContent = ob_get_contents();
        ob_end_clean();
        View::loadLayout('default', $viewContent);
    }

    public function run () {
        require_once 'app/routes.php';

    }
}
