<?php

namespace WeimobCloudBootDemo\Controller;

use Slim\Http\Request;
use Slim\Http\Response;
use WeimobCloudBoot\Boot\BaseFramework;
use WeimobCloudBoot\Util\DataSecurityUtil;
use WeimobCloudBoot\Util\OauthUtil;

class DataSecurityController extends BaseFramework
{
    /**
     * 前提: 需要在微盟云业务应用能力列表开通加密服务的api权限,且要通过授权接口获取accessToken，才能调用加密服务的是否加密接口
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function isEncrypt(Request $request, Response $response, $args){
        /** @var DataSecurityUtil $dataDES */
        $dataDES = $this->getContainer()->get('dataSecurityUtil');
        $tokenInfo = $this->getToken("productA");

        $encryptedData = "3454dfsdfdsf";
        $result = $dataDES->isEncrypt($tokenInfo['access_token'], $encryptedData);

        return $response->withJson(["数据是否加密结果"=>$result]);
    }

    /**
     * 前提: 需要在微盟云业务应用能力列表开通加密服务的api权限,且要通过授权接口获取accessToken，才能调用加密服务的加密接口
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function encrypt(Request $request, Response $response, $args){
        /** @var DataSecurityUtil $dataDES */
        $dataDES = $this->getContainer()->get('dataSecurityUtil');
        $tokenInfo = $this->getToken("productA");

        $encryptingData = "待加密数据";
        $result = $dataDES->decrypt($tokenInfo['access_token'], $encryptingData);

        return $response->withJson(["加密结果"=>$result]);
    }

    /**
     * 前提: 需要在微盟云业务应用能力列表开通加密服务的api权限,且要通过授权接口获取accessToken，才能调用加密服务的解密接口
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function decrypt(Request $request, Response $response, $args){
        /** @var DataSecurityUtil $dataDES */
        $dataDES = $this->getContainer()->get('dataSecurityUtil');
        $tokenInfo = $this->getToken("productA");

        $decrypt = "dfs32434";
        $result = $dataDES->decrypt($tokenInfo['access_token'], $decrypt);

        return $response->withJson(["解密结果"=>$result]);
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