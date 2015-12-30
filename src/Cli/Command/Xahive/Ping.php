<?php
/**
 * File Ping.php
 *
 * @author Tuan Duong <duongthaso@gmail.com>
 * @package CipherPols
 * @version 1.0
 */
namespace Cli\Command\Xahive;

use Cp\Slack;
use Curl\Curl;

/**
 * Class Ping
 * @package Cli\Command\Xahive
 */
class Ping extends XahiveCommand
{
    const XAHIVE_END_POINT = 'http://testapi.xahive.com/db_ping?client=www';

    /**
     * @var \stdClass
     */
    private $apiResponse;

    /**
     * @inheritdoc
     */
    public function execute()
    {
        $this->requestXahiveApi();
        if ($this->isDead()) {
            $this->notifyToSlack();
        }
    }

    /**
     * @return \stdClass
     */
    private function requestXahiveApi()
    {
        $curl = new Curl();
        $this->apiResponse = $curl->get(static::XAHIVE_END_POINT);
    }

    /**
     * @return bool
     */
    private function isDead()
    {
        return isset($this->apiResponse->result) && $this->apiResponse->result;
    }

    /**
     * @return void
     */
    private function notifyToSlack()
    {
        $slack = new Slack();
        $emoticon = ':slack::zoro:';
        $slack->notify(
            Slack::CHANNEL_XAHIVE,
            sprintf('%sHey! The API is dead! Please take a look!%s', $emoticon, $emoticon)
        );
    }
}
