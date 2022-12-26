@extends('admin.master')
@section('title','List category')
@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-6">
        <!-- small box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Danh sách thuộc tính</h3>
            </div>

            <div class="box-body">
            <form role="form" action="{{route('attr.store')}}" method="POST">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Tên Thuộc tính</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kiểu giá trị </label>
                            <select class="form-control" name="type">
                                <option value="1">Text</option>
                                <option value="2">Number</option>
                                <option value="3">Color</option>
                               
                            </select>
                            </div>
                        <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

            
        </div>
    </div>
    <div class="col-lg-6">
        <!-- small box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Thêm mới thuộc tính</h3>
            </div>

            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name</th>
                            <th>Value</th>
                            <th style="width: 40px">Label</th>
                        </tr>
                        @foreach ($attr as $item)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$item->name}}</td>
                            
                            <td>
                                @foreach($item->values as $data)
                                    @if($item->type == 3)
                                    <span style="background: {{$data->value}}">1</span>
                                    @else
                                    <span>{{$data->value}}</span>
                                    @endif
                                @endforeach
                            </td>
                        <td><a href="{{route('attr.show',$item->id)}}" ><i class="fa fa-fw fa-plus"></i></a></td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>

            <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ./col -->
</div>
@endsection