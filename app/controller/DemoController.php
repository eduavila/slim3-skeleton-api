<?php
namespace App\Controller;

use Firebase\JWT\JWT;
use Slim\Http\Request;
use Slim\Http\Response;

class DemoController extends BaseController
{  
    public function index(Request $request, Response $response, $args)
    {  
        return $this->withJson(['version'=>'1.0.0']);
    }

    public function auth(Request $request, Response $response){

        $key = $config['settings']['API_KEY'];
        $token = array(
            "user" => "User demo"
        );
        $jwt = JWT::encode($token, $key);
        return $this->withJson(["auth-jwt" => $jwt]);
    }
}