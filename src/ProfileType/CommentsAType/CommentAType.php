<?php

namespace Recranet\OTA\ProfileType\CommentsAType;

use Recranet\OTA\ParagraphType;

/**
 * Class representing CommentAType
 */
class CommentAType extends ParagraphType
{
    /**
     * Unique identifier for the system which created the comment.
     *
     * @var string $commentOriginatorCode
     */
    private $commentOriginatorCode = null;

    /**
     * When true, the comment may be shown to the consumer. When false, the comment may not be shown to the consumer.
     *
     * @var bool $guestViewable
     */
    private $guestViewable = null;

    /**
     * An industry segment (e.g., Air, Hotel, Car) to which the comment refers.
     *
     * @var string $category
     */
    private $category = null;

    /**
     * Reference to an airline in AirlinePrefType/VendorPref.
     *
     * @var string $airlineVendorPrefRPH
     */
    private $airlineVendorPrefRPH = null;

    /**
     * Indicates under what conditions this element will be transfered to the booking.
     *
     * @var string $transferAction
     */
    private $transferAction = null;

    /**
     * Indicates at which date an action described in the comment must be taken.
     *
     * @var \DateTime $actionDate
     */
    private $actionDate = null;

    /**
     * Specifies those authorized to view a comment.
     *
     * @var \Recranet\OTA\ProfileType\CommentsAType\CommentAType\AuthorizedViewerAType[] $authorizedViewer
     */
    private $authorizedViewer = [
        
    ];

    /**
     * Gets as commentOriginatorCode
     *
     * Unique identifier for the system which created the comment.
     *
     * @return string
     */
    public function getCommentOriginatorCode()
    {
        return $this->commentOriginatorCode;
    }

    /**
     * Sets a new commentOriginatorCode
     *
     * Unique identifier for the system which created the comment.
     *
     * @param string $commentOriginatorCode
     * @return self
     */
    public function setCommentOriginatorCode($commentOriginatorCode)
    {
        $this->commentOriginatorCode = $commentOriginatorCode;
        return $this;
    }

    /**
     * Gets as guestViewable
     *
     * When true, the comment may be shown to the consumer. When false, the comment may not be shown to the consumer.
     *
     * @return bool
     */
    public function getGuestViewable()
    {
        return $this->guestViewable;
    }

    /**
     * Sets a new guestViewable
     *
     * When true, the comment may be shown to the consumer. When false, the comment may not be shown to the consumer.
     *
     * @param bool $guestViewable
     * @return self
     */
    public function setGuestViewable($guestViewable)
    {
        $this->guestViewable = $guestViewable;
        return $this;
    }

    /**
     * Gets as category
     *
     * An industry segment (e.g., Air, Hotel, Car) to which the comment refers.
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * An industry segment (e.g., Air, Hotel, Car) to which the comment refers.
     *
     * @param string $category
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as airlineVendorPrefRPH
     *
     * Reference to an airline in AirlinePrefType/VendorPref.
     *
     * @return string
     */
    public function getAirlineVendorPrefRPH()
    {
        return $this->airlineVendorPrefRPH;
    }

    /**
     * Sets a new airlineVendorPrefRPH
     *
     * Reference to an airline in AirlinePrefType/VendorPref.
     *
     * @param string $airlineVendorPrefRPH
     * @return self
     */
    public function setAirlineVendorPrefRPH($airlineVendorPrefRPH)
    {
        $this->airlineVendorPrefRPH = $airlineVendorPrefRPH;
        return $this;
    }

    /**
     * Gets as transferAction
     *
     * Indicates under what conditions this element will be transfered to the booking.
     *
     * @return string
     */
    public function getTransferAction()
    {
        return $this->transferAction;
    }

    /**
     * Sets a new transferAction
     *
     * Indicates under what conditions this element will be transfered to the booking.
     *
     * @param string $transferAction
     * @return self
     */
    public function setTransferAction($transferAction)
    {
        $this->transferAction = $transferAction;
        return $this;
    }

    /**
     * Gets as actionDate
     *
     * Indicates at which date an action described in the comment must be taken.
     *
     * @return \DateTime
     */
    public function getActionDate()
    {
        return $this->actionDate;
    }

    /**
     * Sets a new actionDate
     *
     * Indicates at which date an action described in the comment must be taken.
     *
     * @param \DateTime $actionDate
     * @return self
     */
    public function setActionDate(\DateTime $actionDate)
    {
        $this->actionDate = $actionDate;
        return $this;
    }

    /**
     * Adds as authorizedViewer
     *
     * Specifies those authorized to view a comment.
     *
     * @return self
     * @param \Recranet\OTA\ProfileType\CommentsAType\CommentAType\AuthorizedViewerAType $authorizedViewer
     */
    public function addToAuthorizedViewer(\Recranet\OTA\ProfileType\CommentsAType\CommentAType\AuthorizedViewerAType $authorizedViewer)
    {
        $this->authorizedViewer[] = $authorizedViewer;
        return $this;
    }

    /**
     * isset authorizedViewer
     *
     * Specifies those authorized to view a comment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAuthorizedViewer($index)
    {
        return isset($this->authorizedViewer[$index]);
    }

    /**
     * unset authorizedViewer
     *
     * Specifies those authorized to view a comment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAuthorizedViewer($index)
    {
        unset($this->authorizedViewer[$index]);
    }

    /**
     * Gets as authorizedViewer
     *
     * Specifies those authorized to view a comment.
     *
     * @return \Recranet\OTA\ProfileType\CommentsAType\CommentAType\AuthorizedViewerAType[]
     */
    public function getAuthorizedViewer()
    {
        return $this->authorizedViewer;
    }

    /**
     * Sets a new authorizedViewer
     *
     * Specifies those authorized to view a comment.
     *
     * @param \Recranet\OTA\ProfileType\CommentsAType\CommentAType\AuthorizedViewerAType[] $authorizedViewer
     * @return self
     */
    public function setAuthorizedViewer(array $authorizedViewer = null)
    {
        $this->authorizedViewer = $authorizedViewer;
        return $this;
    }
}

