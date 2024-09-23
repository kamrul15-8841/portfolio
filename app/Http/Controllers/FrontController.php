<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home.home',[
            'portfolios' => Portfolio::where('status', 1)->get(),
            'services' => Service::where('status', 1)->get(),
        ]);
    }

    public function portfolio()
    {
        return view('front.portfolio.all-portfolio', [
            'portfolios' => Portfolio::where('status', 1)->get(),
        ]);
    }

    public function service()
    {
        return view('front.service.services', [
            'services' => Service::where('status', 1)->get(),
        ]);
    }

    public function about()
    {
        return view('front.about.about');
    }


    public function contact()
    {
        return view('front.contact.contact');
    }

    public function addContact(Request $request)
    {
//        return $request->all();
        Contact::createOrUpdateContact($request);
        return redirect()->back()->with('message', 'Thanks for contact with me, We will reply you soon');
    }

    public function portfolioDetail($id)
    {
        return view('front.portfolio.detail', [
            'portfolio' => Portfolio::find($id),
        ]);
    }
    public function gallery()
    {
        return view('front.gallery.gallery', [

        ]);
    }
}
