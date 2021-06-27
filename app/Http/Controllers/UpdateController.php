<?php

namespace App\Http\Controllers;

use App\Faq;
use App\Tag;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    // Home Page Function
    public function index() {
        $faqs = Faq::all();
        return view('components.index', compact('faqs'));
    }

    // Pooled Staking function
    public function pooled() {
        return view('components.pooled');
    }

    // Assets Staking function 
    public function assets() {
        return view('components.assets-staking');
    }

    // Classic Staking
    public function classic() {
        return view('components.classic');
    }

    // Governance 
    public function governance() {
        return view('components.governance');
    }

    // Earn
    public function earn() {
        return view('components.earn');
    }

    // Borrow
    public function borrow() {
        return view('components.borrow');
    }

    // NFT
    public function nft() {
        return view('components.nft');
    }

    // BSE FARMING
    public function farming() {
        return view('components.bse-farming');
    }

    public function blog() {
        $news = News::orderBy('created_at', 'desc')->get();
        $latest = News::orderBy('created_at', 'desc')->limit(1)->get();
        return view('components.blog', compact('news', 'latest'));
    }

    public function singlePost($id) {
        $news = News::where('title', '=', $id)->get();
        $tags = Tag::all();
        return view('components.blog-post', compact('news'));
    }
}
