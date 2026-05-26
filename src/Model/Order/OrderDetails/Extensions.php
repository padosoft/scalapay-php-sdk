<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Model\Order\OrderDetails;

use Scalapay\Sdk\Abstracts\ModelAbstract;
use Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\ExtensionsInterface;
use Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Industry;
use Scalapay\Sdk\Model\Order\OrderDetails\Extensions\PluginDetails;
use Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Risk;
use Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Type;

/**
 * Class Extensions
 *
 * @package Scalapay\Sdk\Model\Order\OrderDetails
 */
class Extensions extends ModelAbstract implements ExtensionsInterface
{
    /** @var Risk $risk */
    protected $risk;

    /** @var Industry $industry */
    protected $industry;

    /** @var Type $type */
    protected $type;

    /** @var PluginDetails $pluginDetails */
    protected $pluginDetails;

    /**
     * Sets risk object.
     *
     * @param $risk
     * @return $this
     */
    public function setRisk($risk)
    {
        $this->risk = $risk;
        return $this;
    }

    /**
     * Returns risk object.
     *
     * @return Risk
     */
    public function getRisk()
    {
        return $this->risk;
    }

    /**
     * Sets industry object.
     *
     * @param $industry
     * @return $this
     */
    public function setIndustry($industry)
    {
        $this->industry = $industry;
        return $this;
    }

    /**
     * Returns industry object.
     *
     * @return Industry
     */
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * Sets type object.
     *
     * @param $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Returns type object.
     *
     * @return Type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets plugin details object.
     *
     * @param $pluginDetails
     * @return $this
     */
    public function setPluginDetails($pluginDetails)
    {
        $this->pluginDetails = $pluginDetails;
        return $this;
    }

    /**
     * Returns plugin details object.
     *
     * @return PluginDetails
     */
    public function getPluginDetails()
    {
        return $this->pluginDetails;
    }
}
