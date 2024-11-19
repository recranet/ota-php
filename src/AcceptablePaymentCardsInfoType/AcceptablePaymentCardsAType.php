<?php

namespace Recranet\OTA\AcceptablePaymentCardsInfoType;

/**
 * Class representing AcceptablePaymentCardsAType
 */
class AcceptablePaymentCardsAType
{
    /**
     * Specific information of one payment card that is acceptable as a form of payment.
     *
     * @var \Recranet\OTA\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType[] $acceptablePaymentCard
     */
    private $acceptablePaymentCard = [
        
    ];

    /**
     * Adds as acceptablePaymentCard
     *
     * Specific information of one payment card that is acceptable as a form of payment.
     *
     * @return self
     * @param \Recranet\OTA\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType $acceptablePaymentCard
     */
    public function addToAcceptablePaymentCard(\Recranet\OTA\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType $acceptablePaymentCard)
    {
        $this->acceptablePaymentCard[] = $acceptablePaymentCard;
        return $this;
    }

    /**
     * isset acceptablePaymentCard
     *
     * Specific information of one payment card that is acceptable as a form of payment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcceptablePaymentCard($index)
    {
        return isset($this->acceptablePaymentCard[$index]);
    }

    /**
     * unset acceptablePaymentCard
     *
     * Specific information of one payment card that is acceptable as a form of payment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcceptablePaymentCard($index)
    {
        unset($this->acceptablePaymentCard[$index]);
    }

    /**
     * Gets as acceptablePaymentCard
     *
     * Specific information of one payment card that is acceptable as a form of payment.
     *
     * @return \Recranet\OTA\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType[]
     */
    public function getAcceptablePaymentCard()
    {
        return $this->acceptablePaymentCard;
    }

    /**
     * Sets a new acceptablePaymentCard
     *
     * Specific information of one payment card that is acceptable as a form of payment.
     *
     * @param \Recranet\OTA\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType[] $acceptablePaymentCard
     * @return self
     */
    public function setAcceptablePaymentCard(array $acceptablePaymentCard)
    {
        $this->acceptablePaymentCard = $acceptablePaymentCard;
        return $this;
    }
}

