var p=Object.defineProperty;var m=(t,e,i)=>e in t?p(t,e,{enumerable:!0,configurable:!0,writable:!0,value:i}):t[e]=i;var c=(t,e,i)=>(m(t,typeof e!="symbol"?e+"":e,i),i);import{j as r}from"./AboutHeader-CpM0iYLI.js";import{r as u}from"./index-B80Lgev0.js";import{c as f}from"./ReactAppend-CBRQCQGz.js";import{B as b}from"./Base-BRjzs9sS.js";import{C as x}from"./CreateReactScript-B4L7iD9b.js";import{T as g,R as n,D as l}from"./ReactAppend-CG--zxq8.js";import{B as h}from"./Results-CGjdirJh.js";import{S as C}from"./Email-9J8hnlEf.js";import"./index-DO3Aws4m.js";import"./tippy-react.esm-CHhA99mn.js";/* empty css              */import"./main-B2CtU6ez.js";import"./___vite-browser-external_commonjs-proxy-C9-083JZ.js";import"./index.esm-Cu-mVv1q.js";/* empty css               */class R extends h{constructor(){super(...arguments);c(this,"path","admin/subscriptions")}}const o=new R,w=()=>{const t=u.useRef(),e=async({id:s,status:a})=>{await o.status({id:s,status:a})&&$(t.current).dxDataGrid("instance").refresh()},i=async s=>{const{isConfirmed:a}=await C.fire({title:"Eliminar subscripcion",text:"¿Estas seguro de eliminar esta subscripcion?",icon:"warning",showCancelButton:!0,confirmButtonText:"Si, eliminar",cancelButtonText:"Cancelar"});!a||!await o.delete(s)||$(t.current).dxDataGrid("instance").refresh()};return r.jsx(r.Fragment,{children:r.jsx(g,{gridRef:t,title:"Subscripciones",rest:o,toolBar:s=>{s.unshift({widget:"dxButton",location:"after",options:{icon:"refresh",hint:"Refrescar tabla",onClick:()=>$(t.current).dxDataGrid("instance").refresh()}})},columns:[{dataField:"id",caption:"ID",visible:!1},{dataField:"name",caption:"Proveedor"},{dataField:"description",caption:"Correo"},{dataField:"created_at",caption:"Fecha subscripcion",dataType:"datetime",format:"yyyy-MM-dd HH:mm:ss",sortOrder:"desc"},{dataField:"status",caption:"Estado",dataType:"boolean",cellTemplate:(s,{data:a})=>{switch(a.status){case 1:n(s,r.jsx("span",{className:"badge bg-success rounded-pill",children:"Activo"}));break;case 0:n(s,r.jsx("span",{className:"badge bg-danger rounded-pill",children:"Inactivo"}));break;default:n(s,r.jsx("span",{className:"badge bg-dark rounded-pill",children:"Eliminado"}));break}}},{caption:"Acciones",cellTemplate:(s,{data:a})=>{s.append(l({className:"btn btn-xs btn-light",title:a.status===null?"Restaurar":"Cambiar estado",icon:a.status===1?"fa fa-toggle-on text-success":a.status===0?"fa fa-toggle-off text-danger":"fas fa-trash-restore",onClick:()=>e(a)})),s.append(l({className:"btn btn-xs btn-soft-danger",title:"Eliminar",icon:"fa fa-trash",onClick:()=>i(a.id)}))},allowFiltering:!1,allowExporting:!1}]})})};x((t,e)=>{f(t).render(r.jsx(b,{...e,title:"Subscripciones",children:r.jsx(w,{...e})}))});
