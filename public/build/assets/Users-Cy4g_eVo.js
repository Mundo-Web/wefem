var C=Object.defineProperty;var j=(t,r,i)=>r in t?C(t,r,{enumerable:!0,configurable:!0,writable:!0,value:i}):t[r]=i;var d=(t,r,i)=>(j(t,typeof r!="symbol"?r+"":r,i),i);import{j as o}from"./AboutHeader-CpM0iYLI.js";import{r as n}from"./index-B80Lgev0.js";import{c as B}from"./ReactAppend-CBRQCQGz.js";import{B as F}from"./Base-CQEVrI6n.js";import{C as E}from"./CreateReactScript-BTmFJSrT.js";import{T as S,D as R}from"./DxButton-Cq9fCzPt.js";import{M as D}from"./Modal-DUfP1iw0.js";import{R as N}from"./ReactAppend-C-tNgxIf.js";import{S as T}from"./SwitchFormGroup-Cv62QkRk.js";import{S as y}from"./sweetalert2.all-Dh0rZL5X.js";import{I as l}from"./InputFormGroup-CFHZRLOG.js";import{r as k}from"./DxBox-CdMuSyGE.js";import{B as G}from"./Results-DSLuSBy_.js";import"./index-DO3Aws4m.js";import"./tippy-react.esm-CHhA99mn.js";/* empty css              */import"./Logout-CPQZ59pt.js";import"./main-B2CtU6ez.js";import"./___vite-browser-external_commonjs-proxy-C9-083JZ.js";import"./index.esm-Cu-mVv1q.js";import"./WhatsAppModal-CjZ0YwJN.js";/* empty css               */class q extends G{constructor(){super(...arguments);d(this,"path","admin/users");d(this,"hasFiles",!0)}}const a=new q,A=({})=>{const t=n.useRef(),r=n.useRef(),i=n.useRef(),u=n.useRef(),c=n.useRef(),m=n.useRef(),f=n.useRef(),[b,x]=n.useState(!1),h=e=>{e!=null&&e.id?x(!0):x(!1),i.current.value=(e==null?void 0:e.id)??"",u.current.value=(e==null?void 0:e.name)??"",c.current.value=(e==null?void 0:e.lastname)??"",m.current.value=(e==null?void 0:e.email)??"",f.current.value=(e==null?void 0:e.phone)??"",$(r.current).modal("show")},v=async e=>{e.preventDefault();const s={id:i.current.value||void 0,name:u.current.value,lastname:c.current.value,email:m.current.value,phone:f.current.value};await a.save(s)&&($(t.current).dxDataGrid("instance").refresh(),$(r.current).modal("hide"))},g=async({id:e,field:s,value:p})=>{await a.boolean({id:e,field:s,value:p})&&$(t.current).dxDataGrid("instance").refresh()},w=async e=>{const{isConfirmed:s}=await y.fire({title:"Banear usuario",text:"¿Estas seguro de banear a este usuario? Esta accion no se puede revertir",icon:"warning",showCancelButton:!0,confirmButtonText:"Si, banear",cancelButtonText:"Cancelar"});!s||!await a.delete(e)||$(t.current).dxDataGrid("instance").refresh()};return o.jsxs(o.Fragment,{children:[o.jsx(S,{gridRef:t,title:"Usuarios",rest:a,toolBar:e=>{e.unshift({widget:"dxButton",location:"after",options:{icon:"refresh",hint:"Refrescar tabla",onClick:()=>$(t.current).dxDataGrid("instance").refresh()}}),e.unshift({widget:"dxButton",location:"after",options:{icon:"plus",text:"Nuevo registro",hint:"Nuevo registro",onClick:()=>h()}})},columns:[{dataField:"id",caption:"ID",visible:!1},{dataField:"fullname",caption:"Nombre completo",visible:!1},{dataField:"name",caption:"Nombre"},{dataField:"lastname",caption:"Apellido"},{dataField:"email",caption:"Correo electronico"},{dataField:"phone",caption:"Celular"},{dataField:"status",caption:"Estado",dataType:"boolean",cellTemplate:(e,{data:s})=>{$(e).empty(),s.status==null?e.html(k(o.jsx("i",{className:"text-muted",children:"Baneado"}))):N(e,o.jsx(T,{checked:s.status==1,onChange:()=>g({id:s.id,field:"status",value:!s.status})}))}},{caption:"Acciones",cellTemplate:(e,{data:s})=>{e.css("text-overflow","unset"),s.status!=null&&(e.append(R({className:"btn btn-xs btn-soft-primary",title:"Editar",icon:"fa fa-pen",onClick:()=>h(s)})),e.append(R({className:"btn btn-xs btn-soft-danger",title:"Banear usuario",icon:"fas fa-ban",onClick:()=>w(s.id)})))},allowFiltering:!1,allowExporting:!1}]}),o.jsxs(D,{modalRef:r,title:b?"Editar red social":"Agregar red social",onSubmit:v,size:"md",children:[o.jsx("input",{ref:i,type:"hidden"}),o.jsxs("div",{className:"row",id:"socials-container",children:[o.jsx(l,{eRef:u,label:"Nombre",col:"col-md-6",required:!0}),o.jsx(l,{eRef:c,label:"Apellido",col:"col-md-6",required:!0}),o.jsx(l,{eRef:m,label:"Correo",required:!0}),o.jsx(l,{eRef:f,label:"Celular",required:!0})]})]})]})};E((t,r)=>{B(t).render(o.jsx(F,{...r,title:"Usuarios",children:o.jsx(A,{...r})}))});
