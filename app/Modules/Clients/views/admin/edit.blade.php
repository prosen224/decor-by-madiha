@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Client</h1>

    <form action="{{ url('admin/clients/update/'.$model->id) }}" method="post" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="current_photo" value="{{ @$model->logo }}">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Edit Client</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.clients.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $model->name }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <textarea name="address" class="form-control h_100" cols="30" rows="10">{{ $model->address }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">URL</label>
                    <input type="text" name="url" class="form-control" value="{{ $model->url}}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" class="form-control" id="">
                    @foreach($model->s as $k=>$v )
                        <option value="{{$k}}"  <?=($model->status == $k) ? "selected" : "";?>>{{$v}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Sort Order</label>
                    <input type="number" name="sort_order" class="form-control" value="{{$model->sort_order }}" autofocus>
                    <!-- <input type="text" name="url" class="form-control" value="{{ old('url') }}" autofocus> -->
                </div>
                <div class="form-group">
                    <label for="">Existing Logo</label>
                    <div>
                        <img src="{{ asset('public/uploads/'.@$model->logo) }}" alt="" class="w_200">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Client Logo *</label>
                    <div>
                        <input type="file" name="logo">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>

@endsection
