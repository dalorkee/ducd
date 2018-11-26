<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Str;


class dashboardMunicipalityController extends DiseasesController
{
	public $rqDsCode;
	public function __construct() {
		$this->rqDsCode = null;
		return true;
	}
	public function index() {
		return view('frontend.dashboardMunicipality');
	}
}
