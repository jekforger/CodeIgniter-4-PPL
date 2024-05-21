<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class C_validation extends Controller
{
    public function index()
    {
        return view('v_validation');
    }

    public function store()
    {
        $validationRules = [
            'nip' => 'required|exact_length[18]',
            'nama' => 'required',
            'tgl_lahir' => 'required|valid_date',
            'gender' => 'required|in_list[laki-laki,perempuan]',
            'pendidikan' => 'required|in_list[sd,smp,sma,d3,d4,s1,s2,s3]',
            'no_hp' => 'required|numeric|min_length[10]|max_length[18]',
            'email' => 'required|valid_email'
        ];

        $validationMessages = [
            'nip.exact_length' => 'NIP harus terdiri dari 16 digit.',
            'no_hp.min_length' => 'Nomor HP harus terdiri dari minimal 10 digit.',
            'no_hp.max_length' => 'Nomor HP tidak boleh lebih dari 14 digit.',
            'email.valid_email' => 'Format email tidak valid. Pastikan email Anda mengandung karakter "@".'
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Jika validasi berhasil, kamu bisa menggunakan data ini untuk keperluan lainnya
        $userData = [
            'NIP' => $this->request->getVar('nip'),
            'Nama' => $this->request->getVar('nama'),
            'Tanggal Lahir' => $this->request->getVar('tgl_lahir'),
            'Gender' => $this->request->getVar('gender'),
            'Pendidikan' => $this->request->getVar('pendidikan'),
            'No Hp' => $this->request->getVar('no_hp'),
            'Email' => $this->request->getVar('email')
        ];

        // Lakukan apa pun yang diperlukan dengan data pengguna

        // Redirect atau tampilkan pesan sukses
        return redirect()->to('validation/success')->with('userData', $userData);
    }
}
 