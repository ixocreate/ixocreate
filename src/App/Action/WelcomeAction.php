<?php

namespace App\Action;

use Ixocreate\Template\Renderer;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\HtmlResponse;

class WelcomeAction implements MiddlewareInterface
{
    /**
     * @var Renderer
     */
    private $templateRenderer;

    public function __construct(Renderer $templateRenderer)
    {
        $this->templateRenderer = $templateRenderer;
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $handler->handle($request);

        return new HtmlResponse($this->templateRenderer->render('page::welcome', [
            'setupRun' => !empty(\getenv('ADMIN_SECRET')),
        ]));
    }
}
