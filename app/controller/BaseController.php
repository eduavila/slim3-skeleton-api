<?php
/**
 * This file is part of `oanhnn/slim-skeleton` project.
 *
 * (c) Oanh Nguyen <oanhnn.bk@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */
namespace App\Controller;

use Interop\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Abstract controller class
 */
abstract class BaseController
{
    protected $app;

    public function __construct($app)
    {
        $this->app = $app;
    }
    /**
     * Send json
     *
     * @param ResponseInterface $response
     * @param array             $data
     * @return ResponseInterface
     */
    protected function withJson($data,$code=200)
    {
        $response = $this->app->response->withHeader('Content-Type','application/json');
        $response = $this->app->response->withStatus($code);
        $response = $this->app->response->withJson($data);
        return $response;
    }
}