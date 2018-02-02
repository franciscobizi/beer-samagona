<?PHP
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use App\Classes\Builder;
require 'vendor/autoload.php';

$config = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$app = new \Slim\App($config);

// Create app instance
$app = new \Slim\App($config);

// Set container
$container = $app->getContainer();

// Register component on container
$container['view'] = function ($container) {
    return new \Slim\Views\PhpRenderer('template/');
};

// Home page route

$app->get('/', function ($request, $response) {
    
    return $this->view->render($response, 'home.phtml');
});

// Sama page route

$app->post('/made', function ($request, $response) {

    $water = $_POST['water']; $sugar = $_POST['sugar'];
    $fire = $_POST['firewood']; $pipe = $_POST['pipe'];

    $samagon = Builder::create()
               ->setIngredients($water, $sugar, $fire, $pipe)
               ->build()
               ->wood()
               ->braga()
               ->boil()
               ->condesator()
               ->save();
    
    $samagon = is_string($samagon) ? $samagon : "It was made $samagon liter(s) of samagon";

    return $this->view->render($response, 'home.phtml',[
        'samagon' => $samagon
    ]);
    
});

$app->run();
