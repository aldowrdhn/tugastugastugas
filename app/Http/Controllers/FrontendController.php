<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Terms;
use App\Privacy;
use App\Refund;
use App\Faq;
use App\Contact;
use App\Outlet;
use App\Product;
use App\Category;
use App\Carousel;

class FrontendController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        $categories = category::all();
        $carousels = carousel::all();
        return view('frontend.index',compact('contacts','categories','carousels'));
    }

    public function terms(){
        $terms = Terms::all();
        $contacts = Contact::all();
        return view('frontend.terms',compact('terms','contacts'));
    }
    public function privacy(){
        $privacies = Privacy::all();
        $contacts = contact::all();
        return view('frontend.privacy',compact('privacies','contacts'));
    }

    public function refund(){
        $refunds = Refund::all();
        $contacts = Contact::all();
        return view('frontend.refund',compact('refunds','contacts'));
    }

    public function faq(){
        $faqs = Faq::all();
        $contacts = Contact::all();
        return view('frontend.faq',compact('faqs','contacts'));
    }

    public function complain(){
        $contacts = contact::all();
        // $complains = complain::all();
        return view('frontend.contact',compact('contacts'));
    }

    // public function contactfooters(){
    //     $contacts = contact::all();
    //     return view('layouts.front.footer',compact('contacts'));
    // }

    public function outlet(){
        $outlets = Outlet::all();
        $contacts = Contact::all();
        return view('frontend.outlet',compact('outlets','contacts'));
    }

    public function shop(){
        $products = product::paginate(3);
        $contacts = contact::all();
        $categories = category::all();
        return view('frontend.store',compact('products','contacts','categories'));
    }

    public function showproduct($id){
        $products = Product::findOrFail($id);
        $contacts = contact::all();
        $categories = category::all();
        return view('frontend.showdetail',compact('products','contacts','categories'));
    }
}
