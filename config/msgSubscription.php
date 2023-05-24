<?php
/** @var WeimobCloudBoot\Ability\Msg\MsgSubscription $msgSubscription */

use WeimobCloudBoot\Ability\Msg\MsgInfo;
use WeimobCloudBoot\Ability\SpecTypeEnum;

$msgSubscription->subscribe(new MsgInfo("weimob_crm.balance.change","balanceChange"),\WeimobCloudBootDemo\Ability\Msg\Wos\DemoWosMsgImpl::class,SpecTypeEnum::WOS);
$msgSubscription->subscribe(new MsgInfo("cc_coupon","createCoupon"),\WeimobCloudBootDemo\Ability\Msg\Xinyun\DemoXinyunMsgImpl::class,SpecTypeEnum::XINYUN);
