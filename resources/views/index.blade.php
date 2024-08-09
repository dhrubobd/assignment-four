<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid bg-3 text-center"> 
        <div class="row bg-info text-dark m-1 p-2">
            <div class="col-sm-2"><strong>Name</strong></div>
            <div class="col-sm-2"><strong>Email</strong></div>
            <div class="col-sm-2"><strong>Phone Number</strong></div>
            <div class="col-sm-2"><strong>Address</strong></div>
            <div class="col-sm-2"><strong>Edit Contact</strong></div>
            <div class="col-sm-2"><strong>Delete Contact</strong></div>
        </div>
    @foreach ($contacts as $contact)
        <div class="row bg-dark text-white m-1 p-2">
            <div class="col-sm-2">{{ $contact->name }}</div>
            <div class="col-sm-2">{{ $contact->email }}</div>
            <div class="col-sm-2">{{ $contact->phone }}</div>
            <div class="col-sm-2">{{ $contact->address }}</div>
            <div class="col-sm-2"><button>Edit</button></div>
            <div class="col-sm-2">
                <form action="{{ route('contacts.destroy',$contact) }}" method="POST">
                    
                    @csrf @method('DELETE') 
                    <input type="hidden" name="id" value="{{ $contact->id }}">
                    <button type="submit">Delete</button>
                </form> 
            </div>
        </div>
    @endforeach
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>