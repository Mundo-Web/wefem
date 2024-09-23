var k=Object.defineProperty;var I=(n,s,c)=>s in n?k(n,s,{enumerable:!0,configurable:!0,writable:!0,value:c}):n[s]=c;var M=(n,s,c)=>(I(n,typeof s!="symbol"?s+"":s,c),c);import{j as o}from"./AboutHeader-Bdo2C3ON.js";import{r}from"./index-DFv2mRv-.js";import{I as i}from"./InputFormGroup-DbvUCzmO.js";import{M as P}from"./Modal-D7iJK3me.js";import{S as T}from"./sweetalert2.all-DCeKQPlA.js";import{B as A}from"./Content-Cysyxekg.js";const v=({id:n,col:s,label:c,eRef:l,required:t=!1,children:u,dropdownParent:m,multiple:a=!1,disabled:f=!1,onChange:p=()=>{},templateResult:h,templateSelection:x})=>(l||(l=r.useRef()),n||(n=`select-${crypto.randomUUID()}`),r.useEffect(()=>{$(l.current).select2({dropdownParent:m,templateResult:h,templateSelection:x}),$(l.current).on("change",p)},[m]),o.jsxs("div",{className:`form-group ${s} mb-2`,children:[o.jsxs("label",{htmlFor:n,className:"mb-1",children:[c," ",c&&t&&o.jsx("b",{className:"text-danger",children:"*"})]}),o.jsx("select",{ref:l,id:n,required:t,className:"form-control",style:{width:"100%"},disabled:f,multiple:a,children:u})]}));class B extends A{constructor(){super(...arguments);M(this,"path","coach/agreements")}}const G=new B,K=({dataLoaded:n,setDataLoaded:s,onSave:c=()=>{}})=>{const l=r.useRef(),t=r.useRef(),u=r.useRef(),m=r.useRef(),a=r.useRef(),f=r.useRef(),p=r.useRef(),h=r.useRef(),x=r.useRef(),j=r.useRef(),R=r.useRef(),g=r.useRef(),y=r.useRef(),b=r.useRef(),_=r.useRef(),w=r.useRef(),q=r.useRef(),N=r.useRef(),[C,S]=r.useState(!1);r.useEffect(()=>{$(l.current).on("hidden.bs.modal",()=>s(null))},[null]),r.useEffect(()=>{n&&D(n)},[n]);const D=e=>{e!=null&&e.id?S(!0):S(!1),t.current.value=(e==null?void 0:e.id)||null,u.current.value=(e==null?void 0:e.request_id)||null,m.current.value=e!=null&&e.contract_number?"C"+String(e==null?void 0:e.contract_number).padStart(3,"0"):"C-001",a.current.value=(e==null?void 0:e.sessions)||null,$(f.current).val((e==null?void 0:e.process_type)||"coaching").trigger("change"),p.current.value=(e==null?void 0:e.process_topic)||null,h.current.value=(e==null?void 0:e.session_duration)||null,$(x.current).val((e==null?void 0:e.session_frequency)||"weekly").trigger("change"),$(j.current).val((e==null?void 0:e.day)||"L").trigger("change"),R.current.value=(e==null?void 0:e.time)||null,g.current.value=(e==null?void 0:e.location)||null,y.current.value=(e==null?void 0:e.start_date)||null,$(b.current).val((e==null?void 0:e.payment_frequency)||"weekly").trigger("change"),_.current.value=(e==null?void 0:e.total_amount)||null,$(w.current).val((e==null?void 0:e.installments)||1).trigger("change"),q.current.value=(e==null?void 0:e.payment_start_date)||null,N.current.value=(e==null?void 0:e.schedule_change_notice)||null,$(l.current).modal("show")},E=async e=>{e.preventDefault();const{isConfirmed:d}=await T.fire({title:"Confirmar",text:"¿Está seguro de guardar los cambios?",icon:"question",showCancelButton:!0,confirmButtonText:"Guardar",cancelButtonText:"Cancelar"});if(!d)return;const F={request_id:u.current.value,sessions:a.current.value,process_type:f.current.value,process_topic:p.current.value,session_duration:h.current.value,session_frequency:x.current.value,day:j.current.value,time:R.current.value,location:g.current.value,start_date:y.current.value,payment_frequency:b.current.value,total_amount:_.current.value,installments:w.current.value,payment_start_date:q.current.value,schedule_change_notice:N.current.value};await G.save(F)&&(c(),$(l.current).modal("hide"))};return o.jsxs(P,{modalRef:l,title:C?`Modificar acuerdo - C${String(n==null?void 0:n.contract_number).padStart(3,"0")}`:"Redactar acuerdo",onSubmit:E,size:"full-width",isStatic:!0,children:[o.jsx("input",{ref:t,type:"hidden"}),o.jsx("input",{ref:u,type:"hidden"}),o.jsxs("div",{className:"row",children:[o.jsx("h5",{className:"text-info",children:"Datos del acuerdo"}),o.jsx(i,{eRef:m,label:"N° Contrato",col:"col-md-4 col-sm-6 col-xs-12",type:"text",id:"contrato",value:"C097",readOnly:!0}),o.jsx(i,{eRef:a,label:"Número de sesiones",col:"col-md-4 col-sm-6 col-xs-12",type:"number",id:"sesiones",required:!0,min:1})]}),o.jsxs("div",{className:"row mt-2",id:"conditions-container",children:[o.jsx("h5",{className:"text-info",children:"Condiciones para el proceso de coaching"}),o.jsx("p",{children:"Hemos acordado para este proceso sujetarnos a las condiciones que se mencionan a continuación:"}),o.jsxs(v,{eRef:f,label:"Tipo de proceso",col:"col-md-4 col-sm-6 col-xs-12",dropdownParent:"#conditions-container",id:"tipoProceso",required:!0,children:[o.jsx("option",{value:"coaching",children:"Coaching"}),o.jsx("option",{value:"mentoring",children:"Mentoring"})]}),o.jsx(i,{eRef:p,label:"Tema del proceso",col:"col-md-8 col-sm-6 col-xs-12",type:"text",id:"temaProceso",required:!0})]}),o.jsxs("div",{className:"row",id:"duration-container",children:[o.jsx(i,{eRef:h,label:"Duración de sesiones (solo Nro horas)",col:"col-md-4 col-sm-6 col-xs-12",type:"number",id:"duracionSesiones",required:!0,min:1}),o.jsxs(v,{eRef:x,label:"Frecuencia de sesión",col:"col-md-4 col-sm-6 col-xs-12",id:"frecuenciaSesion",dropdownParent:"#duration-container",required:!0,children:[o.jsx("option",{value:"weekly",children:"Semanal"}),o.jsx("option",{value:"biweekly",children:"Quincenal"}),o.jsx("option",{value:"monthly",children:"Mensual"})]}),o.jsxs(v,{eRef:j,label:"Día",col:"col-md-4 col-sm-6 col-xs-12",id:"dia",dropdownParent:"#duration-container",required:!0,children:[o.jsx("option",{value:"D",children:"Domingo"}),o.jsx("option",{value:"L",children:"Lunes"}),o.jsx("option",{value:"M",children:"Martes"}),o.jsx("option",{value:"X",children:"Miércoles"}),o.jsx("option",{value:"J",children:"Jueves"}),o.jsx("option",{value:"V",children:"Viernes"}),o.jsx("option",{value:"S",children:"Sábado"})]})]}),o.jsxs("div",{className:"row",children:[o.jsx(i,{eRef:R,label:"Horario",col:"col-md-4 col-sm-6 col-xs-12",type:"time",id:"horario",required:!0}),o.jsx(i,{eRef:g,label:"Lugar",col:"col-md-4 col-sm-6 col-xs-12",type:"text",id:"lugar",placeholder:"Espacio físico o link de reunión remota",required:!0}),o.jsx(i,{eRef:y,label:"Fecha de Inicio",col:"col-md-4 col-sm-6 col-xs-12",type:"date",id:"fechaInicio",required:!0})]}),o.jsxs("div",{className:"row mt-2",id:"billing-container",children:[o.jsx("h5",{className:"text-info",children:"Datos de facturacion"}),o.jsxs(v,{eRef:b,label:"Frecuencia de pago",col:"col-md-4 col-sm-6 col-xs-12",id:"frecuenciaPago",dropdownParent:"#billing-container",required:!0,children:[o.jsx("option",{value:"weekly",children:"Semanal"}),o.jsx("option",{value:"biweekly",children:"Quincenal"}),o.jsx("option",{value:"monthly",children:"Mensual"})]}),o.jsx(i,{eRef:_,label:"Monto total de servicio",col:"col-md-4 col-sm-6 col-xs-12",type:"number",id:"montoTotal",required:!0}),o.jsx(v,{eRef:w,label:"Cantidad de cuotas",col:"col-md-4 col-sm-6 col-xs-12",id:"cantidadCuotas",defaultValue:"1",dropdownParent:"#billing-container",required:!0,children:new Array(10).fill(null).map((e,d)=>o.jsx("option",{value:d+1,children:d+1},d))}),o.jsx(i,{eRef:q,label:"Fecha de inicio de pago de cuota",col:"col-md-4 col-sm-6 col-xs-12",type:"date",id:"fechaInicioPago",required:!0})]}),o.jsxs("div",{className:"row mt-2",children:[o.jsx("h5",{className:"text-info",children:"Otros aspectos importantes"}),o.jsxs("div",{className:"col-12",children:[o.jsx("h6",{children:"Modificaciones de Horarios"}),o.jsxs("p",{children:["Si surgiera algún cambio o impedimento del último momento, por favor avisarme con",o.jsx("input",{ref:N,type:"text",id:"anticipacionAviso",placeholder:"ej. 24 horas",className:"d-inline-block form-control form-control-sm mx-2",style:{width:"150px"},required:!0}),"de anticipación por lo menos y coordinaremos una nueva cita, yo por mi parte haré lo mismo."]})]})]})]})};export{B as A,K as M};
