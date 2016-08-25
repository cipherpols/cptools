<?php
/**
 * File Subscriber.php
 *
 * @author Tuan Duong <duongthaso@gmail.com>
 * @package CipherPols
 * @version 1.0
 */
namespace Cp\Xahive\Subscriber;

/**
 * Interface Subscriber
 *
 * @package Cp\Notifier
 */
interface SubscriberInterface
{
    /**
     * Do notifying
     *
     * @return void
     */
    public function notify();
}
