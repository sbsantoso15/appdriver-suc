<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Nonstandard\Uuid;
use Yajra\DataTables\Facades\DataTables;
// use Illuminate\Database\QueryException;
use App\Models\KendaraanModel;
use App\Models\User;
use App\Models\Vendor;
// use Illuminate\Support\Facades\Log;

class Kendaraan extends Controller
{
    public function index(){
        return view('kendaraan.index', ['header'=>'Data kendaraan']);
    }

    public function addunit(){
        $header = 'Add data unit';
        $drivers = User::where('status','Driver')
            ->where('isactive', 1)
            ->get();
        $vendors = Vendor::where('isactive', 1)->get();
        return view('kendaraan.addunit-form', compact('header', 'vendors', 'drivers'));
    }

    public function store(Request $request){
        
        $validator = Validator::make($request->all(), [
            'noplat' => 'required|max:12|string|unique:kendaraans,noplat',
            'masasewa1' => 'required|date',
            'masasewa2' => [
                'required',
                'date',
                function ($attribute, $value, $fail) use ($request) {
                    // Mengambil masasewa1 dari request
                    $masasewa1 = \Carbon\Carbon::parse($request->masasewa1);
                    
                    // Membandingkan apakah masasewa2 lebih dari 1 tahun setelah masasewa1
                    $masasewa2 = \Carbon\Carbon::parse($value);
        
                    if ($masasewa2->diffInYears($masasewa1) < 1) {
                        $fail('Masa sewa minimal 1 tahun setelah tanggal sewa.');
                    }
                },
            ],
            'tglpajak' => 'required|date',
            'vendor' => 'required'
        ],
        [
            'noplat.required' => 'The NOMOR PLAT field is required.',
            'noplat.unique' => 'The NOMOR PLAT has already been taken.',
            'masasewa1.required' => 'Masa sewa awal harus diisi.',
            'masasewa2.required' => 'Masa sewa akhir harus diisi.',
            'tglpajak.required' => 'Tanggal pajak KB harus diisi.',
            'vendor.required' => 'Nama vendor harus diisi.',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        KendaraanModel::create([
            'noplat' => $request->input('noplat'),
            'nik' => $request->input('namaspr'),
            'masasewa1' => Carbon::parse($request->masasewa1),
            'masasewa2' => Carbon::parse($request->masasewa2),
            'tglpajak' => Carbon::parse($request->tglpajak),
            'idvendor' => $request->input('vendor'),
            'uid' => Uuid::uuid1()->toString(),
            'updated_by' => Auth::user()->nik,
        ]);
        return redirect()->route('kendaraan.index')->with('flash_message', 'User created successfully.');   
    }

    public function edit($uid){
        $data = KendaraanModel::where('uid', $uid)->first();
        $vendors = Vendor::where('isactive', 1)->get();
        $drivers = User::where('status','Driver')->get();
        $header = "Edit data";
        return view('kendaraan.addunit-form', compact('header', 'data', 'drivers', 'vendors'));
    }

    public function update(Request $request, $uid) {
        $validator = Validator::make($request->all(), [
            'masasewa1' => 'required|date',
            'masasewa2' => [
                'required',
                'date',
                function ($attribute, $value, $fail) use ($request) {
                    $masasewa1 = \Carbon\Carbon::parse($request->masasewa1);
                    $masasewa2 = \Carbon\Carbon::parse($value);
        
                    if ($masasewa2->diffInYears($masasewa1) < 1) {
                        $fail('Masa sewa minimal 1 tahun setelah tanggal sewa.');
                    }
                },
            ],
            'tglpajak' => 'required|date',
        ],
        [
            'noplat.unique' => 'The NOMOR PLAT has already been taken.',
            'masasewa1.required' => 'Masa sewa awal harus diisi.',
            'masasewa2.required' => 'Masa sewa akhir harus diisi.',
            'tglpajak.required' => 'Tanggal pajak KB harus diisi.',
            'vendor.required' => 'Nama vendor harus diisi.',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }        

        try {
            DB::table('kendaraans')
            ->where('uid', $uid)
            ->update([
                'nik' => $request->input('namaspr'),
                'masasewa1' => Carbon::parse($request->masasewa1),
                'masasewa2' => Carbon::parse($request->masasewa2),
                'tglpajak' => Carbon::parse($request->tglpajak),
                'idvendor' => $request->input('vendor'),
                'updated_by' => Auth::user()->nik,    
            ]);
            // if ($update) {
            //     return response()->json(['status' => 'success', 'message' => 'Data successfully updated']);
            // } else {
            //     return response()->json(['status' => 'error', 'message' => 'Failed to updated data'], 500);
            // }           

        } catch (\Throwable $e) {
            return response()->json(['status' => $e->getMessage()], 400);
        }
        return redirect()->route('kendaraan.index')->with('flash_message', 'User created successfully.');   
    }

    public function show() {
        if (request()->ajax()) {
            $kendaraan = DB::table('kendaraans as kd')
                ->leftJoin('users as us', 'us.nik','=','kd.nik')
                ->leftJoin('vendors as vd', 'vd.idvendor','=','kd.idvendor')
                ->where('kd.isactive', '1')
                ->select(
                    'kd.noplat', 
                    'us.name', 
                    'kd.masasewa1',
                    'kd.masasewa2',
                    'kd.tglpajak',
                    'vd.nmvendor',
                    'kd.uid',
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
                                    <li><a class="dropdown-item delete" href="javascript:void(0)" data-id="'.$item->uid.'|'.$item->noplat. '">delete</a></li>
                                </ul>
                            </div> ';
                return $button;
            })
            ->rawColumns(['action'])
            ->make();
        }
        // return view('kendaraan.index', ['header'=>'Data kendaraan']);
    }

    public function deactive($uid) {
        try {
            $deactive = DB::table('kendaraans')
            ->where('uid', $uid)
            ->update([
                'isactive' => 0,
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]);

            if ($deactive) {
                return response()->json(['status' => 'success', 'message' => 'Data successfully deactivated']);
            } else {
                return response()->json(['status' => 'error', 'message' => 'Failed to deactivate data'], 500);
            }           
        } catch (\Throwable $e) {
            return response()->json(['status' => $e->getMessage()], 400);
            // return 'error';
        }
        
    }
}
