@extends('layouts.home')

@section('content')
<section>
	<div class="col-md-12 bodys">
		<div class="container">
			<div class="col-md-12 ts">
				<div class="col-md-3 col-md-offset-1 pull-left le">
					<p><span>老用户登录</span>/尊敬的卷皮用户,欢迎您回来</p>
				</div>
				<div class="col-md-2 pull-right ri">
					<ul>
						<li><a href="#" title="">还没账号?</a></li>
						<li><a href="zhuce.html" title="" style="color: #0289cd;">立即注册</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-4 pull-left lef col-md-offset-1">
					<form method="post" action="">
						<input type="text" name="" value="" placeholder="手机号">
						<input type="password" name="" value="" placeholder="密码">
						<input type="submit" name="" value="登录" class="li">
					</form>
				</div>
				<div class="col-md-4 pull-rig col-md-offset-2 rig">
					
							<div class="item">
								<img src="holder.js/100px300?text=衣服&bg=#edb">
							</div>
						
				</div>
			</div>
		</div>
	</div>
</section>
@endsection