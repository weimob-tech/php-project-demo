<?php

namespace WeimobCloudBootDemo\Controller;

use Slim\Http\Request;
use Slim\Http\Response;
use WeimobCloudBoot\Boot\BaseFramework;
use WeimobCloudBoot\Util\OauthUtil;
use WeimobCloudBoot\Util\WeimobHttpUtil;

class WeimobApiDemoController extends BaseFramework
{
    /**
     * 微盟api接口对接使用示例
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function apiInvoke(Request $request, Response $response, $args)
    {
        $tokenInfo = $this->getToken("productA");

        /** @var WeimobHttpUtil $client */
        $client = $this->getContainer()->get('weimobHttpUtil');
        $requestBody = ['basicInfo' => ['vid'=>'6000287446212','goodsId'=>100020930149212]];
        $result = $client->invokeApi("apigw/weimob_shop/v2.0/goods/get",$tokenInfo['access_token'],$requestBody);
        return $response->withJson(["htt post响应结果"=>$result]);
    }

    private function getToken($productName)
    {
        $shopId = 4021381088494;
        /**
         * 对于新云店铺，传入 public_account_id；对于 WOS 店铺，传入 business_operation_system_id
         */
        $shopType = "business_operation_system_id";

        /** @var OauthUtil $oauthUtil */
        $oauthUtil = $this->getContainer()->get('oauthUtil');
        return $oauthUtil->getCCToken($productName, $shopId, $shopType);
    }
}