<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">  
</head>
<body>
    <div class="bg-dark py-3">
        <div class="container">
            <div class="h4 text-white">Laravel CRUD Operations Basic</div>
        </div>
    </div>

    <div class="container">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">Employee</div>
            <div>
                <a href="{{ route('employees.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-lg">
        <div class="card-body">
            <form action="">
                <div class="mb-3">
                    <label for="name">Name<lable>
                    <input type="text" name="name" id="name" placehoder="Enter Name" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="email">Email<lable>
                    <input type="text" name="email" id="email" placehoder="Enter Email" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label for="address">Address<lable>
                    <textarea name="address" id="address" cols="30" rows="4" class="form-control"></textarea>
                    
                </div>

                <div class="mb-3">
                    <label for="image">Image<lable>
                    <input type="file" name="image" id="image" class="form-control">
                </div>


                <button class="btn btn-primary">Save Form</button>
            </form>
        </div>
    </div>
</body>
</html>