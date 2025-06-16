@extends('emails.templates.template-frame')
@section('content')
<table cellpadding="0" cellspacing="0" width="90%" style="background:#fff;border-radius:10px;border-color:#d8d8d8;">
	<tr>
		<td style="padding:0 15px;">
			<p style="margin:0;padding:0;background:url(img/order.png);background-size:cover;">Dear Team,<br><br> <strong>{{ $data['name'] ?? '' }}</strong> wants to contact us via <strong>{{ env('APP_NAME') }}</strong>. Please check the following details.</p>
			
			<p style="font-size:14px;font-weight:600;margin-bottom:20px;"><u>Contact Information</u></p>
			<table cellpadding="0" border="1" cellspacing="0" width="100%" style="border-collapse:collapse;border-color:#d8d8d8;margin-bottom:15px;">
				<tr>
					<th width="150" align="left" style="padding:5px 15px;background: #e1f6d6;">Name</th>
					<td style="padding:5px 15px">{{ $data['name'] ?? ''}}</td>
				</tr>
				<tr>
					<th width="150" align="left" style="padding:5px 15px;background: #e1f6d6;">Email</th>
					<td style="padding:5px 15px">{{ $data['email'] ?? ''}}</td>
				</tr>
				<tr>
					<th width="150" align="left" style="padding:5px 15px;background: #e1f6d6;">Contact No.</th>
					<td style="padding:5px 15px">{{ $data['contact_no'] }}</td>
				</tr>
                <tr>
					<th width="150" align="left" style="padding:5px 15px;background: #e1f6d6;">Customer Type</th>
					<td style="padding:5px 15px">{{ $data['customer_type'] ?? '' }}</td>
				</tr>
				<tr>
					<th width="150" align="left" style="padding:5px 15px;background: #e1f6d6;">Subject</th>
					<td style="padding:5px 15px">{{ $data['subject'] ?? '' }}</td>
				</tr>
			</table>
			@if(!empty($data['message']))
			<p style="margin:0;font-size:14px;font-weight:600;margin-bottom:8px;"><u>Message</u></p>
			<p style="margin:0;font-size:13px;font-weight:400;margin-bottom:20px;">{!! nl2br($data['message'] ?? '') !!}</p>
			@endif
		</td>
	</tr>
</table>

@endsection





