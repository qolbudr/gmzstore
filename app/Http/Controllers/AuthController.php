<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Tenant;

use Session;

use Hash;

class AuthController extends Controller
{
    public function register()
    {
        if (!isset($_GET['plan'])) return redirect()->to('/');
        Session::put('plan', $_GET['plan']);

        return view('auth.register');
    }

    public function theme()
    {
        if (!Session::has('username')) return redirect()->to('/');

        return view('auth.theme');
    }

    public function success()
    {
        if (!Session::has('username')) return redirect()->to('/');

        $data['main_domain'] = env('APP_MAIN_DOMAIN');
        $data['username'] = Session::get('username');

        Session::flush();
        return view('auth.success', $data);
    }

    public function auth_register(Request $request)
    {
        if (!isset($request->username)) {
            return redirect()->to('/');
        }

        $tenant = new Tenant();

        $userNameExist = $tenant->checkUserNameExist($request->username);

        if (!$request->terms) {
            Session::flash('error', 'Anda harus menyetujui syarat dan ketentuan');
            return redirect()->back();
        }

        if ($userNameExist) {
            Session::flash('error', 'Username telah ada atau telah dipakai');
            return redirect()->back();
        }

        Session::put(
            [
                "username" => $request->username,
                "password" => $request->password,
                "email"    => $request->email,
            ]
        );

        return redirect()->to('register/theme');
    }

    public function auth_theme(Request $request)
    {
        if (!isset($request->theme)) {
            return redirect()->to('/');
        }

        if ($request->theme) {
            Session::put(
                [
                    "theme" => $request->theme
                ]
            );
        }

        return redirect()->to('register/create');
    }

    public function create_site()
    {
        if (!Session::has('username')) return redirect()->to('/');

        $tenant = Tenant::create(
            [
                'id' => Session::get('username'),
                'theme' => Session::get('theme'),
                'active' => false,
                'activation_code' => base64_encode(time()),
                'expired_at' => date('Y-m-d', strtotime('+30 days', time())),
                'plan' => Session::get('plan'),
            ]
        );

        if (Session::get('plan') != 'PLATINUM') {
            $main_domain = env('APP_MAIN_DOMAIN');
            $domain = Session::get('username') . '.' . $main_domain;

            $tenant->domains()->create(['domain' => $domain]);

            $tenant->run(function () {
                $user = new User();
                $user->name = Session::get('username');
                $user->password = Hash::make(Session::get('password'));
                $user->email = Session::get('email');
                $user->save();
            });
        }

        return redirect()->to('register/success?plan=' . Session::get('plan'));
    }
}
