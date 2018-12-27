@extends('Home.HomePublic.public')


@section('container')
<link rel="stylesheet" type="text/css" href="/static/homes/comment/base.min.css">
<link rel="stylesheet" type="text/css" href="/static/homes/comment/index.min.css">
<link rel="stylesheet" type="text/css" href="/static/homes/comment/main.min.css">

<script type="text/javascript" src="/static/homes/comment/xmst.js"></script>
<script type="text/javascript" src="/static/homes/comment/base.min.js"></script>
<script type="text/javascript" src="/static/homes/comment/user.min.js"></script>
<script type="text/javascript" src="/static/homes/comment/index.min.js"></script>
<script type="text/javascript" src="/static/homes/comment/jquery.statData.min.js"></script>

{!! $data->goods_detail !!}

@endsection

@section('title','商品概述')