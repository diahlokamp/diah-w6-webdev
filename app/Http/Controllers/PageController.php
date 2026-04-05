<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        $title = ['High Quality Prints', 'Custom Props', 'Instant Sharing'];
        $description = [
            'Studio-quality lighting and professional DSLR cameras ensure your guests look their best.',
            'A huge variety of fun, quirky, and themed props tailored for your specific event.',
            'Share photos instantly via email or QR code direct from the photobooth screen.'
        ];
        return view('home', [
            'title' => $title,
            'description' => $description
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function service()
    {
        $pricing_package = [
            [
                'Package Name' => 'Basic Snap',
                'Price' => 1500000,
                'Duration' => 2,
                'Benefits' => [
                    'Unlimited Prints (2x6)',
                    'Standard Backdrop',
                    'Fun Props Set',
                    'Online Gallery',
                ],
                'Button' => 'Choose Basic',
            ],[
                'Package Name' => 'Premium Joy',
                'Price' => 2500000,
                'Duration' => 4,
                'Benefits' => [
                    'Unlimited Premium Prints (4x6)',
                    'Custom Premium Backdrop',
                    'Themed High-End Props',
                    'Boomerang & GIF Creation',
                    'Scrapbook Station',
                ],
                'Button' => 'Choose Premium',
            ],[
                'Package Name' => 'Wedding VIP',
                'Price' => 4000000,
                'Duration' => 6,
                'Benefits' => [
                    'Everything in Premium',
                    '360 Video Booth Included',
                    'Custom Photo Template Design',
                    'Instant Social Media Sharing Kiosk',
                    'Idle Time (1 hour free)',
                ],
                'Button' => 'Choose VIP'
            ]
        ];
        return view('service', ['pricing_package' => $pricing_package]);
    }

    public function contact()
    {
        return view('contact');
    }
}