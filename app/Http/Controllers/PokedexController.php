<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokedex; // เรียกใช้ Model

class PokedexController extends Controller
{
    // แสดงรายการทั้งหมด
    public function index()
    {
        $pokedexs = Pokedex::all();
        return view('pokedex.index', compact('pokedexs'));
    }

    // แสดงฟอร์มสร้างใหม่
    public function create()
    {
        return view('pokedex.create');
    }

    // บันทึกข้อมูลใหม่
    public function store(Request $request)
    {
        // ตรวจสอบความถูกต้องข้อมูล (Validation) เบื้องต้น
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'image_url' => 'required',
        ]);

        Pokedex::create($request->all());

        return redirect()->route('pokedex.index')
                         ->with('success', 'เพิ่ม Pokemon สำเร็จแล้ว');
    }

    // แสดงฟอร์มแก้ไข
    public function edit($id)
    {
        $pokedex = Pokedex::find($id);
        return view('pokedex.edit', compact('pokedex'));
    }

    // อัปเดตข้อมูล
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $pokedex = Pokedex::find($id);
        $pokedex->update($request->all());

        return redirect()->route('pokedex.index')
                         ->with('success', 'แก้ไขข้อมูลสำเร็จแล้ว');
    }

    // ลบข้อมูล
    public function destroy($id)
    {
        $pokedex = Pokedex::find($id);
        $pokedex->delete();

        return redirect()->route('pokedex.index')
                         ->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}