<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Industry;

use Scalapay\Sdk\Abstracts\ModelAbstract;
use Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions\Industry\TravelInterface;
use Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Industry\Travel\Events;
use Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Industry\Travel\HotelReservationDetails;
use Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Industry\Travel\TransportationReservationDetails;

/**
 * Class Travel
 *
 * @package Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Industry
 */
class Travel extends ModelAbstract implements TravelInterface
{
    /** @var int $personsCount */
    protected $personsCount;

    /** @var string $startDate */
    protected $startDate;

    /** @var string $endDate */
    protected $endDate;

    /** @var bool $refundable */
    protected $refundable;

    /** @var TransportationReservationDetails[] $transportationReservationDetails */
    protected $transportationReservationDetails;

    /** @var HotelReservationDetails $hotelReservationDetails */
    protected $hotelReservationDetails;

    /** @var Events $events */
    protected $events;

    /**
     * Returns persons count key.
     *
     * @return int
     */
    public function getPersonsCount()
    {
        return $this->personsCount;
    }

    /**
     * Sets persons count key.
     *
     * @param int $personsCount
     * @return $this
     */
    public function setPersonsCount($personsCount)
    {
        $this->personsCount = $personsCount;
        return $this;
    }

    /**
     * Returns the start date key.
     * This field has been deprecated. Please use getStartDate() and getEndDate() instead.
     *
     * @return string
     * @deprecated
     */
    public function getDate()
    {
        return $this->startDate;
    }

    /**
     * Sets the start date key.
     * This field has been deprecated. Please use setStartDate() and setEndDate() instead.
     *
     * @param $date
     * @return $this
     * @deprecated
     */
    public function setDate($date)
    {
        $this->startDate = $date;
        return $this;
    }

    /**
     * Returns the start date key.
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets the start date key.
     *
     * @param string $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Returns the end date key.
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets the end date key.
     *
     * @param string $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Returns refundable key.
     *
     * @return bool
     */
    public function getRefundable()
    {
        return $this->refundable;
    }

    /**
     * Sets refundable key.
     *
     * @param bool $refundable
     */
    public function setRefundable($refundable)
    {
        $this->refundable = $refundable;
        return $this;
    }

    /**
     * Returns transportation reservation details object array.
     *
     * @return TransportationReservationDetails[]
     */
    public function getTransportationReservationDetails()
    {
        return $this->transportationReservationDetails;
    }

    /**
     * Sets transportation reservation details object array.
     *
     * @param TransportationReservationDetails[] $transportationReservationDetails
     */
    public function setTransportationReservationDetails($transportationReservationDetails)
    {
        $this->transportationReservationDetails = $transportationReservationDetails;
        return $this;
    }

    /**
     * Returns hotel reservation details object.
     *
     * @return HotelReservationDetails
     */
    public function getHotelReservationDetails()
    {
        return $this->hotelReservationDetails;
    }

    /**
     * Sets hotel reservation details object.
     *
     * @param HotelReservationDetails $hotelReservationDetails
     */
    public function setHotelReservationDetails($hotelReservationDetails)
    {
        $this->hotelReservationDetails = $hotelReservationDetails;
        return $this;
    }

    /**
     * Returns events object.
     *
     * @return Events
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Sets events object.
     *
     * @param Events $events
     */
    public function setEvents($events)
    {
        $this->events = $events;
        return $this;
    }
}
