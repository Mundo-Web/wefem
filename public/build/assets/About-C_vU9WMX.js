var R=Object.defineProperty;var h=(r,t,o)=>t in r?R(r,t,{enumerable:!0,configurable:!0,writable:!0,value:o}):r[t]=o;var m=(r,t,o)=>(h(r,typeof t!="symbol"?t+"":t,o),o);import{j as i}from"./AboutHeader-CpM0iYLI.js";import{B as v}from"./Base-plxfDuQi.js";import{S as j}from"./SwitchFormGroup-Cv62QkRk.js";import{T as g}from"./TextareaFormGroup-BkvHoRll.js";import{r as n}from"./index-B80Lgev0.js";import{c as w}from"./ReactAppend-CBRQCQGz.js";import{B as T}from"./Results-DSLuSBy_.js";import{M as D}from"./Modal-DUfP1iw0.js";import{T as F,D as B}from"./DxButton-Cze-ypGT.js";import{I as E}from"./InputFormGroup-aNCWUTCq.js";import{C as y}from"./CreateReactScript-BTmFJSrT.js";import{R as C}from"./ReactAppend-C-tNgxIf.js";import"./tippy-react.esm-CHhA99mn.js";import"./index-DO3Aws4m.js";/* empty css              */import"./Logout-CPQZ59pt.js";import"./main-B2CtU6ez.js";import"./___vite-browser-external_commonjs-proxy-C9-083JZ.js";import"./index.esm-Cu-mVv1q.js";import"./WhatsAppModal-CjZ0YwJN.js";import"./sweetalert2.all-Dh0rZL5X.js";/* empty css               */class G extends T{constructor(){super(...arguments);m(this,"path","admin/aboutus")}}const c=new G,S=()=>{const r=n.useRef(),t=n.useRef(),o=n.useRef(),l=n.useRef(),a=n.useRef(),[p,u]=n.useState(!1),f=e=>{e!=null&&e.id?u(!0):u(!1),o.current.value=(e==null?void 0:e.id)??"",l.current.value=(e==null?void 0:e.name)??"",a.current.value=(e==null?void 0:e.description)??"",$(t.current).modal("show")},d=async e=>{e.preventDefault();const s={id:o.current.value||void 0,name:l.current.value,description:a.current.value};await c.save(s)&&($(r.current).dxDataGrid("instance").refresh(),$(t.current).modal("hide"))},b=async({id:e,value:s})=>{await c.boolean({id:e,field:"visible",value:s})&&$(r.current).dxDataGrid("instance").refresh()};return i.jsxs(i.Fragment,{children:[i.jsx(F,{gridRef:r,title:"Nosotros",rest:c,toolBar:e=>{e.unshift({widget:"dxButton",location:"after",options:{icon:"refresh",hint:"Refrescar tabla",onClick:()=>$(r.current).dxDataGrid("instance").refresh()}})},columns:[{dataField:"id",caption:"ID",visible:!1},{dataField:"name",caption:"Titulo"},{dataField:"visible",caption:"Visible",dataType:"boolean",cellTemplate:(e,{data:s})=>{$(e).empty(),C(e,i.jsx(j,{checked:s.visible==1,onChange:()=>b({id:s.id,value:!s.visible})}))}},{caption:"Acciones",cellTemplate:(e,{data:s})=>{e.append(B({className:"btn btn-xs btn-soft-primary",title:"Editar",icon:"fa fa-pen",onClick:()=>f(s)}))},allowFiltering:!1,allowExporting:!1}]}),i.jsx(D,{modalRef:t,title:p?"Editar about":"Agregar about",onSubmit:d,size:"md",children:i.jsxs("div",{className:"row",id:"benefits-container",children:[i.jsx("input",{ref:o,type:"hidden"}),i.jsx(E,{eRef:l,label:"Titulo",col:"col-12",rows:2,required:!0,disabled:!0}),i.jsx(g,{eRef:a,label:"Descripción",rows:3})]})})]})};y((r,t)=>{w(r).render(i.jsx(v,{...t,title:"Nosotros",children:i.jsx(S,{...t})}))});
