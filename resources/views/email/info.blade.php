<h1>New request #{{$contacts->id}}</h1>
Date of creation: {{$contacts->created_at}}
<hr>

<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Company name</th>
			<th>Phone</th>
			<th>Request</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>{{$contacts->id}}</td>
			<td>{{$contacts->name}}</td>
			<td>{{$contacts->company}}</td>
			<td>{{$contacts->phone}}</td>
			<td>{{$contacts->request}}</td>
		</tr>
	</tbody>
</table>
