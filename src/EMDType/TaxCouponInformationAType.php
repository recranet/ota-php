<?php

namespace Recranet\OTA\EMDType;

/**
 * Class representing TaxCouponInformationAType
 */
class TaxCouponInformationAType
{
    /**
     * The date of birth of the passenger.
     *
     * @var \DateTime $birthDate
     */
    private $birthDate = null;

    /**
     * The airport/city code which has been assumed to be the journey turnaround point in the construction of the itinerary by the pricing system.
     *
     * @var string $journeyTurnaroundCityCode
     */
    private $journeyTurnaroundCityCode = null;

    /**
     * The ticket/document number to which the tax coupon data applies.
     *
     * @var \Recranet\OTA\EMDType\TaxCouponInformationAType\TicketDocumentAType[] $ticketDocument
     */
    private $ticketDocument = [
        
    ];

    /**
     * Gets as birthDate
     *
     * The date of birth of the passenger.
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets a new birthDate
     *
     * The date of birth of the passenger.
     *
     * @param \DateTime $birthDate
     * @return self
     */
    public function setBirthDate(\DateTime $birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * Gets as journeyTurnaroundCityCode
     *
     * The airport/city code which has been assumed to be the journey turnaround point in the construction of the itinerary by the pricing system.
     *
     * @return string
     */
    public function getJourneyTurnaroundCityCode()
    {
        return $this->journeyTurnaroundCityCode;
    }

    /**
     * Sets a new journeyTurnaroundCityCode
     *
     * The airport/city code which has been assumed to be the journey turnaround point in the construction of the itinerary by the pricing system.
     *
     * @param string $journeyTurnaroundCityCode
     * @return self
     */
    public function setJourneyTurnaroundCityCode($journeyTurnaroundCityCode)
    {
        $this->journeyTurnaroundCityCode = $journeyTurnaroundCityCode;
        return $this;
    }

    /**
     * Adds as ticketDocument
     *
     * The ticket/document number to which the tax coupon data applies.
     *
     * @return self
     * @param \Recranet\OTA\EMDType\TaxCouponInformationAType\TicketDocumentAType $ticketDocument
     */
    public function addToTicketDocument(\Recranet\OTA\EMDType\TaxCouponInformationAType\TicketDocumentAType $ticketDocument)
    {
        $this->ticketDocument[] = $ticketDocument;
        return $this;
    }

    /**
     * isset ticketDocument
     *
     * The ticket/document number to which the tax coupon data applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTicketDocument($index)
    {
        return isset($this->ticketDocument[$index]);
    }

    /**
     * unset ticketDocument
     *
     * The ticket/document number to which the tax coupon data applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTicketDocument($index)
    {
        unset($this->ticketDocument[$index]);
    }

    /**
     * Gets as ticketDocument
     *
     * The ticket/document number to which the tax coupon data applies.
     *
     * @return \Recranet\OTA\EMDType\TaxCouponInformationAType\TicketDocumentAType[]
     */
    public function getTicketDocument()
    {
        return $this->ticketDocument;
    }

    /**
     * Sets a new ticketDocument
     *
     * The ticket/document number to which the tax coupon data applies.
     *
     * @param \Recranet\OTA\EMDType\TaxCouponInformationAType\TicketDocumentAType[] $ticketDocument
     * @return self
     */
    public function setTicketDocument(array $ticketDocument)
    {
        $this->ticketDocument = $ticketDocument;
        return $this;
    }
}

