<link rel="stylesheet" href="{{asset('style.css')}}"/>
@include('headermngr.headernav')

        <center>
        <div class="container mt-5">
		<div class="d-flex justify-content-between mb-2">
	        <p><strong>Financial</strong></p><br> <hr> 
	        <a class="btn btn-primary" href="{{ url('manager/printfinancial?export=pdf') }}"> <input type="submit" class="btn-outline-success" value="Export to PDF" > <br> <hr>
</a>
	    </div> <br> <hr>   
        
        
        
        <table class="table table-bordered mb-5" border="2px">
	        <thead>
	            <tr>
	                <th scope="col">ID</th>
	                <th scope="col">Month</th>
	                <th scope="col">Profit</th>
	                <th scope="col">Loss</th>
                    <th scope="col">Ultimate Profit </th>
	            </tr>
	        </thead>
	        <tbody>
	            @foreach($financiallist as $row)
	            <tr>
	                <td>{{ $row->id }}</td>
	                <td>{{ $row->month }}</td>
	                <td>{{ $row->profit }}</td>
	                <td>{{ $row->loss }}</td>
                    <td>{{ $row->ultimate_profit }}</td>
                  
	            </tr>
	            @endforeach
	        </tbody>
	    </table> 
    </center>
	</div>