import{j as r}from"./Header-Bdo2C3ON.js";import{r as l}from"./index-DFv2mRv-.js";const j=({col:o,label:t,eRef:s,required:e=!1,children:a,dropdownParent:c,multiple:m=!1,disabled:n=!1,onChange:x=()=>{},templateResult:f,templateSelection:i})=>(s||(s=l.useRef()),l.useEffect(()=>{$(s.current).select2({dropdownParent:c,templateResult:f,templateSelection:i}),$(s.current).on("change",x)},[c]),r.jsxs("div",{className:`form-group ${o} mb-2`,children:[r.jsxs("label",{htmlFor:"",children:[t," ",t&&e&&r.jsx("b",{className:"text-danger",children:"*"})]}),r.jsx("select",{ref:s,required:e,className:"form-control",style:{width:"100%"},disabled:n,multiple:m,children:a})]}));export{j as S};
