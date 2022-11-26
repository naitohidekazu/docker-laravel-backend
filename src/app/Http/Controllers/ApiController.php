<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ApiController extends Controller
{
    /**
     * サンプル
     *
     * @return void
     */
    public function index() {
        // ログを出す
        Log::info("message");

        // レスポンス
        return response()->json([
            "message" => "OK"
        ], 200);
    }
}
