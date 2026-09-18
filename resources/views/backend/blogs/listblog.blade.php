@extends('backend.layout.app')
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
               <section id="basic-vertical-layouts">
                    <div class="row">

                        <div class=" col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Blog  List</h4>
                                </div>
                                @session('success')
                                <div class="alert alert-success">
                                     {{ $value }}
                                </div>
                                @endsession
                                <div class="card-body">
                                    <table class="table">
                                        <thead class="table-dark"> 
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>City</th>
                                                <th>date</th>
                                                <th>Image</th>  
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($blogs as $blog)
                                            <tr>
                                                <th>{{ $blog->id }}</th>
                                                <th>{{ $blog->name }}</th>
                                                <th>{{ $blog->city }}</th>
                                                <th>{{ $blog->date }}</th>
                                                <th><img src="{{ asset('public/'.$blog->image) }}" alt="" width="50px"></th>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection