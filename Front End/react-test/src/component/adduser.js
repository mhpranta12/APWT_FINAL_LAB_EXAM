import User from './user';
import {useState} from 'react';
import UserList from './userlist';
import axios from 'axios';
import NavBar from './navBar';
import {useHistory} from 'react-router-dom';
import '../my.css';
const AddUser = ({b})=>

{
    <NavBar status="ADD" />
    const [user,setUser]=useState(

      {name:"",
      uname:"",
      password:"",
      phone:""
      }
    )
    
    const OnInputChnage=e=>
    {

      console.log(e.target.value);
      setUser({...user,[e.target.name]: e.target.value});

      //this.setUser({...user,[e.target.name]: e.target.value});
    }

    
    ;
    return(
     
  
       <>
    
    <h1> Add Employee  </h1> 
    <hr></hr>
    <form   
    
    onSubmit={(e)=>
    {
      e.preventDefault();
      //console.log("Name is : "+user.name);
      axios.post('http://localhost:8000/api/employee',user)
      .then(response=> 
        {
          console.log("Succesfully respond")
          alert("Employee Added !");
        })
        .catch(
          error=>
          {
            console.log(error.response)
          }
        )
    }
  }

    >



   <label>
    Name   
    <br></br>
    <input type="text" name="name" value={user.name} onChange={OnInputChnage}></input>
    </label>
     <br></br>
    <br></br>
    Phone  
     <br></br> 
    <input type="text" name="phone" value={user.phone} onChange={OnInputChnage} ></input>
    <br></br>
    User Name    
     <br></br> 
    <input type="text" name="uname" value={user.uname} onChange={OnInputChnage}></input>
    <br></br>
     Password  
     <br></br> 
    <input type="password" name="password" value={user.password} onChange={OnInputChnage}></input>
    <br></br>
    <input type="submit" className="btn" value="Add "></input>
    </form>
      </>
      
    
) 

}
const add=()=>
{
  return(
      <UserList />
    
  )
}
     
   
  export default AddUser;