import logo from './logo.svg';
import './App.css';
import './my.css';
import { useState  } from 'react';
import UserList from './component/userlist';
import NavBar from './component/navBar';
import User  from './component/user';
import SA from './component/home';
import EditUser from './component/edituser';
import {BrowserRouter as Router,Switch,Route} from 'react-router-dom';
import axios from 'axios';
import AddUser from './component/adduser';
import EmployeeList  from './component/employeeList';
function App() 
{

  
    
  return (
   <>
       
    <Router>

             <Switch>  
              <Route exact path="/">
                      <NavBar status="Home" />
              </Route>
              <Route path="/list">
                      <NavBar status='List' />
                      <UserList ar/>
              </Route>

             

              <Route path='/user/add'>
                <div >
               
                 <AddUser />
                </div>
              </Route>
              <Route path='/home'>
                      <SA/>
              </Route>

              <Route path='/adduser'>
              <NavBar status='Add User' />
                      <AddUser />
              </Route>

              <Route path='/edituser'>
              <NavBar status='Edit User' />
                      <EditUser />
              </Route>

              <Route path='/user/list'>
                <div >
               
                 <EmployeeList/>
                </div>
                </Route>
              </Switch>
     
    </Router>

   
     
     </>
      
      
    
  );
}

export default App;
