@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Add Clients</h1>

    <form action="{{ route('admin.clients.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Add Clients</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.clients.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <textarea name="address" class="form-control h_100" cols="30" rows="10">{{ old('address') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">URL</label>
                    <input type="text" name="url" class="form-control" value="{{ old('url') }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <select  class="form-control" name="status" id="">
                    @foreach($model->s as $k=>$v )
                        <option value="{{$k}}">{{$v}}</option>
                    @endforeach
                    </select>
                    <!-- <input type="text" name="url" class="form-control" value="{{ old('url') }}" autofocus> -->
                </div>
                <div class="form-group">
                    <label for="">Sort Order</label>
                    <input type="number" name="sort_order" class="form-control" value="{{ old('url') }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Client Logo *</label>
                    <div>
                        <input type="file" name="logo">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>

@endsection
