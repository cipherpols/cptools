<?php
/**
 * File Notifier.php
 *
 * @author Tuan Duong <duongthaso@gmail.com>
 * @package CipherPols
 * @version 1.0
 */
namespace Cp\Xahive;

use Cp\Xahive\Subscriber\SubscriberInterface;

/**
 * Class Notifier
 *
 * @package Cp\Xahive
 */
class Notifier
{
    /**
     * @var SubscriberInterface[]
     */
    private $subscribers = array();

    /**
     * @param SubscriberInterface $subscriber
     */
    public function addSubscriber(SubscriberInterface $subscriber)
    {
        $this->subscribers[] = $subscriber;
    }

    /**
     * Do notifying
     */
    public function notify()
    {
        foreach ($this->subscribers as $subscriber) {
            $subscriber->notify();
        }
    }
}
