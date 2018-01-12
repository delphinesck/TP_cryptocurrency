<?php

namespace App\Http\Controllers;

use App\User;
use App\Wallet;
use App\Repositories\UserRepository;
use App\Repositories\WalletRepository;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $userRepo;
    private $walletRepo;

    public function __construct(UserRepository $userRepo, WalletRepository $walletRepo){
        $this->userRepo = $userRepo;
        $this->walletRepo = $walletRepo;
    }

    public function index(){
        return view('index');
    }

    public function profile(){
        return view('profile');
    }

    public function wallet(){
        return view('wallet');
    }

    public function addmoney(){
        return view('addmoney');
    }

    public function transfer(){
        return view('transfer');
    }

    public function protectedPage(){
        return view('protectedPage');
    }
}
