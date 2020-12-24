@section('content')
    @extends('admin.layouts.master')
@section('title', 'admin')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">@lang('messages.category.edit_category')</h3>
                    </div>
                    <form action="{{route('categories.update', $category->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">@lang('messages.category.category_name')</label>
                                <input type="text" class="form-control" id='category_name' name="category_name"
                                       placeholder="Enter category name" value="{{$category->category_name}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label id="category_custom" for="exampleInputEmail1">@lang('messages.category.parent_id')</label>
                            <select name="parent_id" id="parent_id" data-placeholder="Choose parent category" class="form-control select2">
                                <option data-value="{{$category->parent_id}}" label="Choose category">{{$category->parent_id}}</option>
                                @foreach($category_list as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">@lang('messages.category.submit')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
