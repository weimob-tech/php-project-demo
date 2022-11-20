<?php

namespace WeimobCloudBootDemo\Controller;

use Redis;
use Slim\Http\Request;
use Slim\Http\Response;
use WeimobCloudBoot\Boot\BaseFramework;

/**
 * redis组件使用demo
 */
class RedisDemoController extends BaseFramework
{
    /**
     * redis组件使用示例，使用前需要在env.local.yaml文件配置redis配置
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     * @throws \RedisException
     */
    public function redis(Request $request, Response $response, $args){
        /** @var Redis $weimobCloudRedis */
        $weimobCloudRedis = $this->getContainer()->get('weimobCloudRedis');


        $weimobCloudRedis->set('hello', 'world');
        $val = $weimobCloudRedis->get("hello");

        return $response->withJson(["key hello's value"=>$val]);
    }
}