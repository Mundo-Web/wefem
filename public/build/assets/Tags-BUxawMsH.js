var R=Object.defineProperty;var v=(i,t,n)=>t in i?R(i,t,{enumerable:!0,configurable:!0,writable:!0,value:n}):i[t]=n;var p=(i,t,n)=>(v(i,typeof t!="symbol"?t+"":t,n),n);import{j as s}from"./AboutHeader-DEdD30eg.js";import{r as o}from"./index-RYns6xqu.js";import{c as w}from"./ReactAppend-vpV7VTGG.js";import{B as E}from"./Base-DL7OTEk6.js";import{C as j}from"./CreateReactScript-BERtc5uF.js";import{T as C,R as B,D as d}from"./ReactAppend-CDWOQzm8.js";import{M as D}from"./Modal-HDEzC3Rq.js";import{T}from"./TextareaFormGroup-soTxV26S.js";import{S as q}from"./SwitchFormGroup-XpIpamlZ.js";import{S as F}from"./sweetalert2.all-DJo0UVK6.js";import{I as S}from"./InputFormGroup-CyrmVMYe.js";import{B as y}from"./Results-2jWyQwHC.js";import"./index-CXU7o9CY.js";import"./tippy-react.esm-DYFqe69e.js";/* empty css              */import"./main-BjVPLcVK.js";import"./___vite-browser-external_commonjs-proxy-DbMF7jdq.js";import"./index.esm-Bla6j_hB.js";/* empty css               */class G extends y{constructor(){super(...arguments);p(this,"path","admin/tags")}}const a=new G,k=()=>{const i=o.useRef(),t=o.useRef(),n=o.useRef(),l=o.useRef(),c=o.useRef(),[x,u]=o.useState(!1),m=e=>{e!=null&&e.id?u(!0):u(!1),n.current.value=(e==null?void 0:e.id)??"",l.current.value=(e==null?void 0:e.name)??"",c.current.value=(e==null?void 0:e.description)??"",$(t.current).modal("show")},h=async e=>{e.preventDefault();const r={id:n.current.value||void 0,name:l.current.value,description:c.current.value};await a.save(r)&&($(i.current).dxDataGrid("instance").refresh(),$(t.current).modal("hide"))},g=async({id:e,value:r})=>{await a.boolean({id:e,field:"visible",value:r})&&$(i.current).dxDataGrid("instance").refresh()},b=async e=>{const{isConfirmed:r}=await F.fire({title:"Eliminar registro",text:"¿Estas seguro de eliminar este registro?",icon:"warning",showCancelButton:!0,confirmButtonText:"Si, eliminar",cancelButtonText:"Cancelar"});!r||!await a.delete(e)||$(i.current).dxDataGrid("instance").refresh()};return s.jsxs(s.Fragment,{children:[s.jsx(C,{gridRef:i,title:"Etiquetas",rest:a,toolBar:e=>{e.unshift({widget:"dxButton",location:"after",options:{icon:"refresh",hint:"Refrescar tabla",onClick:()=>$(i.current).dxDataGrid("instance").refresh()}}),e.unshift({widget:"dxButton",location:"after",options:{icon:"plus",text:"Nuevo registro",hint:"Nuevo registro",onClick:()=>m()}})},columns:[{dataField:"id",caption:"ID",visible:!1},{dataField:"name",caption:"Etiqueta",width:"30%"},{dataField:"description",caption:"Descripción",width:"50%"},{dataField:"visible",caption:"Visible",dataType:"boolean",cellTemplate:(e,{data:r})=>{$(e).empty(),B(e,s.jsx(q,{checked:r.visible==1,onChange:()=>g({id:r.id,value:!r.visible})}))}},{caption:"Acciones",cellTemplate:(e,{data:r})=>{e.css("text-overflow","unset"),e.append(d({className:"btn btn-xs btn-soft-primary",title:"Editar",icon:"fa fa-pen",onClick:()=>m(r)})),e.append(d({className:"btn btn-xs btn-soft-danger",title:"Eliminar",icon:"fa fa-trash",onClick:()=>b(r.id)}))},allowFiltering:!1,allowExporting:!1}]}),s.jsx(D,{modalRef:t,title:x?"Editar etiqueta":"Agregar etiqueta",onSubmit:h,size:"sm",children:s.jsxs("div",{className:"row",id:"faqs-container",children:[s.jsx("input",{ref:n,type:"hidden"}),s.jsx(S,{eRef:l,label:"Etiqueta",col:"col-12",required:!0}),s.jsx(T,{eRef:c,label:"Descripción",rows:3})]})})]})};j((i,t)=>{w(i).render(s.jsx(E,{...t,title:"Etiquetas",children:s.jsx(k,{...t})}))});
