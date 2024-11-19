<?php

namespace Recranet\OTA;

/**
 * Class representing AcceptablePaymentCardsInfoType
 *
 * This complex type identifies payment cards that are acceptable for a specific form of payment, along with the ability to provide free text information regarding payment cards.
 * XSD Type: AcceptablePaymentCardsInfoType
 */
class AcceptablePaymentCardsInfoType
{
    /**
     * A collection of payment cards that are acceptable as a form of payment.
     *
     * @var \Recranet\OTA\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType[] $acceptablePaymentCards
     */
    private $acceptablePaymentCards = null;

    /**
     * General information regarding the use of payment cards.
     *
     * @var \Recranet\OTA\FormattedTextType $info
     */
    private $info = null;

    /**
     * Adds as acceptablePaymentCard
     *
     * A collection of payment cards that are acceptable as a form of payment.
     *
     * @return self
     * @param \Recranet\OTA\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType $acceptablePaymentCard
     */
    public function addToAcceptablePaymentCards(\Recranet\OTA\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType $acceptablePaymentCard)
    {
        $this->acceptablePaymentCards[] = $acceptablePaymentCard;
        return $this;
    }

    /**
     * isset acceptablePaymentCards
     *
     * A collection of payment cards that are acceptable as a form of payment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcceptablePaymentCards($index)
    {
        return isset($this->acceptablePaymentCards[$index]);
    }

    /**
     * unset acceptablePaymentCards
     *
     * A collection of payment cards that are acceptable as a form of payment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcceptablePaymentCards($index)
    {
        unset($this->acceptablePaymentCards[$index]);
    }

    /**
     * Gets as acceptablePaymentCards
     *
     * A collection of payment cards that are acceptable as a form of payment.
     *
     * @return \Recranet\OTA\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType[]
     */
    public function getAcceptablePaymentCards()
    {
        return $this->acceptablePaymentCards;
    }

    /**
     * Sets a new acceptablePaymentCards
     *
     * A collection of payment cards that are acceptable as a form of payment.
     *
     * @param \Recranet\OTA\AcceptablePaymentCardsInfoType\AcceptablePaymentCardsAType\AcceptablePaymentCardAType[] $acceptablePaymentCards
     * @return self
     */
    public function setAcceptablePaymentCards(array $acceptablePaymentCards = null)
    {
        $this->acceptablePaymentCards = $acceptablePaymentCards;
        return $this;
    }

    /**
     * Gets as info
     *
     * General information regarding the use of payment cards.
     *
     * @return \Recranet\OTA\FormattedTextType
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * General information regarding the use of payment cards.
     *
     * @param \Recranet\OTA\FormattedTextType $info
     * @return self
     */
    public function setInfo(?\Recranet\OTA\FormattedTextType $info = null)
    {
        $this->info = $info;
        return $this;
    }
}

