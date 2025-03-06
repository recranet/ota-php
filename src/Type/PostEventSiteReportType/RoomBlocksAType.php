<?php

namespace Recranet\OTA\Type\PostEventSiteReportType;

/**
 * Class representing RoomBlocksAType
 */
class RoomBlocksAType
{
    /**
     * The total number of room blocks for this event at this property (i.e., sub blocks plus primary room block).
     *
     * @var int $totalBlockQuantity
     */
    private $totalBlockQuantity = null;

    /**
     * Information pertaining to a room block for this event.
     *
     * @var \Recranet\OTA\Type\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType[] $roomBlock
     */
    private $roomBlock = [
        
    ];

    /**
     * A collection of comments pertaining to the stay.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as totalBlockQuantity
     *
     * The total number of room blocks for this event at this property (i.e., sub blocks plus primary room block).
     *
     * @return int
     */
    public function getTotalBlockQuantity()
    {
        return $this->totalBlockQuantity;
    }

    /**
     * Sets a new totalBlockQuantity
     *
     * The total number of room blocks for this event at this property (i.e., sub blocks plus primary room block).
     *
     * @param int $totalBlockQuantity
     * @return self
     */
    public function setTotalBlockQuantity($totalBlockQuantity)
    {
        $this->totalBlockQuantity = $totalBlockQuantity;
        return $this;
    }

    /**
     * Adds as roomBlock
     *
     * Information pertaining to a room block for this event.
     *
     * @return self
     * @param \Recranet\OTA\Type\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType $roomBlock
     */
    public function addToRoomBlock(\Recranet\OTA\Type\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType $roomBlock)
    {
        $this->roomBlock[] = $roomBlock;
        return $this;
    }

    /**
     * isset roomBlock
     *
     * Information pertaining to a room block for this event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomBlock($index)
    {
        return isset($this->roomBlock[$index]);
    }

    /**
     * unset roomBlock
     *
     * Information pertaining to a room block for this event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomBlock($index)
    {
        unset($this->roomBlock[$index]);
    }

    /**
     * Gets as roomBlock
     *
     * Information pertaining to a room block for this event.
     *
     * @return \Recranet\OTA\Type\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType[]
     */
    public function getRoomBlock()
    {
        return $this->roomBlock;
    }

    /**
     * Sets a new roomBlock
     *
     * Information pertaining to a room block for this event.
     *
     * @param \Recranet\OTA\Type\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType[] $roomBlock
     * @return self
     */
    public function setRoomBlock(array $roomBlock)
    {
        $this->roomBlock = $roomBlock;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments pertaining to the stay.
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
     * A collection of comments pertaining to the stay.
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
     * A collection of comments pertaining to the stay.
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
     * A collection of comments pertaining to the stay.
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
     * A collection of comments pertaining to the stay.
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

