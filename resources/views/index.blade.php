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
        <div class="row bg-info text-dark m-1 p-3">
            <div class="col-sm-2">
                <strong>Sort by Date</strong>
                <a href="{{ route('contacts.index',['sort'=>'datea']) }}" class="btn btn-info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                    </svg>
                </a>
                <a href="{{ route('contacts.index',['sort'=>'dated']) }}" class="btn btn-info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                        <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
                    </svg>
                </a>
            </div>
            <div class="col-sm-2">
                <strong>Sort by Name</strong>
                <a href="{{ route('contacts.index',['sort'=>'namea']) }}" class="btn btn-info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                    </svg>
                </a>
                <a href="{{ route('contacts.index',['sort'=>'named']) }}" class="btn btn-info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                        <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
                    </svg>
                </a>
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
       
        
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>