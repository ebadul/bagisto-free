<?php

namespace CodexBD\SaleReport\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\File;
use CodexBD\SaleReport\Repositories\SaleReportRepository as SaleReport;

class SaleReportController extends Controller
{

    protected $_config;
	protected $sale_report;
    

    public function __construct(SaleReport $sale_report)
    {
       
        $this->_config              = request('_config');
		$this->sale_report          = $sale_report;
    }


    public function show()
    {
        return view($this->_config['view']);
    }


    public function index()
    {

        return view($this->_config['view']);
    }



    public function create()
    {
        
        return view($this->_config['view']);
    }
	
	
	 public function store(Request $request)
    {

        $this->validate(request(), [
            'position'                  => 'string|required',
            'responsibility'            => 'string|required',
            'deadline'         			=> 'string|required',
            'email'                		=> 'string|required',
            'job_status'                => 'string|required'
        ]);

        $data = request()->all();


        $sale_report_new = $this->sale_report->create($data);

        if ($sale_report_new) {
            session()->flash('success', trans('admin::app.response.create-success', ['name' => 'SaleReport']));
            return redirect()->route($this->_config['redirect']);
        }    
    }

    
    public function view($id)
    {
        $salereport = $this->sale_report->findOrFail($id);
        return view($this->_config['view'], compact("salereport"));
    }


    public function edit($id)
    {
        $salereport = $this->sale_report->findOrFail($id);
        return view($this->_config['view'], compact('salereport'));
    }




    public function update()
    {

        $this->validate(request(), [
            'id'                        => 'integer|required',
            'position'                  => 'string|required',
            'responsibility'            => 'string|required',
            'deadline'                  => 'required',
            'email'                     => 'required|email',
            'job_status'                => 'string|required'
        ]);

        $data = request()->all();

        $id = $data['id'];

        // dd($data);


        if ($this->sale_report->update($data, $id)) {
            Session()->flash('success', trans('salereport_lang::app.response.update-success'));
            return redirect()->route($this->_config['redirect']);
        } else {
            Session()->flash('success', trans('salereport_lang::app.response.update-failed'));
            return redirect()->route($this->_config['redirect']);
        }
    }



    public function destroy($id=null)
    {
        
        $salereport = $this->sale_report->findorFail($id);
        dd($salereport);

        // try {
        //     $this->salereport->delete($id);

        //     session()->flash('success', trans('salereport_lang::app.response.delete-success', ['name' => 'Sale Report']));

        // } catch(\Exception $e) {
        //     session()->flash('error', trans('salereport_lang::app.response.delete-failed', ['name' => 'Sale Report']));
        // }

        // return response()->json(['message' => false], 400);
    }










}
