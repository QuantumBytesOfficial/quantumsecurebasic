<?php
// Complete eSSL Product Categories and Models (Full Lineup)
$categories = [
    'Fingerprint' => [
       'X990', 'Iclock 990', 'F18', 'F22 WiFi', 'SF100', 'K30 Pro', 'P160', 'Silk-FP-101TA', 'K21 Pro', 'E9C Wi-Fi', 'WL20', 'UA300', 'K90 Pro'
    ],
    'Face' => [
        'MB 160', 'Silk Bio 101TC', 'uFace 302', 'eFace-990', 'MB20'
    ],
    'RFID Readers' => [
        'S990', 'SC 405 ID'
    ],
    'AI Face' => [
        'AiFace-Mercury', 'AiFace-Uranus', 'AiFace-Neptune', 'AiFace-Pluto', 'AiFace-Mars',
        'AiFace Venus', 'AiFace-Jupiter', 'Aiface Magnum', 'MU-AI-9 M/F', 'AiFace ERIS',
        'Aiface Mars + QR Code', 'MU-AI-5', 'Magnum Lite', 'EyeFace-99'
    ],
    // 'Thermal Printer' => ['eSSL-SP-2'],
    // 'Standalone Access Control' => ['JS34', 'JS-32E', 'FR1200'],
    // 'Guard Patrol Systems' => ['GP-Finger-101'],
    // 'No Touch Sensors & Buttons' => ['NO Touch-SQ', 'No Touch-RC', 'Push-9-SQ', 'Push-9-RC'],
    // 'Access Controller Systems' => ['C3 400', 'C3 400 Pro', 'InBio 460', 'InBio 460 Pro', 'eSSL-Access-8002', 'eSSL-Access-8004'],
    // 'Elevator Control Systems' => ['EC10', 'EX16', 'EC-20 MK-B', 'EC-20K'],
    // 'Turnstiles & Barriers' => ['ET1000', 'ET1200', 'ET2000', 'DT2000', 'DT1000', 'HHT-TL-139'],
    // 'Full Height Turnstiles' => ['FHT-TL-139', 'FHT-TL-149', 'FHT-TL-239', 'FHT-TL-249', 'FHT-TL-132', 'FHT-TL-232'],
    // 'Flap Barriers' => ['FB-E-1000', 'FB-E-1200', 'FB-E-2000', 'FB-E-2200', 'FB-Y-1000', 'FB-Y-1200', 'FB-Q-2000', 'FB-Q-2200'],
    // 'Swing Barriers' => ['SB-TL-129', 'SB-SPL-310', 'SB-ES-3216', 'SB-ES-3216-2', 'SB-ES-3012', 'SB-ES-3012-2'],
    // 'Boom Gates & Parking Barriers' => ['BG105', 'BG108', 'BG-SC-300', 'BG100 TI', 'BG100 TII', 'BG-BDC-RL-100', 'BGL-100', 'BG-CM-300'],
    // 'Metal Detectors' => ['D270-1-IP54', 'D270-9-IP54', 'D270-18-IP54', 'D330-18-IP65', 'D330-33-IP65', 'D518-63-IP65', 'D4006', 'D468-6'],
    // 'X-Ray Baggage Scanners' => ['eBS-5030A', 'eBS-6040', 'EBS 6550 D', 'EBS 8065 D', 'EBS 10080 D', 'EBS 100100 D', 'EBS 150180'],
    // 'Hand Held Metal Detectors' => ['HM520Pro', 'HM100180', 'HM-300'],
    // 'Shoes Scanner' => ['eSS05'],
    // 'Sliding Gate & Rolling Shutter Motors' => ['eSSL-HG-1500', 'eSSL-RSM-15S-ZM', 'eSSL-RSM-Controller'],
    // 'Bollards & Tyre Killers' => ['HB-426', 'HBC-600', 'TK-600'],
    // 'Electronic Anti Theft System' => ['EAS-AM-88 M&S'],
    // 'UHF RFID Readers' => ['UHF U5', 'UHF U10'],
    // 'Smart Door Locks' => ['TL400B', 'TL200', 'FL-100 M', 'FL-200 M', 'FL-300', 'GL300'],
    // 'Hotel Locks & Safe Locks' => ['HL-100', 'SAFE-101', 'SAFE201', 'SAFE-301'],
    // 'Accessories & Components' => [
    //     'KR 500-E/M', 'KR503E/M', 'JS-500E/M', 'FR1200', 'EM-Lock Brackets', 'Drop Bolt Lock',
    //     'Single Door EM Lock', 'Double Door EM Lock', 'Glass Door Lock', '8-MRC-80', 'Thin Card', 'Thick Card'
    // ]
];

// Complete Products Database - All eSSL Products with Real Specifications
$products = [
    // Fingerprint Time Attendance & Access Control
    1 => [
        'id' => 1,
        'name' => 'eSSL K21 Pro',
        'category' => 'Fingerprint',
        'model' => 'K21 Pro',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/k21.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/K21-Pro.pdf',
        'original_price' => 12000,
        'discounted_price' => 8500,
        'discount' => 29,
        'description' => 'Compact fingerprint time attendance system with push data technology',
        'specifications' => [
            'Fingerprint Capacity' => '800',
            'Card Capacity' => '800',
            'Transaction Storage' => '80,000',
            'Push Data' => 'Yes',
            'Fingerprint Sensor' => '500 DPI Optical Sensor',
            'LED Indicator' => 'Green/Red',
            'Speaker' => 'Mini Speaker',
            'Communication' => 'TCP/IP, USB',
            'FAR' => '<=0.0001%',
            'FRR' => '<=1%',
            'Identification Speed' => '<= 1 sec'
        ],
        'features' => ['Push Data', 'High Accuracy', 'Fast Recognition', 'TCP/IP Connectivity'],
        'keywords' => 'K21 Pro, fingerprint, biometric, attendance, push data, 800 templates, TCP/IP'
    ],

    2 => [
        'id' => 2,
        'name' => 'eSSL P160',
        'category' => 'Fingerprint',
        'model' => 'P160',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/P160.png',                    
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/P160.pdf',            
        'original_price' => 10000,             // not provided
        'discounted_price' => 9000,           // not provided
        'discount' => 10,                   // not provided
        'description' => 'PALM RECOGNITION MULTI-BIOMETRIC TIME ATTENDANCE & ACCESS CONTROL SYSTEM',
        'specifications' => [
            'Display' => '2.8-inch TFT Color Display',
            'Palm Capacity' => '600',
            'Fingerprint Capacity' => '3,000',
            'Card Capacity' => '10,000',
            'Logs Capacity' => '100,000',
            'Communication' => 'TCP/IP, USB-Host',
            'Standard Functions' => 'Automatic Status Switch, Self-Service Query, Work Code, T9 Input, 9 Digit User ID, DST, Scheduled-bell, SMS, RS232 Printer',
            'AC module 1' => 'Exit Button, Door Lock, Alarm, 12V OUT, AUX IN',
            'Optional Function' => 'ID Card, MIFARE Card, POE, 3G, Battery Module, ADMS',
            'AC module 2' => 'Exit Button, Door Lock, Alarm, 12V OUT, AUX IN, Door Sensor, RS485, Wiegand IN/OUT',
            'Power Supply' => '12V 1.5A',
            'Verification Speed' => '≤1 sec',
            'Operating Temperature' => '0-45 °C',
            'Operating Humidity' => '20%-80%',
            'Dimensions' => '179.95 x 134.94 x 38.5 mm'
        ],
        'features' => [
            '2.8-inch TFT Color Display',
            'Palm Capacity: 600',
            'Fingerprint Capacity: 3,000',
            'Card Capacity: 10,000'
        ],
        'keywords' => 'P160, palm, fingerprint, biometric, attendance, access control'
    ],    

    3 => [
        'id' => 3,
        'name' => 'eSSL K30 Pro',
        'category' => 'Fingerprint',
        'model' => 'K30 Pro',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/K30.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/K30-Pro.pdf',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/K30ConnectionDiagram.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/k20_21_30_generic_manual.pdf',
        'original_price' => 16500,
        'discounted_price' => 11800,
        'discount' => 28,
        'description' => 'Professional access control system with door sensor support',
        'specifications' => [
            'User Capacity' => '2,000',
            'Fingerprints Capacity' => '2,000',
            'Card Capacity' => '2,000',
            'Transaction Storage' => '100,000',
            'Push Data' => 'Yes',
            'Access Control Interface' => 'Electromagnetic Lock/Electric Lock, Door Sensor, Exit Button, No Touch Sensor',
            'Communication' => 'TCP/IP, USB-host, WiFi (optional)'
        ],
        'features' => ['Access Control', 'Door Sensor', 'Exit Button', 'No Touch Sensor'],
        'keywords' => 'K30 Pro, fingerprint, access control, door sensor, electromagnetic lock, 2000 templates'
    ],

    4 => [
        'id' => 4,
        'name' => 'eSSL SF100',
        'category' => 'Fingerprint',
        'model' => 'SF100',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/SF100.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/SF-100.pdf',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/sf100_Connection_Diagram.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/SF100_User_Manual.pdf',
        'original_price' => 15500,
        'discounted_price' => 11200,
        'discount' => 28,
        'description' => 'IP based Fingerprint Time Attendance & Access Control System',
        'specifications' => [
            'Display' => '2.4” TFT',
            'Fingerprint Capacity' => '1,500',
            'Card Capacity' => '5,000',
            'Transaction Capacity' => '80,000',
            'Sensor' => '500 DPI Optical sensor',
            'Communication' => 'TCP/IP, RS485, USB-host',
            'Dimension' => '(W x L x H): 90 90 x 34.5 mm',
            'Access Control Interface' => 'Exit Reader KR500E, Electric lock, Door sensor, Alarm, Exit button, Door bell'
        ],
        'features' => ['Voice prompt for acceptance and rejection of valid/invalid fingers', 'Compact and lightweight, small size for 86x86mm soket installation'],
        'keywords' => 'SF100', 'sf100', 'sf 100','fingerprint, 1500 templates'
    ],

    5 => [
        'id' => 5,
        'name' => 'eSSL F22 WiFi',
        'category' => 'Fingerprint',
        'model' => 'F22 WiFi',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/f22/F22.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/Catalogue/F22.pdf',
        'video' => 'https://www.youtube.com/watch?v=tXVD1rD0ELY',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/f22connectiondiagram.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/F22_usermanual-.pdf',
        'original_price' => 15500,
        'discounted_price' => 11200,
        'discount' => 28,
        'description' => 'F22 with WiFi connectivity for wireless operation',
        'specifications' => [
            'Display' => '2.8-inch TFT Screen',
            'Fingerprint Capacity' => '3,000',
            'Card Capacity' => '5,000',
            'Transaction Capacity' => '30,000',
            'Sensor' => 'SilkID Sensor',
            'Communication' => 'RS232/485, TCP/IP, USB-host, Wi-Fi',
            'Dimension (LxWxH)' => '158.5x78.0x19.4mm',
            'Access Control Interface' => 'Electromagnetic Lock/Electric Lock, Door Sensor, Exit Button, No Touch Sensor'
        ],
        'features' => ['WiFi Connectivity', 'TFT Display', 'SilkID Sensor', 'Access Control'],
        'keywords' => 'F22 WiFi, fingerprint, wireless, SilkID sensor, TFT display, 3000 templates'
    ],

    6 => [
        'id' => 6,
        'name' => 'eSSL SILK-FP-101TA',
        'category' => 'Fingerprint',
        'model' => 'SILK-FP-101TA',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/SilkFP-101TA.png',                    
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/SilkFP-101TA.pdf',            
        'original_price' => 10000,             // not provided
        'discounted_price' => 9000,           // not provided
        'discount' => 10,                   // not provided
        'description' => 'TIME ATTENDANCE SYSTEM',
        'specifications' => [
            'Fingerprint Capacity' => '3,000',
            'ID Card Capacity' => '10,000',
            'Transaction Capacity' => '1,00,000',
            'Display' => '2.8-inch TFT Screen',
            'Communication' => 'TCP/IP, USB(Host & Client)',
            'Push Data' => 'Yes',
            'Standard Functions' => 'Work Code, SMS, DST, Scheduled-bell, Self-Service Query, Automatic Status Switch, T9 Input',
            'Power Supply' => 'DC 5V --- 0.8A',
            'Operating Temperature' => '0°C - 45°C',
            'Operating Humidity' => '20% - 80%',
            'Dimensions' => '(L)192.0 × (W)140.0 × (H)42.5mm',
            'Package Weight' => '1.05 kg'
        ],
        'features' => [
            'Fingerprint Capacity: 3,000',
            'ID Card Capacity: 10,000',
            'Transaction Capacity: 1,00,000',
            'Push Data',
            '2.8-inch TFT Screen'
        ],
        'keywords' => 'SILK-FP-101TA, fingerprint, biometric, time attendance, push data, TCP/IP, USB'
    ],    

    7 => [
        'id' => 7,
        'name' => 'eSSL E9C Wi-Fi',
        'category' => 'Fingerprint',
        'model' => 'E9C Wi-Fi',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/e9c.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/E9C-Wi-Fi.pdf',
        'original_price' => 17500,
        'discounted_price' => 12800,
        'discount' => 27,
        'description' => 'High-capacity system with WiFi and color TFT display',
        'specifications' => [
            'User Capacity' => '10,000',
            'Fingerprint Capacity' => '3,000',
            'Card Capacity' => '10,000',
            'Transactions Capacity' => '1,00,000',
            'Display' => '2.8" Color TFT',
            'Push Data' => 'Standard',
            'Communication' => 'USB-host, TCP/IP, Wi-Fi',
            'Power Supply' => '5V DC, 2 A',
            'Operating Temperature' => '0°C ~ 45°C',
            'Fingerprint Sensor' => '500 DPI Optical sensor'
        ],
        'features' => ['High Capacity', 'WiFi', 'Color TFT', 'Push Data'],
        'keywords' => 'E9C, fingerprint, WiFi, high capacity, 10000 users, color TFT'
    ],

    8 => [
        'id' => 8,
        'name' => 'eSSL F18',
        'category' => 'Fingerprint',
        'model' => 'F18',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/f18/F18.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/F18.pdf',
        'video' => 'https://www.youtube.com/watch?v=CEvoRdT5uMc',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/f18connectiondiagram.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/F18UserManual.pdf',
        'original_price' => 16500,
        'discounted_price' => 12000,
        'discount' => 27,
        'description' => 'Advanced system with 32-bit processor and color TFT display',
        'specifications' => [
            'Fingerprints Capacity' => '3,000',
            'Card Capacity' => '5,000',
            'Transaction Capacity' => '1,00,000',
            'CPU' => '32 bit High End Microprocessor',
            'Fingerprint Sensor' => '500 DPI Optical sensor',
            'FAR' => '<=0.0001%',
            'FRR' => '<=1%',
            'Identification Speed' => '<=0.5sec',
            'Display' => '2.8" color TFT',
            'Keypad' => 'Yes',
            'LED Indicator' => 'Green/Red',
            'Schedule Bell/Speaker' => 'Mini Speaker',
            'Communication' => 'TCP/IP, USB host',
            'Push Data' => 'Standard'
        ],
        'features' => ['32-bit Processor', 'Color TFT', 'Keypad', 'Fast Recognition'],
        'keywords' => 'F18, fingerprint, 32-bit processor, color TFT, keypad, 3000 templates'
    ],

    9 => [
        'id' => 9,
        'name' => 'eSSL X990',
        'category' => 'Fingerprint',
        'model' => 'X990',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/x990/x990.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/x990/X990Catalog.pdf',
        'video' => 'https://www.youtube.com/embed/8IxyAYBCRi8?si=m4N0_Ub_olP0VdIE',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/X990connectiondiagram.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/X990_usermanual.pdf',
        'original_price' => 18500,
        'discounted_price' => 11000,
        'discount' => 41,
        'description' => 'Professional system with 800MHz processor and high capacity',
        'specifications' => [
            'Fingerprints Capacity' => '10,000',
            'Card Capacity' => '10,000',
            'Transactions Capacity' => '1,00,000',
            'Card Reader' => 'Inbuilt proximity card reader (optional Mifare, HID prox)',
            'CPU' => '800 MHz - 32bit Microprocessor',
            'Fingerprint Sensor' => '500 DPI Optical Sensor',
            'FAR' => '<=0.0001%',
            'FRR' => '<=1%',
            'Identification Speed' => '<0.5 sec',
            'Communication' => 'TCP/IP, USB, (Optional: Wifi, GPRS)'
        ],
        'features' => ['800MHz CPU', 'High Capacity', 'Multiple Card Types', 'Optional GPRS'],
        'keywords' => 'X990, fingerprint, biometric, attendance, access control, 10000 templates'
    ],

    10 => [
        'id' => 10,
        'name' => 'eSSL Iclock 990',
        'category' => 'Fingerprint',
        'model' => 'Iclock 990',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/iclock990/iClock-990.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/iClock-990.pdf',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/iclock990connectiondiagram.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/iclock990Manual.pdf',
        'video' => 'https://www.youtube.com/watch?v=9mJNLyxFPwM',
        'original_price' => 25000,
        'discounted_price' => 18500,
        'discount' => 26,
        'description' => 'Enterprise-grade system with massive 40,000 user capacity',
        'specifications' => [
            'User Capacity' => '40,000',
            'Fingerprint Capacity' => '40,000',
            'Card Capacity' => '40,000',
            'Transactions Capacity' => '8,00,000',
            'CPU' => '32 bit Microprocessor',
            'Fingerprint Sensor' => '500 DPI Optical Sensor',
            'FAR' => '<=0.0001%',
            'FRR' => '<=1%',
            'Identification Speed' => '<1 sec',
            'Display' => '3.5" Color TFT',
            'Communication' => 'TCP/IP, USB, (Optional: Wifi, GPRS, Camera)'
        ],
        'features' => ['Enterprise Grade', 'Massive Capacity', '3.5" Display', 'Optional Camera'],
        'keywords' => 'Iclock 990, fingerprint, enterprise, 40000 users, massive capacity, 3.5 TFT'
    ],

    11 => [
        'id' => 11,
        'name' => 'eSSL MB20',
        'category' => 'Face',
        'model' => 'MB20',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/face/mb20/mb20.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/face/MB20.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/face/user-manual-kf160-mb160-mb360-mb20.pdf',
        'original_price' => 19000,
        'discounted_price' => 14500,
        'discount' => 24,
        'description' => 'Multi-biometric system with face and fingerprint recognition',
        'specifications' => [
            'User Capacity' => '1,000',
            'Fingerprint Capacity' => '2,000',
            'Face Capacity' => '500',
            'Transaction Capacity' => '50,000',
            'Display' => '2.8" Color LCD',
            'Push Data' => 'Yes',
            'Access Control Interface' => 'Electromagnetic Lock/Electric Lock, Door Sensor, Exit Button, No Touch Sensor',
            'Communication' => 'TCP/IP, USB-Host',
            'Dimension (in mm)' => '(L) 161.93 x (W)152.82 x (H)30.59'
        ],
        'features' => ['Multi-Biometric', 'Face Recognition', 'Access Control', 'Push Data'],
        'keywords' => 'MB20, multi-biometric, face recognition, fingerprint, 500 faces, 2000 fingerprints'
    ],

    // Multi-Biometric Time Attendance & Access Control
    12 => [
        'id' => 12,
        'name' => 'eSSL MB160',
        'category' => 'Face',
        'model' => 'MB 160',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/face/mb160/mb160.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/face/catalogue/MB160.pdf',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/MB160_QuickGuide.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/kf160_mb160_usermanual.pdf',
        'original_price' => 22000,
        'discounted_price' => 16500,
        'discount' => 25,
        'description' => 'Advanced multi-biometric system with face and fingerprint recognition',
        'specifications' => [
            'Face Capacity' => '1,500',
            'Fingerprint Capacity' => '2,000',
            'Card Capacity' => '2,000',
            'Transaction Capacity' => '1,00,000',
            'Push Data' => 'Yes',
            'Display' => '2.8-inch TFT Screen',
            'Communication' => 'TCP/IP, USB-Host',
            'Optional' => 'Battery and External Printer',
            'Access Control Interface' => 'Electromagnetic Lock/Electric Lock, Door Sensor, Exit Button, No Touch Sensor'
        ],
        'features' => ['Multi-Biometric', 'TFT Screen', 'Optional Battery', 'External Printer'],
        'keywords' => 'MB 160, multi-biometric, face recognition, fingerprint, 1500 faces, optional battery'
    ],

    13 => [
        'id' => 13,
        'name' => 'eSSL Silk Bio 101TC',
        'category' => 'Face',
        'model' => 'Silk Bio 101TC',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/face/silkbio101tc/silkbio101tc.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/face/catalogue/SilkBio-101TC.pdf',
        'video' => 'https://www.youtube.com/watch?v=4iB6shgPr9o',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/SilkBio-101TC_connectionGuide.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/SilkBio_100TC_User_Manual%20.pdf',
        'original_price' => 24000,
        'discounted_price' => 18000,
        'discount' => 25,
        'description' => 'Professional multi-biometric system with built-in battery',
        'specifications' => [
            'Face Capacity' => '2,000',
            'Fingerprint Capacity' => '3,000',
            'Transaction Capacity' => '1,00,000',
            'ID Card Capacity' => '3,000',
            'Push Data' => 'Yes',
            'Display' => '2.8-inch TFT Screen',
            'Communication' => 'TCP/IP, USB-Host, Wi-Fi(Optional)',
            'Built-in Battery' => 'Yes'
        ],
        'features' => ['Multi-Biometric', 'Built-in Battery', 'WiFi Optional', 'High Capacity'],
        'keywords' => 'Silk Bio 101TC, multi-biometric, built-in battery, 2000 faces, 3000 fingerprints'
    ],

    14 => [
        'id' => 14,
        'name' => 'eSSL uFace 302',
        'category' => 'Face',
        'model' => 'uFace 302',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/face/uface302/uFace-302.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/face/catalogue/uface-302.pdf',
        'video' => 'https://www.youtube.com/watch?v=1WyFEeV4Tk4&feature=youtu.be',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/Uface-302_Connection_Diagram.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/UFACE_302_MANUAL.pdf',
        'original_price' => 28000,
        'discounted_price' => 21000,
        'discount' => 25,
        'description' => 'Advanced multi-biometric terminal with 4G connectivity',
        'specifications' => [
            'Face Capacity' => '3,000',
            'Fingerprints Capacity' => '4,000',
            'Card Capacity' => '3,000',
            'Transaction Capacity' => '1,00,000',
            'Push Data' => 'Yes',
            'Communication' => 'TCP/IP, RS232/485, USB Host, WiFi, 4G',
            'Display' => '4.3-Inch Touch Screen'
        ],
        'features' => ['Multi-Biometric', '4G Connectivity', '4.3" Touch Screen', 'Multiple Communication'],
        'keywords' => 'uFace 302, multi-biometric, 4G connectivity, 4.3 touch screen, 3000 faces'
    ],

    15 => [
        'id' => 15,
        'name' => 'eSSL eFace-990',
        'category' => 'Face',
        'model' => 'eFace-990',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/face/eface990/eFace-990.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/face/catalogue/eFace-990.pdf',
        'video' => 'https://www.youtube.com/watch?v=H6fsIa_P5BM',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/EFace_990_Connection_Diagram.pdf',
        'original_price' => 32000,
        'discounted_price' => 24500,
        'discount' => 23,
        'description' => 'Premium multi-biometric system with POE and massive transaction capacity',
        'specifications' => [
            'Fingerprints' => '10,000(1:N)',
            'Faces' => '6,000(1:N) 10,000(1:1)',
            'Cards' => '10,000',
            'Transactions' => '1,000,000',
            'Push Data' => 'Yes',
            'Communication' => 'TCP/IP, USB-host',
            'Optional Functions' => 'Mifare Card Reader, Wi-Fi/4G External Printer, Battery (2,000 mAH), POE(Standard IEEE 802.3at)'
        ],
        'features' => ['Premium Grade', 'POE Support', 'Massive Transactions', 'Optional 4G'],
        'keywords' => 'eFace-990, premium multi-biometric, POE, 6000 faces, 10000 fingerprints, 1M transactions'
    ],

    // Standalone RFID Time Attendance & Access Control
    16 => [
        'id' => 16,
        'name' => 'eSSL S990',
        'category' => 'RFID Readers',
        'model' => 'S990',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/rfidreaders/S990A.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/rfidreaders/S-990A.pdf',
        'original_price' => 15000,
        'discounted_price' => 11200,
        'discount' => 25,
        'description' => 'Standalone RFID system with high card capacity',
        'specifications' => [
            'Card Storage' => '30,000',
            'Transaction Capacity' => '1,00,000',
            'Card Reader' => 'Yes',
            'CPU' => '32 bit Microprocessor – 800MHz',
            'FAR' => '<=0.0001%',
            'FRR' => '<=1%',
            'Identification Speed' => '< 1 sec',
            'Display' => '2.8"TFT',
            'Keypad' => '4x4 with 5 Function Keys',
            'Schedule Bell/Speaker' => 'Mini Speaker'
        ],
        'features' => ['RFID Only', 'High Capacity', '800MHz CPU', 'TFT Display'],
        'keywords' => 'S990, RFID, card reader, 30000 cards, 800MHz CPU, TFT display'
    ],

    17 => [
        'id' => 17,
        'name' => 'eSSL SC 405 ID',
        'category' => 'RFID Readers',
        'model' => 'SC 405 ID',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/rfidreaders/SC405.jpg',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/rfidreaders/SC405.pdf',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/rfidreaders/SC-405_Connection_Diagram.pdf',
        'original_price' => 12000,
        'discounted_price' => 8500,
        'discount' => 29,
        'description' => 'Proximity time attendance system with access control',
        'specifications' => [
            'Users' => '30,000 Cards',
            'Transactions' => '1,00,000',
            'CPU' => '32bit Microprocessor',
            'Read Range' => '8 - 10 cms',
            'Identification Speed' => '<=1 Sec',
            'Communication' => 'RS232, RS485, TCP/IP, USB-HOST 2.0 Port',
            'Power' => '12V DC, 400mA',
            'Optional Features' => 'ID/Mifare/HID Proximity Anti-passback'
        ],
        'features' => ['Proximity Cards', 'Anti-passback', 'Multiple Protocols', 'High Capacity'],
        'keywords' => 'SC 405 ID, proximity cards, anti-passback, 30000 cards, ID/Mifare/HID'
    ],

    // AI Face Recognition Systems
    18 => [
        'id' => 18,
        'name' => 'eSSL AiFace-Mercury',
        'category' => 'AI Face',
        'model' => 'AiFace-Mercury',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/face/aiface-mercury/Mercury.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/aiface/mercury/AiFaceMercuryCatalog.pdf',
        'video' => 'https://www.youtube.com/embed/AiFaceMercuryDemo',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/AiFaceMercuryConnectionDiagram.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/AiFaceMercury_usermanual.pdf',
        'original_price' => 18000,
        'discounted_price' => 13500,
        'discount' => 25,
        'description' => 'Compact AI face recognition system with WiFi',
        'specifications' => [
            'Display' => '2.8-inch Touch Screen',
            'Face Capacity' => '800',
            'User Capacity' => '800',
            'Transactions' => '150,000',
            'Communication' => 'WIFI',
            'Working Temperature' => '-10°C~45°C',
            'Dimensions' => '(W*H*D) 100*100.2*23.7mm',
            'Access Control Interface' => 'Electromagnetic Lock/Electric Lock, Door Sensor, Exit Button, No Touch Sensor'
        ],
        'features' => ['AI Face Recognition', 'WiFi', 'Touch Screen', 'Compact Design'],
        'keywords' => 'AiFace-Mercury, AI face recognition, WiFi, compact, 800 faces, touch screen'
    ],

    19 => [
        'id' => 19,
        'name' => 'eSSL AiFace-Uranus',
        'category' => 'AI Face',
        'model' => 'AiFace-Uranus',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/aiface/uranus/aiface-uranus.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/aiface/uranus/AiFaceUranusCatalog.pdf',
        'video' => 'https://www.youtube.com/embed/AiFaceUranusDemo',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/AiFaceUranusConnectionDiagram.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/AiFaceUranus_usermanual.pdf',
        'original_price' => 20000,
        'discounted_price' => 15000,
        'discount' => 25,
        'description' => 'Multi-biometric AI system with stereo speaker',
        'specifications' => [
            'Max User (1:N)' => '500',
            'Max Fingerprint (1:N)' => '2,000',
            'Max Face (1:N)' => '500',
            'Max Record' => '50,000',
            'TCP/IP' => '10M/100M',
            'Optional' => '125kHz EM / 13.56MHz MIFARE',
            'USB' => 'USB 2.0 (Host)',
            'LCD' => '2.8" Color LCD',
            'Sound' => 'Stereo speaker',
            'Power' => 'DC 5V 0.8A',
            'Dimensions (W x H x D mm)' => '167.9 x 151.5 x 30'
        ],
        'features' => ['Multi-Biometric AI', 'Stereo Speaker', 'Color LCD', 'Optional MIFARE'],
        'keywords' => 'AiFace-Uranus, multi-biometric AI, stereo speaker, 500 faces, 2000 fingerprints'
    ],

    20 => [
        'id' => 20,
        'name' => 'eSSL AiFace-Neptune',
        'category' => 'AI Face',
        'model' => 'AiFace-Neptune',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/aiface/neptune/aiface-neptune.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/aiface/neptune/AiFaceNeptuneCatalog.pdf',
        'video' => 'https://www.youtube.com/embed/AiFaceNeptuneDemo',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/AiFaceNeptuneConnectionDiagram.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/AiFaceNeptune_usermanual.pdf',
        'original_price' => 22000,
        'discounted_price' => 16500,
        'discount' => 25,
        'description' => 'Professional AI face recognition with 4.3" touch screen',
        'specifications' => [
            'Face Capacity' => '500',
            'User Capacity' => '1,000',
            'Card Capacity' => '1,000 (Optional)',
            'Transactions' => '150,000',
            'Communication' => 'TCP/IP, Wi-Fi & battery (Optional), USB Host',
            'Display' => '4.3-inch Touch Screen',
            'Access Control Interface' => 'Electromagnetic Lock/Electric Lock, Door Sensor, Exit Button, No Touch Sensor'
        ],
        'features' => ['AI Face Recognition', '4.3" Touch Screen', 'Optional Battery', 'WiFi'],
        'keywords' => 'AiFace-Neptune, AI face recognition, 4.3 touch screen, optional battery, WiFi'
    ],

    21 => [
        'id' => 21,
        'name' => 'eSSL AiFace-Pluto',
        'category' => 'AI Face',
        'model' => 'AiFace-Pluto',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/aiface/pluto/aiface-pluto.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/aiface/pluto/AiFacePlutoCatalog.pdf',
        'video' => 'https://www.youtube.com/embed/AiFacePlutoDemo',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/AiFacePlutoConnectionDiagram.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/AiFacePluto_usermanual.pdf',
        'original_price' => 19000,
        'discounted_price' => 14200,
        'discount' => 25,
        'description' => 'Compact AI face system with Wiegand support',
        'specifications' => [
            'Display' => '4" touch screen',
            'Face Capacity' => '1,000',
            'Card Capacity' => '1,000',
            'Transactions' => '150,000',
            'Communication' => 'TCP/IP, WIFI, Wiegand input/output, RS485',
            'Dimensions (W*H*D)' => '72.94 * 157.94 * 23 (mm)',
            'Access Control Interface' => 'Electromagnetic Lock/Electric Lock, Door Sensor, Exit Button, No Touch Sensor'
        ],
        'features' => ['AI Face Recognition', 'Wiegand Support', 'Compact', '4" Touch Screen'],
        'keywords' => 'AiFace-Pluto, AI face recognition, wiegand support, compact, 1000 faces'
    ],

    22 => [
        'id' => 22,
        'name' => 'eSSL AiFace-Mars',
        'category' => 'AI Face',
        'model' => 'AiFace-Mars',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/aiface/mars/aiface-mars.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/aiface/mars/AiFaceMarsCatalog.pdf',
        'video' => 'https://www.youtube.com/embed/AiFaceMarsDemo',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/AiFaceMarsConnectionDiagram.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/AiFaceMars_usermanual.pdf',
        'original_price' => 24000,
        'discounted_price' => 18000,
        'discount' => 25,
        'description' => 'Advanced AI face recognition with 5" touch screen',
        'specifications' => [
            'Display' => '5-inch Touch Screen',
            'Face Capacity' => '3,000',
            'Card Capacity' => '3,000',
            'Transactions' => '150,000',
            'Communication' => 'TCP/IP, WIFI(Optional), Wiegand input/output, RS485',
            'Dimension' => '(W*H*D) 91.93*202.93*21.5mm',
            'Access Control Interface' => 'Electromagnetic Lock/Electric Lock, Door Sensor, Exit Button, No Touch Sensor'
        ],
        'features' => ['AI Face Recognition', '5" Touch Screen', 'High Capacity', 'Optional WiFi'],
        'keywords' => 'AiFace-Mars, AI face recognition, 5 inch touch screen, 3000 faces, optional WiFi'
    ],

    23 => [
        'id' => 23,
        'name' => 'eSSL AiFace Venus',
        'category' => 'AI Face',
        'model' => 'AiFace Venus',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/aiface/venus/aiface-venus.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/aiface/venus/AiFaceVenusCatalog.pdf',
        'video' => 'https://www.youtube.com/embed/AiFaceVenusDemo',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/AiFaceVenusConnectionDiagram.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/AiFaceVenus_usermanual.pdf',
        'original_price' => 26000,
        'discounted_price' => 19500,
        'discount' => 25,
        'description' => 'Premium AI face recognition with massive capacity',
        'specifications' => [
            'Display' => '5-inch Touch Screen',
            'Face Capacity' => '6,000',
            'Card Capacity' => '10,000',
            'Transactions' => '200,000',
            'Communication' => 'TCP/IP, WiFi (Optional), Wiegand input/output, RS485',
            'Dimension' => '100*203.3*24.5mm',
            'Access Control Interface' => 'Electromagnetic Lock/Electric Lock, Door Sensor, Exit Button, No Touch Sensor'
        ],
        'features' => ['Premium AI Face', 'Massive Capacity', '5" Touch Screen', 'Optional WiFi'],
        'keywords' => 'AiFace Venus, premium AI face, massive capacity, 6000 faces, 10000 cards'
    ],

    24 => [
        'id' => 24,
        'name' => 'eSSL AiFace-Jupiter',
        'category' => 'AI Face',
        'model' => 'AiFace-Jupiter',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/aiface/jupiter/aiface-jupiter.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/aiface/jupiter/AiFaceJupiterCatalog.pdf',
        'video' => 'https://www.youtube.com/embed/AiFaceJupiterDemo',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/AiFaceJupiterConnectionDiagram.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/AiFaceJupiter_usermanual.pdf',
        'original_price' => 30000,
        'discounted_price' => 22500,
        'discount' => 25,
        'description' => 'Enterprise AI system with Linux OS and dual biometric',
        'specifications' => [
            'Display' => '5-inch Touch Screen',
            'Face Capacity' => '6,000',
            'Fingerprint Capacity' => '6,000 (Standard); 10,000 (Optional)',
            'Card Capacity' => '10,000',
            'Transactions' => '200,000',
            'Operation System' => 'Linux',
            'Communication' => 'TCP/IP, WiFi (Optional), Wiegand input/output, RS485',
            'Access Control Interface' => 'Electromagnetic Lock/Electric Lock, Door Sensor, Exit Button, No Touch Sensor'
        ],
        'features' => ['Enterprise AI', 'Linux OS', 'Dual Biometric', '5" Touch Screen'],
        'keywords' => 'AiFace-Jupiter, enterprise AI, Linux OS, dual biometric, 6000 faces, 6000 fingerprints'
    ],

    25 => [
        'id' => 25,
        'name' => 'eSSL Aiface Magnum',
        'category' => 'AI Face',
        'model' => 'Aiface Magnum',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/aiface/magnum/aiface-magnum.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/aiface/magnum/AifaceMagnumCatalog.pdf',
        'video' => 'https://www.youtube.com/embed/AifaceMagnumDemo',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/AifaceMagnumConnectionDiagram.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/AifaceMagnum_usermanual.pdf',
        'original_price' => 25000,
        'discounted_price' => 18750,
        'discount' => 25,
        'description' => 'Professional face recognition with eSSLFace 3.5 algorithm',
        'specifications' => [
            'Face Capacity' => '1,500',
            'Fingerprint Capacity' => '5,000',
            'Card Capacity' => '10,000',
            'Transaction Capacity' => '200,000',
            'Display' => '2.4-inch touch Screen',
            'Facial Recognition Algorithm' => 'eSSLFace 3.5',
            'Facial Recognition Speed' => '< 1s',
            'Facial Recognition Distance' => '0.5m to 2m',
            'Communication' => 'TCP/IP,WiFi(Optional),Wiegand Input/Output,RS485',
            'Operation System' => 'Linux'
        ],
        'features' => ['eSSLFace 3.5', 'Linux OS', 'Multi-Biometric', 'Professional Grade'],
        'keywords' => 'Aiface Magnum, eSSLFace 3.5, Linux OS, 1500 faces, 5000 fingerprints'
    ],

    26 => [
        'id' => 26,
        'name' => 'eSSL MU-AI-9 M/F',
        'category' => 'AI Face',
        'model' => 'MU-AI-9 M/F',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/aiface/muai9/mu-ai-9.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/aiface/muai9/MUAI9Catalog.pdf',
        'video' => 'https://www.youtube.com/embed/MUAI9Demo',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/MUAI9ConnectionDiagram.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/MUAI9_usermanual.pdf',
        'original_price' => 35000,
        'discounted_price' => 26250,
        'discount' => 25,
        'description' => 'Dual camera AI system with massive 50,000 face capacity',
        'specifications' => [
            'Face Capacity' => '50,000',
            'Card Capacity' => '50,000',
            'Transactions Capacity' => '50,000',
            'Operation System' => 'Linux',
            'Network Interface' => '1*100M Ethernet Port',
            'WiFi' => 'Support 2.4ghz',
            'Screen Size' => '2.8 inch',
            'Camera Resolution' => '2MP *2',
            'Wiegand' => '34/26, 1 in /1 out',
            'Dimensions' => '94mm x94mm x17mm'
        ],
        'features' => ['Dual Camera', 'Massive Capacity', 'Linux OS', '2.4GHz WiFi'],
        'keywords' => 'MU-AI-9, dual camera, massive capacity, 50000 faces, Linux OS, 2MP cameras'
    ],

    27 => [
        'id' => 27,
        'name' => 'eSSL AiFace ERIS',
        'category' => 'AI Face',
        'model' => 'AiFace ERIS',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/aiface/eris/aiface-eris.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/aiface/eris/AiFaceERISCatalog.pdf',
        'video' => 'https://www.youtube.com/embed/AiFaceERISDemo',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/AiFaceERISConnectionDiagram.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/AiFaceERIS_usermanual.pdf',
        'original_price' => 28000,
        'discounted_price' => 21000,
        'discount' => 25,
        'description' => 'Multi-biometric terminal with alarm output functionality',
        'specifications' => [
            'Display' => '4-inch color LED touch screen',
            'Face Template Capacity' => '3,000',
            'Fingerprint Template Capacity' => '3,000',
            'Card Capacity' => '3,000',
            'Transaction Capacity' => '2,00,000',
            'Communication' => 'TCP/IP, Wiegand (Input & Output), RS485, USB, Wi-Fi(Optional)',
            'Push Data' => 'Yes',
            'Access Control Interface' => 'Electro Magnetic Lock/Electric Lock, Door Sensor, Exit Button, Alarm Output',
            'Dimensions' => '183 mm*88 mm*20.5 mm (L*W*H)'
        ],
        'features' => ['Multi-Biometric', 'Alarm Output', 'LED Touch Screen', 'Optional WiFi'],
        'keywords' => 'AiFace ERIS, multi-biometric, alarm output, 4 inch LED touch screen, 3000 faces'
    ],

    28 => [
        'id' => 28,
        'name' => 'eSSL Aiface Mars + QR Code',
        'category' => 'AI Face',
        'model' => 'Aiface Mars + QR Code',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/aiface/marsqr/aiface-mars-qr.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/aiface/marsqr/AifaceMarsQRCatalog.pdf',
        'video' => 'https://www.youtube.com/embed/AifaceMarsQRDemo',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/AifaceMarsQRConnectionDiagram.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/AifaceMarsQR_usermanual.pdf',
        'original_price' => 26000,
        'discounted_price' => 19500,
        'discount' => 25,
        'description' => 'Advanced AI face system with QR code scanner support',
        'specifications' => [
            'Display' => '5-inch color LED touch screen',
            'Face Template Capacity' => '6,000',
            'Card Capacity' => '10,000',
            'Transaction Capacity' => '2,00,000',
            'Communication' => 'TCP/IP, Wiegand (Input & Output), RS485, USB, Wi-Fi (Optional)',
            'Push Data' => 'Yes',
            'QR Sensor' => 'QR Code, PDF417, Data Matrix, MicroPDF417',
            'Access Control Interface' => 'Electro Magnetic Lock/Electric Lock, Door Sensor, Exit Button, Alarm Output',
            'Dimensions' => '183 mm*88 mm*20.5 mm (L*W*H)'
        ],
        'features' => ['AI Face + QR', 'Multiple QR Formats', 'LED Touch Screen', 'Alarm Output'],
        'keywords' => 'Aiface Mars QR Code, AI face recognition, QR scanner, 6000 faces, multiple QR formats'
    ],

    29 => [
        'id' => 29,
        'name' => 'eSSL MU-AI-5',
        'category' => 'AI Face',
        'model' => 'MU-AI-5',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/aiface/muai5/mu-ai-5.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/aiface/muai5/MUAI5Catalog.pdf',
        'video' => 'https://www.youtube.com/embed/MUAI5Demo',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/MUAI5ConnectionDiagram.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/MUAI5_usermanual.pdf',
        'original_price' => 32000,
        'discounted_price' => 24000,
        'discount' => 25,
        'description' => 'High-capacity AI face system with password support',
        'specifications' => [
            'Face Capacity' => '50,000',
            'Password Capacity' => '50,000',
            'Transaction Capacity' => '50,000',
            'Display' => '5-inch touch screen',
            'Face Recognition Distance' => '0.3 to 2m',
            'Dimensions' => '163.4 mm*75.9 mm*19.5 mm (L*W*H)',
            'Access Control Interface' => 'Electro Magnetic Lock/Electric Lock, Door Sensor, Exit Button, Alarm Output'
        ],
        'features' => ['High Capacity', '5" Touch Screen', 'Password Support', 'Alarm Output'],
        'keywords' => 'MU-AI-5, high capacity, 50000 faces, password support, 5 inch touch screen'
    ],

    30 => [
        'id' => 30,
        'name' => 'eSSL Magnum Lite',
        'category' => 'AI Face',
        'model' => 'Magnum Lite',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/aiface/magnumlite/magnum-lite.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/aiface/magnumlite/MagnumLiteCatalog.pdf',
        'video' => 'https://www.youtube.com/embed/MagnumLiteDemo',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/MagnumLiteConnectionDiagram.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/MagnumLite_usermanual.pdf',
        'original_price' => 22000,
        'discounted_price' => 16500,
        'discount' => 25,
        'description' => 'Lite version of Magnum with eSSL Face 3.5 algorithm',
        'specifications' => [
            'Face Capacity' => '1,500',
            'Card Capacity' => '10,000',
            'Transaction Capacity' => '200,000',
            'Display' => '2.4-inch touch screen',
            'Facial Recognition Algorithm' => 'eSSL Face 3.5',
            'Facial Recognition Speed' => '<1s',
            'Facial Recognition Distance' => '0.5m to 2m',
            'Communication' => 'TCP/IP,WIFI (Optional), Wiegand Input/Output,RS485',
            'Operation System' => 'Linux'
        ],
        'features' => ['eSSL Face 3.5', 'Linux OS', 'Touch Screen', 'Optional WiFi'],
        'keywords' => 'Magnum Lite, eSSL Face 3.5, Linux OS, 1500 faces, optional WiFi'
    ],

    31 => [
        'id' => 31,
        'name' => 'eSSL EyeFace-99',
        'category' => 'AI Face',
        'model' => 'EyeFace-99',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/aiface/eyeface99/eyeface-99.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/aiface/eyeface99/EyeFace99Catalog.pdf',
        'video' => 'https://www.youtube.com/embed/EyeFace99Demo',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/EyeFace99ConnectionDiagram.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/EyeFace99_usermanual.pdf',
        'original_price' => 45000,
        'discounted_price' => 33750,
        'discount' => 25,
        'description' => 'Advanced face recognition with video call capability',
        'specifications' => [
            'Face Capacity' => '50,000',
            'Screen' => 'Screen with a full-view no less than 170 degree',
            'Camera Resolution' => '800×1280',
            'Communication Mode' => 'WIFI, TCP/IP',
            'Bell Loudspeaker' => 'Built-in 2W loudspeaker',
            'Fill-in Light' => 'Automatic infrared fill-in',
            'Microphone' => 'Used in video call & message leaving',
            'Recognition Distance' => '40cm-70cm'
        ],
        'features' => ['Video Call', '170° View', 'Infrared Fill-in', '2W Speaker'],
        'keywords' => 'EyeFace-99, video call capability, 170 degree view, infrared fill-in, 50000 faces'
    ],

    // Thermal Printer
    32 => [
        'id' => 32,
        'name' => 'eSSL-SP-2 Thermal Printer',
        'category' => 'Thermal Printer',
        'model' => 'eSSL-SP-2',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/printer/sp2/essl-sp-2.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/printer/sp2/SP2Catalog.pdf',
        'video' => 'https://www.youtube.com/embed/SP2Demo',
        'installation_guide_pdf' => 'https://www.esslsecurity.com/storage/app/media/Connection-Diagram/SP2ConnectionDiagram.pdf',
        'manual_pdf' => 'https://www.esslsecurity.com/storage/app/media/User-Manual/SP2_usermanual.pdf',
        'original_price' => 8500,
        'discounted_price' => 6200,
        'discount' => 27,
        'description' => 'Thermal line printer for attendance systems',
        'specifications' => [
            'Interfaces' => 'Serial (RS232)',
            'Printing Method' => 'Thermal Line Printing',
            'Paper Width' => '58mm (2 inch)',
            'Paper Thickness' => '55 to 75 GSM',
            'Printer Speed' => '70mm/Sec',
            'Printer Core Life' => '75 Kms',
            'Print Commands' => 'ESC',
            'Resolution' => '8dots/mm (203dpi)',
            'Print Commands' => 'ESC/POS Compatible Command Set',
            'Data Buffer' => '4K Bytes'
        ],
        'features' => ['Thermal Printing', 'ESC/POS Compatible', 'Serial Interface', 'High Speed'],
        'keywords' => 'SP-2, thermal printer, ESC/POS compatible, 70mm/sec, attendance systems'
    ],
    33 => [
        'id' => 33,
        'name' => 'eSSL WL20',
        'category' => 'Fingerprint',
        'model' => 'WL20',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/WL20.png',                   
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/WL20.pdf',                        
        'original_price' => 0,           
        'discounted_price' => 0,         
        'discount' => 0,                 
        'description' => 'WIRELESS TIME ATTENDANCE & SYSTEM',
        'specifications' => [
            'Fingerprint Capacity' => '1,000',
            'Finger Algorithm' => 'Finger VX10.0',
            'Record Capacity' => '50,000',
            'Display' => '2.8-inch TFT Screen',
            'Communication' => 'Wi-Fi, USB Host, USB Client',
            'Push Data' => 'Yes',
            'Standard Functions' => 'SSR, DST, Scheduled-Bell, Self-Service Query, Automatic Status Switch, T9 Input, 9 digit user ID',
            'Power Supply' => 'DC 5V --- 0.8A',
            'Operating Temperature' => '0°C - 45°C',
            'Operating Humidity' => '20% - 80%',
            'Dimensions' => '(L)65 x (W)133 x (H)21 mm'
        ],
        'features' => [
            'Wi-Fi',
            'USB Host',
            'USB Client',
            'Stable operation under strong light source',
            'Infrared auto-turning on function to save power',
            'Built-in SSR Excel software, Shift and Report management'
        ],
        'keywords' => 'WL20, fingerprint, wireless, biometric, time attendance, Wi-Fi'
    ],
    34 => [
        'id' => 34,
        'name' => 'eSSL UA300',
        'category' => 'Fingerprint',
        'model' => 'UA300',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/ua300.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/UA300.pdf',
        'original_price' => 0,
        'discounted_price' => 0,
        'discount' => 0,
        'description' => 'FINGERPRINT TIME AND ATTENDANCE SYSTEM',
        'specifications' => [
            'Fingerprint Capacity' => '3,000 templates',
            'Card Capacity' => '10,000 (optional)',
            'Transaction Capacity' => '1,00,000 logs',
            'CPU' => '800 MHz processor',
            'Display' => '3” TFT screen',
            'Verification Speed' => '≤0.5 sec',
            'FAR' => '≤0.0001%',
            'FRR' => '≤1%',
            'Communication' => 'TCP/IP, USB host & client',
            'Power Supply' => '5V DC, 2A',
            'Operating Temperature' => '0°C - 45°C',
            'Operating Humidity' => '20% - 80%',
            'Dimensions' => '180 x 135 x 37 mm'
        ],
        'features' => [
            'Intuitive and stunning UI',
            'Modularized hierarchical design',
            'Faster matching speed (<0.5 sec)',
            'Support user validity settings',
            'Support data backup and retrieve',
            'Advanced workcode letters and numbers'
        ],
        'keywords' => 'UA300, fingerprint, biometric, time attendance, 800MHz CPU'
    ],
    36 => [
        'id' => 36,
        'name' => 'eSSL K90 Pro',
        'category' => 'Fingerprint',
        'model' => 'K90 Pro',
        'brand' => 'eSSL Security',
        'image' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/K90.png',
        'pdf_catalogue' => 'https://www.esslsecurity.com/storage/app/media/fingerprint/K90-Pro.pdf',
        'original_price' => 0,
        'discounted_price' => 0,
        'discount' => 0,
        'description' => 'FINGERPRINT TIME & ATTENDANCE WITH ACCESS CONTROL SYSTEM',
        'specifications' => [
            'Fingerprints Capacity' => '800',
            'Card Capacity' => '800',
            'Transaction Storage' => '80,000',
            'Push Data' => 'Yes',
            'Fingerprint Sensor' => '500 DPI Optical Sensor',
            'FAR' => '≤0.0001% / FRR ≤1%',
            'Identification Speed' => '≤1 sec',
            'Algorithm Ver' => '10',
            'LED Indicator' => 'Green/Red',
            'Speaker' => 'Mini Speaker',
            'Communication' => 'TCP/IP, USB-host',
            'Inbuilt Battery Backup' => 'Yes',
            'Standard Features' => 'Self Service Query, SSR Recorder, Automatic Status Switch, DST, T9 Input',
            'Power Supply' => '12V DC, 1.5 A',
            'Operating Temperature' => '0°C - 45°C',
            'Operating Humidity' => '20% - 80%',
            'Dimensions' => '185 x 140 x 30 mm',
            'Access Control Relay' => '12V',
            'Exit Readers' => 'Push Button',
            'Dual Mode' => 'SSR or Software Mode'
        ],
        'features' => [
            'Inbuilt Battery Backup',
            'Access Control Relay',
            'Dual Operation Modes'
        ],
        'keywords' => 'K90 Pro, fingerprint, biometric, attendance, access control'
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

?>