var E=Object.defineProperty;var I=(s,r,n)=>r in s?E(s,r,{enumerable:!0,configurable:!0,writable:!0,value:n}):s[r]=n;var d=(s,r,n)=>(I(s,typeof r!="symbol"?r+"":r,n),n);import{j as t}from"./AboutHeader-CpM0iYLI.js";import{r as a}from"./index-B80Lgev0.js";import{c as P}from"./ReactAppend-CBRQCQGz.js";import{B as T}from"./Base-1lDDkOv7.js";import{C as M}from"./CreateReactScript-B4L7iD9b.js";import{T as G,D as v}from"./DxButton-Cze-ypGT.js";import{M as k}from"./Modal-DUfP1iw0.js";import{I as w}from"./InputFormGroup-aNCWUTCq.js";import{R as y}from"./ReactAppend-C-tNgxIf.js";import{I as A}from"./ImageFormGroup-CUCbODBj.js";import{S as N}from"./sweetalert2.all-Dh0rZL5X.js";import{B as q}from"./Results-B7SuXOZ7.js";import{Q as Y}from"./QuillFormGroup-D7flic0d.js";import{S as F,a as C}from"./SetSelectValue-ihwr0_xP.js";import"./index-DO3Aws4m.js";import"./tippy-react.esm-CHhA99mn.js";/* empty css              */import"./Logout-CuE5mwZG.js";import"./main-B2CtU6ez.js";import"./___vite-browser-external_commonjs-proxy-C9-083JZ.js";import"./index.esm-Cu-mVv1q.js";/* empty css               */class _ extends q{constructor(){super(...arguments);d(this,"path","admin/posts");d(this,"hasFiles",!0)}}const O=s=>(new DOMParser().parseFromString(s,"text/html").body.textContent||"").trim(),x=new _,Q=({})=>{const s=a.useRef(),r=a.useRef(),n=a.useRef(),u=a.useRef(),p=a.useRef(),c=a.useRef(),f=a.useRef(),l=a.useRef(),g=a.useRef(),[D,R]=a.useState(!1),h=e=>{var o,i;e!=null&&e.id?R(!0):R(!1),n.current.value=(e==null?void 0:e.id)??"",u.current.value=(e==null?void 0:e.name)??"",C(p.current,(o=e==null?void 0:e.category)==null?void 0:o.id,(i=e==null?void 0:e.category)==null?void 0:i.name),c.editor.root.innerHTML=(e==null?void 0:e.description)??"",l.image.src=`/api/posts/media/${e==null?void 0:e.image}`,l.current.value=null,C(f.current,(e==null?void 0:e.tags)??[],"id","name"),g.current.value=(e==null?void 0:e.post_date)??moment().format("YYYY-MM-DD"),$(r.current).modal("show")},B=async e=>{e.preventDefault();const o={id:n.current.value||void 0,name:u.current.value,category_id:p.current.value,summary:O(c.current.value),description:c.current.value,tags:$(f.current).val(),post_date:g.current.value},i=new FormData;for(const j in o)i.append(j,o[j]);const m=l.current.files[0];m&&i.append("image",m),await x.save(i)&&($(s.current).dxDataGrid("instance").refresh(),$(r.current).modal("hide"))},S=async e=>{const{isConfirmed:o}=await N.fire({title:"Eliminar registro",text:"¿Estas seguro de eliminar este registro?",icon:"warning",showCancelButton:!0,confirmButtonText:"Si, eliminar",cancelButtonText:"Cancelar"});!o||!await x.delete(e)||$(s.current).dxDataGrid("instance").refresh()};return t.jsxs(t.Fragment,{children:[t.jsx(G,{gridRef:s,title:"Posts",rest:x,toolBar:e=>{e.unshift({widget:"dxButton",location:"after",options:{icon:"refresh",hint:"Refrescar tabla",onClick:()=>$(s.current).dxDataGrid("instance").refresh()}}),e.unshift({widget:"dxButton",location:"after",options:{icon:"plus",text:"Nuevo registro",hint:"Nuevo registro",onClick:()=>h()}})},columns:[{dataField:"id",caption:"ID",visible:!1},{dataField:"category.name",caption:"Categoría"},{dataField:"name",caption:"Título",cellTemplate:(e,{data:o})=>{var i;y(e,t.jsxs(t.Fragment,{children:[o.name,t.jsx("br",{}),(i=o.tags)==null?void 0:i.map((m,b)=>t.jsx("span",{className:"badge badge-soft-success me-1",children:m.name},b))]}))}},{dataField:"image",caption:"Imagen",width:"90px",cellTemplate:(e,{data:o})=>{y(e,t.jsx("img",{src:`/api/sliders/media/${o.image}`,style:{width:"80px",height:"48px",objectFit:"cover",objectPosition:"center",borderRadius:"4px"},onError:i=>i.target.src="/api/cover/thumbnail/null"}))}},{caption:"Acciones",cellTemplate:(e,{data:o})=>{e.append(v({className:"btn btn-xs btn-soft-primary",title:"Editar",icon:"fa fa-pen",onClick:()=>h(o)})),e.append(v({className:"btn btn-xs btn-soft-danger",title:"Eliminar",icon:"fa fa-trash",onClick:()=>S(o.id)}))},allowFiltering:!1,allowExporting:!1}]}),t.jsx(k,{modalRef:r,title:D?"Editar post":"Agregar post",onSubmit:B,size:"md",children:t.jsxs("div",{className:"row",id:"posts-container",children:[t.jsx("input",{ref:n,type:"hidden"}),t.jsx(A,{eRef:l,label:"Imagen"}),t.jsx(F,{eRef:p,searchAPI:"/api/admin/categories/paginate",searchBy:"name",label:"Categoría",required:!0,dropdownParent:"#posts-container"}),t.jsx(w,{eRef:u,label:"Título",rows:2,required:!0}),t.jsx(Y,{eRef:c,label:"Contenido"}),t.jsx(F,{id:"tags",eRef:f,searchAPI:"/api/admin/tags/paginate",searchBy:"name",label:"Tags",dropdownParent:"#posts-container",tags:!0,multiple:!0}),t.jsx(w,{eRef:g,label:"Fecha de publicación",type:"date",required:!0})]})})]})};M((s,r)=>{P(s).render(t.jsx(T,{...r,title:"Posts",children:t.jsx(Q,{...r})}))});
