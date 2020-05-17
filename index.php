<?php
//khai bao mot lop
class Application {
    //khoi tao thuoc tinh su dung static
    private static $instance;
//Dinh nghia ham su dung phuong thuc static
    public static function getInstance() {
        if (self::$instance == NULL) {
            self::$instance = new Application();
            echo "Hello word";
        }
        return self::$instance;
    }
}
$app1 = Application::getInstance();
$app2 = Application::getInstance();
?>
