<?php

namespace App\Http\Controllers;

use App\DataTables\UserModelDataTable;
use App\Http\Requests\StoreUserRequest;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {
    public function index(UserModelDataTable $datatable) {
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama'=>'Manager 3',
        //     'password' => Hash::make('12345'),
        // ];
        // UserModel::create($data);

        // $user = UserModel::all();

        // $user = UserModel::find(1);
        // $user = UserModel::where('level_id', 1)->first();
        // $user = UserModel::firstWhere('level_id', 1);

        // $user = UserModel::findOr(20, ['username', 'nama'], function () {
        //     abort(404);
        // });

        // $user = UserModel::findOrFail(1);

        // $user = UserModel::where('username', 'manager9')->firstOrFail();

        // $user = UserModel::where('level_id', 2)->count();

        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager',
        //         'nama' => 'Manager'
        //     ],
        // );

        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager22',
        //         'nama' => 'Manager Dua Dua',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ],
        // );

        // $user = UserModel::firstOrNew([
        //     'username' => 'manager',
        //     'nama' => 'Manager'
        // ]);

        // $user = UserModel::firstOrNew([
        //     'username' => 'manager33',
        //     'nama' => 'Manager Tiga Tiga',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2
        // ]);

        // $user->save();

        // ----------------------------------------------

        // $user = UserModel::create([
        //     'level_id' => 2,
        //     'username' => 'manager5',
        //     'nama' => 'Manager Lima Lima',
        //     'password' => Hash::make('12345')
        // ]);

        // $user->username = 'manager56';

        // $user->isDirty();
        // $user->isDirty('username');
        // $user->isDirty('nama');
        // $user->isDirty(['nama', 'username']);

        // $user->isClean();
        // $user->isClean('username');
        // $user->isClean('nama');
        // $user->isClean(['nama', 'username']);

        // $user->save();

        // $user->isDirty();
        // $user->isClean();

        // dd($user->isDirty());

        // ----------------------------------------------

        // $user = UserModel::create([
        //     'level_id' => 2,
        //     'username' => 'manager11',
        //     'nama' => 'Manager11',
        //     'password' => Hash::make('12345')
        // ]);

        // $user->username = 'manager12';

        // $user->save();

        // $user->wasChanged();
        // $user->wasChanged('username');
        // $user->wasChanged(['username', 'level_id']);
        // $user->wasChanged('nama');
        // dd($user->wasChanged(['nama', 'username']));

        // ----------------------------------------------

        // $user = UserModel::all();
        // $user = UserModel::with('level')->get();
        // return view('user.index', ['data' => $user]);

        return $datatable->render('user.index');
    }

    public function create() {
        return view('user.create');
    }

    public function store(StoreUserRequest $request) {
        UserModel::create($request->validated());
        return redirect('/user');
    }

    public function edit($id) {
        $user = UserModel::find($id);
        return view('user.edit', ['data' => $user]);
    }

    public function update(Request $request, $id) {
        $user = UserModel::find($id);
        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make('$request->password'); // ??
        $user->level_id = $request->level_id;
        $user->save();
        return redirect('/user');
    }

    public function destroy($id) {
        $user = UserModel::find($id);
        $user->delete();
        return redirect('/user');
    }
}
