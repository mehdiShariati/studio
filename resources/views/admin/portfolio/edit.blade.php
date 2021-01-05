@extends('layout.admin_layout')


@section("content")
    <div class="row">
        <div class="col-6 offset-3">
            @if(Session::has('success'))
                <p class="alert alert-info">{{ Session::get('success') }}</p>
            @endif
            <form action="{{route("portfolio.update",["image"=>$image->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                {{--<div class="form-group">--}}
                {{--<label for="couple_name">نام زوج</label>--}}
                {{--<input type="text" name="couple_name" class="form-control">--}}
                {{--</div>--}}
                <div class="form-group">
                    <label for="images">عکس ها</label>
                    <input type="file" name="image" multiple class="form-control">
                </div>
                <div class="form-group">
                    <img width="100px" height="100px" src="/uploads/images/portfolio/{{$image->image}}" alt="">
                    <label for="alt_image">متن جایگزین</label>
                    <input type="text" value="{{$image->alt}}" name="alt_image" multiple class="form-control">
                </div>
                {{--<div class="form-group">--}}
                {{--<label for="description">توضیحات </label>--}}
                {{--<textarea name="description" class="form-control" cols="30" rows="10"></textarea>--}}
                {{--</div>--}}
                <div class="form-group">
                    <label for="category_portfolio_id"> دسته بندی نمونه کار</label>
                    <select name="tag_id" class="form-control" >
                        @foreach($cats as $item)
                            <option {{($item->id == $image->tag[0]->id) ? ' selected="selected"' : ""}}>{{str_replace("portfolio_category|","",$item->title)}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="ویرایش" class="btn btn-primary">
                </div>

            </form>



        </div></div>


@endsection
