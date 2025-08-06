<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class BinanceService
{
    protected $apiKey;
    protected $secretKey;
    protected $baseUrl = 'https://api.binance.com';

    public function __construct(string $apiKey, string $secretKey)
    {
        $this->apiKey = $apiKey;
        $this->secretKey = $secretKey;
    }

    public function getAccountBalances()
    {
        $timestamp = round(microtime(true) * 1000);
        $query = "timestamp=$timestamp";
        $signature = hash_hmac('sha256', $query, $this->secretKey);

        $response = Http::withHeaders([
            'X-MBX-APIKEY' => $this->apiKey,
        ])->get('https://api.binance.com/api/v3/account', [
            'timestamp' => $timestamp,
            'signature' => $signature,
        ]);

        if ($response->failed()) {
            throw new \Exception('Erro ao acessar a API da Binance: ' . $response->body());
        }

        return $response->json();

    }

    public function getAccountSnapshot($type = 'SPOT')
    {
        $timestamp = round(microtime(true) * 1000);

        $queryParams = [
            'type' => $type,
            'timestamp' => $timestamp,
        ];

        $queryString = http_build_query($queryParams);
        $signature = hash_hmac('sha256', $queryString, $this->secretKey);
        $queryParams['signature'] = $signature;

        $response = Http::withHeaders([
            'X-MBX-APIKEY' => $this->apiKey,
        ])->get($this->baseUrl . '/sapi/v1/accountSnapshot', $queryParams);

        return $response->json();
    }
}