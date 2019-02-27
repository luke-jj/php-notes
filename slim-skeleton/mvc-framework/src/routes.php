<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes
$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view - standard url
    return $this->view->render($response, 'about.phtml', $args);
});

$app->map(['GET', 'POST'], '/contact', function (Request $request, Response $response, array $args) {
  if ($request->getMethod() == "POST") {
    $args = array_merge($args, $request->getParsedBody());

    if (!empty($args['name']) && (!empty($args['email'])) && (!empty($args['msg']))) {
      $mail = json_encode([$args['name'], $args['email'], $args['msg']]);
      $this->logger->notice($mail);
      // return $this->view->render($response, 'thankyou.phtml', $args);
      $url = $this->router->pathFor('thankyou');
      return $response->withStatus(302)->withHeader('Location', $url);
    }

    $args['error'] = "all fields required";
  }

  // Render index view - standard url
  return $this->view->render($response, 'contact-form.phtml', $args);
});

$app->get('/contact/thankyou', function (Request $request, Response $response, array $args) {
    // Render index view - standard url
    return $this->view->render($response, 'thankyou.phtml', $args);
})->setName('thankyou');
