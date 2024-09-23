var j=Object.defineProperty;var g=(t,s,a)=>s in t?j(t,s,{enumerable:!0,configurable:!0,writable:!0,value:a}):t[s]=a;var x=(t,s,a)=>(g(t,typeof s!="symbol"?s+"":s,a),a);import{j as e}from"./AboutHeader-Bdo2C3ON.js";import{r as o}from"./index-DFv2mRv-.js";import{c as w}from"./ReactAppend-CwiwA4iz.js";import{B as N,L as h}from"./Base-B44vhXWW.js";import{C as R}from"./CreateReactScript-yWJ4gJYl.js";import{I as C}from"./InputFormGroup-Di7UVG_e.js";/* empty css              */import{m as l}from"./main-BBbUrZUL.js";import{J as P}from"./JSEncrypt-D3I3x59l.js";import"./index-DgyC5pTR.js";import"./tippy-react.esm-BVvHiWwH.js";import"./index.esm-B502ZfUP.js";import"./___vite-browser-external_commonjs-proxy-BQdpDcDf.js";/* empty css               */const m=({col:t,label:s,eRef:a,placeholder:r,required:n=!1,value:d})=>{a||(a=o.useRef());const[i,c]=o.useState("password"),p=()=>{i=="text"?c("password"):c("text")};return e.jsxs("div",{className:`form-group ${t} mb-2`,children:[e.jsxs("label",{htmlFor:"",children:[s," ",n&&e.jsx("b",{className:"text-danger",children:"*"})]}),e.jsxs("div",{className:"input-group input-group-merge",children:[e.jsx("input",{ref:a,type:i,className:"form-control",placeholder:r,required:n,defaultValue:d??""}),e.jsx("div",{className:"input-group-text","data-password":"true",onClick:p,children:e.jsx("i",{className:i=="text"?"mdi mdi-eye-off-outline":"mdi mdi-eye-outline"})})]})]})};class u{}x(u,"email",async s=>{try{const{status:a,result:r}=await l.Fetch("/api/account/email",{method:"PATCH",body:JSON.stringify(s)});if(!a)throw new Error((r==null?void 0:r.message)||"Ocurrio un error inesperado");return l.Notify.add({icon:"/assets/img/logo-login.svg",title:"Correcto",body:r.message,type:"success"}),!0}catch(a){return l.Notify.add({icon:"/assets/img/logo-login.svg",title:"Error",body:a.message,type:"danger"}),!1}}),x(u,"password",async s=>{try{const{status:a,result:r}=await l.Fetch("/api/account/password",{method:"PATCH",body:JSON.stringify(s)});if(!a)throw new Error((r==null?void 0:r.message)||"Ocurrio un error inesperado");return l.Notify.add({icon:"/assets/img/logo-login.svg",title:"Correcto",body:r.message,type:"success"}),!0}catch(a){return l.Notify.add({icon:"/assets/img/logo-login.svg",title:"Error",body:a.message,type:"danger"}),!1}});const E=({session:t,PUBLIC_RSA_KEY:s})=>{const a=new P;a.setPublicKey(s);const r=o.useRef(),n=o.useRef(),d=o.useRef(),i=o.useRef(),c=o.useRef(),p=async f=>{f.preventDefault();const b={email:r.current.value,password:a.encrypt(n.current.value)};await u.email(b)&&h()},y=async f=>{f.preventDefault();const b={password:a.encrypt(d.current.value),newPassword:a.encrypt(i.current.value),confirmPassword:a.encrypt(c.current.value)};await u.password(b)&&h()};return e.jsx("div",{className:"row justify-content-center align-items-center",style:{height:"calc(100vh - 135px)"},children:e.jsx("div",{className:"col-lg-6 col-md-8 col-sm-12",children:e.jsxs("div",{className:"card",children:[e.jsx("div",{className:"card-header",children:e.jsx("h4",{className:"card-title mb-0",children:"Cuenta de usuario"})}),e.jsxs("div",{className:"card-body",children:[e.jsxs("div",{className:"row",children:[e.jsx("div",{className:"col-sm-4",children:e.jsxs("div",{className:"nav flex-column nav-pills nav-pills-tab",id:"v-pills-tab",role:"tablist","aria-orientation":"vertical",children:[e.jsx("a",{className:"nav-link active show mb-1",id:"email-container-tab","data-bs-toggle":"pill",href:"#email-container",role:"tab","aria-controls":"email-container","aria-selected":"true",children:"Correo"}),e.jsx("a",{className:"nav-link mb-1",id:"password-container-tab","data-bs-toggle":"pill",href:"#password-container",role:"tab","aria-controls":"password-container","aria-selected":"false",children:"Contraseña"})]})}),e.jsx("div",{className:"col-sm-8",children:e.jsxs("div",{className:"tab-content pt-0",children:[e.jsxs("form",{className:"tab-pane fade active show",id:"email-container",role:"tabpanel","aria-labelledby":"email-container-tab",onSubmit:p,children:[e.jsx("h4",{className:"mt-0",children:"Actualizar correo de usuario"}),e.jsx(C,{eRef:r,label:"Correo de usuario",type:"email",value:t.email,required:!0}),e.jsx(m,{eRef:n,label:"Contraseña de confirmacion",type:"password",value:null,required:!0}),e.jsxs("button",{className:"btn btn-primary btn-block",type:"submit",children:[e.jsx("i",{className:"fa fa-save"})," Actualizar"]})]}),e.jsxs("form",{className:"tab-pane fade",id:"password-container",role:"tabpanel","aria-labelledby":"password-container-tab",onSubmit:y,children:[e.jsx("h4",{className:"mt-0",children:"Actualizar contraseña de usuario"}),e.jsx(m,{eRef:d,label:"Contraseña anterior",type:"password",value:null,required:!0}),e.jsx(m,{eRef:i,label:"Contraseña nueva",type:"password",value:null,required:!0}),e.jsx(m,{eRef:c,label:"Repita la contraseña nueva",type:"password",value:null,required:!0}),e.jsxs("button",{className:"btn btn-primary btn-block",type:"submit",children:[e.jsx("i",{className:"fa fa-save"})," Actualizar"]})]})]})})]}),e.jsx("hr",{className:"mt-3 mb-2"}),e.jsx("p",{className:"card-text text-center",children:e.jsxs("small",{className:"text-muted",children:["Ultima actualizacion ",moment(t.updated_at).fromNow()]})})]})]})})})};R((t,s)=>{w(t).render(e.jsx(N,{...s,title:"Cuenta de usuario",children:e.jsx(E,{...s})}))});
