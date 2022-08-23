<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function GioiThieu()
    {
        return view('vera_views.gioi-thieu');
    }

    public function TienIch()
    {
        return view('vera_views.tien-ich');
    }

    public function CanHoMau()
    {
        return view('vera_views.can-ho-mau');
    }

    public function MatBang()
    {
        return view('vera_views.mat-bang');
    }

    public function LienHe()
    {
        return view('vera_views.lien-he');
    }

}
