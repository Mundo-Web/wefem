import{j as e}from"./AboutHeader-DEdD30eg.js";import{r as x}from"./index-RYns6xqu.js";import{i as h}from"./tippy-react.esm-DYFqe69e.js";import{R as m}from"./index-SDlHnhXR.js";import"./Results-2jWyQwHC.js";import"./sweetalert2.all-DJo0UVK6.js";const f=({session:l,showSlogan:a,gradientStart:d,menuGradientEnd:c})=>{const[t,r]=x.useState(!1),i=x.useRef(null),o=s=>{s.target.closest(".menu-toggle")?r(!t):r(!1)};return x.useEffect(()=>{const s=n=>{i.current&&!i.current.contains(n.target)&&r(!1)};return document.addEventListener("mousedown",s),()=>{document.removeEventListener("mousedown",s)}},[]),e.jsxs(e.Fragment,{children:[a&&e.jsxs("div",{className:"text-center px-[5%] py-4 bg-[#A191B8] text-white text-sm",children:["¡SUSCRÍBETE A CLUB VUÁ Y OBTÉN ",e.jsxs("b",{children:["ENVÍO GRATIS ",e.jsx("br",{className:"md:hidden"}),"A TODO LIMA METROPOLITANA!"]})]}),e.jsxs("header",{className:"sticky top-0 w-screen z-40",children:[e.jsxs("div",{className:`flex justify-between items-center ${!t&&location.pathname=="/"&&"bg-opacity-80"} text-white pe-[5%] shadow-lg lg:shadow-none`,style:{backgroundImage:`linear-gradient(to right, ${d}, ${c})`},children:[e.jsxs("div",{className:"flex items-center md:px-[5%]",children:[e.jsx("button",{onClick:o,className:"text-white h-16 w-16 px-6 menu-toggle lg:hidden","aria-label":"Toggle menu",children:e.jsx("i",{className:`fas ${t?"fa-times":"fa-bars"} text-2xl`})}),e.jsx("a",{href:"/",children:e.jsx("img",{src:"/assets/img/logo.svg",alt:"Trasciende Logo",className:"h-8 -mt-3.5"})})]}),e.jsxs("div",{className:"py-6 flex gap-2 md:gap-4 items-center",children:[e.jsxs("ul",{className:"hidden lg:flex gap-8 me-4",children:[e.jsx("li",{children:e.jsx("a",{href:"/about",className:"block py-2",children:"NOSOTROS"})}),e.jsx("li",{children:e.jsx("a",{href:"/supplies",className:"block py-2",children:"NUESTROS INGREDIENTES"})}),e.jsx("li",{children:e.jsx("a",{href:"/plans",className:"block py-2",children:"SUSCRIPCIÓN"})}),e.jsx("li",{children:e.jsx("a",{href:"/faqs",className:"block py-2",children:"Q&A"})})]}),e.jsx("button",{href:"/test",className:"rounded-full px-3 py-2 bg-white text-[#A191B8] text-sm",children:"CREA TU FORMULA"}),e.jsx(h,{content:l?`Perfil de ${l.name}`:"Iniciar sesión",children:e.jsxs("a",{className:"relative block",href:"/login",children:[l&&e.jsx("span",{className:"w-2 h-2 bg-green-500 rounded-full font-bold absolute bottom-0 -right-1"}),e.jsx("i",{className:"text-xl fa fa-user"})]})})]})]}),e.jsx("div",{ref:i,className:`absolute top-full inset-0 text-white z-40 transform ${t?"opacity-1":"hidden opacity-0"} transition-transform duration-300 ease-in-out p-[5%] h-max overflow-y-auto`,style:{backgroundImage:`linear-gradient(to right, ${d}, ${c})`},children:e.jsxs("ul",{className:"flex flex-col gap-4 items-center justify-center",children:[e.jsx("li",{children:e.jsx("a",{href:"/about",children:"NOSOTROS"})}),e.jsx("li",{children:e.jsx("a",{href:"/supplies",children:"NUESTROS INGREDIENTES"})}),e.jsx("li",{children:e.jsx("a",{href:"/plans",children:"SUBSCRIPCION"})}),e.jsx("li",{children:e.jsx("a",{href:"/faqs",children:"Q&A"})})]})})]})]})},j=({html:l,properties:a})=>e.jsx("div",{dangerouslySetInnerHTML:{__html:l},...a}),p=({socials:l,generals:a})=>{var i,o;x.useRef();const[d,c]=x.useState(null);x.useState();const t=[{title:"Términos y condiciones",modalContent:(i=a.find(s=>s.correlative=="terms_conditions"))==null?void 0:i.description},{title:"Políticas de privacidad",modalContent:(o=a.find(s=>s.correlative=="privacy_policy"))==null?void 0:o.description}],r=()=>c(null);return e.jsxs(e.Fragment,{children:[e.jsxs("footer",{className:"px-[5%] py-[10%] md:px-[10%] md:py-[7.5%] lg:py-[5%] bg-transparent text-white relative grid grid-cols-3 md:grid-cols-2 gap-x-4 gap-y-6 text-sm",children:[e.jsxs("div",{className:"col-span-2 flex flex-col gap-4 md:flex-row-reverse items-start justify-evenly md:col-span-1",children:[e.jsxs("ul",{className:"flex flex-col gap-2",children:[e.jsx("li",{children:e.jsx("a",{href:"",children:"Conversemos"})}),e.jsx("li",{children:e.jsx("a",{href:"",children:"Preguntas frecuentes"})}),e.jsx("li",{children:e.jsx("a",{href:"",children:"Terminos y condiciones"})}),e.jsx("li",{children:e.jsx("a",{href:"",children:"Libro de reclamaciones"})})]}),e.jsx("img",{src:"/assets/img/logo.svg",alt:"Trasciende Logo",className:"h-8 w-max"})]}),e.jsxs("div",{className:"col-span-1 flex flex-col gap-4 md:flex-row items-start justify-evenly md:col-span-1",children:[e.jsxs("ul",{className:"flex flex-col gap-2",children:[e.jsx("li",{children:e.jsx("a",{href:"",children:"Telefono"})}),e.jsx("li",{children:e.jsx("a",{href:"",children:"Mail"})}),e.jsx("li",{children:e.jsx("a",{href:"",children:"WhatsApp"})}),e.jsx("li",{children:e.jsx("a",{href:"",children:"‎"})})]}),e.jsx("div",{className:"flex items-end justify-start gap-2",children:l.map((s,n)=>e.jsx("a",{href:s.link,className:`text-xl bg-white text-[#f1d7c1] ${s.icon} w-8 h-8 pt-0.5 text-center rounded-full`},n))})]})]}),t.map((s,n)=>e.jsxs(m,{isOpen:d===n,onRequestClose:r,contentLabel:s.title,className:"absolute left-1/2 -translate-x-1/2 bg-white p-6 rounded shadow-lg w-[95%] max-w-lg my-8",overlayClassName:"fixed inset-0 bg-black bg-opacity-50 z-50",children:[e.jsx("button",{onClick:r,className:"float-right text-gray-500 hover:text-gray-900",children:"Cerrar"}),e.jsx("h2",{className:"text-2xl font-bold mb-4",children:s.title}),e.jsx(j,{className:"prose",html:s.modalContent})]},n))]})},w=({children:l,session:a,summary:d,socials:c,generals:t,showSlogan:r=!0,showFooter:i=!0,gradientStart:o="#c4b8d3",gradientEnd:s="#f1d7c1",menuGradientEnd:n="#dbc8c9"})=>e.jsxs("section",{style:{backgroundImage:`linear-gradient(to right bottom, ${o}, ${s})`},children:[e.jsx(f,{socials:c,generals:t,showSlogan:r,gradientStart:o,menuGradientEnd:n,session:a}),e.jsx("main",{className:"overflow-hidden min-h-[360px] relative",children:l}),i&&e.jsx(p,{summary:d,socials:c,generals:t})]});export{w as B,j as H};
