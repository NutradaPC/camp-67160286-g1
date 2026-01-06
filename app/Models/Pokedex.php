<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokedex extends Model
{
    use HasFactory;

    // ระบุชื่อตารางให้ชัดเจน (เนื่องจาก pokedexs ไม่ใช่รูปพหูพจน์ปกติภาษาอังกฤษ)
    protected $table = 'pokedexs';

    // อนุญาตให้แก้ไขข้อมูลในฟิลด์เหล่านี้ได้ (Mass Assignment)
    protected $fillable = [
        'name',
        'type',
        'species',
        'height',
        'weight',
        'hp',
        'attack',
        'defense',
        'image_url',
    ];
}