import React, { useEffect, useState } from 'react';
import axios from 'axios';
import { Link, useHistory } from 'react-router-dom';
import NavBar from './navBar';
import Employee from './employee';

function EmployeeList() {
    const[list,setLists]=useState([]);
    const response=axios.get("http://localhost:8000/api/employeelist")
    .then(response=>{
       console.log(response.data);
        setLists(response.data);

    })
    .catch(error=>{

        console.log(error);
       
                                                       

    }
    )
  
   return (
    <>
 <NavBar status="Meeting List"> </NavBar>
                                <p align="center"> <h3> All Employee</h3>  </p>  
{
                                                list.map((user) => {
                                                 
                                                    return <p align="center"> <Employee {...user} /></p>
                                                         
                                              

                                                })
                                            }

</>

); 
}
export default EmployeeList;