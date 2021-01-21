<?php

namespace Itec\Career\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\File;
use Itec\Career\Repositories\CareerRepository as Career;

class CareerController extends Controller
{

    protected $_config;

    protected $career;

    public function __construct(Career $career)
    {
        $this->career              = $career;
        $this->_config              = request('_config');
    }


    public function show()
    {
        return view($this->_config['view']);
    }


    public function index()
    {
        $career        = $this->career->all();
        return view($this->_config['view'], compact('career'));
    }


    public function view($id)
    {

        $career = $this->career->findOrFail($id);

        return view($this->_config['view'], compact('career'));
    }




    public function create()
    {
        $career = $this->career->all();
        return view($this->_config['view'], compact('career'));
    }



    public function store(Request $request)
    {

        $this->validate(request(), [
            'position'                  => 'string|required',
            'vacancy'                   => 'string|required',
            'responsibility'            => 'string|required',
            'employment_status'         => 'string|required',
            'skill_type'                => 'string|required',
            'educational_requirement'   => 'string|required',
            'aditional_requirement'     => 'string|required',
            'job_location'              => 'string|required',
            'salary'                    => 'string|required',
            'compensation'              => 'string|required',
            'deadline'                  => 'required',
            'email'                     => 'required|email',
            'job_status'                => 'string|required'
        ]);

        $data = request()->all();

        // dd($data);

        $career = $this->career->create($data);

        if ($career) {
            session()->flash('success', trans('admin::app.response.create-success', ['name' => 'Job']));
            return redirect()->route($this->_config['redirect']);
        }    
    }




    public function edit($id)
    {
        $career = $this->career->findOrFail($id);
        return view($this->_config['view'], compact('career'));
    }




    public function update()
    {

        $this->validate(request(), [
            'id'                        => 'integer|required',
            'position'                  => 'string|required',
            'vacancy'                   => 'string|required',
            'responsibility'            => 'string|required',
            'employment_status'         => 'string|required',
            'skill_type'                => 'string|required',
            'educational_requirement'   => 'string|required',
            'aditional_requirement'     => 'string|required',
            'job_location'              => 'string|required',
            'salary'                    => 'string|required',
            'compensation'              => 'string|required',
            'deadline'                  => 'required',
            'email'                     => 'required|email',
            'job_status'                => 'string|required'
        ]);

        $data = request()->all();

        $id = $data['id'];

        // dd($data);


        if ($this->career->update($data, $id)) {
            Session()->flash('success', trans('career_lang::app.response.update-success'));

            return redirect()->route($this->_config['redirect']);
        } else {
            Session()->flash('success', trans('career_lang::app.response.update-failed'));

            return redirect()->back($this->_config['redirect']);
        }
    }














    public function destroy($id=null)
    {
        // dd('Hello');
        
        $career = $this->career->findorFail($id);

        try {
            $this->career->delete($id);

            session()->flash('success', trans('career_lang::app.response.delete-success', ['name' => 'Job']));

        } catch(\Exception $e) {
            session()->flash('error', trans('career_lang::app.response.delete-failed', ['name' => 'Job']));
        }


        return response()->json(['message' => false], 400);
    }




    // career_lang Section
    public function sendMessage()
    {
        // $this->validate(request(), [
        //     'name'              => 'required',
        //     'email'             => 'required',
        //     'phone'             => 'required',
        //     'message_body'      => 'required'
        // ]);

        // $data = request()->all();

        // $career = $this->career->create(
        //     [
        //     'name'          => $data['name'],
        //     'email'         => $data['email'],
        //     'phone'         => $data['phone'],
        //     'message_body'  => $data['message_body']
        //     ]
        // );

        // try {
        //     Mail::queue(new NewAgencyNotification($agency, $password));
        // }
        //  catch (\Exception $e) {

        // }

        // if ($career) {
        //     session()->flash('success', trans('career_lang::app.response.message-send-success'));
        //     return redirect()->route($this->_config['redirect']);
        // }
    }















    public function shopview($id)
    {

        $career = $this->career->findOrFail($id);

        return view($this->_config['view'], compact('career'));
    }


}
