<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class RecordController extends Controller
{

    public function createDir(Request $request) {
        $params = $request->all();
        $response = Storage::disk('record')->makeDirectory($params['dir_name']);
        return $response;
    }

    public function listDirs(Request $request) {
        $response = Storage::disk('record')->directories();
        return $response;
    }

    public function deleteDir(Request $request) {
        $params = $request->all();
        $response = Storage::disk('record')->deleteDirectory($params['dir_name']);
        return $response;
    }

    public function uploadRecordToDir(Request $request) {
        $dirName = $request->route('dir_name');
        $path = Storage::disk('record')->putFile($dirName, $request->file('record'));
        return $path;
    }

    public function deleteRecordInDir(Request $request) {
        $dirName = $request->route('dir_name');
        $params = $request->all();
        $response = Storage::disk('record')->delete($dirName . '/' . $params['file_name']);
        return $response;
    }

    public function listRecordsInDir(Request $request) {
        $dirName = $request->route('dir_name');
        $response = Storage::disk('record')->files($dirName);
        return $response;
    }
}
