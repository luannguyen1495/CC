@extends('admin.master')
@section('title','List category')
@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-12">
        <!-- small box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Bordered Table</h3>
            </div>

            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th style="width: 40px">Label</th>
                        </tr>
                        
                       @foreach ($category as $item)
                        <tr>
                            <td>4.</td>
                            <td>{{$item->name}}</td>
                            <td>
                                @if($item->status == 1)
                                    <small class="label pull-left bg-blue">Hiện</small>
                                @else 
                                    <small class="label pull-left bg-red">Ẩn</small>
                                @endif
                            </td>
                            <td><span class="badge bg-green">90%</span></td>
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