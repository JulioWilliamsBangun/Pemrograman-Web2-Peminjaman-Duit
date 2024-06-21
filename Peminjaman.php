<?php

namespace App\Controllers;

use App\Models\PeminjamanModel;

class Peminjaman extends BaseController
{
    public function index()
    {
        $model = new PeminjamanModel();
        $data['peminjaman'] = $model->findAll();
        return view('peminjaman/index', $data);
    }

    public function create()
    {
        return view('peminjaman/create');
    }

    public function store()
    {
        $model = new PeminjamanModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'jumlah_pinjaman' => $this->request->getPost('jumlah_pinjaman'),
            'tanggal_pinjam' => $this->request->getPost('tanggal_pinjam')
        ];
        $model->save($data);
        return redirect()->to('/peminjaman');
    }

    public function edit($id)
    {
        $model = new PeminjamanModel();
        $data['peminjaman'] = $model->find($id);
        return view('peminjaman/edit', $data);
    }

    public function update($id)
    {
        $model = new PeminjamanModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'jumlah_pinjaman' => $this->request->getPost('jumlah_pinjaman'),
            'tanggal_pinjam' => $this->request->getPost('tanggal_pinjam')
        ];
        $model->update($id, $data);
        return redirect()->to('/peminjaman');
    }

    public function delete($id)
    {
        $model = new PeminjamanModel();
        $model->delete($id);
        return redirect()->to('/peminjaman');
    }
}
