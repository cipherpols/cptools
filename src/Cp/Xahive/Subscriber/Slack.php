<?php
/**
 * File Slack.php
 *
 * @author Tuan Duong <duongthaso@gmail.com>
 * @package CipherPols
 * @version 1.0
 */
namespace Cp\Xahive\Subscriber;

use Curl\Curl;

/**
 * Class Slack
 * @package Cp\Notifier
 */
class Slack implements SubscriberInterface
{
    const API_ENDPOINT = 'https://slack.com/api/chat.postMessage';
    const API_TOKEN = 'xoxp-13769590564-13775534438-17567899136-9933f19fed';
    const CHANNEL_SYSADMIN = '#cp5-sysadmin';
    const CHANNEL_XAHIVE = '#xahive';
    const BOT_USER = 'CipherPols';

    /**
     * @var Curl
     */
    private $curl;

    /**
     * Slack constructor.
     */
    public function __construct()
    {
        $this->curl = new Curl();
    }

    /**
     * @inheritdoc
     */
    public function notify()
    {
        $emoticon = ':slack::zoro:';
        $this->doNotify(
            static::CHANNEL_XAHIVE,
            sprintf('%s Hey! The API is dead! Please take a look! %s', $emoticon, $emoticon)
        );
    }

    /**
     * Notify to slack channel
     *
     * @param string $channel
     * @param string $message
     * @return void
     */
    private function doNotify($channel, $message)
    {
        $this->curl->post(
            static::API_ENDPOINT,
            array(
                'token' => static::API_TOKEN,
                'channel' => $channel,
                'text' => $message,
                'username' => static::BOT_USER,
            )
        );
    }
}
