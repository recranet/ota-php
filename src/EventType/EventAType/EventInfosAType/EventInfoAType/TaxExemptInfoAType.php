<?php

namespace Recranet\OTA\EventType\EventAType\EventInfosAType\EventInfoAType;

/**
 * Class representing TaxExemptInfoAType
 */
class TaxExemptInfoAType
{
    /**
     * When true, indicates the exhibiting company is tax exempt.
     *
     * @var bool $taxExemptIndicator
     */
    private $taxExemptIndicator = null;

    /**
     * Exhibiting company's tax exempt identifier.
     *
     * @var string $taxExemptID
     */
    private $taxExemptID = null;

    /**
     * Used to indicate whether the exhibiting company's tax ID number is state or federal issued.
     *
     * @var string $taxExemptType
     */
    private $taxExemptType = null;

    /**
     * A collection of comments pertaining to the tax exemption information.
     *
     * @var \Recranet\OTA\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as taxExemptIndicator
     *
     * When true, indicates the exhibiting company is tax exempt.
     *
     * @return bool
     */
    public function getTaxExemptIndicator()
    {
        return $this->taxExemptIndicator;
    }

    /**
     * Sets a new taxExemptIndicator
     *
     * When true, indicates the exhibiting company is tax exempt.
     *
     * @param bool $taxExemptIndicator
     * @return self
     */
    public function setTaxExemptIndicator($taxExemptIndicator)
    {
        $this->taxExemptIndicator = $taxExemptIndicator;
        return $this;
    }

    /**
     * Gets as taxExemptID
     *
     * Exhibiting company's tax exempt identifier.
     *
     * @return string
     */
    public function getTaxExemptID()
    {
        return $this->taxExemptID;
    }

    /**
     * Sets a new taxExemptID
     *
     * Exhibiting company's tax exempt identifier.
     *
     * @param string $taxExemptID
     * @return self
     */
    public function setTaxExemptID($taxExemptID)
    {
        $this->taxExemptID = $taxExemptID;
        return $this;
    }

    /**
     * Gets as taxExemptType
     *
     * Used to indicate whether the exhibiting company's tax ID number is state or federal issued.
     *
     * @return string
     */
    public function getTaxExemptType()
    {
        return $this->taxExemptType;
    }

    /**
     * Sets a new taxExemptType
     *
     * Used to indicate whether the exhibiting company's tax ID number is state or federal issued.
     *
     * @param string $taxExemptType
     * @return self
     */
    public function setTaxExemptType($taxExemptType)
    {
        $this->taxExemptType = $taxExemptType;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments pertaining to the tax exemption information.
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
     * A collection of comments pertaining to the tax exemption information.
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
     * A collection of comments pertaining to the tax exemption information.
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
     * A collection of comments pertaining to the tax exemption information.
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
     * A collection of comments pertaining to the tax exemption information.
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

