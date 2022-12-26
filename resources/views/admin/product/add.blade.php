@extends('admin.master')
@section('title','add product')
@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-12">
        <!-- small box -->
        <div class="box">
            

            <div class="box-body">
                <form role="form" method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter email" name="name" onkeyup="ChangeToSlug()">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Đường dẫn chuẩn seo</label>
                            <input type="text" class="form-control" id="slug" placeholder="Enter email" name="slug">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="price">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá Khuyến mãi</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="sale_price">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ảnh đại diện</label>
                            <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="file">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ảnh Mo ta</label>
                            <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="files[]" multiple  >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            
                            <select name="category_id" id="input" class="form-control" required="required">
                                @foreach($category as $cate)
                                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                                @endforeach
                            </select>
                            
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
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả sản phẩm</label>
                            
                            <textarea name="description" id="editor1" rows="10" cols="80">
                                This is my textarea to be replaced with CKEditor 4.
                            </textarea>

                            
                        </div>
                        

                    </div>

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
    </script>
@stop

