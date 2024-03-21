<?php

namespace App\Http\Controllers;

use App\DataTables\LevelModelDataTable;
use App\Http\Requests\StoreLevelRequest;
use App\Models\LevelModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Monolog\Level;

class LevelController extends Controller {
    public function index(LevelModelDataTable $datatable) {
        // DB::insert('insert into m_level(level_kode, level_nama, created_at) values(?, ?, ?)', ['CUS', 'Pelanggan', now()]);
        // return 'Insert data baru berhasil';

        // $row = DB::update('update m_level set level_nama = ? where level_kode = ?', ['Customer', 'CUS']);
        // return 'Update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris';

        // $row = DB::delete('delete from m_level where level_kode = ?', ['CUS']);
        // return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . ' baris';
        // $data = DB::select('select * from m_level');
        // return view('level.index', ['data' => $data]);

        return $datatable->render('level.index');
    }

    public function create() {
        return view('level.create');
    }

    public function edit($id) {
        $level = LevelModel::find($id);
        return view('level.edit', ['level' => $level]);
    }

    public function update(Request $request, $id) {
        $data = LevelModel::find($id);
        $data->update($request->all());
        return redirect('/level');
    }

    public function store(StoreLevelRequest $request) {
        LevelModel::create($request->validated());
        return redirect('/level');
    }

    public function destroy($id) {
        LevelModel::destroy($id);
        return redirect('/level');
    }
}
