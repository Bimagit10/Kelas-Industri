<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users edit - Eloquent</title>
   
  </head>

  <body>
    <div class="container">
      <form method="POST" action="{{ route('eloquent.update', $user->id) }}" class="w-50 mx-auto mt-5">
        @csrf
        @method('PATCH')
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="name" class="form-control" name="name" value="{{ $user->name }}" id="name"
            aria-describedby="name">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" value="{{ $user->email }}" id="email"
            aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </body>

</html>