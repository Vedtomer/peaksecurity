<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $this->setupSEO('home');
        return view('home');
    }

    public function services()
    {
        $this->setupSEO('services');
        return view('services');
    }

    public function contactUs()
    {
        $this->setupSEO('contact');
        return view('contact-us');
    }

    public function aboutUs()
    {
        $this->setupSEO('about');
        return view('about');
    }

    public function faq()
    {
        $this->setupSEO('faq');
        return view('faq');
    }

    private function setupSEO($page)
    {
        $seoData = $this->getSEOData($page);

        SEOTools::setTitle($seoData['title']);
        SEOTools::setDescription($seoData['description']);

        SEOTools::opengraph()->setTitle($seoData['title']);
        SEOTools::opengraph()->setDescription($seoData['description']);
        SEOTools::opengraph()->setUrl($seoData['url']);
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addImage($seoData['image']);

        SEOTools::twitter()->setTitle($seoData['title']);
        SEOTools::twitter()->setDescription($seoData['description']);
        SEOTools::twitter()->setUrl($seoData['url']);
        SEOTools::twitter()->setImage($seoData['image']);

        SEOTools::jsonLd()->setTitle($seoData['title']);
        SEOTools::jsonLd()->setDescription($seoData['description']);
        SEOTools::jsonLd()->setType('WebPage');
        SEOTools::jsonLd()->addImage($seoData['image']);

        SEOTools::setCanonical($seoData['url']);

        if ($page === 'faq') {
            SEOTools::jsonLd()->addValue('@graph', $this->getFAQData());
        }
    }

    private function getSEOData($page)
    {
        $baseTitle = "Peak Security | CCTV Installation & Security Services";
        $baseDescription = "Peak Security provides top-notch security solutions in Canada including CCTV installation, guarded security, and patrol services.";
        $baseImage = asset('images/peak-security-logo.png');

        $data = [
            'home' => [
                'title' => $baseTitle,
                'description' => $baseDescription,
                'url' => url('/'),
            ],
            'services' => [
                'title' => "Our Services - $baseTitle",
                'description' => "Explore our comprehensive security services including CCTV installation, guarded security, and patrol services.",
                'url' => url('/services'),
            ],
            'contact' => [
                'title' => "Contact Us - $baseTitle",
                'description' => "Get in touch with Peak Security for all your security needs. We're here to help protect what matters most.",
                'url' => url('/contact-us'),
            ],
            'about' => [
                'title' => "About Us - $baseTitle",
                'description' => "Learn about Peak Security's commitment to providing exceptional security services across Canada.",
                'url' => url('/about-us'),
            ],
            'faq' => [
                'title' => "FAQ - $baseTitle",
                'description' => "Find answers to frequently asked questions about our CCTV installation, guarded security, and patrol services.",
                'url' => url('/faq'),
            ],
        ];

        $data[$page]['image'] = $baseImage;

        return $data[$page];
    }

    private function getFAQData()
    {
        return [
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
    }
}
