<?php

namespace Recranet\OTA\Type;

/**
 * Class representing OntologyPaymentType
 *
 * Payment information with ontology reference.
 * XSD Type: OntologyPaymentType
 */
class OntologyPaymentType
{
    /**
     * Travel rewards indicator.
     * Implementer: If true, a card that accumulates travel rewards was used.
     *
     * @var bool $rewardsInd
     */
    private $rewardsInd = null;

    /**
     * Total trip price.
     *
     * @var \Recranet\OTA\Type\OntologyPaymentType\TotalTripPriceAType $totalTripPrice
     */
    private $totalTripPrice = null;

    /**
     * Rate information.
     *
     * @var \Recranet\OTA\Type\OntologyPaymentType\RateAType $rate
     */
    private $rate = null;

    /**
     * Payment status.
     * Example: Prepaid
     *
     * @var \Recranet\OTA\Type\OntologyPaymentType\PaymentStatusAType $paymentStatus
     */
    private $paymentStatus = null;

    /**
     * Payment method.
     * Example: CreditCard
     *
     * @var \Recranet\OTA\Type\OntologyPaymentType\PaymentMethodAType $paymentMethod
     */
    private $paymentMethod = null;

    /**
     * Payment card type.
     *
     * @var \Recranet\OTA\Type\OntologyPaymentType\CardTypeAType $cardType
     */
    private $cardType = null;

    /**
     * Payment card issuer.
     *
     * @var \Recranet\OTA\Type\OntologyPaymentType\CardIssuerAType $cardIssuer
     */
    private $cardIssuer = null;

    /**
     * @var \Recranet\OTA\Type\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as rewardsInd
     *
     * Travel rewards indicator.
     * Implementer: If true, a card that accumulates travel rewards was used.
     *
     * @return bool
     */
    public function getRewardsInd()
    {
        return $this->rewardsInd;
    }

    /**
     * Sets a new rewardsInd
     *
     * Travel rewards indicator.
     * Implementer: If true, a card that accumulates travel rewards was used.
     *
     * @param bool $rewardsInd
     * @return self
     */
    public function setRewardsInd($rewardsInd)
    {
        $this->rewardsInd = $rewardsInd;
        return $this;
    }

    /**
     * Gets as totalTripPrice
     *
     * Total trip price.
     *
     * @return \Recranet\OTA\Type\OntologyPaymentType\TotalTripPriceAType
     */
    public function getTotalTripPrice()
    {
        return $this->totalTripPrice;
    }

    /**
     * Sets a new totalTripPrice
     *
     * Total trip price.
     *
     * @param \Recranet\OTA\Type\OntologyPaymentType\TotalTripPriceAType $totalTripPrice
     * @return self
     */
    public function setTotalTripPrice(?\Recranet\OTA\Type\OntologyPaymentType\TotalTripPriceAType $totalTripPrice = null)
    {
        $this->totalTripPrice = $totalTripPrice;
        return $this;
    }

    /**
     * Gets as rate
     *
     * Rate information.
     *
     * @return \Recranet\OTA\Type\OntologyPaymentType\RateAType
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * Rate information.
     *
     * @param \Recranet\OTA\Type\OntologyPaymentType\RateAType $rate
     * @return self
     */
    public function setRate(?\Recranet\OTA\Type\OntologyPaymentType\RateAType $rate = null)
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Gets as paymentStatus
     *
     * Payment status.
     * Example: Prepaid
     *
     * @return \Recranet\OTA\Type\OntologyPaymentType\PaymentStatusAType
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * Sets a new paymentStatus
     *
     * Payment status.
     * Example: Prepaid
     *
     * @param \Recranet\OTA\Type\OntologyPaymentType\PaymentStatusAType $paymentStatus
     * @return self
     */
    public function setPaymentStatus(?\Recranet\OTA\Type\OntologyPaymentType\PaymentStatusAType $paymentStatus = null)
    {
        $this->paymentStatus = $paymentStatus;
        return $this;
    }

    /**
     * Gets as paymentMethod
     *
     * Payment method.
     * Example: CreditCard
     *
     * @return \Recranet\OTA\Type\OntologyPaymentType\PaymentMethodAType
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Sets a new paymentMethod
     *
     * Payment method.
     * Example: CreditCard
     *
     * @param \Recranet\OTA\Type\OntologyPaymentType\PaymentMethodAType $paymentMethod
     * @return self
     */
    public function setPaymentMethod(?\Recranet\OTA\Type\OntologyPaymentType\PaymentMethodAType $paymentMethod = null)
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * Gets as cardType
     *
     * Payment card type.
     *
     * @return \Recranet\OTA\Type\OntologyPaymentType\CardTypeAType
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * Sets a new cardType
     *
     * Payment card type.
     *
     * @param \Recranet\OTA\Type\OntologyPaymentType\CardTypeAType $cardType
     * @return self
     */
    public function setCardType(?\Recranet\OTA\Type\OntologyPaymentType\CardTypeAType $cardType = null)
    {
        $this->cardType = $cardType;
        return $this;
    }

    /**
     * Gets as cardIssuer
     *
     * Payment card issuer.
     *
     * @return \Recranet\OTA\Type\OntologyPaymentType\CardIssuerAType
     */
    public function getCardIssuer()
    {
        return $this->cardIssuer;
    }

    /**
     * Sets a new cardIssuer
     *
     * Payment card issuer.
     *
     * @param \Recranet\OTA\Type\OntologyPaymentType\CardIssuerAType $cardIssuer
     * @return self
     */
    public function setCardIssuer(?\Recranet\OTA\Type\OntologyPaymentType\CardIssuerAType $cardIssuer = null)
    {
        $this->cardIssuer = $cardIssuer;
        return $this;
    }

    /**
     * Gets as ontologyExtension
     *
     * @return \Recranet\OTA\Type\OntologyExtension
     */
    public function getOntologyExtension()
    {
        return $this->ontologyExtension;
    }

    /**
     * Sets a new ontologyExtension
     *
     * @param \Recranet\OTA\Type\OntologyExtension $ontologyExtension
     * @return self
     */
    public function setOntologyExtension(?\Recranet\OTA\Type\OntologyExtension $ontologyExtension = null)
    {
        $this->ontologyExtension = $ontologyExtension;
        return $this;
    }
}

