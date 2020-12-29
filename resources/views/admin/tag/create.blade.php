@extends("layout.admin_layout")

@section("content")
    <div class="row">
        <div class="col-md-8">
            <form action="{{route("tag.store")}}" enctype="multipart/form-data" method="post">
                @csrf

                <div class="form-group">
                    <label for="title">عنوان تگ</label>
                    <input type="text" name="title" class="form-control">

                </div>
                @error('title')
                <span class="alert alert-danger">{{ $message }}</span>
                @enderror
                <div class="form-group">
                    <label for="slug">اسلاگ</label>
                    <input id="slug" type="text" name="slug" class="form-control">

                </div>
                @error('slug')
                <span class="alert alert-danger">{{ $message }}</span>
                @enderror
                <div class="form-group">
                    <label for="body">متن</label>
                    <textarea id="ckeditor" name="body" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="meta_title">عنوان متا</label>
                    <input  type="text" name="meta_title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="meta_description">توضیحات متا</label>
                    <textarea   name="meta_description" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="meta_keywords">کلمات کلیدی</label>
                    <input  type="text" name="meta_keywords" class="form-control">
                </div>
                <div class="form-group">
                    <label for="meta_keywords"> عکس</label>
                    <input  type="file" name="image" class="form-control">

                    <label for="alt_text">   متن جایگزین عکس  </label>
                    <input type="text" name="alt_text" class="form-control">
                </div>

                <div class="form-group text-center">

                    <input type="submit"  class="btn btn-success" value="ثبت">
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
