@extends('admin.master')
@section('title','add product')
@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-12">
        <!-- small box -->
        <div class="box">
            

            <div class="box-body">
                <form role="form" method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body hung">
                        <h4>Biến thể</h4>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="price1">
                        </div>
                      
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ảnh </label>
                            <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="file1">
                        </div>
                        
                       @foreach($attr as $value)
                        <div class="form-group">
                            <label for="exampleInputEmail1">Thuộc tính {{$value->name}}</label>
                           
                            <select name="attr1[]" id="input" class="form-control" required="required">
                                @foreach($value->values as $data)
                                <option value="{{$data->id}}">{{$data->value}}</option>
                                @endforeach
                            </select>
                            
                        </div>
                       @endforeach
                    
                       <input type="hidden" name="dem" value="1">

                    </div>
                    <a href="#" class="btn btn-success demo">
                        <i class="fa fa-fw fa-plus"></i>
                    </a>
                   
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </form>
            </div>


        </div>
    </div>

    <!-- ./col -->
</div>
@endsection

@section('src')
    <script src="{{url('assets/admin')}}/ckeditor/ckeditor.js"></script>

    <script>
     CKEDITOR.replace( 'editor1' );
    </script>

    <script>
    function ChangeToSlug()
{
    var title, slug;
  
    //Lấy text từ thẻ input title 
    title = document.getElementById("name").value;
 
    //Đổi chữ hoa thành chữ thường
    slug = title.toLowerCase();
 
    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    document.getElementById('slug').value = slug;
}
    var dem = 1;
    $('.demo').click(function(){
    
        dem++;
        $('.hung').append(`
        <div class="form-group">
        <h4>Biến thể</h4>
                            <label for="exampleInputEmail1">Giá</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="price${dem}">
                        </div>
                      
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ảnh </label>
                            <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="file${dem}">
                        </div>
                        
                       @foreach($attr as $value)
                        <div class="form-group">
                            <label for="exampleInputEmail1">Thuộc tính {{$value->name}}</label>
                           
                            <select name="attr${dem}[]" id="input" class="form-control" required="required">
                                @foreach($value->values as $data)
                                <option value="{{$data->id}}">{{$data->value}}</option>
                                @endforeach
                            </select>
                            
                        </div>
                       @endforeach
                       <input type="hidden" name="dem" value="${dem}">
        `);
        console.log(dem);
    })
    </script>
@stop

