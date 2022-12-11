<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


use Illuminate\Http\Request;

class PostController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view('landing.data',[
            'users' => User::all(),
        ]);
 
    }

    public function hapus($id_user)
    {
        $user = User::where('id_user', $id_user)
        ->delete();

        return redirect('lihat');
    }

    public function ubahusers($id_user)
    {
       $user = User::select('*')
                 ->where('id_user', $id_user)
                 ->get();
    
       return view('landing.edituser', ['user' => $user]);
    }
    
    public function updateusers(Request $request, User $id_user)
    // {
    //     $user = User::where('id_user', $request->id_user)
    //              ->update([
    //                     'username' => $request->username,
    //                     'username' => $request->password,
    //                     'role' => $request->role,
    //                     'email' => $request->email
    //              ]);
    
    //              return redirect('lihat');
    //             }    

    {
        $check_data = User::firstWhere('id_user', $id_user);
        if($check_data)
        {
            $data_user = User::find($id_user);
            $data_user->username        = $request->username;
            $data_user->username        = $request->username;
            $data_user->role            = $request->role;
            $data_user->email           = $request->email;
            $data_user-> save();

            return redirect('lihat');
        }
        else
        {
            return redirect('/lihat/edit/{id_user}');
        }
    }
}
