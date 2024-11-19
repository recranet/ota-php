<?php

namespace Recranet\OTA;

/**
 * Class representing PersonNameType
 *
 * This provides name information for a person.
 * XSD Type: PersonNameType
 */
class PersonNameType
{
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
     * Type of name of the individual, such as former, nickname, alternate or alias name. Refer to OpenTravel Code List Name Type (NAM).
     *
     * @var string $nameType
     */
    private $nameType = null;

    /**
     * Name representation language.
     * Example: en
     * Implementer: This represents which language the name is represented in, e.g. an Eastern name versus a Western name.
     *
     * @var string $language
     */
    private $language = null;

    /**
     * Primary name indicator.
     * Example: true
     * Implementer: If true, this is the default or primary name within a collection of names.
     *
     * @var bool $defaultInd
     */
    private $defaultInd = null;

    /**
     * Salutation of honorific (e.g. Mr., Mrs., Ms., Miss, Dr.)
     *
     * @var string[] $namePrefix
     */
    private $namePrefix = [
        
    ];

    /**
     * Given name, first name or names.
     *
     * @var string[] $givenName
     */
    private $givenName = [
        
    ];

    /**
     * The middle name of the person name.
     *
     * @var string[] $middleName
     */
    private $middleName = [
        
    ];

    /**
     * The surname prefix, e.g "van der", "von", "de".
     *
     * @var string $surnamePrefix
     */
    private $surnamePrefix = null;

    /**
     * Family name, last name. May also be used for full name if the sending system does not have the ability to separate a full name into its parts, e.g. the surname element may be used to pass the full name.
     *
     * @var string $surname
     */
    private $surname = null;

    /**
     * Hold various name suffixes and letters (e.g. Jr., Sr., III, Ret., Esq.)
     *
     * @var string[] $nameSuffix
     */
    private $nameSuffix = [
        
    ];

    /**
     * Degree or honors (e.g., Ph.D., M.D.)
     *
     * @var string[] $nameTitle
     */
    private $nameTitle = [
        
    ];

    /**
     * Document information for verification purposes and also used for additional filtering for common names.
     *
     * @var \Recranet\OTA\PersonNameType\DocumentAType $document
     */
    private $document = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

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
     * Gets as nameType
     *
     * Type of name of the individual, such as former, nickname, alternate or alias name. Refer to OpenTravel Code List Name Type (NAM).
     *
     * @return string
     */
    public function getNameType()
    {
        return $this->nameType;
    }

    /**
     * Sets a new nameType
     *
     * Type of name of the individual, such as former, nickname, alternate or alias name. Refer to OpenTravel Code List Name Type (NAM).
     *
     * @param string $nameType
     * @return self
     */
    public function setNameType($nameType)
    {
        $this->nameType = $nameType;
        return $this;
    }

    /**
     * Gets as language
     *
     * Name representation language.
     * Example: en
     * Implementer: This represents which language the name is represented in, e.g. an Eastern name versus a Western name.
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
     * Name representation language.
     * Example: en
     * Implementer: This represents which language the name is represented in, e.g. an Eastern name versus a Western name.
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
     * Gets as defaultInd
     *
     * Primary name indicator.
     * Example: true
     * Implementer: If true, this is the default or primary name within a collection of names.
     *
     * @return bool
     */
    public function getDefaultInd()
    {
        return $this->defaultInd;
    }

    /**
     * Sets a new defaultInd
     *
     * Primary name indicator.
     * Example: true
     * Implementer: If true, this is the default or primary name within a collection of names.
     *
     * @param bool $defaultInd
     * @return self
     */
    public function setDefaultInd($defaultInd)
    {
        $this->defaultInd = $defaultInd;
        return $this;
    }

    /**
     * Adds as namePrefix
     *
     * Salutation of honorific (e.g. Mr., Mrs., Ms., Miss, Dr.)
     *
     * @return self
     * @param string $namePrefix
     */
    public function addToNamePrefix($namePrefix)
    {
        $this->namePrefix[] = $namePrefix;
        return $this;
    }

    /**
     * isset namePrefix
     *
     * Salutation of honorific (e.g. Mr., Mrs., Ms., Miss, Dr.)
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNamePrefix($index)
    {
        return isset($this->namePrefix[$index]);
    }

    /**
     * unset namePrefix
     *
     * Salutation of honorific (e.g. Mr., Mrs., Ms., Miss, Dr.)
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNamePrefix($index)
    {
        unset($this->namePrefix[$index]);
    }

    /**
     * Gets as namePrefix
     *
     * Salutation of honorific (e.g. Mr., Mrs., Ms., Miss, Dr.)
     *
     * @return string[]
     */
    public function getNamePrefix()
    {
        return $this->namePrefix;
    }

    /**
     * Sets a new namePrefix
     *
     * Salutation of honorific (e.g. Mr., Mrs., Ms., Miss, Dr.)
     *
     * @param string $namePrefix
     * @return self
     */
    public function setNamePrefix(array $namePrefix = null)
    {
        $this->namePrefix = $namePrefix;
        return $this;
    }

    /**
     * Adds as givenName
     *
     * Given name, first name or names.
     *
     * @return self
     * @param string $givenName
     */
    public function addToGivenName($givenName)
    {
        $this->givenName[] = $givenName;
        return $this;
    }

    /**
     * isset givenName
     *
     * Given name, first name or names.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGivenName($index)
    {
        return isset($this->givenName[$index]);
    }

    /**
     * unset givenName
     *
     * Given name, first name or names.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGivenName($index)
    {
        unset($this->givenName[$index]);
    }

    /**
     * Gets as givenName
     *
     * Given name, first name or names.
     *
     * @return string[]
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * Sets a new givenName
     *
     * Given name, first name or names.
     *
     * @param string $givenName
     * @return self
     */
    public function setGivenName(array $givenName = null)
    {
        $this->givenName = $givenName;
        return $this;
    }

    /**
     * Adds as middleName
     *
     * The middle name of the person name.
     *
     * @return self
     * @param string $middleName
     */
    public function addToMiddleName($middleName)
    {
        $this->middleName[] = $middleName;
        return $this;
    }

    /**
     * isset middleName
     *
     * The middle name of the person name.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMiddleName($index)
    {
        return isset($this->middleName[$index]);
    }

    /**
     * unset middleName
     *
     * The middle name of the person name.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMiddleName($index)
    {
        unset($this->middleName[$index]);
    }

    /**
     * Gets as middleName
     *
     * The middle name of the person name.
     *
     * @return string[]
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Sets a new middleName
     *
     * The middle name of the person name.
     *
     * @param string $middleName
     * @return self
     */
    public function setMiddleName(array $middleName = null)
    {
        $this->middleName = $middleName;
        return $this;
    }

    /**
     * Gets as surnamePrefix
     *
     * The surname prefix, e.g "van der", "von", "de".
     *
     * @return string
     */
    public function getSurnamePrefix()
    {
        return $this->surnamePrefix;
    }

    /**
     * Sets a new surnamePrefix
     *
     * The surname prefix, e.g "van der", "von", "de".
     *
     * @param string $surnamePrefix
     * @return self
     */
    public function setSurnamePrefix($surnamePrefix)
    {
        $this->surnamePrefix = $surnamePrefix;
        return $this;
    }

    /**
     * Gets as surname
     *
     * Family name, last name. May also be used for full name if the sending system does not have the ability to separate a full name into its parts, e.g. the surname element may be used to pass the full name.
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Sets a new surname
     *
     * Family name, last name. May also be used for full name if the sending system does not have the ability to separate a full name into its parts, e.g. the surname element may be used to pass the full name.
     *
     * @param string $surname
     * @return self
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * Adds as nameSuffix
     *
     * Hold various name suffixes and letters (e.g. Jr., Sr., III, Ret., Esq.)
     *
     * @return self
     * @param string $nameSuffix
     */
    public function addToNameSuffix($nameSuffix)
    {
        $this->nameSuffix[] = $nameSuffix;
        return $this;
    }

    /**
     * isset nameSuffix
     *
     * Hold various name suffixes and letters (e.g. Jr., Sr., III, Ret., Esq.)
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNameSuffix($index)
    {
        return isset($this->nameSuffix[$index]);
    }

    /**
     * unset nameSuffix
     *
     * Hold various name suffixes and letters (e.g. Jr., Sr., III, Ret., Esq.)
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNameSuffix($index)
    {
        unset($this->nameSuffix[$index]);
    }

    /**
     * Gets as nameSuffix
     *
     * Hold various name suffixes and letters (e.g. Jr., Sr., III, Ret., Esq.)
     *
     * @return string[]
     */
    public function getNameSuffix()
    {
        return $this->nameSuffix;
    }

    /**
     * Sets a new nameSuffix
     *
     * Hold various name suffixes and letters (e.g. Jr., Sr., III, Ret., Esq.)
     *
     * @param string $nameSuffix
     * @return self
     */
    public function setNameSuffix(array $nameSuffix = null)
    {
        $this->nameSuffix = $nameSuffix;
        return $this;
    }

    /**
     * Adds as nameTitle
     *
     * Degree or honors (e.g., Ph.D., M.D.)
     *
     * @return self
     * @param string $nameTitle
     */
    public function addToNameTitle($nameTitle)
    {
        $this->nameTitle[] = $nameTitle;
        return $this;
    }

    /**
     * isset nameTitle
     *
     * Degree or honors (e.g., Ph.D., M.D.)
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNameTitle($index)
    {
        return isset($this->nameTitle[$index]);
    }

    /**
     * unset nameTitle
     *
     * Degree or honors (e.g., Ph.D., M.D.)
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNameTitle($index)
    {
        unset($this->nameTitle[$index]);
    }

    /**
     * Gets as nameTitle
     *
     * Degree or honors (e.g., Ph.D., M.D.)
     *
     * @return string[]
     */
    public function getNameTitle()
    {
        return $this->nameTitle;
    }

    /**
     * Sets a new nameTitle
     *
     * Degree or honors (e.g., Ph.D., M.D.)
     *
     * @param string $nameTitle
     * @return self
     */
    public function setNameTitle(array $nameTitle = null)
    {
        $this->nameTitle = $nameTitle;
        return $this;
    }

    /**
     * Gets as document
     *
     * Document information for verification purposes and also used for additional filtering for common names.
     *
     * @return \Recranet\OTA\PersonNameType\DocumentAType
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Sets a new document
     *
     * Document information for verification purposes and also used for additional filtering for common names.
     *
     * @param \Recranet\OTA\PersonNameType\DocumentAType $document
     * @return self
     */
    public function setDocument(?\Recranet\OTA\PersonNameType\DocumentAType $document = null)
    {
        $this->document = $document;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

