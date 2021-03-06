<?php

namespace Wouterds\KabouterWesley\Application\Http\Handlers;

use Slim\Http\Request;
use Slim\Http\Response;

class HomeHandler extends ViewHandler
{
    /**
     * @return string
     */
    public function getTemplate(): string
    {
        return 'home.html.twig';
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return Response
     */
    public function __invoke(Request $request, Response $response): Response
    {
        return $this->render($response, [
            'title' => 'IK HAAT ALLES!',
            'description' => 'EN IK BEN GEEN BOZE KABOUTER GVD!!!',
            'url' => getenv('APP_URL'),
        ]);
    }
}
