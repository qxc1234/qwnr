@extends('layouts.home')

@section('content')
<section>
	<div class="col-md-12 bodys">
		<div class="container">
			<div class="col-md-12 ts">
				<div class="col-md-3 col-md-offset-1 pull-left le">
					<p><span>新用户注册</span>/注册卷皮网赢积分换好礼</p>
				</div>
				<div class="col-md-2 pull-right ri">
					<ul>
						<li><a href="#" title="">已有账号,</a></li>
						<li><a href="denglu.html" title="" style="color: #0289cd;">立即登录</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-4 pull-left lef col-md-offset-1">
					<form method="post" action="/denglu">
						手机号码:<input type="text" name="phone" value=""><br>
						创建密码:<input type="password" name="password" value=""><br>
						确认密码:<input type="password" name="password2" value=""><br>
						验证码:<input type="text" name="vcode" value="" class="an"><button id="send" type="button">获取短信验证码</button><br>
						{{csrf_field()}}
						<input type="submit" name="" value="立即注册" class="li">
					</form>
				</div>
				<div class="col-md-4 pull-rig col-md-offset-2 rig">
					<ul class="list-unstyled">
						<li class="col-md-4">
							<div class="item">
								<img src="holder.js/100px100?text=衣服&bg=#edb">
							</div>
						</li>
						<li class="col-md-4">
							<div class="item">
								<img src="holder.js/100px100?text=衣服&bg=#edb">
							</div>
						</li>
						<li class="col-md-4">
							<div class="item">
								<img src="holder.js/100px100?text=衣服&bg=#edb">
							</div>
						</li>
					</ul>

					<ul class="list-unstyled">
						<li class="col-md-4">
							<div class="item">
								<img src="holder.js/100px100?text=衣服&bg=#edb">
							</div>
						</li>
						<li class="col-md-4">
							<div class="item">
								<img src="holder.js/100px100?text=衣服&bg=#edb">
							</div>
						</li>
						<li class="col-md-4">
							<div class="item">
								<img src="holder.js/100px100?text=衣服&bg=#edb">
							</div>
						</li>
					</ul>

					<ul class="list-unstyled">
						<li class="col-md-4">
							<div class="item">
								<img src="holder.js/100px100?text=衣服&bg=#edb">
							</div>
						</li>
						<li class="col-md-4">
							<div class="item">
								<img src="holder.js/100px100?text=衣服&bg=#edb">
							</div>
						</li>
						<li class="col-md-4">
							<div class="item">
								<img src="holder.js/100px100?text=衣服&bg=#edb">
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection


@section('js')
<script>
$('#send').click(function(){
	$.ajax({
		type:'get',
		data:{},
		url:'/message',
		success:function(data){
			console.log(data);
		}
	})
});
</script>
@stop