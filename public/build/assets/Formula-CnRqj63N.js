var z=Object.defineProperty;var O=(b,i,g)=>i in b?z(b,i,{enumerable:!0,configurable:!0,writable:!0,value:g}):b[i]=g;var F=(b,i,g)=>(O(b,typeof i!="symbol"?i+"":i,g),g);import{j as e}from"./AboutHeader-CpM0iYLI.js";import{r as y}from"./index-B80Lgev0.js";import{c as I}from"./ReactAppend-CBRQCQGz.js";import{B as M}from"./Base-C8pp5Bpj.js";import{G as T,C as Q}from"./CreateReactScript-B4L7iD9b.js";import{N as k}from"./Number2Currency-e57Tgsuk.js";import{m as v}from"./main-B2CtU6ez.js";import{A}from"./CallToAction-Y9yYs4wC.js";import{i as L}from"./tippy-react.esm-CHhA99mn.js";import{c as P}from"./createLucideIcon-Cx5eUsrb.js";import"./index-DO3Aws4m.js";import"./Base-TVC2AMtK.js";import"./index-B1nVdsa0.js";import"./index-CqrOtH36.js";import"./index.esm-Cu-mVv1q.js";import"./___vite-browser-external_commonjs-proxy-C9-083JZ.js";/* empty css               *//* empty css              *//**
 * @license lucide-react v0.445.0 - ISC
 *
 * This source code is licensed under the ISC license.
 * See the LICENSE file in the root directory of this source tree.
 */const G=P("CreditCard",[["rect",{width:"20",height:"14",x:"2",y:"5",rx:"2",key:"ynyp8z"}],["line",{x1:"2",x2:"22",y1:"10",y2:"10",key:"1b3vmo"}]]);/**
 * @license lucide-react v0.445.0 - ISC
 *
 * This source code is licensed under the ISC license.
 * See the LICENSE file in the root directory of this source tree.
 */const H=P("Headphones",[["path",{d:"M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3",key:"1xhozi"}]]);/**
 * @license lucide-react v0.445.0 - ISC
 *
 * This source code is licensed under the ISC license.
 * See the LICENSE file in the root directory of this source tree.
 */const R=P("ShieldCheck",[["path",{d:"M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z",key:"oel41y"}],["path",{d:"m9 12 2 2 4-4",key:"dzmm74"}]]);class E{}F(E,"order",async(i,g)=>{try{const{status:f,result:d}=await v.Fetch("/api/culqi/order",{method:"POST",body:v.JSON.stringify({sale:i,details:g})});if(!f)throw new Error((d==null?void 0:d.message)||"Ocurrio un error inesperado");return v.Notify.add({icon:"/assets/img/icon.svg",title:"Correcto",body:d.message,type:"success"}),d}catch(f){return v.Notify.add({icon:"/assets/img/icon.svg",title:"Error",body:f.message,type:"danger"}),null}}),F(E,"token",async(i,g)=>{try{const{status:f,result:d}=await v.Fetch("/api/culqi/token",{method:"POST",body:v.JSON.stringify({sale:i,details:g})});if(!f)throw new Error((d==null?void 0:d.message)||"Ocurrio un error inesperado");return v.Notify.add({icon:"/assets/img/icon.svg",title:"Correcto",body:d.message,type:"success"}),d}catch(f){return v.Notify.add({icon:"/assets/img/icon.svg",title:"Error",body:f.message,type:"danger"}),null}});const J=({goToNextPage:b,items:i=[],bundles:g=[]})=>{const f=v.Local.get("vua_cart")??[],[d,n]=y.useState(f.filter(r=>!!i.find(x=>r.id==x.id))??[]),m=d.reduce((r,x)=>r+x.price*x.quantity,0),s=(r,x)=>{const h=r.target.checked;n(h?w=>[...w,{...x,quantity:1}]:w=>w.filter(N=>N.id!=x.id))},l=d.reduce((r,x)=>r+x.quantity,0),u=g.filter(r=>{switch(r.comparator){case"<":return l<r.items_quantity;case">":return l>r.items_quantity;default:return l==r.items_quantity}}).sort((r,x)=>x.percentage-r.percentage),c=(u==null?void 0:u[0])??null,o=m*(1-((c==null?void 0:c.percentage)||0)),p=r=>{d.find(x=>x.id==r.id)?n(x=>x.map(h=>(h.id==r.id&&h.quantity++,h))):(document.getElementById(`item-${r.id}`).checked=!0,n(x=>[...x,{...r,quantity:1}]))},j=r=>{n(x=>x.map(h=>(h.id==r.id&&h.quantity--,h.quantity<=0?document.getElementById(`item-${r.id}`).checked=!1:h)).filter(Boolean))};return y.useEffect(()=>{v.Local.set("vua_cart",d)},[d]),y.useEffect(()=>{A.init()},[null]),e.jsxs("form",{className:"px-[3%] lg:px-[10%] py-[10%] md:py-[7.5%] lg:py-[5%] bg-[#F9F3EF] text-center text-[#404040]",children:[e.jsxs("div",{className:"max-w-2xl mx-auto ",children:[e.jsx("h1",{className:"text-2xl font-bold mb-2",children:"¡Selecciona tus productos personalizados!"}),e.jsx("p",{className:"mb-8 text-sm font-extralight",children:"Para mejores resultados arma una rutina completa ✨"})]}),e.jsx("div",{className:"max-w-4xl mx-auto mb-8",children:e.jsx("div",{className:"flex flex-wrap items-center justify-center gap-4",children:i.map((r,x)=>{const h=d.find(N=>N.id==r.id),w=(h==null?void 0:h.quantity)??0;return e.jsxs("div",{className:"flex flex-col w-[180px] whitespace-nowrap","data-aos":"fade-up",children:[e.jsx("input",{type:"checkbox",name:"",id:`item-${r.id}`,className:"peer hidden",onChange:N=>s(N,r),checked:!!h,required:!0}),e.jsxs("label",{htmlFor:`item-${r.id}`,className:"flex overflow-hidden flex-col tracking-normal leading-none text-center bg-white rounded-xl border peer-checked:border-[#808080] peer-checked:shadow-md text-[#404040] cursor-pointer mb-3 transition-all",children:[e.jsx("img",{loading:"lazy",src:`/api/items/media/${r.image}`,className:"object-cover object-center aspect-[3/4] w-full border-b",alt:"Shampoo product image",onError:N=>N.target.src="/assets/img/routine/conditioner.png"}),e.jsx("h2",{className:"self-center px-4 py-3",children:r.name})]}),e.jsxs("div",{className:"flex gap-5 justify-between items-center self-center py-1 text-sm bg-transparent rounded-lg border border-[#808080] w-[70%] px-4 font-bold",children:[e.jsx("button",{type:"button",className:"disabled:cursor-not-allowed",onClick:()=>j(r),disabled:w<=0,children:"-"}),e.jsx("span",{children:w}),e.jsx("button",{type:"button",className:"disabled:cursor-not-allowed",onClick:()=>p(r),children:"+"})]})]},x)})})}),e.jsxs("div",{className:"max-w-2xl mx-auto mt-5 sm:mt-8 lg:mt-10 px-[3%]",children:[e.jsx("p",{className:"text-sm",children:"Descubre cómo ahorrar aún más al final 👀"}),e.jsxs("div",{className:"flex flex-col sm:flex-row gap-4 justify-between items-center bg-[#EFBEC1] text-white rounded-3xl mt-4 py-4 px-[5%] font-extrabold shadow-lg",children:[e.jsxs("div",{className:"text-xl text-start",children:["Elegiste ",c?c.name:e.jsxs(e.Fragment,{children:[l," ",l==1?"producto":"productos"]}),c&&e.jsx("span",{className:"block text-xs font-light",children:c.description})]}),e.jsxs("div",{className:"flex flex-row text-white items-center gap-4",children:[m!=o&&e.jsxs("p",{className:"text-sm font-light line-through",children:["Antes: S/",k(m)]}),e.jsxs("h2",{className:"text-xl",children:["S/",k(o)]})]})]})]}),e.jsx("div",{className:"flex flex-wrap items-center justify-center gap-2 mx-auto md:mx-[12.5%] mt-5 sm:mt-10",children:e.jsx("button",{onClick:b,className:"bg-[#C5B8D4] text-white text-sm px-8 py-3 rounded mt-4 disabled:cursor-not-allowed",disabled:l==0,children:"SIGUIENTE"})})]})},U=({goToNextPage:b,items:i=[]})=>{const[g,f]=y.useState(v.Local.get("vua_cart")??[]);y.useEffect(()=>{f(n=>n.map(m=>{var p;const s=((p=i.find(j=>j.id==m.id))==null?void 0:p.colors)??[],l=m.colors??[],u=m.quantity,c=u-l.length,o=new Array(c>0?c:0).fill((s==null?void 0:s[0])??null);return l.length<u?m.colors=[...l,...o].filter(Boolean):m.colors=l.slice(0,u).filter(Boolean),m}))},[null]);const d=(n,m,s)=>{f(l=>l.map(u=>(u.id==n&&(u.colors[m]=s),u)))};return y.useEffect(()=>{v.Local.set("vua_cart",g)},[g]),y.useEffect(()=>{A.init()},[null]),e.jsxs("section",{className:"px-[3%] lg:px-[10%] py-[10%] md:py-[7.5%] lg:py-[5%] bg-[#F9F3EF] text-center text-[#404040]",children:[e.jsxs("div",{className:"max-w-2xl mx-auto ",children:[e.jsx("h1",{className:"text-2xl font-bold mb-2",children:"¡Ahora selecciona el color!"}),e.jsx("p",{className:"mb-8 text-sm font-extralight",children:"Elije tus colores favoritos para tu rutina ✨"})]}),e.jsx("div",{className:"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-5 sm:mt-8 lg:mt-10",children:g.map((n,m)=>{var l,u;const s=((l=i.find(c=>c.id==n.id))==null?void 0:l.colors)??[];return s.length==0?null:(console.log(n.colors),(u=n.colors)==null?void 0:u.map((c,o)=>(console.log(c),e.jsx("div",{className:"overflow-hidden w-full bg-white rounded-2xl shadow-md","data-aos":"fade-down",children:e.jsxs("div",{className:"flex flex-row gap-2 items-center p-2",children:[e.jsx("div",{className:"",children:e.jsx("img",{className:"h-[120px] aspect-[3/4] object-cover object-center rounded-md",src:`/api/colors/media/${c==null?void 0:c.image}`,alt:n.name})}),e.jsx("div",{className:"",children:e.jsx("div",{className:"flex flex-wrap gap-3 items-end self-stretch my-auto ",children:e.jsxs("div",{className:"flex flex-col items-start self-stretch",children:[e.jsxs("h2",{className:"text-lg font-semibold tracking-normal leading-none text-neutral-700 mb-1",children:[n.name," ",o+1]}),e.jsx("p",{className:" text-sm font-light tracking-normal leading-none text-neutral-700 mb-4",children:"Selecciona tu color:"}),e.jsx("div",{className:"flex gap-2 flex-wrap",children:s.map((p,j)=>{const r=(c==null?void 0:c.id)==p.id;return e.jsx(L,{content:p.name,children:e.jsx("button",{className:`flex shrink-0 w-8 aspect-square rounded-full border ${r?"shadow-md border-[#000000]":""}`,style:{backgroundColor:p.hex||"#fff"},onClick:()=>d(n.id,o,p)},j)})})})]})})})]})},`existence-${m}-${o}`))))}).filter(Boolean)}),e.jsx("div",{className:"flex flex-wrap items-center justify-center gap-2 mx-auto md:mx-[12.5%] mt-5 sm:mt-10",children:e.jsx("button",{onClick:b,className:"bg-[#C5B8D4] text-white text-sm px-8 py-3 rounded mt-4",children:"SIGUIENTE"})})]})},Y=({goToNextPage:b,setSelectedPlan:i,bundles:g=[],planes:f=[]})=>{const d=v.Local.get("vua_cart")??[],n=d.reduce((o,p)=>o+p.price*p.quantity,0),m=d.reduce((o,p)=>o+p.quantity,0),s=g.filter(o=>{switch(o.comparator){case"<":return m<o.items_quantity;case">":return m>o.items_quantity;default:return m==o.items_quantity}}).sort((o,p)=>p.percentage-o.percentage),l=(s==null?void 0:s[0])??null,u=n*(1-((l==null?void 0:l.percentage)||0)),c=o=>{i(o),b()};return e.jsxs("section",{className:"px-[3%] lg:px-[10%] py-[10%] md:py-[7.5%] lg:py-[5%] bg-[#F9F3EF] text-center",children:[e.jsxs("div",{className:"max-w-2xl mx-auto ",children:[e.jsx("h1",{className:"text-2xl font-bold mb-2",children:"¡Elije la frecuencia de tu pedido!"}),e.jsx("p",{className:"mb-8 text-sm font-extralight",children:"Conoce de qué manera puedes ahorrar en tu rutina"})]}),e.jsxs("div",{className:"max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-4 mt-5 sm:mt-8 lg:mt-10",children:[e.jsxs("div",{className:"transition-all cursor-pointer p-6 bg-white group hover:bg-[#EFBEC1] hover:text-white rounded-2xl grid grid-cols-2 items-center justify-between gap-4 shadow-md h-full",onClick:()=>c(null),children:[e.jsxs("div",{className:"text-start",children:[e.jsx("span",{className:"block",children:"Comprar por"}),e.jsx("span",{className:"block font-bold mb-2 -mt-1",children:"1 sola vez"})]}),e.jsx("div",{className:"flex flex-col gap-2 text-end",children:e.jsxs("span",{className:"ms-auto text-4xl text-[#C0AFD4] group-hover:text-white font-bold",children:["S/",k(u)]})})]}),f.map((o,p)=>{const j=u-n*o.percentage;return e.jsxs("div",{className:"cursor-pointer p-6 bg-white transition-all rounded-2xl grid grid-cols-2 items-center justify-between gap-4 shadow-md h-full hover:bg-[#EFBEC1] hover:text-white peer-checked:bg-[#EFBEC1] peer-checked:text-white group",onClick:()=>c(o.id),children:[e.jsxs("div",{className:"text-start",children:[e.jsx("span",{className:"block",children:"Suscripción"}),e.jsxs("span",{className:"block font-bold mb-2 -mt-1",children:["Cada ",o.name]}),e.jsx("div",{className:`
          border border-[#404040] text-xs px-2 py-1 rounded-full w-max 
          group-hover:border-white peer-checked:border-white
        `,children:"+ Envío gratis Lima Met."})]}),e.jsxs("div",{className:"flex flex-col gap-2 text-end",children:[e.jsxs("span",{className:`
          ms-auto text-nowrap text-xs px-2 py-1 rounded-full w-max
          text-white bg-[#C0AFD4]
          group-hover:text-[#EEA9D2] group-hover:bg-white
          peer-checked:text-[#EEA9D2] peer-checked:bg-white
        `,children:["-",o.percentage*100,"%OFF 🔥"]}),e.jsxs("span",{className:"ms-auto text-4xl text-[#C0AFD4] font-bold group-checked:text-white group-hover:text-white",children:["S/",k(j)]})]})]},p)})]})]})},K=({formula:b,publicKey:i,selectedPlan:g,bundles:f,planes:d,session:n})=>{Culqi.publicKey=i,Culqi.options({paymentMethods:{tarjeta:!0,yape:!0,billetera:!0,bancaMovil:!0,agente:!0,cuotealo:!1},installments:!0,style:{logo:`${location.origin}/assets/img/icon-purple.svg`,bannerColor:"#A191B8"}});const m=v.Local.get("vua_cart"),[s,l]=y.useState({name:(n==null?void 0:n.name)||null,lastname:(n==null?void 0:n.lastname)||null,email:b.email,phone:(n==null?void 0:n.phone)||null,country:"Perú",department:null,province:null,district:null,zip_code:null,address:null,number:null,reference:null,comment:null}),[u,c]=y.useState(!1),[o,p]=y.useState(""),j=m.reduce((t,a)=>t+a.price*a.quantity,0),r=m.reduce((t,a)=>t+a.quantity,0),x=f.filter(t=>{switch(t.comparator){case"<":return r<t.items_quantity;case">":return r>t.items_quantity;default:return r==t.items_quantity}}).sort((t,a)=>a.percentage-t.percentage),h=(x==null?void 0:x[0])??null,w=j*((h==null?void 0:h.percentage)||0),N=d.find(t=>t.id==g),S=j*((N==null?void 0:N.percentage)||0),_=()=>{let t="Lima",a="Lima",q=null;return s.province=="Lima metropolitana"&&(a="Lima metropolitana",q=null),s.province=="Lima Alrededores"&&(a=s.district),s.province=="Provincias"&&(t=s.district,a=null),{...s,department:t,province:a,district:q}},B=async t=>{if(t.preventDefault(),u)return;c(!0);let a=null;if(j>6){const q=await E.order({..._(),order_number:Culqi.order_number,user_formula_id:b.id,renewal_id:g,coupon_id:null},m);q&&(a=q.data.id,Culqi.order_number=q.data.order_number)}c(!1),Culqi.settings({title:T.APP_NAME,currency:"PEN",amount:Math.ceil((j-w-S)*100),order:a}),Culqi.open()};window.culqi=async()=>{Culqi.token?await E.token({..._(),order_number:Culqi.order_number,user_formula_id:b.id},m)&&(location.href="/thanks"):Culqi.order&&(console.log(Culqi.order),$())};const $=()=>{setInterval(()=>{Culqi.isOpen||(location.href="/thanks")},500)};return e.jsx(e.Fragment,{children:e.jsx("section",{className:"px-[5%] md:px-[7.5%] lg:px-[10%] pb-[5%] mt-[7.5%] md:mt-[5%] lg:mt-[2.5%] text-[#404040]",children:e.jsxs("div",{className:"max-w-4xl mx-auto",children:[e.jsxs("div",{className:"mb-6 flex justify-center space-x-8 text-sm text-white",children:[e.jsxs("div",{className:"flex items-center",children:[e.jsx(R,{className:"mr-2 h-4 w-4"}),e.jsx("span",{children:"SSL Pago Seguro"})]}),e.jsxs("div",{className:"flex items-center",children:[e.jsx(H,{className:"mr-2 h-4 w-4"}),e.jsx("span",{children:"24/7 Atención al cliente"})]}),e.jsxs("div",{className:"flex items-center",children:[e.jsx(G,{className:"mr-2 h-4 w-4"}),e.jsx("span",{children:"Pago online"})]})]}),e.jsx("form",{className:"w-full rounded-lg bg-white p-8 shadow-lg",onSubmit:B,children:e.jsxs("div",{className:"grid gap-8 md:grid-cols-2 lg:grid-cols-5 relative",children:[e.jsxs("div",{className:"lg:col-span-3",children:[e.jsx("h2",{className:"mb-4 text-xl font-semibold",children:"Información del cliente"}),e.jsxs("div",{className:"mb-4",children:[e.jsxs("label",{className:"mb-1 block text-sm font-medium ",htmlFor:"email",children:["Dirección de correo electrónico ",e.jsx("b",{className:"text-red-500",children:"*"})]}),e.jsx("input",{type:"email",id:"email",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:s.email,placeholder:"Dirección de correo electrónico",onChange:t=>l(a=>({...a,email:t.target.value})),required:!0})]}),e.jsx("h2",{className:"mb-4 text-xl font-semibold",children:"Detalles de facturación"}),e.jsxs("div",{className:"grid gap-4 md:grid-cols-2",children:[e.jsxs("div",{children:[e.jsxs("label",{className:"mb-1 block text-sm font-medium ",htmlFor:"firstName",children:["Nombre ",e.jsx("b",{className:"text-red-500",children:"*"})]}),e.jsx("input",{type:"text",id:"firstName",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:s.name,onChange:t=>l(a=>({...a,name:t.target.value})),required:!0})]}),e.jsxs("div",{children:[e.jsxs("label",{className:"mb-1 block text-sm font-medium ",htmlFor:"lastName",children:["Apellidos ",e.jsx("b",{className:"text-red-500",children:"*"})]}),e.jsx("input",{type:"text",id:"lastName",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:s.lastname,onChange:t=>l(a=>({...a,lastname:t.target.value})),required:!0})]})]}),e.jsxs("div",{className:"mt-4",children:[e.jsxs("label",{className:"mb-1 block text-sm font-medium ",htmlFor:"country",children:["País / Región ",e.jsx("b",{className:"text-red-500",children:"*"})]}),e.jsx("input",{type:"text",id:"country",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:s.country,disabled:!0,required:!0})]}),e.jsxs("div",{className:"mt-4 grid gap-4 md:grid-cols-5",children:[e.jsxs("div",{className:"md:col-span-2",children:[e.jsxs("label",{className:"mb-1 block text-sm font-medium ",htmlFor:"province",children:["Región / Provincia ",e.jsx("b",{className:"text-red-500",children:"*"})]}),e.jsxs("select",{id:"province",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:s.province,onChange:t=>l(a=>({...a,province:t.target.value})),required:!0,children:[e.jsx("option",{value:"",children:"Elige una opción"}),e.jsx("option",{children:"Lima metropolitana"}),e.jsx("option",{children:"Distritos de Lima"}),e.jsx("option",{children:"Otros departamentos"})]})]}),(s.province=="Distritos de Lima"||s.province=="Otros departamentos")&&e.jsxs(e.Fragment,{children:[e.jsxs("div",{className:"md:col-span-2",children:[e.jsx("label",{className:"mb-1 block text-sm font-medium ",htmlFor:"district",children:s.province=="Distritos de Lima"?"Distrito":"Departamento"}),e.jsx("input",{type:"text",id:"district",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:s.district,onChange:t=>l(a=>({...a,district:t.target.value}))})]}),e.jsxs("div",{children:[e.jsx("label",{className:"mb-1 block text-sm font-medium  truncate text-ellipsis",htmlFor:"postalCode",title:"Código postal",children:"Código postal"}),e.jsx("input",{type:"text",id:"postalCode",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:s.zip_code,onChange:t=>l(a=>({...a,zip_code:t.target.value}))})]})]})]}),e.jsx("div",{className:"mt-4",children:e.jsxs("div",{className:"mt-4 grid gap-4 md:grid-cols-5 lg:grid-cols-3",children:[e.jsxs("div",{className:"md:col-span-3 lg:col-span-2",children:[e.jsxs("label",{className:"mb-1 block text-sm font-medium ",htmlFor:"address",children:["Dirección de la calle ",e.jsx("b",{className:"text-red-500",children:"*"})]}),e.jsx("input",{type:"text",id:"address",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:s.address,placeholder:"Nombre de la calle y número de la calle",onChange:t=>l(a=>({...a,address:t.target.value})),required:!0})]}),e.jsxs("div",{className:"md:col-span-2 lg:col-span-1",children:[e.jsxs("label",{className:"mb-1 block text-sm font-medium ",htmlFor:"number",children:["Número ",e.jsx("b",{className:"text-red-500",children:"*"})]}),e.jsx("input",{type:"text",id:"number",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:s.number,placeholder:"Nombre de la calle y número de la calle",onChange:t=>l(a=>({...a,number:t.target.value})),required:!0})]})]})}),e.jsxs("div",{className:"mt-4",children:[e.jsx("label",{className:"mb-1 block text-sm font-medium ",htmlFor:"apartment",children:"Apartamento, habitación, escalera, etc. (opcional)"}),e.jsx("input",{type:"text",id:"apartment",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:s.reference,onChange:t=>l(a=>({...a,reference:t.target.value}))})]}),e.jsxs("div",{className:"mt-4",children:[e.jsxs("label",{className:"mb-1 block text-sm font-medium ",htmlFor:"phone",children:["Teléfono/Celular ",e.jsx("b",{className:"text-red-500",children:"*"})]}),e.jsx("input",{type:"tel",id:"phone",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:s.phone,onChange:t=>l(a=>({...a,phone:t.target.value})),required:!0})]}),e.jsxs("div",{className:"mt-4",children:[e.jsx("label",{className:"mb-1 block text-sm font-medium ",htmlFor:"orderNotes",children:"Notas del pedido (opcional)"}),e.jsx("textarea",{id:"orderNotes",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",rows:3,placeholder:"Notas sobre tu pedido, por ejemplo, notas especiales para la entrega.",value:s.comment,onChange:t=>l(a=>({...a,comment:t.target.value})),style:{minHeight:81,fieldSizing:"content"}})]}),e.jsxs("div",{className:"mt-6",children:[e.jsx("h3",{className:"mb-4 text-xl font-semibold",children:"Pago"}),e.jsxs("div",{className:"rounded-md border border-gray-300",children:[e.jsxs("div",{className:"p-4 py-3 flex justify-between",children:[e.jsx("img",{className:"h-4",src:"/assets/img/checkout/culqi-logo.svg",alt:"Culqi"}),e.jsxs("div",{className:"flex gap-2",children:[e.jsx("img",{className:"h-4",src:"/assets/img/checkout/cards.svg",alt:"Cards"}),e.jsx("img",{className:"h-4",src:"/assets/img/checkout/pagoefectivo.svg",alt:"Pago efectivo"}),e.jsx("img",{className:"h-4",src:"/assets/img/checkout/yape.svg",alt:"Yape"})]})]}),e.jsxs("p",{className:"text-xs bg-[#f9f9f9] p-4 px-6 rounded-b",children:["Acepta pagos con ",e.jsx("b",{children:"tarjetas de débito y crédito, Yape, Cuotealo BCP y PagoEfectivo"}),"(billeteras móviles, agentes y bodegas)."]})]})]}),e.jsx("div",{className:"mt-6 text-xs",children:e.jsxs("p",{className:"text-justify",children:["Sus datos personales se utilizarán para procesar su pedido, respaldar su experiencia en este sitio web y para otros fines descritos en nuestra "," ",e.jsx("a",{href:"#",className:"text-purple-600 hover:underline",children:"política de privacidad"}),"."]})})]}),e.jsx("div",{className:"lg:col-span-2 relative",children:e.jsxs("div",{className:"block sticky top-4",children:[e.jsx("h2",{className:"mb-4 text-xl font-semibold",children:"Tu pedido"}),e.jsxs("div",{className:"rounded-lg border border-gray-200 p-4",children:[e.jsxs("div",{className:"mb-4 flex justify-between border-b pb-2 font-bold",children:[e.jsx("span",{className:"",children:"Producto"}),e.jsx("span",{className:"",children:"Subtotal"})]}),e.jsx("div",{className:"mb-2",children:m.map((t,a)=>{var q,D;return e.jsxs("div",{className:"mb-1 flex items-center justify-between text-sm",children:[e.jsxs("div",{className:"flex gap-2",children:[e.jsx("div",{className:"h-10 aspect-[3/4] relative",children:t.colors.length>1?e.jsx(L,{content:e.jsx("div",{className:"flex flex-wrap gap-1.5",children:t.colors.map(C=>e.jsx("img",{className:"h-10 bg-white aspect-[3/4] object-contain object-center rounded-md border",src:`/api/colors/media/${C.image}`,alt:C.name}))}),children:e.jsxs("div",{children:[e.jsx("img",{className:"h-10 aspect-[3/4] object-contain object-center rounded-md border",src:`/api/colors/media/${(q=t.colors[0])==null?void 0:q.image}`,alt:t.name,onError:C=>C.target.src=`/api/items/media/${t.image}`}),e.jsxs("span",{className:"absolute block bottom-1 left-1/2 -translate-x-1/2 text-xs text-white bg-[rgba(0,0,0,0.75)] px-1 rounded-sm",children:["+",t.colors.length-1]})]})}):e.jsx("img",{className:"h-10 aspect-[3/4] object-contain object-center rounded-md border",src:`/api/colors/media/${(D=t.colors[0])==null?void 0:D.image}`,alt:t.name,onError:C=>C.target.src=`/api/items/media/${t.image}`})}),e.jsxs("div",{children:[e.jsx("p",{children:t.name}),e.jsxs("small",{className:"text-xs text-gray-500",children:[e.jsxs("span",{className:"w-6 inline-block text-nowrap",children:["× ",t.quantity]}),e.jsx("div",{className:"inline-flex flex-wrap gap-1",children:t.colors.map((C,W)=>e.jsx("i",{className:"mdi mdi-circle",style:{color:(C==null?void 0:C.hex)??"#000",WebkitTextStroke:"1px #808080"}}))})]})]})]}),e.jsxs("span",{className:"",children:["S/ ",k(t.price*t.quantity)]})]},a)})}),e.jsxs("div",{className:"mb-2 mt-4 flex justify-between border-b pb-2 text-sm font-bold",children:[e.jsx("span",{children:"Subtotal"}),e.jsxs("span",{children:["S/ ",k(j)]})]}),h&&e.jsxs("div",{className:"mb-2 mt-2 flex justify-between items-center border-b pb-2 text-sm font-bold",children:[e.jsxs("span",{children:["Descuento x paquete",e.jsxs("small",{className:"block text-xs font-light",children:["Elegiste ",h.name," (-",Math.round(h.percentage*1e4)/100,"%)"]})]}),e.jsxs("span",{children:["S/ -",k(w)]})]}),N&&e.jsxs("div",{className:"mb-2 mt-2 flex justify-between items-center border-b pb-2 text-sm font-bold",children:[e.jsxs("span",{children:["Subscripción",e.jsxs("small",{className:"block text-xs font-light",children:[N.name," (-",Math.round(N.percentage*1e4)/100,"%)"]})]}),e.jsxs("span",{children:["S/ -",k(S)]})]}),s.province&&e.jsxs("div",{className:"mb-4 flex justify-between text-sm border-b pb-2",children:[e.jsx("span",{className:"font-bold",children:"Envío"}),e.jsx("span",{children:s.province=="Lima metropolitana"?"Gratis":"Por Shalom - Pago en destino"})]}),e.jsxs("div",{className:"flex justify-between text-lg font-semibold",children:[e.jsx("span",{children:"Total"}),e.jsxs("span",{children:["S/ ",k(j-w-S)]})]})]}),e.jsxs("div",{className:"mt-6 flex",children:[e.jsx("input",{type:"text",placeholder:"Código de cupón",className:"w-full rounded-l-md border border-gray-300 p-2 text-sm outline-none",value:o,onChange:t=>p(t.target.value)}),e.jsx("button",{className:"rounded-r-md bg-[#C5B8D4] px-4 py-2 text-sm text-white",type:"button",children:"Aplicar"})]}),e.jsxs("button",{type:"submit",className:"mt-6 w-full rounded-md bg-[#C5B8D4] py-3 text-white disabled:cursor-not-allowed",disabled:u,children:[u?e.jsx("i",{className:"fa fa-spinner fa-spin me-1"}):e.jsx("i",{className:"mdi mdi-lock me-1"}),"Pagar Ahora",e.jsxs("small",{className:"ms-1",children:["(S/ ",k(j-w-S),")"]})]})]})})]})})]})})})},V=({user_formula:b,items:i,colors:g,publicKey:f,session:d,bundles:n,planes:m})=>{const[s,l]=y.useState(0),[u,c]=y.useState(null),o=()=>{s<p.length-1&&l(s+1)},p=[{component:e.jsx(J,{items:i,goToNextPage:o,bundles:n}),name:"Select Product"},{component:e.jsx(U,{items:i,goToNextPage:o}),name:"Select Color"},{component:e.jsx(Y,{goToNextPage:o,setSelectedPlan:c,bundles:n,planes:m}),name:"Select Plan"},{component:e.jsx(K,{formula:b,publicKey:f,selectedPlan:u,goToNextPage:o,bundles:n,planes:m,session:d}),name:"Checkout"}];return p[s].component};Q((b,i)=>{I(b).render(e.jsx(M,{...i,children:e.jsx(V,{...i})}))});
