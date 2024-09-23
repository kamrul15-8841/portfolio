@extends('admin.master')

@section('title')
    Contacts
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row h-100">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="float-start">Contacts</h3>
                            <a href="{{route('contacts.index')}}" class="btn btn-info float-end">Manage</a>
                        </div>
                        <div class="card-header">
                            <h3>{{ $contact->first_name . $contact->last_name }}</h3>
                        </div>
                        <div class="card-body fw-bold">
                            <p><strong>Phone: {{ $contact->phone }}</strong></p>
                            <p><strong>Email: {{ $contact->email }}</strong></p>
                            <p><strong>Message:</strong></p>
                            <div class="card bg-info text-white">
                                <p>{{ $contact->message }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection


