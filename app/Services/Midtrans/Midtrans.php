<?php
 
namespace App\Services\Midtrans;
 
use Midtrans\Config;
 
class Midtrans {
    protected $serverKey;
    protected $isProduction;
    protected $isSanitized;
    protected $is3ds;
 
    public function __construct()
    {
        $this->serverKey = config('midtrans.server_key');
        $this->isProduction = config('midtrans.is_production');
        $this->isSanitized = config('midtrans.is_sanitized');
        $this->is3ds = config('midtrans.is_3ds');
 
        $this->_configureMidtrans();
    }
 
    public function _configureMidtrans()
    {
        \Midtrans\Config::$serverKey = $this->serverKey;
        \Midtrans\Config::$isProduction = $this->isProduction;
        \Midtrans\Config::$isSanitized = $this->isSanitized;
        \Midtrans\Config::$is3ds = $this->is3ds;
    }
}