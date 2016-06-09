@extends('layouts.minton')

@section('content')

        <!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <li><a href="#">My Growth</a></li>
                <li class="active">Edit Article</li>
            </ol>
            <h4 class="page-title">Edit Article</h4>
        </div>
    </div>
</div>

<!-- Show Input Validation Errors Message-->
@if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        @foreach($errors->all() AS $error)
            {{$error." "}}
        @endforeach
    </div>
@endif

    <!-- Page Body -->
    <form class="form-horizontal" action="{{url('articles/edit')}}" method="POST">
        <div class="card-box">

            <p class="text-muted font-13 m-b-30">
                Fill Your Article Information Here
            </p>

            {{csrf_field()}}
            <input type="hidden" name="articleID" value="{{$article->id}}">
            <div class="form-group">
                <label for="folderName" class="col-sm-4 control-label">Article Name</label>
                <div class="col-sm-6">
                    <input type="text" id="articleName" name="articleName" class="form-control" value="{{old('articleName') ? old('articleName') : $article->title}}">
                </div>
            </div>
            <div class="form-group">
                <label for="folderName" class="col-sm-4 control-label">Category</label>
                <div class="col-sm-6">
                    <select class="form-control" id="articleCategory" name="articleCategory">
                        <option hidden selected>Please Select a Category</option>
                        @foreach($categories as $category)
                            @if($category->id == $article->category->id|| $category->id == old('articleCategory'))
                                <option value="{{$category->id}}" selected>{{$category->name}}</option>
                            @else
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="folderName" class="col-sm-4 control-label">Sub Category</label>
                <div class="col-sm-6">
                    <input type="text" id="articleSubCate" name="articleSubCate"
                           value="{{$article->sub_category}}" class="form-control">
                </div>
            </div>



        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">

                    <textarea id="article-editor" name="article-editor">{{$article->content}}</textarea>

                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <button class="btn btn-primary col-lg-2 col-lg-offset-5">Edit Article</button>
            </div>
        </div>
    </form>

    @stop

    @section('page-js')
            <!--form wysiwig-->
    <script src="{{asset('assets/plugins/tinymce/tinymce.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            if($("#article-editor").length > 0){
                tinymce.init({
                    selector: "textarea#article-editor",
                    theme: "modern",
                    height:300,
                    plugins: [
                        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                        'searchreplace wordcount visualblocks visualchars code fullscreen',
                        'insertdatetime media nonbreaking save table contextmenu directionality',
                        'emoticons template paste textcolor colorpicker textpattern imagetools'
                    ],
                    toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media | forecolor backcolor emoticons',
                    image_advtab: true,
                    templates: [
                        { title: 'Test template 1', content: 'Test 1' },
                        { title: 'Test template 2', content: 'Test 2' }
                    ],
                    content_css: [
                        '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
                        '//www.tinymce.com/css/codepen.min.css'
                    ]
                });
            }
        });
    </script>
    @stop