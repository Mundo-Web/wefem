var n=Object.defineProperty;var g=(i,o,r)=>o in i?n(i,o,{enumerable:!0,configurable:!0,writable:!0,value:r}):i[o]=r;var s=(i,o,r)=>(g(i,typeof o!="symbol"?o+"":o,r),r);import{m as e}from"./SelectAPIFormGroup-D3e_Xn4g.js";class a{}s(a,"login",async o=>{try{const{status:r,result:t}=await e.Fetch("./api/login",{method:"POST",body:JSON.stringify(o)});if(!r)throw new Error((t==null?void 0:t.message)||"Error al iniciar sesion");return e.Notify.add({icon:"/assets/img/logo-login.svg",title:"Operacion correcta",body:"Se inicio sesion correctamente"}),t}catch(r){return e.Notify.add({icon:"/assets/img/logo-login.svg",title:"Error",body:r.message,type:"danger"}),!1}}),s(a,"signup",async o=>{try{const{status:r,result:t}=await e.Fetch("./api/signup",{method:"POST",body:JSON.stringify(o)});if(!r)throw new Error((t==null?void 0:t.message)||"Error al registrar el usuario");return e.Notify.add({icon:"/assets/img/logo-login.svg",title:"Operacion correcta",body:"Se registro el usuario correctamente"}),t.data}catch(r){return e.Notify.add({icon:"/assets/img/logo-login.svg",title:"Error",body:r.message,type:"danger"}),null}});export{a as A};
