import User from './user';
import '../my.css';
const EditUser =  ()=>

{
  
  const users=[{name:'Pr',id:1,dept:'cs'}];
  const use=[{name:'Senonism',id:1,dept:'cs'},

              {name:'ptyi', id:2,dept:'cse'},
              {name:'sad', id:3,dept:'eee'}
            ];  //'Gata' Replaces the previous name 'senonism'
    return(
     
  
       <>

    <h1> Edit User  </h1> 
    <hr></hr>
    Name   
    <br></br>
    <input type="text" id="c1"></input>
     <br></br>
    <br></br>
     Password  
     <br></br> 
    <input type="password"></input>
    <br></br>
    <input type="button" value="Edit " onClick="{{add}}"></input>
      </>
      
    
) 

}
const add=()=>
{
  return(

    <h1>Done </h1>
  )
}
     
   
  export default EditUser;