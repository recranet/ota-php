<?php

namespace Recranet\OTA\Type;

/**
 * Class representing WrittenConfInstType
 *
 * Method by which confirmations should be delivered.
 * XSD Type: WrittenConfInstType
 */
class WrittenConfInstType
{
    /**
     * The language in which the confirmation should be provided.
     *
     * @var string $languageID
     */
    private $languageID = null;

    /**
     * The name to which the confirmation should be addressed.
     *
     * @var string $addresseeName
     */
    private $addresseeName = null;

    /**
     * The mailing address to which the confirmation should be delivered.
     *
     * @var string $address
     */
    private $address = null;

    /**
     * The telephone number associated with the delivery address.
     *
     * @var string $telephone
     */
    private $telephone = null;

    /**
     * When true a written confirmation was requested and will be sent.
     *
     * @var bool $confirmInd
     */
    private $confirmInd = null;

    /**
     * Additional data that will be sent with the confirmation. This could be used to include a map, pictures, or any other information that the reservation source wishes to include with the confirmation.
     *
     * @var \Recranet\OTA\Type\ParagraphType $supplementalData
     */
    private $supplementalData = null;

    /**
     * An email address to which the confirmation should be sent.
     *
     * @var \Recranet\OTA\Type\EmailType $email
     */
    private $email = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as languageID
     *
     * The language in which the confirmation should be provided.
     *
     * @return string
     */
    public function getLanguageID()
    {
        return $this->languageID;
    }

    /**
     * Sets a new languageID
     *
     * The language in which the confirmation should be provided.
     *
     * @param string $languageID
     * @return self
     */
    public function setLanguageID($languageID)
    {
        $this->languageID = $languageID;
        return $this;
    }

    /**
     * Gets as addresseeName
     *
     * The name to which the confirmation should be addressed.
     *
     * @return string
     */
    public function getAddresseeName()
    {
        return $this->addresseeName;
    }

    /**
     * Sets a new addresseeName
     *
     * The name to which the confirmation should be addressed.
     *
     * @param string $addresseeName
     * @return self
     */
    public function setAddresseeName($addresseeName)
    {
        $this->addresseeName = $addresseeName;
        return $this;
    }

    /**
     * Gets as address
     *
     * The mailing address to which the confirmation should be delivered.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * The mailing address to which the confirmation should be delivered.
     *
     * @param string $address
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as telephone
     *
     * The telephone number associated with the delivery address.
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * The telephone number associated with the delivery address.
     *
     * @param string $telephone
     * @return self
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Gets as confirmInd
     *
     * When true a written confirmation was requested and will be sent.
     *
     * @return bool
     */
    public function getConfirmInd()
    {
        return $this->confirmInd;
    }

    /**
     * Sets a new confirmInd
     *
     * When true a written confirmation was requested and will be sent.
     *
     * @param bool $confirmInd
     * @return self
     */
    public function setConfirmInd($confirmInd)
    {
        $this->confirmInd = $confirmInd;
        return $this;
    }

    /**
     * Gets as supplementalData
     *
     * Additional data that will be sent with the confirmation. This could be used to include a map, pictures, or any other information that the reservation source wishes to include with the confirmation.
     *
     * @return \Recranet\OTA\Type\ParagraphType
     */
    public function getSupplementalData()
    {
        return $this->supplementalData;
    }

    /**
     * Sets a new supplementalData
     *
     * Additional data that will be sent with the confirmation. This could be used to include a map, pictures, or any other information that the reservation source wishes to include with the confirmation.
     *
     * @param \Recranet\OTA\Type\ParagraphType $supplementalData
     * @return self
     */
    public function setSupplementalData(?\Recranet\OTA\Type\ParagraphType $supplementalData = null)
    {
        $this->supplementalData = $supplementalData;
        return $this;
    }

    /**
     * Gets as email
     *
     * An email address to which the confirmation should be sent.
     *
     * @return \Recranet\OTA\Type\EmailType
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * An email address to which the confirmation should be sent.
     *
     * @param \Recranet\OTA\Type\EmailType $email
     * @return self
     */
    public function setEmail(?\Recranet\OTA\Type\EmailType $email = null)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\Type\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\Type\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

