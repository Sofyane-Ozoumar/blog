<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    </head>
    <body class="container">
        <div class="row">
          <div class="col-md-6 mx-auto">
               <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                  <div class="card-body d-flex flex-column align-items-start">
                     <strong class="d-inline-block mb-2 text-primary">{{$post->title}}</strong>
                     
                     <div class="mb-1 text-muted small">{{$post->created_at}}</div>
                     <p class="card-text mb-auto">{{$post->content}}</p>
                    <ul class="my-3">
                        @forelse ($post->comments as $comment)
                            <li>{{ $comment->id }}</li>
                            @empty

                            <p class='text-light'>no comments yet</p>
                        @endforelse
                        {{-- had comments hiya likayna fl Model Posts --}}
                    </ul>
                     <div class="form-items my-5">
                        <form action="{{route('storeComment')}}" method="POST">
                            @csrf
                            <label for="comment">comment</label>               
                            <textarea class="form-control" rows="4"
                             name="content"></textarea>
                            <button type="submit" class="btn btn-info">submit</button>
                        </form>
                    </div>
                  </div>
               </div>
            </div>
        </div>
    </body>
</html>
