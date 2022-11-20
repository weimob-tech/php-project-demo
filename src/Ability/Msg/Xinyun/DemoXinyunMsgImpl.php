<?php

namespace WeimobCloudBootDemo\Ability\Msg\Xinyun;

use WeimobAbility\Weimob\Cloud\Msg\Common\Code;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;
use WeimobAbility\Weimob\Xinyun\Cloud\Msg\Coupon\CcCouponCreateCouponListener;
use WeimobCloudBoot\Boot\BaseFramework;

/**
 * 新云消息实现示例
 */
class DemoXinyunMsgImpl extends BaseFramework implements CcCouponCreateCouponListener
{

    public function onMessage(WeimobMessage $message) : WeimobMessageAck
    {
        $weimobMessageAck = new WeimobMessageAck();
        $code = new Code();
        $code->setErrcode("success");
        $code->setErrmsg("成功");
        $weimobMessageAck->setCode($code);

        return $weimobMessageAck;
    }
}