<?php
/** @var WeimobCloudBoot\Ability\Spi\SpiRegistry $spiRegistry */

use WeimobCloudBoot\Ability\SpecTypeEnum;

$spiRegistry->register("demoSpiImpl",\WeimobCloudBootDemo\Ability\Spi\Wos\DemoWosSpiImpl::class,SpecTypeEnum::WOS);
$spiRegistry->register("demoSpiImpl",\WeimobCloudBootDemo\Ability\Spi\Xinyun\DemoXinyunSpiImpl::class,SpecTypeEnum::XINYUN);