@extends('layouts.minton')

@section('content')

        <!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <li><a href="#">My Growth</a></li>
                <li class="active">Post Article</li>
            </ol>
            <h4 class="page-title">Post Article</h4>
        </div>
    </div>
</div>

<!-- Page Body -->
<form class="form-horizontal" action="{{url('post-article')}}" method="POST">
<div class="card-box">

    <p class="text-muted font-13 m-b-30">
        Fill Your Article Information Here
    </p>


        {{csrf_field()}}
        <div class="form-group">
            <label for="folderName" class="col-sm-4 control-label">Article Name</label>
            <div class="col-sm-6">
                <input type="text" id="articleName" name="articleName" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="folderName" class="col-sm-4 control-label">Category</label>
            <div class="col-sm-6">
                <select class="form-control" id="articleCategory" name="articleCategory">
                    <option value="PHP">PHP</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="Laravel">Laravel</option>
                    <option value="MySQL">MySQL</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="folderName" class="col-sm-4 control-label">Sub Category</label>
            <div class="col-sm-6">
                <input type="text" id="articleSubCate" name="articleSubCate" class="form-control">
            </div>
        </div>



</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">

                <textarea id="article-editor" name="article-editor"></textarea>

        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
            <button class="btn btn-primary col-lg-2 col-lg-offset-5">Post Article</button>
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
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ]
            });
        }
    });
</script>
@stop