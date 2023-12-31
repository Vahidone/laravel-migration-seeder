<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $trains = Train::orderBy('train_code')->get();
        return view('home', compact('trains'));
    }

    public function detail($id) {

        $train = Train::find($id);

        return view('detail', compact('train'));
    }
}
