@extends('admin.master')

@section('title')
    Add Portfolio
@endsection

@section('body')
    <div class="row py-3">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-start">Add Portfolio</h3>
                    <a href="{{route('portfolios.index')}}" class="btn btn-info float-end">Manage</a>
                </div>
                <div class="card-body">
                    <h3 class="text-center text-info">{{Session::has('message') ? Session::get('message') : ''}}</h3>
                    <form method="POST" action="{{route('portfolios.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Category Name</label>
                            <div class="col-md-8">
                                <select name="category_name" id="" class="form-control">
                                    <option selected disabled><-- Select a Category --></option>
                                    <option name="category_name">Web Design</option>
                                    <option name="category_name">Web Development</option>
                                    <option name="category_name">Mobile App Development</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Portfolio Title</label>
                            <div class="col-md-8">
                                <input type="text" name="title" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Portfolio Class</label>
                            <div class="col-md-8">
                                <input type="text" name="class" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Portfolio Demo</label>
                            <div class="col-md-8">
                                <input type="text" name="demo" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Portfolio Github</label>
                            <div class="col-md-8">
                                <input type="text" name="github" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Portfolio Image</label>
                            <div class="col-md-8">
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Status</label>
                            <div class="col-md-8">
                                <label><input type="radio" name="status" value="1" checked> Published</label>
                                <label><input type="radio" name="status" value="0"> Unpublished</label>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit"  class="btn btn-outline-info" value="Add Portfolio">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
