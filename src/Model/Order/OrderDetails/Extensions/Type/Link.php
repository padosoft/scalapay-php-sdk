<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Type;

use Scalapay\Sdk\Abstracts\ModelAbstract;
use Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions\Type\LinkInterface;
use Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Type\Link\Notification;

/**
 * Class Link
 *
 * @package Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Type
 */
class Link extends ModelAbstract implements LinkInterface
{
    /** @var Notification $notification */
    protected $notification;

    /**
     * Returns notification object.
     *
     * @return Notification
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * Sets notification object.
     *
     * @param Notification $notification
     */
    public function setNotification($notification)
    {
        $this->notification = $notification;
        return $this;
    }
}
