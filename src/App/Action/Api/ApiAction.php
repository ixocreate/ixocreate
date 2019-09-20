<?php

namespace App\Action\Api;

use Ixocreate\Application\Uri\ApplicationUri;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\JsonResponse;

class ApiAction implements MiddlewareInterface
{
    /**
     * @var ApplicationUri
     */
    private $applicationUri;

    public function __construct(ApplicationUri $applicationUri)
    {
        $this->applicationUri = $applicationUri;
    }

    /**
     * Process an incoming server request.
     * Processes an incoming server request in order to produce a response.
     * If unable to produce the response itself, it may delegate to the provided
     * request handler to do so.
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $handler->handle($request);

        return new JsonResponse([
            'success' => true,
            'message' => 'Welcome!',
            'links' => [
                'self' => (string)$this->applicationUri->getMainUri() . '/api',
            ],
        ], 200);
    }
}
