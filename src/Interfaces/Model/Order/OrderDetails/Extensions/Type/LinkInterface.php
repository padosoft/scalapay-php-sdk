<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions\Type;

use Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Type\Link\Notification;

/**
 * Interface LinkInterface
 *
 * @package Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions\Type
 */
interface LinkInterface
{
    /**
     * Returns notification object.
     *
     * @return Notification
     */
    public function getNotification();

    /**
     * Sets notification object.
     *
     * @param Notification $notification
     */
    public function setNotification($notification);
}
