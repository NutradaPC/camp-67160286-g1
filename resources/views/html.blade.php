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
        <div class="container mt-4" >
            <h1>Workshop #HTML - FORM</h1>
            <form>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="FullName">Name</label>
                    </div>
                    <div class="col">
                        <input id="FullName" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="LastName">Lastame</label>
                    </div>
                    <div class="col">
                        <input id="LastName" class="form-control">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="BDate">Birth Date</label>
                    </div>
                    <div class="col">
                        <input type="BDate" id="BDate" class="form-control">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                       <label for="Sex">Sex</label>
                    </div>
                    <form>
                        <div class="col-sm-12 col-md-5">
                        <td><input type="radio" name="Gender" id="Male">Male</td>
                        <td><input type="radio" name="Gender" id="Female">Female</td>
                        </div>
                    </form>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="Photo">Photo</label>
                    </div>
                    <div class="col">
                        <input type="file" name="Photo" id="Photo">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="Address">Address</label>
                    </div>
                    <div class="col">
                        <textarea name="Address" id="Address"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>