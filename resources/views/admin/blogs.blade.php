
<x-admin-master>

    @section('content')
    <div class="container">
        <div class="card  ml-5 mb-5 mt-5"  >
            <div class="card-header">Add blogs</div>
            <div class="card-body">

                @if (isset($blog))
                <form method="POST" action="{{ route("admin.blogs.update", $blog->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="col-lg-12">
                <label for="title" class="col-md-12 col-form-label">Add title</label>
                <input id="title" type="text" name="title" class="form-control @error("title") is-invalid @enderror" value="{{ old("title") ?? $blog->title }}" autocomplete="title">
                @error("title")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="content" class="col-md-12 col-form-label">Add content</label>
                <textarea  id="content" name="content" class="form-control @error("content") is-invalid @enderror">{{ old("content") ?? $blog->content }}</textarea>
                @error("content")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="img" class="col-md-12 col-form-label">Add img</label>
                <input id="img" type="file" name="img" class="form-control @error("img") is-invalid @enderror" value="{{ old("img") ?? $blog->img }}" autocomplete="img">
                @error("img")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
                 <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Update</button>
                </form>

                @else

                <form method="POST" action="{{ route("admin.blogs.store") }}" enctype="multipart/form-data">
                @csrf

                <div class="col-lg-12">
                <label for="title" class="col-md-12 col-form-label">Add title</label>
                <input id="title" type="text" name="title" class="form-control @error("title") is-invalid @enderror" value="{{ old("title") }}" autocomplete="title">
                @error("title")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="content" class="col-md-12 col-form-label">Add content</label>
                <textarea  id="content" name="content" class="form-control @error("content") is-invalid @enderror">{{ old("content")  }}</textarea>
                @error("content")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="col-lg-12">
                <label for="img" class="col-md-12 col-form-label">Add img</label>
                <input id="img" type="file" name="img" class="form-control @error("img") is-invalid @enderror" value="{{ old("img") }}" autocomplete="img">
                @error("img")
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
                 <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Add</button>
                </form>
                @endif
</div>
</div>
</div>


<div class="card ml-5">
    <div class="card-header">All Categories</div>
    <div class="card-body">
        <div class="datatable" style="overflow-x:auto;">
            <table class="table table-bordered table-hover overflow-auto" style="overflow: auto;" id="dataTable" width="100%" cellspacing="0">
                <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($blogs as $blog)
            <tr>
                <td>{{$blog->title}}</td>


                <td>
                    <a class="btn btn-datatable btn-icon btn-transparent-dark mr-2" href="{{ route('admin.blogs.edit', $blog->id) }}"><i data-feather="edit"></i></a>

                    <div class="modal fade" id="id{{$blog->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Blog</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">This will delete the selected blog and all the data associated with it!</div>
                                <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>

                                    <form method="POST" action="{{ route('admin.blogs.destroy', $blog->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button></div>
                                    </form>

                            </div>
                        </div>
                    </div>

                    <a href="" class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#id{{$blog->id}}"><i data-feather="trash-2"></i></a>



                </td>


            </tr>
            @endforeach


        </tbody>
    </table>
    </div>
</div>
</div>
</div>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace('content');
</script>
    @endsection

</x-admin-master>

