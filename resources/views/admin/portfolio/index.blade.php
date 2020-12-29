@extends("layout.admin_layout")

@section("content")
    <div class="row">
        <div class="col-lg-12">
            <div class="text-right">
                <a class="btn btn-success" href="/admin/portfolio/createPortfolio">ایجاد نمونه کار +</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>ایدی</th>
                    <th>عکس</th>
                    <th>متن جایگزین</th>
                    <th>دسته بندی </th>
                    <th>تاریخ</th>
                    <th colspan="2">عملیات</th>
                </tr>
                </thead>


                <tbody>


                @foreach($images as $item)

                    <tr>
                        <td>{{$item->id}}</td>
                        <td><img class="img-responsive " style="width: 100px" src="/uploads/images/portfolio/{{$item->image}}"></td>
                        <td>{{$item->alt}}</td>
                        <td>{{$item->tag[0]->title}}</td>
                        <td>{{$item->created_at}}</td>

                        <td>
                            <form action="{{route("tag.destroy",['tag'=>$item->id])}}" method="post">@csrf @method("delete")<input type="submit" value="حذف"  class="btn btn-danger confirmation" ></form>
                        </td>

                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
