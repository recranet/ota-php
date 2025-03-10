<?php

namespace Recranet\OTA\Type\OTAHotelInvBlockNotifRQ\OTAHotelInvBlockNotifRQAType;

/**
 * Class representing InvBlocksAType
 */
class InvBlocksAType
{
    /**
     * Provides information as to whether the rooms are available for booking.
     *
     * @var string $bookingStatus
     */
    private $bookingStatus = null;

    /**
     * Describes the type of inventory the block is being created for. Refer to OpenTravel Code List Inventory Block Type (IBT).
     *
     * @var string $invBlockTypeCode
     */
    private $invBlockTypeCode = null;

    /**
     * This is the group id typically used to make a booking in a central reservation system.
     *
     * @var string $invBlockCode
     */
    private $invBlockCode = null;

    /**
     * This code identifies the inventory group that contains multiple blocks. This allows for nested blocks.
     *
     * @var string $invBlockGroupingCode
     */
    private $invBlockGroupingCode = null;

    /**
     * This is the short name of the Inventory Block.
     *
     * @var string $invBlockName
     */
    private $invBlockName = null;

    /**
     * This is the full name of the Inventory Block.
     *
     * @var string $invBlockLongName
     */
    private $invBlockLongName = null;

    /**
     * This defines the status of the block. Refer to OpenTravel Code List Inventory Block Status (IBS).
     *
     * @var string $invBlockStatusCode
     */
    private $invBlockStatusCode = null;

    /**
     * This is used as a cross reference to the property management system (e.g. PMS Group Master Number).
     *
     * @var string $pMSInvBlockID
     */
    private $pMSInvBlockID = null;

    /**
     * This is the identifier (i.e. opportunity) that refers back to the same block in the requesting system (e.g. a sales system or a wholesaler).
     *
     * @var string $opportunityID
     */
    private $opportunityID = null;

    /**
     * This is used to identify the company or corporation associated with the inventory block, it is not a direct bill number.
     *
     * @var string $invBlockCompanyID
     */
    private $invBlockCompanyID = null;

    /**
     * This is who is allowed to book against the block. Refer to OpenTravel Code List Unique ID Type (UIT). If this attribute is not used, there are no restrictions to the booking access.
     *
     * @var string[] $restrictedBookingCodeList
     */
    private $restrictedBookingCodeList = null;

    /**
     * This is who is allowed to view the block. Refer to OpenTravel Code List Unique ID Type (UIT). If this attribute is not used, there are no restrictions to the viewing access.
     *
     * @var string[] $restrictedViewingCodeList
     */
    private $restrictedViewingCodeList = null;

    /**
     * Used to specify the action to be taken on the block (e.g., create, book, modify, cancel).
     *
     * @var string $transactionAction
     */
    private $transactionAction = null;

    /**
     * This provides the specific action to be taken on the block according to the TransactionAction attribute.
     *
     * @var string $transactionDetail
     */
    private $transactionDetail = null;

    /**
     * This identifies a specific quote for an inventory block.
     *
     * @var string $quoteID
     */
    private $quoteID = null;

    /**
     * This is used to identify the hotel to which the block(s) applies.
     *
     * @var \Recranet\OTA\Type\OTAHotelInvBlockNotifRQ\OTAHotelInvBlockNotifRQAType\InvBlocksAType\HotelRefAType $hotelRef
     */
    private $hotelRef = null;

    /**
     * This is used to indicate the date or date range applicable to all inventory blocks in this message.
     *
     * @var \Recranet\OTA\Type\OTAHotelInvBlockNotifRQ\OTAHotelInvBlockNotifRQAType\InvBlocksAType\InvBlockDatesAType $invBlockDates
     */
    private $invBlockDates = null;

    /**
     * This is for creating a single block at a single hotel.
     *
     * @var \Recranet\OTA\Type\OTAHotelInvBlockNotifRQ\OTAHotelInvBlockNotifRQAType\InvBlocksAType\InvBlockAType[] $invBlock
     */
    private $invBlock = [
        
    ];

    /**
     * A collection of contacts.
     *
     * @var \Recranet\OTA\Type\ContactPersonType[] $contacts
     */
    private $contacts = null;

    /**
     * Gets as bookingStatus
     *
     * Provides information as to whether the rooms are available for booking.
     *
     * @return string
     */
    public function getBookingStatus()
    {
        return $this->bookingStatus;
    }

    /**
     * Sets a new bookingStatus
     *
     * Provides information as to whether the rooms are available for booking.
     *
     * @param string $bookingStatus
     * @return self
     */
    public function setBookingStatus($bookingStatus)
    {
        $this->bookingStatus = $bookingStatus;
        return $this;
    }

    /**
     * Gets as invBlockTypeCode
     *
     * Describes the type of inventory the block is being created for. Refer to OpenTravel Code List Inventory Block Type (IBT).
     *
     * @return string
     */
    public function getInvBlockTypeCode()
    {
        return $this->invBlockTypeCode;
    }

    /**
     * Sets a new invBlockTypeCode
     *
     * Describes the type of inventory the block is being created for. Refer to OpenTravel Code List Inventory Block Type (IBT).
     *
     * @param string $invBlockTypeCode
     * @return self
     */
    public function setInvBlockTypeCode($invBlockTypeCode)
    {
        $this->invBlockTypeCode = $invBlockTypeCode;
        return $this;
    }

    /**
     * Gets as invBlockCode
     *
     * This is the group id typically used to make a booking in a central reservation system.
     *
     * @return string
     */
    public function getInvBlockCode()
    {
        return $this->invBlockCode;
    }

    /**
     * Sets a new invBlockCode
     *
     * This is the group id typically used to make a booking in a central reservation system.
     *
     * @param string $invBlockCode
     * @return self
     */
    public function setInvBlockCode($invBlockCode)
    {
        $this->invBlockCode = $invBlockCode;
        return $this;
    }

    /**
     * Gets as invBlockGroupingCode
     *
     * This code identifies the inventory group that contains multiple blocks. This allows for nested blocks.
     *
     * @return string
     */
    public function getInvBlockGroupingCode()
    {
        return $this->invBlockGroupingCode;
    }

    /**
     * Sets a new invBlockGroupingCode
     *
     * This code identifies the inventory group that contains multiple blocks. This allows for nested blocks.
     *
     * @param string $invBlockGroupingCode
     * @return self
     */
    public function setInvBlockGroupingCode($invBlockGroupingCode)
    {
        $this->invBlockGroupingCode = $invBlockGroupingCode;
        return $this;
    }

    /**
     * Gets as invBlockName
     *
     * This is the short name of the Inventory Block.
     *
     * @return string
     */
    public function getInvBlockName()
    {
        return $this->invBlockName;
    }

    /**
     * Sets a new invBlockName
     *
     * This is the short name of the Inventory Block.
     *
     * @param string $invBlockName
     * @return self
     */
    public function setInvBlockName($invBlockName)
    {
        $this->invBlockName = $invBlockName;
        return $this;
    }

    /**
     * Gets as invBlockLongName
     *
     * This is the full name of the Inventory Block.
     *
     * @return string
     */
    public function getInvBlockLongName()
    {
        return $this->invBlockLongName;
    }

    /**
     * Sets a new invBlockLongName
     *
     * This is the full name of the Inventory Block.
     *
     * @param string $invBlockLongName
     * @return self
     */
    public function setInvBlockLongName($invBlockLongName)
    {
        $this->invBlockLongName = $invBlockLongName;
        return $this;
    }

    /**
     * Gets as invBlockStatusCode
     *
     * This defines the status of the block. Refer to OpenTravel Code List Inventory Block Status (IBS).
     *
     * @return string
     */
    public function getInvBlockStatusCode()
    {
        return $this->invBlockStatusCode;
    }

    /**
     * Sets a new invBlockStatusCode
     *
     * This defines the status of the block. Refer to OpenTravel Code List Inventory Block Status (IBS).
     *
     * @param string $invBlockStatusCode
     * @return self
     */
    public function setInvBlockStatusCode($invBlockStatusCode)
    {
        $this->invBlockStatusCode = $invBlockStatusCode;
        return $this;
    }

    /**
     * Gets as pMSInvBlockID
     *
     * This is used as a cross reference to the property management system (e.g. PMS Group Master Number).
     *
     * @return string
     */
    public function getPMSInvBlockID()
    {
        return $this->pMSInvBlockID;
    }

    /**
     * Sets a new pMSInvBlockID
     *
     * This is used as a cross reference to the property management system (e.g. PMS Group Master Number).
     *
     * @param string $pMSInvBlockID
     * @return self
     */
    public function setPMSInvBlockID($pMSInvBlockID)
    {
        $this->pMSInvBlockID = $pMSInvBlockID;
        return $this;
    }

    /**
     * Gets as opportunityID
     *
     * This is the identifier (i.e. opportunity) that refers back to the same block in the requesting system (e.g. a sales system or a wholesaler).
     *
     * @return string
     */
    public function getOpportunityID()
    {
        return $this->opportunityID;
    }

    /**
     * Sets a new opportunityID
     *
     * This is the identifier (i.e. opportunity) that refers back to the same block in the requesting system (e.g. a sales system or a wholesaler).
     *
     * @param string $opportunityID
     * @return self
     */
    public function setOpportunityID($opportunityID)
    {
        $this->opportunityID = $opportunityID;
        return $this;
    }

    /**
     * Gets as invBlockCompanyID
     *
     * This is used to identify the company or corporation associated with the inventory block, it is not a direct bill number.
     *
     * @return string
     */
    public function getInvBlockCompanyID()
    {
        return $this->invBlockCompanyID;
    }

    /**
     * Sets a new invBlockCompanyID
     *
     * This is used to identify the company or corporation associated with the inventory block, it is not a direct bill number.
     *
     * @param string $invBlockCompanyID
     * @return self
     */
    public function setInvBlockCompanyID($invBlockCompanyID)
    {
        $this->invBlockCompanyID = $invBlockCompanyID;
        return $this;
    }

    /**
     * Adds as restrictedBookingCodeList
     *
     * This is who is allowed to book against the block. Refer to OpenTravel Code List Unique ID Type (UIT). If this attribute is not used, there are no restrictions to the booking access.
     *
     * @return self
     * @param string $restrictedBookingCodeList
     */
    public function addToRestrictedBookingCodeList($restrictedBookingCodeList)
    {
        $this->restrictedBookingCodeList[] = $restrictedBookingCodeList;
        return $this;
    }

    /**
     * isset restrictedBookingCodeList
     *
     * This is who is allowed to book against the block. Refer to OpenTravel Code List Unique ID Type (UIT). If this attribute is not used, there are no restrictions to the booking access.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRestrictedBookingCodeList($index)
    {
        return isset($this->restrictedBookingCodeList[$index]);
    }

    /**
     * unset restrictedBookingCodeList
     *
     * This is who is allowed to book against the block. Refer to OpenTravel Code List Unique ID Type (UIT). If this attribute is not used, there are no restrictions to the booking access.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRestrictedBookingCodeList($index)
    {
        unset($this->restrictedBookingCodeList[$index]);
    }

    /**
     * Gets as restrictedBookingCodeList
     *
     * This is who is allowed to book against the block. Refer to OpenTravel Code List Unique ID Type (UIT). If this attribute is not used, there are no restrictions to the booking access.
     *
     * @return string[]
     */
    public function getRestrictedBookingCodeList()
    {
        return $this->restrictedBookingCodeList;
    }

    /**
     * Sets a new restrictedBookingCodeList
     *
     * This is who is allowed to book against the block. Refer to OpenTravel Code List Unique ID Type (UIT). If this attribute is not used, there are no restrictions to the booking access.
     *
     * @param string $restrictedBookingCodeList
     * @return self
     */
    public function setRestrictedBookingCodeList(array $restrictedBookingCodeList)
    {
        $this->restrictedBookingCodeList = $restrictedBookingCodeList;
        return $this;
    }

    /**
     * Adds as restrictedViewingCodeList
     *
     * This is who is allowed to view the block. Refer to OpenTravel Code List Unique ID Type (UIT). If this attribute is not used, there are no restrictions to the viewing access.
     *
     * @return self
     * @param string $restrictedViewingCodeList
     */
    public function addToRestrictedViewingCodeList($restrictedViewingCodeList)
    {
        $this->restrictedViewingCodeList[] = $restrictedViewingCodeList;
        return $this;
    }

    /**
     * isset restrictedViewingCodeList
     *
     * This is who is allowed to view the block. Refer to OpenTravel Code List Unique ID Type (UIT). If this attribute is not used, there are no restrictions to the viewing access.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRestrictedViewingCodeList($index)
    {
        return isset($this->restrictedViewingCodeList[$index]);
    }

    /**
     * unset restrictedViewingCodeList
     *
     * This is who is allowed to view the block. Refer to OpenTravel Code List Unique ID Type (UIT). If this attribute is not used, there are no restrictions to the viewing access.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRestrictedViewingCodeList($index)
    {
        unset($this->restrictedViewingCodeList[$index]);
    }

    /**
     * Gets as restrictedViewingCodeList
     *
     * This is who is allowed to view the block. Refer to OpenTravel Code List Unique ID Type (UIT). If this attribute is not used, there are no restrictions to the viewing access.
     *
     * @return string[]
     */
    public function getRestrictedViewingCodeList()
    {
        return $this->restrictedViewingCodeList;
    }

    /**
     * Sets a new restrictedViewingCodeList
     *
     * This is who is allowed to view the block. Refer to OpenTravel Code List Unique ID Type (UIT). If this attribute is not used, there are no restrictions to the viewing access.
     *
     * @param string $restrictedViewingCodeList
     * @return self
     */
    public function setRestrictedViewingCodeList(array $restrictedViewingCodeList)
    {
        $this->restrictedViewingCodeList = $restrictedViewingCodeList;
        return $this;
    }

    /**
     * Gets as transactionAction
     *
     * Used to specify the action to be taken on the block (e.g., create, book, modify, cancel).
     *
     * @return string
     */
    public function getTransactionAction()
    {
        return $this->transactionAction;
    }

    /**
     * Sets a new transactionAction
     *
     * Used to specify the action to be taken on the block (e.g., create, book, modify, cancel).
     *
     * @param string $transactionAction
     * @return self
     */
    public function setTransactionAction($transactionAction)
    {
        $this->transactionAction = $transactionAction;
        return $this;
    }

    /**
     * Gets as transactionDetail
     *
     * This provides the specific action to be taken on the block according to the TransactionAction attribute.
     *
     * @return string
     */
    public function getTransactionDetail()
    {
        return $this->transactionDetail;
    }

    /**
     * Sets a new transactionDetail
     *
     * This provides the specific action to be taken on the block according to the TransactionAction attribute.
     *
     * @param string $transactionDetail
     * @return self
     */
    public function setTransactionDetail($transactionDetail)
    {
        $this->transactionDetail = $transactionDetail;
        return $this;
    }

    /**
     * Gets as quoteID
     *
     * This identifies a specific quote for an inventory block.
     *
     * @return string
     */
    public function getQuoteID()
    {
        return $this->quoteID;
    }

    /**
     * Sets a new quoteID
     *
     * This identifies a specific quote for an inventory block.
     *
     * @param string $quoteID
     * @return self
     */
    public function setQuoteID($quoteID)
    {
        $this->quoteID = $quoteID;
        return $this;
    }

    /**
     * Gets as hotelRef
     *
     * This is used to identify the hotel to which the block(s) applies.
     *
     * @return \Recranet\OTA\Type\OTAHotelInvBlockNotifRQ\OTAHotelInvBlockNotifRQAType\InvBlocksAType\HotelRefAType
     */
    public function getHotelRef()
    {
        return $this->hotelRef;
    }

    /**
     * Sets a new hotelRef
     *
     * This is used to identify the hotel to which the block(s) applies.
     *
     * @param \Recranet\OTA\Type\OTAHotelInvBlockNotifRQ\OTAHotelInvBlockNotifRQAType\InvBlocksAType\HotelRefAType $hotelRef
     * @return self
     */
    public function setHotelRef(?\Recranet\OTA\Type\OTAHotelInvBlockNotifRQ\OTAHotelInvBlockNotifRQAType\InvBlocksAType\HotelRefAType $hotelRef = null)
    {
        $this->hotelRef = $hotelRef;
        return $this;
    }

    /**
     * Gets as invBlockDates
     *
     * This is used to indicate the date or date range applicable to all inventory blocks in this message.
     *
     * @return \Recranet\OTA\Type\OTAHotelInvBlockNotifRQ\OTAHotelInvBlockNotifRQAType\InvBlocksAType\InvBlockDatesAType
     */
    public function getInvBlockDates()
    {
        return $this->invBlockDates;
    }

    /**
     * Sets a new invBlockDates
     *
     * This is used to indicate the date or date range applicable to all inventory blocks in this message.
     *
     * @param \Recranet\OTA\Type\OTAHotelInvBlockNotifRQ\OTAHotelInvBlockNotifRQAType\InvBlocksAType\InvBlockDatesAType $invBlockDates
     * @return self
     */
    public function setInvBlockDates(?\Recranet\OTA\Type\OTAHotelInvBlockNotifRQ\OTAHotelInvBlockNotifRQAType\InvBlocksAType\InvBlockDatesAType $invBlockDates = null)
    {
        $this->invBlockDates = $invBlockDates;
        return $this;
    }

    /**
     * Adds as invBlock
     *
     * This is for creating a single block at a single hotel.
     *
     * @return self
     * @param \Recranet\OTA\Type\OTAHotelInvBlockNotifRQ\OTAHotelInvBlockNotifRQAType\InvBlocksAType\InvBlockAType $invBlock
     */
    public function addToInvBlock(\Recranet\OTA\Type\OTAHotelInvBlockNotifRQ\OTAHotelInvBlockNotifRQAType\InvBlocksAType\InvBlockAType $invBlock)
    {
        $this->invBlock[] = $invBlock;
        return $this;
    }

    /**
     * isset invBlock
     *
     * This is for creating a single block at a single hotel.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvBlock($index)
    {
        return isset($this->invBlock[$index]);
    }

    /**
     * unset invBlock
     *
     * This is for creating a single block at a single hotel.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvBlock($index)
    {
        unset($this->invBlock[$index]);
    }

    /**
     * Gets as invBlock
     *
     * This is for creating a single block at a single hotel.
     *
     * @return \Recranet\OTA\Type\OTAHotelInvBlockNotifRQ\OTAHotelInvBlockNotifRQAType\InvBlocksAType\InvBlockAType[]
     */
    public function getInvBlock()
    {
        return $this->invBlock;
    }

    /**
     * Sets a new invBlock
     *
     * This is for creating a single block at a single hotel.
     *
     * @param \Recranet\OTA\Type\OTAHotelInvBlockNotifRQ\OTAHotelInvBlockNotifRQAType\InvBlocksAType\InvBlockAType[] $invBlock
     * @return self
     */
    public function setInvBlock(array $invBlock = null)
    {
        $this->invBlock = $invBlock;
        return $this;
    }

    /**
     * Adds as contact
     *
     * A collection of contacts.
     *
     * @return self
     * @param \Recranet\OTA\Type\ContactPersonType $contact
     */
    public function addToContacts(\Recranet\OTA\Type\ContactPersonType $contact)
    {
        $this->contacts[] = $contact;
        return $this;
    }

    /**
     * isset contacts
     *
     * A collection of contacts.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContacts($index)
    {
        return isset($this->contacts[$index]);
    }

    /**
     * unset contacts
     *
     * A collection of contacts.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContacts($index)
    {
        unset($this->contacts[$index]);
    }

    /**
     * Gets as contacts
     *
     * A collection of contacts.
     *
     * @return \Recranet\OTA\Type\ContactPersonType[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Sets a new contacts
     *
     * A collection of contacts.
     *
     * @param \Recranet\OTA\Type\ContactPersonType[] $contacts
     * @return self
     */
    public function setContacts(array $contacts = null)
    {
        $this->contacts = $contacts;
        return $this;
    }
}

