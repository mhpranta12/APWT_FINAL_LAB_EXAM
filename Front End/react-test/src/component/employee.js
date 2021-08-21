

   const Employee=({name,phn,username,password}) =>
    {
    const str ="ID";
    const text=str.fontcolor("green")

    return (
        <div className='division'>
            
        <p> <b> Name:  </b> {name}</p>
        <p><b> Phone No. :</b>  {phn} </p>
        <p> <b> User Name : </b> {username} </p>
        <p> <b>  Password : </b>  {password} </p>
        </div>
    )
    
    };


    
    export default Employee;