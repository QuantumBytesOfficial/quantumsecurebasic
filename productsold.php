<?php
// Complete eSSL Product Categories and Models (Full Lineup)
$categories = [
    'Fingerprint' => ['X990', 'iClock990', 'F18', 'F22+ID+WIFI', 'SF100', 'K30PRO', 'FR1200', 'X7', 'P160', 'WL20', 'UA300', 'U460', 'MA500', 'iClock360', 'F6', 'E9C Wi-Fi', 'K90 PRO', 'K21 PRO'],
    'Face Recognition' => ['AIFACE-ORCUS', 'AIFACE-ARION', 'AIFACE-MAGNUM', 'AIFACE-MAGNUM-LITE', 'AI-FACE VENUS', 'AI-FACE MARS', 'AI-FACE MARS+HID', 'AIFACE ERIS', 'AI-FACE PLUTO', 'AI-FACE MERCURY', 'AI-FACE NEPTUNE', 'AI-FACE URANUS', 'AI-FACE-JUPITER', 'EFACE990', 'UFACE302', 'MB160', 'MB20', 'UFACE301', 'SFACE900', 'EYEFACE-99'],
    'Access Control' => ['C3-100', 'C3-200', 'C3-400', 'INBIO260', 'INBIO460', 'EC10-EC16', 'ESSL-ACCESS-8002', 'ESSL-ACCESS-8004', 'EC-20M-EC-20K'],
    'RFID Systems' => ['KR500', 'KR503', 'RFID Cards', 'Proximity Cards', 'Mifare Cards', 'HID Prox Cards'],
    'Door Controllers' => ['Multi Door Controller 2', 'Multi Door Controller 4', 'Single Door Controller', 'Wiegand Controller']
];

// Complete Products Database - All eSSL Products with Real Specifications
$products = [
    1 => [
        'id' => 1,
        'name' => 'eSSL X990 Fingerprint Time Attendance',
        'category' => 'Fingerprint',
        'model' => 'X990',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/x990/x990.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/x990/X990Catalog.pdf',
        'video' => 'https://www.youtube.com/embed/8IxyAYBCRi8?si=m4N0_Ub_olP0VdIE', // Replace with actual video link
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/X990connectiondiagram.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/X990_usermanual.pdf',
        'original_price' => 18500,
        'discounted_price' => 11000,
        'discount' => 41,
        'description' => 'Advanced fingerprint time attendance and access control terminal with 3" Color TFT display. Features 10,000 fingerprint capacity, 100,000 transaction storage, 500 DPI optical sensor.',
        'specifications' => [
            'Fingerprint Capacity' => '10,000 templates',
            'Transaction Capacity' => '100,000 logs',
            'Card Capacity' => '10,000 cards',
            'Display' => '3" Color TFT',
            'Sensor' => '500 DPI Optical sensor',
            'Communication' => 'TCP/IP, USB, RS485',
            'Power Supply' => 'DC 12V - 1.5Amp',
            'Dimensions' => '210 x 157 x 40 mm'
        ],
        'keywords' => 'X990, fingerprint, biometric, attendance, access control, 10000 templates'
    ],
    2 => [
        'id' => 2,
        'name' => 'eSSL iClock990 Professional Biometric Device',
        'category' => 'Fingerprint',
        'model' => 'iClock990',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=eSSL+iClock990',
        'original_price' => 25000,
        'discounted_price' => 18500,
        'discount' => 26,
        'description' => 'Professional biometric device with 40,000 fingerprint capacity and 800,000 transaction storage. Features 3.5" color TFT display with advanced push data technology.',
        'specifications' => [
            'User Capacity' => '40,000 users',
            'Fingerprint Capacity' => '40,000 templates',
            'Transaction Capacity' => '800,000 logs',
            'Display' => '3.5" color TFT',
            'Sensor' => '500 DPI Optical sensor',
            'Communication' => 'TCP/IP, USB',
            'Power Supply' => 'DC 12V - 3Amp'
        ],
        'keywords' => 'iClock990, biometric, professional, 40000 capacity, push data'
    ],
    3 => [
        'id' => 3,
        'name' => 'eSSL F18 Fingerprint Access Control System',
        'category' => 'Fingerprint',
        'model' => 'F18',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=eSSL+F18',
        'original_price' => 11328,
        'discounted_price' => 8500,
        'discount' => 25,
        'description' => 'Innovative biometric fingerprint reader for access control applications with TFT LCD display. Offers unparalleled performance using advanced algorithm.',
        'specifications' => [
            'User Capacity' => '3,000 fingerprints',
            'Transaction Storage' => '100,000 logs',
            'Sensor' => '500 DPI Optical Sensor',
            'Display' => 'TFT LCD Display',
            'CPU' => '32-bit Microprocessor',
            'Communication' => 'TCP/IP, RS485, USB-host',
            'Power Supply' => 'DC 12V - 1.5A'
        ],
        'keywords' => 'F18, fingerprint scanner, access control, TFT display'
    ],
    4 => [
        'id' => 4,
        'name' => 'eSSL F22+ID+WIFI Ultra-thin Attendance System',
        'category' => 'Fingerprint',
        'model' => 'F22+ID+WIFI',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=eSSL+F22+WIFI',
        'original_price' => 12000,
        'discounted_price' => 8500,
        'discount' => 29,
        'description' => 'Ultra-thin WiFi enabled fingerprint time attendance system with 2.8" TFT color screen. Features built-in WiFi and push data technology.',
        'specifications' => [
            'Fingerprint Capacity' => '3,000 templates',
            'Card Capacity' => '5,000 cards',
            'Record Capacity' => '30,000 logs',
            'Display' => '2.8" TFT color screen',
            'Communication' => 'TCP/IP, USB, Built-in Wi-Fi',
            'Power Supply' => 'DC 12V - 1.5Amp',
            'Dimensions' => '158.5 x 78.0 x 19.4 mm'
        ],
        'keywords' => 'F22, WiFi, fingerprint, ultra-thin, wireless'
    ],
    5 => [
        'id' => 5,
        'name' => 'eSSL SF100 Identix Series Biometric System',
        'category' => 'Fingerprint',
        'model' => 'SF100',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=eSSL+SF100',
        'original_price' => 8500,
        'discounted_price' => 6500,
        'discount' => 24,
        'description' => 'Compact professional access control with attendance system featuring 2.8" Color TFT display. Smallest professional access control device.',
        'specifications' => [
            'Fingerprint Templates' => '1,500',
            'Transaction Storage' => '80,000 logs',
            'Card Capacity' => '5,000 cards',
            'Display' => '2.8" Color TFT',
            'Communication' => 'USB-host, TCP/IP, RS485',
            'Power Supply' => '12V DC, 1.5 Amps',
            'Dimensions' => '90 x 90 x 34.5 mm'
        ],
        'keywords' => 'SF100, Identix, compact, biometric, access control'
    ],
    6 => [
        'id' => 6,
        'name' => 'eSSL K30 PRO Identix Biometric Machine',
        'category' => 'Fingerprint',
        'model' => 'K30PRO',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=K30+PRO',
        'original_price' => 9500,
        'discounted_price' => 6999,
        'discount' => 26,
        'description' => 'Compact biometric attendance machine from Identix series with fingerprint recognition. Ideal for small offices with easy installation.',
        'specifications' => [
            'Fingerprint Capacity' => '3,000 templates',
            'Transaction Storage' => '100,000 logs',
            'Display' => 'LCD display',
            'Sensor' => '500 DPI optical sensor',
            'Communication' => 'USB, TCP/IP',
            'Power Supply' => 'DC 12V',
            'CPU' => '32-bit processor'
        ],
        'keywords' => 'K30 PRO, Identix, compact, small office'
    ],
    7 => [
        'id' => 7,
        'name' => 'eSSL FR1200 Exit Reader',
        'category' => 'Fingerprint',
        'model' => 'FR1200',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=FR1200',
        'original_price' => 7500,
        'discounted_price' => 5999,
        'discount' => 20,
        'description' => 'Professional exit reader for complete access control solutions. Compatible with main controllers for comprehensive IN/OUT tracking.',
        'specifications' => [
            'Sensor' => 'Optical Sensor',
            'Communication' => 'RS 485',
            'Optional Features' => 'Prox / Mifare / HID card reader',
            'Dimensions' => '48 mm x 100 mm X 37 mm',
            'Power Supply' => 'DC 12V',
            'Compatibility' => 'Universal controller support'
        ],
        'keywords' => 'FR1200, exit reader, optical sensor, RS485'
    ],
    8 => [
        'id' => 8,
        'name' => 'eSSL X7 Access Control Biometric System',
        'category' => 'Fingerprint',
        'model' => 'X7',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=eSSL+X7',
        'original_price' => 8000,
        'discounted_price' => 6400,
        'discount' => 20,
        'description' => 'Compact fingerprint access control system with multiple verification modes. Features optical sensor and professional access control interface.',
        'specifications' => [
            'Card Capacity' => '500 cards',
            'Fingerprint Capacity' => '500 templates',
            'Password Capacity' => '8 groups',
            'Sensor' => 'Optical Sensor',
            'Algorithm Version' => 'Finger V10.0',
            'Power Supply' => '12V DC, 3A',
            'Dimensions' => '88 x 88 x 35 mm',
            'Operating Temperature' => '0°C to 40°C'
        ],
        'keywords' => 'X7, access control, multiple verification, compact'
    ],
    9 => [
        'id' => 9,
        'name' => 'eSSL P160 Palm Recognition System',
        'category' => 'Fingerprint',
        'model' => 'P160',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=eSSL+P160',
        'original_price' => 15000,
        'discounted_price' => 12000,
        'discount' => 20,
        'description' => 'Advanced palm recognition system with 2.8-inch TFT color display. Multi-biometric verification with palm, fingerprint and card support.',
        'specifications' => [
            'Display' => '2.8-inch TFT Color Display',
            'Palm Capacity' => '600 templates',
            'Fingerprint Capacity' => '3,000 templates',
            'Card Capacity' => '10,000 cards',
            'Logs Capacity' => '100,000 logs',
            'Communication' => 'TCP/IP, USB-Host',
            'Power Supply' => 'DC 12V'
        ],
        'keywords' => 'P160, palm recognition, multi-biometric, TFT display'
    ],
    10 => [
        'id' => 10,
        'name' => 'eSSL WL20 Fingerprint Time Attendance',
        'category' => 'Fingerprint',
        'model' => 'WL20',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=eSSL+WL20',
        'original_price' => 7000,
        'discounted_price' => 5600,
        'discount' => 20,
        'description' => 'Compact fingerprint attendance system with 2.8-inch TFT screen. Features advanced VX10.0 algorithm for reliable fingerprint recognition.',
        'specifications' => [
            'Fingerprint Capacity' => '1,000 templates',
            'Finger Algorithm' => 'Finger VX10.0',
            'Record Capacity' => '50,000 logs',
            'Display' => '2.8-inch TFT Screen',
            'Communication' => 'TCP/IP, USB',
            'Power Supply' => 'DC 12V'
        ],
        'keywords' => 'WL20, fingerprint attendance, VX10.0, compact'
    ],
    11 => [
        'id' => 11,
        'name' => 'eSSL UA300 Fingerprint Time Attendance System',
        'category' => 'Fingerprint',
        'model' => 'UA300',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=eSSL+UA300',
        'original_price' => 10000,
        'discounted_price' => 8000,
        'discount' => 20,
        'description' => 'Professional fingerprint time attendance system with high-performance 800 MHz processor. Features large capacity storage and optional card support.',
        'specifications' => [
            'Fingerprint Capacity' => '3000 templates',
            'Card Capacity' => '10,000 (optional)',
            'Transaction Capacity' => '100,000 logs',
            'CPU' => '800 MHz processor',
            'Communication' => 'TCP/IP, USB-Host',
            'Power Supply' => 'DC 12V'
        ],
        'keywords' => 'UA300, fingerprint attendance, 800MHz, high performance'
    ],
    12 => [
        'id' => 12,
        'name' => 'eSSL U460 Fingerprint Time Attendance System',
        'category' => 'Fingerprint',
        'model' => 'U460',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=eSSL+U460',
        'original_price' => 9000,
        'discounted_price' => 7200,
        'discount' => 20,
        'description' => 'Advanced fingerprint time attendance and access control system with 32-bit 400MHz CPU. Professional grade biometric solution.',
        'specifications' => [
            'Users' => '2,200 Fingerprints',
            'Transactions' => '50,000 Logs',
            'CPU' => '32bit Microprocessor 400MHz',
            'Sensor' => '500 DPI Optical Sensor',
            'Communication' => 'TCP/IP, USB-Host',
            'Power Supply' => 'DC 12V'
        ],
        'keywords' => 'U460, fingerprint attendance, 400MHz CPU, professional'
    ],
    13 => [
        'id' => 13,
        'name' => 'eSSL MA500 Outdoor Fingerprint System',
        'category' => 'Fingerprint',
        'model' => 'MA500',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=eSSL+MA500',
        'original_price' => 12000,
        'discounted_price' => 9600,
        'discount' => 20,
        'description' => 'Vandal resistant & IP65 waterproof fingerprint system, ideal for outdoor installation. Features dual biometric authentication with protective cover.',
        'specifications' => [
            'Users' => '3000 Fingerprints',
            'Card Capacity' => '30,000 cards',
            'Transaction' => '100,000 Logs',
            'Sensor' => 'Optical Sensor with protective cover',
            'IP Rating' => 'IP65 waterproof',
            'Installation' => 'Outdoor installation ready'
        ],
        'keywords' => 'MA500, outdoor, IP65 waterproof, vandal resistant'
    ],
    14 => [
        'id' => 14,
        'name' => 'eSSL iClock360 Fingerprint Device',
        'category' => 'Fingerprint',
        'model' => 'iClock360',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=iClock360',
        'original_price' => 15000,
        'discounted_price' => 12000,
        'discount' => 20,
        'description' => 'Professional fingerprint device supporting 8000 users with 200,000 transaction logs. Features optical sensor and advanced algorithm.',
        'specifications' => [
            'Users' => '8000 Fingerprints',
            'Transactions' => '200,000 Logs',
            'Sensor' => 'Optical Sensor',
            'Algorithm' => 'Finger 10.0 Version',
            'Weight' => '1.05 kg',
            'Communication' => 'TCP/IP, USB'
        ],
        'keywords' => 'iClock360, 8000 users, optical sensor, professional'
    ],
    15 => [
        'id' => 15,
        'name' => 'eSSL F6 Fingerprint Attendance Machine',
        'category' => 'Fingerprint',
        'model' => 'F6',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=eSSL+F6',
        'original_price' => 8500,
        'discounted_price' => 6800,
        'discount' => 20,
        'description' => 'Entry-level fingerprint attendance machine perfect for small businesses. Simple operation with essential attendance tracking features.',
        'specifications' => [
            'Fingerprint Capacity' => '500 templates',
            'Transaction Capacity' => '30,000 logs',
            'Communication' => 'RS485, SD Card',
            'Sensor' => '500 DPI Optical Sensor',
            'Access Control Interface' => '3rd Party Electric Lock',
            'Power Supply' => 'DC 12V'
        ],
        'keywords' => 'F6, entry-level, small business, simple operation'
    ],
    16 => [
        'id' => 16,
        'name' => 'eSSL E9C Wi-Fi Fingerprint Time Attendance',
        'category' => 'Fingerprint',
        'model' => 'E9C Wi-Fi',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=E9C+WiFi',
        'original_price' => 11000,
        'discounted_price' => 8800,
        'discount' => 20,
        'description' => 'WiFi-enabled fingerprint time attendance system with high user capacity. Features wireless connectivity and professional performance.',
        'specifications' => [
            'User Capacity' => '10,000 users',
            'Fingerprint Capacity' => '3,000 templates',
            'Card Capacity' => '10,000 cards',
            'Transactions Capacity' => '100,000 logs',
            'Sensor' => '500 DPI Optical sensor',
            'Communication' => 'WiFi, TCP/IP, USB'
        ],
        'keywords' => 'E9C, WiFi, wireless, high capacity'
    ],
    17 => [
        'id' => 17,
        'name' => 'eSSL K90 PRO Identix Time Attendance',
        'category' => 'Fingerprint',
        'model' => 'K90 PRO',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=K90+PRO',
        'original_price' => 8000,
        'discounted_price' => 6400,
        'discount' => 20,
        'description' => 'Professional time attendance system with 800 fingerprint capacity. Features inbuilt battery backup and access control support.',
        'specifications' => [
            'Fingerprints Capacity' => '800 templates',
            'Card Capacity' => '800 cards',
            'Transaction Storage' => '80,000 logs',
            'Push Data' => 'Yes',
            'Battery Backup' => 'Inbuilt',
            'Communication' => 'TCP/IP, USB'
        ],
        'keywords' => 'K90 PRO, Identix, battery backup, professional'
    ],
    18 => [
        'id' => 18,
        'name' => 'eSSL K21 PRO Identix Biometric Machine',
        'category' => 'Fingerprint',
        'model' => 'K21 PRO',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=K21+PRO',
        'original_price' => 6769,
        'discounted_price' => 4519,
        'discount' => 33,
        'description' => 'Sophisticated fingerprint & RFID biometric machine with 2.8-inch color TFT screen. Multiple authentication modes for enhanced security.',
        'specifications' => [
            'Fingerprints Capacity' => '800 templates',
            'Card Capacity' => '800 cards',
            'Transaction Storage' => '80,000 logs',
            'Display Size' => '2.8 inch color TFT',
            'Sensor' => '500 DPI Optical Sensor',
            'Communication' => 'RS232, RS485, TCP/IP, USB',
            'Operating Temperature' => '0-45 deg C'
        ],
        'keywords' => 'K21 PRO, Identix, RFID, multiple authentication'
    ],

    // FACE RECOGNITION CATEGORY - 20 Products
    19 => [
        'id' => 19,
        'name' => 'eSSL AIFACE-ORCUS Face Recognition System',
        'category' => 'Face Recognition',
        'model' => 'AIFACE-ORCUS',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=AIFACE+ORCUS',
        'original_price' => 25000,
        'discounted_price' => 12000,
        'discount' => 52,
        'description' => 'Advanced face recognition system with 2.4" TFT color display and WDR binocular camera. Features visible light facial recognition with anti-spoofing technology.',
        'specifications' => [
            'Display' => '2.4" TFT Color LCD Screen (320×240)',
            'Camera' => 'WDR Binocular Camera @ 1MP',
            'Operating System' => 'Linux',
            'CPU' => 'Dual Core @ 1GHz',
            'Face Template Capacity' => '1,500 faces',
            'Fingerprint Capacity' => '3,000 templates',
            'User Capacity' => '3,000 users',
            'Transaction Capacity' => '150,000 logs'
        ],
        'keywords' => 'AIFACE ORCUS, face recognition, contactless, anti-spoofing'
    ],
    20 => [
        'id' => 20,
        'name' => 'eSSL AIFACE-ARION Multi-Biometric Terminal',
        'category' => 'Face Recognition',
        'model' => 'AIFACE-ARION',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=AIFACE+ARION',
        'original_price' => 30000,
        'discounted_price' => 22500,
        'discount' => 25,
        'description' => 'Premium 5-inch display multi-biometric terminal with WDR low light camera. Multiple authentication methods with touchless recognition.',
        'specifications' => [
            'Display' => '5-Inch touch screen',
            'Camera' => 'WDR Low Light Camera @ 2MP',
            'Authentication Methods' => 'Face/Fingerprint/Card/Password',
            'Operating System' => 'Linux',
            'Recognition Speed' => 'Fingerprint: < 0.3 sec, Face: < 1 sec',
            'Recognition Distance' => '1cm to 100cm',
            'Communication' => 'TCP/IP, WiFi, USB'
        ],
        'keywords' => 'AIFACE ARION, multi-biometric, 5-inch display, premium'
    ],
    21 => [
        'id' => 21,
        'name' => 'eSSL AIFACE-MAGNUM Outdoor Face Recognition',
        'category' => 'Face Recognition',
        'model' => 'AIFACE-MAGNUM',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=AIFACE+MAGNUM',
        'original_price' => 35000,
        'discounted_price' => 26250,
        'discount' => 25,
        'description' => 'IP65 water and dust resistant face recognition system. Operating temperature from -5°C to 45°C with facial/fingerprint/RFID support.',
        'specifications' => [
            'IP Rating' => 'IP65 water and dust resistance',
            'Operating Temperature' => '-5°C to 45°C',
            'Authentication' => 'Facial/Fingerprint/RFID',
            'Card Modules' => '125 KHz ID card / 13.56MHz IC card',
            'Fill Light' => 'Adjustable brightness',
            'Web Server' => 'On Board configuration',
            'Power Supply' => 'DC 12V'
        ],
        'keywords' => 'AIFACE MAGNUM, IP65, outdoor, weather resistant'
    ],
    22 => [
        'id' => 22,
        'name' => 'eSSL AIFACE-MAGNUM-LITE Touch Screen System',
        'category' => 'Face Recognition',
        'model' => 'AIFACE-MAGNUM-LITE',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=MAGNUM+LITE',
        'original_price' => 28000,
        'discounted_price' => 21000,
        'discount' => 25,
        'description' => 'Compact 2.4-inch touch screen face recognition system with Linux operating system. Multiple authentication modes with high capacity.',
        'specifications' => [
            'Display' => '2.4-inch touch Screen',
            'User Capacity' => '10000 users',
            'Card Capacity' => '10000 cards',
            'Face Capacity' => '1500 faces',
            'Logs Capacity' => '200000 logs',
            'Authentication' => 'Facial/RFID card/Password',
            'Recognition Distance' => '0.3-1.2m',
            'Communication' => 'TCP/IP, Wi-Fi (Optional)'
        ],
        'keywords' => 'MAGNUM-LITE, touch screen, compact, Linux'
    ],
    23 => [
        'id' => 23,
        'name' => 'eSSL AI-FACE VENUS Premium Recognition System',
        'category' => 'Face Recognition',
        'model' => 'AI-FACE VENUS',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=AIFACE+VENUS',
        'original_price' => 35000,
        'discounted_price' => 26250,
        'discount' => 25,
        'description' => 'Premium 5-inch touch screen facial recognition system with 6,000 face capacity. Advanced anti-spoofing technology and dual core CPU.',
        'specifications' => [
            'Display' => '5-inch Touch Screen',
            'Face Capacity' => '6000 faces',
            'Card Capacity' => '10,000 cards',
            'Transactions' => '200,000 logs',
            'Operating System' => 'Linux',
            'Hardware' => '900MHz Dual Core CPU, 512MB RAM',
            'Camera' => '2MP Binocular Camera',
            'Recognition Speed' => '≤1s'
        ],
        'keywords' => 'AI-FACE VENUS, premium, 5-inch touch, anti-spoofing'
    ],
    24 => [
        'id' => 24,
        'name' => 'eSSL AI-FACE MARS Facial Recognition Device',
        'category' => 'Face Recognition',
        'model' => 'AI-FACE MARS',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=AIFACE+MARS',
        'original_price' => 28000,
        'discounted_price' => 21000,
        'discount' => 25,
        'description' => 'High-performance visible light facial recognition system with 2-meter recognition distance and wide angle acceptance.',
        'specifications' => [
            'Face Capacity' => '3,000 faces',
            'Recognition Distance' => 'Up to 2 meters',
            'Angle Acceptance' => '±30 degrees',
            'Recognition Speed' => '< 1 second',
            'Camera' => 'High-resolution visible light',
            'Anti-spoofing' => 'Advanced technology',
            'Communication' => 'TCP/IP, WiFi, USB'
        ],
        'keywords' => 'AI-FACE MARS, 2 meters distance, visible light'
    ],
    25 => [
        'id' => 25,
        'name' => 'eSSL AI-FACE MARS+HID Enhanced System',
        'category' => 'Face Recognition',
        'model' => 'AI-FACE MARS+HID',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=MARS+HID',
        'original_price' => 32000,
        'discounted_price' => 24000,
        'discount' => 25,
        'description' => 'Enhanced AI-FACE MARS with HID card reader support. Combines facial recognition with HID proximity card authentication.',
        'specifications' => [
            'Face Recognition' => 'Visible light technology',
            'HID Card Support' => 'Integrated HID reader',
            'Recognition Distance' => 'Up to 2 meters',
            'Multiple Authentication' => 'Face + HID card',
            'Anti-spoofing' => 'Advanced algorithms',
            'Communication' => 'TCP/IP, WiFi, USB',
            'Installation' => 'Wall mount'
        ],
        'keywords' => 'AI-FACE MARS+HID, HID card, dual authentication'
    ],
    26 => [
        'id' => 26,
        'name' => 'eSSL AIFACE ERIS Touch Screen Terminal',
        'category' => 'Face Recognition',
        'model' => 'AIFACE ERIS',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=AIFACE+ERIS',
        'original_price' => 32000,
        'discounted_price' => 24000,
        'discount' => 25,
        'description' => 'Professional face recognition system with 4-inch color LED touch screen and 2MP binocular camera. Linux-based multi-authentication terminal.',
        'specifications' => [
            'Display' => '4-inch color LED touch screen',
            'Camera' => '2MP binocular camera',
            'Operating System' => 'Linux',
            'CPU' => 'Dual Core @ 1GHz',
            'Authentication Methods' => 'Face/Fingerprint/Card/Password',
            'Communication' => 'TCP/IP, WiFi, USB',
            'Power Supply' => 'DC 12V'
        ],
        'keywords' => 'AIFACE ERIS, 4-inch touch screen, 2MP camera'
    ],
    27 => [
        'id' => 27,
        'name' => 'eSSL AI-FACE PLUTO Facial Recognition',
        'category' => 'Face Recognition',
        'model' => 'AI-FACE PLUTO',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=AIFACE+PLUTO',
        'original_price' => 18000,
        'discounted_price' => 13500,
        'discount' => 25,
        'description' => 'Visible light facial recognition system with anti-spoofing algorithm. Features adjustable brightness and multiple card module support.',
        'specifications' => [
            'Recognition Technology' => 'Visible light facial',
            'Anti-spoofing' => 'Advanced algorithms',
            'Fill Light' => 'Adjustable brightness',
            'Card Modules' => 'Multiple support options',
            'Operating System' => 'Linux',
            'Communication' => 'TCP/IP, WiFi',
            'Installation Type' => 'Wall mounted'
        ],
        'keywords' => 'AI-FACE PLUTO, visible light, anti-spoofing'
    ],
    28 => [
        'id' => 28,
        'name' => 'eSSL AI-FACE MERCURY Access Control',
        'category' => 'Face Recognition',
        'model' => 'AI-FACE MERCURY',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=AIFACE+MERCURY',
        'original_price' => 24000,
        'discounted_price' => 18000,
        'discount' => 25,
        'description' => 'Advanced facial recognition access control system with high-speed recognition. Wireless connectivity for modern organizations.',
        'specifications' => [
            'Recognition Speed' => 'High-speed processing',
            'Communication' => 'WiFi enabled',
            'Security Features' => 'Comprehensive access control',
            'Installation' => 'Wall mounted',
            'Power Source' => 'Power Adapter',
            'Language' => 'English',
            'Operating System' => 'Linux'
        ],
        'keywords' => 'AI-FACE MERCURY, high-speed, wireless'
    ],
    29 => [
        'id' => 29,
        'name' => 'eSSL AI-FACE NEPTUNE Recognition Terminal',
        'category' => 'Face Recognition',
        'model' => 'AI-FACE NEPTUNE',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=AIFACE+NEPTUNE',
        'original_price' => 22000,
        'discounted_price' => 16500,
        'discount' => 25,
        'description' => 'Professional face recognition terminal with advanced facial algorithms. Designed for medium to large enterprise environments.',
        'specifications' => [
            'Face Recognition' => 'Advanced algorithms',
            'Display Type' => 'LCD, Digital',
            'Battery Backup' => 'Optional',
            'Installation Type' => 'Wall Mounted',
            'Operating System' => 'Linux',
            'Communication' => 'TCP/IP, WiFi',
            'Power Source' => 'Power Adapter'
        ],
        'keywords' => 'AI-FACE NEPTUNE, enterprise, advanced algorithms'
    ],
    30 => [
        'id' => 30,
        'name' => 'eSSL AI-FACE URANUS Multi-Biometric System',
        'category' => 'Face Recognition',
        'model' => 'AI-FACE URANUS',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=AIFACE+URANUS',
        'original_price' => 16500,
        'discounted_price' => 12375,
        'discount' => 25,
        'description' => '4-type verification system supporting fingerprint, face, RFID and password. High-speed identification with optional UPS backup.',
        'specifications' => [
            'Max User(1:N)' => '500 users',
            'Max Fingerprint (1:N)' => '2000 templates',
            'Max Face (1:N)' => '500 faces',
            'Max Record' => '50,000 logs',
            'TCP/IP' => '10M/100M',
            'USB' => 'USB 2.0 (Host)',
            'LCD' => '2.8" Color LCD',
            'UPS Option' => '5V 1900mAH, 3 hours standby'
        ],
        'keywords' => 'AI-FACE URANUS, 4-type verification, UPS backup'
    ],
    31 => [
        'id' => 31,
        'name' => 'eSSL AI-FACE-JUPITER Ultimate Terminal',
        'category' => 'Face Recognition',
        'model' => 'AI-FACE-JUPITER',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=AIFACE+JUPITER',
        'original_price' => 35000,
        'discounted_price' => 26500,
        'discount' => 24,
        'description' => 'Ultimate multi-biometric terminal with 5-inch touch screen and 6,000 face capacity. Premium solution for enterprise environments.',
        'specifications' => [
            'Display' => '5-inch touch screen',
            'Face Capacity' => '6,000 faces',
            'Camera' => '2MP WDR camera',
            'Verification Methods' => 'Face/Fingerprint/Card/Password',
            'Recognition Speed' => '< 0.5 seconds',
            'Communication' => 'TCP/IP, WiFi, 4G (optional)',
            'Storage' => 'High capacity'
        ],
        'keywords' => 'AI-FACE JUPITER, ultimate, 5-inch touch, enterprise'
    ],
    32 => [
        'id' => 32,
        'name' => 'eSSL EFACE990 Multi-Biometric Terminal',
        'category' => 'Face Recognition',
        'model' => 'EFACE990',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=EFACE990',
        'original_price' => 45000,
        'discounted_price' => 33750,
        'discount' => 25,
        'description' => 'Advanced multi-biometric terminal with 1.2GHz CPU and SilkID fingerprint sensor. Professional grade with 4.3-inch touch screen.',
        'specifications' => [
            'CPU' => '1.2GHz high-performance',
            'Memory' => '1GB RAM / 1GB Flash',
            'Fingerprint Sensor' => 'SilkID technology',
            'Display' => '4.3 Inches Touch Screen',
            'Voice' => 'Hi-Fi Voice & Indicator',
            'Security' => 'Tamper Switch Alarm',
            'Communication' => 'TCP/IP, WiFi, USB'
        ],
        'keywords' => 'EFACE990, multi-biometric, SilkID, professional'
    ],
    33 => [
        'id' => 33,
        'name' => 'eSSL UFACE302 Multi-Biometric System',
        'category' => 'Face Recognition',
        'model' => 'UFACE302',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=UFACE+302',
        'original_price' => 25000,
        'discounted_price' => 18500,
        'discount' => 26,
        'description' => 'Multi-biometric system supporting face, fingerprint, and RF card recognition. Features 8 hours battery backup and wireless connectivity.',
        'specifications' => [
            'Face Recognition' => 'Advanced algorithms',
            'Fingerprint Support' => 'Integrated sensor',
            'RF Card' => 'Card reader support',
            'Battery Backup' => '8 hours',
            'Connectivity' => 'Wireless enabled',
            'Display' => 'Color LCD screen',
            'Communication' => 'TCP/IP, WiFi'
        ],
        'keywords' => 'UFACE302, multi-biometric, battery backup, wireless'
    ],
    34 => [
        'id' => 34,
        'name' => 'eSSL MB160 Multi-Biometric Device',
        'category' => 'Face Recognition',
        'model' => 'MB160',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=eSSL+MB160',
        'original_price' => 20000,
        'discounted_price' => 15000,
        'discount' => 25,
        'description' => 'Comprehensive multi-biometric device with 1500 face capacity and 2.8-inch TFT screen. Multiple verification modes with push data support.',
        'specifications' => [
            'Face Capacity' => '1500 faces',
            'Fingerprint Capacity' => '2000 templates',
            'ID card Capacity' => '2000 cards',
            'Transaction Capacity' => '100000 logs',
            'Display' => '2.8-inch TFT Screen',
            'Communication' => 'TCP/IP, USB-Host',
            'Push Data' => 'Yes'
        ],
        'keywords' => 'MB160, multi-biometric, push data, TFT screen'
    ],
    35 => [
        'id' => 35,
        'name' => 'eSSL MB20 Compact Face Recognition',
        'category' => 'Face Recognition',
        'model' => 'MB20',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=eSSL+MB20',
        'original_price' => 15000,
        'discounted_price' => 11250,
        'discount' => 25,
        'description' => 'Compact face recognition device with keypad and LCD display. Multi-verification support including face, fingerprint and RFID.',
        'specifications' => [
            'Face Capacity' => '400 faces',
            'Fingerprint Capacity' => '500 templates',
            'Card Capacity' => '1000 cards',
            'Display Type' => 'Keypad, LCD',
            'Authentication' => 'Face/Fingerprint/RFID',
            'Battery Backup' => 'Optional',
            'Power Supply' => '12 volt'
        ],
        'keywords' => 'MB20, compact, face recognition, multi-verification'
    ],
    36 => [
        'id' => 36,
        'name' => 'eSSL UFACE301 Multi-Biometric Access Control',
        'category' => 'Face Recognition',
        'model' => 'UFACE301',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=UFACE+301',
        'original_price' => 28000,
        'discounted_price' => 21000,
        'discount' => 25,
        'description' => 'Advanced multi-biometric access control system with 4.3-inch touch screen. High capacity with liveness detection and chip encryption.',
        'specifications' => [
            'Face Capacity' => '3,000 templates',
            'ID Card Capacity' => '10,000 cards',
            'Transaction Capacity' => '100,000 logs',
            'Verification Speed' => 'Less than 1 second',
            'Display' => '4.3-inch touch screen',
            'Liveness Detection' => 'Anti-spoofing',
            'Communication' => 'TCP/IP, RS232/485, USB Host'
        ],
        'keywords' => 'UFACE301, access control, liveness detection, touch screen'
    ],
    37 => [
        'id' => 37,
        'name' => 'eSSL SFACE900 Advanced Face Recognition',
        'category' => 'Face Recognition',
        'model' => 'SFACE900',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=SFACE+900',
        'original_price' => 35000,
        'discounted_price' => 26250,
        'discount' => 25,
        'description' => 'Advanced face recognition system with 4.3-inch touch screen. Dual face capacity modes and comprehensive biometric features.',
        'specifications' => [
            'Display' => '4.3-Inch Touch Screen',
            'Face capacity' => '1200 (1:N), 3000(1:1)',
            'Fingerprint capacity' => '2000 templates',
            'ID Card Capacity' => '10,000 cards',
            'Transaction storage' => '100,000 logs',
            'Fingerprint sensor' => '500 DPI Optical sensor',
            'Communication' => 'TCP/IP, RS232/485, USB Host'
        ],
        'keywords' => 'SFACE900, advanced, touch screen, dual capacity'
    ],
    38 => [
        'id' => 38,
        'name' => 'eSSL EYEFACE-99 Premium Recognition System',
        'category' => 'Face Recognition',
        'model' => 'EYEFACE-99',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=EYEFACE+99',
        'original_price' => 150000,
        'discounted_price' => 98000,
        'discount' => 35,
        'description' => 'Premium all-in-one face recognition device with 50,000 face capacity. Ultra-high resolution camera with iris recognition capability.',
        'specifications' => [
            'Face Capacity' => '50,000 faces',
            'Camera Resolution' => '800×1280 pixels',
            'Display' => 'Full-view screen',
            'Recognition Types' => 'Face + Iris recognition',
            'Communication' => 'WiFi/TCP/IP/4G',
            'Storage' => 'Enterprise-level',
            'Operating Temperature' => '-10°C to 50°C'
        ],
        'keywords' => 'EYEFACE-99, premium, 50000 capacity, iris recognition'
    ],

    // ACCESS CONTROL CATEGORY - 9 Products
    39 => [
        'id' => 39,
        'name' => 'eSSL C3-100 Single Door Access Controller',
        'category' => 'Access Control',
        'model' => 'C3-100',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=C3-100',
        'original_price' => 15000,
        'discounted_price' => 12000,
        'discount' => 20,
        'description' => 'Compact single door access controller perfect for small installations. Essential access control functions with reliable performance.',
        'specifications' => [
            'Door Control' => '1 door',
            'Card Capacity' => '20,000 cards',
            'Log Capacity' => '100,000 events',
            'Communication' => 'TCP/IP, RS485',
            'Power Supply' => 'DC 12V',
            'Reader Support' => 'Multiple reader types',
            'Operating Temperature' => '0°C to 45°C'
        ],
        'keywords' => 'C3-100, single door, cost-effective, small installation'
    ],
    40 => [
        'id' => 40,
        'name' => 'eSSL C3-200 2-Door Access Controller',
        'category' => 'Access Control',
        'model' => 'C3-200',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=C3-200',
        'original_price' => 22000,
        'discounted_price' => 17600,
        'discount' => 20,
        'description' => '2-door access control system with advanced features including anti-passback, interlock, and real-time monitoring capabilities.',
        'specifications' => [
            'Door Control' => '2 doors',
            'Card Capacity' => '50,000 cards',
            'Log Capacity' => '200,000 events',
            'Communication' => 'TCP/IP, RS485',
            'Anti-passback' => 'Advanced control',
            'Interlock' => 'Yes',
            'Real-time Monitoring' => 'Yes'
        ],
        'keywords' => 'C3-200, 2-door, anti-passback, real-time monitoring'
    ],
    41 => [
        'id' => 41,
        'name' => 'eSSL C3-400 Four Door Access Controller',
        'category' => 'Access Control',
        'model' => 'C3-400',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=C3-400',
        'original_price' => 32000,
        'discounted_price' => 25600,
        'discount' => 20,
        'description' => 'Advanced 4-door access controller with 100,000 card capacity and mobile app support. High-performance CPU with comprehensive features.',
        'specifications' => [
            'Door Control' => '4 doors',
            'Card Capacity' => '100,000 cards',
            'Log Events' => '100,000 logs',
            'CPU' => '1.2GHz high-performance',
            'Mobile App' => 'iOS/Android support',
            'Communication' => 'TCP/IP, WiFi (optional)',
            'Advanced Features' => 'Scheduling, multi-level security'
        ],
        'keywords' => 'C3-400, four door, mobile app, high-performance'
    ],
    42 => [
        'id' => 42,
        'name' => 'eSSL InBio-260 2-Door Access Controller',
        'category' => 'Access Control',
        'model' => 'INBIO260',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=InBio+260',
        'original_price' => 18000,
        'discounted_price' => 14500,
        'discount' => 19,
        'description' => 'Professional 2-door access control system with embedded fingerprint verification. Features TCP/IP communication and RS-485 support.',
        'specifications' => [
            'Door Control' => '2 doors',
            'Card Holders Capacity' => '30,000 cards',
            'Fingerprint Capacity' => '3,000 templates',
            'Log Events Capacity' => '100,000 logs',
            'Readers Supported' => '8 readers (4 RS-485 + 4 Wiegand)',
            'Communication' => 'TCP/IP and RS-485',
            'CPU' => '32-bit 400MHz'
        ],
        'keywords' => 'InBio-260, 2-door, embedded fingerprint, TCP/IP'
    ],
    43 => [
        'id' => 43,
        'name' => 'eSSL InBio-460 4-Door Access Controller',
        'category' => 'Access Control',
        'model' => 'INBIO460',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=InBio+460',
        'original_price' => 28000,
        'discounted_price' => 22500,
        'discount' => 20,
        'description' => 'Advanced 4-door access control system with comprehensive security features. Web-based monitoring with anti-passback and interlock functions.',
        'specifications' => [
            'Door Control' => '4 doors',
            'Card Capacity' => '30,000 cards',
            'Fingerprint Capacity' => '3,000 templates',
            'Log Capacity' => '100,000 events',
            'Web-based Monitoring' => 'Yes',
            'Anti-passback' => 'Yes',
            'Interlock Functionality' => 'Yes'
        ],
        'keywords' => 'InBio-460, 4-door, web monitoring, anti-passback'
    ],
    44 => [
        'id' => 44,
        'name' => 'eSSL EC10-EC16 Elevator Access Controller',
        'category' => 'Access Control',
        'model' => 'EC10-EC16',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=EC10-EC16',
        'original_price' => 25000,
        'discounted_price' => 20000,
        'discount' => 20,
        'description' => 'Specialized elevator access controller with floor button control. Supports RFID and fingerprint slave readers with user-defined floor access.',
        'specifications' => [
            'Floor Button Control Relays' => '10 relays',
            'Fingerprint Capacity' => '3,000 templates',
            'Proximity Card Capacity' => '30,000 cards',
            'Event Capacity' => '100,000 logs',
            'Reader Support' => 'RFID and Fingerprint',
            'Fail Safe Mode' => 'Yes',
            'Real-time Monitoring' => 'Yes'
        ],
        'keywords' => 'EC10-EC16, elevator controller, floor access, RFID fingerprint'
    ],
    45 => [
        'id' => 45,
        'name' => 'eSSL-ACCESS-8002 2-Door Controller',
        'category' => 'Access Control',
        'model' => 'ESSL-ACCESS-8002',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=ACCESS-8002',
        'original_price' => 20000,
        'discounted_price' => 16000,
        'discount' => 20,
        'description' => 'Professional 2-door access controller with high card capacity. TCP/IP adaptive communication with flexible entry/exit configurations.',
        'specifications' => [
            'Card Capacity' => '20,000 cards',
            'Event buffer' => '100,000 events',
            'Communication' => 'TCP/IP 10M/100M adaptive',
            'Door Control' => '2 doors',
            'Entry/Exit' => 'Card swipe + button or dual card swipe',
            'PCB board size' => '21.9 * 12.2 * 3.4cm',
            'Power Supply' => 'DC 12V'
        ],
        'keywords' => 'ESSL-ACCESS-8002, 2-door, TCP/IP, flexible configuration'
    ],
    46 => [
        'id' => 46,
        'name' => 'eSSL-ACCESS-8004 4-Door Controller',
        'category' => 'Access Control',
        'model' => 'ESSL-ACCESS-8004',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=ACCESS-8004',
        'original_price' => 28000,
        'discounted_price' => 22400,
        'discount' => 20,
        'description' => 'Advanced 4-door access controller with comprehensive management features. Multi-door control with time-zone and access level management.',
        'specifications' => [
            'Card Capacity' => '20,000 users',
            'Event Buffer' => '100,000 logs',
            'Communication' => 'TCP/IP 10M/100M adaptive',
            'Door Control' => '4 doors',
            'Time Zones' => '256 zones',
            'Access Levels' => '256 levels',
            'PCB board size' => '21.9 * 12.2 * 3.4cm'
        ],
        'keywords' => 'ESSL-ACCESS-8004, 4-door, time zones, access levels'
    ],
    47 => [
        'id' => 47,
        'name' => 'eSSL EC-20M-EC-20K Multi-Door System',
        'category' => 'Access Control',
        'model' => 'EC-20M-EC-20K',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=EC-20M',
        'original_price' => 35000,
        'discounted_price' => 28000,
        'discount' => 20,
        'description' => 'Enterprise-grade multi-door access control system with scalable architecture. Advanced security features for large installations.',
        'specifications' => [
            'Multi-door Support' => 'Scalable architecture',
            'User Capacity' => 'Enterprise-level',
            'Communication' => 'TCP/IP, RS485',
            'Advanced Security' => 'Enterprise features',
            'Scalability' => 'Expandable system',
            'Integration' => 'Third-party compatible',
            'Management' => 'Centralized control'
        ],
        'keywords' => 'EC-20M-EC-20K, multi-door, enterprise, scalable'
    ],

    // RFID SYSTEMS CATEGORY - 6 Products
    48 => [
        'id' => 48,
        'name' => 'eSSL KR500 Proximity Card Reader',
        'category' => 'RFID Systems',
        'model' => 'KR500',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=KR500+Proximity',
        'original_price' => 6000,
        'discounted_price' => 4500,
        'discount' => 25,
        'description' => 'Professional 125kHz proximity card reader for access control systems. Weather-resistant design compatible with EM cards and key fobs.',
        'specifications' => [
            'Frequency' => '125kHz',
            'Card Type' => 'EM cards, Key fobs',
            'Reading Distance' => '3-8 cm',
            'Communication' => 'Wiegand 26/34-bit',
            'Power Supply' => 'DC 12V',
            'Operating Temperature' => '-20°C to 60°C',
            'IP Rating' => 'IP65 (weather-resistant)',
            'Installation' => 'Wall-mount'
        ],
        'keywords' => 'KR500, proximity card, 125kHz, weather resistant'
    ],
    49 => [
        'id' => 49,
        'name' => 'eSSL KR503 Mifare Card Reader',
        'category' => 'RFID Systems',
        'model' => 'KR503',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=KR503+Mifare',
        'original_price' => 8000,
        'discounted_price' => 6400,
        'discount' => 20,
        'description' => 'High-frequency Mifare card reader supporting 13.56MHz IC cards. Advanced encryption for high-security applications.',
        'specifications' => [
            'Frequency' => '13.56MHz',
            'Card Type' => 'Mifare Classic, Mifare Plus',
            'Protocol' => 'ISO14443 Type A',
            'Reading Distance' => '2-10 cm',
            'Communication' => 'Wiegand 26/34-bit, RS485',
            'Encryption' => 'Advanced security',
            'Power Supply' => 'DC 12V',
            'Operating Temperature' => '-10°C to 50°C'
        ],
        'keywords' => 'KR503, Mifare, 13.56MHz, high security'
    ],
    50 => [
        'id' => 50,
        'name' => 'eSSL RFID Cards Pack (125kHz)',
        'category' => 'RFID Systems',
        'model' => 'RFID Cards',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=RFID+Cards',
        'original_price' => 2000,
        'discounted_price' => 1600,
        'discount' => 20,
        'description' => 'Professional RFID cards pack for access control systems. Compatible with eSSL proximity readers and systems.',
        'specifications' => [
            'Card Type' => 'RFID Proximity Cards',
            'Frequency' => '125kHz',
            'Compatibility' => 'eSSL systems',
            'Pack Size' => '100 cards',
            'Material' => 'PVC cards',
            'Printable' => 'Yes',
            'Durability' => 'Long-lasting'
        ],
        'keywords' => 'RFID cards, 125kHz, proximity cards, PVC'
    ],
    51 => [
        'id' => 51,
        'name' => 'eSSL Proximity Cards Pack (EM Format)',
        'category' => 'RFID Systems',
        'model' => 'Proximity Cards',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=Proximity+Cards',
        'original_price' => 1800,
        'discounted_price' => 1440,
        'discount' => 20,
        'description' => 'Standard proximity cards in EM format for access control applications. Compatible with 125kHz proximity readers.',
        'specifications' => [
            'Format' => 'EM Format',
            'Frequency' => '125kHz',
            'Card Type' => 'Proximity Cards',
            'Pack Size' => '100 cards',
            'Compatibility' => '125kHz readers',
            'Material' => 'Standard PVC',
            'Applications' => 'Access control, attendance'
        ],
        'keywords' => 'proximity cards, EM format, 125kHz, access control'
    ],
    52 => [
        'id' => 52,
        'name' => 'eSSL Mifare Cards Pack (13.56MHz)',
        'category' => 'RFID Systems',
        'model' => 'Mifare Cards',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=Mifare+Cards',
        'original_price' => 3000,
        'discounted_price' => 2400,
        'discount' => 20,
        'description' => 'High-frequency Mifare cards for secure access control applications. Advanced encryption with ISO14443 compliance.',
        'specifications' => [
            'Card Type' => 'Mifare Classic/Plus',
            'Frequency' => '13.56MHz',
            'Protocol' => 'ISO14443 Type A',
            'Pack Size' => '50 cards',
            'Encryption' => 'Advanced security',
            'Memory' => 'Configurable sectors',
            'Applications' => 'High-security access'
        ],
        'keywords' => 'Mifare cards, 13.56MHz, ISO14443, high security'
    ],
    53 => [
        'id' => 53,
        'name' => 'eSSL HID Prox Cards Pack',
        'category' => 'RFID Systems',
        'model' => 'HID Prox Cards',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=HID+Prox+Cards',
        'original_price' => 4000,
        'discounted_price' => 3200,
        'discount' => 20,
        'description' => 'Professional HID proximity cards for enterprise access control systems. Compatible with HID readers and systems.',
        'specifications' => [
            'Card Type' => 'HID Proximity Cards',
            'Format' => 'HID Prox format',
            'Frequency' => '125kHz',
            'Pack Size' => '25 cards',
            'Compatibility' => 'HID systems',
            'Security' => 'HID encryption',
            'Applications' => 'Enterprise access control'
        ],
        'keywords' => 'HID prox cards, HID format, enterprise, professional'
    ],

    // DOOR CONTROLLERS CATEGORY - 4 Products
    54 => [
        'id' => 54,
        'name' => 'eSSL Multi Door Controller 2-Door System',
        'category' => 'Door Controllers',
        'model' => 'Multi Door Controller 2',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=Multi+Door+2',
        'original_price' => 22000,
        'discounted_price' => 17600,
        'discount' => 20,
        'description' => 'Professional 2-door access control system with comprehensive management features. Real-time monitoring with advanced security functions.',
        'specifications' => [
            'Door Control' => '2 doors',
            'Card Capacity' => '30,000 cards',
            'Log Capacity' => '100,000 events',
            'Communication' => 'TCP/IP, RS485',
            'Anti-passback' => 'Yes',
            'Time Zone Management' => 'Yes',
            'Real-time Monitoring' => 'Yes'
        ],
        'keywords' => 'multi door controller, 2-door, real-time monitoring'
    ],
    55 => [
        'id' => 55,
        'name' => 'eSSL Multi Door Controller 4-Door System',
        'category' => 'Door Controllers',
        'model' => 'Multi Door Controller 4',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=Multi+Door+4',
        'original_price' => 32000,
        'discounted_price' => 25600,
        'discount' => 20,
        'description' => 'Advanced 4-door access control system with comprehensive security management. Enterprise-grade features with scalable architecture.',
        'specifications' => [
            'Door Control' => '4 doors',
            'Card Capacity' => '50,000 cards',
            'Log Capacity' => '200,000 events',
            'Communication' => 'TCP/IP, RS485, WiFi',
            'Advanced Features' => 'Multiple security zones',
            'Scalability' => 'Expandable system',
            'Management Software' => 'Professional suite'
        ],
        'keywords' => 'multi door controller, 4-door, enterprise, scalable'
    ],
    56 => [
        'id' => 56,
        'name' => 'eSSL Single Door Access Controller',
        'category' => 'Door Controllers',
        'model' => 'Single Door Controller',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=Single+Door',
        'original_price' => 15000,
        'discounted_price' => 12000,
        'discount' => 20,
        'description' => 'Compact single door access controller for basic installations. Cost-effective solution with essential security features.',
        'specifications' => [
            'Door Control' => '1 door',
            'Card Capacity' => '10,000 cards',
            'Log Capacity' => '50,000 events',
            'Communication' => 'TCP/IP, RS485',
            'Power Supply' => 'DC 12V',
            'Installation' => 'Simple setup',
            'Applications' => 'Small offices, basic security'
        ],
        'keywords' => 'single door controller, basic, cost-effective, simple'
    ],
    57 => [
        'id' => 57,
        'name' => 'eSSL Wiegand Interface Controller',
        'category' => 'Door Controllers',
        'model' => 'Wiegand Controller',
        'brand' => 'eSSL Security',
        'image' => 'https://via.placeholder.com/300x250?text=Wiegand+Controller',
        'original_price' => 12000,
        'discounted_price' => 9600,
        'discount' => 20,
        'description' => 'Universal Wiegand interface controller for system integration. Supports 26-bit and 34-bit Wiegand protocols with flexible configuration.',
        'specifications' => [
            'Protocol Support' => '26-bit, 34-bit Wiegand',
            'Reader Inputs' => 'Multiple Wiegand inputs',
            'Communication' => 'TCP/IP, RS485, USB',
            'Power Supply' => 'DC 12V',
            'Relay Outputs' => 'Configurable controls',
            'Installation' => 'DIN rail or wall mount',
            'Compatibility' => 'Universal systems'
        ],
        'keywords' => 'Wiegand controller, universal, integration, flexible'
    ]
];

function getProductById($id) {
    global $products;
    return isset($products[$id]) ? $products[$id] : null;
}

function getAllProducts() {
    global $products;
    return $products;
}

function getProductsByCategory($category) {
    global $products;
    return array_filter($products, function($product) use ($category) {
        return $product['category'] === $category;
    });
}

function searchProducts($query) {
    global $products, $categories;
    $results = [];
    $query = strtolower(trim($query));
    
    if (empty($query)) {
        return $results;
    }
    
    // Search in products
    foreach ($products as $product) {
        $searchText = strtolower($product['name'] . ' ' . $product['description'] . ' ' . $product['category'] . ' ' . $product['keywords'] . ' ' . $product['model']);
        if (strpos($searchText, $query) !== false) {
            $results[] = $product;
        }
    }
    
    return $results;
}

function getCategoryCount($category) {
    global $products;
    return count(array_filter($products, function($product) use ($category) {
        return $product['category'] === $category;
    }));
}

// Helper functions
function getFeaturedProducts($limit = 8) {
    global $products;
    $featured = array_filter($products, function($product) {
        return $product['discount'] >= 25;
    });
    return array_slice($featured, 0, $limit);
}

function getProductsByPriceRange($min, $max) {
    global $products;
    return array_filter($products, function($product) use ($min, $max) {
        return $product['discounted_price'] >= $min && $product['discounted_price'] <= $max;
    });
}

function getPopularModels() {
    return [
        'X990' => 'Most popular fingerprint attendance system',
        'AIFACE MARS' => 'Best selling face recognition device', 
        'InBio-460' => 'Top choice for 4-door access control',
        'AI-FACE JUPITER' => 'Premium multi-biometric solution',
        'F22+ID+WIFI' => 'Best WiFi enabled attendance machine'
    ];
}

// Product Statistics
function getProductStats() {
    global $products, $categories;
    $stats = [
        'total_products' => count($products),
        'categories' => count($categories),
        'avg_discount' => 0,
        'price_range' => ['min' => 0, 'max' => 0]
    ];
    
    $discounts = array_column($products, 'discount');
    $prices = array_column($products, 'discounted_price');
    
    $stats['avg_discount'] = round(array_sum($discounts) / count($discounts), 1);
    $stats['price_range']['min'] = min($prices);
    $stats['price_range']['max'] = max($prices);
    
    return $stats;
}

// Category-wise product count
$categoryStats = [];
foreach ($categories as $category => $models) {
    $categoryStats[$category] = getCategoryCount($category);
}

// Product image URLs (official eSSL sources)
$productImages = [
    'X990' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/X990.jpg',
    'iClock990' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/iclock990.jpg',
    'F18' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/F18.jpg',
    'F22+ID+WIFI' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/F22.jpg',
    'SF100' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/SF100.jpg',
    'AIFACE-ORCUS' => 'https://www.esslsecurity.com/storage/app/media/face/aiface-orcus.jpg',
    'AI-FACE MARS' => 'https://www.esslsecurity.com/storage/app/media/face/aiface-mars.jpg',
    'AIFACE ERIS' => 'https://www.esslsecurity.com/storage/app/media/face/aiface-eris.jpg',
    'AI-FACE-JUPITER' => 'https://www.esslsecurity.com/storage/app/media/face/aiface-jupiter.jpg',
    'EYEFACE-99' => 'https://www.esslsecurity.com/storage/app/media/face/eyeface-99.jpg'
];

// Product PDF catalog URLs
$productCatalogs = [
    'X990' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/Catalogue/X990.pdf',
    'iClock990' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/Catalogue/iclock990.pdf',
    'F18' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/Catalogue/F18.pdf',
    'F22+ID+WIFI' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/Catalogue/F22.pdf',
    'AIFACE-ORCUS' => 'https://www.esslsecurity.com/storage/app/media/face/catalogue/AiFace-Orcus.pdf',
    'AI-FACE MARS' => 'https://www.esslsecurity.com/storage/app/media/face/catalogue/AiFace-Mars.pdf',
    'AI-FACE-JUPITER' => 'https://www.esslsecurity.com/storage/app/media/face/AiFace-Jupiter.pdf',
    'AI-FACE VENUS' => 'https://www.esslsecurity.com/storage/app/media/face/catalogue/AiFace-venus.pdf'
];
?>