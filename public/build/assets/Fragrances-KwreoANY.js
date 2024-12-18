var F=Object.defineProperty;var C=(a,t,n)=>t in a?F(a,t,{enumerable:!0,configurable:!0,writable:!0,value:n}):a[t]=n;var p=(a,t,n)=>(C(a,typeof t!="symbol"?t+"":t,n),n);import{j as i}from"./AboutHeader-CpM0iYLI.js";import{r as o}from"./index-B80Lgev0.js";import{c as k}from"./ReactAppend-CBRQCQGz.js";import{B}from"./Base-1lDDkOv7.js";import{C as D}from"./CreateReactScript-B4L7iD9b.js";import{T as E,D as b}from"./DxButton-Cze-ypGT.js";import{M as y}from"./Modal-DUfP1iw0.js";import{I as N}from"./InputFormGroup-C_l38x1H.js";import{R as u}from"./ReactAppend-C-tNgxIf.js";import{T}from"./TextareaFormGroup-BkvHoRll.js";import{S}from"./SwitchFormGroup-Cv62QkRk.js";import{I as G}from"./ImageFormGroup-CUCbODBj.js";import{S as I}from"./sweetalert2.all-Dh0rZL5X.js";import{B as M}from"./Results-B7SuXOZ7.js";import"./index-DO3Aws4m.js";import"./tippy-react.esm-CHhA99mn.js";/* empty css              */import"./Logout-CuE5mwZG.js";import"./main-B2CtU6ez.js";import"./___vite-browser-external_commonjs-proxy-C9-083JZ.js";import"./index.esm-Cu-mVv1q.js";/* empty css               */class A extends M{constructor(){super(...arguments);p(this,"path","admin/fragrances");p(this,"hasFiles",!0)}}const l=new A,q=({})=>{const a=o.useRef(),t=o.useRef(),n=o.useRef(),m=o.useRef(),f=o.useRef(),c=o.useRef(),[w,d]=o.useState(!1),g=e=>{e!=null&&e.id?d(!0):d(!1),n.current.value=(e==null?void 0:e.id)??"",m.current.value=(e==null?void 0:e.name)??"",f.current.value=(e==null?void 0:e.description)??"",c.image.src=`/api/fragrances/media/${e==null?void 0:e.image}`,c.current.value=null,$(t.current).modal("show")},R=async e=>{e.preventDefault();const r={id:n.current.value||void 0,name:m.current.value,description:f.current.value},s=new FormData;for(const h in r)s.append(h,r[h]);const x=c.current.files[0];x&&s.append("image",x),await l.save(s)&&($(a.current).dxDataGrid("instance").refresh(),$(t.current).modal("hide"))},v=async({id:e,value:r})=>{await l.boolean({id:e,field:"visible",value:r})&&$(a.current).dxDataGrid("instance").refresh()},j=async e=>{const{isConfirmed:r}=await I.fire({title:"Eliminar fragancia",text:"¿Estás seguro de eliminar esta fragancia?",icon:"warning",showCancelButton:!0,confirmButtonText:"Sí, eliminar",cancelButtonText:"Cancelar"});!r||!await l.delete(e)||$(a.current).dxDataGrid("instance").refresh()};return i.jsxs(i.Fragment,{children:[i.jsx(E,{gridRef:a,title:"Fragancias",rest:l,toolBar:e=>{e.unshift({widget:"dxButton",location:"after",options:{icon:"refresh",hint:"Refrescar tabla",onClick:()=>$(a.current).dxDataGrid("instance").refresh()}}),e.unshift({widget:"dxButton",location:"after",options:{icon:"plus",text:"Nueva fragancia",hint:"Nueva fragancia",onClick:()=>g()}})},columns:[{dataField:"id",caption:"ID",visible:!1},{dataField:"name",caption:"Nombre",width:"50%",cellTemplate:(e,{data:r})=>{u(e,i.jsxs("p",{className:"mb-0",style:{width:"100%"},children:[i.jsx("b",{className:"d-block",children:r.name}),i.jsx("small",{className:"text-wrap text-muted",style:{overflow:"hidden",display:"-webkit-box",WebkitBoxOrient:"vertical",WebkitLineClamp:2},children:r.description})]}))}},{dataField:"image",caption:"Imagen",width:"80px",allowFiltering:!1,cellTemplate:(e,{data:r})=>{u(e,i.jsx("img",{src:`/api/fragrances/media/${r.image}`,style:{height:"40px",aspectRatio:5/3,objectFit:"cover",objectPosition:"center",borderRadius:"4px"},onError:s=>s.target.src="/api/fragrances/media/fragrance-sin-fragancia.png"}))}},{dataField:"visible",caption:"Visible",dataType:"boolean",width:"120px",cellTemplate:(e,{data:r})=>{u(e,i.jsx(S,{checked:r.visible,onChange:s=>v({id:r.id,value:s.target.checked})}))}},{caption:"Acciones",cellTemplate:(e,{data:r})=>{e.css("text-overflow","unset"),e.append(b({className:"btn btn-xs btn-soft-primary",title:"Editar",icon:"fa fa-pen",onClick:()=>g(r)})),e.append(b({className:"btn btn-xs btn-soft-danger",title:"Eliminar",icon:"fa fa-trash",onClick:()=>j(r.id)}))},allowFiltering:!1,allowExporting:!1}]}),i.jsx(y,{modalRef:t,title:w?"Editar fragancia":"Agregar fragancia",onSubmit:R,size:"md",children:i.jsxs("div",{className:"row",id:"principal-container",children:[i.jsx("input",{ref:n,type:"hidden"}),i.jsx(G,{eRef:c,label:"Imagen",col:"col-md-4",aspect:5/3,onError:"/api/fragrances/media/fragrance-sin-fragancia.png"}),i.jsxs("div",{className:"col-md-8",children:[i.jsx(N,{eRef:m,label:"Nombre",required:!0}),i.jsx(T,{eRef:f,label:"Descripción",rows:3})]})]})})]})};D((a,t)=>{k(a).render(i.jsx(B,{...t,title:"Fragancias",children:i.jsx(q,{...t})}))});
