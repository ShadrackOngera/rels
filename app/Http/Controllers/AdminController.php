<?php

namespace App\Http\Controllers;

use App\Models\User;
use http\Message;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function makeAdmin(Request $request){
        $request->validate([
            'user_id' => 'required',
        ]);

        $userId = $request->input('user_id');
        $user = User::where('id', $userId)->first();
        $user->assignRole('admin');

        $msg = 'User Id '. $userId . ' Is now an Admin ';

        return redirect('/admin/users')->with('message', $msg);
    }

    public function makeSeller(Request $request){
        $request->validate([
            'user_id' => 'required',
        ]);

        $userId = $request->input('user_id');
        $user = User::where('id', $userId)->first();
        $user->assignRole('seller');

        $msg = 'User Id '. $userId . ' Is now a Seller ';

        return redirect('/admin/users')->with('message', $msg);
    }

    public function makeModerator(Request $request){
        $request->validate([
            'user_id' => 'required',
        ]);

        $userId = $request->input('user_id');
        $user = User::where('id', $userId)->first();
        $user->assignRole('moderator');

        $msg = 'User Id '. $userId . ' Is now a Moderator ';
        return redirect('/admin/users')->with('message', $msg);
    }
}
