<?php

namespace Recranet\OTA;

class OTA
{
    public static function getMetadataDirBasePath(): string
    {
        return dirname(__DIR__).'/resources/metadata';
    }

    public static function getValidationDirBasePath(): string
    {
        return dirname(__DIR__).'/resources/validation';
    }
}
