$(document).ready(function ()
{
	$.ajaxSetup(
	{
		headers:
		{
			'X-CSRF-Token': $("input[name=_token]").val()
		}
	});
	$(function ()
	{
		var dataTable = $('#userDataTable').DataTable(
		{
			processing: true,
			serverSide: true,
			ajax:
			{
				url: "userList",
				type: 'GET',
			},
			columns: [
			{
				data: 'id',
				name: 'id'
			},
			{
				data: 'name',
				name: 'name'
			},
			{
				data: 'email',
				name: 'email'
			},
			{
				data: 'is_admin',
				name: 'is_admin'
			},
			{
				data: 'action',
				name: 'action',
				orderable: true,
				searchable: true,
			}, ]
		});
	});
	$('#userDataTable').on('click', '.edit', function ()
	{
		var user_id = $(this).data('id');
		$.get('/userList/edit/' + user_id, function (data)
		{
			$('#userCrudModal').html("Edit User");
			$('#btn-save').val("edit-user");
			$('#ajax-user-modal').modal('show');
			$('#user_id').val(data.id);
			$('#name').val(data.name);
			$('#email').val(data.email);
			$('#is_admin').val(data.is_admin);
		})
	});
	$('#userDataTable').on('click', '.delete', function ()
	{
		var user_id = $(this).data("id");
		if (confirm("Are You sure want to delete !"))
		{
			$.ajax(
			{
				type: "get",
				url: "/userList/delete/" + user_id,
				success: function (data)
				{
					var oTable = $('#userDataTable').dataTable();
					oTable.fnDraw(false);
				},
				error: function (data)
				{
					console.log('Error:', data);
				}
			});
		}
	});
	$('#userUpdateForm').submit(function ()
	{
		var formData = $(this).serialize();
		var url = 'userList/store';
		console.log(formData);
		console.log(url);
		var actionType = $('#btn-save').val();
		$('.btn-save').html('Sending..');
		$.ajax(
		{
			url: url,
			type: "POST",
			data: formData,
			dataType: "json",
			success: function (data)
			{
				$('#userUpdateForm').trigger("reset");
				$('#ajax-user-modal').modal('hide');
				$('.btn-save').html('Save Changes');
				location.reload();
			},
			error: function (jqXHR, exception, data)
			{
				var msg = '';
				if (jqXHR.status === 0)
				{
					msg = 'Not connect.\n Verify Network.';
				}
				else if (jqXHR.status == 404)
				{
					msg = 'Requested page not found. [404]';
				}
				else if (jqXHR.status == 500)
				{
					msg = 'Internal Server Error [500].';
				}
				else if (exception === 'parsererror')
				{
					msg = 'Requested JSON parse failed.';
				}
				else if (exception === 'timeout')
				{
					msg = 'Time out error.';
				}
				else if (exception === 'abort')
				{
					msg = 'Ajax request aborted.';
				}
				else
				{
					msg = 'Uncaught Error.\n' + jqXHR.responseText;
				}
                $('#btn-save').html('Save Changes');
			}
		});
	});
});