<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit A Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid bg-3 w-50 p-3"> 
        <div class="row bg-info text-center text-dark m-1 p-3">
            <h1>Edit A Contact</h1>
        </div>
        <form action="{{ route('contacts.update', $contact) }}" method="POST">
            @csrf @method('PUT') 
            <div class="row bg-dark text-white m-1 p-3">
                <div class="col-sm-4"><strong>Name</strong></div><div class="col-sm-8 mb-2"><input type="text" name="name" class="form-control form-control-lg" value="{{ $contact->name }}" ></div>
                <div class="col-sm-4"><strong>Email</strong></div><div class="col-sm-8 mb-2"><input type="email" name="email" class="form-control form-control-lg" value="{{ $contact->email }}" ></div>
                <div class="col-sm-4"><strong>Phone Number</strong></div><div class="col-sm-8 mb-2"><input type="number" name="phone" class="form-control form-control-lg" value="{{ $contact->phone }}" ></div>
                <div class="col-sm-4"><strong>Address</strong></div><div class="col-sm-8 mb-2"><textarea name="address" id="" cols="30" rows="3" class="form-control form-control-lg">{{ $contact->address }}</textarea></div>
                <div class="col-sm-4"></div><div class="col-sm-8 mb-2"><input type="hidden" name="id" value="{{ $contact->id }}"><button type="submit" class="form-control form-control-lg">EDIT</button></div>
                <div class="col-sm-12">
                    <h3><a href="{{ route('contacts.index') }}" class="text-white text-decoration-none">< Go Back</a></h3>
                </div>
            </div>
        </form> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>