import UserList from './userlist';
import NavBar from './navBar';

   const User=({name,id,dept,b}) =>
    {
    return (
        <div className='division'>

        <h3> Name: {name}</h3>
        <p> ID: {id}</p>
        <p> Dept: {dept} </p>
        <button onClick={()=>b(id)}>Delete</button>
        <button onClick={()=>this.fake(id)}> See</button>

        </div>
    )
    
    };

    const fake=(txt)=>
    {
           console.log(txt);
    }

    
    export default User;