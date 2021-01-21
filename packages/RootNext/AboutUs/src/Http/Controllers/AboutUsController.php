<?php

namespace RootNext\AboutUs\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\File;
 

class AboutUsController extends Controller
{

    protected $_config;

    

    public function __construct( )
    {
        
        $this->_config  = request('_config');
    }


    public function second()
    {
        return view($this->_config['view']);
    }


    public function index()
    {
        return view($this->_config['view']);
    }


   


}
