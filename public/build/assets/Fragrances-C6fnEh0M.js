var N=Object.defineProperty;var k=(n,t,s)=>t in n?N(n,t,{enumerable:!0,configurable:!0,writable:!0,value:s}):n[t]=s;var u=(n,t,s)=>(k(n,typeof t!="symbol"?t+"":t,s),s);import{j as r}from"./AboutHeader-CpM0iYLI.js";import{r as o}from"./index-B80Lgev0.js";import{c as B}from"./ReactAppend-CBRQCQGz.js";import{B as D}from"./Base-plxfDuQi.js";import{C as y}from"./CreateReactScript-BTmFJSrT.js";import{T,D as w}from"./DxButton-Cze-ypGT.js";import{M as S}from"./Modal-DUfP1iw0.js";import{I as G}from"./InputFormGroup-CFHZRLOG.js";import{R as d}from"./ReactAppend-C-tNgxIf.js";import{T as I}from"./TextareaFormGroup-BkvHoRll.js";import{S as M}from"./SwitchFormGroup-Cv62QkRk.js";import{I as v}from"./ImageFormGroup-CUCbODBj.js";import{S as A}from"./sweetalert2.all-Dh0rZL5X.js";import{B as q}from"./Results-DSLuSBy_.js";import"./index-DO3Aws4m.js";import"./tippy-react.esm-CHhA99mn.js";/* empty css              */import"./Logout-CPQZ59pt.js";import"./main-B2CtU6ez.js";import"./___vite-browser-external_commonjs-proxy-C9-083JZ.js";import"./index.esm-Cu-mVv1q.js";import"./WhatsAppModal-CjZ0YwJN.js";/* empty css               */class O extends q{constructor(){super(...arguments);u(this,"path","admin/fragrances");u(this,"hasFiles",!0)}}const m=new O,V=({})=>{const n=o.useRef(),t=o.useRef(),s=o.useRef(),f=o.useRef(),p=o.useRef(),c=o.useRef(),l=o.useRef(),[j,g]=o.useState(!1),x=e=>{e!=null&&e.id?g(!0):g(!1),s.current.value=(e==null?void 0:e.id)??"",f.current.value=(e==null?void 0:e.name)??"",p.current.value=(e==null?void 0:e.description)??"",c.image.src=`/api/fragrances/media/${e==null?void 0:e.image}`,c.current.value=null,l.image.src=`/api/fragrances/media/${e==null?void 0:e.note}`,l.current.value=null,$(t.current).modal("show")},F=async e=>{e.preventDefault();const i={id:s.current.value||void 0,name:f.current.value,description:p.current.value},a=new FormData;for(const R in i)a.append(R,i[R]);const h=c.current.files[0];h&&a.append("image",h);const b=l.current.files[0];b&&a.append("note",b),await m.save(a)&&($(n.current).dxDataGrid("instance").refresh(),$(t.current).modal("hide"))},C=async({id:e,value:i})=>{await m.boolean({id:e,field:"visible",value:i})&&$(n.current).dxDataGrid("instance").refresh()},E=async e=>{const{isConfirmed:i}=await A.fire({title:"Eliminar fragancia",text:"¿Estás seguro de eliminar esta fragancia?",icon:"warning",showCancelButton:!0,confirmButtonText:"Sí, eliminar",cancelButtonText:"Cancelar"});!i||!await m.delete(e)||$(n.current).dxDataGrid("instance").refresh()};return r.jsxs(r.Fragment,{children:[r.jsx(T,{gridRef:n,title:"Fragancias",rest:m,toolBar:e=>{e.unshift({widget:"dxButton",location:"after",options:{icon:"refresh",hint:"Refrescar tabla",onClick:()=>$(n.current).dxDataGrid("instance").refresh()}}),e.unshift({widget:"dxButton",location:"after",options:{icon:"plus",text:"Nueva fragancia",hint:"Nueva fragancia",onClick:()=>x()}})},columns:[{dataField:"id",caption:"ID",visible:!1},{dataField:"name",caption:"Nombre",width:"50%",cellTemplate:(e,{data:i})=>{d(e,r.jsxs("p",{className:"mb-0",style:{width:"100%"},children:[r.jsx("b",{className:"d-block",children:i.name}),r.jsx("small",{className:"text-wrap text-muted",style:{overflow:"hidden",display:"-webkit-box",WebkitBoxOrient:"vertical",WebkitLineClamp:2},children:i.description})]}))}},{dataField:"image",caption:"Imagen",width:"80px",allowFiltering:!1,cellTemplate:(e,{data:i})=>{d(e,r.jsx("img",{src:`/api/fragrances/media/${i.image}`,style:{height:"40px",aspectRatio:5/3,objectFit:"cover",objectPosition:"center",borderRadius:"4px"},onError:a=>a.target.src="/api/fragrances/media/fragrance-sin-fragancia.png"}))}},{dataField:"visible",caption:"Visible",dataType:"boolean",width:"120px",cellTemplate:(e,{data:i})=>{d(e,r.jsx(M,{checked:i.visible,onChange:a=>C({id:i.id,value:a.target.checked})}))}},{caption:"Acciones",cellTemplate:(e,{data:i})=>{e.css("text-overflow","unset"),e.append(w({className:"btn btn-xs btn-soft-primary",title:"Editar",icon:"fa fa-pen",onClick:()=>x(i)})),e.append(w({className:"btn btn-xs btn-soft-danger",title:"Eliminar",icon:"fa fa-trash",onClick:()=>E(i.id)}))},allowFiltering:!1,allowExporting:!1}]}),r.jsx(S,{modalRef:t,title:j?"Editar fragancia":"Agregar fragancia",onSubmit:F,size:"md",children:r.jsxs("div",{className:"row",id:"principal-container",children:[r.jsx("input",{ref:s,type:"hidden"}),r.jsxs("div",{className:"col-md-4",children:[r.jsx(v,{eRef:c,label:"Imagen",aspect:5/3,onError:"/api/fragrances/media/fragrance-sin-fragancia.png"}),r.jsx(v,{eRef:l,label:"Nota de olor",aspect:5/3,onError:"/api/fragrances/media/fragrance-sin-fragancia.png"})]}),r.jsxs("div",{className:"col-md-8",children:[r.jsx(G,{eRef:f,label:"Nombre",required:!0}),r.jsx(I,{eRef:p,label:"Descripción",rows:3})]})]})})]})};y((n,t)=>{B(n).render(r.jsx(D,{...t,title:"Fragancias",children:r.jsx(V,{...t})}))});
