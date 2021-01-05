@extends("layout.admin_layout")

@section("content")
    <div class="row">
        <div class="col-lg-12">
            <div class="text-right">
                <a class="btn btn-success" href="{{route("tag.create")}}">ایجاد تگ +</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>ایدی</th>
                    <th>عنوان تگ</th>
                    <th>اسلاگ</th>
                    <th>تاریخ</th>
                    <th colspan="2">عملیات</th>
                </tr>
                </thead>


                <tbody>


                @foreach($tags as $item)

                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->slug}}</td>
                        <td>{{$item->created_at}}</td>

                        <td>
                            <form action="{{route("tag.destroy",['tag'=>$item->id])}}" method="post">@csrf @method("delete")<input type="submit" value="حذف"  class="btn btn-danger confirmation" ></form>
                            <a class="btn btn-primary" href="{{route("tag.edit",['tag'=>$item->id])}}">ویرایش</a>

                        </td>

                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
