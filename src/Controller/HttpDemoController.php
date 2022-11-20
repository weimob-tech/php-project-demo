<?php

namespace WeimobCloudBootDemo\Controller;

use Slim\Http\Request;
use Slim\Http\Response;
use WeimobCloudBoot\Boot\BaseFramework;
use WeimobCloudBoot\Component\Http\HttpClientWrapper;

/**
 * http组件使用demo
 */
class HttpDemoController extends BaseFramework
{
    /**
     * 使用http客户端组件调用post请求接口使用示例
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function httpPost(Request $request, Response $response, $args){
        /** @var HttpClientWrapper $client */
        $client = $this->getContainer()->get('httpClient');

        $r = $client->post('https://test.internal.weimobdev.com/testPath', ['X-Access-Code: 1234'], json_encode(['projectId' => 'titan']));

        return $response->withJson(["htt post响应结果"=>$r->getBodyAsJson()]);
    }

    /**
     * 使用http客户端组件调用get请求接口使用示例
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return void
     */
    public function httpGet(Request $request, Response $response, $args){
        /** @var HttpClientWrapper $client */
        $client = $this->getContainer()->get('httpClient');

        $r = $client->get('https://www.baidu.com');

        return $response->withJson(["htt get响应结果"=>$r->getBody()]);
    }
}