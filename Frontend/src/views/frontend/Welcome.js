import React from 'react'

//JS Link For Bootstrap 
import 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'
import Navbar from '../layouts/frontend/Navbar'
import Main from '../layouts/frontend/Main'
// import '../../components'

function Welcome() {
  return (
    <div>
      <Navbar/>
      <Main/>

    </div>
  )
}

export default Welcome