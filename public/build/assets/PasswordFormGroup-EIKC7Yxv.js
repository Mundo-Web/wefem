import{j as s}from"./AboutHeader-CpM0iYLI.js";import{r as o}from"./index-B80Lgev0.js";const u=({col:i,label:l,eRef:e,placeholder:m,required:r=!1,value:n})=>{e||(e=o.useRef());const[t,a]=o.useState("password"),p=()=>{t=="text"?a("password"):a("text")};return s.jsxs("div",{className:`form-group ${i} mb-2`,children:[s.jsxs("label",{htmlFor:"",className:"mb-1",children:[l," ",r&&s.jsx("b",{className:"text-danger",children:"*"})]}),s.jsxs("div",{className:"input-group input-group-merge",children:[s.jsx("input",{ref:e,type:t,className:"form-control",placeholder:m,required:r,defaultValue:n??""}),s.jsx("div",{className:"input-group-text","data-password":"true",onClick:p,children:s.jsx("i",{className:t=="text"?"mdi mdi-eye-off-outline":"mdi mdi-eye-outline"})})]})]})};export{u as P};
