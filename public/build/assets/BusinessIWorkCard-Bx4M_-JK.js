var c=Object.defineProperty;var g=(r,e,t)=>e in r?c(r,e,{enumerable:!0,configurable:!0,writable:!0,value:t}):r[e]=t;var a=(r,e,t)=>(g(r,typeof e!="symbol"?e+"":e,t),t);import"./Accordion-B80Lgev0.js";import{m as s}from"./SelectAPIFormGroup-D3e_Xn4g.js";import"./___vite-browser-external_commonjs-proxy-DqvwVSHi.js";let n=new AbortController;class h{constructor(){a(this,"path",null);a(this,"paginate",async e=>{n.abort("Nothing"),n=new AbortController;const t=n.signal;return console.log(e),await(await fetch(`/api/${this.path}/paginate`,{method:"POST",headers:{Accept:"application/json","Content-Type":"application/json","X-Xsrf-Token":decodeURIComponent(s.Cookies.get("XSRF-TOKEN"))},body:JSON.stringify(e),signal:t})).json()});a(this,"save",async e=>{try{const{status:t,result:o}=await s.Fetch(`/api/${this.path}`,{method:"POST",body:JSON.stringify(e)});if(!t)throw new Error((o==null?void 0:o.message)||"Ocurrio un error inesperado");return s.Notify.add({icon:"/assets/img/logo-login.svg",title:"Correcto",body:o.message,type:"success"}),o}catch(t){return s.Notify.add({icon:"/assets/img/logo-login.svg",title:"Error",body:t.message,type:"danger"}),null}});a(this,"status",async({id:e,status:t})=>{try{const{status:o,result:i}=await s.Fetch(`/api/${this.path}/status`,{method:"PATCH",body:JSON.stringify({id:e,status:t})});if(!o)throw new Error((i==null?void 0:i.message)??"Ocurrio un error inesperado");return s.Notify.add({icon:"/assets/img/logo-login.svg",title:"Correcto",body:i.message,type:"success"}),!0}catch(o){return s.Notify.add({icon:"/assets/img/logo-login.svg",title:"Error",body:o.message,type:"danger"}),!1}});a(this,"delete",async e=>{try{const{status:t,result:o}=await s.Fetch(`/api/${this.path}/${e}`,{method:"DELETE"});if(!t)throw new Error((o==null?void 0:o.message)??"Ocurrio un error inesperado");return s.Notify.add({icon:"/assets/img/logo-login.svg",title:"Correcto",body:o.message,type:"success"}),!0}catch(t){return s.Notify.add({icon:"/assets/img/logo-login.svg",title:"Error",body:t.message,type:"danger"}),!1}})}}export{h as B};
