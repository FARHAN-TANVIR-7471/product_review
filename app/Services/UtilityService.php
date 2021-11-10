<?php

namespace App\Services;
/**
 * Class UtilityService
 * @package App\Services
 */
class UtilityService
{
    public static $status = [
        'ACTIVE' => 'ACTIVE',
        'INACTIVE' => 'INACTIVE',
    ];

    public static $imageUploadPath = [
        'logo' => 'images/company_logo/',
        'sider_image' => 'images/sider_image/'
    ];

    public static $fileType = [
        'logo' => 'logo',
        'sider_image' => 'sider_image'
    ];
}