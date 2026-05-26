<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions\Industry\Travel;

/**
 * Interface HotelReservationDetailsInterface
 *
 * @package Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions\Industry\Travel
 */
interface HotelReservationDetailsInterface
{
    /**
     * Returns nights key.
     *
     * @return int
     */
    public function getNights();

    /**
     * Sets nights key.
     *
     * @param int $nights
     * @return $this
     */
    public function setNights($nights);

    /**
     * Returns hotel name key.
     *
     * @return string
     */
    public function getHotelName();

    /**
     * Sets hotel name key.
     *
     * @param string $hotelName
     * @return $this
     */
    public function setHotelName($hotelName);

    /**
     * Returns hotel country key.
     *
     * @return string
     */
    public function getHotelCountry();

    /**
     * Sets hotel country key.
     *
     * @param string $hotelCountry
     * @return $this
     */
    public function setHotelCountry($hotelCountry);

    /**
     * Returns hotel stars key.
     *
     * @return int
     */
    public function getHotelStars();

    /**
     * Sets hotel stars key.
     *
     * @param int $hotelStars
     * @return $this
     */
    public function setHotelStars($hotelStars);

    /**
     * Returns insurance key.
     *
     * @return bool
     */
    public function getInsurance();

    /**
     * Sets insurance key.
     *
     * @param bool $insurance
     * @return $this
     */
    public function setInsurance($insurance);

    /**
     * Returns loyalty programme key.
     *
     * @return bool
     */
    public function getLoyaltyProgramme();

    /**
     * Sets loyalty programme key.
     *
     * @param bool $loyaltyProgramme
     * @return $this
     */
    public function setLoyaltyProgramme($loyaltyProgramme);
}
