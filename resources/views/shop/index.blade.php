@extends('layouts.master')

@section('title')
	Ellen Store
@endsection


@section('content')

	<div class="image-title row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="card">
				<img class="card-img-top img-thumbnail" src="asset/images/anhquangcao/anhdepthoitrang.jpg" alt="Card image cap">
				<div class="card-body">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>							
							<li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
						</ol>
					</nav>						
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="gio-hang">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<h3 class="gio-hang-title">Giỏ hàng</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
				<!-- <div class="empty">
					<div class="empty-content">Bạn chưa mua sản phẩm nào</br>Tiếp tục mua hàng <a href="">tại đây</a>
					</div>
				</div> -->	
				<div class="gio-hang-content">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">	
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="gio-hang-info">
										<div class="table-responsive">
											<table class="table table-bordered">
												<thead>
													<tr>
														<th scope="col">#</th>
														<th scope="col">First</th>
														<th scope="col">Last</th>
														<th scope="col">Handle</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>Mark</td>
														<td>Otto</td>
														<td>@mdo</td>
													</tr>
													<tr>
														<th scope="row">2</th>
														<td>Jacob</td>
														<td>Thornton</td>
														<td>@fat</td>
													</tr>
													<tr>
														<th scope="row">3</th>
														<td colspan="2">Larry the Bird</td>
														<td>@twitter</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<h3 class="order-title">Thông tin người mua/nhận hàng</h3>
							<div class="contact-form">
								<form>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Tên người nhận">		
									</div>
									<div class="form-group">		
										<input type="text" class="form-control" placeholder="Số điện thoại">							
									</div>
									<div class="form-group">		
										<input type="text" class="form-control" placeholder="Địa chỉ nhận hàng">
									</div>
									<div class="form-group">		
										<textarea class="form-control" placeholder="Ghi chú"></textarea>
									</div>
									<div class="hinh-thuc-thanh-toan">		
										<label><span>(*)</span>Hình thức thanh toán:&nbsp;</label>
										<span>Thanh toán sau khi nhận hàng.</span>
									</div>

									<button type="submit" class="btn btn-block">Mua ngay</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
</div>
</div>

@endsection

