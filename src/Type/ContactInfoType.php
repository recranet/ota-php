<?php

namespace Recranet\OTA\Type;

/**
 * Class representing ContactInfoType
 *
 * Allows multiple pieces of information to be repeated for a single contact (e.g. one employee has mutliple e-mail addresses) and also allows multiple contacts to be associated to a single or multiple piece of information (e.g. all employees working in a restaurant can be reached at the same phone number).
 * XSD Type: ContactInfoType
 */
class ContactInfoType
{
    /**
     * The location of the contact (e.g., at a hotel property, at a central office). Refer to OpenTravel Code List Contact Location (CON).
     *
     * @var string $location
     */
    private $location = null;

    /**
     * A collection of Name elements.
     *
     * @var \Recranet\OTA\Type\ContactsType\NameAType[] $names
     */
    private $names = null;

    /**
     * A collection of Address elements.
     *
     * @var \Recranet\OTA\Type\AddressesType\AddressAType[] $addresses
     */
    private $addresses = null;

    /**
     * A collection of Phone elements.
     *
     * @var \Recranet\OTA\Type\PhonesType\PhoneAType[] $phones
     */
    private $phones = null;

    /**
     * A collection of email elements.
     *
     * @var \Recranet\OTA\Type\EmailsType\EmailAType[] $emails
     */
    private $emails = null;

    /**
     * A collection of URL elements. Used to pass detailed URL information
     *
     * @var \Recranet\OTA\Type\URLsType\URLAType[] $uRLs
     */
    private $uRLs = null;

    /**
     * The name of the company with which this contact is associated.
     *
     * @var \Recranet\OTA\Type\ContactInfoType\CompanyNameAType $companyName
     */
    private $companyName = null;

    /**
     * Gets as location
     *
     * The location of the contact (e.g., at a hotel property, at a central office). Refer to OpenTravel Code List Contact Location (CON).
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The location of the contact (e.g., at a hotel property, at a central office). Refer to OpenTravel Code List Contact Location (CON).
     *
     * @param string $location
     * @return self
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as name
     *
     * A collection of Name elements.
     *
     * @return self
     * @param \Recranet\OTA\Type\ContactsType\NameAType $name
     */
    public function addToNames(\Recranet\OTA\Type\ContactsType\NameAType $name)
    {
        $this->names[] = $name;
        return $this;
    }

    /**
     * isset names
     *
     * A collection of Name elements.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNames($index)
    {
        return isset($this->names[$index]);
    }

    /**
     * unset names
     *
     * A collection of Name elements.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNames($index)
    {
        unset($this->names[$index]);
    }

    /**
     * Gets as names
     *
     * A collection of Name elements.
     *
     * @return \Recranet\OTA\Type\ContactsType\NameAType[]
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * Sets a new names
     *
     * A collection of Name elements.
     *
     * @param \Recranet\OTA\Type\ContactsType\NameAType[] $names
     * @return self
     */
    public function setNames(array $names = null)
    {
        $this->names = $names;
        return $this;
    }

    /**
     * Adds as address
     *
     * A collection of Address elements.
     *
     * @return self
     * @param \Recranet\OTA\Type\AddressesType\AddressAType $address
     */
    public function addToAddresses(\Recranet\OTA\Type\AddressesType\AddressAType $address)
    {
        $this->addresses[] = $address;
        return $this;
    }

    /**
     * isset addresses
     *
     * A collection of Address elements.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddresses($index)
    {
        return isset($this->addresses[$index]);
    }

    /**
     * unset addresses
     *
     * A collection of Address elements.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddresses($index)
    {
        unset($this->addresses[$index]);
    }

    /**
     * Gets as addresses
     *
     * A collection of Address elements.
     *
     * @return \Recranet\OTA\Type\AddressesType\AddressAType[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Sets a new addresses
     *
     * A collection of Address elements.
     *
     * @param \Recranet\OTA\Type\AddressesType\AddressAType[] $addresses
     * @return self
     */
    public function setAddresses(array $addresses = null)
    {
        $this->addresses = $addresses;
        return $this;
    }

    /**
     * Adds as phone
     *
     * A collection of Phone elements.
     *
     * @return self
     * @param \Recranet\OTA\Type\PhonesType\PhoneAType $phone
     */
    public function addToPhones(\Recranet\OTA\Type\PhonesType\PhoneAType $phone)
    {
        $this->phones[] = $phone;
        return $this;
    }

    /**
     * isset phones
     *
     * A collection of Phone elements.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPhones($index)
    {
        return isset($this->phones[$index]);
    }

    /**
     * unset phones
     *
     * A collection of Phone elements.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPhones($index)
    {
        unset($this->phones[$index]);
    }

    /**
     * Gets as phones
     *
     * A collection of Phone elements.
     *
     * @return \Recranet\OTA\Type\PhonesType\PhoneAType[]
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * Sets a new phones
     *
     * A collection of Phone elements.
     *
     * @param \Recranet\OTA\Type\PhonesType\PhoneAType[] $phones
     * @return self
     */
    public function setPhones(array $phones = null)
    {
        $this->phones = $phones;
        return $this;
    }

    /**
     * Adds as email
     *
     * A collection of email elements.
     *
     * @return self
     * @param \Recranet\OTA\Type\EmailsType\EmailAType $email
     */
    public function addToEmails(\Recranet\OTA\Type\EmailsType\EmailAType $email)
    {
        $this->emails[] = $email;
        return $this;
    }

    /**
     * isset emails
     *
     * A collection of email elements.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEmails($index)
    {
        return isset($this->emails[$index]);
    }

    /**
     * unset emails
     *
     * A collection of email elements.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEmails($index)
    {
        unset($this->emails[$index]);
    }

    /**
     * Gets as emails
     *
     * A collection of email elements.
     *
     * @return \Recranet\OTA\Type\EmailsType\EmailAType[]
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * Sets a new emails
     *
     * A collection of email elements.
     *
     * @param \Recranet\OTA\Type\EmailsType\EmailAType[] $emails
     * @return self
     */
    public function setEmails(array $emails = null)
    {
        $this->emails = $emails;
        return $this;
    }

    /**
     * Adds as uRL
     *
     * A collection of URL elements. Used to pass detailed URL information
     *
     * @return self
     * @param \Recranet\OTA\Type\URLsType\URLAType $uRL
     */
    public function addToURLs(\Recranet\OTA\Type\URLsType\URLAType $uRL)
    {
        $this->uRLs[] = $uRL;
        return $this;
    }

    /**
     * isset uRLs
     *
     * A collection of URL elements. Used to pass detailed URL information
     *
     * @param int|string $index
     * @return bool
     */
    public function issetURLs($index)
    {
        return isset($this->uRLs[$index]);
    }

    /**
     * unset uRLs
     *
     * A collection of URL elements. Used to pass detailed URL information
     *
     * @param int|string $index
     * @return void
     */
    public function unsetURLs($index)
    {
        unset($this->uRLs[$index]);
    }

    /**
     * Gets as uRLs
     *
     * A collection of URL elements. Used to pass detailed URL information
     *
     * @return \Recranet\OTA\Type\URLsType\URLAType[]
     */
    public function getURLs()
    {
        return $this->uRLs;
    }

    /**
     * Sets a new uRLs
     *
     * A collection of URL elements. Used to pass detailed URL information
     *
     * @param \Recranet\OTA\Type\URLsType\URLAType[] $uRLs
     * @return self
     */
    public function setURLs(array $uRLs = null)
    {
        $this->uRLs = $uRLs;
        return $this;
    }

    /**
     * Gets as companyName
     *
     * The name of the company with which this contact is associated.
     *
     * @return \Recranet\OTA\Type\ContactInfoType\CompanyNameAType
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * The name of the company with which this contact is associated.
     *
     * @param \Recranet\OTA\Type\ContactInfoType\CompanyNameAType $companyName
     * @return self
     */
    public function setCompanyName(?\Recranet\OTA\Type\ContactInfoType\CompanyNameAType $companyName = null)
    {
        $this->companyName = $companyName;
        return $this;
    }
}

