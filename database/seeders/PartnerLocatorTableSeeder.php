<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PartnerLocatorTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('partner_locator')->delete();
        
        \DB::table('partner_locator')->insert(array (
            0 => 
            array (
                'id' => 1,
                'company' => 'Napole IT',
                'status' => 'Preferred Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-reseller-preferred.png',
                'address' => '8223 Molson Way, Liverpool, New York, United States, 13090',
                'website' => 'https://example1.com',
            'phone' => '+777(315) 727-0303',
                'countries_covered' => '["US"]',
                'states_covered' => '["NY"]',
            ),
            1 => 
            array (
                'id' => 2,
                'company' => '123 srl',
                'status' => 'MSP Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-managed-service-provider-new.png',
            'address' => 'Viale dell’Industria, 50,Jesi (AN), Italy, 60035',
                'website' => 'https://example2.com',
                'phone' => '+739 0731 288064',
                'countries_covered' => '["IT"]',
                'states_covered' => '[""]',
            ),
            2 => 
            array (
                'id' => 3,
                'company' => 'Entioatsing Inc',
                'status' => 'MSP Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-managed-service-provider-new.png',
                'address' => '10251 Trademark St Unit A, Rancho Cucamonga, California, United States, 91730',
                'website' => 'https://example3.com',
                'phone' => '+777 909-257-7270',
                'countries_covered' => '["US"]',
                'states_covered' => '["CA"]',
            ),
            3 => 
            array (
                'id' => 4,
                'company' => 'WeVlan',
                'status' => 'MSP Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-managed-service-provider-new.png',
            'address' => 'Via Ungaretti, 33, Montecorvino Pugliano (Sa), Italy, 84090',
                'website' => 'https://example1.com',
                'phone' => '+7 7828 1776820',
                'countries_covered' => '["IT"]',
                'states_covered' => '[""]',
            ),
            4 => 
            array (
                'id' => 5,
                'company' => 'ABA-IT',
                'status' => 'Premium Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-reseller-premium.png',
                'address' => '112 Bureaux de la Colline, Saint Cloud Cedex, France, 92213',
                'website' => 'https://example.com',
                'phone' => '+33 1 84 76 00 60',
                'countries_covered' => '["FR"]',
                'states_covered' => '[""]',
            ),
            5 => 
            array (
                'id' => 6,
                'company' => 'Sync',
                'status' => 'Preferred Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-reseller-preferred.png',
                'address' => 'Houston, Texas, United States',
                'website' => 'https://example2.com',
            'phone' => '(713) 299-5999',
                'countries_covered' => '["US"]',
                'states_covered' => '["IL","NY","TX"]',
            ),
            6 => 
            array (
                'id' => 7,
                'company' => 'LLP',
                'status' => 'Premium Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-reseller-premium.png',
                'address' => '107-111 Fleet Street, London, United Kingdom, EC4A 2AB',
                'website' => 'https://example.com',
                'phone' => '+0773 111005',
                'countries_covered' => '["GB"]',
                'states_covered' => '[""]',
            ),
            7 => 
            array (
                'id' => 8,
                'company' => 'BARTEA',
                'status' => 'Premium Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-reseller-premium.png',
                'address' => '58 RUE JEAN DUVERT, BLANQUEFORT, France, 33290',
                'website' => 'https://example3.com',
                'phone' => '+33 5 24 07 99 99',
                'countries_covered' => '["FR"]',
                'states_covered' => '[""]',
            ),
            8 => 
            array (
                'id' => 9,
                'company' => 'ITZafy',
                'status' => 'Preferred Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-reseller-preferred.png',
                'address' => '313 S Rohlwing Road, Addison, Illinois, United States, 60101',
                'website' => 'https://example.com',
            'phone' => '+77(630) 396-6300',
                'countries_covered' => '["US"]',
                'states_covered' => '["IL"]',
            ),
            9 => 
            array (
                'id' => 10,
                'company' => 'LELAYE55',
                'status' => 'Premium Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-reseller-premium.png',
                'address' => 'Avenida Dom Joao Segundo, Lote 42, Escritorio 602, Lisboa, Portugal, 1990-095',
                'website' => 'https://example1.com',
                'phone' => '+771218248480',
                'countries_covered' => '["PT"]',
                'states_covered' => '[""]',
            ),
            10 => 
            array (
                'id' => 11,
                'company' => 'Caribbean Products',
                'status' => 'MSP Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-managed-service-provider-new.png',
                'address' => 'P.O. Box 10015, Grand Cayman, Cayman Islands, KY1-1001',
                'website' => 'https://example.com',
            'phone' => '+99(345) 916-2401',
                'countries_covered' => '["AW","KY","GD","JM","TT"]',
                'states_covered' => '[""]',
            ),
            11 => 
            array (
                'id' => 12,
                'company' => 'Professional software',
                'status' => 'MSP Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-managed-service-provider-new.png',
            'address' => 'Via Roma, 39, Campodarsego (PD), Italy, 35011',
                'website' => 'https://example.com',
                'phone' => '+7799657098',
                'countries_covered' => '["IT"]',
                'states_covered' => '[""]',
            ),
            12 => 
            array (
                'id' => 13,
                'company' => 'Segreguards GmbH',
                'status' => 'MSP Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-managed-service-provider-new.png',
                'address' => 'Marktstrasse 10, Vallendar, Germany, 56179',
                'website' => 'https://example2.com',
                'phone' => '+77 960 986 00',
                'countries_covered' => '["DE"]',
                'states_covered' => '[""]',
            ),
            13 => 
            array (
                'id' => 14,
                'company' => 'SHUSDEC',
                'status' => 'Preferred Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-reseller-preferred.png',
                'address' => 'ul. Bociana 22A, Krakow, Poland, 31-231',
                'website' => 'https://example.com',
            'phone' => '(812)481235091',
                'countries_covered' => '["PL"]',
                'states_covered' => '[""]',
            ),
            14 => 
            array (
                'id' => 15,
                'company' => 'Local PC Ltd',
                'status' => 'Preferred Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-reseller-preferred.png',
                'address' => 'Unit 7 / 950 Ferry Road, Christchurch, New Zealand, 8023',
                'website' => 'https://example3.com',
                'phone' => '+123 03 961 7286',
                'countries_covered' => '["NZ"]',
                'states_covered' => '[""]',
            ),
            15 => 
            array (
                'id' => 16,
                'company' => 'Software & Services',
                'status' => 'Distributor',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-distributor-new.png',
                'address' => 'Awans, Belgium',
                'website' => 'https://example2.com',
            'phone' => '+7 (322) 204-0266',
                'countries_covered' => '["BE"]',
                'states_covered' => '[""]',
            ),
            16 => 
            array (
                'id' => 17,
                'company' => 'Electron',
                'status' => 'MSP Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-managed-service-provider-new.png',
                'address' => '38251 S Groesbeck Hwy, Clinton Township,Michigan, United States, 48036',
                'website' => 'https://example1.com',
            'phone' => '+1 (146) 757-1200 x5105',
                'countries_covered' => '["US"]',
                'states_covered' => '["MI"]',
            ),
            17 => 
            array (
                'id' => 18,
                'company' => 'ICCD prods',
                'status' => 'Distributor',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-distributor-new.png',
                'address' => '5694 Mission Center Road, Ste 602, San Diego, California, United States, 92108',
                'website' => 'https://example.com',
            'phone' => '+77 (858) 618-3870',
                'countries_covered' => '["US"]',
                'states_covered' => '["CA"]',
            ),
            18 => 
            array (
                'id' => 19,
                'company' => 'COMMAS-Techline',
                'status' => 'Elite Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-reseller-elite.png',
                'address' => 'ул. Яшина, д. 40, Хабаровск, Russian Federation',
                'website' => 'https://example.com',
            'phone' => '+7 (4212) 99-46-99',
                'countries_covered' => '["RU"]',
                'states_covered' => '[""]',
            ),
            19 => 
            array (
                'id' => 20,
                'company' => 'XIREL BG Ltd.',
                'status' => 'Distributor',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-distributor-new.png',
                'address' => '1712 , Mladost 3, bl. 306, ent.2, Sofia, Bulgaria',
                'website' => 'https://example3.com',
                'phone' => '+777888329043',
                'countries_covered' => '["BG"]',
                'states_covered' => '[""]',
            ),
            20 => 
            array (
                'id' => 21,
                'company' => 'Seretyus',
                'status' => 'MSP Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-managed-service-provider-new.png',
                'address' => '760 NE Hazel Dell Ave, Vancouver, United States',
                'website' => 'https://example2.com',
                'phone' => '+7772183883',
                'countries_covered' => '["US"]',
                'states_covered' => '["CA","WA"]',
            ),
            21 => 
            array (
                'id' => 22,
                'company' => 'Dimension Values',
                'status' => 'MSP Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-managed-service-provider-new.png',
                'address' => 'Bryanston, Botswana',
                'website' => 'https://example1.com',
                'phone' => '+1236772510387',
                'countries_covered' => '["BW"]',
                'states_covered' => '[""]',
            ),
            22 => 
            array (
                'id' => 23,
                'company' => 'DAD d.o.o.',
                'status' => 'Premium Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-reseller-premium.png',
                'address' => 'Tbilisijska 85, Ljubljana, Slovenia',
                'website' => 'https://example.com',
                'phone' => '+98744790011',
                'countries_covered' => '["SI"]',
                'states_covered' => '[""]',
            ),
            23 => 
            array (
                'id' => 24,
                'company' => 'KINSST',
                'status' => 'Distributor',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-distributor-new.png',
                'address' => '17503 Burbank Blvd, Encino, United States',
                'website' => 'https://example3.com',
                'phone' => '+7 855-4482178',
                'countries_covered' => '["US"]',
                'states_covered' => '["CA"]',
            ),
            24 => 
            array (
                'id' => 25,
                'company' => 'Communications Russia',
                'status' => 'Distributor',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-distributor-new.png',
                'address' => 'Трехпрудный пер., д. 9, стр. 2, БЦ Трехпрудный, оф. 303-305, Москва, Russian Federation',
                'website' => 'https://example.com',
            'phone' => '+7 (312) 664-23-56',
                'countries_covered' => '["RU"]',
                'states_covered' => '[""]',
            ),
            25 => 
            array (
                'id' => 26,
                'company' => 'Service Srl',
                'status' => 'MSP Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-managed-service-provider-new.png',
                'address' => 'Italy, 50145',
                'website' => 'https://example2.com',
                'phone' => '+77 5155095',
                'countries_covered' => '["IT"]',
                'states_covered' => '[""]',
            ),
            26 => 
            array (
                'id' => 27,
                'company' => 'Derersedia',
                'status' => 'Elite Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-reseller-elite.png',
                'address' => 'France',
                'website' => 'https://example3.com',
                'phone' => '+77632908453',
                'countries_covered' => '["FR"]',
                'states_covered' => '[""]',
            ),
            27 => 
            array (
                'id' => 28,
                'company' => 'Guringer GmbH',
                'status' => 'Elite Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-reseller-elite.png',
                'address' => 'Schulhausstrasse, Switzerland',
                'website' => 'https://example.com',
            'phone' => '+7 (0)43 843 23 45',
                'countries_covered' => '["CH"]',
                'states_covered' => '[""]',
            ),
            28 => 
            array (
                'id' => 29,
                'company' => 'HeavyMesh',
                'status' => 'Distributor',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-distributor-new.png',
                'address' => '20 Camden St, Suite 200, Toronto, Ontario, Canada',
                'website' => 'https://example1.com',
            'phone' => '(995) 64789675',
                'countries_covered' => '["CA"]',
                'states_covered' => '["ON"]',
            ),
            29 => 
            array (
                'id' => 30,
                'company' => 'ABCSoft Voronezh',
                'status' => 'Distributor',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-distributor-new.png',
                'address' => 'ул. Кривошеина, 9, Воронеж, Russian Federation',
                'website' => 'https://example.com',
            'phone' => '+7 (812) 239-30-50',
                'countries_covered' => '["RU"]',
                'states_covered' => '[""]',
            ),
            30 => 
            array (
                'id' => 31,
                'company' => 'Wise Srl',
                'status' => 'Elite Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-reseller-elite.png',
                'address' => 'Via della Borsa, 1/a, Castelfranco Veneto, Italy, 31033',
                'website' => 'https://example.com',
                'phone' => '+777423723453',
                'countries_covered' => '["IT"]',
                'states_covered' => '[""]',
            ),
            31 => 
            array (
                'id' => 32,
                'company' => 'Development Point',
                'status' => 'Distributor',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-distributor-new.png',
                'address' => '17 Avenida 19-70 Zona 10 Edificio Torino, Nivel 12 Oficina 1207, Guatemala City, Guatemala',
                'website' => 'https://example2.com',
                'phone' => '+456-2458-4288',
                'countries_covered' => '["CR","GT"]',
                'states_covered' => '[""]',
            ),
            32 => 
            array (
                'id' => 33,
                'company' => 'Pushton Technology',
                'status' => 'MSP Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-managed-service-provider-new.png',
                'address' => '23625 Commerce Park, #130, Beachwood, United States',
                'website' => 'https://example3.com',
            'phone' => '+7 (216) 223-7016',
                'countries_covered' => '["US"]',
                'states_covered' => '["OH"]',
            ),
            33 => 
            array (
                'id' => 34,
                'company' => 'SQLSS',
                'status' => 'Preferred Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-reseller-preferred.png',
                'address' => 'Unit 15 Pavillion Business Park, Leeds, United Kingdom',
                'website' => 'https://example.com',
                'phone' => '+0345 459 1995',
                'countries_covered' => '["GB"]',
                'states_covered' => '[""]',
            ),
            34 => 
            array (
                'id' => 35,
                'company' => 'Xirel High',
                'status' => 'Preferred Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-reseller-preferred.png',
                'address' => 'Mladost 1, bl. 54, Sofia, Bulgaria',
                'website' => 'https://example1.com',
                'phone' => '+77 3396763',
                'countries_covered' => '["BG"]',
                'states_covered' => '[""]',
            ),
            35 => 
            array (
                'id' => 36,
                'company' => '4B Tech, PT.',
                'status' => 'Elite Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-reseller-elite.png',
                'address' => 'Jl. Engku Putri, Komp. Ruko Purimas, blok A-7, Batam Center, Kepri-29400, Indonesia',
                'website' => 'https://example3.com',
                'phone' => '+777127033322',
                'countries_covered' => '["ID","SG"]',
                'states_covered' => '[""]',
            ),
            36 => 
            array (
                'id' => 37,
                'company' => 'Checkpoint',
                'status' => 'Preferred Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-reseller-preferred.png',
                'address' => '4120 Rio Bravo Suite 215, El Paso, United States',
                'website' => 'https://example2.com',
            'phone' => '(915)-581-9999',
                'countries_covered' => '["US"]',
                'states_covered' => '["TX"]',
            ),
            37 => 
            array (
                'id' => 38,
                'company' => 'MMMD Srl',
                'status' => 'Preferred Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-reseller-preferred.png',
                'address' => 'Via P. Borsellino 2, Reggio Emilia, Italy',
                'website' => 'https://example1.com',
                'phone' => '+1366646046',
                'countries_covered' => '["IT"]',
                'states_covered' => '[""]',
            ),
            38 => 
            array (
                'id' => 39,
                'company' => 'Security Chile',
                'status' => 'Preferred Partner',
                'logo' => 'https://img.netwrix.com/partner_logos/standard-logo-reseller-preferred.png',
                'address' => 'Lavalle 1675, piso 4 oficina 5, Buenos Aires, Argentina',
                'website' => 'https://example1.com',
                'phone' => '+54 11 5039999',
                'countries_covered' => '["AR"]',
                'states_covered' => '[""]',
            ),
        ));
        
        
    }
}