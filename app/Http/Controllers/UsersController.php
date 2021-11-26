<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function profile() {
        $user = Auth::user();

        return view('user/profile', [
            'user' => $user
        ]);
    }

    public function edit($id) {
        $currentUser = Auth::user();

        if((int)$currentUser->id !== (int)$id && $currentUser->role !== 'admin') {
            return redirect()->route('root')
                             ->with('error','You are not allowed to do that!');
        }

        $userToEdit = User::where('id', $id)->firstOrFail();

        return view('user/edit', [
            'user' => $userToEdit
        ]);
    }

    public function update(Request $request, $id) {
        $currentUser = Auth::user();

        if((int)$currentUser->id !== (int)$id && $currentUser->role !== 'admin') {
            return redirect()->route('root')
                             ->with('error','You are not allowed to do that!');
        }

        $request->validate([
            // 'title' => 'required|unique:ads,title,' .$id,  // https://laracasts.com/discuss/channels/requests/problem-with-unique-field-validation-on-update
            'nickname' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' .$id],
            'login' => ['required', 'string', 'max:255', 'unique:users,login,' .$id],
            'password' => ['nullable', 'string', 'min:8', 'confirmed', 'same:password_confirmation'],
            'phone' => ['required', 'string', 'max:255'],
            'picture' => ['nullable', 'image']
        ]);

        $data = [
            'nickname' => $request->input('nickname'),
            'login' => $request->input('login'),
            'phone' => $request->input('phone')
        ];

        if($request->file('picture')) {
            $newPicName = 'user-' . time() . "." . $request->file('picture')->extension();
            $request->file('picture')->move(public_path('images/users'), $newPicName);
            $pictureArray = ['picture' => "/images/users/$newPicName"];
        }

        if($request->input('password')) {
            $passArray = ['password' => Hash::make( $request->input('password') )];
        }

        if($currentUser->role === "admin") {
            $roleArray = ['role' => $request->input('role')];
        }

        $newUser = User::where('id', $id)
                    ->update(array_merge(
                        $data,
                        $pictureArray ?? [],
                        $passArray ?? [],
                        $roleArray ?? [],
                    ));

        return back()->with('success','User successfully updated!');
    }

    public function destroy($id)
    {
        $currentUser = Auth::user();
        if((int)$currentUser->id !== (int)$id && $currentUser->role !== 'admin') {
            return redirect()->route('root')
                             ->with('error','You are not allowed to do that!');
        }

        $deletedRows = User::where('id', $id)->delete();
        if($currentUser->role === 'admin' && (int)$currentUser->id !== (int)$id) {
            return back()->with('success','The user has been deleted successfully!');
        }
        return redirect()->route('root')
                  ->with('success','Your account has been successfully deleted!');
    }
}
