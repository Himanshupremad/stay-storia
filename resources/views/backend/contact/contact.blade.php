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

                        <div class=" col-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Contact</h4>
                                </div>
                                @session('success')
                                    <div class="alert alert-success">
                                        {{ $value }}
                                    </div>
                                @endsession

                                @session('error')
                                    <div class="text-danger">
                                        {{ $value }}
                                    </div>
                                @endsession
                                <div class="card-body">
                                    <form action='{{ route('create.contact') }}' method="POST" enctype="multipart/form-data"
                                        class="form form-vertical">
                                        @csrf
                                        <div class="row">

                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"></label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" class="form-control" name="yearsOfExcellence"
                                                            placeholder="yearsOfExcellence"
                                                            value="{{ old('yearsOfExcellence', $contact->yearsOfExcellence ?? "") }}" />
                                                        <span class="text-danger">
                                                            @error('yearsOfExcellence')
                                                                {{ $message }}
                                                            @enderror

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"></label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" class="form-control" name="groupsHosted"
                                                            placeholder="groupsHosted"
                                                            value="{{ old('groupsHosted', $contact->groupsHosted ?? "") }}" />
                                                        <span class="text-danger">
                                                            @error('groupsHosted')
                                                                {{ $message }}
                                                            @enderror

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"></label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" class="form-control" name="guestsWelcomed"
                                                            placeholder="guestsWelcomed"
                                                            value="{{ old('guestsWelcomed', $contact->guestsWelcomed ?? "") }}" />
                                                        <span class="text-danger">
                                                            @error('guestsWelcomed')
                                                                {{ $message }}
                                                            @enderror

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"></label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" class="form-control" name="facebook"
                                                            placeholder="facebook"
                                                            value="{{ old('facebook', $contact->facebook ?? "") }}" />
                                                        <span class="text-danger">
                                                            @error('facebook')
                                                                {{ $message }}
                                                            @enderror

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"></label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" class="form-control" name="instagram"
                                                            placeholder="instagram"
                                                            value="{{ old('instagram', $contact->instagram ?? "") }}" />
                                                        <span class="text-danger">
                                                            @error('instagram')
                                                                {{ $message }}
                                                            @enderror

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"></label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" class="form-control" name="whatsapp"
                                                            placeholder="whatsapp"
                                                            value="{{ old('whatsapp', $contact->whatsapp ?? "") }}" />
                                                        <span class="text-danger">
                                                            @error('whatsapp')
                                                                {{ $message }}
                                                            @enderror

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"></label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" class="form-control" name="copyright"
                                                            placeholder="copyright"
                                                            value="{{ old('copyright', $contact->copyright ?? "") }}" />
                                                        <span class="text-danger">
                                                            @error('copyright')
                                                                {{ $message }}
                                                            @enderror

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"></label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" class="form-control" name="email"
                                                            placeholder="email"
                                                            value="{{ old('email', $contact->email ?? "") }}" />
                                                        <span class="text-danger">
                                                            @error('email')
                                                                {{ $message }}
                                                            @enderror

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"></label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" class="form-control" name="number"
                                                            placeholder="number"
                                                            value="{{ old('number', $contact->number ?? "") }}" />
                                                        <span class="text-danger">
                                                            @error('number')
                                                                {{ $message }}
                                                            @enderror

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary me-1">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>



@endsection