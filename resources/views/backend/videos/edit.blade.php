@extends('backend.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Videos</h1>

        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Videos</h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('video.update', $videos->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" value="{{ $videos->title }}">
                                </div>

                                <div class="form-group">
                                    <label>Url</label>
                                    <input type="text" class="form-control" name="url" value="{{ $videos->url }}">
                                </div>

                                <div class="form-group">
                                    <select name="status" id="" class="form-control">
                                        <option {{ $videos->status == 1 ? 'selected' : '' }} value="1">Active</option>
                                        <option {{ $videos->status == 0 ? 'selected' : '' }} value="0">Inactive</option>
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
