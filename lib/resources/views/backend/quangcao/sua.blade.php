@extends('backend.master')
@section('title','Danh sách slide Quảng cáo');
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <form action="{{ url('admin/sua/'.$data1->sli_id) }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="" />
        <div class="row">
        <div class="col-lg-12 ">
        <div class="panel panel-green">
            <div class="panel-heading" style="height:60px;">
              <h3 >
                <a href="" style="color:blue;"><i class="fa fa-product-hunt" style="color:blue;">Quảng cáo</i></a>
                /Sửa
              </h3>
            <div class="navbar-right" style="margin-right:10px;margin-top:-50px;">
                <button type="submit" class="btn btn-primary">Lưu</button>
                <a href="" ><i class="btn btn-default" >Hủy</i></a>
            </div>
            </div>
            <div class="panel-body">
        <div class="col-lg-7">
        <div class="col-lg-12">
            <div class="form-group">
                <div class="form-group">
                <span>Nhập tiêu đề:</span>
               <input type="text" name="title" value="{{$data1->sli_title}}" >
            </div> 
            <div class="form-group">
                <span>Nhập nội dung Slide:</span>
               <input type="text" name="content" value="{{$data1->sli_content}}">
            </div>
                <label for="input" >Trạng thái</label>
                
                <div class="input-group">
                    <div class="radio">
                        @if ($data1->sli_status == 1)
                            <label>
                                <input type="radio" name="txtNName" id="input" value="1" checked="checked">
                                Hiện
                                <br>
                                <input type="radio" name="txtNName" id="input" value="0" >
                                Ẩn
                            </label>
                       @else
                            <label>
                                <input type="radio" name="txtNName" id="input" value="1" >
                                Hiện
                                <br>
                                <input type="radio" name="txtNName" id="input" value="0" checked="checked">
                                Ẩn
                            </label>
                        @endif
                    </div>
                </div>
                <div>
                    
                </div> 
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label>Ảnh</label>
                <br>
                <img src="{!! asset('lib/storage/app/avatar/'.$data1->sli_img) !!}" class="img-responsive img-rounded" alt="Image" style="width: 150px; height: 200px;">
                <br>
                <input type="file" name="fImage">
                <div>
                    
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>
    {{ csrf_field() }}
</form>
@stop