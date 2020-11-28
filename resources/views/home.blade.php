@extends('layouts.app')

@section('content')
<div class="container">
   @foreach($posts as $post)
        <div  style="margin-top: 10px; margin-botto:10px">
                <div class="row">
                    <div class="col-6 offset-3">
                        <a href="/profile/{{ $post->user-id}}"> {{ $post->user->username }} </a>
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 offset-3" style="margin-top: 15px">
                        <div class="d-flex align-items-center">
                            <div class="pr-3">
                                <img src="/storage/{{ $post->user->profile->image }}" class="rounded-circle w-100" style="max-width: 40px">
                            </div>
                            <hr>
                            <p><strong class="font-weight-bold"><a href="/profile/{{ $post->user->id}}"><span class="text-dark"> {{ $post->user->username }} </span></a></strong>{{ $post->description }}</p>
                        </div>
                    </div>
                </div>
        </div>

   @endforeach
   <div class="row">
       <div class="col-6 d-flex justify-content-center">
           {{$posts->links()}}
       </div>
   </div>
</div>
@endsection
