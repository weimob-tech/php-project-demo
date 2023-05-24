<?php

namespace WeimobCloudBootDemo\Controller;

use Slim\Http\Request;
use Slim\Http\Response;
use WeimobCloudBoot\Boot\BaseFramework;
use WeimobCloudBoot\Util\OauthUtil;

/**
 * 授权使用demo
 */
class OauthDemoController extends BaseFramework
{
    /**
     * 通过 客户端凭证（client credentials）：适用于面向自研商家的 自有型 应用 获取 Access Token
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return void
     */
    public function getCCToken(Request $request, Response $response, $args){
        $productName = "productA";
        $shopId = 4021381088494;
        /**
         * 对于新云店铺，传入 public_account_id；对于 WOS 店铺，传入 business_operation_system_id
         */
        $shopType = "business_operation_system_id";

        /** @var OauthUtil $oauthUtil */
        $oauthUtil = $this->getContainer()->get('oauthUtil');
        $result = $oauthUtil->getCCToken($productName, $shopId, $shopType);

        return $response->withJson(["客户端授权结果"=>$result]);
    }

    /**
     * 授权接口使用示例
     * 通过 授权码（authorization code）：适用于面向设计服务商的 工具型 应用 获取 Access Token
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return void
     */
    public function getAuthCodeToken(Request $request, Response $response, $args){
        $productName = "productA";
        $code = "P4JaPK";
        $redirectUri = "https://www.baidu.com/";

        /** @var OauthUtil $oauthUtil */
        $oauthUtil = $this->getContainer()->get('oauthUtil');
        $result = $oauthUtil->getAuthCodeToken($productName, $code, $redirectUri);

        #返回的freshToken
        #accessToken=36c55dec-65e1-40bf-9ca8-3ea5536edeb0
        return $response->withJson(["授权码授权结果"=>$result]);
    }

    /**
     * 刷新Token(通过refreshToken刷新Token)
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return void
     */
    public function refreshToken(Request $request, Response $response, $args){
        $productName = "productA";
        $refreshToken = "36c55dec-65e1-40bf-9ca8-3ea5536edeb0";
        /** @var OauthUtil $oauthUtil */
        $oauthUtil = $this->getContainer()->get('oauthUtil');
        $result = $oauthUtil->refreshToken($productName, $refreshToken);

        return $response->withJson(["刷新Token结果"=>$result]);
    }
}