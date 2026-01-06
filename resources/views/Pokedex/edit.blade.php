@extends('template.default')

@section('content')
<div class="container mt-5">
    <h2>แก้ไขข้อมูล Pokemon</h2>
    
    <form action="{{ route('pokedex.update', $pokedex->id) }}" method="POST">
        @csrf
        @method('PUT') <div class="row">
            <div class="col-md-6 mb-3">
                <label>Name</label>
                <input type="text" name="name" value="{{ $pokedex->name }}" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Type</label>
                <input type="text" name="type" value="{{ $pokedex->type }}" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Species</label>
                <input type="text" name="species" value="{{ $pokedex->species }}" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label>Image URL</label>
                <input type="text" name="image_url" value="{{ $pokedex->image_url }}" class="form-control">
            </div>
            
            <div class="col-md-3 mb-3">
                <label>Height</label>
                <input type="number" name="height" value="{{ $pokedex->height }}" class="form-control">
            </div>
            <div class="col-md-3 mb-3">
                <label>Weight</label>
                <input type="number" name="weight" value="{{ $pokedex->weight }}" class="form-control">
            </div>
            <div class="col-md-2 mb-3">
                <label>HP</label>
                <input type="number" step="0.01" name="hp" value="{{ $pokedex->hp }}" class="form-control">
            </div>
            <div class="col-md-2 mb-3">
                <label>Attack</label>
                <input type="number" step="0.01" name="attack" value="{{ $pokedex->attack }}" class="form-control">
            </div>
            <div class="col-md-2 mb-3">
                <label>Defense</label>
                <input type="number" step="0.01" name="defense" value="{{ $pokedex->defense }}" class="form-control">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">อัปเดต</button>
        <a href="{{ route('pokedex.index') }}" class="btn btn-secondary">ยกเลิก</a>
    </form>
</div>
@endsection