<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class RecordController extends Controller
{
    private $path = "/var/www/data/records";
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function createDir(Request $request) {

    }

    public function listDirs(Request $request) {
        $response = Storage::directories($this->path);
        return $response;
    }

    public function uploadRecordToDir(Request $request) {

    }

    public function listRecordsInDir(Request $request) {

    }
}
