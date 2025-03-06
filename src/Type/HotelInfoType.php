<?php

namespace Recranet\OTA\Type;

/**
 * Class representing HotelInfoType
 *
 * The HotelInfo class that describes general information about the hotel.
 * XSD Type: HotelInfoType
 */
class HotelInfoType
{
    /**
     * The date that the hotel facility was built, usually just the year. If a full date is used, it is recommended that the W3C date format be followed.
     *
     * @var string $whenBuilt
     */
    private $whenBuilt = null;

    /**
     * Indication as to the last time any element supported within this message was updated.
     *
     * @var \DateTime $lastUpdated
     */
    private $lastUpdated = null;

    /**
     * Description of the weather typical to the hotel facility's area.
     *
     * @var string $areaWeather
     */
    private $areaWeather = null;

    /**
     * Identifies the interface being used by this hotel.
     *
     * @var string $interfaceCompliance
     */
    private $interfaceCompliance = null;

    /**
     * Identifies the Property Management System being used by this hotel.
     *
     * @var string $pMSSystem
     */
    private $pMSSystem = null;

    /**
     * The starting value of the time span.
     *
     * @var \DateTime $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @var \DateTime $end
     */
    private $end = null;

    /**
     * This is a description of the operating status of the Hotel. This information may support the code in HotelStatusCode.
     *
     * @var string $hotelStatus
     */
    private $hotelStatus = null;

    /**
     * This indicates the operating status (e.g. Open, Closed, Deflagged, Pre-opening) of the hotels to be returned in the response. Refer to OpenTravel Code List HotelStatusCode.
     *
     * @var string $hotelStatusCode
     */
    private $hotelStatusCode = null;

    /**
     * The tax ID code for the property.
     *
     * @var string $taxID
     */
    private $taxID = null;

    /**
     * When false, indicates the location does not observe Daylight Saving Time.
     *
     * @var bool $daylightSavingIndicator
     */
    private $daylightSavingIndicator = null;

    /**
     * When true, the hotel indicates they are ISO 9000 certified.
     *
     * @var bool $iSO9000CertifiedInd
     */
    private $iSO9000CertifiedInd = null;

    /**
     * The full name of the hotel.
     *
     * @var \Recranet\OTA\Type\HotelInfoType\HotelNameAType $hotelName
     */
    private $hotelName = null;

    /**
     * A collection of date and time periods when the hotel facility is closed.
     *
     * @var \Recranet\OTA\Type\DateTimeSpanType[] $closedSeasons
     */
    private $closedSeasons = null;

    /**
     * Identifies any Blackout Dates which are periods during which the hotel cannot guarantee rates and rooms availability due to peak occupancy.
     *
     * @var \Recranet\OTA\Type\HotelInfoType\BlackoutDatesAType\BlackoutDateAType[] $blackoutDates
     */
    private $blackoutDates = null;

    /**
     * Collection of directions to/from one or more locations.
     *
     * @var \Recranet\OTA\Type\RelativePositionType[] $relativePositions
     */
    private $relativePositions = null;

    /**
     * Collection of descriptive details about a hotel.
     *
     * @var \Recranet\OTA\Type\CategoryCodesType $categoryCodes
     */
    private $categoryCodes = null;

    /**
     * Collection of hotel and/or renovation information.
     *
     * @var \Recranet\OTA\Type\HotelInfoType\DescriptionsAType $descriptions
     */
    private $descriptions = null;

    /**
     * A collection of hotel codes and descriptions.
     *
     * @var \Recranet\OTA\Type\HotelInfoType\HotelInfoCodesAType\HotelInfoCodeAType[] $hotelInfoCodes
     */
    private $hotelInfoCodes = null;

    /**
     * Describes the geocoded location of the hotel.
     *
     * @var \Recranet\OTA\Type\HotelInfoType\PositionAType $position
     */
    private $position = null;

    /**
     * Collection of hotel services and/or amenities available to the guest.
     *
     * @var \Recranet\OTA\Type\HotelInfoType\ServicesAType\ServiceAType[] $services
     */
    private $services = null;

    /**
     * Collection of WeatherInfo elements. This may be used to provide information for multiple time periods.
     *
     * @var \Recranet\OTA\Type\WeatherInfoType[] $weatherInfos
     */
    private $weatherInfos = null;

    /**
     * Collection of OwnershipManagementInfo.
     *
     * @var \Recranet\OTA\Type\HotelInfoType\OwnershipManagementInfosAType\OwnershipManagementInfoAType[] $ownershipManagementInfos
     */
    private $ownershipManagementInfos = null;

    /**
     * Collection of language details pertaining to the hotel.
     *
     * @var \Recranet\OTA\Type\HotelInfoType\LanguagesAType\LanguageAType[] $languages
     */
    private $languages = null;

    /**
     * Gets as whenBuilt
     *
     * The date that the hotel facility was built, usually just the year. If a full date is used, it is recommended that the W3C date format be followed.
     *
     * @return string
     */
    public function getWhenBuilt()
    {
        return $this->whenBuilt;
    }

    /**
     * Sets a new whenBuilt
     *
     * The date that the hotel facility was built, usually just the year. If a full date is used, it is recommended that the W3C date format be followed.
     *
     * @param string $whenBuilt
     * @return self
     */
    public function setWhenBuilt($whenBuilt)
    {
        $this->whenBuilt = $whenBuilt;
        return $this;
    }

    /**
     * Gets as lastUpdated
     *
     * Indication as to the last time any element supported within this message was updated.
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * Sets a new lastUpdated
     *
     * Indication as to the last time any element supported within this message was updated.
     *
     * @param \DateTime $lastUpdated
     * @return self
     */
    public function setLastUpdated(\DateTime $lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;
        return $this;
    }

    /**
     * Gets as areaWeather
     *
     * Description of the weather typical to the hotel facility's area.
     *
     * @return string
     */
    public function getAreaWeather()
    {
        return $this->areaWeather;
    }

    /**
     * Sets a new areaWeather
     *
     * Description of the weather typical to the hotel facility's area.
     *
     * @param string $areaWeather
     * @return self
     */
    public function setAreaWeather($areaWeather)
    {
        $this->areaWeather = $areaWeather;
        return $this;
    }

    /**
     * Gets as interfaceCompliance
     *
     * Identifies the interface being used by this hotel.
     *
     * @return string
     */
    public function getInterfaceCompliance()
    {
        return $this->interfaceCompliance;
    }

    /**
     * Sets a new interfaceCompliance
     *
     * Identifies the interface being used by this hotel.
     *
     * @param string $interfaceCompliance
     * @return self
     */
    public function setInterfaceCompliance($interfaceCompliance)
    {
        $this->interfaceCompliance = $interfaceCompliance;
        return $this;
    }

    /**
     * Gets as pMSSystem
     *
     * Identifies the Property Management System being used by this hotel.
     *
     * @return string
     */
    public function getPMSSystem()
    {
        return $this->pMSSystem;
    }

    /**
     * Sets a new pMSSystem
     *
     * Identifies the Property Management System being used by this hotel.
     *
     * @param string $pMSSystem
     * @return self
     */
    public function setPMSSystem($pMSSystem)
    {
        $this->pMSSystem = $pMSSystem;
        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \DateTime $start
     * @return self
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \DateTime $end
     * @return self
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Gets as hotelStatus
     *
     * This is a description of the operating status of the Hotel. This information may support the code in HotelStatusCode.
     *
     * @return string
     */
    public function getHotelStatus()
    {
        return $this->hotelStatus;
    }

    /**
     * Sets a new hotelStatus
     *
     * This is a description of the operating status of the Hotel. This information may support the code in HotelStatusCode.
     *
     * @param string $hotelStatus
     * @return self
     */
    public function setHotelStatus($hotelStatus)
    {
        $this->hotelStatus = $hotelStatus;
        return $this;
    }

    /**
     * Gets as hotelStatusCode
     *
     * This indicates the operating status (e.g. Open, Closed, Deflagged, Pre-opening) of the hotels to be returned in the response. Refer to OpenTravel Code List HotelStatusCode.
     *
     * @return string
     */
    public function getHotelStatusCode()
    {
        return $this->hotelStatusCode;
    }

    /**
     * Sets a new hotelStatusCode
     *
     * This indicates the operating status (e.g. Open, Closed, Deflagged, Pre-opening) of the hotels to be returned in the response. Refer to OpenTravel Code List HotelStatusCode.
     *
     * @param string $hotelStatusCode
     * @return self
     */
    public function setHotelStatusCode($hotelStatusCode)
    {
        $this->hotelStatusCode = $hotelStatusCode;
        return $this;
    }

    /**
     * Gets as taxID
     *
     * The tax ID code for the property.
     *
     * @return string
     */
    public function getTaxID()
    {
        return $this->taxID;
    }

    /**
     * Sets a new taxID
     *
     * The tax ID code for the property.
     *
     * @param string $taxID
     * @return self
     */
    public function setTaxID($taxID)
    {
        $this->taxID = $taxID;
        return $this;
    }

    /**
     * Gets as daylightSavingIndicator
     *
     * When false, indicates the location does not observe Daylight Saving Time.
     *
     * @return bool
     */
    public function getDaylightSavingIndicator()
    {
        return $this->daylightSavingIndicator;
    }

    /**
     * Sets a new daylightSavingIndicator
     *
     * When false, indicates the location does not observe Daylight Saving Time.
     *
     * @param bool $daylightSavingIndicator
     * @return self
     */
    public function setDaylightSavingIndicator($daylightSavingIndicator)
    {
        $this->daylightSavingIndicator = $daylightSavingIndicator;
        return $this;
    }

    /**
     * Gets as iSO9000CertifiedInd
     *
     * When true, the hotel indicates they are ISO 9000 certified.
     *
     * @return bool
     */
    public function getISO9000CertifiedInd()
    {
        return $this->iSO9000CertifiedInd;
    }

    /**
     * Sets a new iSO9000CertifiedInd
     *
     * When true, the hotel indicates they are ISO 9000 certified.
     *
     * @param bool $iSO9000CertifiedInd
     * @return self
     */
    public function setISO9000CertifiedInd($iSO9000CertifiedInd)
    {
        $this->iSO9000CertifiedInd = $iSO9000CertifiedInd;
        return $this;
    }

    /**
     * Gets as hotelName
     *
     * The full name of the hotel.
     *
     * @return \Recranet\OTA\Type\HotelInfoType\HotelNameAType
     */
    public function getHotelName()
    {
        return $this->hotelName;
    }

    /**
     * Sets a new hotelName
     *
     * The full name of the hotel.
     *
     * @param \Recranet\OTA\Type\HotelInfoType\HotelNameAType $hotelName
     * @return self
     */
    public function setHotelName(?\Recranet\OTA\Type\HotelInfoType\HotelNameAType $hotelName = null)
    {
        $this->hotelName = $hotelName;
        return $this;
    }

    /**
     * Adds as closedSeason
     *
     * A collection of date and time periods when the hotel facility is closed.
     *
     * @return self
     * @param \Recranet\OTA\Type\DateTimeSpanType $closedSeason
     */
    public function addToClosedSeasons(\Recranet\OTA\Type\DateTimeSpanType $closedSeason)
    {
        $this->closedSeasons[] = $closedSeason;
        return $this;
    }

    /**
     * isset closedSeasons
     *
     * A collection of date and time periods when the hotel facility is closed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClosedSeasons($index)
    {
        return isset($this->closedSeasons[$index]);
    }

    /**
     * unset closedSeasons
     *
     * A collection of date and time periods when the hotel facility is closed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClosedSeasons($index)
    {
        unset($this->closedSeasons[$index]);
    }

    /**
     * Gets as closedSeasons
     *
     * A collection of date and time periods when the hotel facility is closed.
     *
     * @return \Recranet\OTA\Type\DateTimeSpanType[]
     */
    public function getClosedSeasons()
    {
        return $this->closedSeasons;
    }

    /**
     * Sets a new closedSeasons
     *
     * A collection of date and time periods when the hotel facility is closed.
     *
     * @param \Recranet\OTA\Type\DateTimeSpanType[] $closedSeasons
     * @return self
     */
    public function setClosedSeasons(array $closedSeasons = null)
    {
        $this->closedSeasons = $closedSeasons;
        return $this;
    }

    /**
     * Adds as blackoutDate
     *
     * Identifies any Blackout Dates which are periods during which the hotel cannot guarantee rates and rooms availability due to peak occupancy.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelInfoType\BlackoutDatesAType\BlackoutDateAType $blackoutDate
     */
    public function addToBlackoutDates(\Recranet\OTA\Type\HotelInfoType\BlackoutDatesAType\BlackoutDateAType $blackoutDate)
    {
        $this->blackoutDates[] = $blackoutDate;
        return $this;
    }

    /**
     * isset blackoutDates
     *
     * Identifies any Blackout Dates which are periods during which the hotel cannot guarantee rates and rooms availability due to peak occupancy.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBlackoutDates($index)
    {
        return isset($this->blackoutDates[$index]);
    }

    /**
     * unset blackoutDates
     *
     * Identifies any Blackout Dates which are periods during which the hotel cannot guarantee rates and rooms availability due to peak occupancy.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBlackoutDates($index)
    {
        unset($this->blackoutDates[$index]);
    }

    /**
     * Gets as blackoutDates
     *
     * Identifies any Blackout Dates which are periods during which the hotel cannot guarantee rates and rooms availability due to peak occupancy.
     *
     * @return \Recranet\OTA\Type\HotelInfoType\BlackoutDatesAType\BlackoutDateAType[]
     */
    public function getBlackoutDates()
    {
        return $this->blackoutDates;
    }

    /**
     * Sets a new blackoutDates
     *
     * Identifies any Blackout Dates which are periods during which the hotel cannot guarantee rates and rooms availability due to peak occupancy.
     *
     * @param \Recranet\OTA\Type\HotelInfoType\BlackoutDatesAType\BlackoutDateAType[] $blackoutDates
     * @return self
     */
    public function setBlackoutDates(array $blackoutDates = null)
    {
        $this->blackoutDates = $blackoutDates;
        return $this;
    }

    /**
     * Adds as relativePosition
     *
     * Collection of directions to/from one or more locations.
     *
     * @return self
     * @param \Recranet\OTA\Type\RelativePositionType $relativePosition
     */
    public function addToRelativePositions(\Recranet\OTA\Type\RelativePositionType $relativePosition)
    {
        $this->relativePositions[] = $relativePosition;
        return $this;
    }

    /**
     * isset relativePositions
     *
     * Collection of directions to/from one or more locations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelativePositions($index)
    {
        return isset($this->relativePositions[$index]);
    }

    /**
     * unset relativePositions
     *
     * Collection of directions to/from one or more locations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelativePositions($index)
    {
        unset($this->relativePositions[$index]);
    }

    /**
     * Gets as relativePositions
     *
     * Collection of directions to/from one or more locations.
     *
     * @return \Recranet\OTA\Type\RelativePositionType[]
     */
    public function getRelativePositions()
    {
        return $this->relativePositions;
    }

    /**
     * Sets a new relativePositions
     *
     * Collection of directions to/from one or more locations.
     *
     * @param \Recranet\OTA\Type\RelativePositionType[] $relativePositions
     * @return self
     */
    public function setRelativePositions(array $relativePositions = null)
    {
        $this->relativePositions = $relativePositions;
        return $this;
    }

    /**
     * Gets as categoryCodes
     *
     * Collection of descriptive details about a hotel.
     *
     * @return \Recranet\OTA\Type\CategoryCodesType
     */
    public function getCategoryCodes()
    {
        return $this->categoryCodes;
    }

    /**
     * Sets a new categoryCodes
     *
     * Collection of descriptive details about a hotel.
     *
     * @param \Recranet\OTA\Type\CategoryCodesType $categoryCodes
     * @return self
     */
    public function setCategoryCodes(?\Recranet\OTA\Type\CategoryCodesType $categoryCodes = null)
    {
        $this->categoryCodes = $categoryCodes;
        return $this;
    }

    /**
     * Gets as descriptions
     *
     * Collection of hotel and/or renovation information.
     *
     * @return \Recranet\OTA\Type\HotelInfoType\DescriptionsAType
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Sets a new descriptions
     *
     * Collection of hotel and/or renovation information.
     *
     * @param \Recranet\OTA\Type\HotelInfoType\DescriptionsAType $descriptions
     * @return self
     */
    public function setDescriptions(?\Recranet\OTA\Type\HotelInfoType\DescriptionsAType $descriptions = null)
    {
        $this->descriptions = $descriptions;
        return $this;
    }

    /**
     * Adds as hotelInfoCode
     *
     * A collection of hotel codes and descriptions.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelInfoType\HotelInfoCodesAType\HotelInfoCodeAType $hotelInfoCode
     */
    public function addToHotelInfoCodes(\Recranet\OTA\Type\HotelInfoType\HotelInfoCodesAType\HotelInfoCodeAType $hotelInfoCode)
    {
        $this->hotelInfoCodes[] = $hotelInfoCode;
        return $this;
    }

    /**
     * isset hotelInfoCodes
     *
     * A collection of hotel codes and descriptions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelInfoCodes($index)
    {
        return isset($this->hotelInfoCodes[$index]);
    }

    /**
     * unset hotelInfoCodes
     *
     * A collection of hotel codes and descriptions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelInfoCodes($index)
    {
        unset($this->hotelInfoCodes[$index]);
    }

    /**
     * Gets as hotelInfoCodes
     *
     * A collection of hotel codes and descriptions.
     *
     * @return \Recranet\OTA\Type\HotelInfoType\HotelInfoCodesAType\HotelInfoCodeAType[]
     */
    public function getHotelInfoCodes()
    {
        return $this->hotelInfoCodes;
    }

    /**
     * Sets a new hotelInfoCodes
     *
     * A collection of hotel codes and descriptions.
     *
     * @param \Recranet\OTA\Type\HotelInfoType\HotelInfoCodesAType\HotelInfoCodeAType[] $hotelInfoCodes
     * @return self
     */
    public function setHotelInfoCodes(array $hotelInfoCodes = null)
    {
        $this->hotelInfoCodes = $hotelInfoCodes;
        return $this;
    }

    /**
     * Gets as position
     *
     * Describes the geocoded location of the hotel.
     *
     * @return \Recranet\OTA\Type\HotelInfoType\PositionAType
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * Describes the geocoded location of the hotel.
     *
     * @param \Recranet\OTA\Type\HotelInfoType\PositionAType $position
     * @return self
     */
    public function setPosition(?\Recranet\OTA\Type\HotelInfoType\PositionAType $position = null)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Adds as service
     *
     * Collection of hotel services and/or amenities available to the guest.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelInfoType\ServicesAType\ServiceAType $service
     */
    public function addToServices(\Recranet\OTA\Type\HotelInfoType\ServicesAType\ServiceAType $service)
    {
        $this->services[] = $service;
        return $this;
    }

    /**
     * isset services
     *
     * Collection of hotel services and/or amenities available to the guest.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServices($index)
    {
        return isset($this->services[$index]);
    }

    /**
     * unset services
     *
     * Collection of hotel services and/or amenities available to the guest.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServices($index)
    {
        unset($this->services[$index]);
    }

    /**
     * Gets as services
     *
     * Collection of hotel services and/or amenities available to the guest.
     *
     * @return \Recranet\OTA\Type\HotelInfoType\ServicesAType\ServiceAType[]
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Sets a new services
     *
     * Collection of hotel services and/or amenities available to the guest.
     *
     * @param \Recranet\OTA\Type\HotelInfoType\ServicesAType\ServiceAType[] $services
     * @return self
     */
    public function setServices(array $services = null)
    {
        $this->services = $services;
        return $this;
    }

    /**
     * Adds as weatherInfo
     *
     * Collection of WeatherInfo elements. This may be used to provide information for multiple time periods.
     *
     * @return self
     * @param \Recranet\OTA\Type\WeatherInfoType $weatherInfo
     */
    public function addToWeatherInfos(\Recranet\OTA\Type\WeatherInfoType $weatherInfo)
    {
        $this->weatherInfos[] = $weatherInfo;
        return $this;
    }

    /**
     * isset weatherInfos
     *
     * Collection of WeatherInfo elements. This may be used to provide information for multiple time periods.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWeatherInfos($index)
    {
        return isset($this->weatherInfos[$index]);
    }

    /**
     * unset weatherInfos
     *
     * Collection of WeatherInfo elements. This may be used to provide information for multiple time periods.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWeatherInfos($index)
    {
        unset($this->weatherInfos[$index]);
    }

    /**
     * Gets as weatherInfos
     *
     * Collection of WeatherInfo elements. This may be used to provide information for multiple time periods.
     *
     * @return \Recranet\OTA\Type\WeatherInfoType[]
     */
    public function getWeatherInfos()
    {
        return $this->weatherInfos;
    }

    /**
     * Sets a new weatherInfos
     *
     * Collection of WeatherInfo elements. This may be used to provide information for multiple time periods.
     *
     * @param \Recranet\OTA\Type\WeatherInfoType[] $weatherInfos
     * @return self
     */
    public function setWeatherInfos(array $weatherInfos = null)
    {
        $this->weatherInfos = $weatherInfos;
        return $this;
    }

    /**
     * Adds as ownershipManagementInfo
     *
     * Collection of OwnershipManagementInfo.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelInfoType\OwnershipManagementInfosAType\OwnershipManagementInfoAType $ownershipManagementInfo
     */
    public function addToOwnershipManagementInfos(\Recranet\OTA\Type\HotelInfoType\OwnershipManagementInfosAType\OwnershipManagementInfoAType $ownershipManagementInfo)
    {
        $this->ownershipManagementInfos[] = $ownershipManagementInfo;
        return $this;
    }

    /**
     * isset ownershipManagementInfos
     *
     * Collection of OwnershipManagementInfo.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOwnershipManagementInfos($index)
    {
        return isset($this->ownershipManagementInfos[$index]);
    }

    /**
     * unset ownershipManagementInfos
     *
     * Collection of OwnershipManagementInfo.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOwnershipManagementInfos($index)
    {
        unset($this->ownershipManagementInfos[$index]);
    }

    /**
     * Gets as ownershipManagementInfos
     *
     * Collection of OwnershipManagementInfo.
     *
     * @return \Recranet\OTA\Type\HotelInfoType\OwnershipManagementInfosAType\OwnershipManagementInfoAType[]
     */
    public function getOwnershipManagementInfos()
    {
        return $this->ownershipManagementInfos;
    }

    /**
     * Sets a new ownershipManagementInfos
     *
     * Collection of OwnershipManagementInfo.
     *
     * @param \Recranet\OTA\Type\HotelInfoType\OwnershipManagementInfosAType\OwnershipManagementInfoAType[] $ownershipManagementInfos
     * @return self
     */
    public function setOwnershipManagementInfos(array $ownershipManagementInfos = null)
    {
        $this->ownershipManagementInfos = $ownershipManagementInfos;
        return $this;
    }

    /**
     * Adds as language
     *
     * Collection of language details pertaining to the hotel.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelInfoType\LanguagesAType\LanguageAType $language
     */
    public function addToLanguages(\Recranet\OTA\Type\HotelInfoType\LanguagesAType\LanguageAType $language)
    {
        $this->languages[] = $language;
        return $this;
    }

    /**
     * isset languages
     *
     * Collection of language details pertaining to the hotel.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguages($index)
    {
        return isset($this->languages[$index]);
    }

    /**
     * unset languages
     *
     * Collection of language details pertaining to the hotel.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguages($index)
    {
        unset($this->languages[$index]);
    }

    /**
     * Gets as languages
     *
     * Collection of language details pertaining to the hotel.
     *
     * @return \Recranet\OTA\Type\HotelInfoType\LanguagesAType\LanguageAType[]
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Sets a new languages
     *
     * Collection of language details pertaining to the hotel.
     *
     * @param \Recranet\OTA\Type\HotelInfoType\LanguagesAType\LanguageAType[] $languages
     * @return self
     */
    public function setLanguages(array $languages = null)
    {
        $this->languages = $languages;
        return $this;
    }
}

