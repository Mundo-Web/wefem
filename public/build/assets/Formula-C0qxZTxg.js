var J=Object.defineProperty;var Q=(b,d,u)=>d in b?J(b,d,{enumerable:!0,configurable:!0,writable:!0,value:u}):b[d]=u;var F=(b,d,u)=>(Q(b,typeof d!="symbol"?d+"":d,u),u);import{j as e}from"./AboutHeader-CpM0iYLI.js";import{r as y}from"./index-B80Lgev0.js";import{c as G}from"./ReactAppend-CBRQCQGz.js";import{B as H}from"./Base-C8pp5Bpj.js";import{G as V,C as K}from"./CreateReactScript-B4L7iD9b.js";import{N as k}from"./Number2Currency-e57Tgsuk.js";import{m as j}from"./main-B2CtU6ez.js";import{A as z}from"./CallToAction-Y9yYs4wC.js";import{i as D}from"./tippy-react.esm-CHhA99mn.js";import{B as U}from"./Results-B7SuXOZ7.js";import{c as L}from"./createLucideIcon-Cx5eUsrb.js";import"./index-DO3Aws4m.js";import"./Base-TVC2AMtK.js";import"./index-B1nVdsa0.js";import"./index-CqrOtH36.js";import"./index.esm-Cu-mVv1q.js";import"./___vite-browser-external_commonjs-proxy-C9-083JZ.js";/* empty css               *//* empty css              *//**
 * @license lucide-react v0.445.0 - ISC
 *
 * This source code is licensed under the ISC license.
 * See the LICENSE file in the root directory of this source tree.
 */const Y=L("CreditCard",[["rect",{width:"20",height:"14",x:"2",y:"5",rx:"2",key:"ynyp8z"}],["line",{x1:"2",x2:"22",y1:"10",y2:"10",key:"1b3vmo"}]]);/**
 * @license lucide-react v0.445.0 - ISC
 *
 * This source code is licensed under the ISC license.
 * See the LICENSE file in the root directory of this source tree.
 */const W=L("Headphones",[["path",{d:"M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3",key:"1xhozi"}]]);/**
 * @license lucide-react v0.445.0 - ISC
 *
 * This source code is licensed under the ISC license.
 * See the LICENSE file in the root directory of this source tree.
 */const X=L("ShieldCheck",[["path",{d:"M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z",key:"oel41y"}],["path",{d:"m9 12 2 2 4-4",key:"dzmm74"}]]);class A{}F(A,"order",async(d,u)=>{try{const{status:h,result:m}=await j.Fetch("/api/culqi/order",{method:"POST",body:j.JSON.stringify({sale:d,details:u})});if(!h)throw new Error((m==null?void 0:m.message)||"Ocurrio un error inesperado");return j.Notify.add({icon:"/assets/img/icon.svg",title:"Correcto",body:m.message,type:"success"}),m}catch(h){return j.Notify.add({icon:"/assets/img/icon.svg",title:"Error",body:h.message,type:"danger"}),null}}),F(A,"token",async d=>{try{const{status:u,result:h}=await j.Fetch("/api/culqi/token",{method:"POST",body:j.JSON.stringify(d)});if(!u)throw new Error((h==null?void 0:h.message)||"Ocurrio un error inesperado");return j.Notify.add({icon:"/assets/img/icon.svg",title:"Correcto",body:h.message,type:"success"}),h}catch(u){return j.Notify.add({icon:"/assets/img/icon.svg",title:"Error",body:u.message,type:"danger"}),null}});class Z extends U{constructor(){super(...arguments);F(this,"path","coupons");F(this,"isFirst",async u=>{try{const{status:h,result:m}=await j.Fetch(`/api/${this.path}/is-first`,{method:"POST",body:j.JSON.stringify({email:u})});if(!h)throw new Error((m==null?void 0:m.message)??"Ocurrio un error inesperado");return m.data}catch{return null}})}}const ee=({goToNextPage:b,items:d=[],bundles:u=[]})=>{const h=j.Local.get("vua_cart")??[],[m,a]=y.useState(h.filter(l=>!!d.find(x=>l.id==x.id))??[]),p=m.reduce((l,x)=>l+x.price*x.quantity,0),g=(l,x)=>{const f=l.target.checked;a(f?w=>[...w,{...x,quantity:1}]:w=>w.filter(v=>v.id!=x.id))},r=m.reduce((l,x)=>l+x.quantity,0),c=u.filter(l=>{switch(l.comparator){case"<":return r<l.items_quantity;case">":return r>l.items_quantity;default:return r==l.items_quantity}}).sort((l,x)=>x.percentage-l.percentage),o=(c==null?void 0:c[0])??null,i=p*(1-((o==null?void 0:o.percentage)||0)),n=l=>{m.find(x=>x.id==l.id)?a(x=>x.map(f=>(f.id==l.id&&f.quantity++,f))):(document.getElementById(`item-${l.id}`).checked=!0,a(x=>[...x,{...l,quantity:1}]))},N=l=>{a(x=>x.map(f=>(f.id==l.id&&f.quantity--,f.quantity<=0?document.getElementById(`item-${l.id}`).checked=!1:f)).filter(Boolean))};return y.useEffect(()=>{j.Local.set("vua_cart",m)},[m]),y.useEffect(()=>{z.init()},[null]),e.jsxs("form",{className:"px-[3%] lg:px-[10%] py-[10%] md:py-[7.5%] lg:py-[5%] bg-[#F9F3EF] text-center text-[#404040]",children:[e.jsxs("div",{className:"max-w-2xl mx-auto ",children:[e.jsx("h1",{className:"text-2xl font-bold mb-2",children:"¡Selecciona tus productos personalizados!"}),e.jsxs("p",{className:"mb-8 text-sm font-extralight",children:[e.jsx("span",{children:"Para mejores resultados arma una rutina completa"}),e.jsx("img",{className:"w-4 inline-block ms-2",src:"/assets/img/emojis/stars.png",alt:"Para mejores resultados arma una rutina completa"})]})]}),e.jsx("div",{className:"max-w-4xl mx-auto mb-8",children:e.jsx("div",{className:"flex flex-wrap items-center justify-center gap-4",children:d.map((l,x)=>{const f=m.find(v=>v.id==l.id),w=(f==null?void 0:f.quantity)??0;return e.jsxs("div",{className:"flex flex-col w-[180px] whitespace-nowrap","data-aos":"fade-up",children:[e.jsx("input",{type:"checkbox",name:"",id:`item-${l.id}`,className:"peer hidden",onChange:v=>g(v,l),checked:!!f,required:!0}),e.jsxs("label",{htmlFor:`item-${l.id}`,className:"flex overflow-hidden flex-col tracking-normal leading-none text-center bg-white rounded-xl border peer-checked:border-[#808080] peer-checked:shadow-md text-[#404040] cursor-pointer mb-3 transition-all",children:[e.jsx("img",{loading:"lazy",src:`/api/items/media/${l.image}`,className:"object-cover object-center aspect-[3/4] w-full border-b",alt:"Shampoo product image",onError:v=>v.target.src="/assets/img/routine/conditioner.png"}),e.jsx("h2",{className:"self-center px-4 py-3",children:l.name})]}),e.jsxs("div",{className:"flex gap-5 justify-between items-center self-center py-1 text-sm bg-transparent rounded-lg border border-[#808080] w-[70%] px-4 font-bold",children:[e.jsx("button",{type:"button",className:"disabled:cursor-not-allowed",onClick:()=>N(l),disabled:w<=0,children:"-"}),e.jsx("span",{children:w}),e.jsx("button",{type:"button",className:"disabled:cursor-not-allowed",onClick:()=>n(l),children:"+"})]})]},x)})})}),e.jsxs("div",{className:"max-w-2xl mx-auto mt-5 sm:mt-8 lg:mt-10 px-[3%]",children:[e.jsx("p",{className:"text-sm",children:"Descubre cómo ahorrar aún más al final 👀"}),e.jsxs("div",{className:"flex flex-col sm:flex-row gap-4 justify-between items-center bg-[#EFBEC1] text-white rounded-3xl mt-4 py-4 px-[5%] font-extrabold shadow-lg",children:[e.jsxs("div",{className:"text-xl text-start",children:["Elegiste ",o?o.name:e.jsxs(e.Fragment,{children:[r," ",r==1?"producto":"productos"]}),o&&e.jsx("span",{className:"block text-xs font-light",children:o.description})]}),e.jsxs("div",{className:"flex flex-row text-white items-center gap-4",children:[p!=i&&e.jsxs("p",{className:"text-sm font-light line-through",children:["Antes: S/",k(p)]}),e.jsxs("h2",{className:"text-xl",children:["S/",k(i)]})]})]})]}),e.jsx("div",{className:"flex flex-wrap items-center justify-center gap-2 mx-auto md:mx-[12.5%] mt-5 sm:mt-10",children:e.jsx("button",{onClick:b,className:"bg-[#C5B8D4] text-white text-sm px-8 py-3 rounded mt-4 disabled:cursor-not-allowed",disabled:r==0,children:"SIGUIENTE"})})]})},te=({goToNextPage:b,items:d=[]})=>{const[u,h]=y.useState(j.Local.get("vua_cart")??[]);y.useEffect(()=>{h(a=>a.map(p=>{var n;const g=((n=d.find(N=>N.id==p.id))==null?void 0:n.colors)??[],r=p.colors??[],c=p.quantity,o=c-r.length,i=new Array(o>0?o:0).fill((g==null?void 0:g[0])??null);return r.length<c?p.colors=[...r,...i].filter(Boolean):p.colors=r.slice(0,c).filter(Boolean),p}))},[null]);const m=(a,p,g)=>{h(r=>r.map(c=>(c.id==a&&(c.colors[p]=g),c)))};return y.useEffect(()=>{j.Local.set("vua_cart",u)},[u]),y.useEffect(()=>{z.init()},[null]),e.jsxs("section",{className:"px-[3%] lg:px-[10%] py-[10%] md:py-[7.5%] lg:py-[5%] bg-[#F9F3EF] text-center text-[#404040]",children:[e.jsxs("div",{className:"max-w-2xl mx-auto ",children:[e.jsx("h1",{className:"text-2xl font-bold mb-2",children:"¡Ahora selecciona el color!"}),e.jsxs("p",{className:"mb-8 text-sm font-extralight",children:[e.jsx("span",{children:"Elije tus colores favoritos para tu rutina"}),e.jsx("img",{className:"w-4 inline-block ms-2",src:"/assets/img/emojis/stars.png",alt:"Elije tus colores favoritos para tu rutina"})]})]}),e.jsx("div",{className:"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-5 sm:mt-8 lg:mt-10",children:u.map((a,p)=>{var r,c;const g=((r=d.find(o=>o.id==a.id))==null?void 0:r.colors)??[];return g.length==0?null:(c=a.colors)==null?void 0:c.map((o,i)=>e.jsx("div",{className:"overflow-hidden w-full bg-white rounded-2xl shadow-md","data-aos":"fade-down",children:e.jsxs("div",{className:"flex flex-row gap-2 items-center p-2",children:[e.jsx("div",{className:"",children:e.jsx("img",{className:"h-[120px] aspect-[3/4] object-cover object-center rounded-md",src:`/api/colors/media/${o==null?void 0:o.image}`,alt:a.name})}),e.jsx("div",{className:"",children:e.jsx("div",{className:"flex flex-wrap gap-3 items-end self-stretch my-auto ",children:e.jsxs("div",{className:"flex flex-col items-start self-stretch",children:[e.jsxs("h2",{className:"text-lg font-semibold tracking-normal leading-none text-neutral-700 mb-1",children:[a.name," ",i+1]}),e.jsx("p",{className:" text-sm font-light tracking-normal leading-none text-neutral-700 mb-4",children:"Selecciona tu color:"}),e.jsx("div",{className:"flex gap-2 flex-wrap",children:g.map((n,N)=>{const l=(o==null?void 0:o.id)==n.id;return e.jsx(D,{content:n.name,children:e.jsx("button",{className:`flex shrink-0 w-8 aspect-square rounded-full border ${l?"shadow-md border-[#000000]":""}`,style:{backgroundColor:n.hex||"#fff"},onClick:()=>m(a.id,i,n)})},N)})})]})})})]})},`existence-${p}-${i}`))}).filter(Boolean)}),e.jsx("div",{className:"flex flex-wrap items-center justify-center gap-2 mx-auto md:mx-[12.5%] mt-5 sm:mt-10",children:e.jsx("button",{onClick:b,className:"bg-[#C5B8D4] text-white text-sm px-8 py-3 rounded mt-4",children:"SIGUIENTE"})})]})},ae=({goToNextPage:b,setSelectedPlan:d,bundles:u=[],planes:h=[]})=>{const m=j.Local.get("vua_cart")??[],a=m.reduce((i,n)=>i+n.price*n.quantity,0),p=m.reduce((i,n)=>i+n.quantity,0),g=u.filter(i=>{switch(i.comparator){case"<":return p<i.items_quantity;case">":return p>i.items_quantity;default:return p==i.items_quantity}}).sort((i,n)=>n.percentage-i.percentage),r=(g==null?void 0:g[0])??null,c=a*(1-((r==null?void 0:r.percentage)||0)),o=i=>{d(i),b()};return e.jsxs("section",{className:"px-[3%] lg:px-[10%] py-[10%] md:py-[7.5%] lg:py-[5%] bg-[#F9F3EF] text-center",children:[e.jsxs("div",{className:"max-w-2xl mx-auto ",children:[e.jsx("h1",{className:"text-2xl font-bold mb-2",children:"¡Elije la frecuencia de tu pedido!"}),e.jsx("p",{className:"mb-8 text-sm font-extralight",children:"Conoce de qué manera puedes ahorrar en tu rutina"})]}),e.jsxs("div",{className:"max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-4 mt-5 sm:mt-8 lg:mt-10",children:[e.jsxs("div",{className:"transition-all cursor-pointer p-6 bg-white group hover:bg-[#EFBEC1] hover:text-white rounded-2xl grid grid-cols-2 items-center justify-between gap-4 shadow-md h-full",onClick:()=>o(null),children:[e.jsxs("div",{className:"text-start",children:[e.jsx("span",{className:"block",children:"Comprar por"}),e.jsx("span",{className:"block font-bold mb-2 -mt-1",children:"1 sola vez"})]}),e.jsx("div",{className:"flex flex-col gap-2 text-end",children:e.jsxs("span",{className:"ms-auto text-4xl text-[#C0AFD4] group-hover:text-white font-bold",children:["S/",k(c)]})})]}),h.sort((i,n)=>n.percentage-i.percentage).map((i,n)=>{const N=c-a*i.percentage;return e.jsxs("div",{className:"cursor-pointer p-6 bg-white transition-all rounded-2xl grid grid-cols-2 items-center justify-between gap-4 shadow-md h-full hover:bg-[#EFBEC1] hover:text-white peer-checked:bg-[#EFBEC1] peer-checked:text-white group",onClick:()=>o(i.id),children:[e.jsxs("div",{className:"text-start",children:[e.jsx("span",{className:"block",children:"Suscripción"}),e.jsxs("span",{className:"block font-bold mb-2 -mt-1",children:["Cada ",i.name]}),e.jsx("div",{className:`
          border border-[#404040] text-xs px-2 py-1 rounded-full w-max 
          group-hover:border-white peer-checked:border-white
        `,children:"+ Envío gratis Lima Met."})]}),e.jsxs("div",{className:"flex flex-col gap-2 text-end",children:[e.jsxs("span",{className:`
          ms-auto text-nowrap text-xs px-2 py-1 rounded-full w-max
          text-white bg-[#C0AFD4]
          group-hover:text-[#EEA9D2] group-hover:bg-white
          peer-checked:text-[#EEA9D2] peer-checked:bg-white
        `,children:["-",i.percentage*100,"%OFF",e.jsx("img",{className:"w-3 inline-block ms-1",src:"/assets/img/emojis/fire.png",alt:"-{plan.percentage * 100}%OFF"})]}),e.jsxs("span",{className:"ms-auto text-4xl text-[#C0AFD4] font-bold group-checked:text-white group-hover:text-white",children:["S/",k(N)]})]})]},n)})]})]})},S={metropolitana:{name:"Lima Metropolitana",delivery:"Gratis",items:["Ate","Barranco","Breña","Cercado de Lima","Chorrillos","Comas","El Agustino","Independencia","Jesús María","La Molina","La Victoria","Lince","Los Olivos","Magdalena del Mar","Miraflores","Pueblo Libre","Rímac","San Borja","San Isidro","San Juan de Lurigancho","San Juan de Miraflores","San Luis","San Martin de Porres","San Miguel","Santa Anita","Santiago de Surco","Surquillo","Villa el Salvador","Villa Maria del Triunfo"]},alrededores:{name:"Lima Alrededores",delivery:"Por Shalom - Pago en destino",items:["Ancón","Carabayllo","Chaclacayo","Cieneguilla","Lurín","Pachacámac","Pucusana","Puente Piedra","Punta Hermosa","Punta Negra","San Bartolo","Lurigancho (Chosica)","Santa María del Mar","Santa Rosa"]},provincias:{name:"Provincias",delivery:"Por Shalom - Pago en destino",items:""}},O=new Z,se=({formula:b,publicKey:d,selectedPlan:u,bundles:h,planes:m,session:a})=>{var B;const p=y.useRef(null);Culqi.publicKey=d,Culqi.options({paymentMethods:{tarjeta:!0,yape:!0,billetera:!0,bancaMovil:!0,agente:!0,cuotealo:!1},installments:!0,style:{logo:`${location.origin}/assets/img/icon-purple.svg`,bannerColor:"#A191B8"}});const g=j.Local.get("vua_cart"),[r,c]=y.useState({name:(a==null?void 0:a.name)||null,lastname:(a==null?void 0:a.lastname)||null,email:b.email,phone:(a==null?void 0:a.phone)||null,country:"Perú",department:(a==null?void 0:a.department)||null,province:(a==null?void 0:a.province)||null,district:(a==null?void 0:a.district)||null,zip_code:(a==null?void 0:a.zip_code)||null,address:(a==null?void 0:a.address)||null,number:(a==null?void 0:a.address_number)||null,reference:(a==null?void 0:a.address_reference)||null,comment:null}),[o,i]=y.useState(!1),[n,N]=y.useState(null),l=g.reduce((t,s)=>t+s.price*s.quantity,0),x=g.reduce((t,s)=>t+s.quantity,0),f=h.filter(t=>{switch(t.comparator){case"<":return x<t.items_quantity;case">":return x>t.items_quantity;default:return x==t.items_quantity}}).sort((t,s)=>s.percentage-t.percentage),w=(f==null?void 0:f[0])??null,v=l*((w==null?void 0:w.percentage)||0),q=m.find(t=>t.id==u),E=(l-v)*((q==null?void 0:q.percentage)||0),_=(l-v-E)*((n==null?void 0:n.amount)||0)/100,I=()=>{let t="Lima",s="Lima",C=null;return Array.isArray(S[r.department].items)?(t=S[r.department].name,s=r.province,C=null):(t=r.province,s=null,C=r.district),{...r,department:t,province:s,district:C}},$=async t=>{if(t.preventDefault(),o)return;i(!0);let s=null;if(l>6){const C=await A.order({...I(),order_number:Culqi.order_number,user_formula_id:b.id,renewal_id:u,coupon:(n==null?void 0:n.name)??null},g);C&&(s=C.data.id,Culqi.order_number=C.data.order_number)}i(!1),Culqi.settings({title:V.APP_NAME,currency:"PEN",amount:Math.ceil((l-v-E-_)*100),order:s}),Culqi.open()};window.culqi=async()=>{Culqi.token?await A.token({order:Culqi.order_number,token:Culqi.token})&&(location.href="/thanks"):Culqi.order&&R()};const R=()=>{setInterval(()=>{Culqi.isOpen||(location.href="/thanks")},500)},M=t=>{t.preventDefault();const s=(p.current.value||"").trim().toUpperCase();s&&O.save({coupon:s,amount:l,email:b.email}).then(C=>{N(C?C.data:null)})},T=t=>{t.key=="Enter"&&M(t)};return y.useEffect(()=>{O.isFirst(b.email).then(t=>{N(t||null)})},[null]),e.jsx(e.Fragment,{children:e.jsx("section",{className:"px-[5%] md:px-[7.5%] lg:px-[10%] pb-[5%] mt-[7.5%] md:mt-[5%] lg:mt-[2.5%] text-[#404040]",children:e.jsxs("div",{className:"max-w-4xl mx-auto",children:[e.jsxs("div",{className:"mb-6 flex justify-center space-x-8 text-sm text-white",children:[e.jsxs("div",{className:"flex items-center",children:[e.jsx(X,{className:"mr-2 h-4 w-4"}),e.jsx("span",{children:"SSL Pago Seguro"})]}),e.jsxs("div",{className:"flex items-center",children:[e.jsx(W,{className:"mr-2 h-4 w-4"}),e.jsx("span",{children:"24/7 Atención al cliente"})]}),e.jsxs("div",{className:"flex items-center",children:[e.jsx(Y,{className:"mr-2 h-4 w-4"}),e.jsx("span",{children:"Pago online"})]})]}),e.jsx("form",{className:"w-full rounded-lg bg-white p-8 shadow-lg",onSubmit:$,disabled:o,children:e.jsxs("div",{className:"grid gap-8 md:grid-cols-2 lg:grid-cols-5 relative",children:[e.jsxs("div",{className:"lg:col-span-3",children:[e.jsx("h2",{className:"mb-4 text-xl font-semibold",children:"Información del cliente"}),e.jsxs("div",{className:"mb-4",children:[e.jsxs("label",{className:"mb-1 block text-sm font-medium ",htmlFor:"email",children:["Dirección de correo electrónico ",e.jsx("b",{className:"text-red-500",children:"*"})]}),e.jsx("input",{type:"email",id:"email",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:r.email,placeholder:"Dirección de correo electrónico",onChange:t=>c(s=>({...s,email:t.target.value})),required:!0,disabled:!0})]}),e.jsx("h2",{className:"mb-4 text-xl font-semibold",children:"Detalles de facturación"}),e.jsxs("div",{className:"grid gap-4 md:grid-cols-2",children:[e.jsxs("div",{children:[e.jsxs("label",{className:"mb-1 block text-sm font-medium ",htmlFor:"firstName",children:["Nombre ",e.jsx("b",{className:"text-red-500",children:"*"})]}),e.jsx("input",{type:"text",id:"firstName",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:r.name,onChange:t=>c(s=>({...s,name:t.target.value})),required:!0})]}),e.jsxs("div",{children:[e.jsxs("label",{className:"mb-1 block text-sm font-medium ",htmlFor:"lastName",children:["Apellidos ",e.jsx("b",{className:"text-red-500",children:"*"})]}),e.jsx("input",{type:"text",id:"lastName",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:r.lastname,onChange:t=>c(s=>({...s,lastname:t.target.value})),required:!0})]})]}),e.jsxs("div",{className:"mt-4",children:[e.jsxs("label",{className:"mb-1 block text-sm font-medium ",htmlFor:"country",children:["País / Región ",e.jsx("b",{className:"text-red-500",children:"*"})]}),e.jsx("input",{type:"text",id:"country",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:r.country,disabled:!0,required:!0})]}),e.jsx("div",{className:"mt-4 grid gap-4 md:grid-cols-5",children:e.jsxs("div",{className:"md:col-span-3",children:[e.jsxs("label",{className:"mb-1 block text-sm font-medium ",htmlFor:"department",children:["Región / Provincia ",e.jsx("b",{className:"text-red-500",children:"*"})]}),e.jsxs("select",{id:"department",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:r.department,onChange:t=>c(s=>({...s,department:t.target.value})),required:!0,children:[e.jsx("option",{value:"",children:"Elige una opción"}),Object.keys(S).map((t,s)=>e.jsx("option",{value:t,children:S[t].name},s))]})]})}),S[r.department]&&e.jsx("div",{className:"mt-4 grid gap-4 md:grid-cols-5",children:Array.isArray(S[r.department].items)?e.jsxs(e.Fragment,{children:[e.jsxs("div",{className:"md:col-span-3",children:[e.jsxs("label",{className:"mb-1 block text-sm font-medium ",htmlFor:"district",children:["Provincia ",e.jsx("b",{className:"text-red-500",children:"*"})]}),e.jsxs("select",{id:"province",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:r.province,onChange:t=>c(s=>({...s,province:t.target.value})),required:!0,children:[e.jsx("option",{value:"",children:"Elige una opción"}),S[r.department].items.map((t,s)=>e.jsx("option",{value:t,children:t},s))]})]}),e.jsxs("div",{className:"md:col-span-2",children:[e.jsx("label",{className:"mb-1 block text-sm font-medium  truncate text-ellipsis",htmlFor:"postalCode",title:"Código postal",children:"Código postal"}),e.jsx("input",{type:"text",id:"postalCode",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:r.zip_code,onChange:t=>c(s=>({...s,zip_code:t.target.value}))})]})]}):e.jsxs(e.Fragment,{children:[e.jsxs("div",{className:"md:col-span-2",children:[e.jsxs("label",{className:"mb-1 block text-sm font-medium  truncate text-ellipsis",htmlFor:"postalCode",title:"Código postal",children:["Departamento ",e.jsx("b",{className:"text-red-500",children:"*"})]}),e.jsx("input",{type:"text",id:"postalCode",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:r.province,onChange:t=>c(s=>({...s,province:t.target.value})),required:!0})]}),e.jsxs("div",{className:"md:col-span-2",children:[e.jsxs("label",{className:"mb-1 block text-sm font-medium  truncate text-ellipsis",htmlFor:"postalCode",title:"Código postal",children:["Distrito ",e.jsx("b",{className:"text-red-500",children:"*"})]}),e.jsx("input",{type:"text",id:"postalCode",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:r.district,onChange:t=>c(s=>({...s,district:t.target.value})),required:!0})]}),e.jsxs("div",{children:[e.jsx("label",{className:"mb-1 block text-sm font-medium  truncate text-ellipsis",htmlFor:"postalCode",title:"Código postal",children:"Código postal"}),e.jsx("input",{type:"text",id:"postalCode",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:r.zip_code,onChange:t=>c(s=>({...s,zip_code:t.target.value}))})]})]})}),e.jsx("div",{className:"mt-4",children:e.jsxs("div",{className:"mt-4 grid gap-4 md:grid-cols-5 lg:grid-cols-3",children:[e.jsxs("div",{className:"md:col-span-3 lg:col-span-2",children:[e.jsxs("label",{className:"mb-1 block text-sm font-medium ",htmlFor:"address",children:["Dirección de la calle ",e.jsx("b",{className:"text-red-500",children:"*"})]}),e.jsx("input",{type:"text",id:"address",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:r.address,placeholder:"Nombre de la calle y número de la calle",onChange:t=>c(s=>({...s,address:t.target.value})),required:!0})]}),e.jsxs("div",{className:"md:col-span-2 lg:col-span-1",children:[e.jsxs("label",{className:"mb-1 block text-sm font-medium ",htmlFor:"number",children:["Número ",e.jsx("b",{className:"text-red-500",children:"*"})]}),e.jsx("input",{type:"text",id:"number",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:r.number,placeholder:"Nombre de la calle y número de la calle",onChange:t=>c(s=>({...s,number:t.target.value})),required:!0})]})]})}),e.jsxs("div",{className:"mt-4",children:[e.jsx("label",{className:"mb-1 block text-sm font-medium ",htmlFor:"apartment",children:"Apartamento, habitación, piso, etc. (opcional)"}),e.jsx("input",{type:"text",id:"apartment",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:r.reference,onChange:t=>c(s=>({...s,reference:t.target.value}))})]}),e.jsxs("div",{className:"mt-4",children:[e.jsxs("label",{className:"mb-1 block text-sm font-medium ",htmlFor:"phone",children:["Teléfono/Celular ",e.jsx("b",{className:"text-red-500",children:"*"})]}),e.jsx("input",{type:"tel",id:"phone",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",value:r.phone,onChange:t=>c(s=>({...s,phone:t.target.value})),required:!0})]}),e.jsxs("div",{className:"mt-4",children:[e.jsx("label",{className:"mb-1 block text-sm font-medium ",htmlFor:"orderNotes",children:"Notas del pedido (opcional)"}),e.jsx("textarea",{id:"orderNotes",className:"w-full rounded-md border border-gray-300 p-2 text-sm outline-none",rows:3,placeholder:"Notas sobre tu pedido, por ejemplo, notas especiales para la entrega.",value:r.comment,onChange:t=>c(s=>({...s,comment:t.target.value})),style:{minHeight:81,fieldSizing:"content"}})]}),e.jsxs("div",{className:"mt-6",children:[e.jsx("h3",{className:"mb-4 text-xl font-semibold",children:"Pago"}),e.jsxs("div",{className:"rounded-md border border-gray-300",children:[e.jsxs("div",{className:"p-4 py-3 flex justify-between",children:[e.jsx("img",{className:"h-4",src:"/assets/img/checkout/culqi-logo.svg",alt:"Culqi"}),e.jsxs("div",{className:"flex gap-2",children:[e.jsx("img",{className:"h-4",src:"/assets/img/checkout/cards.svg",alt:"Cards"}),e.jsx("img",{className:"h-4",src:"/assets/img/checkout/pagoefectivo.svg",alt:"Pago efectivo"}),e.jsx("img",{className:"h-4",src:"/assets/img/checkout/yape.svg",alt:"Yape"})]})]}),e.jsxs("p",{className:"text-xs bg-[#f9f9f9] p-4 px-6 rounded-b",children:["Acepta pagos con ",e.jsx("b",{children:"tarjetas de débito y crédito, Yape, Cuotealo BCP y PagoEfectivo"}),"(billeteras móviles, agentes y bodegas)."]})]})]}),e.jsx("div",{className:"mt-6 text-xs",children:e.jsxs("p",{className:"text-justify",children:["Sus datos personales se utilizarán para procesar su pedido, respaldar su experiencia en este sitio web y para otros fines descritos en nuestra "," ",e.jsx("a",{href:"#",className:"text-purple-600 hover:underline",children:"política de privacidad"}),"."]})})]}),e.jsx("div",{className:"lg:col-span-2 relative",children:e.jsxs("div",{className:"block sticky top-4",children:[e.jsx("h2",{className:"mb-4 text-xl font-semibold",children:"Tu pedido"}),e.jsxs("div",{className:"rounded-lg border border-gray-200 p-4",children:[e.jsxs("div",{className:"mb-4 flex justify-between border-b pb-2 font-bold",children:[e.jsx("span",{className:"",children:"Producto"}),e.jsx("span",{className:"",children:"Subtotal"})]}),e.jsx("div",{className:"mb-2",children:g.map((t,s)=>{var C;return e.jsxs("div",{className:"mb-1 flex items-center justify-between text-sm",children:[e.jsxs("div",{className:"flex gap-2",children:[e.jsx("div",{className:"h-10 aspect-[3/4] relative",children:e.jsx("img",{className:"h-10 aspect-[3/4] object-contain object-center rounded-md border",src:`/api/colors/media/${(C=t.colors[0])==null?void 0:C.image}`,alt:t.name,onError:P=>P.target.src=`/api/items/media/${t.image}`})}),e.jsxs("div",{children:[e.jsx("p",{children:t.name}),e.jsxs("small",{className:"text-xs text-gray-500",children:[e.jsxs("span",{className:"w-6 inline-block text-nowrap",children:["× ",t.quantity]}),e.jsx("div",{className:"inline-flex flex-wrap gap-1",children:t.colors.map((P,le)=>e.jsx("i",{className:"mdi mdi-circle",style:{color:(P==null?void 0:P.hex)??"#000",WebkitTextStroke:"1px #808080"}}))})]})]})]}),e.jsxs("span",{className:"",children:["S/ ",k(t.price*t.quantity)]})]},s)})}),e.jsxs("div",{className:"mb-2 mt-4 flex justify-between border-b pb-2 text-sm font-bold",children:[e.jsx("span",{children:"Subtotal"}),e.jsxs("span",{children:["S/ ",k(l)]})]}),w&&e.jsxs("div",{className:"mb-2 mt-2 flex justify-between items-center border-b pb-2 text-sm font-bold",children:[e.jsxs("span",{children:["Descuento x paquete",e.jsxs("small",{className:"block text-xs font-light",children:["Elegiste ",w.name," (-",Math.round(w.percentage*1e4)/100,"%)"]})]}),e.jsxs("span",{children:["S/ -",k(v)]})]}),q&&e.jsxs("div",{className:"mb-2 mt-2 flex justify-between items-center border-b pb-2 text-sm font-bold",children:[e.jsxs("span",{children:["Subscripción",e.jsxs("small",{className:"block text-xs font-light",children:[q.name," (-",Math.round(q.percentage*1e4)/100,"%)"]})]}),e.jsxs("span",{children:["S/ -",k(E)]})]}),n&&e.jsxs("div",{className:"mb-2 mt-2 flex justify-between items-center border-b pb-2 text-sm font-bold",children:[e.jsxs("span",{children:["Cupón aplicado ",e.jsx(D,{content:"Eliminar",children:e.jsx("i",{className:"mdi mdi-close text-red-500 cursor-pointer",onClick:()=>N(null)})}),e.jsxs("small",{className:"block text-xs font-light",children:[n.name," ",e.jsx(D,{content:n.description,children:e.jsx("i",{className:"mdi mdi-information-outline ms-1"})})," (-",Math.round(n.amount*100)/100,"%)"]})]}),e.jsxs("span",{children:["S/ -",k(_)]})]}),r.department&&e.jsxs("div",{className:"mb-4 flex justify-between text-sm border-b pb-2",children:[e.jsx("span",{className:"font-bold",children:"Envío"}),e.jsx("span",{children:(B=S==null?void 0:S[r.department])==null?void 0:B.delivery})]}),e.jsxs("div",{className:"flex justify-between text-lg font-semibold",children:[e.jsx("span",{children:"Total"}),e.jsxs("span",{children:["S/ ",k(l-v-E-_)]})]})]}),!n&&e.jsxs("div",{className:"mt-6 flex",children:[e.jsx("input",{ref:p,type:"text",placeholder:"Código de cupón",className:"w-full rounded-l-md border border-gray-300 p-2 px-4 text-sm outline-none uppercase focus:border-[#C5B8D4]",value:n==null?void 0:n.name,onKeyDown:T,disabled:o}),e.jsx("button",{className:"rounded-r-md bg-[#C5B8D4] px-4 py-2 text-sm text-white",type:"button",onClick:M,disabled:o,children:"Aplicar"})]}),e.jsxs("button",{type:"submit",className:"mt-6 w-full rounded-md bg-[#C5B8D4] py-3 text-white disabled:cursor-not-allowed",disabled:o,children:[e.jsx("i",{className:"mdi mdi-lock me-1"}),"Pagar Ahora",e.jsxs("small",{className:"ms-1",children:["(S/ ",k(l-v-E-_),")"]})]})]})})]})})]})})})},re=({user_formula:b,items:d,colors:u,publicKey:h,session:m,bundles:a,planes:p})=>{const[g,r]=y.useState(0),[c,o]=y.useState(null),i=()=>{g<n.length-1&&r(g+1)},n=[{component:e.jsx(ee,{items:d,goToNextPage:i,bundles:a}),name:"Select Product"},{component:e.jsx(te,{items:d,goToNextPage:i}),name:"Select Color"},{component:e.jsx(ae,{goToNextPage:i,setSelectedPlan:o,bundles:a,planes:p}),name:"Select Plan"},{component:e.jsx(se,{formula:b,publicKey:h,selectedPlan:c,goToNextPage:i,bundles:a,planes:p,session:m}),name:"Checkout"}];return n[g].component};K((b,d)=>{G(b).render(e.jsx(H,{...d,children:e.jsx(re,{...d})}))});
