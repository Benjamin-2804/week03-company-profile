<?php

namespace App\Http\Controllers;

class CompanyController extends Controller
{
    /**
     * Display the Home page.
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Display the About page.
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Display the Services page, passing service data to the view.
     */
    public function services()
    {
        return view('pages.services', ['services' => $this->servicesData()]);
    }

    /**
     * Display the Contact page.
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Return the structured services data array.
     *
     * @return array<int, array{icon: string, title: string, description: string}>
     */
    private function servicesData(): array
    {
        return [
            [
                'icon'        => '🌐',
                'title'       => 'Web Development',
                'description' => 'We craft fast, scalable, and responsive web applications tailored to your business needs using modern frameworks and best practices.',
            ],
            [
                'icon'        => '📱',
                'title'       => 'Mobile Development',
                'description' => 'From iOS to Android, we build intuitive mobile experiences that keep your customers engaged wherever they are.',
            ],
            [
                'icon'        => '🎨',
                'title'       => 'UI/UX Design',
                'description' => 'Our designers create beautiful, user-centric interfaces that blend aesthetics with functionality to delight your users.',
            ],
            [
                'icon'        => '☁️',
                'title'       => 'Cloud Solutions',
                'description' => 'We architect and migrate cloud infrastructure that is secure, highly available, and cost-optimized for your workloads.',
            ],
            [
                'icon'        => '🔒',
                'title'       => 'Cybersecurity',
                'description' => 'Protect your digital assets with our comprehensive security audits, penetration testing, and threat monitoring services.',
            ],
            [
                'icon'        => '💼',
                'title'       => 'IT Consulting',
                'description' => 'Strategic technology guidance to align your IT investments with business goals and accelerate digital transformation.',
            ],
        ];
    }
}
