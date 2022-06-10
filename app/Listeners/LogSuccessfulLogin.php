<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
// use App\Listeners\LogSuccessfulLogin;

class LogSuccessfulLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        // session(['/p4' => url()->previous()]);
        // $this->redirectTo = session()->get('/p4');
        // $this->middleware('guest')->except('logout');

        // return Redirect::to('p4');
        // return  redirect()->to('/p4');

        // session(['p4' => url()->previous()]);
        // $this->redirectTo = session()->get('p4');
        // $this->middleware('guest')->except('logout');


        if(!session()->has('url.intended'))
        {
            session(['url.intended' => url()->previous()]);
        }
        return view('auth.login');
    }

    public function handle(Login $event)
    {

    }
}
