var g=Object.defineProperty;var l=(i,o,t)=>o in i?g(i,o,{enumerable:!0,configurable:!0,writable:!0,value:t}):i[o]=t;var a=(i,o,t)=>(l(i,typeof o!="symbol"?o+"":o,t),t);import"./AboutHeader-Bdo2C3ON.js";import"./index-DFv2mRv-.js";import{m as r}from"./main-BBbUrZUL.js";import"./___vite-browser-external_commonjs-proxy-BQdpDcDf.js";let c=new AbortController;class u{constructor(){a(this,"path",null);a(this,"hasFiles",!1);a(this,"paginate",async o=>{c.abort("Nothing"),c=new AbortController;const t=c.signal;return await(await fetch(`/api/${this.path}/paginate`,{method:"POST",headers:{Accept:"application/json","Content-Type":"application/json","X-Xsrf-Token":decodeURIComponent(r.Cookies.get("XSRF-TOKEN"))},body:JSON.stringify(o),signal:t})).json()});a(this,"save",async o=>{try{let t=!1,e={};if(this.hasFiles){const s=await fetch(`/api/${this.path}`,{method:"POST",headers:{"X-Xsrf-Token":decodeURIComponent(r.Cookies.get("XSRF-TOKEN"))},body:o});t=s.ok,e=JSON.parseable(await s.text())}else{const s=await r.Fetch(`/api/${this.path}`,{method:"POST",body:JSON.stringify(o)});t=s.status,e=s.result}if(!t)throw new Error((e==null?void 0:e.message)||"Ocurrio un error inesperado");return r.Notify.add({icon:"/assets/img/logo-login.svg",title:"Correcto",body:e.message,type:"success"}),e}catch(t){return r.Notify.add({icon:"/assets/img/logo-login.svg",title:"Error",body:t.message,type:"danger"}),null}});a(this,"status",async({id:o,status:t})=>{try{const{status:e,result:s}=await r.Fetch(`/api/${this.path}/status`,{method:"PATCH",body:JSON.stringify({id:o,status:t})});if(!e)throw new Error((s==null?void 0:s.message)??"Ocurrio un error inesperado");return r.Notify.add({icon:"/assets/img/logo-login.svg",title:"Correcto",body:s.message,type:"success"}),!0}catch(e){return r.Notify.add({icon:"/assets/img/logo-login.svg",title:"Error",body:e.message,type:"danger"}),!1}});a(this,"boolean",async({id:o,field:t,value:e})=>{try{const{status:s,result:n}=await r.Fetch(`/api/${this.path}/boolean`,{method:"PATCH",body:JSON.stringify({id:o,field:t,value:e})});if(!s)throw new Error((n==null?void 0:n.message)??"Ocurrio un error inesperado");return r.Notify.add({icon:"/assets/img/logo-login.svg",title:"Correcto",body:n.message,type:"success"}),!0}catch(s){return r.Notify.add({icon:"/assets/img/logo-login.svg",title:"Error",body:s.message,type:"danger"}),!1}});a(this,"delete",async o=>{try{const{status:t,result:e}=await r.Fetch(`/api/${this.path}/${o}`,{method:"DELETE"});if(!t)throw new Error((e==null?void 0:e.message)??"Ocurrio un error inesperado");return r.Notify.add({icon:"/assets/img/logo-login.svg",title:"Correcto",body:e.message,type:"success"}),!0}catch(t){return r.Notify.add({icon:"/assets/img/logo-login.svg",title:"Error",body:t.message,type:"danger"}),!1}})}}export{u as B};
