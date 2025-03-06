<?php

namespace Recranet\OTA\Type;

/**
 * Class representing CodeListSummaryExtensionType
 *
 * Simple Code List extension structure that supports OpenTravel open lists and third-party code lists.
 * XSD Type: CodeListSummaryExtension
 */
class CodeListSummaryExtensionType
{
    /**
     * Item removal indicator.
     * Example: false
     * Implementer: If true, this item is obsolete and should be removed from the receiving system.
     *
     * @var bool $removalInd
     */
    private $removalInd = null;

    /**
     * Code information language.
     * Example: en
     * Note: This is the language that the code information is specified in.
     * OpenTravel Best Practice for Language Designation: Unless otherwise noted, all language designations are two alpha characters and WILL follow ISO 639-1 prescribed format.
     * Reference: http://www.iso.org/iso/home.htm
     *
     * @var string $language
     */
    private $language = null;

    /**
     * Code value.
     * Example: MYB
     * Implementer: Place a code value in this attribute if you have selected the "Other_" value in the enumerated list. Note that this value should be known to your trading partners.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Code description.
     * Example: Party Supplies
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Code description detail.
     * Example: Mylar Baloons
     *
     * @var string $descriptionDetail
     */
    private $descriptionDetail = null;

    /**
     * Code authority or owner.
     * Example: OpenTravel
     * Implementer: This may be a source authority/ owner name, ID or code.
     *
     * @var string $sourceName
     */
    private $sourceName = null;

    /**
     * Code authority or owner URL.
     * Example: http://www.opentravel.org
     * Implementer: This is A URL to the code source authority/ owner.
     *
     * @var string $sourceURL
     */
    private $sourceURL = null;

    /**
     * Code resource ID.
     * Example: OTALIST
     *
     * @var string $resourceID
     */
    private $resourceID = null;

    /**
     * Code resource name.
     * Example: OpenTravel 2012A CodeList
     *
     * @var string $resourceName
     */
    private $resourceName = null;

    /**
     * Code resource URL.
     * Example: http://www.opentravel.org/somecodelist.html
     * Implementer: This is A URL to the code resource.
     *
     * @var string $resourceURL
     */
    private $resourceURL = null;

    /**
     * Code unique ID.
     * Example: MYB123
     * Implementer: This is used for a database or key ID for the code item (if it is different from the @CodeExtension) in relationship to the obsolete code indicator.
     *
     * @var string $uniqueID
     */
    private $uniqueID = null;

    /**
     * Gets as removalInd
     *
     * Item removal indicator.
     * Example: false
     * Implementer: If true, this item is obsolete and should be removed from the receiving system.
     *
     * @return bool
     */
    public function getRemovalInd()
    {
        return $this->removalInd;
    }

    /**
     * Sets a new removalInd
     *
     * Item removal indicator.
     * Example: false
     * Implementer: If true, this item is obsolete and should be removed from the receiving system.
     *
     * @param bool $removalInd
     * @return self
     */
    public function setRemovalInd($removalInd)
    {
        $this->removalInd = $removalInd;
        return $this;
    }

    /**
     * Gets as language
     *
     * Code information language.
     * Example: en
     * Note: This is the language that the code information is specified in.
     * OpenTravel Best Practice for Language Designation: Unless otherwise noted, all language designations are two alpha characters and WILL follow ISO 639-1 prescribed format.
     * Reference: http://www.iso.org/iso/home.htm
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
     * Code information language.
     * Example: en
     * Note: This is the language that the code information is specified in.
     * OpenTravel Best Practice for Language Designation: Unless otherwise noted, all language designations are two alpha characters and WILL follow ISO 639-1 prescribed format.
     * Reference: http://www.iso.org/iso/home.htm
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
     * Gets as code
     *
     * Code value.
     * Example: MYB
     * Implementer: Place a code value in this attribute if you have selected the "Other_" value in the enumerated list. Note that this value should be known to your trading partners.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Code value.
     * Example: MYB
     * Implementer: Place a code value in this attribute if you have selected the "Other_" value in the enumerated list. Note that this value should be known to your trading partners.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as description
     *
     * Code description.
     * Example: Party Supplies
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Code description.
     * Example: Party Supplies
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as descriptionDetail
     *
     * Code description detail.
     * Example: Mylar Baloons
     *
     * @return string
     */
    public function getDescriptionDetail()
    {
        return $this->descriptionDetail;
    }

    /**
     * Sets a new descriptionDetail
     *
     * Code description detail.
     * Example: Mylar Baloons
     *
     * @param string $descriptionDetail
     * @return self
     */
    public function setDescriptionDetail($descriptionDetail)
    {
        $this->descriptionDetail = $descriptionDetail;
        return $this;
    }

    /**
     * Gets as sourceName
     *
     * Code authority or owner.
     * Example: OpenTravel
     * Implementer: This may be a source authority/ owner name, ID or code.
     *
     * @return string
     */
    public function getSourceName()
    {
        return $this->sourceName;
    }

    /**
     * Sets a new sourceName
     *
     * Code authority or owner.
     * Example: OpenTravel
     * Implementer: This may be a source authority/ owner name, ID or code.
     *
     * @param string $sourceName
     * @return self
     */
    public function setSourceName($sourceName)
    {
        $this->sourceName = $sourceName;
        return $this;
    }

    /**
     * Gets as sourceURL
     *
     * Code authority or owner URL.
     * Example: http://www.opentravel.org
     * Implementer: This is A URL to the code source authority/ owner.
     *
     * @return string
     */
    public function getSourceURL()
    {
        return $this->sourceURL;
    }

    /**
     * Sets a new sourceURL
     *
     * Code authority or owner URL.
     * Example: http://www.opentravel.org
     * Implementer: This is A URL to the code source authority/ owner.
     *
     * @param string $sourceURL
     * @return self
     */
    public function setSourceURL($sourceURL)
    {
        $this->sourceURL = $sourceURL;
        return $this;
    }

    /**
     * Gets as resourceID
     *
     * Code resource ID.
     * Example: OTALIST
     *
     * @return string
     */
    public function getResourceID()
    {
        return $this->resourceID;
    }

    /**
     * Sets a new resourceID
     *
     * Code resource ID.
     * Example: OTALIST
     *
     * @param string $resourceID
     * @return self
     */
    public function setResourceID($resourceID)
    {
        $this->resourceID = $resourceID;
        return $this;
    }

    /**
     * Gets as resourceName
     *
     * Code resource name.
     * Example: OpenTravel 2012A CodeList
     *
     * @return string
     */
    public function getResourceName()
    {
        return $this->resourceName;
    }

    /**
     * Sets a new resourceName
     *
     * Code resource name.
     * Example: OpenTravel 2012A CodeList
     *
     * @param string $resourceName
     * @return self
     */
    public function setResourceName($resourceName)
    {
        $this->resourceName = $resourceName;
        return $this;
    }

    /**
     * Gets as resourceURL
     *
     * Code resource URL.
     * Example: http://www.opentravel.org/somecodelist.html
     * Implementer: This is A URL to the code resource.
     *
     * @return string
     */
    public function getResourceURL()
    {
        return $this->resourceURL;
    }

    /**
     * Sets a new resourceURL
     *
     * Code resource URL.
     * Example: http://www.opentravel.org/somecodelist.html
     * Implementer: This is A URL to the code resource.
     *
     * @param string $resourceURL
     * @return self
     */
    public function setResourceURL($resourceURL)
    {
        $this->resourceURL = $resourceURL;
        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * Code unique ID.
     * Example: MYB123
     * Implementer: This is used for a database or key ID for the code item (if it is different from the @CodeExtension) in relationship to the obsolete code indicator.
     *
     * @return string
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * Code unique ID.
     * Example: MYB123
     * Implementer: This is used for a database or key ID for the code item (if it is different from the @CodeExtension) in relationship to the obsolete code indicator.
     *
     * @param string $uniqueID
     * @return self
     */
    public function setUniqueID($uniqueID)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }
}

