var j=Object.defineProperty;var g=(a,n,s)=>n in a?j(a,n,{enumerable:!0,configurable:!0,writable:!0,value:s}):a[n]=s;var h=(a,n,s)=>(g(a,typeof n!="symbol"?n+"":n,s),s);import{j as e}from"./AboutHeader-CpM0iYLI.js";import{r as d}from"./index-B80Lgev0.js";import{c as N}from"./ReactAppend-CBRQCQGz.js";import{B as C}from"./Base-plxfDuQi.js";import{C as y}from"./CreateReactScript-BTmFJSrT.js";import{T as w,D as u}from"./DxButton-Cze-ypGT.js";import{R as m}from"./ReactAppend-C-tNgxIf.js";import{B as R}from"./Results-DSLuSBy_.js";import{S as M}from"./sweetalert2.all-Dh0rZL5X.js";import"./index-DO3Aws4m.js";import"./tippy-react.esm-CHhA99mn.js";/* empty css              */import"./Logout-CPQZ59pt.js";import"./main-B2CtU6ez.js";import"./___vite-browser-external_commonjs-proxy-C9-083JZ.js";import"./index.esm-Cu-mVv1q.js";import"./WhatsAppModal-CjZ0YwJN.js";/* empty css               */class B extends R{constructor(){super(...arguments);h(this,"path","admin/messages")}}const D=({modalRef:a,title:n="Modal",isStatic:s=!1,size:l="md",children:o,bodyClass:i="",btnCancelText:t,btnSubmitText:r,hideFooter:x,hideButtonSubmit:f,onSubmit:b=c=>{c.preventDefault(),$(a.current).modal("hide")}})=>{const c=s?{"data-bs-backdrop":"static"}:{};return e.jsx("form",{className:"modal fade",ref:a,tabIndex:"-1","aria-hidden":"true",...c,onSubmit:b,autoComplete:"off",children:e.jsx("div",{className:`modal-dialog modal-dialog-centered modal-${l??"md"}`,children:e.jsxs("div",{className:"modal-content ",style:{boxShadow:"0 0 10px rgba(0,0,0,0.25)"},children:[e.jsxs("div",{className:"modal-header",children:[e.jsx("h4",{className:"modal-title",children:n}),e.jsx("button",{type:"button",className:"btn-close","data-bs-dismiss":"modal","aria-label":"Close"})]}),e.jsx("div",{className:`modal-body ${i??""}`,children:o}),!x&&e.jsxs("div",{className:"modal-footer",children:[e.jsx("button",{className:"btn btn-sm btn-danger pull-left",type:"button","data-bs-dismiss":"modal",children:t??"Cerrar"}),!f&&e.jsx("button",{className:"btn btn-sm btn-success pull-right",type:"submit",children:r??"Aceptar"})]})]})})})},p=new B,F=()=>{const a=d.useRef(),n=d.useRef(),[s,l]=d.useState(null),o=async t=>{const{isConfirmed:r}=await M.fire({title:"Eliminar mensaje",text:"¿Estas seguro de eliminar este mensaje?",icon:"warning",showCancelButton:!0,confirmButtonText:"Si, eliminar",cancelButtonText:"Cancelar"});!r||!await p.delete(t)||$(a.current).dxDataGrid("instance").refresh()},i=t=>{t.seen||(p.boolean({id:t,field:"seen",value:!0}),$(a.current).dxDataGrid("instance").refresh()),l(t),$(n.current).modal("show")};return e.jsxs(e.Fragment,{children:[e.jsx(w,{gridRef:a,title:"Mensajes",rest:p,toolBar:t=>{t.unshift({widget:"dxButton",location:"after",options:{icon:"refresh",hint:"Refrescar tabla",onClick:()=>$(a.current).dxDataGrid("instance").refresh()}})},columns:[{dataField:"id",caption:"ID",visible:!1},{dataField:"name",caption:"Nombre",cellTemplate:(t,{data:r})=>{m(t,e.jsx("span",{style:{width:"100%",fontWeight:r.seen?"lighter":"bold",cursor:"pointer"},onClick:()=>i(r),children:r.name}))}},{dataField:"email",caption:"Correo"},{dataField:"created_at",caption:"Fecha",dataType:"datetime",format:"yyyy-MM-dd HH:mm:ss",sortOrder:"desc"},{dataField:"status",caption:"Estado",dataType:"boolean",cellTemplate:(t,{data:r})=>{r.seen?m(t,e.jsx("span",{className:"badge bg-success rounded-pill",children:"Leído"})):m(t,e.jsx("span",{className:"badge bg-danger rounded-pill",children:"No leído"}))}},{caption:"Acciones",cellTemplate:(t,{data:r})=>{t.append(u({className:"btn btn-xs btn-soft-dark",title:"Ver mensaje",icon:"fa fa-eye",onClick:()=>i(r)})),t.append(u({className:"btn btn-xs btn-soft-danger",title:"Eliminar",icon:"fa fa-trash",onClick:()=>o(r.id)}))},allowFiltering:!1,allowExporting:!1}]}),e.jsxs(D,{modalRef:n,title:"Mensaje",hideFooter:!0,children:[e.jsxs("p",{children:[e.jsx("b",{children:"Nombre"}),":",e.jsx("span",{className:"ms-1",children:s==null?void 0:s.name})]}),e.jsxs("p",{children:[e.jsx("b",{children:"Correo"}),":",e.jsx("span",{className:"ms-1",children:(s==null?void 0:s.email)||e.jsx("i",{className:"text-muted",children:"- Sin correo -"})})]}),e.jsxs("p",{children:[e.jsx("b",{children:"Asunto"}),":",e.jsx("span",{className:"ms-1",children:s==null?void 0:s.subject})]}),e.jsxs("p",{children:[e.jsx("b",{children:"Mensaje"}),":",e.jsx("span",{className:"ms-1",children:s==null?void 0:s.description})]})]})]})};y((a,n)=>{N(a).render(e.jsx(C,{...n,title:"Mensajes",children:e.jsx(F,{...n})}))});
