@extends('admin.master')

@section('title')
    Add Service
@endsection

@section('body')
    <div class="row py-3">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-start">Add Service</h3>
                    <a href="{{route('services.index')}}" class="btn btn-info float-end">Manage</a>
                </div>
                <div class="card-body">
                    <h3 class="text-center text-info">{{Session::has('message') ? Session::get('message') : ''}}</h3>
                    <form method="POST" action="{{route('services.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Service Title</label>
                            <div class="col-md-8">
                                <input type="text" name="title" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Portfolio description</label>
                            <div class="col-md-8">
                                <textarea class="form-control" name="description" id="" cols="10" rows="5"></textarea>
{{--                                <input type="text" name="description" class="form-control">--}}
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
                                <input type="submit"  class="btn btn-outline-info" value="Add Service">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
