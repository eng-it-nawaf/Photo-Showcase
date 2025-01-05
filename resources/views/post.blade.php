@extends('layouts.app')
 
@section('content')
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">{{ $post->title }}</h1> 
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container mb-4">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-12">
                @if($post->image) <!-- Show image if available -->
                    <div class="mb-4">
                        <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid">
                    </div>
                @endif
                <p class="lead mb-0">{{ $post->text }}</p> <!-- Show text -->
            </div>
        </div>
    </div>
@endsection

  {{--  @extends('layouts.app')

  @section('content')
      <header class="py-5 bg-light border-bottom mb-4">
          <div class="container">
              <div class="text-center my-5">
                  <h1 class="fw-bolder">{{ $post->title }}</h1>
              </div>
          </div>
      </header>
  
      <div class="container mb-4">
          <div class="row">
              <div class="col-lg-12">
                  <!-- تحقق من طباعة اسم الصورة -->
                  {{ dd($post->image) }} 
  
                  <!-- تحقق من طباعة المسار الكامل للصورة -->
                  {{ dd(asset('images/' . $post->image)) }} 
  
                  <p class="lead mb-0">{{ $post->text }}</p>
                  
                  <!-- عرض الصورة -->
                  @if($post->image && file_exists(public_path('images/' . $post->image)))
                      <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" />
                  @else
                      <img src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="Default Image" />
                  @endif
              </div>
          </div>
      </div>
  @endsection  --}}
  