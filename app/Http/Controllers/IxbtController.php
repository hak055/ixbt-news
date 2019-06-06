<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\Compilers\BladeCompiler;
use App\Ixbt;

class IxbtController extends Controller
{
    public function index()
    {
    	$news_lists = Ixbt::orderBy('updated_at', 'desc')
                            ->paginate(25);
        return view('index', compact('news_lists'));                    
    	
    }
}
