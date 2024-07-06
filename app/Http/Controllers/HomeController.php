<?php

namespace App\Http\Controllers;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function aboutUs()
    {
        return view('about');
    }

    public function faq()
    {
        $this->setupSEO();
        return view('faq');
    }


    private function setupSEO()
    {
        $title = "FAQ - Peak Security | CCTV Installation & Security Services";
        $description = "Find answers to frequently asked questions about our CCTV installation, guarded security, and patrol services. Peak Security provides top-notch security solutions in Canada .";
        $url = url('/faq');
        $image = asset('images/peak-security-logo.png');

        SEOTools::setTitle($title);
        SEOTools::setDescription($description);

        SEOTools::opengraph()->setTitle($title);
        SEOTools::opengraph()->setDescription($description);
        SEOTools::opengraph()->setUrl($url);
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addImage($image);

        SEOTools::twitter()->setTitle($title);
        SEOTools::twitter()->setDescription($description);
        SEOTools::twitter()->setUrl($url);
        SEOTools::twitter()->setImage($image);


        SEOTools::jsonLd()->setTitle($title);
        SEOTools::jsonLd()->setDescription($description);
        SEOTools::jsonLd()->setType('WebPage');
        SEOTools::jsonLd()->addImage($image);

        SEOTools::setCanonical($url);

        $faqData = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => 'What security services does Peak Security offer?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Peak Security offers CCTV installation, guarded security, and patrol services to ensure comprehensive protection for our clients.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Do you provide 24/7 security services?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes, we offer round-the-clock security services to ensure your property is protected at all times.'
                    ]
                ],

            ]
        ];

        SEOTools::jsonLd()->addValue('@graph', $faqData);
    }
}
