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
                            <h4>Update Article</h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('article.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" value="{{ $article->title }}">
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="summernote" name="description" id="" cols="30" rows="10">{{ $article->description }}</textarea>
                                
                                </div>

                                <div class="form-group">
                                    <select name="status" id="" class="form-control">
                                        <option {{ $article->status == 1 ? 'selected' : '' }} value="1">Active</option>
                                        <option {{ $article->status == 0 ? 'selected' : '' }} value="0">Inactive</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>


                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
