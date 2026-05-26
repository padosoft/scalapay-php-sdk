<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces\Model\Order\OrderDetails;

use Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Industry;
use Scalapay\Sdk\Model\Order\OrderDetails\Extensions\PluginDetails;
use Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Risk;
use Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Type;

/**
 * Interface ExtensionsInterface
 *
 * @package Scalapay\Sdk\Interfaces\Model\Order\OrderDetails
 */
interface ExtensionsInterface
{
    /**
     * Sets risk object.
     *
     * @param $risk
     * @return $this
     */
    public function setRisk($risk);

    /**
     * Returns risk object.
     *
     * @return Risk
     */
    public function getRisk();

    /**
     * Sets industry object.
     *
     * @param $industry
     * @return $this
     */
    public function setIndustry($industry);

    /**
     * Returns industry object.
     *
     * @return Industry
     */
    public function getIndustry();

    /**
     * Sets type object.
     *
     * @param $type
     * @return $this
     */
    public function setType($type);

    /**
     * Returns type object.
     *
     * @return Type
     */
    public function getType();

    /**
     * Sets plugin details object.
     *
     * @param $pluginDetails
     * @return $this
     */
    public function setPluginDetails($pluginDetails);

    /**
     * Returns plugin details object.
     *
     * @return PluginDetails
     */
    public function getPluginDetails();
}
