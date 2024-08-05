var U=Object.defineProperty;var P=(s,n,r)=>n in s?U(s,n,{enumerable:!0,configurable:!0,writable:!0,value:r}):s[n]=r;var z=(s,n,r)=>(P(s,typeof n!="symbol"?n+"":n,r),r);import{i as g,A as W}from"./Adminto-Ckx4Zi2i.js";import{R as e,a as L,C as V,c as J,r as a,m as A}from"./CreateReactScript-fryF6WsV.js";import{B as K}from"./BasicRest-4QHAt8VX.js";import{M as Q}from"./Modal-BlYbLNMj.js";import{I as i}from"./InputFormGroup-h37C16bz.js";import{S as R}from"./SelectFormGroup-DgCpZP3V.js";import{C as X}from"./CheckboxFormGroup-DG7ZdoUt.js";import{U as Y}from"./UsersByServicesByBusinessesRest-cXNvIK4h.js";import{S as Z}from"./sweetalert2.all-uggxmCrK.js";class O extends K{constructor(){super(...arguments);z(this,"path","business")}}const ee=({id:s,name:n,owner:r,person:c})=>e.createElement("div",{key:`business-${s}`,className:"card mb-0 border",style:{width:"240px",minHeight:"120px"}},e.createElement("div",{className:"card-body"},e.createElement("h5",{className:"mt-0 mb-1 text-truncate"},e.createElement("i",{className:"fa fa-building me-1"}),n),e.createElement("p",{className:"text-muted mb-1 font-13 text-truncate"},`${r==null?void 0:r.name} ${r==null?void 0:r.lastname}`.trim()||"Sin propietario"),e.createElement(L,{href:`/services?business=${c==null?void 0:c.document_number}`,className:"text-small text-blue"},e.createElement("b",null,"Administrar")))),te=new Y,ae=({uuid:s,name:n,APP_PROTOCOL:r,owner:c,my_services:u,APP_DOMAIN:E})=>{const v=async({invitation_accepted:o,invitation_token:d,correlative:b})=>{if(!o){location.href=`${r}//${E}/invitation/${d}`;return}await te.authorize({service:b,business:s})&&window.open(`${r}//${b}.${E}/home`)};return e.createElement("div",{key:`business-${s}`,className:"card mb-0 border",style:{width:"240px",minHeight:"120px"}},e.createElement("div",{className:"card-body"},e.createElement("h5",{className:"mt-0 mb-1 text-truncate"},e.createElement("i",{className:"fa fa-building me-1"}),n),e.createElement("p",{className:"text-muted mb-1 font-13 text-truncate"},`${c==null?void 0:c.name} ${c==null?void 0:c.lastname}`.trim()||"Sin propietario"),u.length==1?e.createElement(g,null,e.createElement("button",{className:"btn btn-xs btn-white",onClick:()=>v(u[0])},u[0].name," ",!u[0].invitation_accepted&&e.createElement("i",{className:"text-muted",style:{fontSize:"small"}},"Pendiente"))):e.createElement("div",{style:{position:"relative"}},e.createElement("button",{className:"btn btn-xs btn-light dropdown-toggle",type:"button",id:"dropdown-services-button","data-bs-toggle":"dropdown","aria-haspopup":"true","aria-expanded":"false"},"Ver servicios ",e.createElement("i",{className:"mdi mdi-chevron-down"})),e.createElement("div",{className:"dropdown-menu","aria-labelledby":"dropdown-services-button"},u.map((o,d)=>e.createElement("button",{key:`service-${d}`,className:"dropdown-item",target:"_blank",onClick:()=>v(o)},o.name," ",!o.invitation_accepted&&e.createElement("i",{className:"text-muted",style:{fontSize:"small"}},"Pendiente")))))))},ne=new O,re=({businesses:s,businessesIWork:n,economic_sectors:r=[],business_activities:c=[],session:u,APP_DOMAIN:E,APP_PROTOCOL:v})=>{a.useRef();const o=a.useRef(),d=a.useRef(),b=a.useRef(),f=a.useRef(),N=a.useRef(),h=a.useRef(),x=a.useRef(),y=a.useRef(),w=a.useRef(),C=a.useRef(),S=a.useRef(),k=a.useRef(),q=a.useRef(),D=a.useRef(),_=a.useRef(),[m,B]=a.useState(!1),[I,F]=a.useState(!1);a.useEffect(()=>{A.GET.message&&Z.fire({icon:"info",title:"Mensaje",text:A.GET.message,showConfirmButton:!1,timer:5e3}),history.pushState(null,null,"/businesses")},[null]);const G=t=>{var l,p,j,M;t!=null&&t.id?B(!0):B(!1),$('[href="#business-data"]').addClass("active"),$('[href="#owner-data"]').removeClass("active"),$("#business-data").addClass("active"),$("#owner-data").removeClass("active"),d.current.value=(t==null?void 0:t.id)||null,$(b.current).val((t==null?void 0:t.economic_sector_id)??null).trigger("change"),$(f.current).val((t==null?void 0:t.business_activity_id)??null).trigger("change"),N.current.value=(t==null?void 0:t.ruc)||null,h.current.value=(t==null?void 0:t.name)||null,x.current.value=(t==null?void 0:t.lastname)||null,$(y.current).val(((l=t==null?void 0:t.owner)==null?void 0:l.document_type)??"DNI").trigger("change"),w.current.value=((p=t==null?void 0:t.owner)==null?void 0:p.document_number)||null,C.current.value=((j=t==null?void 0:t.owner)==null?void 0:j.name)||null,S.current.value=((M=t==null?void 0:t.owner)==null?void 0:M.lastname)||null,$(o.current).modal("show")},T=async t=>{t.preventDefault();const l={id:d.current.value||void 0,economic_sector_id:b.current.value,economic_sector:$(b.current).find("option:selected").text(),business_activity_id:f.current.value,business_activity:$(f.current).find("option:selected").text(),business:{ruc:N.current.value,tradename:h.current.value,businessname:x.current.value},owner:{document_type:y.current.value,document_number:w.current.value,name:C.current.value,lastname:S.current.value}};I?l.contact=l.owner:l.contact={document_type:k.current.value,document_number:q.current.value,name:D.current.value,lastname:_.current.value};const p=await ne.save(l);p&&($(o.current).modal("hide"),location.href=`/services?business=${p.data}`)},H=async t=>{const l=t.target.value.replace(/\D/g,"");N.current.value=l,l.length<11};return e.createElement(e.Fragment,null,e.createElement("div",{className:"row"},e.createElement("div",{className:"col-md-6"},e.createElement("div",{className:"card"},e.createElement("h5",{className:"card-header"},"Mis empresas"),e.createElement("div",{className:"card-body d-flex gap-2 justify-content-center flex-wrap"},e.createElement("div",{key:"business-create",className:"card mb-0 border",style:{width:"240px",minHeight:"120px",cursor:"pointer"},onClick:G},e.createElement("div",{className:"card-body d-flex gap-2 align-items-center justify-content-center flex-column"},e.createElement("i",{className:"fa fa-plus"}),e.createElement("div",null," Crear empresa"))),s.map(t=>e.createElement(ee,{...t,session:u}))))),e.createElement("div",{className:"col-md-6"},e.createElement("div",{className:"card"},e.createElement("h5",{className:"card-header"},"Empresas en las que trabajo"),e.createElement("div",{className:"card-body d-flex gap-2 justify-content-center flex-wrap"},n.map(t=>e.createElement(ae,{...t,session:u,APP_DOMAIN:E,APP_PROTOCOL:v})))))),e.createElement(Q,{modalRef:o,title:m?"Editar empresa":"Agregar empresa",onSubmit:T,size:"md"},e.createElement("input",{ref:d,type:"hidden"}),e.createElement("ul",{className:"nav nav-pills navtab-bg nav-justified"},e.createElement("li",{className:"nav-item"},e.createElement(g,{content:"Datos de la empresa"},e.createElement("a",{href:"#business-data","data-bs-toggle":"tab","aria-expanded":"false",className:"nav-link active"},"Empresa"))),e.createElement("li",{className:"nav-item"},e.createElement(g,{content:"Datos del propietario"},e.createElement("a",{href:"#owner-data","data-bs-toggle":"tab","aria-expanded":"true",className:"nav-link"},"Propietario"))),e.createElement("li",{className:"nav-item"},e.createElement(g,{content:"Datos del contacto"},e.createElement("a",{href:"#contact-data","data-bs-toggle":"tab","aria-expanded":"true",className:"nav-link"},"Contacto")))),e.createElement("div",{className:"tab-content",style:{minHeight:"230px"}},e.createElement("div",{className:"tab-pane active",id:"business-data"},e.createElement("div",{className:"row"},e.createElement(i,{eRef:N,label:"RUC",col:"col-4",required:!0,onChange:H}),e.createElement(i,{eRef:h,label:"Nombre comercial",col:"col-8",required:!0}),e.createElement(i,{eRef:x,label:"Razon social",col:"col-12",required:!0}),e.createElement(R,{eRef:b,label:"Sector Economico",col:"col-md-5",dropdownParent:"#business-data",required:!0},r.map(t=>e.createElement("option",{key:t.id,value:t.id},t.name))),e.createElement(R,{eRef:f,label:"Actividad comercial",col:"col-md-7",dropdownParent:"#business-data",required:!0},c.map(t=>e.createElement("option",{key:t.id,value:t.id},t.name))))),e.createElement("div",{className:"tab-pane show",id:"owner-data"},e.createElement("div",{className:"row"},e.createElement(R,{eRef:y,label:"Tipo de documento",col:"col-md-6",dropdownParent:"#owner-data",disabled:m,required:!0},e.createElement("option",{value:"DNI"},"DNI - Documento Nacional de Identidad"),e.createElement("option",{value:"CE"},"CE - Carnet de Extranjeria")),e.createElement(i,{eRef:w,label:"Numero de documento",col:"col-md-6",disabled:m,required:!0}),e.createElement(i,{eRef:C,label:"Nombres",col:"col-6",disabled:m,required:!0}),e.createElement(i,{eRef:S,label:"Apellidos",col:"col-6",disabled:m,required:!0}))),e.createElement("div",{className:"tab-pane show",id:"contact-data"},e.createElement("div",{className:"row"},e.createElement("div",{className:"col-12 mb-2"},e.createElement(X,{className:"mx-auto",label:"El propietario es el contacto",title:"Marcar si el propietario y el contacto son la misma persona",style:{maxWidth:"max-content"},onChange:t=>F(t.target.checked)})),!I&&e.createElement(e.Fragment,null,e.createElement(R,{eRef:k,label:"Tipo de documento",col:"col-md-6",dropdownParent:"#contact-data",disabled:m,required:!0},e.createElement("option",{value:"DNI"},"DNI - Documento Nacional de Identidad"),e.createElement("option",{value:"CE"},"CE - Carnet de Extranjeria")),e.createElement(i,{eRef:q,label:"Numero de documento",col:"col-md-6",disabled:m,required:!0}),e.createElement(i,{eRef:D,label:"Nombres",col:"col-6",disabled:m,required:!0}),e.createElement(i,{eRef:_,label:"Apellidos",col:"col-6",disabled:m,required:!0})))))))};V((s,n)=>{J(s).render(e.createElement(W,{...n,title:"Empresas"},e.createElement(re,{...n})))});
