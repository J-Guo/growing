@extends('layouts.minton')

@section('content')

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <li><a href="#">My Growth</a></li>
                <li><a href="#">{{$article->category->name}}</a></li>
                <li class="active">{{$article->sub_category}}</li>
            </ol>
            <h4 class="page-title">PHP Tips</h4>
        </div>
    </div>
</div>

<!-- Page Body -->
<div class="row">

    <div class="col-lg-12">
        <div class="portlet">
            <div class="portlet-heading">
                <h3 class="portlet-title text-dark">
                    {{$article->title}}
                </h3>
                <div class="portlet-widgets">
                    <button class="btn btn-info waves-effect waves-light m-b-5"> <i class="fa fa-cloud m-r-5"></i> <span>Edit</span> </button>
                    <button class="btn btn-pink waves-effect waves-light m-b-5"> <i class="fa fa-remove m-l-5"></i> <span>Delete</span> </button>
                </div>
                <div class="clearfix"></div>
            </div>
            <div id="bg-primary" class="panel-collapse collapse in">
                <div class="portlet-body" id="article-content">
                   <!-- Display raw, unescaped output -->
                   {!! $article->content !!}
                </div>
            </div>
        </div>
    </div>

</div>


@stop