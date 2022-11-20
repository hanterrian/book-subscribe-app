<?php

namespace App\Http\Livewire\Front\Auth;

use App\Mail\Auth\Login\CheckMail;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
use Livewire\Component;

class LoginForm extends Component
{
    private const STAGE_LOGIN = 'login';
    private const STAGE_CHECK = 'check';
    private const STAGE_COMPLETE = 'complete';

    private $stage;

    public $email;
    public $password;
    public $rememberMe = false;

    protected $rules = [
        'email' => ['required', 'email', 'max:255'],
        'password' => ['required', 'string', 'min:8', 'max:255'],
        'rememberMe' => ['boolean'],
    ];

    public function render(): Factory|View|Application
    {
        return view('livewire.front.auth.login.form');
    }

    public function check(): Factory|View|Application
    {
        $this->validate();

        $randomKey = Str::random();

        Redis::set('login_'.$randomKey, [
            'email' => $this->email,
            'password' => $this->password,
        ], 'EX', 3600);

        Mail::to($this->email)->send(new CheckMail($randomKey));

        return view('livewire.front.auth.login.check');
    }

    public function complete(): Factory|View|Application
    {
        return view('livewire.front.auth.login.complete');
    }
}
