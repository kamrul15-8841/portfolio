@extends('admin.master')

@section('title')
    Manage Contact
@endsection

@section('body')
    <div class="row pt-3">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-start">Manage Contact</h3>
                    <span>
                        <a href="{{route('contacts.create')}}" class="btn btn-info float-end">Create</a>
                    </span>
                </div>
                <div class="card-body">
                    <h3 class="text-center text-info">{{Session::has('message') ? Session::get('message') : ''}}</h3>
                    <table class="table table-hover table-bordered" id="basic-datatable">
                        <thead>
                        <tr>
                            <th>SI NO</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$contact->first_name}}</td>
                                <td>{{$contact->last_name}}</td>
                                <td>{{$contact->phone}}</td>
                                <td>{{$contact->email}}</td>
{{--                                <td>{!! str_limit($contact->message,15,'...') !!}</td>--}}
                                <td>{{ \Illuminate\Support\Str::words($contact->message, 5, '...') }}</td>
                                <td>
                                    <a href="{{route('contacts.edit', $contact->id)}}" class="btn btn-sm btn-outline-info">
                                        Reply
                                    </a>
                                    <a href="{{route('contacts.show', $contact->id)}}" class="btn btn-sm btn-outline-warning">
                                            View
                                    </a>

                                    <form action="{{route('contacts.destroy', $contact->id)}}" method="post" style="display: inline-block">
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


