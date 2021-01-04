@extends("layout.main_layout")

@section("content")
    <style>
        html #header.header-transparent{
            position: relative;
            background-color: #6c6b6b !important;

        }
    </style>
<div class="container" style="margin-top: 60px">
    <div class="container py-2">

    <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
        @foreach($categories as $item)
            <li style="cursor: pointer" class="nav-item" data-option-value=".{{$item->slug}}"><a class="nav-link text-1 text-uppercase" >{{str_replace("portfolio_category|","",$item->title)}}</a></li>

        @endforeach
        <li style="cursor: pointer" class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" >نمایش همه</a></li>
    </ul>

    </div>

    <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
        <div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">

            @foreach($categories as $item)
                @foreach($item->images as $images)
            <div class="col-md-6 col-lg-1-5 isotope-item m-0 p-0 {{$item->slug}}">
                <div class="portfolio-item m-0">
									<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0 m-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="/uploads/images/portfolio/{{$images->image}}" class="img-fluid border-radius-0" alt="{{$images->alt}}">


										</span>
									</span>

                </div>
            </div>
                @endforeach
            @endforeach


        </div>
    </div>

    </div>
@endsection
