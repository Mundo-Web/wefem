import{j as r}from"./StatisticCard-Bdo2C3ON.js";import{r as c}from"./index-DFv2mRv-.js";const u=({id:e,col:a,eRef:s,label:l,required:t=!1,onChange:o,disabled:n=!1,checked:m,refreshable:i=null})=>(e||(e=`ck-${crypto.randomUUID()}`),s||(s=c.useRef()),c.useEffect(()=>{new Switchery(s.current,{size:"small",color:"#64b0f2"}),$(s.current).on("change",o)},[i]),r.jsx(r.Fragment,{children:r.jsxs("div",{className:`form-group ${a} mb-2`,children:[r.jsxs("label",{htmlFor:e,className:"mb-1",children:[l," ",t&&r.jsx("b",{className:"text-danger",children:"*"})]}),r.jsx("input",{ref:s,id:e,type:"checkbox","data-plugin":"switchery",required:t,disabled:n,defaultChecked:m})]})}));export{u as S};
