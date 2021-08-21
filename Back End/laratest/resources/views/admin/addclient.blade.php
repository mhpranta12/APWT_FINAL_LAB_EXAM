    
    <link rel="stylesheet" href="{{asset('style.css')}}"/>

    <style>
        .bg
        {
            background-color:rgb(242, 242, 248);
			align:"center";
        } 
		.btn
        {
            background-color:rgb(206, 206, 252);
			align:"center";
			width:200px;
        } 
        </style>

<form method="POST" class="bg">
<h1> Add Client  </h1>
ID <br>
<input type="text" name="id"> </input><hr> <br>
Client's Name <br>
<input type="text" name="uname"> </input><hr> <br>
Email <br>
<input type="email"name="email"> </input><hr> <br>
Full Name <br>
<input type="text"name="name"> </input><hr> <br>
Account Type <hr> <br>
<select id="reportto" name="rt" style:width="100px">
                                            <option value=""> </option>
                                            <option value="Deposit"> Deposit</option>
                                            <option value="Savings">Savings</option>
                                           
                                        </select><hr> <br>
Password<br>
<input type="text"name="password" placeholder="Enter password"> </input><hr> <br>
Confirm Password<br>
<input type="text"name="cpassword"> </input><hr> <br>
<input type="submit" class="btn" value="Register" style:width="100px"> </input>
</form>
