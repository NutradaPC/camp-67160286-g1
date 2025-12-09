<!-- file : resources/viewes/html.blade.php-->
<!Doctype html>
<html>
    <head>
        <title>ส่วนหัวของ HTML</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Sriracha&display=swap" rel="stylesheet">
        <style>
            body{
                 font-family: "Sarabun", sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container mt-4 mb-5">
            <h1>Workshop #HTML - FORM</h1>
            
            <form action="#" method="POST" enctype="multipart/form-data">
                
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="FullName" class="col-form-label">Name</label>
                    </div>
                    <div class="col">
                        <input type="text" name="FullName" id="FullName" class="form-control">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="LastName" class="col-form-label">Lastname</label> </div>
                    <div class="col">
                        <input type="text" name="LastName" id="LastName" class="form-control">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="BDate" class="col-form-label">Birth Date</label>
                    </div>
                    <div class="col">
                        <input type="date" name="BDate" id="BDate" class="form-control">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                       <label class="col-form-label">Sex</label>
                    </div>
                    <div class="col-sm-12 col-md-8 pt-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Gender" id="Male" value="Male">
                            <label class="form-check-label" for="Male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Gender" id="Female" value="Female">
                            <label class="form-check-label" for="Female">Female</label>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="Photo" class="col-form-label">Photo</label>
                    </div>
                    <div class="col">
                        <input type="file" name="Photo" id="Photo" class="form-control">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="Address" class="col-form-label">Address</label>
                    </div>
                    <div class="col">
                        <textarea rows="4" name="Address" id="Address" class="form-control"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="Color" class="col-form-label">Fav Color</label>
                    </div>
                    <div class="col">
                        <select name="Color" id="Color" class="form-select"> <option value="red">Red</option>
                            <option value="blue">Blue</option>
                            <option value="yellow">Yellow</option>
                            <option value="black">Black</option>
                            <option value="white">White</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                       <label class="col-form-label">Music</label>
                    </div>
                    <div class="col-sm-12 col-md-8 pt-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Music" id="Country" value="Country">
                            <label class="form-check-label" for="Country">Country</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Music" id="Pop" value="Pop">
                            <label class="form-check-label" for="Pop">Pop</label>
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
                            <input class="form-check-input" type="checkbox" name="consent" id="consent">
                            <label class="form-check-label" for="consent">ยินยอมให้เก็บข้อมูล</label>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <button type="reset">Reset</button>
                        <button type="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </body>
</html>