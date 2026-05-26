<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Model\Order\OrderDetails\Extensions;

use Scalapay\Sdk\Abstracts\ModelAbstract;
use Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions\TypeInterface;
use Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Type\Link;

/**
 * Class Type
 *
 * @package Scalapay\Sdk\Model\Order\OrderDetails\Extensions
 */
class Type extends ModelAbstract implements TypeInterface
{
    /** @var Link $link */
    protected $link;

    /**
     * Returns link object.
     *
     * @return Link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets link object.
     *
     * @param Link $link
     */
    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }
}
