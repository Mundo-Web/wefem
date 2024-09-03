import{R as e}from"./Accordion-B80Lgev0.js";import{c}from"./ReactAppend-CCMqV5u4.js";import{C as o}from"./CreateReactScript-CMRUimfa.js";import"./TippyButton-Ca89MSNc.js";import{B as s}from"./Base-ByuOWtOb.js";import{H as m}from"./HtmlContent-Xxru9nF6.js";import"./MenuItem-YvjQIalw.js";import"./___vite-browser-external_commonjs-proxy-DqvwVSHi.js";import"./SelectAPIFormGroup-D3e_Xn4g.js";import"./logo-BjQK9OLG.js";const i=({coach:t,country:r,resources:n})=>e.createElement("div",{className:"flex flex-col-reverse md:flex-row gap-4 md:gap-8"},e.createElement("div",{className:"md:w-2/3"},e.createElement("img",{className:"w-full aspect-[8/3] object-cover object-center rounded-lg",src:`/api/cover/${t.uuid}`,alt:"Cover Photo"}),e.createElement("div",{className:"flex gap-4 my-[5%] items-center"},e.createElement("img",{className:"w-24 h-24 rounded-full object-cover object-center",src:`/api/profile/${t.uuid}`,alt:"Profile Photo"}),e.createElement("div",null,e.createElement("h1",{className:"text-2xl font-bold"},t.name," ",t.lastname),e.createElement("p",null,t.title))),e.createElement("div",{className:"prose"},e.createElement(m,{html:t.description})),e.createElement("h3",{className:"text-lg font-bold mt-[5%] mb-[2.5%]"},"Contenidos y temas"),e.createElement("div",{id:"accordion-flush","data-accordion":"collapse","data-active-classes":"text-gray-500 dark:text-gray-400","data-inactive-classes":"text-gray-500 dark:text-gray-400"},n.map((l,a)=>e.createElement(e.Fragment,null,e.createElement("h2",{id:`accordion-heading-${a}`},e.createElement("button",{type:"button",className:"flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200  dark:text-gray-400 gap-3","data-accordion-target":`#accordion-${a}`,"aria-expanded":"true","aria-controls":`accordion-${a}`},e.createElement("span",null,l.name),e.createElement("i",{"data-accordion-icon":!0,className:"text-lg rotate-180 shrink-0 fas fa-angle-down"}))),e.createElement("div",{id:`accordion-${a}`,className:"hidden","aria-labelledby":`accordion-heading-${a}`},e.createElement("div",{className:"py-5 border-b border-gray-200 prose"},e.createElement(m,{html:l.description}))))))),e.createElement("div",{className:"md:w-1/3 sticky top-[15%] h-max"},e.createElement("h2",{className:"text-xl font-semibold mb-4"},"Datos del Coach"),e.createElement("h3",{className:"text-lg"},"S/ 120.00"),e.createElement("p",{className:"mb-2"},e.createElement("i",{className:"fas fa-globe-americas w-6"}),e.createElement("b",null,"Nacionalidad"),": ",r.name," - ",t.city),e.createElement("p",{className:"mb-2"},e.createElement("i",{className:"fas fa-file-alt w-6"}),e.createElement("b",null,"Resumen"),": ",t.summary),e.createElement("button",{type:"button",class:"focus:outline-none text-white bg-[#ff5b5b] hover:bg-[#ff5b5bbb] focus:ring-4 focus:ring-[#ff5b5bdd] font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 "},"Quiero mi coach",e.createElement("i",{className:"fab fa-whatsapp ms-2"}))));o((t,r)=>{c(t).render(e.createElement(s,{...r},e.createElement(i,{...r})))});
