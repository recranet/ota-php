# Development

## Convert XSD to PHP

If you want to update the PHP files with a new version of the OTA specifications, follow these steps:

1. [Download](https://opentravel.org/download-the-opentravel-specification/) preferred version of OTA specs from the official website:
    - Fill in the details, select `1.0` OpenTravel Version and the publication needed.
    - You will receive an email with the zip file.
    - Unpack the archive and open `OpenTravel_[version]_XML` directory. All the XML definitions are there.
2. Clone this repository to your local machine.
3. Empty the following directories:
    - `resources/ota/common` **NOTE**: keep this directory
    - `resources/ota` **NOTE**: keep this directory
    - `resources/metadata`
    - `resources/validation`
    - `src`
4. Copy the following list of files to the `resources/ota/common` directory from the publication you just downloaded:
    - OTA_AirCommonTypes.xsd
    - OTA_AirPreferences.xsd
    - OTA_CommonPrefs.xsd
    - OTA_CommonTypes.xsd
    - OTA_HotelCommonTypes.xsd
    - OTA_HotelContentDescription.xsd
    - OTA_HotelEvent.xsd
    - OTA_HotelPreferences.xsd
    - OTA_HotelProduct.xsd
    - OTA_HotelRatePlan.xsd
    - OTA_HotelReservation.xsd
    - OTA_HotelRFP.xsd
    - OTA_Lists.xsd
    - OTA_Profile.xsd
    - OTA_RailCommonTypes.xsd
    - OTA_RailPreferences.xsd
    - OTA_SimpleTypes.xsd
    - OTA_VehicleCommonTypes.xsd

   These are the common files that contain types which OTA request and response messages use. Unfortunately, there is no other way to copy them rather than just manually pick them from the publication.
5. Copy all the files that **START** with `OTA_Hotel` and **END** with `RQ` **OR** `RS` into project's `resources/ota` directory from the publication you just downloaded.
6. Run the following command:
   ```sh
   php vendor/bin/xsd2php convert config/xsd2php.yml ./resources/ota/OTA_*.xsd
   ```
   It will convert all the schemas into PHP classes and put them into `src/DTO` directory. Additionally, it will generate metadata and validation files and put them in `resources/metadata` and `resources/validation` directories respectively. You can tweak the configuration of this command in `config/xsd2php.yml` file.
