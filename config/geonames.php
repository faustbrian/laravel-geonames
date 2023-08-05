<?php

declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | Database Tables Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may define the configuration for the database tables used by
    | your application. This allows for easy reference to table names
    | throughout your code.
    |
    */
    'tables' => [
        /*
        |--------------------------------------------------------------------------
        | Postal Codes Table
        |--------------------------------------------------------------------------
        |
        | Define the name for the postal codes table used to store all postal
        | code related information.
        |
        */
        'postal_codes' => 'postal_codes',
    ],

    /*
    |--------------------------------------------------------------------------
    | ZIP Sources Configuration
    |--------------------------------------------------------------------------
    |
    | This configuration option defines the URLs from which the ZIP code data
    | can be downloaded. These sources include data for various countries
    | and regions, providing comprehensive coverage.
    |
    */
    'zip' => [
        /*
        |--------------------------------------------------------------------------
        | Sources URLs
        |--------------------------------------------------------------------------
        |
        | List of URLs to download ZIP code data. These sources include ZIP code
        | information for various countries and regions, providing an extensive
        | and detailed collection of postal code data.
        |
        */
        'sources' => [
            'https://download.geonames.org/export/zip/AD.zip',
            'https://download.geonames.org/export/zip/AR.zip',
            'https://download.geonames.org/export/zip/AS.zip',
            'https://download.geonames.org/export/zip/AT.zip',
            'https://download.geonames.org/export/zip/AU.zip',
            'https://download.geonames.org/export/zip/AX.zip',
            'https://download.geonames.org/export/zip/AZ.zip',
            'https://download.geonames.org/export/zip/BD.zip',
            'https://download.geonames.org/export/zip/BE.zip',
            'https://download.geonames.org/export/zip/BG.zip',
            'https://download.geonames.org/export/zip/BM.zip',
            'https://download.geonames.org/export/zip/BR.zip',
            'https://download.geonames.org/export/zip/BY.zip',
            'https://download.geonames.org/export/zip/CA.zip',
            'https://download.geonames.org/export/zip/CA_full.csv.zip',
            'https://download.geonames.org/export/zip/CH.zip',
            'https://download.geonames.org/export/zip/CL.zip',
            'https://download.geonames.org/export/zip/CO.zip',
            'https://download.geonames.org/export/zip/CR.zip',
            'https://download.geonames.org/export/zip/CY.zip',
            'https://download.geonames.org/export/zip/CZ.zip',
            'https://download.geonames.org/export/zip/DE.zip',
            'https://download.geonames.org/export/zip/DK.zip',
            'https://download.geonames.org/export/zip/DO.zip',
            'https://download.geonames.org/export/zip/DZ.zip',
            'https://download.geonames.org/export/zip/EE.zip',
            'https://download.geonames.org/export/zip/ES.zip',
            'https://download.geonames.org/export/zip/FI.zip',
            'https://download.geonames.org/export/zip/FM.zip',
            'https://download.geonames.org/export/zip/FO.zip',
            'https://download.geonames.org/export/zip/FR.zip',
            'https://download.geonames.org/export/zip/GB.zip',
            'https://download.geonames.org/export/zip/GB_full.csv.zip',
            'https://download.geonames.org/export/zip/GF.zip',
            'https://download.geonames.org/export/zip/GG.zip',
            'https://download.geonames.org/export/zip/GL.zip',
            'https://download.geonames.org/export/zip/GP.zip',
            'https://download.geonames.org/export/zip/GT.zip',
            'https://download.geonames.org/export/zip/GU.zip',
            'https://download.geonames.org/export/zip/HR.zip',
            'https://download.geonames.org/export/zip/HT.zip',
            'https://download.geonames.org/export/zip/HU.zip',
            'https://download.geonames.org/export/zip/IE.zip',
            'https://download.geonames.org/export/zip/IM.zip',
            'https://download.geonames.org/export/zip/IN.zip',
            'https://download.geonames.org/export/zip/IS.zip',
            'https://download.geonames.org/export/zip/IT.zip',
            'https://download.geonames.org/export/zip/JE.zip',
            'https://download.geonames.org/export/zip/JP.zip',
            'https://download.geonames.org/export/zip/KR.zip',
            'https://download.geonames.org/export/zip/LI.zip',
            'https://download.geonames.org/export/zip/LK.zip',
            'https://download.geonames.org/export/zip/LT.zip',
            'https://download.geonames.org/export/zip/LU.zip',
            'https://download.geonames.org/export/zip/LV.zip',
            'https://download.geonames.org/export/zip/MA.zip',
            'https://download.geonames.org/export/zip/MC.zip',
            'https://download.geonames.org/export/zip/MD.zip',
            'https://download.geonames.org/export/zip/MH.zip',
            'https://download.geonames.org/export/zip/MK.zip',
            'https://download.geonames.org/export/zip/MP.zip',
            'https://download.geonames.org/export/zip/MQ.zip',
            'https://download.geonames.org/export/zip/MT.zip',
            'https://download.geonames.org/export/zip/MW.zip',
            'https://download.geonames.org/export/zip/MX.zip',
            'https://download.geonames.org/export/zip/MY.zip',
            'https://download.geonames.org/export/zip/NC.zip',
            'https://download.geonames.org/export/zip/NL.zip',
            'https://download.geonames.org/export/zip/NL_full.csv.zip',
            'https://download.geonames.org/export/zip/NO.zip',
            'https://download.geonames.org/export/zip/NZ.zip',
            'https://download.geonames.org/export/zip/PE.zip',
            'https://download.geonames.org/export/zip/PH.zip',
            'https://download.geonames.org/export/zip/PK.zip',
            'https://download.geonames.org/export/zip/PL.zip',
            'https://download.geonames.org/export/zip/PM.zip',
            'https://download.geonames.org/export/zip/PR.zip',
            'https://download.geonames.org/export/zip/PT.zip',
            'https://download.geonames.org/export/zip/PW.zip',
            'https://download.geonames.org/export/zip/RE.zip',
            'https://download.geonames.org/export/zip/RO.zip',
            'https://download.geonames.org/export/zip/RS.zip',
            'https://download.geonames.org/export/zip/RU.zip',
            'https://download.geonames.org/export/zip/SE.zip',
            'https://download.geonames.org/export/zip/SG.zip',
            'https://download.geonames.org/export/zip/SI.zip',
            'https://download.geonames.org/export/zip/SJ.zip',
            'https://download.geonames.org/export/zip/SK.zip',
            'https://download.geonames.org/export/zip/SM.zip',
            'https://download.geonames.org/export/zip/TH.zip',
            'https://download.geonames.org/export/zip/TR.zip',
            'https://download.geonames.org/export/zip/UA.zip',
            'https://download.geonames.org/export/zip/US.zip',
            'https://download.geonames.org/export/zip/UY.zip',
            'https://download.geonames.org/export/zip/VA.zip',
            'https://download.geonames.org/export/zip/VI.zip',
            'https://download.geonames.org/export/zip/WF.zip',
            'https://download.geonames.org/export/zip/YT.zip',
            'https://download.geonames.org/export/zip/ZA.zip',
            'https://download.geonames.org/export/zip/allCountries.zip',
        ],
    ],
];
