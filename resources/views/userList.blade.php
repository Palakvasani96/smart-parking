@extends('theme.default') @section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="{!! asset('js/userList.js') !!}" crossorigin="anonymous"></script>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">User List</div>
				<div class="card-body">
					<table class="table table-striped table-bordered" id="userDataTable" style="width:100%">
						<thead>
							<tr>
								<th>Id</th>
								<th>Name</th>
								<th>Email</th>
								<th>Is_admin</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody> </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="ajax-user-modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="userCrudModal"></h4> </div>
			<div class="modal-body">
				<form id="userUpdateForm" name="userForm" class="form-horizontal"> @csrf
					<input type="hidden" name="user_id" id="user_id">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-12">
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" required=""> </div>
					</div>
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-12">
							<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="" required=""> </div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Admin</label>
						<div class="col-sm-12">
							<select class="form-control" name="is_admin" id="is_admin">
								<option value="1" @if (old( 'active')==1 ) selected @endif>Yes</option>
								<option value="0" @if (old( 'active')==0 ) selected @endif>No</option>
							</select>
						</div>
					</div>
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary btn-save" value="create">Save changes </button>
					</div>
				</form>
			</div>
			<div class="modal-footer"> </div>
		</div>
    </div>
</div>
@endsection