<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Selamat Datang</title>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
	<style>
		html, body {
			height: 100%;
			margin: 0;
			padding: 0;
		}
		body {
			min-height: 100vh;
			background: #fff url('https://cdn.pixabay.com/photo/2017/01/31/13/14/avatar-2026510_1280.png') no-repeat right bottom;
			background-size: 400px auto;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.welcome-container {
			background: rgba(255,255,255,0.95);
			border-radius: 24px;
			box-shadow: 0 8px 32px rgba(0,0,0,0.08);
			padding: 48px 32px 48px 48px;
			max-width: 480px;
			margin: 40px;
			text-align: left;
			z-index: 2;
		}
		.welcome-title {
			font-size: 2.5rem;
			font-weight: 700;
			color: #222;
			margin-bottom: 16px;
			font-family: 'Nunito', sans-serif;
		}
		.welcome-desc {
			font-size: 1.2rem;
			color: #555;
			margin-bottom: 24px;
		}
		.cartoon-img {
			display: none;
		}
		@media (max-width: 700px) {
			body {
				background-size: 220px auto;
			}
			.welcome-container {
				padding: 32px 16px 32px 16px;
				max-width: 95vw;
			}
		}
	</style>
</head>
<body>
	<div class="welcome-container">
		<div class="welcome-title">Selamat Datang!</div>
		<div class="welcome-desc">Ini adalah aplikasi UTS PPWL.<br>Semoga harimu menyenangkan!<br><br>
			<span style="font-size:1.5rem;">👋</span>
		</div>
		<div style="margin-top: 32px; text-align:center;">
			@if (Route::has('login'))
				@auth
					<a href="{{ url('/dashboard') }}" style="display:inline-block;padding:12px 32px;background:#f53003;color:#fff;border-radius:8px;font-weight:600;text-decoration:none;font-size:1.1rem;box-shadow:0 2px 8px #0001;transition:background .2s;">Dashboard</a>
				@else
					<a href="{{ route('login') }}" style="display:inline-block;padding:12px 32px;background:#222;color:#fff;border-radius:8px;font-weight:600;text-decoration:none;font-size:1.1rem;box-shadow:0 2px 8px #0001;transition:background .2s;margin-right:12px;">Login</a>
					@if (Route::has('register'))
						<a href="{{ route('register') }}" style="display:inline-block;padding:12px 32px;background:#f53003;color:#fff;border-radius:8px;font-weight:600;text-decoration:none;font-size:1.1rem;box-shadow:0 2px 8px #0001;transition:background .2s;">Register</a>
					@endif
				@endauth
			@endif
		</div>
	</div>
</body>
</html>
	</main>
	</div>

	@if (Route::has('login'))
		<div class="h-14.5 hidden lg:block"></div>
	@endif
	</body>
</html>
