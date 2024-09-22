var F=Object.defineProperty;var k=(o,i,n)=>i in o?F(o,i,{enumerable:!0,configurable:!0,writable:!0,value:n}):o[i]=n;var R=(o,i,n)=>(k(o,typeof i!="symbol"?i+"":i,n),n);import{j as r}from"./Header-Bdo2C3ON.js";import{r as t}from"./index-DFv2mRv-.js";import{c as B}from"./ReactAppend-CwiwA4iz.js";import{B as _}from"./Base-BRVZCu1m.js";import{C}from"./CreateReactScript-yWJ4gJYl.js";import{B as D}from"./Content-C1YkWUKj.js";import{T as S}from"./Table-B6uZsg78.js";import{M as q}from"./Modal-1X5DaN-b.js";import{I as g}from"./InputFormGroup-zYhJxr8k.js";import{R as c}from"./ReactAppend-CaRiPI_F.js";import{S as v}from"./SelectFormGroup-Dvu5bBQQ.js";import{Q as N}from"./QuillFormGroup-7_9UPCwq.js";import{D as j}from"./DxButton-DV0H-ZcL.js";import{T as G}from"./TextareaFormGroup-D4JtH3Fb.js";import"./index-DgyC5pTR.js";import"./tippy-react.esm-BVvHiWwH.js";/* empty css              */import"./main-BBbUrZUL.js";import"./___vite-browser-external_commonjs-proxy-BQdpDcDf.js";import"./index.esm-B502ZfUP.js";/* empty css               */class I extends D{constructor(){super(...arguments);R(this,"path","coach/resources")}}const x=new I,M=({specialties:o})=>{const i=t.useRef(),n=t.useRef(),u=t.useRef(),a=t.useRef(),p=t.useRef(),m=t.useRef(),d=t.useRef(),l=t.useRef(),f=t.useRef(),[w,h]=t.useState(!1),b=e=>{e!=null&&e.id?h(!0):h(!1),u.current.value=(e==null?void 0:e.id)??"",a.current.value=(e==null?void 0:e.name)??"",p.current.value=(e==null?void 0:e.tags)??"",$(m).val((e==null?void 0:e.specialty_id)??"").trigger("change"),$(d).val((e==null?void 0:e.social_media)??"").trigger("change"),(e==null?void 0:e.social_media)=="youtube"&&(e!=null&&e.media_id)?l.current.value=`https://youtu.be/${e==null?void 0:e.media_id}`:l.current.value=(e==null?void 0:e.media_id)??"",f.editor.root.innerHTML=(e==null?void 0:e.description)??"",$(n.current).modal("show")},y=async e=>{e.preventDefault();const s={id:u.current.value||void 0,name:a.current.value,tags:p.current.value,specialty_id:m.current.value,social_media:d.current.value,media_id:l.current.value,description:f.current.value};await x.save(s)&&($(i.current).dxDataGrid("instance").refresh(),$(n.current).modal("hide"))},T=async e=>{const{isConfirmed:s}=await Swal.fire({title:"Eliminar recurso",text:"¿Estas seguro de eliminar este recurso?",icon:"warning",showCancelButton:!0,confirmButtonText:"Si, eliminar",cancelButtonText:"Cancelar"});!s||!await x.delete(e)||$(i.current).dxDataGrid("instance").refresh()};return r.jsxs(r.Fragment,{children:[r.jsx(S,{gridRef:i,title:"Recursos",rest:x,toolBar:e=>{e.unshift({widget:"dxButton",location:"after",options:{icon:"refresh",hint:"Refrescar tabla",onClick:()=>$(i.current).dxDataGrid("instance").refresh()}}),e.unshift({widget:"dxButton",location:"after",options:{icon:"plus",text:"Nuevo recurso",hint:"Nuevo recurso",onClick:()=>b()}})},columns:[{dataField:"id",caption:"ID",visible:!1},{dataField:"specialty.name",caption:"Especialidad"},{dataField:"name",caption:"Titulo"},{dataField:"id",caption:"Imagen",width:"90px",cellTemplate:(e,{data:s})=>{s.social_media=="youtube"?c(e,r.jsx("img",{src:`https://i.ytimg.com/vi/${s.media_id}/hqdefault.jpg`,style:{width:"80px",height:"48px",objectFit:"cover",objectPosition:"center",borderRadius:"4px"}})):c(e,r.jsx("img",{src:"/api/cover/thumbnail/null",style:{width:"80px",height:"48px",objectFit:"cover",objectPosition:"center",borderRadius:"4px"}}))}},{dataField:"status",caption:"Estado",dataType:"boolean",cellTemplate:(e,{data:s})=>{switch(s.status){case 1:c(e,r.jsx("span",{className:"badge bg-success rounded-pill",children:"Activo"}));break;case 0:c(e,r.jsx("span",{className:"badge bg-danger rounded-pill",children:"Inactivo"}));break;default:c(e,r.jsx("span",{className:"badge bg-dark rounded-pill",children:"Eliminado"}));break}}},{caption:"Acciones",cellTemplate:(e,{data:s})=>{e.append(j({className:"btn btn-xs btn-soft-primary",title:"Editar",icon:"fa fa-pen",onClick:()=>b(s)})),e.append(j({className:"btn btn-xs btn-soft-danger",title:"Eliminar",icon:"fa fa-trash",onClick:()=>T(s.id)}))},allowFiltering:!1,allowExporting:!1}]}),r.jsx(q,{modalRef:n,title:w?"Editar recurso":"Agregar recurso",onSubmit:y,size:"md",children:r.jsxs("div",{className:"row",id:"resources-container",children:[r.jsx("input",{ref:u,type:"hidden"}),r.jsx(g,{eRef:a,label:"Titulo",col:"col-12",required:!0}),r.jsx(g,{eRef:p,label:"Tags (Separado por comas)",col:"col-12",required:!0}),r.jsx(v,{eRef:m,label:"Especialidad",dropdownParent:"#resources-container",required:!0,children:o.map((e,s)=>r.jsx("option",{value:e.id,children:e.name},`specialty-${s}`))}),r.jsxs(v,{eRef:d,label:"Red social",dropdownParent:"#resources-container",required:!0,children:[r.jsx("option",{value:"youtube",children:"YouTube"}),r.jsx("option",{value:"facebook",children:"Facebook"})]}),r.jsx(G,{eRef:l,label:"Link del recurso",col:"col-12",rows:1,required:!0}),r.jsx(N,{eRef:f,label:"Descripcion",col:"col-12",height:"240px",required:!0})]})})]})};C((o,i)=>{B(o).render(r.jsx(_,{...i,title:"Recursos",children:r.jsx(M,{...i})}))});
