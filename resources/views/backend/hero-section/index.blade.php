@extends('backend.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Hero Section</h1>

        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Update Hero Section</h4>
                                    </div>
                                    <div class="card-body">

                                        <form action="{{ route('hero.update') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" name="title"
                                                    value="{{ $herodata->title }}">
                                            </div>

                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="summernote" name="description" id="" cols="30" rows="10">{{ $herodata->description }}</textarea>
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
