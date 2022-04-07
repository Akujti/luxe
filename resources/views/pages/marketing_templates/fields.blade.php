@extends('layouts.app')
@section('css')
@endsection
@section('content')
<div class="container">
    <div class="row m-0 w-100 justify-content-center">
        <h3 class="text-center my-4 w-100">{{$template->title}}</h3>
        <form action="{{route('field.store',['marketingCategory'=>$template->category, 'template'=>$template])}}"
            class="form w-100" method="POST">
            @csrf
            <div class="form-group">
                <div class="row p-3">
                    <input type="text" name="name" placeholder="Name..." class="form-control col mr-1" required>
                    <select name="type" id="" class="form-control col ml-1" required>
                        <option value="">--- Field Type ---</option>
                        <option value="text">Text</option>
                        <option value="textarea">Textarea</option>
                        <option value="file">Image</option>
                    </select>
                    <button href="" class="btn btn-luxe col-2 ml-2" type="submit">Save</button>
                </div>
            </div>
        </form>

        @if($template->fields->count())
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Field Name</th>
                        <th scope="col">Field Type</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($template->fields as $field)
                    <form action="{{route('field.update',$field)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td><input type="text" value="{{$field->name}}" class="border-0" name="name"></td>
                            <td><select name="type" id="" class="border-0" required>
                                    <option value="">-</option>
                                    <option value="text" {{$field->type == 'text' ? 'selected':''}}>Text
                                    </option>
                                    <option value="file" {{$field->type == 'file' ? 'selected':''}}>Image
                                    </option>
                                    <option value="textarea" {{$field->type == 'textarea' ? 'selected':''}}>
                                        Textarea
                                    </option>
                                </select>
                            </td>
                            <td>
                                <div class="button-group d-flex">
                                    <button href="" class="btn btn-luxe mr-2" type="submit" style="height: 39px">Update
                                    </button>

                    </form>
                    <form action="{{route('field.delete',$field)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button href="" class="btn btn-danger" type="submit"
                            onclick="return confirm('Are you sure you want to delete this field?');">
                            Delete
                        </button>
        </div>
        </td>
        </tr>
        </form>
        @endforeach
        </tbody>
        </table>
    </div>
    @else
    <p>No fields found.</p>
    @endif
    <div class="row pl-3 w-100 justify-content-center my-4">
        <a href="{{route('marketing.template',['marketingCategory'=>$template->category, 'template'=>$template])}}"
            class="btn btn-luxe w-75 my-2">Open Template</a>
    </div>
</div>
</div>
@endsection