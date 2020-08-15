<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function edit()
    {
        $companies = Company::all();
         return view('user.edit',[
             'companies' => $companies
         ]);
    }

    public function update($id)
    {
        $user = User::find($id)->update([
            'name' => \request('name'),
            'email' => \request('email'),
            'company_id' => \request('company_id'),
        ]);
        return redirect('home');

    }

    public function destroy($id)
    {
      User::destroy($id);

      return redirect('login');
    }
}
