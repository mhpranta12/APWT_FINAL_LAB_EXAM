import User from './user';
import '../my.css';
const UserList =  ({list,callback})=>

{
  console.log(list);
  const users=[{name:'Pr',id:1,dept:'cs'}];
  const use=[{name:'Atif',id:1,dept:'cs'},
              {name:'Fatih', id:2,dept:'cse'},
              {name:'Ahmad', id:3,dept:'eee'}
            ];  
    return(
     
    
       <>
  
    <h1> Welcome To  UserList </h1> 
    <hr></hr>
    <h3> This is the userlist page </h3>
    <br></br>
    
    
    
        
        {
           list= list.map((user)=>
          {
             return <User {...user} b={callback}/>
          })
         
        }
        
      </>
) 

}

     
   
  export default UserList;