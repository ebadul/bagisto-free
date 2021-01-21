<?php

namespace Buynoir\Feedback\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\File;
use Buynoir\Feedback\Repositories\FeedbackRepository as Feedback;

class FeedbackController extends Controller
{

    protected $_config;

 

    public function __construct()
    {
        
        $this->_config = request('_config');
    }

  

    public function index()
    {
        
        return view($this->_config['view']);
    }


    public function view()
    {
        return view($this->_config['view'] );
    }




     




 













 


 










 

}
