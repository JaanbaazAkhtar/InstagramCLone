@extends('layouts.app')

@section('content')
<div class="container">
   @if(count($posts)>0)
       POsts available
   @else
       No Post 
   @endif
</div>
@endsection
