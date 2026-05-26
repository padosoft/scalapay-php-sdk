<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Model\Order\OrderDetails\Extensions;

use Scalapay\Sdk\Abstracts\ModelAbstract;
use Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions\PluginDetailsInterface;

/**
 * Class PluginDetails
 *
 * @package Scalapay\Sdk\Model\Order\OrderDetails\Extensions
 */
class PluginDetails extends ModelAbstract implements PluginDetailsInterface
{
    /** @var string $checkout */
    protected $checkout;

    /** @var string $platform */
    protected $platform;

    /** @var string $customized */
    protected $customized;

    /** @var string $pluginVersion */
    protected $pluginVersion;

    /** @var string $checkoutVersion */
    protected $checkoutVersion;

    /** @var string $platformVersion */
    protected $platformVersion;

    /**
     * Sets checkout key.
     *
     * @param string $checkout
     * @return $this
     */
    public function setCheckout($checkout)
    {
        $this->checkout = $checkout;
        return $this;
    }

    /**
     * Returns checkout key.
     *
     * @return string
     */
    public function getCheckout()
    {
        return $this->checkout;
    }

    /**
     * Sets platform key.
     *
     * @param string $platform
     * @return $this
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * Returns platform key.
     *
     * @return string
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Returns customized key.
     *
     * @return string
     */
    public function getCustomized()
    {
        return $this->customized;
    }

    /**
     * Sets customized key.
     *
     * @param string $customized
     * @return $this
     */
    public function setCustomized($customized)
    {
        $this->customized = $customized;
        return $this;
    }

    /**
     * Returns plugin version key.
     *
     * @return string
     */
    public function getPluginVersion()
    {
        return $this->pluginVersion;
    }

    /**
     * Sets plugin version key.
     *
     * @param string $pluginVersion
     * @return $this
     */
    public function setPluginVersion($pluginVersion)
    {
        $this->pluginVersion = $pluginVersion;
        return $this;
    }

    /**
     * Returns checkout version key.
     *
     * @return string
     */
    public function getCheckoutVersion()
    {
        return $this->checkoutVersion;
    }

    /**
     * Sets checkout version key.
     *
     * @param string $checkoutVersion
     * @return $this
     */
    public function setCheckoutVersion($checkoutVersion)
    {
        $this->checkoutVersion = $checkoutVersion;
        return $this;
    }

    /**
     * Returns the platform version key.
     *
     * @return string
     */
    public function getPlatformVersion()
    {
        return $this->platformVersion;
    }

    /**
     * Sets platform version key.
     *
     * @param string $platformVersion
     * @return $this
     */
    public function setPlatformVersion($platformVersion)
    {
        $this->platformVersion = $platformVersion;
        return $this;
    }
}
