<?php

namespace Recranet\OTA\Type;

/**
 * Class representing AddressType
 *
 * Provides address information.
 * XSD Type: AddressType
 */
class AddressType
{
    /**
     * Specifies if the associated data is formatted or not. When true, then it is formatted; when false, then not formatted.
     *
     * @var bool $formattedInd
     */
    private $formattedInd = null;

    /**
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @var string $shareSynchInd
     */
    private $shareSynchInd = null;

    /**
     * Permission for sharing data for marketing purposes.
     *
     * @var string $shareMarketInd
     */
    private $shareMarketInd = null;

    /**
     * Defines the type of address (e.g. home, business, other). Refer to OpenTravel Code List Communication Location Type (CLT).
     *
     * @var string $type
     */
    private $type = null;

    /**
     * A remark associated with this address.
     *
     * @var string $remark
     */
    private $remark = null;

    /**
     * Address language.
     * Example: en
     *
     * @var string $language
     */
    private $language = null;

    /**
     * Valid email address indicator.
     * Example: true
     * Implementer: If true, this is a valid and complete mailing address that has been verified through an address verification service or previously mailed materials have not been returned.
     *
     * @var bool $validInd
     */
    private $validInd = null;

    /**
     * May contain the street number and optionally the street name.
     *
     * @var \Recranet\OTA\Type\AddressType\StreetNmbrAType $streetNmbr
     */
    private $streetNmbr = null;

    /**
     * Building name, room, apartment, or suite number.
     *
     * @var \Recranet\OTA\Type\AddressType\BldgRoomAType[] $bldgRoom
     */
    private $bldgRoom = [
        
    ];

    /**
     * When the address is unformatted (FormattedInd="false") these lines will contain free form address details. When the address is formatted and street number and street name must be sent independently, the street number will be sent using StreetNmbr, and the street name will be sent in the first AddressLine occurrence.
     *
     * @var string[] $addressLine
     */
    private $addressLine = [
        
    ];

    /**
     * City (e.g., Dublin), town, or postal station (i.e., a postal service territory, often used in a military address).
     *
     * @var string $cityName
     */
    private $cityName = null;

    /**
     * Post Office Code number.
     *
     * @var string $postalCode
     */
    private $postalCode = null;

    /**
     * County or Region Name (e.g., Fairfax).
     *
     * @var string $county
     */
    private $county = null;

    /**
     * State or Province name (e.g., Texas).
     *
     * @var \Recranet\OTA\Type\StateProvType $stateProv
     */
    private $stateProv = null;

    /**
     * Country name (e.g., Ireland).
     *
     * @var \Recranet\OTA\Type\CountryNameType $countryName
     */
    private $countryName = null;

    /**
     * Gets as formattedInd
     *
     * Specifies if the associated data is formatted or not. When true, then it is formatted; when false, then not formatted.
     *
     * @return bool
     */
    public function getFormattedInd()
    {
        return $this->formattedInd;
    }

    /**
     * Sets a new formattedInd
     *
     * Specifies if the associated data is formatted or not. When true, then it is formatted; when false, then not formatted.
     *
     * @param bool $formattedInd
     * @return self
     */
    public function setFormattedInd($formattedInd)
    {
        $this->formattedInd = $formattedInd;
        return $this;
    }

    /**
     * Gets as shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd()
    {
        return $this->shareSynchInd;
    }

    /**
     * Sets a new shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @param string $shareSynchInd
     * @return self
     */
    public function setShareSynchInd($shareSynchInd)
    {
        $this->shareSynchInd = $shareSynchInd;
        return $this;
    }

    /**
     * Gets as shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd()
    {
        return $this->shareMarketInd;
    }

    /**
     * Sets a new shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     * @return self
     */
    public function setShareMarketInd($shareMarketInd)
    {
        $this->shareMarketInd = $shareMarketInd;
        return $this;
    }

    /**
     * Gets as type
     *
     * Defines the type of address (e.g. home, business, other). Refer to OpenTravel Code List Communication Location Type (CLT).
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Defines the type of address (e.g. home, business, other). Refer to OpenTravel Code List Communication Location Type (CLT).
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as remark
     *
     * A remark associated with this address.
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * A remark associated with this address.
     *
     * @param string $remark
     * @return self
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * Gets as language
     *
     * Address language.
     * Example: en
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Address language.
     * Example: en
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as validInd
     *
     * Valid email address indicator.
     * Example: true
     * Implementer: If true, this is a valid and complete mailing address that has been verified through an address verification service or previously mailed materials have not been returned.
     *
     * @return bool
     */
    public function getValidInd()
    {
        return $this->validInd;
    }

    /**
     * Sets a new validInd
     *
     * Valid email address indicator.
     * Example: true
     * Implementer: If true, this is a valid and complete mailing address that has been verified through an address verification service or previously mailed materials have not been returned.
     *
     * @param bool $validInd
     * @return self
     */
    public function setValidInd($validInd)
    {
        $this->validInd = $validInd;
        return $this;
    }

    /**
     * Gets as streetNmbr
     *
     * May contain the street number and optionally the street name.
     *
     * @return \Recranet\OTA\Type\AddressType\StreetNmbrAType
     */
    public function getStreetNmbr()
    {
        return $this->streetNmbr;
    }

    /**
     * Sets a new streetNmbr
     *
     * May contain the street number and optionally the street name.
     *
     * @param \Recranet\OTA\Type\AddressType\StreetNmbrAType $streetNmbr
     * @return self
     */
    public function setStreetNmbr(?\Recranet\OTA\Type\AddressType\StreetNmbrAType $streetNmbr = null)
    {
        $this->streetNmbr = $streetNmbr;
        return $this;
    }

    /**
     * Adds as bldgRoom
     *
     * Building name, room, apartment, or suite number.
     *
     * @return self
     * @param \Recranet\OTA\Type\AddressType\BldgRoomAType $bldgRoom
     */
    public function addToBldgRoom(\Recranet\OTA\Type\AddressType\BldgRoomAType $bldgRoom)
    {
        $this->bldgRoom[] = $bldgRoom;
        return $this;
    }

    /**
     * isset bldgRoom
     *
     * Building name, room, apartment, or suite number.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBldgRoom($index)
    {
        return isset($this->bldgRoom[$index]);
    }

    /**
     * unset bldgRoom
     *
     * Building name, room, apartment, or suite number.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBldgRoom($index)
    {
        unset($this->bldgRoom[$index]);
    }

    /**
     * Gets as bldgRoom
     *
     * Building name, room, apartment, or suite number.
     *
     * @return \Recranet\OTA\Type\AddressType\BldgRoomAType[]
     */
    public function getBldgRoom()
    {
        return $this->bldgRoom;
    }

    /**
     * Sets a new bldgRoom
     *
     * Building name, room, apartment, or suite number.
     *
     * @param \Recranet\OTA\Type\AddressType\BldgRoomAType[] $bldgRoom
     * @return self
     */
    public function setBldgRoom(array $bldgRoom = null)
    {
        $this->bldgRoom = $bldgRoom;
        return $this;
    }

    /**
     * Adds as addressLine
     *
     * When the address is unformatted (FormattedInd="false") these lines will contain free form address details. When the address is formatted and street number and street name must be sent independently, the street number will be sent using StreetNmbr, and the street name will be sent in the first AddressLine occurrence.
     *
     * @return self
     * @param string $addressLine
     */
    public function addToAddressLine($addressLine)
    {
        $this->addressLine[] = $addressLine;
        return $this;
    }

    /**
     * isset addressLine
     *
     * When the address is unformatted (FormattedInd="false") these lines will contain free form address details. When the address is formatted and street number and street name must be sent independently, the street number will be sent using StreetNmbr, and the street name will be sent in the first AddressLine occurrence.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressLine($index)
    {
        return isset($this->addressLine[$index]);
    }

    /**
     * unset addressLine
     *
     * When the address is unformatted (FormattedInd="false") these lines will contain free form address details. When the address is formatted and street number and street name must be sent independently, the street number will be sent using StreetNmbr, and the street name will be sent in the first AddressLine occurrence.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressLine($index)
    {
        unset($this->addressLine[$index]);
    }

    /**
     * Gets as addressLine
     *
     * When the address is unformatted (FormattedInd="false") these lines will contain free form address details. When the address is formatted and street number and street name must be sent independently, the street number will be sent using StreetNmbr, and the street name will be sent in the first AddressLine occurrence.
     *
     * @return string[]
     */
    public function getAddressLine()
    {
        return $this->addressLine;
    }

    /**
     * Sets a new addressLine
     *
     * When the address is unformatted (FormattedInd="false") these lines will contain free form address details. When the address is formatted and street number and street name must be sent independently, the street number will be sent using StreetNmbr, and the street name will be sent in the first AddressLine occurrence.
     *
     * @param string $addressLine
     * @return self
     */
    public function setAddressLine(array $addressLine = null)
    {
        $this->addressLine = $addressLine;
        return $this;
    }

    /**
     * Gets as cityName
     *
     * City (e.g., Dublin), town, or postal station (i.e., a postal service territory, often used in a military address).
     *
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Sets a new cityName
     *
     * City (e.g., Dublin), town, or postal station (i.e., a postal service territory, often used in a military address).
     *
     * @param string $cityName
     * @return self
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * Gets as postalCode
     *
     * Post Office Code number.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * Post Office Code number.
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Gets as county
     *
     * County or Region Name (e.g., Fairfax).
     *
     * @return string
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Sets a new county
     *
     * County or Region Name (e.g., Fairfax).
     *
     * @param string $county
     * @return self
     */
    public function setCounty($county)
    {
        $this->county = $county;
        return $this;
    }

    /**
     * Gets as stateProv
     *
     * State or Province name (e.g., Texas).
     *
     * @return \Recranet\OTA\Type\StateProvType
     */
    public function getStateProv()
    {
        return $this->stateProv;
    }

    /**
     * Sets a new stateProv
     *
     * State or Province name (e.g., Texas).
     *
     * @param \Recranet\OTA\Type\StateProvType $stateProv
     * @return self
     */
    public function setStateProv(?\Recranet\OTA\Type\StateProvType $stateProv = null)
    {
        $this->stateProv = $stateProv;
        return $this;
    }

    /**
     * Gets as countryName
     *
     * Country name (e.g., Ireland).
     *
     * @return \Recranet\OTA\Type\CountryNameType
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Sets a new countryName
     *
     * Country name (e.g., Ireland).
     *
     * @param \Recranet\OTA\Type\CountryNameType $countryName
     * @return self
     */
    public function setCountryName(?\Recranet\OTA\Type\CountryNameType $countryName = null)
    {
        $this->countryName = $countryName;
        return $this;
    }
}

