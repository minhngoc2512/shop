@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Product </h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Product</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
</div>
<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-3">
					<ul class="aside-menu">
						@foreach($type as $t)
						<li><a href="{{route('typeproduct',$t->id)}}">{{$t->name}}</a></li>
						@endforeach
						
					</ul>
				</div>
				<div class="col-sm-9">
					<div class="beta-products-list">
						<h4>New Products</h4>
						
						<div class="beta-products-details">
							<p class="pull-left">1 products found</p>
							<div class="clearfix"></div>
						</div>

						<div class="row">
							@foreach($product_by_type as $product)
							<div class="col-sm-4">
								<div class="single-item">
									@if($product->promotion_price!=0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
									@endif
									<div class="single-item-header">
										<a href="{{route('detailproduct',$product->id)}}"><img src="source/image/product/{{$product->image}}" alt="" height="250px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$product->name}}</p>
										<p class="single-item-price" style="font-size: 18px">
										@if($product->promotion_price !=0)
											<span class="flash-del">${{number_format($product->unit_price)}}</span>
												<span class="flash-sale">${{number_format($product->promotion_price)}}</span>
										@else
										<span>${{number_format($product->unit_price)}}</span>
										@endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						@endforeach
						</div>
					</div> <!-- .beta-products-list -->

					<div class="space50">&nbsp;</div>

					<div class="beta-products-list">
						<h4>Other products</h4>
						<div class="beta-products-details">
							<p class="pull-left">{{count($other_product)}} products found</p>
							<div class="clearfix"></div>
						</div>
						<div class="row">
						@foreach($other_product as $other)
							<div class="col-sm-4">
								<div class="single-item">
									@if($other->promotion_price!=0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
									@endif
									<div class="single-item-header">
										<a href="product.html"><img src="source/image/product/{{$other->image}}" alt="" height="250px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$other->name}}</p>
										<p class="single-item-price" style="font-size: 18px">
										@if($other->promotion_price !=0)
											<span class="flash-del">${{number_format($other->unit_price)}}</span>
												<span class="flash-sale">${{number_format($other->promotion_price)}}</span>
										@else
										<span>${{number_format($other->unit_price)}}</span>
										@endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						@endforeach
						</div>
						<div class="row">{{$other_product->links()}}</div>
						<div class="space40">&nbsp;</div>
						
					</div> <!-- .beta-products-list -->
				</div>
			</div> <!-- end section with sidebar and main content -->


		</div> <!-- .main-content -->
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection