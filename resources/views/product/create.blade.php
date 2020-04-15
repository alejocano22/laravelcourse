@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      @include('util.message')
      <div class="card">
        <div class="card-header">Create product</div>
        <div class="card-body">
          @if($errors->any())
          <ul id="errors">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
          @endif

          <form method="POST" action="{{ route('product.save') }}">
            @csrf
            <input class="form-control" type="text" placeholder="Enter name" name="name" value="{{ old('name') }}" /><br>
            <input class="form-control" ype="text" placeholder="Enter price" name="price" value="{{ old('price') }}" /><br>
            <div class="row justify-content-center">
              <input type="submit" class="btn btn-success" value="Create" />
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
  <div class="row p-5">
    <div class="col-md-12">
      <div class="row justify-content-center">
        <h1>List of products</h1>
      </div>
      <ul id="errors">
        @foreach($data["products"] as $product)
        <li>{{ $product->getId() }} - {{ $product->getName() }} : ${{ $product->getPrice() }}</li>
        @if (count($product->comments) != 0)
        <b>Comments:</b><br />
        @foreach($product->comments as $comment)
        - {{ $comment->getDescription() }}<br />
        @endforeach
        @endif
        <br />
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection
