<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

final class AboutController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('about', [
            'locale' => app()->getLocale(),
            'translations' => [
                'common' => __('common'),
                'about' => __('about'),
            ],
        ]);
    }
}
