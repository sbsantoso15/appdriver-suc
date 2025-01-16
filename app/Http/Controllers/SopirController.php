<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class SopirController extends Controller
{
    public function index() {

        if (request()->ajax()) {
            $kendaraan = DB::table('users as us')
                ->leftJoin('list_sopirs as sp', 'us.nik','=','sp.nik')
                ->where('us.isactive', '1')
                ->where('us.status', 'Driver')
                ->select(
                    'us.nik as nonik', 
                    'us.name', 
                    'sp.notelpon',
                    'sp.alamat',
                    'sp.tglpkwt',
                    'sp.updated_by',
                    'us.uid',
                )
                ->get();
            return DataTables::of($kendaraan)
            ->escapeColumns(['*'])
            ->addIndexColumn()
            ->addColumn('action', function ($item) {
                $button =   '<div class="dropdown">
                                <button class="btn dropdown-toggle btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-edit-alt"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item edit" href="javascript:void(0)" data-id="'.$item->uid. '">edit</a></li>
                                    <li><a class="dropdown-item delete" href="javascript:void(0)" data-id="'.$item->uid.'|'.$item->nonik. '">delete</a></li>
                                </ul>
                            </div> ';
                return $button;
            })
            ->rawColumns(['action'])
            ->make();
        }

        $header = 'List driver';
        return view('sopir.ListSopir', compact('header'));
    }

 
}
