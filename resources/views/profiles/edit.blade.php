@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile{{ $user->id }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PATCH')
        <h3>Edit Profile</h3>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" 
                    id="title" placeholder="Enter title"
                    value="{{old('title') ?? $user->profile->title }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" 
                    placeholder="Descripiton"
                    value="{{old('description') ?? $user->profile->description }}">
            </div>
            
            <div class="form-group">
                <label for="url">URL</label>
                <input type="text" class="form-control" id="url" placeholder="URL"
                    value="{{old('url') ?? $user->profile->url }}">
            </div>
        
            <div class="form-group">
                <label for="profile_image">Profile Image</label>
                <input type="file" class="form-control-file" id="profile_image" name="profile_image">
            </div>
            
            <button type="submit" class="btn btn-primary">Save Profile</button>
    </form>
</div>
@endsection
