<?php

namespace WeimobCloudBootDemo\Controller;

use PDO;
use Redis;
use Slim\Http\Request;
use Slim\Http\Response;
use WeimobCloudBoot\Boot\BaseFramework;
use WeimobCloudBoot\Component\Encryption\DataSecurity;
use WeimobCloudBoot\Component\Http\HttpClientWrapper;
use WeimobCloudBoot\Component\Oauth\AccessToken;
use WeimobCloudBoot\Facade\LogFacade;

class DemoController extends BaseFramework
{
    public function index(Request $request, Response $response, $args)
    {
        return $response->withJson(['demo' => 'Hello World']);
    }
}