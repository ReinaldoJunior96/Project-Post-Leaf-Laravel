<?php

    namespace App\Http\Controllers;

    use App\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;

    class UserController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            return view('show_users',['users' => User::all()]);
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('new_user');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(User $user, Request $request)
        {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            if (User::where('email', $request->email)->count() == 0):
                $user->save();
                return redirect()->route('user.create',['status' => 'success']);
            else:
                return redirect()->route('user.create',['status' => 'fail']);
            endif;
        }

        /**
         * Display the specified resource.
         *
         * @param \App\User $user
         * @return \Illuminate\Http\Response
         */
        public function show(User $user)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param \App\User $user
         * @return \Illuminate\Http\Response
         */
        public function edit(User $user)
        {
            return view('edit_user',['user' => User::find($user)]);
        }

        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param \App\User $user
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, User $user)
        {
            $user->name = $request->name;
            $user->email = $request->email;
            if (User::where('email', $request->email)->count() == 0):
                $user->save();
                return redirect()->route('user.edit',['user'=>$user]);
            else:
                return redirect()->route('user.edit',['user'=>$user,'status'=>'fail']);
            endif;

        }

        /**
         * Remove the specified resource from storage.
         *
         * @param \App\User $user
         * @return \Illuminate\Http\Response
         */
        public function destroy(User $user)
        {
            $user->delete();
            return redirect()->route('user.index');
        }
    }
