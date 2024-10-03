              

@extends('dashbraod.layouts.parent')
@section('content')
<br>
<br>
<br>
<div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="card-header">
    <h4>foodsystem
        <br>
        <br> 
    <a href="{{route('dashbraod.info0.create')}}"  class="btn btn-primary float-end">foodsystem</a>
    </h4>
    </div>
    <div class="card-body">

  

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Posts URL</th>
                <th>Posts Title</th>
                <th>Posts Img</th>
                <th>Posts Content</th>
                <th>URL</th>

                <tbody>
@foreach ($info0 as $item )
    
<tr>
<td> {{$item->id}}  </td>
<td> {{$item->title}}  </td>
<td> {{$item->posts_uRL}}  </td>
<td> {{$item->posts_title}}  </td>
<td>  
    @if(isset($info->posts_img))
           <img src="{{asset('topicImages/'.$info->posts_img)}}"  width="90" height="90" />
    @else
           <img src="{{asset('assets/img/noimg.jpg')}}"  width="90" height="90" />
    @endif

   

</td>
<td> {{$item->posts_Content}}  </td>
<td> {{$item->uRL}}  </td>

<td>
<a href="{{ route('dashbraod.info0.edit', $item->id) }}"  class="btn btn-success mx-2" >Edite</a>
<a href="{{ route('dashbraod.info0.destroy', $item->id) }}"  class="btn btn-danger mx-1" >Delete</a>

</td>


</tr>




@endforeach



                </tbody>
            </tr>
        </thead>
    
    </div>
    
    </div>
    </div>
    </div>
    
    
    

