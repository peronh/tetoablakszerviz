<?php
/** @noinspection PhpIncludeInspection */


class Render
{
    public $config;

    public function __construct()
    {
        $this->dbConnect();
    }

    private function dbConnect() : void
    {
        try {
            $cs = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";port=".DB_PORT;
            $this->config = new PDO($cs, DB_USER, DB_PASSWORD,
                                    array(
                                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } catch (PDOException $e) {
            header("HTTP/1.1 500 Internal Server Error");
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public static $route = array(
        'header' => array(
            'path' => '/lib/header.php',
            'auth' => true,
        ),
        'footer' => array(
            'path' => '/lib/footer.php',
            'auth' => true,
        ),
        'fooldal' => array(
            'path' => '/lib/home.php',
            'name' => 'Velux tetőtéri ablakszervíz - Kezdőlap',
            'auth' => true,
            'lang' => 'home'
        ),
        'kapcsolat' => array(
            'path' => '/lib/contact.php',
            'name' => 'Kapcsolat',
            'auth' => true,
        ),
        'szolgaltatasok' => array(
            'path' => '/lib/service.php',
            'name' => 'Szolgáltatások',
            'auth' => true,
        ),
        '404' => array(
            'path' => '/lib/404.php',
            'auth' => true,
            'name' => '404',
        ),
    );

    public function render_page($params): void
    {
        if (!empty($params['id']) && !empty(self::$route[$params['id']]) && file_exists(BASE_URL . self::$route[$params['id']]['path'])) {
            include(BASE_URL . self::$route[$params['id']]['path']);
        }
        elseif (empty($params['id'])) {
            include(BASE_URL . self::$route['fooldal']['path']);
        }
        else {
            include(BASE_URL . self::$route['404']['path']);
        }

    }
}