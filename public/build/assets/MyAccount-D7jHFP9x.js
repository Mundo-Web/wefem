var w=Object.defineProperty;var N=(r,s,l)=>s in r?w(r,s,{enumerable:!0,configurable:!0,writable:!0,value:l}):r[s]=l;var b=(r,s,l)=>(N(r,typeof s!="symbol"?s+"":s,l),l);import{j as e}from"./AboutHeader-CpM0iYLI.js";import{r as a}from"./index-B80Lgev0.js";import{c as F}from"./ReactAppend-CBRQCQGz.js";import{B as R}from"./Base-C8pp5Bpj.js";import{C as k}from"./CreateReactScript-B4L7iD9b.js";import{B as y}from"./Results-B7SuXOZ7.js";import{R as h}from"./ReactAppend-C-tNgxIf.js";import{N as E}from"./Number2Currency-e57Tgsuk.js";import{R as v}from"./index-B1nVdsa0.js";import{m as g}from"./main-B2CtU6ez.js";import{S as A}from"./sweetalert2.all-Dh0rZL5X.js";import{L as B}from"./Logout-CuE5mwZG.js";import"./index-DO3Aws4m.js";import"./tippy-react.esm-CHhA99mn.js";import"./Base-TVC2AMtK.js";import"./index.esm-Cu-mVv1q.js";import"./___vite-browser-external_commonjs-proxy-C9-083JZ.js";/* empty css               *//* empty css              */import"./index-CqrOtH36.js";class _ extends y{constructor(){super(...arguments);b(this,"path","customer/user-formulas")}}const S=new _,T=({id:r,name:s,created_at:l,has_treatment:t,scalp_type:o,hair_type:c,hair_goals:i,fragrance:u,index:m})=>{const[f,n]=a.useState(!1),d=a.useRef(),p=async x=>{if(s==d.current.value)return n(!1);await S.save({id:r,name:d.current.value})&&n(!1)};return e.jsx("div",{className:"relative w-full",children:e.jsxs("div",{className:"relative bg-[#F7F7E7] p-4 rounded-xl w-full pb-8",children:[e.jsxs("div",{className:"flex flex-wrap items-center justify-between gap-2",children:[e.jsx("div",{children:f?e.jsx("input",{ref:d,type:"text",className:"w-full outline-none px-3 py-1 rounded-md",defaultValue:s,onBlur:p,autoFocus:!0}):e.jsx("span",{className:"text-lg font-bold",onClick:()=>n(!0),children:s||e.jsxs(e.Fragment,{children:["Fórmula ",m+1]})})}),e.jsxs("small",{children:["Creado el ",moment(l).format("ll")]})]}),e.jsxs("div",{className:"text-sm mt-2",children:[e.jsxs("div",{children:[e.jsx("b",{children:"🧐 Tratamiento"}),":"," ",t.description]}),e.jsxs("div",{children:[e.jsx("b",{children:"👀 Cuero cabelludo"}),": "," ",o.description]}),e.jsxs("div",{children:[e.jsx("b",{children:"✅ Tipo de cabello"}),":"," ",c.description]}),e.jsxs("div",{children:[e.jsx("b",{children:"💡 Objetivos"}),":"," ",i.map(x=>x.description).join(", ")]}),e.jsxs("div",{children:[e.jsx("b",{children:"🫙 Fragancia"}),":"," ",u.name]})]}),e.jsxs("button",{className:"absolute -bottom-4 bg-[#A191B8] text-sm text-white px-4 py-2 rounded-full",href:`/test/result/${r}`,children:["VOLVER A COMPRAR ",e.jsx("i",{className:"mdi mdi-arrow-top-right"})]})]})})};class C{}b(C,"save",async s=>{try{const{status:l,result:t}=await g.Fetch("/api/customer/profile",{method:"PATCH",body:JSON.stringify(s)});if(!l)throw new Error((t==null?void 0:t.message)||"Ocurrio un error inesperado");return g.Notify.add({icon:"/assets/img/icon.svg",title:"Correcto",body:t.message,type:"success"}),!0}catch(l){return g.Notify.add({icon:"/assets/img/icon.svg",title:"Error",body:l.message,type:"danger"}),!1}});const M=({gridRef:r,rest:s,columns:l,toolBar:t,masterDetail:o,filterValue:c,exportable:i,exportableName:u,customizeCell:m=()=>{},selectable:f=!1})=>(a.useEffect(()=>{DevExpress.localization.locale(navigator.language),$(r.current).dxDataGrid({language:"es",dataSource:{load:async n=>await s.paginate({...n,_token:$('[name="csrf_token"]').attr("content")})},onToolbarPreparing:n=>{const{items:d}=n.toolbarOptions;t(d)},remoteOperations:!0,columnResizingMode:"widget",allowColumnResizing:!0,allowColumnReordering:!0,columnAutoWidth:!0,scrollbars:"auto",filterPanel:{visible:!0},searchPanel:{visible:!0},headerFilter:{visible:!0,search:{enabled:!0}},height:"calc(100vh - 250px)",filterValue:c||null,export:{enabled:i},selection:f?{mode:"multiple",selectAllMode:"page"}:null,onExporting:function(n){var d=new ExcelJS.Workbook,p=d.addWorksheet("Main sheet");DevExpress.excelExporter.exportDataGrid({worksheet:p,component:n.component,customizeCell:function(x){m(x),x.excelCell.alignment={horizontal:"left",vertical:"top",...x.excelCell.alignment}}}).then(function(){d.xlsx.writeBuffer().then(function(x){saveAs(new Blob([x],{type:"application/octet-stream"}),`${u}.xlsx`)})})},rowAlternationEnabled:!0,showBorders:!0,filterRow:{visible:!0,applyFilter:"auto"},filterBuilderPopup:{visible:!1,position:{of:window,at:"top",my:"top",offset:{y:10}}},paging:{pageSize:10},pager:{visible:!0,allowedPageSizes:[5,10,25,50,100],showPageSizeSelector:!0,showInfo:!0,showNavigationButtons:!0},allowFiltering:!0,scrolling:{mode:"standard",useNative:!0,preloadEnabled:!0,rowRenderingMode:"standard"},columnChooser:{title:"Mostrar/Ocultar columnas",enabled:!0,mode:"select",search:{enabled:!0}},columns:l,masterDetail:o,onContentReady:(...n)=>{tippy(".tippy-here",{arrow:!0,animation:"scale"})}}).dxDataGrid("instance"),tippy(".dx-button",{arrow:!0})},[null]),e.jsx("div",{id:"grid-container",ref:r})),O=({title:r,gridRef:s,rest:l,columns:t,toolBar:o,masterDetail:c,filterValue:i,exportable:u=!1,customizeCell:m,selectable:f=!1})=>e.jsx(M,{exportableName:r,gridRef:s,rest:l,columns:t.filter(Boolean),toolBar:o,masterDetail:c,filterValue:i,exportable:u,customizeCell:m,selectable:f});class z extends y{constructor(){super(...arguments);b(this,"path","customer/sales")}}const D=new z,V=({items:r})=>{const s=a.useRef();return e.jsxs("div",{children:[e.jsx("h2",{className:"text-xl border-b pb-2 mb-4 font-bold",children:"Historial de compras 📃"}),e.jsx("div",{className:"p-0",children:e.jsx(O,{gridRef:s,rest:D,toolBar:l=>{l.unshift({widget:"dxButton",location:"after",options:{icon:"refresh",hint:"Refrescar tabla",onClick:()=>$(s.current).dxDataGrid("instance").refresh()}})},columns:[{caption:"Compra",width:"325px",cellTemplate:(l,{data:t})=>{var o;h(l,e.jsxs(e.Fragment,{children:[e.jsxs("b",{className:"block text-lg",children:["Compraste ",((o=t==null?void 0:t.bundle)==null?void 0:o.name)||"solo 1 producto"]}),e.jsxs("p",{children:[e.jsx("b",{children:"Formula"}),": ",t.formula.name??"Sin nombre"]}),e.jsxs("p",{children:[e.jsx("b",{children:"Envio a"}),": ",t==null?void 0:t.address," ",t==null?void 0:t.number,e.jsxs("small",{className:"opacity-75 block",children:[(t==null?void 0:t.province)??(t==null?void 0:t.district),", ",t==null?void 0:t.department,", ",t==null?void 0:t.country," ",(t==null?void 0:t.zip_code)&&e.jsxs(e.Fragment,{children:["- ",t==null?void 0:t.zip_code]})]})]})]}))}},{dataField:"total_amount",caption:"Total",dataType:"number",cellTemplate:(l,{data:t})=>{l.css({textAlign:"center",verticalAlign:"middle"}),l.text(`S/. ${E(t.total_amount)}`)}},{dataField:"status.name",caption:"Estado",cellTemplate:(l,{data:t})=>{l.css({verticalAlign:"middle"}),h(l,e.jsx("span",{className:"block mx-auto w-max px-2 py-1 rounded-full",style:{backgroundColor:t.status.color?`${t.status.color}2e`:"#3333332e",color:t.status.color??"#333"},children:t.status.name}))}},{dataField:"created_at",caption:"Fecha creacion",dataType:"datetime",format:"yyyy-MM-dd HH:mm:ss",sortOrder:"desc",cellTemplate:(l,{text:t})=>{l.css({textAlign:"center",verticalAlign:"middle"}),l.text(t)}}]})})]})};v.setAppElement("#app");const q=({session:r})=>{const[s,l]=a.useState(!1),t=a.useRef(),o=a.useRef(),c=a.useRef(),i=a.useRef(),u=a.useRef(),m=a.useRef(),f=async n=>{n.preventDefault(),await C.save({name:t.current.value,lastname:o.current.value,phone:c.current.value,address:i.current.value,address_number:u.current.value,address_reference:m.current.value})&&(A.fire({title:"Información actualizada",text:"Tu información se ha actualizado correctamente.",icon:"success",timer:1500,showConfirmButton:!1}),location.reload())};return a.useEffect(()=>(s?document.body.style.overflow="hidden":document.body.style.overflow="unset",()=>{document.body.style.overflow="unset"}),[s]),e.jsxs(e.Fragment,{children:[e.jsxs("div",{children:[e.jsx("h2",{className:"text-xl border-b pb-2 mb-4 font-bold",children:"Tu informacion personal"}),e.jsxs("div",{className:"flex flex-col gap-6 p-6 pb-10 items-start relative border bg-[#F7F7E7] rounded-3xl",children:[e.jsxs("div",{children:[e.jsx("b",{children:"Nombres y apellidos:"}),e.jsxs("p",{children:[r.name," ",r.lastname]})]}),e.jsxs("div",{children:[e.jsx("b",{children:"Correo electronico:"}),e.jsx("p",{children:r.email})]}),e.jsxs("div",{children:[e.jsx("b",{children:"Telefono:"}),e.jsx("p",{children:r.phone||e.jsx("i",{className:"opacity-75",children:"- Sin telefono -"})})]}),e.jsxs("div",{children:[e.jsx("b",{children:"Direccion:"}),e.jsxs("p",{children:[(r==null?void 0:r.address)||"Sin direccion"," ",(r==null?void 0:r.address_number)||"SN",e.jsxs("small",{className:"opacity-75 block -mt-1",children:[(r==null?void 0:r.province)??(r==null?void 0:r.district),", ",r==null?void 0:r.department,", ",r==null?void 0:r.country," ",(r==null?void 0:r.zip_code)&&e.jsxs(e.Fragment,{children:["- ",r==null?void 0:r.zip_code]})]})]})]}),e.jsxs("button",{className:"absolute -bottom-4 bg-[#A191B8] text-sm text-white px-4 py-2 rounded-full",onClick:()=>l(!0),children:[e.jsx("i",{className:"mdi mdi-pencil"})," EDITAR INFORMACION"]})]})]}),e.jsx(v,{isOpen:s,onRequestClose:()=>l(!1),className:"absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 bg-white p-10 rounded-2xl shadow-lg w-[95%] max-w-lg max-h-[95vh] overflow-y-auto",overlayClassName:"fixed inset-0 bg-black bg-opacity-50 z-50",children:e.jsxs("form",{onSubmit:f,children:[e.jsxs("div",{class:"grid gap-6 mb-6 md:grid-cols-6",children:[e.jsxs("div",{className:"md:col-span-3",children:[e.jsx("label",{for:"first_name",class:"block mb-2 text-sm font-medium text-gray-900",children:"Nombres"}),e.jsx("input",{ref:t,type:"text",class:"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#F7C2C6] focus:border-[#F7C2C6] block w-full p-2.5 outline-none",required:!0,defaultValue:r.name})]}),e.jsxs("div",{className:"md:col-span-3",children:[e.jsx("label",{for:"last_name",class:"block mb-2 text-sm font-medium text-gray-900",children:"Apellidos"}),e.jsx("input",{ref:o,type:"text",class:"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#F7C2C6] focus:border-[#F7C2C6] block w-full p-2.5 outline-none",required:!0,defaultValue:r.lastname})]}),e.jsxs("div",{className:"col-span-6",children:[e.jsx("label",{for:"last_name",class:"block mb-2 text-sm font-medium text-gray-900",children:"Correo"}),e.jsx("input",{type:"text",class:"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#F7C2C6] focus:border-[#F7C2C6] block w-full p-2.5 outline-none disabled:cursor-not-allowed disabled:bg-gray-100",required:!0,defaultValue:r.email,disabled:!0})]}),e.jsxs("div",{className:"md:col-span-3",children:[e.jsx("label",{for:"first_name",class:"block mb-2 text-sm font-medium text-gray-900",children:"Pais"}),e.jsx("input",{type:"text",class:"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#F7C2C6] focus:border-[#F7C2C6] block w-full p-2.5 outline-none disabled:cursor-not-allowed disabled:bg-gray-100",required:!0,defaultValue:"Perú",disabled:!0})]}),e.jsxs("div",{className:"md:col-span-3",children:[e.jsx("label",{for:"last_name",class:"block mb-2 text-sm font-medium text-gray-900",children:"Teléfono"}),e.jsx("input",{ref:c,type:"text",class:"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#F7C2C6] focus:border-[#F7C2C6] block w-full p-2.5 outline-none",required:!0,defaultValue:r.phone})]}),e.jsxs("div",{className:"md:col-span-2",children:[e.jsx("label",{for:"first_name",class:"block mb-2 text-sm font-medium text-gray-900",children:"Departamento"}),e.jsx("input",{type:"text",class:"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#F7C2C6] focus:border-[#F7C2C6] block w-full p-2.5 outline-none disabled:cursor-not-allowed disabled:bg-gray-100",required:!0,defaultValue:r.department,disabled:!0})]}),e.jsxs("div",{className:"md:col-span-2",children:[e.jsx("label",{for:"last_name",class:"block mb-2 text-sm font-medium text-gray-900",children:"Provincia"}),e.jsx("input",{type:"text",class:"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#F7C2C6] focus:border-[#F7C2C6] block w-full p-2.5 outline-none disabled:cursor-not-allowed disabled:bg-gray-100",required:!0,defaultValue:r.province,disabled:!0})]}),e.jsxs("div",{className:"md:col-span-2",children:[e.jsx("label",{for:"last_name",class:"block mb-2 text-sm font-medium text-gray-900",children:"Distrito"}),e.jsx("input",{type:"text",class:"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#F7C2C6] focus:border-[#F7C2C6] block w-full p-2.5 outline-none disabled:cursor-not-allowed disabled:bg-gray-100",required:!0,defaultValue:r.district,disabled:!0})]}),e.jsxs("div",{className:"md:col-span-4",children:[e.jsx("label",{for:"last_name",class:"block mb-2 text-sm font-medium text-gray-900",children:"Dirección"}),e.jsx("input",{ref:i,type:"text",class:"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#F7C2C6] focus:border-[#F7C2C6] block w-full p-2.5 outline-none disabled:cursor-not-allowed",required:!0,defaultValue:r.address})]}),e.jsxs("div",{className:"md:col-span-2",children:[e.jsx("label",{for:"last_name",class:"block mb-2 text-sm font-medium text-gray-900",children:"Número"}),e.jsx("input",{ref:u,type:"text",class:"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#F7C2C6] focus:border-[#F7C2C6] block w-full p-2.5 outline-none disabled:cursor-not-allowed",required:!0,defaultValue:r.address_number})]}),e.jsxs("div",{className:"col-span-6",children:[e.jsx("label",{for:"last_name",class:"block mb-2 text-sm font-medium text-gray-900",children:"Referencia"}),e.jsx("input",{ref:m,type:"text",class:"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#F7C2C6] focus:border-[#F7C2C6] block w-full p-2.5 outline-none disabled:cursor-not-allowed",required:!0,defaultValue:r.address_reference})]})]}),e.jsxs("button",{className:"bg-[#A191B8] text-sm text-white px-4 py-2 rounded-full",children:[e.jsx("i",{className:"fa fa-save me-2"}),"GUARDAR INFORMACIÓN"]})]})})]})},j=({items:r})=>e.jsxs("div",{children:[e.jsx("h2",{className:"text-xl border-b pb-2 mb-4 font-bold",children:"Tus fórmulas 🫧"}),e.jsxs("div",{className:"flex flex-col gap-12 pb-4 items-center relative",children:[r.length==0&&e.jsxs("div",{className:"mx-auto text-center",children:[e.jsx("h1",{className:"text-2xl font-bold mb-4",children:"Ups!"}),e.jsx("p",{className:"text-sm mb-4",children:"Al parecer no tienes formulas"}),e.jsx("button",{href:"/test",className:"rounded-full px-3 py-2 text-white bg-[#A191B8] text-sm",children:"CREA TU FORMULA"})]}),r.map((s,l)=>e.jsx(T,{...s,index:l},l))]})]}),P=({session:r,formulas:s,sales:l})=>{const[t,o]=a.useState("formulas"),c=()=>{switch(t){case"formulas":return e.jsx(j,{items:s});case"purchases":return e.jsx(V,{items:l});case"informacion":return e.jsx(q,{session:r});default:return e.jsx(j,{})}};return e.jsx(e.Fragment,{children:e.jsxs("section",{className:"px-[5%] md:px-[7.5%] lg:px-[10%] py-[5%] bg-[#F9F3EF] text-[#404040]",children:[e.jsxs("h2",{className:"text-2xl font-bold mb-4",children:["¡Bienvenid@, ",r.name.split(" ")[0],"! ✨"]}),e.jsxs("div",{className:"flex flex-col md:flex-row gap-5",children:[e.jsx("div",{className:"w-full md:w-1/3 lg:w-1/4 md:bg-[#EFBEC1] rounded-xl",children:e.jsxs("ul",{className:"text-center md:text-start text-[#404040] md:text-white grid sm:grid-cols-2 md:flex md:flex-col gap-2 text-sm font-light tracking-wider md:p-4",children:[e.jsx("li",{className:`px-4 py-2 border-[#404040] border md:border-none hover:bg-[#EFBEC1] md:hover:bg-[#ffffff33] rounded cursor-pointer ${t==="formulas"&&"bg-[#EFBEC1] md:bg-[#ffffff33] text-white"}`,onClick:()=>o("formulas"),children:"Fórmulas creadas"}),e.jsx("li",{className:`px-4 py-2 border-[#404040] border md:border-none hover:bg-[#EFBEC1] md:hover:bg-[#ffffff33] rounded cursor-pointer ${t==="purchases"&&"bg-[#EFBEC1] md:bg-[#ffffff33] text-white"}`,onClick:()=>o("purchases"),children:"Mis compras"}),e.jsx("li",{className:`px-4 py-2 border-[#404040] border md:border-none hover:bg-[#EFBEC1] md:hover:bg-[#ffffff33] rounded cursor-pointer ${t==="informacion"&&"bg-[#EFBEC1] md:bg-[#ffffff33] text-white"}`,onClick:()=>o("informacion"),children:"Información personal"}),e.jsx("li",{className:"px-4 py-2 border-[#404040] border md:border-none hover:bg-[#EFBEC1] md:hover:bg-[#ffffff33] rounded cursor-pointer",onClick:B,children:"Cerrar sesión"})]})}),e.jsx("div",{className:"bg-white p-4 w-full md:w-2/3 lg:w-3/4 rounded-xl",children:c()})]})]})})};k((r,s)=>{F(r).render(e.jsx(R,{...s,children:e.jsx(P,{...s})}))});
