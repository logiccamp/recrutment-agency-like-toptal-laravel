<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function loginUser(Request $request)
    {
        $this->validate($request, [
            "email" => "required",
            "password" => "required",
        ]);

        $user = User::where("email", $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return redirect("/login")->with("message", "Invalid login combination");
        }
        $credentials = ["email" => $request->email, "password" => $request->password];
        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            return redirect("/dashboard");
        }
    }
    public function registerUser(Request $request)
    {
        $data = ["status" => false, "message" => "something went wrong"];
        $this->validate($request, [
            "first_name" => 'required',
            "last_name" => 'required',
            "email" => ["required", "email", "unique:users"],
            "password" => ["required", "min:8", "confirmed"],
        ]);

        $user = User::create([
            'name' => $request->first_name . " " . $request->last_name,
            'first_name' => $request->first_name,
            'last_name' => $request->first_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if ($user) {
            $credentials = ["email" => $request->email, "password" => $request->password];
            if (Auth::attempt($credentials)) {
                request()->session()->regenerate();
                $data["status"] = true;
                return response()->json($data, 200);
            } else {
                return response()->json($data, 200);
            }
        }
    }

    public function verifyMe($email, $token)
    {
        $user = User::where("email", $email)->first();

        if (!$user || $user->emailtoken != $token) {
            $isVerify = false;
            return view("process.verifyme", [
                "email" => $email,
                "token" => $token,
                "isVerify" => $isVerify,
            ]);
        }

        $user->email_verified_at = Carbon::now();
        $user->isVerify = true;
        $user->status = false;
        $user->save();

        $isVerify = true;
        return view("process.verifyme", [
            "email" => $email,
            "token" => $token,
            "isVerify" => $isVerify,
        ]);
    }

    public function verifyLogin(Request $request)
    {
        $credentials = ["email" => $request->email, "password" => $request->token];
        if (Auth::attempt($credentials)) {
            dd($request->token);
            request()->session()->regenerate();
            return redirect('/process/step_1');
        } else {
            return redirect('/login');
        }
    }
}
