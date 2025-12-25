@extends('template.default')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">แบบฟอร์มบันทึกข้อมูล Workshop</h2>
    
    <form id="workshopForm" action="{{ route('workshop.store') }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
        @csrf <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="FullName" class="col-form-label">ชื่อ</label>
            </div>
            <div class="col">
                <input type="text" name="FullName" id="FullName" class="form-control" required>
                <div class="invalid-feedback">กรุณากรอกชื่อ</div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="LastName" class="col-form-label">นามสกุล</label>
            </div>
            <div class="col">
                <input type="text" name="LastName" id="LastName" class="form-control" required>
                <div class="invalid-feedback">กรุณากรอกนามสกุล</div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="BDate" class="col-form-label">วันเดือนปีเกิด</label>
            </div>
            <div class="col">
                <input type="date" name="BDate" id="BDate" class="form-control" required>
                <div class="invalid-feedback">กรุณาระบุวันเดือนปีเกิด</div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="Age" class="col-form-label">อายุ</label>
            </div>
            <div class="col">
                <input type="number" name="Age" id="Age" class="form-control" min="1" required>
                <div class="invalid-feedback">กรุณาระบุอายุที่ถูกต้อง</div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label class="col-form-label">เพศ</label>
            </div>
            <div class="col-sm-12 col-md-8 pt-2">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Gender" id="Male" value="Male" required>
                    <label class="form-check-label" for="Male">ชาย</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Gender" id="Female" value="Female">
                    <label class="form-check-label" for="Female">หญิง</label>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="Photo" class="col-form-label">รูปภาพ</label>
            </div>
            <div class="col">
                <input type="file" name="Photo" id="Photo" class="form-control" accept="image/*" required>
                <div class="invalid-feedback">กรุณาแนบรูปภาพ</div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="Address" class="col-form-label">ที่อยู่</label>
            </div>
            <div class="col">
                <textarea rows="4" name="Address" id="Address" class="form-control" required></textarea>
                <div class="invalid-feedback">กรุณากรอกที่อยู่</div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="Color" class="col-form-label">สีที่ชอบ</label>
            </div>
            <div class="col">
                <select name="Color" id="Color" class="form-select" required>
                    <option value="">-- เลือกสีที่ชอบ --</option>
                    <option value="red">แดง</option>
                    <option value="blue">น้ำเงิน</option>
                    <option value="yellow">เหลือง</option>
                    <option value="black">ดำ</option>
                    <option value="white">ขาว</option>
                </select>
                <div class="invalid-feedback">กรุณาเลือกสีที่ชอบ</div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label class="col-form-label">แนวเพลงที่ชอบ</label>
            </div>
            <div class="col-sm-12 col-md-8 pt-2">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Music" id="Country" value="Country" required>
                    <label class="form-check-label" for="Country">ลูกทุ่ง / คันทรี่</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Music" id="Pop" value="Pop">
                    <label class="form-check-label" for="Pop">ป๊อป</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Music" id="RaB" value="RnB">
                    <label class="form-check-label" for="RaB">R&B</label>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="consent" id="consent" required>
                    <label class="form-check-label" for="consent">ยินยอมให้เก็บข้อมูล</label>
                    <div class="invalid-feedback">คุณต้องกดยินยอมก่อนส่งข้อมูล</div>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-5">
            <div class="col">
                <button class="btn btn-light border" type="reset">Reset</button>
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    document.getElementById('workshopForm').addEventListener('submit', function (event) {
        const form = event.target;
        
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
            alert("กรุณากรอกข้อมูลให้ครบถ้วน");
        } else {
            // แก้ไข 4: เอา event.preventDefault() ออก เพื่อให้ฟอร์มส่งข้อมูลไปยัง Server ได้
            // event.preventDefault();  <-- ลบบรรทัดนี้ออก
            // alert("บันทึกข้อมูลสำเร็จ"); <-- จะใส่หรือไม่ใส่ก็ได้ แต่ปกติถ้าส่ง Form จริงไม่ต้องมี alert ก็ได้
        }
        form.classList.add('was-validated');
    }, false);
</script>
@endpush