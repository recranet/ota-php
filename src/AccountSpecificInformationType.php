<?php

namespace Recranet\OTA;

/**
 * Class representing AccountSpecificInformationType
 *
 * This describes data that is specific to a single account.
 * XSD Type: AccountSpecificInformationType
 */
class AccountSpecificInformationType
{
    /**
     * This indicates the information contained in this message is correct and binding.
     *
     * @var bool $contractAgreementIndicator
     */
    private $contractAgreementIndicator = null;

    /**
     * It describes specific criteria upon which the client rate is based.
     *
     * @var \Recranet\OTA\AccountSpecificInformationType\AccountSpecificRateInfoAType $accountSpecificRateInfo
     */
    private $accountSpecificRateInfo = null;

    /**
     * A Collection of room types.
     *
     * @var \Recranet\OTA\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType[] $roomTypes
     */
    private $roomTypes = null;

    /**
     * A collection of blackout dates.
     *
     * @var \Recranet\OTA\DateTimeSpanType[] $blackoutDates
     */
    private $blackoutDates = null;

    /**
     * Defines the contacts related to the RFP.
     *
     * @var \Recranet\OTA\ContactInfoRootType[] $contactInfos
     */
    private $contactInfos = null;

    /**
     * Collection of supplemental information.
     *
     * @var \Recranet\OTA\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as contractAgreementIndicator
     *
     * This indicates the information contained in this message is correct and binding.
     *
     * @return bool
     */
    public function getContractAgreementIndicator()
    {
        return $this->contractAgreementIndicator;
    }

    /**
     * Sets a new contractAgreementIndicator
     *
     * This indicates the information contained in this message is correct and binding.
     *
     * @param bool $contractAgreementIndicator
     * @return self
     */
    public function setContractAgreementIndicator($contractAgreementIndicator)
    {
        $this->contractAgreementIndicator = $contractAgreementIndicator;
        return $this;
    }

    /**
     * Gets as accountSpecificRateInfo
     *
     * It describes specific criteria upon which the client rate is based.
     *
     * @return \Recranet\OTA\AccountSpecificInformationType\AccountSpecificRateInfoAType
     */
    public function getAccountSpecificRateInfo()
    {
        return $this->accountSpecificRateInfo;
    }

    /**
     * Sets a new accountSpecificRateInfo
     *
     * It describes specific criteria upon which the client rate is based.
     *
     * @param \Recranet\OTA\AccountSpecificInformationType\AccountSpecificRateInfoAType $accountSpecificRateInfo
     * @return self
     */
    public function setAccountSpecificRateInfo(?\Recranet\OTA\AccountSpecificInformationType\AccountSpecificRateInfoAType $accountSpecificRateInfo = null)
    {
        $this->accountSpecificRateInfo = $accountSpecificRateInfo;
        return $this;
    }

    /**
     * Adds as roomType
     *
     * A Collection of room types.
     *
     * @return self
     * @param \Recranet\OTA\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType $roomType
     */
    public function addToRoomTypes(\Recranet\OTA\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType $roomType)
    {
        $this->roomTypes[] = $roomType;
        return $this;
    }

    /**
     * isset roomTypes
     *
     * A Collection of room types.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomTypes($index)
    {
        return isset($this->roomTypes[$index]);
    }

    /**
     * unset roomTypes
     *
     * A Collection of room types.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomTypes($index)
    {
        unset($this->roomTypes[$index]);
    }

    /**
     * Gets as roomTypes
     *
     * A Collection of room types.
     *
     * @return \Recranet\OTA\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType[]
     */
    public function getRoomTypes()
    {
        return $this->roomTypes;
    }

    /**
     * Sets a new roomTypes
     *
     * A Collection of room types.
     *
     * @param \Recranet\OTA\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType[] $roomTypes
     * @return self
     */
    public function setRoomTypes(array $roomTypes = null)
    {
        $this->roomTypes = $roomTypes;
        return $this;
    }

    /**
     * Adds as blackoutDate
     *
     * A collection of blackout dates.
     *
     * @return self
     * @param \Recranet\OTA\DateTimeSpanType $blackoutDate
     */
    public function addToBlackoutDates(\Recranet\OTA\DateTimeSpanType $blackoutDate)
    {
        $this->blackoutDates[] = $blackoutDate;
        return $this;
    }

    /**
     * isset blackoutDates
     *
     * A collection of blackout dates.
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
     * A collection of blackout dates.
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
     * A collection of blackout dates.
     *
     * @return \Recranet\OTA\DateTimeSpanType[]
     */
    public function getBlackoutDates()
    {
        return $this->blackoutDates;
    }

    /**
     * Sets a new blackoutDates
     *
     * A collection of blackout dates.
     *
     * @param \Recranet\OTA\DateTimeSpanType[] $blackoutDates
     * @return self
     */
    public function setBlackoutDates(array $blackoutDates = null)
    {
        $this->blackoutDates = $blackoutDates;
        return $this;
    }

    /**
     * Adds as contactInfo
     *
     * Defines the contacts related to the RFP.
     *
     * @return self
     * @param \Recranet\OTA\ContactInfoRootType $contactInfo
     */
    public function addToContactInfos(\Recranet\OTA\ContactInfoRootType $contactInfo)
    {
        $this->contactInfos[] = $contactInfo;
        return $this;
    }

    /**
     * isset contactInfos
     *
     * Defines the contacts related to the RFP.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContactInfos($index)
    {
        return isset($this->contactInfos[$index]);
    }

    /**
     * unset contactInfos
     *
     * Defines the contacts related to the RFP.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContactInfos($index)
    {
        unset($this->contactInfos[$index]);
    }

    /**
     * Gets as contactInfos
     *
     * Defines the contacts related to the RFP.
     *
     * @return \Recranet\OTA\ContactInfoRootType[]
     */
    public function getContactInfos()
    {
        return $this->contactInfos;
    }

    /**
     * Sets a new contactInfos
     *
     * Defines the contacts related to the RFP.
     *
     * @param \Recranet\OTA\ContactInfoRootType[] $contactInfos
     * @return self
     */
    public function setContactInfos(array $contactInfos = null)
    {
        $this->contactInfos = $contactInfos;
        return $this;
    }

    /**
     * Adds as comment
     *
     * Collection of supplemental information.
     *
     * @return self
     * @param \Recranet\OTA\ParagraphType $comment
     */
    public function addToComments(\Recranet\OTA\ParagraphType $comment)
    {
        $this->comments[] = $comment;
        return $this;
    }

    /**
     * isset comments
     *
     * Collection of supplemental information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * Collection of supplemental information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * Collection of supplemental information.
     *
     * @return \Recranet\OTA\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * Collection of supplemental information.
     *
     * @param \Recranet\OTA\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments = null)
    {
        $this->comments = $comments;
        return $this;
    }
}

