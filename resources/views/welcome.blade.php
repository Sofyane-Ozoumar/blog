<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    </head>
    <body class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="{{ route('search') }}" method="GET" class="mb-4">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search articles...">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
                @foreach ($posts as $post)
                    <div class="row">
                        <div class="col-md-4">
                        <div class="card flex-md-row mb">
                            <div class="card-body d-flex flex-column align-items-start">
                                <strong class="d-inline-block mb-2 text-primary">{{$post->title}}</strong>
                                
                                <div class="mb-1 text-muted small">{{$post->created_at}}</div>
                                <p class="card-text mb-auto">{{$post->content}}</p>
                                <a class="btn btn-outline-primary btn-sm">comment</a>
                                <a class="btn btn-outline-primary btn-sm" href="{{ route('single',$post->id) }}">show</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                @endforeach
                <div class="row">
                    <div class="col-md-4">
                        <a class="btn btn-primary" href="{{ route('add') }}">add</a>
                    </div>
                </div>
                @if($posts->count()>0)
                    <div class="mt-5 pagin">
                        {{ $posts->links() }}
                    </div>
                @endif
            </div>
        </div>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    </body>
</html>
