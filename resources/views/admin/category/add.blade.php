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
                <form role="form" method="POST">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="name">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">Status</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="status" id="input" value="0" >
                                    Ẩn
                                </label>
                                <label>
                                    <input type="radio" name="status" id="input" value="1" checked="checked">
                                    Hiện
                                </label>
                            </div>
                           
                        </div>

                        

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
@endsection