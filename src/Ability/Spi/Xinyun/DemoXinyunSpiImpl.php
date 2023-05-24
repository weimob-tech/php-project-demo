<?php

namespace WeimobCloudBootDemo\Ability\Spi\Xinyun;


use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;
use WeimobAbility\Weimob\Xinyun\Cloud\Spi\PaasQueryUserBasicInfoService;
use WeimobAbility\Weimob\Xinyun\Cloud\Spi\SQueryUserBasicInfoData;
use WeimobAbility\Weimob\Xinyun\Cloud\Spi\SQueryUserBasicInfoRequest;
use WeimobAbility\Weimob\Xinyun\Cloud\Spi\SQueryUserBasicInfoResponse;
use WeimobCloudBoot\Boot\BaseFramework;

/**
 * 新云 spi扩展点实现示例
 */
class DemoXinyunSpiImpl extends BaseFramework implements PaasQueryUserBasicInfoService
{
    public function execute(SQueryUserBasicInfoRequest $request) : SQueryUserBasicInfoResponse
    {
        $paasResponse = new SQueryUserBasicInfoResponse();
        $paasResponseCode = new PaasResponseCode();
        $paasResponseCode->setErrcode("success");
        $paasResponseCode->setErrmsg("成功");

        $sQueryUserBasicInfoData = new SQueryUserBasicInfoData();

        $paasResponse->setCode($paasResponseCode);
        $paasResponse->setData($sQueryUserBasicInfoData);
        return $paasResponse;
    }
}