<?php

namespace App\Http\Controllers;

use App\Models\KendaraanModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class Dashboard extends Controller
{
    public function index() {
        $header = 'Dashboard';
        $countUnit = KendaraanModel::countUnit();
        $countDriver = User::countDriver();
        // $countUser = User::countUser();
        $onsiteUnit = KendaraanModel::onsiteUnit();
        $offsiteUnit = KendaraanModel::offsiteUnit();
        return view('dashboard', 
            compact(
                'header', 
                'countUnit', 
                'countDriver',
                'onsiteUnit',
                'offsiteUnit',
            ));
    }

    public function kendaraan_onsite() {
        if (request()->ajax()) {
            $kendaraan = DB::table('kendaraans as kd')
                ->leftJoin('users as us', 'us.nik','=','kd.nik')
                ->select(
                    'kd.noplat', 
                    'us.name',
                    'kd.uid',
                )
                ->where('isonsite',1)
                ->get();
            return DataTables::of($kendaraan)
            ->addIndexColumn()
            ->make();
        }
    }

    public function kendaraan_offsite() {
        if (request()->ajax()) {
            $kendaraan = DB::table('kendaraans as kd')
                ->leftJoin('users as us', 'us.nik','=','kd.nik')
                ->select(
                    'kd.noplat', 
                    'us.name',
                    'kd.uid',
                )
                ->where('isonsite',0)
                ->get();
            return DataTables::of($kendaraan)
            ->addIndexColumn()
            ->make();
        }
    }
}
