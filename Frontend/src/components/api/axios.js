import axios from 'axios';

export default axios.create({
    baseURL:"http://localhost:8000",
    headers:{
        "Content-Type":"application/json",
        "Accept":"application/json",
        // "Authorization":`Bearer ${token}`
    },
    withCredentials:true,
    withXSRFToken : true,
});