@extends('layouts.app')

@section('content')
<div class="container">
   

   <div style="width:60%; margin-left:20%">
    <h2>Create Post</h2>
        <form action="/p" enctype="multipart/form-data" method="POST">
            @csrf
            
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter title">
                </div>

                <div class="form-group">
                    <label for="caption">Caption</label>
                    <input type="text" class="form-control" id="caption" placeholder="Caption">
                </div>
                
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="descripiton"></textarea>
                </div>
            
                <div class="form-group">
                    <label for="upload">Upload Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>
                
                <button type="submit" class="btn btn-primary">Upload</button>
        </form>
   </div>
</div>
@endsection
