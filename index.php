<?php
session_start();
error_reporting(E_ALL);
setlocale(LC_ALL, 'hu_HU.UTF-8');
date_default_timezone_set('Europe/Budapest');

if (!defined('BASE_URL')) {
	define("BASE_URL", __DIR__ . '/');
}
require_once BASE_URL . 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

define("API_KEY", $_ENV ['API_KEY']);
define("ENDPOINT", $_ENV ['ENDPOINT']);
define("MAILGUN_HOST", $_ENV ['MAILGUN_HOST']);
define("MAIL_FROM_ADDRESS", $_ENV ['MAIL_FROM_ADDRESS']);

define("DB_HOST", $_ENV ['DB_HOST']);
define("DB_USER", $_ENV ['DB_USER']);
define("DB_PASSWORD", $_ENV ['DB_PASSWORD']);
define("DB_NAME", $_ENV ['DB_NAME']);
define("DB_PORT", $_ENV ['DB_PORT']);

require_once BASE_URL . 'render.php';

$site = new Render();
$site->render_page(array("id" => "header"));
$site->render_page($_GET);
$site->render_page(array("id" => "footer"));







