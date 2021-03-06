@extends("layout.admin_layout")

@section("content")
    <div class="row">
        <div class="col-md-8">
            <form action="{{route("tag.update",['tag'=>$tag->id])}}" enctype="multipart/form-data" method="post">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="title">عنوان تگ</label>
                    <input type="text" name="title" value="{{$tag->title}}" class="form-control">

                </div>
                @error('title')
                <span class="alert alert-danger">{{ $message }}</span>
                @enderror
                <div class="form-group">
                    <label for="slug">اسلاگ</label>
                    <input id="slug" type="text" value="{{$tag->slug}}" name="slug" class="form-control">

                </div>
                @error('slug')
                <span class="alert alert-danger">{{ $message }}</span>
                @enderror
                <div class="form-group">
                    <label for="body">متن</label>
                    <textarea id="ckeditor" name="body"  class="form-control">{{$tag->body}}</textarea>
                </div>

                <div class="form-group">
                    <label for="meta_title">عنوان متا</label>
                    <input  type="text" value="{{$tag->meta_title}}" name="meta_title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="meta_description">توضیحات متا</label>
                    <textarea   name="meta_description" value="{{$tag->meta_description}}" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="meta_keywords">کلمات کلیدی</label>
                    <input  type="text" name="meta_keywords" value="{{$tag->meta_keywords}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="meta_keywords"> عکس</label>
                    <input  type="file" name="image" class="form-control">

                    <label for="alt_text">   متن جایگزین عکس  </label>
                    <input type="text" name="alt_text" value="{{$tag->alt_image}}" class="form-control">
                </div>

                <div class="form-group text-center">

                    <input type="submit"  class="btn btn-primary" value="ویرایش">
                </div>


            </form>




        </div>
    </div>




@endsection
@section("more_js")
    @include("admin.utilities.slug")
    @include("admin.utilities.ckeditor")
    <script>
        setTimeout(()=>{
            $(".alert").each(function (){
                $(this).remove();
            })
        },1500);
    </script>
@endsection
