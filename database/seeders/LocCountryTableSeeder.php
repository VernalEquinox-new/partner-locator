<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocCountryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('loc_country')->delete();
        
        \DB::table('loc_country')->insert(array (
            0 => 
            array (
                'country_id' => 1,
                'name' => 'Afghanistan',
                'short_name' => 'AF',
            ),
            1 => 
            array (
                'country_id' => 2,
                'name' => 'Albania',
                'short_name' => 'AL',
            ),
            2 => 
            array (
                'country_id' => 3,
                'name' => 'Algeria',
                'short_name' => 'DZ',
            ),
            3 => 
            array (
                'country_id' => 4,
                'name' => 'American Samoa',
                'short_name' => 'AS',
            ),
            4 => 
            array (
                'country_id' => 5,
                'name' => 'Andorra',
                'short_name' => 'AD',
            ),
            5 => 
            array (
                'country_id' => 6,
                'name' => 'Angola',
                'short_name' => 'AO',
            ),
            6 => 
            array (
                'country_id' => 7,
                'name' => 'Anguilla',
                'short_name' => 'AI',
            ),
            7 => 
            array (
                'country_id' => 8,
                'name' => 'Antarctica',
                'short_name' => 'AQ',
            ),
            8 => 
            array (
                'country_id' => 9,
                'name' => 'Antigua and Barbuda',
                'short_name' => 'AG',
            ),
            9 => 
            array (
                'country_id' => 10,
                'name' => 'Argentina',
                'short_name' => 'AR',
            ),
            10 => 
            array (
                'country_id' => 11,
                'name' => 'Armenia',
                'short_name' => 'AM',
            ),
            11 => 
            array (
                'country_id' => 12,
                'name' => 'Aruba',
                'short_name' => 'AW',
            ),
            12 => 
            array (
                'country_id' => 13,
                'name' => 'Australia',
                'short_name' => 'AU',
            ),
            13 => 
            array (
                'country_id' => 14,
                'name' => 'Austria',
                'short_name' => 'AT',
            ),
            14 => 
            array (
                'country_id' => 15,
                'name' => 'Azerbaijan',
                'short_name' => 'AZ',
            ),
            15 => 
            array (
                'country_id' => 16,
                'name' => 'Bahamas',
                'short_name' => 'BS',
            ),
            16 => 
            array (
                'country_id' => 17,
                'name' => 'Bahrain',
                'short_name' => 'BH',
            ),
            17 => 
            array (
                'country_id' => 18,
                'name' => 'Bangladesh',
                'short_name' => 'BD',
            ),
            18 => 
            array (
                'country_id' => 19,
                'name' => 'Barbados',
                'short_name' => 'BB',
            ),
            19 => 
            array (
                'country_id' => 20,
                'name' => 'Belarus',
                'short_name' => 'BY',
            ),
            20 => 
            array (
                'country_id' => 21,
                'name' => 'Belgium',
                'short_name' => 'BE',
            ),
            21 => 
            array (
                'country_id' => 22,
                'name' => 'Belize',
                'short_name' => 'BZ',
            ),
            22 => 
            array (
                'country_id' => 23,
                'name' => 'Benin',
                'short_name' => 'BJ',
            ),
            23 => 
            array (
                'country_id' => 24,
                'name' => 'Bermuda',
                'short_name' => 'BM',
            ),
            24 => 
            array (
                'country_id' => 25,
                'name' => 'Bhutan',
                'short_name' => 'BT',
            ),
            25 => 
            array (
                'country_id' => 26,
                'name' => 'Bolivia',
                'short_name' => 'BO',
            ),
            26 => 
            array (
                'country_id' => 27,
                'name' => 'Bosnia and Herzegovina',
                'short_name' => 'BA',
            ),
            27 => 
            array (
                'country_id' => 28,
                'name' => 'Botswana',
                'short_name' => 'BW',
            ),
            28 => 
            array (
                'country_id' => 29,
                'name' => 'Bouvet Island',
                'short_name' => 'BV',
            ),
            29 => 
            array (
                'country_id' => 30,
                'name' => 'Brazil',
                'short_name' => 'BR',
            ),
            30 => 
            array (
                'country_id' => 31,
                'name' => 'British Indian Ocean Territory',
                'short_name' => 'IO',
            ),
            31 => 
            array (
                'country_id' => 32,
                'name' => 'Brunei Darussalam',
                'short_name' => 'BN',
            ),
            32 => 
            array (
                'country_id' => 33,
                'name' => 'Bulgaria',
                'short_name' => 'BG',
            ),
            33 => 
            array (
                'country_id' => 34,
                'name' => 'Burkina Faso',
                'short_name' => 'BF',
            ),
            34 => 
            array (
                'country_id' => 35,
                'name' => 'Burundi',
                'short_name' => 'BI',
            ),
            35 => 
            array (
                'country_id' => 36,
                'name' => 'Cambodia',
                'short_name' => 'KH',
            ),
            36 => 
            array (
                'country_id' => 37,
                'name' => 'Cameroon',
                'short_name' => 'CM',
            ),
            37 => 
            array (
                'country_id' => 38,
                'name' => 'Canada',
                'short_name' => 'CA',
            ),
            38 => 
            array (
                'country_id' => 39,
                'name' => 'Cabo Verde',
                'short_name' => 'CV',
            ),
            39 => 
            array (
                'country_id' => 40,
                'name' => 'Cayman Islands',
                'short_name' => 'KY',
            ),
            40 => 
            array (
                'country_id' => 41,
                'name' => 'Central African Republic',
                'short_name' => 'CF',
            ),
            41 => 
            array (
                'country_id' => 42,
                'name' => 'Chad',
                'short_name' => 'TD',
            ),
            42 => 
            array (
                'country_id' => 43,
                'name' => 'Chile',
                'short_name' => 'CL',
            ),
            43 => 
            array (
                'country_id' => 44,
                'name' => 'China',
                'short_name' => 'CN',
            ),
            44 => 
            array (
                'country_id' => 45,
                'name' => 'Christmas Island',
                'short_name' => 'CX',
            ),
            45 => 
            array (
                'country_id' => 46,
            'name' => 'Cocos (Keeling) Islands',
                'short_name' => 'CC',
            ),
            46 => 
            array (
                'country_id' => 47,
                'name' => 'Colombia',
                'short_name' => 'CO',
            ),
            47 => 
            array (
                'country_id' => 48,
                'name' => 'Comoros',
                'short_name' => 'KM',
            ),
            48 => 
            array (
                'country_id' => 49,
                'name' => 'Congo',
                'short_name' => 'CG',
            ),
            49 => 
            array (
                'country_id' => 50,
                'name' => 'Cook Islands',
                'short_name' => 'CK',
            ),
            50 => 
            array (
                'country_id' => 51,
                'name' => 'Costa Rica',
                'short_name' => 'CR',
            ),
            51 => 
            array (
                'country_id' => 52,
                'name' => 'Cote d\'Ivoire',
                'short_name' => 'CI',
            ),
            52 => 
            array (
                'country_id' => 53,
                'name' => 'Croatia',
                'short_name' => 'HR',
            ),
            53 => 
            array (
                'country_id' => 54,
                'name' => 'Cuba',
                'short_name' => 'CU',
            ),
            54 => 
            array (
                'country_id' => 55,
                'name' => 'Cyprus',
                'short_name' => 'CY',
            ),
            55 => 
            array (
                'country_id' => 56,
                'name' => 'Czech Republic',
                'short_name' => 'CZ',
            ),
            56 => 
            array (
                'country_id' => 57,
                'name' => 'Denmark',
                'short_name' => 'DK',
            ),
            57 => 
            array (
                'country_id' => 58,
                'name' => 'Djibouti',
                'short_name' => 'DJ',
            ),
            58 => 
            array (
                'country_id' => 59,
                'name' => 'Dominica',
                'short_name' => 'DM',
            ),
            59 => 
            array (
                'country_id' => 60,
                'name' => 'Dominican Republic',
                'short_name' => 'DO',
            ),
            60 => 
            array (
                'country_id' => 61,
                'name' => 'East Timor',
                'short_name' => 'TL',
            ),
            61 => 
            array (
                'country_id' => 62,
                'name' => 'Ecuador',
                'short_name' => 'EC',
            ),
            62 => 
            array (
                'country_id' => 63,
                'name' => 'Egypt',
                'short_name' => 'EG',
            ),
            63 => 
            array (
                'country_id' => 64,
                'name' => 'El Salvador',
                'short_name' => 'SV',
            ),
            64 => 
            array (
                'country_id' => 65,
                'name' => 'Equatorial Guinea',
                'short_name' => 'GQ',
            ),
            65 => 
            array (
                'country_id' => 66,
                'name' => 'Eritrea',
                'short_name' => 'ER',
            ),
            66 => 
            array (
                'country_id' => 67,
                'name' => 'Estonia',
                'short_name' => 'EE',
            ),
            67 => 
            array (
                'country_id' => 68,
                'name' => 'Ethiopia',
                'short_name' => 'ET',
            ),
            68 => 
            array (
                'country_id' => 69,
            'name' => 'Falkland Islands (Malvinas)',
                'short_name' => 'FK',
            ),
            69 => 
            array (
                'country_id' => 70,
                'name' => 'Faroe Islands',
                'short_name' => 'FO',
            ),
            70 => 
            array (
                'country_id' => 71,
                'name' => 'Fiji',
                'short_name' => 'FJ',
            ),
            71 => 
            array (
                'country_id' => 72,
                'name' => 'Finland',
                'short_name' => 'FI',
            ),
            72 => 
            array (
                'country_id' => 73,
                'name' => 'France',
                'short_name' => 'FR',
            ),
            73 => 
            array (
                'country_id' => 74,
                'name' => 'French Guiana',
                'short_name' => 'GF',
            ),
            74 => 
            array (
                'country_id' => 75,
                'name' => 'French Polynesia',
                'short_name' => 'PF',
            ),
            75 => 
            array (
                'country_id' => 76,
                'name' => 'French Southern Territories',
                'short_name' => 'TF',
            ),
            76 => 
            array (
                'country_id' => 77,
                'name' => 'Gabon',
                'short_name' => 'GA',
            ),
            77 => 
            array (
                'country_id' => 78,
                'name' => 'Gambia',
                'short_name' => 'GM',
            ),
            78 => 
            array (
                'country_id' => 79,
                'name' => 'Georgia',
                'short_name' => 'GE',
            ),
            79 => 
            array (
                'country_id' => 80,
                'name' => 'Germany',
                'short_name' => 'DE',
            ),
            80 => 
            array (
                'country_id' => 81,
                'name' => 'Ghana',
                'short_name' => 'GH',
            ),
            81 => 
            array (
                'country_id' => 82,
                'name' => 'Gibraltar',
                'short_name' => 'GI',
            ),
            82 => 
            array (
                'country_id' => 83,
                'name' => 'Greece',
                'short_name' => 'GR',
            ),
            83 => 
            array (
                'country_id' => 84,
                'name' => 'Greenland',
                'short_name' => 'GL',
            ),
            84 => 
            array (
                'country_id' => 85,
                'name' => 'Grenada',
                'short_name' => 'GD',
            ),
            85 => 
            array (
                'country_id' => 86,
                'name' => 'Guadeloupe',
                'short_name' => 'GP',
            ),
            86 => 
            array (
                'country_id' => 87,
                'name' => 'Guam',
                'short_name' => 'GUAM',
            ),
            87 => 
            array (
                'country_id' => 88,
                'name' => 'Guatemala',
                'short_name' => 'GT',
            ),
            88 => 
            array (
                'country_id' => 89,
                'name' => 'Guernsey',
                'short_name' => 'GG',
            ),
            89 => 
            array (
                'country_id' => 90,
                'name' => 'Guinea',
                'short_name' => 'GN',
            ),
            90 => 
            array (
                'country_id' => 91,
                'name' => 'Guinea-Bissau',
                'short_name' => 'GW',
            ),
            91 => 
            array (
                'country_id' => 92,
                'name' => 'Guyana',
                'short_name' => 'GY',
            ),
            92 => 
            array (
                'country_id' => 93,
                'name' => 'Haiti',
                'short_name' => 'HT',
            ),
            93 => 
            array (
                'country_id' => 94,
                'name' => 'Honduras',
                'short_name' => 'HN',
            ),
            94 => 
            array (
                'country_id' => 95,
                'name' => 'Hong Kong',
                'short_name' => 'HK',
            ),
            95 => 
            array (
                'country_id' => 96,
                'name' => 'Hungary',
                'short_name' => 'HU',
            ),
            96 => 
            array (
                'country_id' => 97,
                'name' => 'Iceland',
                'short_name' => 'IS',
            ),
            97 => 
            array (
                'country_id' => 98,
                'name' => 'India',
                'short_name' => 'IN',
            ),
            98 => 
            array (
                'country_id' => 99,
                'name' => 'Indonesia',
                'short_name' => 'ID',
            ),
            99 => 
            array (
                'country_id' => 100,
                'name' => 'Iran, Islamic Republic of',
                'short_name' => 'IR',
            ),
            100 => 
            array (
                'country_id' => 101,
                'name' => 'Iraq',
                'short_name' => 'IQ',
            ),
            101 => 
            array (
                'country_id' => 102,
                'name' => 'Ireland',
                'short_name' => 'IE',
            ),
            102 => 
            array (
                'country_id' => 103,
                'name' => 'Isle of Man',
                'short_name' => 'IM',
            ),
            103 => 
            array (
                'country_id' => 104,
                'name' => 'Israel',
                'short_name' => 'IL',
            ),
            104 => 
            array (
                'country_id' => 105,
                'name' => 'Italy',
                'short_name' => 'IT',
            ),
            105 => 
            array (
                'country_id' => 106,
                'name' => 'Jamaica',
                'short_name' => 'JM',
            ),
            106 => 
            array (
                'country_id' => 107,
                'name' => 'Japan',
                'short_name' => 'JP',
            ),
            107 => 
            array (
                'country_id' => 108,
                'name' => 'Jersey',
                'short_name' => 'JE',
            ),
            108 => 
            array (
                'country_id' => 109,
                'name' => 'Jordan',
                'short_name' => 'JO',
            ),
            109 => 
            array (
                'country_id' => 110,
                'name' => 'Kazakhstan',
                'short_name' => 'KZ',
            ),
            110 => 
            array (
                'country_id' => 111,
                'name' => 'Kenya',
                'short_name' => 'KE',
            ),
            111 => 
            array (
                'country_id' => 112,
                'name' => 'Kiribati',
                'short_name' => 'KI',
            ),
            112 => 
            array (
                'country_id' => 113,
                'name' => 'Korea, Democratic People\'s Republic of',
                'short_name' => 'KP',
            ),
            113 => 
            array (
                'country_id' => 114,
                'name' => 'Korea, Republic of',
                'short_name' => 'KR',
            ),
            114 => 
            array (
                'country_id' => 115,
                'name' => 'Kuwait',
                'short_name' => 'KW',
            ),
            115 => 
            array (
                'country_id' => 116,
                'name' => 'Kyrgyzstan',
                'short_name' => 'KG',
            ),
            116 => 
            array (
                'country_id' => 117,
                'name' => 'Lao People\'s Democratic Republic',
                'short_name' => 'LA',
            ),
            117 => 
            array (
                'country_id' => 118,
                'name' => 'Latvia',
                'short_name' => 'LV',
            ),
            118 => 
            array (
                'country_id' => 119,
                'name' => 'Lebanon',
                'short_name' => 'LB',
            ),
            119 => 
            array (
                'country_id' => 120,
                'name' => 'Lesotho',
                'short_name' => 'LS',
            ),
            120 => 
            array (
                'country_id' => 121,
                'name' => 'Liberia',
                'short_name' => 'LR',
            ),
            121 => 
            array (
                'country_id' => 122,
                'name' => 'Libyan Arab Jamahiriya',
                'short_name' => 'LY',
            ),
            122 => 
            array (
                'country_id' => 123,
                'name' => 'Liechtenstein',
                'short_name' => 'LI',
            ),
            123 => 
            array (
                'country_id' => 124,
                'name' => 'Lithuania',
                'short_name' => 'LT',
            ),
            124 => 
            array (
                'country_id' => 125,
                'name' => 'Luxembourg',
                'short_name' => 'LU',
            ),
            125 => 
            array (
                'country_id' => 126,
                'name' => 'Macau',
                'short_name' => 'MO',
            ),
            126 => 
            array (
                'country_id' => 127,
                'name' => 'Macedonia',
                'short_name' => 'MK',
            ),
            127 => 
            array (
                'country_id' => 128,
                'name' => 'Madagascar',
                'short_name' => 'MG',
            ),
            128 => 
            array (
                'country_id' => 129,
                'name' => 'Malawi',
                'short_name' => 'MW',
            ),
            129 => 
            array (
                'country_id' => 130,
                'name' => 'Malaysia',
                'short_name' => 'MY',
            ),
            130 => 
            array (
                'country_id' => 131,
                'name' => 'Maldives',
                'short_name' => 'MV',
            ),
            131 => 
            array (
                'country_id' => 132,
                'name' => 'Mali',
                'short_name' => 'ML',
            ),
            132 => 
            array (
                'country_id' => 133,
                'name' => 'Malta',
                'short_name' => 'MT',
            ),
            133 => 
            array (
                'country_id' => 134,
                'name' => 'Marshall Islands',
                'short_name' => 'MI',
            ),
            134 => 
            array (
                'country_id' => 135,
                'name' => 'Martinique',
                'short_name' => 'MQ',
            ),
            135 => 
            array (
                'country_id' => 136,
                'name' => 'Mauritania',
                'short_name' => 'MR',
            ),
            136 => 
            array (
                'country_id' => 137,
                'name' => 'Mauritius',
                'short_name' => 'MU',
            ),
            137 => 
            array (
                'country_id' => 138,
                'name' => 'Mexico',
                'short_name' => 'MX',
            ),
            138 => 
            array (
                'country_id' => 139,
                'name' => 'Moldova, Republic of',
                'short_name' => 'MD',
            ),
            139 => 
            array (
                'country_id' => 140,
                'name' => 'Monaco',
                'short_name' => 'MC',
            ),
            140 => 
            array (
                'country_id' => 141,
                'name' => 'Mongolia',
                'short_name' => 'MN',
            ),
            141 => 
            array (
                'country_id' => 142,
                'name' => 'Montserrat',
                'short_name' => 'MS',
            ),
            142 => 
            array (
                'country_id' => 143,
                'name' => 'Morocco',
                'short_name' => 'MA',
            ),
            143 => 
            array (
                'country_id' => 144,
                'name' => 'Mozambique',
                'short_name' => 'MZ',
            ),
            144 => 
            array (
                'country_id' => 145,
                'name' => 'Myanmar',
                'short_name' => 'MM',
            ),
            145 => 
            array (
                'country_id' => 146,
                'name' => 'Namibia',
                'short_name' => 'NA',
            ),
            146 => 
            array (
                'country_id' => 147,
                'name' => 'Nauru',
                'short_name' => 'NR',
            ),
            147 => 
            array (
                'country_id' => 148,
                'name' => 'Nepal',
                'short_name' => 'NP',
            ),
            148 => 
            array (
                'country_id' => 149,
                'name' => 'Netherlands',
                'short_name' => 'NL',
            ),
            149 => 
            array (
                'country_id' => 150,
                'name' => 'Netherlands Antilles',
                'short_name' => 'ANT',
            ),
            150 => 
            array (
                'country_id' => 151,
            'name' => 'Neutral Zone (Saudi/Iraq)',
                'short_name' => 'NT',
            ),
            151 => 
            array (
                'country_id' => 152,
                'name' => 'New Caledonia',
                'short_name' => 'NC',
            ),
            152 => 
            array (
                'country_id' => 153,
                'name' => 'New Zealand',
                'short_name' => 'NZ',
            ),
            153 => 
            array (
                'country_id' => 154,
                'name' => 'Nicaragua',
                'short_name' => 'NI',
            ),
            154 => 
            array (
                'country_id' => 155,
                'name' => 'Niger',
                'short_name' => 'NE',
            ),
            155 => 
            array (
                'country_id' => 156,
                'name' => 'Nigeria',
                'short_name' => 'NG',
            ),
            156 => 
            array (
                'country_id' => 157,
                'name' => 'Niue',
                'short_name' => 'NU',
            ),
            157 => 
            array (
                'country_id' => 158,
                'name' => 'Norfolk Island',
                'short_name' => 'NF',
            ),
            158 => 
            array (
                'country_id' => 159,
                'name' => 'Northern Ireland',
                'short_name' => 'NIR',
            ),
            159 => 
            array (
                'country_id' => 160,
                'name' => 'Northern Mariana Islands',
                'short_name' => 'NMI',
            ),
            160 => 
            array (
                'country_id' => 161,
                'name' => 'Norway',
                'short_name' => 'NO',
            ),
            161 => 
            array (
                'country_id' => 162,
                'name' => 'Oman',
                'short_name' => 'OM',
            ),
            162 => 
            array (
                'country_id' => 163,
                'name' => 'Pakistan',
                'short_name' => 'PK',
            ),
            163 => 
            array (
                'country_id' => 164,
                'name' => 'Palau',
                'short_name' => 'PAL',
            ),
            164 => 
            array (
                'country_id' => 165,
                'name' => 'Palestinian Territory',
                'short_name' => 'PS',
            ),
            165 => 
            array (
                'country_id' => 166,
                'name' => 'Panama',
                'short_name' => 'PA',
            ),
            166 => 
            array (
                'country_id' => 167,
                'name' => 'Panama Canal Zone',
                'short_name' => 'PZ',
            ),
            167 => 
            array (
                'country_id' => 168,
                'name' => 'Papua New Guinea',
                'short_name' => 'PG',
            ),
            168 => 
            array (
                'country_id' => 169,
                'name' => 'Paraguay',
                'short_name' => 'PY',
            ),
            169 => 
            array (
                'country_id' => 170,
                'name' => 'Peru',
                'short_name' => 'PE',
            ),
            170 => 
            array (
                'country_id' => 171,
                'name' => 'Philippines',
                'short_name' => 'PH',
            ),
            171 => 
            array (
                'country_id' => 172,
                'name' => 'Pitcairn Islands',
                'short_name' => 'PN',
            ),
            172 => 
            array (
                'country_id' => 173,
                'name' => 'Poland',
                'short_name' => 'PL',
            ),
            173 => 
            array (
                'country_id' => 174,
                'name' => 'Portugal',
                'short_name' => 'PT',
            ),
            174 => 
            array (
                'country_id' => 175,
                'name' => 'Puerto Rico',
                'short_name' => 'PR',
            ),
            175 => 
            array (
                'country_id' => 176,
                'name' => 'Qatar',
                'short_name' => 'QA',
            ),
            176 => 
            array (
                'country_id' => 177,
                'name' => 'Reunion',
                'short_name' => 'RE',
            ),
            177 => 
            array (
                'country_id' => 178,
                'name' => 'Romania',
                'short_name' => 'RO',
            ),
            178 => 
            array (
                'country_id' => 179,
                'name' => 'Russian Federation',
                'short_name' => 'RU',
            ),
            179 => 
            array (
                'country_id' => 180,
                'name' => 'Saint Kitts and Nevis',
                'short_name' => 'KN',
            ),
            180 => 
            array (
                'country_id' => 181,
                'name' => 'Saint Lucia',
                'short_name' => 'LC',
            ),
            181 => 
            array (
                'country_id' => 182,
                'name' => 'Samoa',
                'short_name' => 'WS',
            ),
            182 => 
            array (
                'country_id' => 183,
                'name' => 'San Marino',
                'short_name' => 'SM',
            ),
            183 => 
            array (
                'country_id' => 184,
                'name' => 'Sao Tome and Principe',
                'short_name' => 'ST',
            ),
            184 => 
            array (
                'country_id' => 185,
                'name' => 'Saudi Arabia',
                'short_name' => 'SA',
            ),
            185 => 
            array (
                'country_id' => 186,
                'name' => 'Scotland',
                'short_name' => 'SCT',
            ),
            186 => 
            array (
                'country_id' => 187,
                'name' => 'Senegal',
                'short_name' => 'SN',
            ),
            187 => 
            array (
                'country_id' => 188,
                'name' => 'Seychelles',
                'short_name' => 'SC',
            ),
            188 => 
            array (
                'country_id' => 189,
                'name' => 'Sierra Leone',
                'short_name' => 'SL',
            ),
            189 => 
            array (
                'country_id' => 190,
                'name' => 'Singapore',
                'short_name' => 'SG',
            ),
            190 => 
            array (
                'country_id' => 191,
                'name' => 'Slovakia',
                'short_name' => 'SK',
            ),
            191 => 
            array (
                'country_id' => 192,
                'name' => 'Slovenia',
                'short_name' => 'SI',
            ),
            192 => 
            array (
                'country_id' => 193,
                'name' => 'Solomon Islands',
                'short_name' => 'SB',
            ),
            193 => 
            array (
                'country_id' => 194,
                'name' => 'Somalia',
                'short_name' => 'SO',
            ),
            194 => 
            array (
                'country_id' => 195,
                'name' => 'South Africa',
                'short_name' => 'ZA',
            ),
            195 => 
            array (
                'country_id' => 196,
                'name' => 'Spain',
                'short_name' => 'ES',
            ),
            196 => 
            array (
                'country_id' => 197,
                'name' => 'Sri Lanka',
                'short_name' => 'LK',
            ),
            197 => 
            array (
                'country_id' => 198,
                'name' => 'Saint Helena',
                'short_name' => 'SH',
            ),
            198 => 
            array (
                'country_id' => 199,
                'name' => 'Saint Pierre and Miquelon',
                'short_name' => 'PM',
            ),
            199 => 
            array (
                'country_id' => 200,
                'name' => 'Saint Vincent and the Grenadines',
                'short_name' => 'VC',
            ),
            200 => 
            array (
                'country_id' => 201,
                'name' => 'Sudan',
                'short_name' => 'SD',
            ),
            201 => 
            array (
                'country_id' => 202,
                'name' => 'Suriname',
                'short_name' => 'SR',
            ),
            202 => 
            array (
                'country_id' => 203,
                'name' => 'Svalbard and Jan Mayen',
                'short_name' => 'SJ',
            ),
            203 => 
            array (
                'country_id' => 204,
                'name' => 'Swaziland',
                'short_name' => 'SZ',
            ),
            204 => 
            array (
                'country_id' => 205,
                'name' => 'Sweden',
                'short_name' => 'SE',
            ),
            205 => 
            array (
                'country_id' => 206,
                'name' => 'Switzerland',
                'short_name' => 'CH',
            ),
            206 => 
            array (
                'country_id' => 207,
                'name' => 'Syrian Arab Republic',
                'short_name' => 'SY',
            ),
            207 => 
            array (
                'country_id' => 208,
                'name' => 'Taiwan',
                'short_name' => 'TW',
            ),
            208 => 
            array (
                'country_id' => 209,
                'name' => 'Tajikistan',
                'short_name' => 'TJ',
            ),
            209 => 
            array (
                'country_id' => 210,
                'name' => 'Tanzania, United Republic of',
                'short_name' => 'TZ',
            ),
            210 => 
            array (
                'country_id' => 211,
                'name' => 'Thailand',
                'short_name' => 'TH',
            ),
            211 => 
            array (
                'country_id' => 212,
                'name' => 'Togo',
                'short_name' => 'TG',
            ),
            212 => 
            array (
                'country_id' => 213,
                'name' => 'Tokelau',
                'short_name' => 'TK',
            ),
            213 => 
            array (
                'country_id' => 214,
                'name' => 'Tonga',
                'short_name' => 'TO',
            ),
            214 => 
            array (
                'country_id' => 215,
                'name' => 'Trinidad and Tobago',
                'short_name' => 'TT',
            ),
            215 => 
            array (
                'country_id' => 216,
                'name' => 'Tunisia',
                'short_name' => 'TN',
            ),
            216 => 
            array (
                'country_id' => 217,
                'name' => 'Turkey',
                'short_name' => 'TR',
            ),
            217 => 
            array (
                'country_id' => 218,
                'name' => 'Turkmenistan',
                'short_name' => 'TM',
            ),
            218 => 
            array (
                'country_id' => 219,
                'name' => 'Turks and Caicos Islands',
                'short_name' => 'TC',
            ),
            219 => 
            array (
                'country_id' => 220,
                'name' => 'Tuvalu',
                'short_name' => 'TV',
            ),
            220 => 
            array (
                'country_id' => 221,
                'name' => 'United States Minor Outlying Islands',
                'short_name' => 'UMI',
            ),
            221 => 
            array (
                'country_id' => 222,
                'name' => 'Uganda',
                'short_name' => 'UG',
            ),
            222 => 
            array (
                'country_id' => 223,
                'name' => 'Ukraine',
                'short_name' => 'UA',
            ),
            223 => 
            array (
                'country_id' => 224,
                'name' => 'United Arab Emirates',
                'short_name' => 'AE',
            ),
            224 => 
            array (
                'country_id' => 225,
                'name' => 'United Kingdom',
                'short_name' => 'GB',
            ),
            225 => 
            array (
                'country_id' => 226,
                'name' => 'United States',
                'short_name' => 'US',
            ),
            226 => 
            array (
                'country_id' => 227,
                'name' => 'Uruguay',
                'short_name' => 'UY',
            ),
            227 => 
            array (
                'country_id' => 228,
                'name' => 'Uzbekistan',
                'short_name' => 'UZ',
            ),
            228 => 
            array (
                'country_id' => 229,
                'name' => 'Vanuatu',
                'short_name' => 'VU',
            ),
            229 => 
            array (
                'country_id' => 230,
            'name' => 'Holy See (Vatican City State)',
                'short_name' => 'VA',
            ),
            230 => 
            array (
                'country_id' => 231,
                'name' => 'Venezuela',
                'short_name' => 'VE',
            ),
            231 => 
            array (
                'country_id' => 232,
                'name' => 'Vietnam',
                'short_name' => 'VN',
            ),
            232 => 
            array (
                'country_id' => 233,
                'name' => 'Virgin Islands, British',
                'short_name' => 'VG',
            ),
            233 => 
            array (
                'country_id' => 234,
                'name' => 'Virgin Islands, U.S.',
                'short_name' => 'VUUSA',
            ),
            234 => 
            array (
                'country_id' => 235,
                'name' => 'Wales',
                'short_name' => 'WLS',
            ),
            235 => 
            array (
                'country_id' => 236,
                'name' => 'Wallis and Futuna',
                'short_name' => 'WF',
            ),
            236 => 
            array (
                'country_id' => 237,
                'name' => 'Western Sahara',
                'short_name' => 'EH',
            ),
            237 => 
            array (
                'country_id' => 238,
                'name' => 'Yemen',
                'short_name' => 'YE',
            ),
            238 => 
            array (
                'country_id' => 240,
                'name' => 'Congo, Democratic Republic of the',
                'short_name' => 'CD',
            ),
            239 => 
            array (
                'country_id' => 241,
                'name' => 'Zambia',
                'short_name' => 'ZM',
            ),
            240 => 
            array (
                'country_id' => 242,
                'name' => 'Zimbabwe',
                'short_name' => 'ZW',
            ),
            241 => 
            array (
                'country_id' => 244,
                'name' => 'Serbia',
                'short_name' => 'RS',
            ),
            242 => 
            array (
                'country_id' => 245,
                'name' => 'Montenegro',
                'short_name' => 'ME',
            ),
            243 => 
            array (
                'country_id' => 246,
                'name' => 'Kosovo',
                'short_name' => 'KSV',
            ),
            244 => 
            array (
                'country_id' => 243,
                'name' => 'Worldwide',
                'short_name' => 'WW',
            ),
        ));
        
        
    }
}