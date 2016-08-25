<?php
/**
 * File Ping.php
 *
 * @author Tuan Duong <duongthaso@gmail.com>
 * @package CipherPols
 * @version 1.0
 */
namespace Cli\Command\Xahive;

use Cp\Xahive\Notifier;
use Cp\Xahive\Subscriber;
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
     * @var Notifier
     */
    private $notifier;

    public function __construct()
    {
        $this->notifier = new Notifier();
        $this->notifier->addSubscriber(new Subscriber\Slack());
        $this->notifier->addSubscriber(new Subscriber\Email());
    }

    /**
     * @inheritdoc
     */
    public function execute()
    {
        try {
            $this->requestXahiveApi();
            if ($this->isDead()) {
                $this->notifyToSlack();
            }
        } catch (\Exception $ex) {
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
        return !isset($this->apiResponse->success) || !$this->apiResponse->success;
    }

    /**
     * Notify to
     */
    private function notify()
    {
        $this->notifyToSlack();
        $this->notifyToEmail();
    }

    private function notifyToEmail()
    {

    }

    /**
     * @return void
     */
    private function notifyToSlack()
    {
        $slack = new Slack();
    }
}
