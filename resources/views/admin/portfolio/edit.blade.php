@extends('admin.master')

@section('title')
    Edit Portfolio
@endsection

@section('body')
    <div class="row py-3">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-start">Edit Portfolio</h3>
                    <a href="{{route('portfolios.index')}}" class="btn btn-info float-end">Manage</a>
                </div>
                <div class="card-body">
                    <h3 class="text-center text-info">{{Session::has('message') ? Session::get('message') : ''}}</h3>
                    <form method="POST" action="{{route('portfolios.update', $portfolio->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Category Name</label>
                            <div class="col-md-8">
                                <select name="category_name" id="" class="form-control">
                                    <option value="{{ $portfolio->category_name }}" {{ $portfolio->category_name == $portfolio->category_name ? 'selected' :  ''}}>{{ $portfolio->category_name }}</option>
                                    <option name="category_name">Web Dev</option>
                                    <option name="category_name">Mobile App</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Portfolio Title</label>
                            <div class="col-md-8">
                                <input type="text" value="{{ $portfolio->title }}" name="title" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Portfolio Class</label>
                            <div class="col-md-8">
                                <input type="text" value="{{ $portfolio->class }}" name="class" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Portfolio Demo</label>
                            <div class="col-md-8">
                                <input type="text" value="{{ $portfolio->demo }}" name="demo" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Portfolio Github</label>
                            <div class="col-md-8">
                                <input type="text" value="{{ $portfolio->github }}" name="github" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Portfolio Image</label>
                            <div class="col-md-8">
                                <input type="file" name="image" class="form-control">
                                <img src="{{asset('/').$portfolio->image}}" alt="image" height="100" width="100">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Status</label>
                            <div class="col-md-8">
                                <label><input type="radio" name="status" value="1" {{$portfolio->status == 1 ? 'checked' : ''}}> Published</label>
                                <label><input type="radio" name="status" value="0" {{$portfolio->status == 0 ? 'checked' : ''}}> Unpublished</label>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit"  class="btn btn-outline-info" value="Update Portfolio">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

