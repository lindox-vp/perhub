<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\CustomHelper;

class DashboardController extends Controller
{
    public $maintitle = 'dashboard';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = [
            'maintitle' => $this->maintitle,
            'title'     => 'dashboard',

        ];

        return view('pages.admin.contents.dashboard.index', $data);

    }

}
