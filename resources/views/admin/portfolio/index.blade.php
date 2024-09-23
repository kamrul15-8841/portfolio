@extends('admin.master')

@section('title')
    Manage Portfolio
@endsection

@section('body')
    <div class="row pt-3">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-start">Manage Portfolio</h3>
                    <span>
                        <a href="{{route('portfolios.create')}}" class="btn btn-info float-end">Create</a>
                    </span>
                </div>
                <div class="card-body">
                    <h3 class="text-center text-info">{{Session::has('message') ? Session::get('message') : ''}}</h3>
                    <table class="table table-hover table-bordered" id="basic-datatable">
                        <thead>
                        <tr>
                            <th>SI NO</th>
                            <th>Category Name</th>
                            <th>Portfolio Title</th>
                            <th>Portfolio Class</th>
                            <th>Portfolio Demo</th>
                            <th>Portfolio Github</th>
                            <th>Portfolio Image</th>
                            <th>Portfolio Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($portfolios as $portfolio)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$portfolio->name}}</td>
                                <td>{{$portfolio->title}}</td>
                                <td>{{$portfolio->class}}</td>
                                <td>{{$portfolio->demo}}</td>
                                <td>{{$portfolio->github}}</td>
                                <td>
                                    <img src="{{asset('/').$portfolio->image}}" alt="image" height="100" width="100">
                                </td>
                                <td>{{$portfolio->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>

                                    <a href="{{route('portfolios.edit', $portfolio->id)}}" class="btn btn-sm btn-outline-warning">
                                        Edit
                                    </a>
                                    <a href="{{route('portfolios.show', $portfolio->id)}}" class="btn btn-sm btn-outline-warning">
                                        Details
                                    </a>

                                    <form action="{{route('portfolios.destroy', $portfolio->id)}}" method="post" style="display: inline-block">
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


