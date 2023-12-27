@extends('backend.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Image</h1>

        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Upload Image</h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Image Upload</label>
                                    <input type="file" class="form-control" name="images[]" multiple>
                                </div>

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title">
                                </div>

                                <div class="form-group">
                                    <select name="status" id="" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
