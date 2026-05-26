<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions;

use Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Type\Link;

/**
 * Interface TypeInterface
 *
 * @package Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions
 */
interface TypeInterface
{
    /**
     * Returns link object.
     *
     * @return Link
     */
    public function getLink();

    /**
     * Sets link object.
     *
     * @param Link $link
     */
    public function setLink($link);
}
