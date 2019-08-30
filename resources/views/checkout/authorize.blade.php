<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>
</head>

<body>
	<div class="flex-center position-ref full-height">
		<div class="content">
			<h1>Authorize Payment Integration</h1>
			<form class="" action="{{ url('/checkout') }}" method="post">
				{{ csrf_field() }}
				<h3>Credit Card Information</h3>
				<div class="form-group">
					<label for="cnumber">Card Number</label>
					<input type="text" class="form-control" id="cnumber" name="cnumber" placeholder="Enter Card Number" required>
				</div>
				<div class="form-group">
					<label for="card-expiry-month">Expiration Month</label> {{ Form::selectMonth(null, null, ['name' => 'card_expiry_month', 'class' => 'form-control', 'required']) }}
				</div>
				<div class="form-group">
					<label for="card-expiry-year">Expiration Year</label> {{ Form::selectYear(null, date('Y'), date('Y') + 10, null, ['name' => 'card_expiry_year', 'class' => 'form-control', 'required']) }}
				</div>
				<div class="form-group">
					<label for="ccode">Card Code</label>
					<input type="text" class="form-control" id="ccode" name="ccode" placeholder="Enter Card Code">
				</div>
				<div class="form-group">
					<label for="camount">Amount</label>
					<input type="text" class="form-control" id="camount" name="camount" placeholder="Enter Amount">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</body>
</html>