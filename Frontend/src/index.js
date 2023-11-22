import React from 'react';
import ReactDOM from 'react-dom/client';
import reportWebVitals from './reportWebVitals';
// import { BrowserRouter} from 'react-router-dom';
// import router from './routes/router';
// import Master from './views/layouts/Master';
import App from './App';
// import Welcome from './views/frontend/Welcome';

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <React.StrictMode>
        <App/>
  </React.StrictMode>
);


reportWebVitals();
