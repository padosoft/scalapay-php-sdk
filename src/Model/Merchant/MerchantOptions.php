<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Model\Merchant;

use Scalapay\Sdk\Abstracts\ModelAbstract;
use Scalapay\Sdk\Interfaces\Model\Merchant\MerchantOptionsInterface;

/**
 * Class MerchantOptions
 *
 * @package Scalapay\Sdk\Model\Merchant
 */
class MerchantOptions extends ModelAbstract implements MerchantOptionsInterface
{
    /** @var string $redirectConfirmUrl */
    protected $redirectConfirmUrl;

    /** @var string $redirectCancelUrl */
    protected $redirectCancelUrl;

    /**
     * Returns redirect confirm url key.
     *
     * @return string
     */
    public function getRedirectConfirmUrl()
    {
        return $this->redirectConfirmUrl;
    }

    /**
     * Sets redirect confirm url key.
     *
     * @param string $redirectConfirmUrl
     * @return $this
     */
    public function setRedirectConfirmUrl($redirectConfirmUrl)
    {
        $this->redirectConfirmUrl = $redirectConfirmUrl;
        return $this;
    }

    /**
     * Returns redirect cancel url key.
     *
     * @return string
     */
    public function getRedirectCancelUrl()
    {
        return $this->redirectCancelUrl;
    }

    /**
     * Sets redirect cancel url key.
     *
     * @param string $redirectCancelUrl
     * @return $this
     */
    public function setRedirectCancelUrl($redirectCancelUrl)
    {
        $this->redirectCancelUrl = $redirectCancelUrl;
        return $this;
    }
}
