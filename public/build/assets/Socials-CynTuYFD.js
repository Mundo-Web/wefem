var C=Object.defineProperty;var E=(i,t,o)=>t in i?C(i,t,{enumerable:!0,configurable:!0,writable:!0,value:o}):i[t]=o;var j=(i,t,o)=>(E(i,typeof t!="symbol"?t+"":t,o),o);import{j as r}from"./AboutHeader-DEdD30eg.js";import{r as n}from"./index-RYns6xqu.js";import{c as T}from"./ReactAppend-vpV7VTGG.js";import{B as k}from"./Base-CG95oS9j.js";import{C as B}from"./CreateReactScript-BERtc5uF.js";import{T as N,R as D,D as w}from"./ReactAppend-CDWOQzm8.js";import{M as y}from"./Modal-HDEzC3Rq.js";import{T as G}from"./TextareaFormGroup-soTxV26S.js";import{S as I}from"./SwitchFormGroup-XpIpamlZ.js";import{S as M}from"./sweetalert2.all-DJo0UVK6.js";import{I as S}from"./InputFormGroup-CLeK_lOM.js";import{B as U}from"./Results-2jWyQwHC.js";import{r as F}from"./DxBox-DZgBbgD6.js";import"./index-CXU7o9CY.js";import"./tippy-react.esm-DYFqe69e.js";/* empty css              */import"./Logout-ClY1Lmxq.js";import"./main-BjVPLcVK.js";import"./___vite-browser-external_commonjs-proxy-DbMF7jdq.js";import"./index.esm-Bla6j_hB.js";/* empty css               */class q extends U{constructor(){super(...arguments);j(this,"path","admin/socials")}}const A=({id:i,col:t,className:o,label:c,eRef:l,required:a=!1,children:m,dropdownParent:u,noMargin:x=!1,multiple:f=!1,disabled:p=!1,onChange:h=()=>{},templateResult:b,templateSelection:R})=>(l||(l=n.useRef()),i||(i=`select-${crypto.randomUUID()}`),n.useEffect(()=>{$(l.current).select2({dropdownParent:u,templateResult:b,templateSelection:R}),$(l.current).on("change",h)},[u]),r.jsxs("div",{className:`form-group ${t} ${!x&&"mb-2"}`,children:[r.jsxs("label",{htmlFor:i,className:"mb-1",children:[c," ",c&&a&&r.jsx("b",{className:"text-danger",children:"*"})]}),r.jsx("select",{ref:l,id:i,required:a,className:`form-control ${o}`,style:{width:"100%"},disabled:p,multiple:f,children:m})]})),d=new q,V=({icons:i})=>{const t=n.useRef(),o=n.useRef(),c=n.useRef(),l=n.useRef(),a=n.useRef(),m=n.useRef(),u=n.useRef(),[x,f]=n.useState(!1),p=e=>{e!=null&&e.id?f(!0):f(!1),c.current.value=(e==null?void 0:e.id)??"",$(l.current).val((e==null?void 0:e.icon)??null),a.current.value=(e==null?void 0:e.name)??"",m.current.value=(e==null?void 0:e.description)??"",u.current.value=(e==null?void 0:e.link)??"",$(o.current).modal("show")},h=async e=>{e.preventDefault();const s={id:c.current.value||void 0,icon:l.current.value,name:a.current.value,description:m.current.value,link:u.current.value};await d.save(s)&&($(t.current).dxDataGrid("instance").refresh(),$(o.current).modal("hide"))},b=async({id:e,value:s})=>{await d.boolean({id:e,field:"visible",value:s})&&$(t.current).dxDataGrid("instance").refresh()},R=async e=>{const{isConfirmed:s}=await M.fire({title:"Eliminar registro",text:"¿Estas seguro de eliminar este registro?",icon:"warning",showCancelButton:!0,confirmButtonText:"Si, eliminar",cancelButtonText:"Cancelar"});!s||!await d.delete(e)||$(t.current).dxDataGrid("instance").refresh()},v=e=>$(F(r.jsxs("span",{children:[r.jsx("i",{className:`${e.id} me-1`}),e.text.replace("fab fa-","")]})));return r.jsxs(r.Fragment,{children:[r.jsx(N,{gridRef:t,title:"Redes Sociales",rest:d,toolBar:e=>{e.unshift({widget:"dxButton",location:"after",options:{icon:"refresh",hint:"Refrescar tabla",onClick:()=>$(t.current).dxDataGrid("instance").refresh()}}),e.unshift({widget:"dxButton",location:"after",options:{icon:"plus",text:"Nuevo registro",hint:"Nuevo registro",onClick:()=>p()}})},columns:[{dataField:"id",caption:"ID",visible:!1},{dataField:"name",caption:"Usuario"},{dataField:"description",caption:"Red Social",cellTemplate:(e,{data:s})=>{e.html(F(r.jsxs(r.Fragment,{children:[r.jsx("i",{className:`fab ${s.icon} me-1`}),s.description]})))}},{dataField:"link",caption:"Link",width:"400px"},{dataField:"visible",caption:"Visible",dataType:"boolean",cellTemplate:(e,{data:s})=>{$(e).empty(),D(e,r.jsx(I,{checked:s.visible==1,onChange:()=>b({id:s.id,value:!s.visible})}))}},{caption:"Acciones",cellTemplate:(e,{data:s})=>{e.css("text-overflow","unset"),e.append(w({className:"btn btn-xs btn-soft-primary",title:"Editar",icon:"fa fa-pen",onClick:()=>p(s)})),e.append(w({className:"btn btn-xs btn-soft-danger",title:"Eliminar",icon:"fa fa-trash",onClick:()=>R(s.id)}))},allowFiltering:!1,allowExporting:!1}]}),r.jsx(y,{modalRef:o,title:x?"Editar red social":"Agregar red social",onSubmit:h,size:"md",children:r.jsxs("div",{className:"row",id:"socials-container",children:[r.jsx("input",{ref:c,type:"hidden"}),r.jsx(A,{eRef:l,label:"Ícono",dropdownParent:"#socials-container",col:"col-md-4",templateResult:v,templateSelection:v,children:i.filter(e=>e.id.startsWith("fab")).map((e,s)=>r.jsx("option",{value:e.id,children:e.value},s))}),r.jsx(S,{eRef:m,label:"Red social",col:"col-md-8",required:!0}),r.jsx(S,{eRef:a,label:"Usuario",col:"col-12",required:!0}),r.jsx(G,{eRef:u,label:"Enlace (https://...)",col:"col-12",rows:2,required:!0})]})})]})};B((i,t)=>{T(i).render(r.jsx(k,{...t,title:"Redes Sociales",children:r.jsx(V,{...t})}))});
