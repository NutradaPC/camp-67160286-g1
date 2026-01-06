@extends('template.default')

@section('content')
<div class="container mt-5">
    <h2>เพิ่ม Pokemon ใหม่</h2>
    
    <form action="{{ route('pokedex.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Type</label>
                <input type="text" name="type" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Species</label>
                <input type="text" name="species" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label>Image URL</label>
                <input type="text" name="image_url" class="form-control" placeholder="https://..." required>
            </div>
            
            <div class="col-md-3 mb-3">
                <label>Height</label>
                <input type="number" name="height" class="form-control">
            </div>
            <div class="col-md-3 mb-3">
                <label>Weight</label>
                <input type="number" name="weight" class="form-control">
            </div>
            <div class="col-md-2 mb-3">
                <label>HP</label>
                <input type="number" step="0.01" name="hp" class="form-control">
            </div>
            <div class="col-md-2 mb-3">
                <label>Attack</label>
                <input type="number" step="0.01" name="attack" class="form-control">
            </div>
            <div class="col-md-2 mb-3">
                <label>Defense</label>
                <input type="number" step="0.01" name="defense" class="form-control">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">บันทึก</button>
        <a href="{{ route('pokedex.index') }}" class="btn btn-secondary">ยกเลิก</a>
    </form>
</div>
@endsection