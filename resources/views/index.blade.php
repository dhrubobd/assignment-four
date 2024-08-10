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
    <div class="row bg-info text-center text-dark m-1 p-3">
        <h1>Contact Panel</h1>
    </div>
    <div class="container-fluid bg-3 text-center"> 
        <div class="row bg-info text-dark m-1 p-2">
            <div class="col-sm-2 text-uppercase"><strong>Date</strong></div>
            <div class="col-sm-2 text-uppercase"><strong>Name</strong></div>
            <div class="col-sm-2 text-uppercase"><strong>Email</strong></div>
            <div class="col-sm-2 text-uppercase"><strong>Phone Number</strong></div>
            <div class="col-sm-2 text-uppercase"><strong>Address</strong></div>
            <div class="col-sm-1 text-uppercase"><strong>Edit Contact</strong></div>
            <div class="col-sm-1 text-uppercase"><strong>Delete Contact</strong></div>
        </div>
    @foreach ($contacts as $contact)
        <div class="row bg-dark text-white m-1 p-2">
            <div class="col-sm-2">{{ $contact->created_at }}</div>
            <div class="col-sm-2">{{ $contact->name }}</div>
            <div class="col-sm-2">{{ $contact->email }}</div>
            <div class="col-sm-2">{{ $contact->phone }}</div>
            <div class="col-sm-2">{{ $contact->address }}</div>
            <div class="col-sm-1">
                <form action="{{ route('contacts.edit',$contact) }}" method="POST">
                    @csrf @method('GET') 
                    <input type="hidden" name="id" value="{{ $contact->id }}">
                    <button type="submit">EDIT</button>
                </form>
            </div>
            <div class="col-sm-1">
                <form action="{{ route('contacts.destroy',$contact) }}" method="POST">
                    
                    @csrf @method('DELETE') 
                    <input type="hidden" name="id" value="{{ $contact->id }}">
                    <button type="submit">DELETE</button>
                </form> 
            </div>
        </div>
    @endforeach
        <div class="row bg-info text-dark m-1 p-3">
            <div class="col-sm-2">
                Sort by Date
            </div>
            <div class="col-sm-2">
                Sort by Name
            </div>
            <div class="col-sm-6">
                Search by Name or Email
            </div>
            <div class="col-sm-2">
                <div class="d-inline p-2 bg-primary rounded-3">
                    <strong><a href="{{ route('contacts.create') }}" class="text-white text-decoration-none m-2 p-2">Add A New Contact</a></strong>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>