<?php

namespace WeimobCloudBootDemo\Ability\Spi\Wos;

use WeimobAbility\Weimob\Cloud\Spi\Common\PaasResponseCode;
use WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop\PaasWeimobShopCouponPaasBatchLockCouponService;
use WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop\WeimobShopCouponPaasBatchLockCouponData;
use WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop\WeimobShopCouponPaasBatchLockCouponRequest;
use WeimobAbility\Weimob\Wos\Cloud\Spi\WeimobShop\WeimobShopCouponPaasBatchLockCouponResponse;
use WeimobCloudBoot\Boot\BaseFramework;

/**
 * wos spi扩展点实现示例
 */
class DemoWosSpiImpl extends BaseFramework implements PaasWeimobShopCouponPaasBatchLockCouponService
{
    public function invoke(WeimobShopCouponPaasBatchLockCouponRequest $request): WeimobShopCouponPaasBatchLockCouponResponse
    {
        $paasResponse = new WeimobShopCouponPaasBatchLockCouponResponse();
        $paasResponseCode = new PaasResponseCode();
        $paasResponseCode->setErrcode("success");
        $paasResponseCode->setErrmsg("成功");

        $data = new WeimobShopCouponPaasBatchLockCouponData();
        $data->setSuccess(true);
        $paasResponse->setData($data);
        $paasResponse->setCode($paasResponseCode);

        return $paasResponse;
    }
}