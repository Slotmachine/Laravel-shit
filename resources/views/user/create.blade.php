@extends('user.master')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 style="margin-top: 40px; margin-bottom: 50px; font-size: 50px; text-align: center;">กรอกข้อมูลไซส์เสื้อ</h1>
			<form method="post" action="{{route('store-user')}}">
				{{csrf_field()}}
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">

								<div class="row">
									<div class="col-md-6">
										ชื่อ :
										<input type="text" name="firstname" class="form-control" placeholder="ชื่อ" required="required">
									</div>
									<div class="col-md-6">
										นามสกุล :
										<input type="text" name="lasname" class="form-control" placeholder="นามสกุล" required="required">
									</div>

								</div>
							</div>
							<div class="form-group">
								ขนาดความกว้างของไหล่ :
								<input type="text" name="shoulder_width" class="form-control" placeholder="ขนาดความกว้างของไหล่ (นิ้ว)" required="required">
							</div>
							<div class="form-group">
								ขนาดความยาวของเสื้อ :
								<input type="text" name="shirts_long" class="form-control" placeholder="ขนาดความยาวของเสื้อ จากท้ายทอย/ต้นคอจนถึงตะโพก (นิ้ว) :" required="required">
							</div>
							<div class="form-group">
								ขนาดรอบอก​​ :
								<input type="text" name="chest_size" class="form-control" placeholder="ขนาดรอบอก​ (นิ้ว)​ " required="required">
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="sel1">คุณอยู่สีอะไร :</label>
											<select class="form-control" id="sel1" name="team">
												<option value="0">สีขาว</option>
												<option value="1">สีฟ้า</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="sel1">ไซส์ :</label>
											<select class="form-control" id="sel1" name="size">
												<option>S</option>
												<option>M</option>
												<option>L</option>
												<option>XL</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								ข้อเสนอแนะอื่นๆ เพิ่มเติม​ :
								<input type="text" name="comment" class="form-control" value="ไม่มี">
							</div>
							<div class="form-group">
								เบอร์โทรศัพท์ :
								<input type="text" name="phone" class="form-control" placeholder="กรุณากรอก เบอ์โทรศัพท์ เช่น 08xxxxxxxx" required="required">
							</div>
							<div class="form-group">
								E-mail​ :
								<input type="email" name="email" class="form-control" placeholder="กรุณากรอก E-mail เช่น example@cmu.ac.th" required="required">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<div class="container">
									<div class="jumbotron">
										ท่านสามารถเข้าร่วมเดินขบวนพาเหรดของคณะ <br>
										ในพิธีเปิดการแข่งขันกีฬาบุคลากร <br>
										วันเสาร์ที่ 22 ธันวาคม 2561 เวลา 06.00 น. เป็นต้นไป <br>
										ณ สนามกีฬากลาง มหาวิทยาลัยเชียงใหม่ หรือไม่
										<br><br>
										<div class="form-check-inline">
											<label class="form-check-label" for="radio1">
												<input type="radio" class="form-check-input" id="0" name="join_activity" value="1" checked>
												<b>สามารถเข้าร่วมเดินขบวนพาเหรดได้</b>
											</label>
										</div>
										<div class="form-check-inline">
											<label class="form-check-label" for="radio2">
												<input type="radio" class="form-check-input" id="1" name="join_activity" value="0">ไม่สามารถเข้าร่วมพิธีฯ ได้
											</label>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="container">
									<div class="jumbotron" style="margin-top: 40px;">
										ท่านสามารถเข้าร่วมพิธีมอบรางวัลนักกีฬา <br>
										ในวันเสาร์ที่ 22 ธันวาคม 2561 เวลา 17.00 น. เป็นต้นไป <br>
										ณ ลานน้ำพุหน้าหอประชุมมหาวิทยาลัยเชียงใหม่<br>
										<br><br>
										<div class="form-check-inline">
											<label class="form-check-label" for="radio3">
												<input type="radio" class="form-check-input" id="0" name="join_activityed" value="1" checked>
												<b>สามารถเข้าร่วมเดินขบวนพาเหรดได้</b>
											</label>
										</div>
										<div class="form-check-inline">
											<label class="form-check-label" for="radio4">
												<input type="radio" class="form-check-input" id="1" name="join_activityed" value="0">ไม่สามารถเข้าร่วมพิธีฯ ได้
											</label>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>


				<div class="form-group text-center">
					<button type="submit" class="btn btn-success" style="margin-right: 30px;">บันทึกข้อมูล</button>
					<a href="/" class="btn btn-primary">ย้อนกลับ</a>
				</div>

			</form>
		</div>
	</div>
</div>

@endsection