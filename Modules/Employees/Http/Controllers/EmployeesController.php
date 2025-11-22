<?php

namespace Modules\Employees\Http\Controllers;

use App\Models\hrd\EmployeesModel;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        // Ambil data dari database HRD
        $employees = EmployeesModel::get();


        return view('employees::index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('employees::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $employee = DB::connection('mysql_hrd')
            ->table('employees')
            ->where('id', $id)
            ->first();

        return view('employees::show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('employees::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

    public function updateStatus(Request $request, $id)
    {
        // 1. Validasi status yang dikirim
        $request->validate([
            'status' => 'required|in:active,inactive,cuti', // Sesuaikan dengan nilai ENUM di DB Anda
        ]);

        // 2. Cari data Employee
        $employee = Employee::find($id);

        if (!$employee) {
            return redirect()->route('employees.index')->with('error', 'Karyawan tidak ditemukan.');
        }

        // 3. Update status
        $employee->status = $request->input('status');
        $employee->save();

        // 4. Redirect dengan pesan sukses
        $statusText = ucfirst($request->input('status'));
        return redirect()->route('employees.index')->with('success', "Status Karyawan berhasil diperbarui menjadi {$statusText}.");
    }
}