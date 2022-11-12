@extends('layouts.master')

@section('title')

<title>Home page</title>

@endsection

@section('content')


    @include('home.components.slider')

	<section>

		<div class="container">
			<div class="row">

                @include('components.sidebar')

				<div class="col-sm-9 padding-right">

                    @include('home.components.feature_product')

					@include('home.components.category_tab')

                    @include('home.components.recommend_products')

				</div>
			</div>
		</div>
	</section>


@endsection


