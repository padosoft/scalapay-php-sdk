<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces\Model\Merchant;

/**
 * Interface MerchantOptionsInterface
 *
 * @package Scalapay\Sdk\Interfaces\Model\Merchant
 */
interface MerchantOptionsInterface
{
    /**
     * Returns redirect confirm url key.
     *
     * @return string
     */
    public function getRedirectConfirmUrl();

    /**
     * Sets redirect confirm url key.
     *
     * @param string $redirectConfirmUrl
     * @return $this
     */
    public function setRedirectConfirmUrl($redirectConfirmUrl);

    /**
     * Returns redirect cancel url key.
     *
     * @return string
     */
    public function getRedirectCancelUrl();

    /**
     * Sets redirect cancel url key.
     *
     * @param string $redirectCancelUrl
     * @return $this
     */
    public function setRedirectCancelUrl($redirectCancelUrl);
}
