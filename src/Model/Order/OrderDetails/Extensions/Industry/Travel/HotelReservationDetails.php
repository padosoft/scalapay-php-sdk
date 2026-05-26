<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Industry\Travel;

use Scalapay\Sdk\Abstracts\ModelAbstract;
use Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions\Industry\Travel\HotelReservationDetailsInterface;

/**
 * Class HotelReservationDetails
 *
 * @package Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Industry\Travel
 */
class HotelReservationDetails extends ModelAbstract implements HotelReservationDetailsInterface
{
    /** @var int $nights */
    protected $nights;

    /** @var string $hotelName */
    protected $hotelName;

    /** @var string $hotelCountry */
    protected $hotelCountry;

    /** @var int $hotelStars */
    protected $hotelStars;

    /** @var bool $insurance */
    protected $insurance;

    /** @var bool $loyaltyProgramme */
    protected $loyaltyProgramme;

    /**
     * Returns nights key.
     *
     * @return int
     */
    public function getNights()
    {
        return $this->nights;
    }

    /**
     * Sets nights key.
     *
     * @param int $nights
     * @return $this
     */
    public function setNights($nights)
    {
        $this->nights = $nights;
        return $this;
    }

    /**
     * Returns hotel name key.
     *
     * @return string
     */
    public function getHotelName()
    {
        return $this->hotelName;
    }

    /**
     * Sets hotel name key.
     *
     * @param string $hotelName
     * @return $this
     */
    public function setHotelName($hotelName)
    {
        $this->hotelName = $hotelName;
        return $this;
    }

    /**
     * Returns hotel country key.
     *
     * @return string
     */
    public function getHotelCountry()
    {
        return $this->hotelCountry;
    }

    /**
     * Sets hotel country key.
     *
     * @param string $hotelCountry
     * @return $this
     */
    public function setHotelCountry($hotelCountry)
    {
        $this->hotelCountry = $hotelCountry;
        return $this;
    }

    /**
     * Returns hotel stars key.
     *
     * @return int
     */
    public function getHotelStars()
    {
        return $this->hotelStars;
    }

    /**
     * Sets hotel stars key.
     *
     * @param int $hotelStars
     * @return $this
     */
    public function setHotelStars($hotelStars)
    {
        $this->hotelStars = $hotelStars;
        return $this;
    }

    /**
     * Returns insurance key.
     *
     * @return bool
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * Sets insurance key.
     *
     * @param bool $insurance
     * @return $this
     */
    public function setInsurance($insurance)
    {
        $this->insurance = $insurance;
        return $this;
    }

    /**
     * Returns loyalty programme key.
     *
     * @return bool
     */
    public function getLoyaltyProgramme()
    {
        return $this->loyaltyProgramme;
    }

    /**
     * Sets loyalty programme key.
     *
     * @param bool $loyaltyProgramme
     * @return $this
     */
    public function setLoyaltyProgramme($loyaltyProgramme)
    {
        $this->loyaltyProgramme = $loyaltyProgramme;
        return $this;
    }
}
