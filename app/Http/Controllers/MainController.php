<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Classes;
use App\Models\Testimoinal;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View{
        $testimoinals = Testimoinal::where('published', 1)->get();
        $teachers = Teacher::where('is_popular', 1)->take(3)->get();
        $classes = Classes::take(6)->get();
        return view('index', compact(['testimoinals', 'teachers','classes']));
//        return dd($testimonials);
    }

    public function about(): View{
        $teachers = Teacher::where('is_popular', 1)->take(3)->get();
        return view('about', compact('teachers'));
    }

    public function classes(): View{
        return view('classes');
    }

    public function contactUs (): View{
        return view('contact');
    }

    public function testimonial(): View {
        $testimoinals = Testimoinal::where('published', 1)->get();
        return view('testimonial', compact('testimoinals'));
    }

    public function facility(): View{
        return view('facility');
    }

    public function team(): View{
        $teachers = Teacher::where('is_popular', 1)->take(3)->get();
        return view('team', compact('teachers'));
    }

    public function callToAction(): View{
        return view('call-to-action');
    }

    public function appointment(): View{
        return view('appointment');
    }

    public function showNotFound(): View{
        return view('notFound');
    }
}
