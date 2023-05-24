<?php

namespace WeimobCloudBootDemo\Controller;

use Slim\Http\Request;
use Slim\Http\Response;
use WeimobCloudBoot\Boot\BaseFramework;
use WeimobCloudBoot\Facade\LogFacade;

class LogDemoController extends BaseFramework
{
    /**
     * 日志组件使用示例
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function log(Request $request, Response $response, $args){
        $content = "info";
        LogFacade::info("hello, $content log");
        $content = "warn";
        LogFacade::warn("hello, $content log");
        $content = "error";
        LogFacade::error("hello, $content log");

        return $response->withJson(["打印日志"=>"hello, world"]);
    }
}