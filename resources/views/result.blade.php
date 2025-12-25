@extends('template.default')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h3>บันทึกข้อมูลสำเร็จ</h3>
        </div>
        <div class="card-body">
            <h5 class="card-title">ข้อมูลที่คุณส่งมา:</h5>
            <hr>
            <ul class="list-group list-group-flush">
                @foreach($data as $key => $value)
                    @if($key !== '_token')
                        <li class="list-group-item">
                            <strong class="text-primary">{{ ucfirst($key) }}:</strong> 
                            @if(is_object($value))
                                [File Uploaded]
                            @else
                                {{ $value }}
                            @endif
                        </li>
                    @endif
                @endforeach
            </ul>
            <a href="{{ url('/workshop') }}" class="btn btn-primary mt-4">กลับไปหน้าฟอร์ม</a>
        </div>
    </div>
</div>
@endsection