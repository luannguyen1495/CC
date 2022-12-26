@extends('admin.master')
@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-12">
        <!-- small box -->
        <div class="box">
            <div class="box-header with-border">
            <h3 class="box-title">Thêm biến thể của thuộc tính {{$attr->name}}</h3>
            </div>

            <div class="box-body">
            <form role="form" method="POST" action="{{route('attr.addValue')}}">
            <input type="hidden" name="id" value="{{$attr->id}}">
                    @csrf
                    <div class="box-body">
                        <div class="hung" >
                        <div class="form-group">
                            <label for="exampleInputEmail1">Value</label>
                            @if($type == 1)
                            
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="name[]">
                            @elseif($type==2)
                            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="name[]">
                            @else
                            <input type="color" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="name[]">
                            @endif
                        </div>
                        </div>
                        <button class="add-input btn btn-success" type="button"><i class="fa fa-fw fa-plus"></i></button>

                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>


        </div>
    </div>

    <!-- ./col -->
</div>

@section('src')
<script>
    $('.add-input').click(function (){
      $('.hung').append(`<div class="form-group">
                            <label for="exampleInputEmail1">Value</label>
                            @if($type == 1)
                            
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="name[]">
                            @elseif($type==2)
                            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="name[]">
                            @else
                            <input type="color" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="name[]">
                            @endif
                        </div>
                        </div>`)
   })
</script>
  
@endsection

@stop

