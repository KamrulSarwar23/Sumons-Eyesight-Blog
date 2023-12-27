@extends('backend.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>

        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Update Profile</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <img width="130px" height="150px" src="{{ asset('storage/profile/' . $profile->image) }}"
                                                alt="">
                                        </div>

                                        <form action="{{ route('profile.update') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="file" class="form-control" name="image" value="{{ $profile->image }}">
                                            </div>

                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="summernote" name="description" id="" cols="30" rows="10">{{ $profile->description }}</textarea>

                                            </div>

                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </form>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
