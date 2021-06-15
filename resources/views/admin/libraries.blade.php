
<x-admin-master>

    @section('content')
    <div class="container">
        <div class="card  ml-5 mb-5 mt-5"  >
            <div class="card-header">Add libraries</div>
            <div class="card-body">

                @if (isset($library))
<form method="POST" action="{{ route("admin.libraries.update", $library->id) }}" enctype="multipart/form-data">
@csrf
@method('PATCH')

<div class="col-lg-12">
<label for="title" class="col-md-12 col-form-label">Add title</label>
<input id="title" type="text" name="title" class="form-control @error("title") is-invalid @enderror" value="{{ old("title") ?? $library->title }}" autocomplete="title">
@error("title")
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>

<div class="col-lg-12">
<label for="author" class="col-md-12 col-form-label">Add author</label>
<input id="author" type="text" name="author" class="form-control @error("author") is-invalid @enderror" value="{{ old("author") ?? $library->author }}" autocomplete="author">
@error("author")
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>

<div class="col-lg-12">
<label for="description" class="col-md-12 col-form-label">Add description</label>
<textarea  id="description" name="description" class="form-control @error("description") is-invalid @enderror">{{ old("description") ?? $library->description }}</textarea>
@error("description")
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>

<div class="col-lg-12">
<label for="img" class="col-md-12 col-form-label">Add img</label>
<input id="img" type="file" name="img" class="form-control @error("img") is-invalid @enderror" value="{{ old("img") ?? $library->img }}" autocomplete="img">
@error("img")
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>

<div class="col-lg-12">
<label for="link" class="col-md-12 col-form-label">Add link</label>
<input id="link" type="text" name="link" class="form-control @error("link") is-invalid @enderror" value="{{ old("link") ?? $library->link }}" autocomplete="link">
@error("link")
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>

<div class="col-lg-12">
<label for="file" class="col-md-12 col-form-label">Add file</label>
<input id="file" type="file" name="file" class="form-control @error("file") is-invalid @enderror" value="{{ old("file") ?? $library->file }}" autocomplete="file">
@error("file")
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
 <div class="form-group mt-3">
<button type="submit" class="btn btn-primary">Update</button>
</form>

@else

<form method="POST" action="{{ route("admin.libraries.store") }}" enctype="multipart/form-data">
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
<label for="author" class="col-md-12 col-form-label">Add author</label>
<input id="author" type="text" name="author" class="form-control @error("author") is-invalid @enderror" value="{{ old("author") }}" autocomplete="author">
@error("author")
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>

<div class="col-lg-12">
<label for="description" class="col-md-12 col-form-label">Add description</label>
<textarea  id="description" name="description" class="form-control @error("description") is-invalid @enderror">{{ old("description")}}</textarea>
@error("description")
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

<div class="col-lg-12">
<label for="link" class="col-md-12 col-form-label">Add link</label>
<input id="link" type="text" name="link" class="form-control @error("link") is-invalid @enderror" value="{{ old("link") }}" autocomplete="link">
@error("link")
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>

<div class="col-lg-12">
<label for="file" class="col-md-12 col-form-label">Add file</label>
<input id="file" type="file" name="file" class="form-control @error("file") is-invalid @enderror" value="{{ old("file") }}" autocomplete="file">
@error("file")
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
                <th>Title</th>
                <th>Author</th>
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
            @foreach ($libraries as $library)
            <tr>
                <td>{{$library->title}}</td>

                <td>{{$library->author}}</td>



                <td>
                    <a class="btn btn-datatable btn-icon btn-transparent-dark mr-2" href="{{ route('admin.libraries.edit', $library->id) }}"><i data-feather="edit"></i></a>

                    <div class="modal fade" id="id{{$library->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Library</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">This will delete the selected library and all the data associated with it!</div>
                                <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>

                                    <form method="POST" action="{{ route('admin.libraries.destroy', $library->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button></div>
                                    </form>

                            </div>
                        </div>
                    </div>

                    <a href="" class="btn btn-datatable btn-icon btn-transparent-dark" data-toggle="modal" data-target="#id{{$library->id}}"><i data-feather="trash-2"></i></a>



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
CKEDITOR.replace('description');
</script>
    @endsection

</x-admin-master>

