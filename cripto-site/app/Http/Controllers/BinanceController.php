<?php

namespace App\Http\Controllers;

use App\Services\BinanceService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BinanceController extends Controller
{
    public function showForm()
{
    return view('binance_form', [
        'user' => Auth::user()
    ]);
}
    public function sincronizarSaldo()
    {
    $user = Auth::user();

    $binance = new BinanceService($user->binance_api_key, $user->binance_secret_key);
    $data = $binance->getAccountBalances();
    
    
        dd($data);


    foreach ($data['balances'] ?? [] as $bal) {
        $free = floatval($bal['free']);
        $locked = floatval($bal['locked']);

        if ($free > 0 || $locked > 0) {
            Transaction::create([
                'user_id' => $user->id,
                'transaction_type' => 'BALANCE',
                'base_asset' => $bal['asset'],
                'amount' => $free + $locked,
                'executed_at' => now(),
            ]);
        }
    }

    return redirect()->back()->with('alerta', 'Saldos sincronizados com sucesso!');
    }
    
    public function saveKeys(Request $request)
    {
        $request->validate([
            'api_key' => 'required|string',
            'secret_key' => 'required|string',
        ]);

        $user = Auth::user();
        $user->binance_api_key = $request->api_key;
        $user->binance_secret_key = $request->secret_key;
        $user->save();

        $binance = new BinanceService($user->binance_api_key, $user->binance_secret_key);
        $result = $binance->getAccountSnapshot();

        // Exemplo de persistência dos dados
        foreach ($result['snapshotVos'] ?? [] as $snapshot) {
            foreach ($snapshot['data']['balances'] ?? [] as $bal) {
                Transaction::create([
                    'user_id' => $user->id,
                    'transaction_type' => 'SNAPSHOT',
                    'base_asset' => $bal['asset'],
                    'amount' => $bal['free'],
                    'executed_at' => now(),
                ]);
            }
        }
        Session::put('chaves',$result);
        return redirect()->back()->with('success', 'Chaves salvas e dados importados com sucesso! ');
    }
}