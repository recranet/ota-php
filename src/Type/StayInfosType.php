<?php

namespace Recranet\OTA\Type;

/**
 * Class representing StayInfosType
 *
 * A collection of StayInfo objects
 * XSD Type: StayInfosType
 */
class StayInfosType
{
    /**
     * The code that identifies a hotel chain or management group. The hotel chain code is decided between vendors. This attribute is optional if the hotel is an independent property that can be identified by the HotelCode attribute.
     *
     * @var string $chainCode
     */
    private $chainCode = null;

    /**
     * A code that identifies the brand or flag of a hotel, often used for independently-owned or franchised properties who are known by a specific brand.
     *
     * @var string $brandCode
     */
    private $brandCode = null;

    /**
     * The code that uniquely identifies a single hotel property. The hotel code is decided between vendors.
     *
     * @var string $hotelCode
     */
    private $hotelCode = null;

    /**
     * The IATA city code; for example DCA, ORD.
     *
     * @var string $hotelCityCode
     */
    private $hotelCityCode = null;

    /**
     * A text field used to communicate the proper name of the hotel.
     *
     * @var string $hotelName
     */
    private $hotelName = null;

    /**
     * A text field used to communicate the context (or source of - ex Sabre, Galileo, Worldspan, Amadeus) the HotelReferenceGroup codes.
     *
     * @var string $hotelCodeContext
     */
    private $hotelCodeContext = null;

    /**
     * The name of the hotel chain (e.g., Hilton, Marriott, Hyatt, Starwood).
     *
     * @var string $chainName
     */
    private $chainName = null;

    /**
     * The name of a brand of hotels (e.g., Courtyard, Hampton Inn).
     *
     * @var string $brandName
     */
    private $brandName = null;

    /**
     * An identifier of an area as defined by a hotel reservation system.
     *
     * @var string $areaID
     */
    private $areaID = null;

    /**
     * TTI hotel reference code.
     * Example: 123
     * Note: This code is maintained by the Travel Technology Initiative (TTI) and provides a unique way to identify a property across a multiplicity of channels, service providers, tour companies, representation companies and third parties involved in the booking, administration and fulfillment of travel within the hospitality industry. For more information: http://www.tti.org/tticodes.html
     *
     * @var int $tTIcode
     */
    private $tTIcode = null;

    /**
     * Provides details of a guest's stay.
     *
     * @var \Recranet\OTA\Type\StayInfoType[] $stayInfo
     */
    private $stayInfo = [
        
    ];

    /**
     * Gets as chainCode
     *
     * The code that identifies a hotel chain or management group. The hotel chain code is decided between vendors. This attribute is optional if the hotel is an independent property that can be identified by the HotelCode attribute.
     *
     * @return string
     */
    public function getChainCode()
    {
        return $this->chainCode;
    }

    /**
     * Sets a new chainCode
     *
     * The code that identifies a hotel chain or management group. The hotel chain code is decided between vendors. This attribute is optional if the hotel is an independent property that can be identified by the HotelCode attribute.
     *
     * @param string $chainCode
     * @return self
     */
    public function setChainCode($chainCode)
    {
        $this->chainCode = $chainCode;
        return $this;
    }

    /**
     * Gets as brandCode
     *
     * A code that identifies the brand or flag of a hotel, often used for independently-owned or franchised properties who are known by a specific brand.
     *
     * @return string
     */
    public function getBrandCode()
    {
        return $this->brandCode;
    }

    /**
     * Sets a new brandCode
     *
     * A code that identifies the brand or flag of a hotel, often used for independently-owned or franchised properties who are known by a specific brand.
     *
     * @param string $brandCode
     * @return self
     */
    public function setBrandCode($brandCode)
    {
        $this->brandCode = $brandCode;
        return $this;
    }

    /**
     * Gets as hotelCode
     *
     * The code that uniquely identifies a single hotel property. The hotel code is decided between vendors.
     *
     * @return string
     */
    public function getHotelCode()
    {
        return $this->hotelCode;
    }

    /**
     * Sets a new hotelCode
     *
     * The code that uniquely identifies a single hotel property. The hotel code is decided between vendors.
     *
     * @param string $hotelCode
     * @return self
     */
    public function setHotelCode($hotelCode)
    {
        $this->hotelCode = $hotelCode;
        return $this;
    }

    /**
     * Gets as hotelCityCode
     *
     * The IATA city code; for example DCA, ORD.
     *
     * @return string
     */
    public function getHotelCityCode()
    {
        return $this->hotelCityCode;
    }

    /**
     * Sets a new hotelCityCode
     *
     * The IATA city code; for example DCA, ORD.
     *
     * @param string $hotelCityCode
     * @return self
     */
    public function setHotelCityCode($hotelCityCode)
    {
        $this->hotelCityCode = $hotelCityCode;
        return $this;
    }

    /**
     * Gets as hotelName
     *
     * A text field used to communicate the proper name of the hotel.
     *
     * @return string
     */
    public function getHotelName()
    {
        return $this->hotelName;
    }

    /**
     * Sets a new hotelName
     *
     * A text field used to communicate the proper name of the hotel.
     *
     * @param string $hotelName
     * @return self
     */
    public function setHotelName($hotelName)
    {
        $this->hotelName = $hotelName;
        return $this;
    }

    /**
     * Gets as hotelCodeContext
     *
     * A text field used to communicate the context (or source of - ex Sabre, Galileo, Worldspan, Amadeus) the HotelReferenceGroup codes.
     *
     * @return string
     */
    public function getHotelCodeContext()
    {
        return $this->hotelCodeContext;
    }

    /**
     * Sets a new hotelCodeContext
     *
     * A text field used to communicate the context (or source of - ex Sabre, Galileo, Worldspan, Amadeus) the HotelReferenceGroup codes.
     *
     * @param string $hotelCodeContext
     * @return self
     */
    public function setHotelCodeContext($hotelCodeContext)
    {
        $this->hotelCodeContext = $hotelCodeContext;
        return $this;
    }

    /**
     * Gets as chainName
     *
     * The name of the hotel chain (e.g., Hilton, Marriott, Hyatt, Starwood).
     *
     * @return string
     */
    public function getChainName()
    {
        return $this->chainName;
    }

    /**
     * Sets a new chainName
     *
     * The name of the hotel chain (e.g., Hilton, Marriott, Hyatt, Starwood).
     *
     * @param string $chainName
     * @return self
     */
    public function setChainName($chainName)
    {
        $this->chainName = $chainName;
        return $this;
    }

    /**
     * Gets as brandName
     *
     * The name of a brand of hotels (e.g., Courtyard, Hampton Inn).
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * Sets a new brandName
     *
     * The name of a brand of hotels (e.g., Courtyard, Hampton Inn).
     *
     * @param string $brandName
     * @return self
     */
    public function setBrandName($brandName)
    {
        $this->brandName = $brandName;
        return $this;
    }

    /**
     * Gets as areaID
     *
     * An identifier of an area as defined by a hotel reservation system.
     *
     * @return string
     */
    public function getAreaID()
    {
        return $this->areaID;
    }

    /**
     * Sets a new areaID
     *
     * An identifier of an area as defined by a hotel reservation system.
     *
     * @param string $areaID
     * @return self
     */
    public function setAreaID($areaID)
    {
        $this->areaID = $areaID;
        return $this;
    }

    /**
     * Gets as tTIcode
     *
     * TTI hotel reference code.
     * Example: 123
     * Note: This code is maintained by the Travel Technology Initiative (TTI) and provides a unique way to identify a property across a multiplicity of channels, service providers, tour companies, representation companies and third parties involved in the booking, administration and fulfillment of travel within the hospitality industry. For more information: http://www.tti.org/tticodes.html
     *
     * @return int
     */
    public function getTTIcode()
    {
        return $this->tTIcode;
    }

    /**
     * Sets a new tTIcode
     *
     * TTI hotel reference code.
     * Example: 123
     * Note: This code is maintained by the Travel Technology Initiative (TTI) and provides a unique way to identify a property across a multiplicity of channels, service providers, tour companies, representation companies and third parties involved in the booking, administration and fulfillment of travel within the hospitality industry. For more information: http://www.tti.org/tticodes.html
     *
     * @param int $tTIcode
     * @return self
     */
    public function setTTIcode($tTIcode)
    {
        $this->tTIcode = $tTIcode;
        return $this;
    }

    /**
     * Adds as stayInfo
     *
     * Provides details of a guest's stay.
     *
     * @return self
     * @param \Recranet\OTA\Type\StayInfoType $stayInfo
     */
    public function addToStayInfo(\Recranet\OTA\Type\StayInfoType $stayInfo)
    {
        $this->stayInfo[] = $stayInfo;
        return $this;
    }

    /**
     * isset stayInfo
     *
     * Provides details of a guest's stay.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStayInfo($index)
    {
        return isset($this->stayInfo[$index]);
    }

    /**
     * unset stayInfo
     *
     * Provides details of a guest's stay.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStayInfo($index)
    {
        unset($this->stayInfo[$index]);
    }

    /**
     * Gets as stayInfo
     *
     * Provides details of a guest's stay.
     *
     * @return \Recranet\OTA\Type\StayInfoType[]
     */
    public function getStayInfo()
    {
        return $this->stayInfo;
    }

    /**
     * Sets a new stayInfo
     *
     * Provides details of a guest's stay.
     *
     * @param \Recranet\OTA\Type\StayInfoType[] $stayInfo
     * @return self
     */
    public function setStayInfo(array $stayInfo)
    {
        $this->stayInfo = $stayInfo;
        return $this;
    }
}

