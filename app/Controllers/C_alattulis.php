<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_alattulis;

class C_alattulis extends BaseController
{
    public function create()
    {
        return view('v_create');
    }

    public function template()
    {
        return view('v_template');
    }

    public function display()
    {
        $model = new M_alattulis();
        $data['data_barang'] = $model->orderBy('Kode', 'DESC')->findAll();

        if (empty($data['data_barang'])) {
            $data['data_barang'] = [];
        }

        return view('v_alattulis', $data);
    }


    public function delete($id)
    {
        $model = new M_alattulis();
        $model->deleteBarang($id);

        return redirect()->to('/Barang');
    }

    public function view($kode)
    {
        $model = new M_alattulis();
        $data['data_barang'] = $model->where('Kode', $kode)->first();

        if (!$data['data_barang']) {
            return redirect()->to('/Barang');
        }

        // Ambil URL gambar terbaru
        $latestImage = base_url('public/uploads' . $data['data_barang']['Foto']);

        // Tambahkan URL gambar ke dalam data yang akan dikirimkan ke view
        $data['latest_image'] = $latestImage;

        return view('v_detail_alat', $data);
    }

    public function edit($id)
    {
        $model = new M_alattulis();
        $data['data_barang'] = $model->getBarangById($id);
    
        if (!$data['data_barang']) {
            return redirect()->to('/Barang')->with('error', 'Data barang tidak ditemukan.');
        }
    
        return view('v_update', $data);
    }

    public function update($id)
    {

        $model = new M_alattulis();
        $validation = \Config\Services::validation();
        $validation->setRules([
            'Nama_Barang' => 'required',
            'Harga' => 'required|numeric'
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $existing_barang = $model->getBarangById($id);
        $existing_foto = $existing_barang['Foto'] ?? ''; 

        $foto = $this->request->getFile('Foto');
        if ($foto->isValid() && !$foto->hasMoved()) {
        $newName = $foto->getRandomName();
        $foto->move('path/to/upload/directory/', $newName);
        } else {
        $newName = $existing_foto; 
        }

        $model = new M_alattulis();
        $data = [
            'Kode' => $this->request->getPost('Kode'),
            'Nama_Barang' => $this->request->getPost('Nama_Barang'),
            'Harga' => $this->request->getPost('Harga'),
            'Foto' => $newName  
        ];
        $model->updateBarang($id, $data);

        return redirect()->to('/Barang')->with('success', 'Data berhasil diperbarui.');
    }



    public function store()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'Kode' => 'required',
            'Nama_Barang' => 'required',
            'Harga' => 'required|numeric'
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $foto = $this->request->getFile('Foto');
        if ($foto->isValid() && !$foto->hasMoved()) {
            $newName = $foto->getRandomName();
            $foto->move('public/path/to/upload/directory', $newName);
        } else {
            $newName = 'default.jpg';
        }

        $model = new M_alattulis();
        $data = [
            'Kode' => $this->request->getPost('Kode'),
            'Nama_Barang' => $this->request->getPost('Nama_Barang'),
            'Harga' => $this->request->getPost('Harga'),
            'Foto' => $newName  
        ];
        $model->insert($data);

        return redirect()->to('/Barang')->with('success', 'Data berhasil ditambahkan.');
    }
}
