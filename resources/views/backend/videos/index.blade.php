@extends('backend.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Category</h1>

        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Category</h4>
                            <div class="card-header-action">
                                <a href="{{ route('video.create') }}" class="btn btn-primary">Create New</a>
                            </div>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered table-striped table-hover">
                                <th>ID</th>
                                <th>Title</th>
                                <th>url</th>
                                <th>Status</th>
                                <th>Action</th>

                                @foreach ($videos as $video)
                                    <tr>
                                        <td>{{ $video->id }}</td>
                                        <td>{{ $video->title }}</td>
                                        <td>
                                            <div class="box">
                                                <iframe width="70%" height="200px" src="{{ $video->url }}"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    allowfullscreen></iframe>
                                            </div>

                                        </td>
                                       
                                            @if( $video->status == 1)
                                            <td><span class="badge badge-success">Active</span></td>
                                            @else
                                            <td><span class="badge badge-info">Inactive</span></td>
                                            @endif
                                        

                                        <td>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Videos"
                                                class="btn btn-info mr-3" href="{{ route('video.edit', $video->id) }}"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Videos"
                                                class="btn btn-light m-1 delete-item" href="{{ route('video.destroy', $video->id) }}"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </td>

                                    </tr>
                                @endforeach




                            </table>

                            {{ $videos->links() }}

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
