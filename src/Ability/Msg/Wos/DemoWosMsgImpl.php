<?php

namespace WeimobCloudBootDemo\Ability\Msg\Wos;

use WeimobAbility\Weimob\Cloud\Msg\Common\Code;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;
use WeimobAbility\Weimob\Wos\Cloud\Msg\WeimobCrm\WeimobCrmBalanceChangeBalanceChangeListener;
use WeimobCloudBoot\Boot\BaseFramework;

/**
 * wos消息实现示例
 */
class DemoWosMsgImpl extends BaseFramework implements WeimobCrmBalanceChangeBalanceChangeListener
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