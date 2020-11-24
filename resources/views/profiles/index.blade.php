@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 offset-3 pt-5">
            <img src="/storage/{{ $user->profile->image }}" class="rounded-circle w-100">
       </div>
       <div class="col-6">
           <div class="d-flex justify-content-between align-items-baseline">
               <div class="d-flex align-items-center">
                    <h3> {{ $user->username}} </h3>
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
               </div>
                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan
           </div>
           @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
           @endcan
            <div class="d-flex">
               <div>
                   <strong>{{$user->posts->count()}}</strong>posts
               </div>
               <div>
                   <strong>{{$user->profile->followers->count()}}</strong>followers
               </div>
               <div>
                   <strong>{{ $user->following->count()}}</strong>following
               </div>
           </div>
           <div>{{ $user->profile->title }}</div>
           <div>{{ $user->profile->description }}</div>
           <div>{{ $user->profile->url ?? 'N/A'}}</div>
           <div>
               <button class="btn btn-primary" type="button"> Edit profile</button>
           </div>
       </div>
   </div>


   <div class="row">
       @foreach($user->post as $post)
        <div class="col-md-4 pb-5">
        <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image}}" class="w-100">
            </a>
            
        </div>
       @endforeach
   </div>
</div>
@endsection
