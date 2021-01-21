<?php

namespace CodexBD\SaleReport\Models;

use Illuminate\Database\Eloquent\Model;
use CodexBD\SaleReport\Contracts\SaleReport as SaleReportContract;

class SaleReport extends Model implements SaleReportContract
{
	protected $table = 'sale_reports';
    protected $fillable = [
							'position', 
							'responsibility',   
							'deadline',
							'email', 
							'job_status'
						]; 

}