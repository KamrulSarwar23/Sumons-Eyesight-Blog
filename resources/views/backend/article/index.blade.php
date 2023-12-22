@extends('backend.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Article</h1>

        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Article</h4>
                            <div class="card-header-action">
                                <a href="{{ route('article.create') }}" class="btn btn-primary">Create New</a>
                            </div>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered table-striped table-hover">
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>

                                @foreach ($article as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>

                                        @if ($item->status == 1)
                                            <td><span class="badge badge-success">Active</span></td>
                                        @else
                                            <td><span class="badge badge-info">Inactive</span></td>
                                        @endif


                                        <td style="width:200px">
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Videos"
                                                class="btn btn-info mr-3" href="{{ route('article.edit', $item->id) }}"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Videos"
                                                class="btn btn-light m-1 delete-item"
                                                href="{{ route('article.destroy', $item->id) }}"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </td>

                                    </tr>
                                @endforeach




                            </table>

                            {{-- {{ $categories->links() }} --}}

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
