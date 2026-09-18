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
                                    <h4 class="card-title">Choose List</h4>
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
                                                <th>title</th>
                                                <th>description</th>
                                                <th>Image</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($chooselists as $chooselist)
                                            <tr>
                                                <th>{{ $chooselist->id }}</th>
                                                <th>{{ $chooselist->title }}</th>
                                                <th>{{ $chooselist->description }}</th>
                                                
                                                <th><img src="{{ asset('public/'.$chooselist->image) }}" alt="" width="50px"></th>
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