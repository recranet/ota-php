<?php

namespace Recranet\OTA\Type;

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
     * @var \Recranet\OTA\Type\AccountSpecificInformationType\AccountSpecificRateInfoAType $accountSpecificRateInfo
     */
    private $accountSpecificRateInfo = null;

    /**
     * A Collection of room types.
     *
     * @var \Recranet\OTA\Type\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType[] $roomTypes
     */
    private $roomTypes = null;

    /**
     * A collection of blackout dates.
     *
     * @var \Recranet\OTA\Type\DateTimeSpanType[] $blackoutDates
     */
    private $blackoutDates = null;

    /**
     * Defines the contacts related to the RFP.
     *
     * @var \Recranet\OTA\Type\ContactInfoRootType[] $contactInfos
     */
    private $contactInfos = null;

    /**
     * Collection of supplemental information.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $comments
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
     * @return \Recranet\OTA\Type\AccountSpecificInformationType\AccountSpecificRateInfoAType
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
     * @param \Recranet\OTA\Type\AccountSpecificInformationType\AccountSpecificRateInfoAType $accountSpecificRateInfo
     * @return self
     */
    public function setAccountSpecificRateInfo(?\Recranet\OTA\Type\AccountSpecificInformationType\AccountSpecificRateInfoAType $accountSpecificRateInfo = null)
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
     * @param \Recranet\OTA\Type\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType $roomType
     */
    public function addToRoomTypes(\Recranet\OTA\Type\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType $roomType)
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
     * @return \Recranet\OTA\Type\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType[]
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
     * @param \Recranet\OTA\Type\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType[] $roomTypes
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
     * @param \Recranet\OTA\Type\DateTimeSpanType $blackoutDate
     */
    public function addToBlackoutDates(\Recranet\OTA\Type\DateTimeSpanType $blackoutDate)
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
     * @return \Recranet\OTA\Type\DateTimeSpanType[]
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
     * @param \Recranet\OTA\Type\DateTimeSpanType[] $blackoutDates
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
     * @param \Recranet\OTA\Type\ContactInfoRootType $contactInfo
     */
    public function addToContactInfos(\Recranet\OTA\Type\ContactInfoRootType $contactInfo)
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
     * @return \Recranet\OTA\Type\ContactInfoRootType[]
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
     * @param \Recranet\OTA\Type\ContactInfoRootType[] $contactInfos
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
     * @param \Recranet\OTA\Type\ParagraphType $comment
     */
    public function addToComments(\Recranet\OTA\Type\ParagraphType $comment)
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
     * @return \Recranet\OTA\Type\ParagraphType[]
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
     * @param \Recranet\OTA\Type\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments = null)
    {
        $this->comments = $comments;
        return $this;
    }
}

