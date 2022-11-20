<?php

namespace App\Http\Livewire\Front\Auth;

use App\Mail\Auth\Register\CheckMail;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
use Livewire\Component;

class RegisterForm extends Component
{
    private const STAGE_LOGIN = 'login';
    private const STAGE_CHECK = 'check';
    private const STAGE_COMPLETE = 'complete';

    private $stage;

    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $accept = false;

    protected $rules = [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'unique:users,email', 'max:255'],
        'password' => ['required', 'string', 'min:8', 'max:255', 'confirmed'],
        'password_confirmation' => ['required', 'string', 'min:8', 'max:255'],
        'accept' => ['boolean', 'accepted'],
    ];

    public function render(): Factory|View|Application
    {
        return view('livewire.front.auth.register.form');
    }

    public function check(): Factory|View|Application
    {
        $this->validate();

        $randomKey = Str::random();

        Redis::set('register_'.$randomKey, [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ], 'EX', 3600);

        Mail::to($this->email)->send(new CheckMail($randomKey));

        return view('livewire.front.auth.register.check');
    }

    public function complete(): Factory|View|Application
    {
        return view('livewire.front.auth.register.complete');
    }
}
