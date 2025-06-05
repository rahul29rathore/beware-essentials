<fieldset class="margin-top-30">
	<legend class="data-title">User Details</legend>
	<table class="table table-bordered">
		<tr>
			<th width="220" class="bg-lightgray">ID</th>
			<td>{{ $user->id }}</td>
		</tr>
		<tr>
			<th width="220" class="bg-lightgray">Name</th>
			<td>{{ $user->name }}</td>
		</tr>
		<tr>
			<th width="220" class="bg-lightgray">Email</th>
			<td>{{ $user->email ?? ''}}</td>
		</tr>
		<tr>
			<th width="220" class="bg-lightgray">Role</th>
			<td>{{ $user->is_admin == 1 ? 'Admin' : 'User' }}</td>
		</tr>
		<tr>
			<th width="220" class="bg-lightgray">Reg Date</th>
			<td>{{ $user->created_at->format('jS M Y') }}</td>
		</tr>
	</table>
</fieldset>
