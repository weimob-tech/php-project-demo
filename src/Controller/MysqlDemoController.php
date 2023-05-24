<?php

namespace WeimobCloudBootDemo\Controller;

use PDO;
use Slim\Http\Request;
use Slim\Http\Response;
use WeimobCloudBoot\Boot\BaseFramework;

/**
 * mysql组件使用demo
 */
class MysqlDemoController extends BaseFramework
{
    /**
     * mysql组件使用示例，使用前需要在env.local.yaml文件配置mysql配置
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function mysql(Request $request, Response $response, $args){
        /** @var PDO $weimobCloudMysql */
        $weimobCloudMysql = $this->getContainer()->get('weimobCloudMysql');
        $weimobCloudMysql->exec("use fws");
        $stmt = $weimobCloudMysql->query('select 100 as number from dual');
        $r = $stmt->fetchAll();

        return $response->withJson(["mysql excecute result"=>$r]);
    }
}