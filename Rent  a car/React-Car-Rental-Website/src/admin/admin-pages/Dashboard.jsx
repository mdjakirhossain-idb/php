import React from 'react'
import { AdminNavbar } from '../admin-components/AdminNavbar'
import { AdminFooter } from '../admin-components/AdminFooter'
import { AdminSidebar } from '../admin-components/AdminSidebar'

export const Dashboard = () => {
  return (
    <div>
        <AdminNavbar/>
        <AdminSidebar/>
       <h1>Dashboard</h1>  
       <AdminFooter/>


    </div>
  )
}
