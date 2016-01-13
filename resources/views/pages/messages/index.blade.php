@extends('index')

@section('content')
<h1 class="text-center">
    {{ isset($pagetitle) ? $pagetitle : 'Гостевая книга2' }}
</h1>

@include('_common._form')
<div class="text-right"><b>Всего сообщений: </b><i class="badge">0</i></div>
<div class="messages">
   <div class="panel panel-default">
       <div class="panel-heading">
           <h3 class="panel-title">
               <span>Карлосон</span>
               <span class="pull-right label label-info">21:47:00 / 12.01.2016</span>
           </h3>
       </div>
       <div class="panel-body">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda cupiditate deleniti et
           excepturi, natus numquam obcaecati porro quas. Aspernatur consequuntur et molestiae, nostrum
           quibusdam sapiente temporibus vitae? Beatae, dignissimos, eaque!
           <hr />
           <div class="pull-right">
               <a href="#" class="btn btn-info">
                   <i class="glyphicon glyphicon-pencil"></i>
               </a>
               <button class="btn btn-danger">
                   <i class="glyphicon glyphicon-trash"></i>
               </button>
           </div>
       </div>
   </div>
</div>
@stop