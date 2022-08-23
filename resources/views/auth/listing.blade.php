@extends('auth.default')
@section('content')

<div class="bg-white pt-3 pb-1"><div class="container"><p><a href="{{route('dashboard')}}">Trang chủ</a> / Quản lý tin</p></div></div>
<br>
<br>


<div class="p-3 listing text-center">
    <table>
        <tr>
            <th class="border px-1 py-0 border-2 ">id</th>
            <th class="border px-1 py-0 border-2 ">name</th>
            <th class="border px-1 py-0 border-2 ">title</th>
            {{-- <th class="border px-1 py-0 border-2 ">content</th> --}}
            <th class="border px-1 py-0 border-2 ">description</th>
            <th class="border px-1 py-0 border-2 ">category id</th>
        </tr>
@foreach ($new as $i)
    <tr id="{{$i->id}}">
        <td class="border px-1 py-0 border-2 ">{{$i->id}}</td>
        <td class="border px-1 py-0 border-2 ">{{$i->name}}</td>
        <td class="border px-1 py-0 border-2 "><span class="title">{{$i->title}}</span></td>
        {{-- <td class="border px-1 py-0 border-2  td-content"><span class="content">{{$i->content}}</span></td> --}}
        <td class="border px-1 py-0 border-2 ">{{$i->description}}</td>
        <td class="border px-1 py-0 border-2 ">{{$i->category_id}}</td>
        <td>

            <div class="dropdown">
                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  ...
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><button class="btn " onClick="deleteFunc({{$i->id}})"><img src="{{asset('imgs/trash-bin.png')}}" style="width: 30%;"> Xoá</button>
                  </li>
                  <li><a class="btn " href="{{route('tin-tuc-chi-tiet',$i->id)}}" ><img src="{{asset('imgs/eyes.png')}}" style="width: 30%;"> Xem</a></li>
                  <li><a class="btn "href="{{route('edit',$i->id)}}"><img src="{{asset('imgs/writing.png')}}" style="width: 30%;"> Sửa</a></li>
                </ul>
              </div>

        </td>
    </tr>
@endforeach
    </table>

</div>
<script type="text/javascript">
    $(document).ready( function () {
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    });

    function deleteFunc(id){
    if (confirm("Bạn có chắc muốn xoá tin này?") == true) {
    var id = id;
    // ajax
    $.ajax({
    type:"POST",
    url: "{{ url('/admin/delete') }}",
    data: { id: id },
    dataType: 'json',
    cache: false,
    success: function(){
        $('#'+id).remove();
        console.log(id);

    }
    });
    }
    }

    </script>

@stop
