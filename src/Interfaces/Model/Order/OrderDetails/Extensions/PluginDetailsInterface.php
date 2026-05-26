<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions;

/**
 * Interface PluginDetailsInterface
 *
 * @package Scalapay\Sdk\Model\Merchant\Extensions
 */
interface PluginDetailsInterface
{
    /**
     * Sets checkout key.
     *
     * @param string $checkout
     * @return $this
     */
    public function setCheckout($checkout);

    /**
     * Returns checkout key.
     *
     * @return string
     */
    public function getCheckout();

    /**
     * Sets platform key.
     *
     * @param string $platform
     * @return $this
     */
    public function setPlatform($platform);

    /**
     * Returns platform key.
     *
     * @return string
     */
    public function getPlatform();

    /**
     * Returns customized key.
     *
     * @return string
     */
    public function getCustomized();

    /**
     * Sets customized key.
     *
     * @param string $customized
     * @return $this
     */
    public function setCustomized($customized);

    /**
     * Returns plugin version key.
     *
     * @return string
     */
    public function getPluginVersion();

    /**
     * Sets plugin version key.
     *
     * @param string $pluginVersion
     * @return $this
     */
    public function setPluginVersion($pluginVersion);

    /**
     * Returns checkout version key.
     *
     * @return string
     */
    public function getCheckoutVersion();

    /**
     * Sets checkout version key.
     *
     * @param string $checkoutVersion
     * @return $this
     */
    public function setCheckoutVersion($checkoutVersion);

    /**
     * Returns the platform version key.
     *
     * @return string
     */
    public function getPlatformVersion();

    /**
     * Sets platform version key.
     *
     * @param string $platformVersion
     * @return $this
     */
    public function setPlatformVersion($platformVersion);
}
