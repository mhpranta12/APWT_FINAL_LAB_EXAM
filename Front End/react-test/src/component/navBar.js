import User from './user';
import '../my.css';
const NavBar = ({status})=>

{
    return(
     <>
    
       <div className='navbar'>
      <div>

      <h1> {status} </h1> 
      </div>
    
    <hr></hr>
    
    <img src="https://img.icons8.com/fluency/48/000000/application-window.png"/> <br></br>
    <a href="/"> <img src="https://img.icons8.com/material-rounded/15/000000/home.png"/> Home </a> 
    |
    <a href="/user/add">  <img src="https://img.icons8.com/ios-glyphs/15/000000/add-user-male.png"/> Add Employee </a>
   
    |
    <a href="/edituser">  <img src="https://img.icons8.com/ios-glyphs/15/000000/edit-user-male.png"/>  Edit User </a>
    |

    <a href="/user/list">   <img src="https://img.icons8.com/ios-filled/15/000000/list.png"/> Employee List</a>
    
      </div>
          <img src="https://readme-typing-svg.herokuapp.com?font=cambria&size=22&lines=Welcome+to+my+React+UMS+App+;Designed+by+MH+Pranta"></img>
      </>
) 

}

     
   
  export default NavBar;