<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\VendorLoginRequest;
use App\Models\Admin;
use App\Models\Vendor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;


class VendorAuthController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function createLogin()
    {
        
        return view('vendors.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeLogin(VendorLoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect('vendor/');
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('vendors')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

        /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function createRegister()
    {
        return view('vendors.register');
}

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeRegister(Request $request)
    {
        $request->validate([
            'country_id' => ['required', 'string', 'max:255'],
            'city_id' => ['required', 'string', 'max:255'],

            'company_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:vendors,email'],
            'phone' => ['required', 'string',  'max:20', 'unique:vendors,phone'],
            'password' => ['required', Rules\Password::defaults()],
            'confirm_password' => 'required|same:password|min:6'

        ]);

        $admin = Vendor::create([
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
            'area_id' => 1,
            'company_name' => $request->company_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if ($request->hasFile('image')) {
            $admin->addMediaFromRequest('image')
            ->toMediaCollection();
        }

        // event(new Registered($admin));

        auth('vendors')->login($admin);

        return redirect(url('vendor/'));
    }
}
