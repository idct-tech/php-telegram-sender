<?php

declare(strict_types=1);
namespace IDCT\TelegramSender\Tests;

use IDCT\TelegramSender\PublicChannel;
use PHPUnit\Framework\TestCase;

final class PublicChannelTest extends TestCase
{
    public function testGetChannelKey() : void
    {
        $channelId = 123123123;
        $publicChannel = new PublicChannel($channelId);
        $this->assertEquals($channelId, $publicChannel->getChannelKey());
    }

    public function testGetChannelId() : void
    {
        $channelId = 123123123;
        $publicChannel = new PublicChannel($channelId);
        $this->assertEquals($channelId, $publicChannel->getChannelId());
    }
}
