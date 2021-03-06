@extends('adminlte::page')
@section('title', 'update insurance')
@section('content')
@include('../_messages')
<div class="box box-success">
	<div class="box-header with-border">
		<h3 class="box-title">Insurance Details</h3>
		<div class="box-tools pull-right">
		</div><!-- /.box-tools -->
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<form class="form-horizontal" action="/addInsurance/{{$plate}}" method="POST">
		@csrf		
		<div class="box-body">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Licence Plate</label>

			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputEmail3" name="plate"  value="{{$plate}}" disabled>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Insurance Company</label>
			<div class="col-sm-10">
				<select class="form-control" name="company" required>
					<option value="madison insurance">MADISON INSURANCE</option>
					<option value="jubilee insurance">JUBILEE INSURANCE</option>
					<option value="cic insurance">CIC INSURANCE</option>
					<option value="next insurance">NEXT INSURANCE</option>
					<option value="alianz insurance ">ALLIANZ INSURANCE</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Insurance Type</label>
			<div class="col-sm-10">
				<select class="form-control" name="type" required>
					<option value="comprehensive">COMPREHENSIVE</option>
					<option value="third party">THIRD PARTY</option>
					<option value="theft and fire">THEFT AND FIRE</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Insurance Cost</label>

			<div class="col-sm-10">
				<input type="number" class="form-control" id="inputPassword3" name="cost" placeholder="2500"required>
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Purchase Date</label>

			<div class="col-sm-10">
				<input type="date" class="form-control" id="inputPassword3" name="renewal" required>
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Expiery Date</label>

			<div class="col-sm-10">
				<input type="date" class="form-control" id="inputPassword3" name="expiery" required>
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Comments</label>

			<div class="col-sm-10">
				<textarea type="text" class="form-control" id="inputPassword3" name="comments" required>
					
				</textarea> 
			</div>
		</div>
	</div>
	<!-- /.box-body -->
	<div class="box-footer">
		<button type="submit" class="btn btn-success pull-right">Submit</button>
	</div>
	<!-- /.box-footer -->
</form>
</div>
@endsection
