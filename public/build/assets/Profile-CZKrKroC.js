var h=Object.defineProperty;var j=(s,r,a)=>r in s?h(s,r,{enumerable:!0,configurable:!0,writable:!0,value:a}):s[r]=a;var f=(s,r,a)=>(j(s,typeof r!="symbol"?r+"":r,a),a);import{j as e}from"./Header-Bdo2C3ON.js";import{r as n}from"./index-DFv2mRv-.js";import{c as g}from"./ReactAppend-CwiwA4iz.js";import{C as b}from"./CreateReactScript-yWJ4gJYl.js";/* empty css              */import{B as N}from"./Base-BWYrdXi6.js";import{H as y}from"./HtmlContent-DlyYH2Wr.js";import{C as v}from"./CoachCard-pebjwBk1.js";import{h as w}from"./html2string-CfCixsO3.js";import{i as C}from"./tippy-react.esm-BVvHiWwH.js";import{S as $}from"./sweetalert2.all-DCeKQPlA.js";import{B as F}from"./Content-C1YkWUKj.js";import"./index-DgyC5pTR.js";import"./index.esm-B502ZfUP.js";import"./___vite-browser-external_commonjs-proxy-BQdpDcDf.js";import"./main-BBbUrZUL.js";/* empty css               */import"./Base-DwNOZvQN.js";import"./index-Cevqm-zP.js";class S extends F{constructor(){super(...arguments);f(this,"path","requests")}}const k=new S,q=({coach:s,country:r,countries:a,resources:m,coaches:x,session:p,hasRole:d})=>{let l=e.jsxs(n.Fragment,{children:["Iniciar sesion para ver opciones",e.jsx("i",{className:"ms-1 mdi mdi-arrow-top-right"})]}),o=()=>location.href="/login";return p&&(d("Admin")?(l=e.jsxs(n.Fragment,{children:["Ver solicitudes de ",s.name.split(" ")[0],e.jsx("i",{className:"ms-1 mdi mdi-file-document-edit"})]}),o=()=>location.href="/admin/solicitudes"):p.id===s.id?(l=e.jsxs(n.Fragment,{children:["Editar perfil",e.jsx("i",{className:"ms-1 mdi mdi-account-edit"})]}),o=()=>location.href="/coach/profile"):d("Coach")?(l=e.jsxs(n.Fragment,{children:["Ver recursos de ",s.name.split(" ")[0],e.jsx("i",{className:"ms-1 mdi mdi-cube"})]}),o=()=>{const t=document.getElementById("resources");t&&t.scrollIntoView({behavior:"smooth"})}):d("Coachee")&&(l=e.jsxs(n.Fragment,{children:["Quiero mi coach",e.jsx("i",{className:"ms-1 mdi mdi-whatsapp"})]}),o=async()=>{const{isConfirmed:t}=await $.fire({title:"¡Solicita tu coach!",text:"¿Deseas contactarte con este coach a través de WhatsApp?",icon:"question",showCancelButton:!0,confirmButtonText:"Sí, quiero contactarlo",cancelButtonText:"No, gracias"});!t||!await k.save({coach_id:s.id})||(s.phone?window.open(`https://wa.me/${s.phone_prefix||51}${s.phone}`,"_blank"):location.href="/coachee/requests")})),e.jsxs(e.Fragment,{children:[e.jsx("section",{className:"p-[5%] mt-[68px]",children:e.jsxs("div",{className:"flex flex-col-reverse md:flex-row gap-4 md:gap-8",children:[e.jsxs("div",{className:"md:w-2/3",children:[e.jsx("img",{className:"w-full aspect-[8/3] object-cover object-center rounded-lg",src:`/api/cover/${s.uuid}`,alt:"Cover Photo"}),e.jsxs("div",{className:"flex gap-4 my-[5%] items-center",children:[e.jsx("img",{className:"w-24 h-24 rounded-full object-cover object-center",src:`/api/profile/${s.uuid}`,alt:"Profile Photo"}),e.jsxs("div",{children:[e.jsxs("h1",{className:"text-2xl font-bold",children:[s.name," ",s.lastname]}),e.jsx("p",{children:s.title}),e.jsx("div",{children:s.specialties.length>0?s.specialties.map((t,i)=>e.jsx("span",{className:"bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded ",children:t.name},i)):e.jsx("i",{children:"- Sin especialidad -"})})]})]}),e.jsx("div",{className:"prose ql-editor",style:{all:"revert"},children:e.jsx(y,{html:s.description})}),e.jsx("div",{id:"resources",className:"scroll-mt-16"}),e.jsx("h3",{className:"text-lg font-bold mt-[5%] mb-[2.5%]",children:"Contenidos y temas"}),m.length>0&&e.jsx("div",{id:"accordion-flush","data-accordion":"collapse","data-active-classes":"text-gray-500 dark:text-gray-400","data-inactive-classes":"text-gray-500 dark:text-gray-400",children:m.map((t,i)=>{const c=i===0;return e.jsxs(n.Fragment,{children:[e.jsx("h2",{id:`accordion-heading-${i}`,children:e.jsxs("button",{type:"button",className:"flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:text-gray-400 gap-3","data-accordion-target":`#accordion-${i}`,"aria-expanded":c?"true":"false","aria-controls":`accordion-${i}`,children:[e.jsxs("span",{className:"text-left",children:[t.name,e.jsx(C,{content:"Ver recurso",children:e.jsx("a",{href:`/resources/${t.id}`,className:"py-1 px-3 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100",children:e.jsx("i",{className:"mdi mdi-arrow-top-right"})})})]}),e.jsx("i",{"data-accordion-icon":!0,className:`text-lg ${c?"rotate-180":""} shrink-0 fas fa-angle-down`})]})}),e.jsx("div",{id:`accordion-${i}`,className:`${c?"":"hidden"}`,"aria-labelledby":`accordion-heading-${i}`,children:e.jsx("div",{className:"py-5 border-b border-gray-200",children:e.jsx("p",{className:"line-clamp-4 text-ellipsis",children:w(t.description)})})})]},i)})})]}),e.jsxs("div",{className:"md:w-1/3 block md:sticky top-[15%] h-max",children:[e.jsxs("h2",{className:"text-2xl mb-4 font-bold",children:["S/. ",Number(s.price).toFixed(2)]}),e.jsxs("p",{className:"mb-2",children:[e.jsx("i",{className:"fas fa-globe-americas w-6"}),e.jsx("b",{children:"Nacionalidad"}),": ",r.name," - ",s.city]}),e.jsxs("p",{className:"mb-2",children:[e.jsx("i",{className:"fas fa-flag w-6"}),e.jsx("b",{children:"Experiencia"}),": ",s.experience>0?e.jsxs(e.Fragment,{children:[s.experience," años"]}):e.jsx("i",{children:"Sin experiencia"})]}),e.jsxs("p",{className:"mb-2",children:[e.jsx("i",{className:"fas fa-file-alt w-6"}),e.jsx("b",{children:"Resumen"}),": ",s.summary]}),e.jsx("button",{type:"button",className:"focus:outline-none text-white bg-[#ff5b5b] hover:bg-[#ff5b5bbb] focus:ring-4 focus:ring-[#ff5b5bdd] font-medium rounded-lg text-sm px-5 py-2.5 me-2 mt-4 ",onClick:o,children:l})]})]})}),x.length>0&&e.jsxs("section",{className:"p-[5%]",children:[e.jsx("h3",{className:"text-2xl font-bold mb-[2.5%]",children:"Otros Coaches"}),e.jsx("p",{className:"mb-[5%]",children:"Sus enfoques personalizados y estratégicos son la fórmula secreta detrás de innumerables historias de triunfo."}),e.jsx("section",{className:"grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-8",children:x.sort((t,i)=>t.price-i.price).map((t,i)=>{const c=a.find(u=>u.id==t.country);return e.jsx(v,{...t,country:c},i)})})]})]})};b((s,r)=>{g(s).render(e.jsx(N,{...r,children:e.jsx(q,{...r})}))});
