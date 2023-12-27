@extends('backend.layouts.master')

<style>
    .blog-box .blog-img img {
        width: 120px;
        height: 150px;
        cursor: pointer;
    }

    .full-img {
        width: 100%;
        height: 100vh;
        background: rgba(0, 0, 0, 0.9);
        position: fixed;
        top: 0;
        left: 0;
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 99999;
    }

    .full-img img {
        max-width: 1000px;
        height: 80vh;
    }

    .full-img span {
        position: absolute;
        top: 5%;
        right: 5%;
        font-size: 30px;
        color: white;
        cursor: pointer;

    }
</style>

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Image</h1>

        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Images</h4>
                            <div class="card-header-action">
                                <a href="{{ route('image.create') }}" class="btn btn-primary">Create New</a>
                            </div>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered table-striped table-hover">
                                <th>ID</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Action</th>

                                @foreach ($images as $image)
                                    <tr>
                                        <td>{{ $image->id }}</td>
                                        <td>{{ $image->title }}</td>
                                        <td>
                                            <div class="full-img" id="fullimgBox">
                                                <img src="{{ asset('storage/images/' . $image->image) }}" alt=""
                                                    id="fullimg">
                                                <span onclick="closeFullImg()">X</span>
                                            </div>

                                            <div class="blog-box">
                                                <div class="blog-img">
                                                    <img src="{{ asset('storage/images/' . $image->image) }}" alt=""
                                                        onclick="openFullImg(this.src)">
                                                </div>
                                            </div>
                                        </td>

                                        <td style="width:200px">

                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Videos"
                                                class="btn btn-light m-1 delete-item p-3"
                                                href="{{ route('image.destroy', $image->id) }}"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </td>

                                    </tr>
                                @endforeach

                            </table>

                            {{ $images->links() }}

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection


@push('scripts')
    <script>
        var fullimgBox = document.getElementById('fullimgBox');
        var fullimg = document.getElementById('fullimg');

        function openFullImg(pic) {
            fullimgBox.style.display = "flex";
            fullimg.src = pic;
        }


        function closeFullImg() {
            fullimgBox.style.display = "none";
        }
    </script>
@endpush
