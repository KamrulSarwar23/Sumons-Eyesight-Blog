@extends('backend.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Article</h1>

        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Article</h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title">
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="summernote" name="description" id="" cols="30" rows="10"></textarea>
                                
                                </div>

                                <div class="form-group">
                                    <select name="status" id="" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>


                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
