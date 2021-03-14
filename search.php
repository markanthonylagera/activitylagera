<!DOCTYPE html>
<html>
<head>
	<title>Searching For Patients Record</title>
</head>
<body>
<table id="mytable" class="table table -hover">
	<thead>
		<tr>
			<th>Priority Number</th>
			<th>Fullname</th>
			<th>Age</th>
			<th>Male</th>
			<th>Female</th>
			<th>Status</th>
			<th>Contact</th>
		</tr>
	</thead>
<tbody>
    
    <c: forEach var="row" items ="${result.rows}">
       <tr>
       	<td hidden="true">${row.pid}</td>
       	<td><input type="checkbox" value=""></td>
       	<td><input type="text" id='<%= "priority_number" +cnt %>' value="${row.priority_number}" name="priority_number" class="form-control input-sm"></td>
       	<td><input type="text" id='<%= "fullname" +cnt %>' value="$row.fullname" name="fullname" class="form-control input-sm"></td>
       	<td><input type="text" id='<%= "age" +cnt %>' value="${row.age}" name="age" class="form-control input-sm"></td>
       	<td><input type="text" id='<%= "male" +cnt %>' value="${row.male}" name="male" class="form-control input-sm"></td>
       	<td><input type="text" id='<%= "status" +cnt %>' value="${row.status}" name="status" class="form-control input-sm"></td>
       	<td><input type="text" id='<%= "contact" +cnt %>' value="${row.contact}" name="contact" class="form-control input-sm"></td>
       </tr>
    
    </c:forEach>

</tbody>
	
</table>
</body>
</html>