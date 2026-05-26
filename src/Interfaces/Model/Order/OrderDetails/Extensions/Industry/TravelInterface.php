<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions\Industry;

use Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Industry\Travel\Events;
use Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Industry\Travel\HotelReservationDetails;
use Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Industry\Travel\TransportationReservationDetails;

/**
 * Interface TravelInterface
 *
 * @package Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions\Industry
 */
interface TravelInterface
{
    /**
     * Returns persons count key.
     *
     * @return int
     */
    public function getPersonsCount();

    /**
     * Sets persons count key.
     *
     * @param int $personsCount
     * @return $this
     */
    public function setPersonsCount($personsCount);

    /**
     * Returns the date key.
     * This field has been deprecated. Please use getStartDate() and getEndDate() instead.
     *
     * @return string
     * @deprecated
     */
    public function getDate();

    /**
     * Sets the date key.
     * This field has been deprecated. Please use setStartDate() and setEndDate() instead.
     *
     * @param string $date
     * @deprecated
     */
    public function setDate($date);

    /**
     * Returns the start date key.
     *
     * @return string
     */
    public function getStartDate();

    /**
     * Sets the start date key.
     *
     * @param string $startDate
     */
    public function setStartDate($startDate);

    /**
     * Returns the end date key.
     *
     * @return string
     */
    public function getEndDate();

    /**
     * Sets the end date key.
     *
     * @param string $endDate
     */
    public function setEndDate($endDate);

    /**
     * Returns refundable key.
     *
     * @return bool
     */
    public function getRefundable();

    /**
     * Sets refundable key.
     *
     * @param bool $refundable
     */
    public function setRefundable($refundable);

    /**
     * Returns transportation reservation details object array.
     *
     * @return TransportationReservationDetails[]
     */
    public function getTransportationReservationDetails();

    /**
     * Sets transportation reservation details object array.
     *
     * @param TransportationReservationDetails[] $transportationReservationDetails
     */
    public function setTransportationReservationDetails($transportationReservationDetails);

    /**
     * Returns hotel reservation details object.
     *
     * @return HotelReservationDetails
     */
    public function getHotelReservationDetails();

    /**
     * Sets hotel reservation details object.
     *
     * @param HotelReservationDetails $hotelReservationDetails
     */
    public function setHotelReservationDetails($hotelReservationDetails);

    /**
     * Returns events object.
     *
     * @return Events
     */
    public function getEvents();

    /**
     * Sets events object.
     *
     * @param Events $events
     */
    public function setEvents($events);
}
