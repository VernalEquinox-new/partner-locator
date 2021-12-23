<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocStateTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('loc_state')->delete();
        
        \DB::table('loc_state')->insert(array (
            0 => 
            array (
                'state_id' => 1,
                'name' => '[Nation Wide]',
                'short_name' => 'nostate',
                'country_id' => 226,
            ),
            1 => 
            array (
                'state_id' => 2,
                'name' => 'Alabama',
                'short_name' => 'AL',
                'country_id' => 226,
            ),
            2 => 
            array (
                'state_id' => 3,
                'name' => 'Alaska',
                'short_name' => 'AK',
                'country_id' => 226,
            ),
            3 => 
            array (
                'state_id' => 4,
                'name' => 'American Samoa',
                'short_name' => 'AS',
                'country_id' => 226,
            ),
            4 => 
            array (
                'state_id' => 5,
                'name' => 'Arizona',
                'short_name' => 'AZ',
                'country_id' => 226,
            ),
            5 => 
            array (
                'state_id' => 6,
                'name' => 'Arkansas',
                'short_name' => 'AR',
                'country_id' => 226,
            ),
            6 => 
            array (
                'state_id' => 7,
                'name' => 'California',
                'short_name' => 'CA',
                'country_id' => 226,
            ),
            7 => 
            array (
                'state_id' => 8,
                'name' => 'Colorado',
                'short_name' => 'CO',
                'country_id' => 226,
            ),
            8 => 
            array (
                'state_id' => 9,
                'name' => 'Connecticut',
                'short_name' => 'CT',
                'country_id' => 226,
            ),
            9 => 
            array (
                'state_id' => 10,
                'name' => 'Delaware',
                'short_name' => 'DE',
                'country_id' => 226,
            ),
            10 => 
            array (
                'state_id' => 11,
                'name' => 'District of Columbia',
                'short_name' => 'DC',
                'country_id' => 226,
            ),
            11 => 
            array (
                'state_id' => 12,
                'name' => 'Florida',
                'short_name' => 'FL',
                'country_id' => 226,
            ),
            12 => 
            array (
                'state_id' => 13,
                'name' => 'Georgia',
                'short_name' => 'GA',
                'country_id' => 226,
            ),
            13 => 
            array (
                'state_id' => 14,
                'name' => 'Guam',
                'short_name' => 'GU',
                'country_id' => 226,
            ),
            14 => 
            array (
                'state_id' => 15,
                'name' => 'Hawaii',
                'short_name' => 'HI',
                'country_id' => 226,
            ),
            15 => 
            array (
                'state_id' => 16,
                'name' => 'Idaho',
                'short_name' => 'ID',
                'country_id' => 226,
            ),
            16 => 
            array (
                'state_id' => 17,
                'name' => 'Illinois',
                'short_name' => 'IL',
                'country_id' => 226,
            ),
            17 => 
            array (
                'state_id' => 18,
                'name' => 'Indiana',
                'short_name' => 'IN',
                'country_id' => 226,
            ),
            18 => 
            array (
                'state_id' => 19,
                'name' => 'Iowa',
                'short_name' => 'IA',
                'country_id' => 226,
            ),
            19 => 
            array (
                'state_id' => 20,
                'name' => 'Kansas',
                'short_name' => 'KS',
                'country_id' => 226,
            ),
            20 => 
            array (
                'state_id' => 21,
                'name' => 'Kentucky',
                'short_name' => 'KY',
                'country_id' => 226,
            ),
            21 => 
            array (
                'state_id' => 22,
                'name' => 'Louisiana',
                'short_name' => 'LA',
                'country_id' => 226,
            ),
            22 => 
            array (
                'state_id' => 23,
                'name' => 'Maine',
                'short_name' => 'ME',
                'country_id' => 226,
            ),
            23 => 
            array (
                'state_id' => 24,
                'name' => 'Marshall Islands',
                'short_name' => 'MH',
                'country_id' => 226,
            ),
            24 => 
            array (
                'state_id' => 25,
                'name' => 'Maryland',
                'short_name' => 'MD',
                'country_id' => 226,
            ),
            25 => 
            array (
                'state_id' => 26,
                'name' => 'Massachusetts',
                'short_name' => 'MA',
                'country_id' => 226,
            ),
            26 => 
            array (
                'state_id' => 27,
                'name' => 'Michigan',
                'short_name' => 'MI',
                'country_id' => 226,
            ),
            27 => 
            array (
                'state_id' => 28,
                'name' => 'Minnesota',
                'short_name' => 'MN',
                'country_id' => 226,
            ),
            28 => 
            array (
                'state_id' => 29,
                'name' => 'Mississippi',
                'short_name' => 'MS',
                'country_id' => 226,
            ),
            29 => 
            array (
                'state_id' => 30,
                'name' => 'Missouri',
                'short_name' => 'MO',
                'country_id' => 226,
            ),
            30 => 
            array (
                'state_id' => 31,
                'name' => 'Montana',
                'short_name' => 'MT',
                'country_id' => 226,
            ),
            31 => 
            array (
                'state_id' => 32,
                'name' => 'Nebraska',
                'short_name' => 'NE',
                'country_id' => 226,
            ),
            32 => 
            array (
                'state_id' => 33,
                'name' => 'Nevada',
                'short_name' => 'NV',
                'country_id' => 226,
            ),
            33 => 
            array (
                'state_id' => 34,
                'name' => 'New Hampshire',
                'short_name' => 'NH',
                'country_id' => 226,
            ),
            34 => 
            array (
                'state_id' => 35,
                'name' => 'New Jersey',
                'short_name' => 'NJ',
                'country_id' => 226,
            ),
            35 => 
            array (
                'state_id' => 36,
                'name' => 'New Mexico',
                'short_name' => 'NM',
                'country_id' => 226,
            ),
            36 => 
            array (
                'state_id' => 37,
                'name' => 'New York',
                'short_name' => 'NY',
                'country_id' => 226,
            ),
            37 => 
            array (
                'state_id' => 38,
                'name' => 'North Carolina',
                'short_name' => 'NC',
                'country_id' => 226,
            ),
            38 => 
            array (
                'state_id' => 39,
                'name' => 'North Dakota',
                'short_name' => 'ND',
                'country_id' => 226,
            ),
            39 => 
            array (
                'state_id' => 40,
                'name' => 'Northern Mariana Islands',
                'short_name' => 'MP',
                'country_id' => 226,
            ),
            40 => 
            array (
                'state_id' => 41,
                'name' => 'Ohio',
                'short_name' => 'OH',
                'country_id' => 226,
            ),
            41 => 
            array (
                'state_id' => 42,
                'name' => 'Oklahoma',
                'short_name' => 'OK',
                'country_id' => 226,
            ),
            42 => 
            array (
                'state_id' => 43,
                'name' => 'Oregon',
                'short_name' => 'OR',
                'country_id' => 226,
            ),
            43 => 
            array (
                'state_id' => 44,
                'name' => 'Palau',
                'short_name' => 'PW',
                'country_id' => 226,
            ),
            44 => 
            array (
                'state_id' => 45,
                'name' => 'Pennsylvania',
                'short_name' => 'PA',
                'country_id' => 226,
            ),
            45 => 
            array (
                'state_id' => 46,
                'name' => 'Puerto Rico',
                'short_name' => 'PR',
                'country_id' => 226,
            ),
            46 => 
            array (
                'state_id' => 47,
                'name' => 'Rhode Island',
                'short_name' => 'RI',
                'country_id' => 226,
            ),
            47 => 
            array (
                'state_id' => 48,
                'name' => 'South Carolina',
                'short_name' => 'SC',
                'country_id' => 226,
            ),
            48 => 
            array (
                'state_id' => 49,
                'name' => 'South Dakota',
                'short_name' => 'SD',
                'country_id' => 226,
            ),
            49 => 
            array (
                'state_id' => 50,
                'name' => 'Tennessee',
                'short_name' => 'TN',
                'country_id' => 226,
            ),
            50 => 
            array (
                'state_id' => 51,
                'name' => 'Texas',
                'short_name' => 'TX',
                'country_id' => 226,
            ),
            51 => 
            array (
                'state_id' => 52,
                'name' => 'Utah',
                'short_name' => 'UT',
                'country_id' => 226,
            ),
            52 => 
            array (
                'state_id' => 53,
                'name' => 'Vermont',
                'short_name' => 'VT',
                'country_id' => 226,
            ),
            53 => 
            array (
                'state_id' => 54,
                'name' => 'Virgin Islands',
                'short_name' => 'VI',
                'country_id' => 226,
            ),
            54 => 
            array (
                'state_id' => 55,
                'name' => 'Virginia',
                'short_name' => 'VA',
                'country_id' => 226,
            ),
            55 => 
            array (
                'state_id' => 56,
                'name' => 'Washington',
                'short_name' => 'WA',
                'country_id' => 226,
            ),
            56 => 
            array (
                'state_id' => 57,
                'name' => 'West Virginia',
                'short_name' => 'WV',
                'country_id' => 226,
            ),
            57 => 
            array (
                'state_id' => 58,
                'name' => 'Wisconsin',
                'short_name' => 'WI',
                'country_id' => 226,
            ),
            58 => 
            array (
                'state_id' => 59,
                'name' => 'Wyoming',
                'short_name' => 'WY',
                'country_id' => 226,
            ),
            59 => 
            array (
                'state_id' => 60,
                'name' => '[Nation Wide]',
                'short_name' => 'nostate',
                'country_id' => 38,
            ),
            60 => 
            array (
                'state_id' => 61,
                'name' => 'Alberta',
                'short_name' => 'AB',
                'country_id' => 38,
            ),
            61 => 
            array (
                'state_id' => 62,
                'name' => 'British Columbia',
                'short_name' => 'BC',
                'country_id' => 38,
            ),
            62 => 
            array (
                'state_id' => 63,
                'name' => 'Manitoba',
                'short_name' => 'MB',
                'country_id' => 38,
            ),
            63 => 
            array (
                'state_id' => 64,
                'name' => 'New Brunswick',
                'short_name' => 'NB',
                'country_id' => 38,
            ),
            64 => 
            array (
                'state_id' => 65,
                'name' => 'Newfoundland and Labrador',
                'short_name' => 'NL',
                'country_id' => 38,
            ),
            65 => 
            array (
                'state_id' => 66,
                'name' => 'Northwest Territories',
                'short_name' => 'NT',
                'country_id' => 38,
            ),
            66 => 
            array (
                'state_id' => 67,
                'name' => 'Nova Scotia',
                'short_name' => 'NS',
                'country_id' => 38,
            ),
            67 => 
            array (
                'state_id' => 68,
                'name' => 'Nunavut',
                'short_name' => 'NU',
                'country_id' => 38,
            ),
            68 => 
            array (
                'state_id' => 69,
                'name' => 'Ontario',
                'short_name' => 'ON',
                'country_id' => 38,
            ),
            69 => 
            array (
                'state_id' => 70,
                'name' => 'Prince Edward Island',
                'short_name' => 'PE',
                'country_id' => 38,
            ),
            70 => 
            array (
                'state_id' => 71,
                'name' => 'Quebec',
                'short_name' => 'QC',
                'country_id' => 38,
            ),
            71 => 
            array (
                'state_id' => 72,
                'name' => 'Saskatchewan',
                'short_name' => 'SK',
                'country_id' => 38,
            ),
            72 => 
            array (
                'state_id' => 73,
                'name' => 'Yukon Territory',
                'short_name' => 'YT',
                'country_id' => 38,
            ),
            73 => 
            array (
                'state_id' => 75,
                'name' => 'Andaman and Nicobar Islands',
                'short_name' => 'AN',
                'country_id' => 98,
            ),
            74 => 
            array (
                'state_id' => 76,
                'name' => 'Andhra Pradesh',
                'short_name' => 'AP',
                'country_id' => 98,
            ),
            75 => 
            array (
                'state_id' => 77,
                'name' => 'Arunachal Pradesh',
                'short_name' => 'AR',
                'country_id' => 98,
            ),
            76 => 
            array (
                'state_id' => 78,
                'name' => 'Assam',
                'short_name' => 'AS',
                'country_id' => 98,
            ),
            77 => 
            array (
                'state_id' => 79,
                'name' => 'Bihar',
                'short_name' => 'BR',
                'country_id' => 98,
            ),
            78 => 
            array (
                'state_id' => 80,
                'name' => 'Chandigarh',
                'short_name' => 'CH',
                'country_id' => 98,
            ),
            79 => 
            array (
                'state_id' => 81,
                'name' => 'Chhattisgarh',
                'short_name' => 'CT',
                'country_id' => 98,
            ),
            80 => 
            array (
                'state_id' => 82,
                'name' => 'Dadra and Nagar Haveli',
                'short_name' => 'DN',
                'country_id' => 98,
            ),
            81 => 
            array (
                'state_id' => 83,
                'name' => 'Daman and Diu',
                'short_name' => 'DD',
                'country_id' => 98,
            ),
            82 => 
            array (
                'state_id' => 84,
                'name' => 'Delhi',
                'short_name' => 'DL',
                'country_id' => 98,
            ),
            83 => 
            array (
                'state_id' => 85,
                'name' => 'Goa',
                'short_name' => 'GA',
                'country_id' => 98,
            ),
            84 => 
            array (
                'state_id' => 86,
                'name' => 'Gujarat',
                'short_name' => 'GJ',
                'country_id' => 98,
            ),
            85 => 
            array (
                'state_id' => 87,
                'name' => 'Haryana',
                'short_name' => 'HR',
                'country_id' => 98,
            ),
            86 => 
            array (
                'state_id' => 88,
                'name' => 'Himachal Pradesh',
                'short_name' => 'HP',
                'country_id' => 98,
            ),
            87 => 
            array (
                'state_id' => 89,
                'name' => 'Jammu and Kashmir',
                'short_name' => 'JK',
                'country_id' => 98,
            ),
            88 => 
            array (
                'state_id' => 90,
                'name' => 'Jharkhand',
                'short_name' => 'JH',
                'country_id' => 98,
            ),
            89 => 
            array (
                'state_id' => 91,
                'name' => 'Karnataka',
                'short_name' => 'KA',
                'country_id' => 98,
            ),
            90 => 
            array (
                'state_id' => 92,
                'name' => 'Kerala',
                'short_name' => 'KL',
                'country_id' => 98,
            ),
            91 => 
            array (
                'state_id' => 93,
                'name' => 'Lakshadweep',
                'short_name' => 'LD',
                'country_id' => 98,
            ),
            92 => 
            array (
                'state_id' => 94,
                'name' => 'Madhya Pradesh',
                'short_name' => 'MP',
                'country_id' => 98,
            ),
            93 => 
            array (
                'state_id' => 95,
                'name' => 'Maharashtra',
                'short_name' => 'MH',
                'country_id' => 98,
            ),
            94 => 
            array (
                'state_id' => 96,
                'name' => 'Manipur',
                'short_name' => 'MN',
                'country_id' => 98,
            ),
            95 => 
            array (
                'state_id' => 97,
                'name' => 'Meghalaya',
                'short_name' => 'ML',
                'country_id' => 98,
            ),
            96 => 
            array (
                'state_id' => 98,
                'name' => 'Mizoram',
                'short_name' => 'MZ',
                'country_id' => 98,
            ),
            97 => 
            array (
                'state_id' => 99,
                'name' => 'Nagaland',
                'short_name' => 'NL',
                'country_id' => 98,
            ),
            98 => 
            array (
                'state_id' => 100,
                'name' => 'Odisha',
                'short_name' => 'OR',
                'country_id' => 98,
            ),
            99 => 
            array (
                'state_id' => 101,
                'name' => 'Puducherry',
                'short_name' => 'PY',
                'country_id' => 98,
            ),
            100 => 
            array (
                'state_id' => 102,
                'name' => 'Punjab',
                'short_name' => 'PB',
                'country_id' => 98,
            ),
            101 => 
            array (
                'state_id' => 103,
                'name' => 'Rajasthan',
                'short_name' => 'RJ',
                'country_id' => 98,
            ),
            102 => 
            array (
                'state_id' => 104,
                'name' => 'Sikkim',
                'short_name' => 'SK',
                'country_id' => 98,
            ),
            103 => 
            array (
                'state_id' => 105,
                'name' => 'Tamil Nadu',
                'short_name' => 'TN',
                'country_id' => 98,
            ),
            104 => 
            array (
                'state_id' => 106,
                'name' => 'Telangana',
                'short_name' => 'TG',
                'country_id' => 98,
            ),
            105 => 
            array (
                'state_id' => 107,
                'name' => 'Tripura',
                'short_name' => 'TR',
                'country_id' => 98,
            ),
            106 => 
            array (
                'state_id' => 108,
                'name' => 'Uttar Pradesh',
                'short_name' => 'UP',
                'country_id' => 98,
            ),
            107 => 
            array (
                'state_id' => 109,
                'name' => 'Uttarakhand',
                'short_name' => 'UT',
                'country_id' => 98,
            ),
            108 => 
            array (
                'state_id' => 110,
                'name' => 'West Bengal',
                'short_name' => 'WB',
                'country_id' => 98,
            ),
        ));
        
        
    }
}