@extends('template.default')

@section('content')
<div class="container mt-5">
    <h2>รายการ Pokedex</h2>
    <a href="{{ route('pokedex.create') }}" class="btn btn-success mb-3">เพิ่ม Pokemon ใหม่</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>รูปภาพ</th>
                <th>ชื่อ</th>
                <th>ประเภท</th>
                <th>HP</th>
                <th>ATK / DEF</th>
                <th>จัดการ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pokedexs as $poke)
            <tr>
                <td>{{ $poke->id }}</td>
                <td>
                    <img src="{{ $poke->image_url }}" alt="{{ $poke->name }}" style="width: 50px; height: 50px; object-fit: cover;">
                </td>
                <td>
                    <strong>{{ $poke->name }}</strong><br>
                    <small>{{ $poke->species }}</small>
                </td>
                <td>{{ $poke->type }}</td>
                <td>{{ $poke->hp }}</td>
                <td>{{ $poke->attack }} / {{ $poke->defense }}</td>
                <td>
                    <form action="{{ route('pokedex.destroy', $poke->id) }}" method="POST">
                        <a href="{{ route('pokedex.edit', $poke->id) }}" class="btn btn-warning btn-sm">แก้ไข</a>
                        
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบ?')">ลบ</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection