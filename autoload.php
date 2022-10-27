<?php
//class Autoloader
//{
//  /**
//     * 类库自动加载，写死路径，确保不加载其他文件。
//     * @param string $class 对象类名
//     * @return void
//     */
//    public static function autoload($class) {
//        $name = $class;
//        if(false !== strpos($name,'\\')){
//          $name = strstr($class, '\\', true);
//        }
//        $filename = dirname(__FILE__) . "/top/".$name.".php";
//        if(is_file($filename)) {
//            include $filename;
//            return;
//        }
//
//        $filename = dirname(__FILE__) . "/top/request/".$name.".php";
//        if(is_file($filename)) {
//            include $filename;
//            return;
//        }
//
//        $filename = dirname(__FILE__) . "/top/domain/".$name.".php";
//        if(is_file($filename)) {
//            include $filename;
//            return;
//        }
//    }
//}
//spl_autoload_register('Autoloader::autoload');

function classLoader($class)
{
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = __DIR__ . DIRECTORY_SEPARATOR .'src'. DIRECTORY_SEPARATOR . $path . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
}
spl_autoload_register('classLoader');
