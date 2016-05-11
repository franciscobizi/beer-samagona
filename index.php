<?PHP
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
require 'vendor/autoload.php';

// Create app
$app = new \Slim\App();

// Get container
$container = $app->getContainer();

// Register component on container
$container['view'] = function ($container) {
    return new \Slim\Views\PhpRenderer('template/');
};
// Render Twig template in route
/*
 * Home page
 */
$app->get('/', function ($request, $response) {
    
    return $this->view->render($response, 'home.phtml');
});

$app->post('/samagon', function ($request, $response) {
   
    $water = $_POST['water'];
    $sugar = $_POST['sugar'];
    $fire = $_POST['firewood'];
    $pipe = $_POST['pipe'];
    
    $controller = new App\Controller\SAController();
    $samagon = $controller->SAMAGON($water,$sugar,$fire,$pipe);
    $result = "Result of Samagon is : ".$samagon." liter(s)";
    return $this->view->render($response, 'home.phtml',[
        'samagon'=>$result
    ]);
    
});

$app->run();
