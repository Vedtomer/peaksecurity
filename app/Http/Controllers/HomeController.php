<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use SEOMeta;

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

    public function securityGuard()
    {
        $this->setupSEO('securityGuard');
        return view('securityguard');
    }

    public function patrol()
    {
        $this->setupSEO('patrol');
        return view('patrol');
    }

    public function cctv()
    {
        $this->setupSEO('cctv');
        return view('cctv');
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



    public function sendEmail(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'fields.Name' => 'required|string|max:255',
            'fields.Email' => 'required|email',
            'fields.field' => 'required|string',
        ]);

        $formData = [
            'name' => $validatedData['fields']['Name'],
            'email' => $validatedData['fields']['Email'],
            'message' => $validatedData['fields']['field'],
        ];

        // Send the email
        Mail::to(['vedtomer5592@gmail.com', 'masoudsecurity@gmail.com'])->send(new ContactFormMail($formData));


        return response()->json(['msg' => "ok", 'code' => 200]);
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
        
        SEOMeta::setRobots('index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1');

        if ($page === 'faq') {
            SEOTools::jsonLd()->addValue('@graph', $this->getFAQData());
        }
    }

    private function getSEOData($page)
    {
        $baseTitle = "";
        $baseDescription = "";
        $baseImage = asset('images/peak-security-logo.png');

        $data = [
            'home' => [
                'title' => "Security Companies in surrey BC | Best Security Services $baseTitle ",
                'description' => "Peak Security is security company in surrey BC, offering expert solutions for comprehensive security services across BC. Call us now!$baseDescription",
                'url' => url('/')
                
            ],
            'services' => [
                'title' => "Our Services - $baseTitle",
                'description' => "Explore our comprehensive security services including CCTV installation, guarded security, and patrol services.",
                'url' => url('/services'),
            ],
            'securityGuard' => [
                'title' => "Security Guard Services in Surrey BC | Security Guard Company - $baseTitle",
                'description' => "Security Guard Services in Surrey, BC by Peak Security offers expert protection for businesses, properties, and events with trained professional Guards.$baseDescription",
                'url' => url('/services/security-guard-services'),
            ],
            'patrol' => [
                'title' => "Patrol Services in Surrey BC - Peak Security - $baseTitle",
                'description' => "Patrol Services in Surrey BC by Peak Security. Protect your assets with our 24/7 mobile patrols, ensuring peace of mind with proactive, reliable security.$baseDescription",
                'url' => url('/services/patrol-services'),
            ],
            'cctv' => [
                'title' => "CCTV Camera Services Surrey BC - Peak Security - $baseTitle",
                'description' => "CCTV Camera Services Surrey BC, with Peak Security, offers reliable security solutions, for crime, and ensures 24/7 surveillance for homes and businesses.$baseDescription",
                'url' => url('/services/cctv-services'),
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
            ]
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
