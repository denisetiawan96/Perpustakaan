<?php

namespace App\Http\Controllers;

use DB;
use App\Buku;
use App\Katalog;
use App\Anggota;
use App\Penerbit;
use App\Pengarang;
use App\Peminjaman;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class AdminController extends Controller
{	
	public function dashboard()
    {
        $total_buku = Buku::count();
        $total_anggota = Anggota::count();
        $total_peminjaman = Peminjaman::whereMonth('tgl_pinjam', date('m'))->count();
        $total_penerbit = Penerbit::count();

        $data_donut = Buku::select(DB::raw("COUNT(id_penerbit) as total"))->groupBy('id_penerbit')->orderBy('id_penerbit', 'asc')->pluck('total');
        $label_donut = Penerbit::orderBy('penerbits.id', 'asc')->join('bukus', 'bukus.id_penerbit', '=', 'penerbits.id')->groupBy('nama_penerbit')->pluck('nama_penerbit');

        $data_pie = Buku::select(DB::raw("COUNT(id_pengarang) as total"))->groupBy('id_pengarang')->orderBy('id_pengarang', 'asc')->pluck('total');
        $label_pie = Pengarang::orderBy('pengarangs.id', 'asc')->join('bukus', 'bukus.id_pengarang', '=', 'pengarangs.id')->groupBy('nama_pengarang')->pluck('nama_pengarang');

        $label_bar = ['Peminjaman', 'Pengembalian'];
        $data_bar = [];

        foreach ($label_bar as $key => $value) {
            $data_bar[$key]['label'] = $label_bar[$key];
            $data_bar[$key]['backgroundColor'] = $key == 0 ? 'rgba(60,141,188,0.9)' : 'rgba(210, 214, 222, 1)';
            $data_month = [];

            foreach (range(1,12) as $month) {
                if ($key == 0) {
                    $data_month[] = Peminjaman::select(DB::raw("COUNT(*) as total"))->whereMonth('tgl_pinjam', $month)->first()->total;
                } else {
                    $data_month[] = Peminjaman::select(DB::raw("COUNT(*) as total"))->whereMonth('tgl_kembali', $month)->first()->total;
                }
            }

            $data_bar[$key]['data'] = $data_month;

        }

    	return view ('admin.dashboard', compact('total_buku', 'total_anggota', 'total_peminjaman', 'total_penerbit', 'data_donut', 'label_donut', 'data_bar', 'data_pie', 'label_pie'));

        //return $data_donut;
    }
        public function peminjaman()
    {
       $data_peminjaman = Peminjaman::all();

       return view ('admin.peminjaman.peminjaman', compact('data_peminjaman'));
    }
    public function buku()
    {
       $data_buku = Buku::all();

       return view ('admin.buku', compact('data_buku'));
    }
    public function katalog()
    {
       $data_katalog = Katalog::all();

       return view ('admin.katalog.katalog', compact('data_katalog'));
    }
    public function penerbit()
    {
        $data_penerbit = Penerbit::all();

    	
        return view ('admin.penerbit.penerbit', compact('data_penerbit'));
    }
    public function pengarang()
    {
        $data_pengarang = Pengarang::all();
        
    	return view ('admin.pengarang.pengarang', compact('data_pengarang'));
    }
    public function anggota()
    {
        $data_anggota = Anggota::all();
        
    	return view ('admin.anggota.anggota', compact('data_anggota'));
    }
    public function test_spatie()
    {
        $role = Role::create(['name' => 'petugas']);
        $permission = Permission::create(['name' => 'peminjaman']);

        $role->givePermissionTo($permission);
        $permission->assignRole($role);
    }
}
