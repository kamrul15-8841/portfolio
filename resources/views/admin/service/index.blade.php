@extends('admin.master')

@section('title')
    Manage Service
@endsection

@section('body')
    <div class="row pt-3">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-start">Manage Service</h3>
                    <span>
                        <a href="{{route('services.create')}}" class="btn btn-info float-end">Create</a>
                    </span>
                </div>
                <div class="card-body">
                    <h3 class="text-center text-info">{{Session::has('message') ? Session::get('message') : ''}}</h3>
                    <table class="table table-hover table-bordered" id="basic-datatable">
                        <thead>
                        <tr>
                            <th>SI NO</th>
                            <th>Service Title</th>
                            <th>Service description</th>
                            <th>Service Image</th>
                            <th>Service Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $service)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$service->title}}</td>
                                <td>{{$service->description}}</td>
                                <td>
                                    <img src="{{asset('/').$service->image}}" alt="image" height="100" width="100">
                                </td>
                                <td>{{$service->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>

                                    <a href="{{route('services.edit', $service->id)}}" class="btn btn-sm btn-outline-warning">
                                        Edit
                                    </a>
                                    <a href="{{route('services.show', $service->id)}}" class="btn btn-sm btn-outline-warning">
                                            Details
                                    </a>

                                    <form action="{{route('services.destroy', $service->id)}}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-outline-danger "  onclick="return confirm('Are you sure you want to delete this');">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


