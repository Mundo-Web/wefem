import{j as e}from"./AboutHeader-CpM0iYLI.js";import{r as v}from"./index-B80Lgev0.js";import{c as R}from"./ReactAppend-CBRQCQGz.js";import{B as O}from"./Base-EMiPcBfW.js";import{C as G}from"./CreateReactScript-BuUiikl4.js";import{m as w,f as q,h as P,i as Q,S as _,a as V}from"./swiper-react-DKHvTq9_.js";import"./CallToAction-Y9yYs4wC.js";/* empty css               */import"./Strengths-BVm0bzZ4.js";import"./Banner-BDtcAADb.js";import"./Supplies-BRR6oGBd.js";import"./index-B1nVdsa0.js";import{H as Y,F as J}from"./Footer-CSNklA-w.js";import{F as U}from"./FeaturesSection-w6QS8BNC.js";import{a as L,c as W,N as X,P as Z}from"./ProductCarousel-CvCO6RR8.js";import{G as K}from"./GuaranteeSection-XC1crFf3.js";import"./ProductCarousel-BF-uNVMG.js";import{I as ee}from"./InstagramSection-DzP6mLUB.js";import"./index-DO3Aws4m.js";import"./index.esm-Cu-mVv1q.js";import"./___vite-browser-external_commonjs-proxy-C9-083JZ.js";import"./main-B2CtU6ez.js";/* empty css              */import"./index-CqrOtH36.js";const I=({target:g})=>{const[s,o]=v.useState(0),i=v.useRef(null);return v.useEffect(()=>{const u=new IntersectionObserver(x=>{x.forEach(b=>{if(b.isIntersecting){let p=0;const N=Math.abs(Math.floor(2e3/g)),k=setInterval(()=>{p+=1,o(p),p>=g&&(clearInterval(k),o(g))},N);u.unobserve(b.target)}})},{threshold:.5});return i.current&&u.observe(i.current),()=>u.disconnect()},[g]),e.jsx("h3",{ref:i,className:"text-[90.94px] md:text-[111.94px] leading-[100.94px] md:leading-[111.94px] md:tracking-[9.99px] xl:text-[136.9px] 2xl:text-[146.9px] tracking-[13.12px] xl:leading-[120.9px] 2xl:leading-[146.9px] font-bebas",children:s})},se=()=>e.jsx("div",{className:"relative overflow-hidden pt-8 bg-[#EFE5FF]",children:e.jsx("div",{className:"bg-[#6745BA]",children:e.jsxs("div",{className:"relative lg:max-w-5xl 2xl:max-w-7xl mx-auto text-white py-10 px-6 lg:px-0 flex flex-col items-center text-center",children:[e.jsxs("div",{className:"md:ml-60 lg:ml-0 max-w-2xl mx-auto md:mx-0 relative z-10",children:[e.jsx("h2",{className:"text-[21.07px] md:text-[21.07px] leading-[25.28px] xl:text-[24.65px] 2xl:text-[27.65px] xl:leading-[33.18px] font-bold",children:"Una copa o disco menstrual en 5 años"}),e.jsxs("div",{className:"flex justify-center gap-10 mt-4",children:[e.jsxs("div",{className:"w-1/2 flex flex-col items-center justify-center",children:[e.jsx("span",{className:"text-[24.99px] md:text-[24.99px] md:leading-[40.78px] xl:text-[28.79px] 2xl:text-[32.79px] 2xl:leading-[53.52px] font-bold text-[#E7FF57]",children:"Reemplaza"}),e.jsx(I,{target:600}),e.jsx("p",{className:"text-[15.84px] md:text-[18.84px] md:leading-[47.47px] xl:text-[20.14px] 2xl:text-[24.14px] 2xl:leading-[62.3px]",children:"Toallas higiénicas"})]}),e.jsxs("div",{className:"w-1/2 flex flex-col items-center justify-center",children:[e.jsx("span",{className:"text-[24.99px] md:leading-[40.78px] xl:text-[28.79px] 2xl:text-[32.79px] 2xl:leading-[53.52px] font-bold text-[#E7FF57]",children:"Ahorra"}),e.jsx(I,{target:900}),e.jsx("p",{className:"text-[15.84px] md:text-[18.84px] md:leading-[47.47px] xl:text-[20.14px] 2xl:text-[24.14px] 2xl:leading-[62.3px]",children:"Soles Aprox"})]})]})]}),e.jsx("img",{src:"/assets/img/infobenefits/left.png",alt:"Copa menstrual",className:"hidden sm:block absolute -left-4 md:-left-36 2xl:-left-16 bottom-0 top-[-90px] h-[540px] z-0 transform scale-x-[-1]"}),e.jsx("img",{src:"/assets/img/infobenefits/right.png",alt:"Disco menstrual",className:"hidden  lg:block absolute right-0 md:-right-32 2xl:-right-12 bottom-0 top-[-60px] h-[470px] z-0 transform scale-x-[-1] -rotate-[8deg]"})]})})});function te(g){let{swiper:s,extendParams:o,on:i,emit:u}=g;const x="swiper-pagination";o({pagination:{el:null,bulletElement:"span",clickable:!1,hideOnClick:!1,renderBullet:null,renderProgressbar:null,renderFraction:null,renderCustom:null,progressbarOpposite:!1,type:"bullets",dynamicBullets:!1,dynamicMainBullets:1,formatFractionCurrent:t=>t,formatFractionTotal:t=>t,bulletClass:`${x}-bullet`,bulletActiveClass:`${x}-bullet-active`,modifierClass:`${x}-`,currentClass:`${x}-current`,totalClass:`${x}-total`,hiddenClass:`${x}-hidden`,progressbarFillClass:`${x}-progressbar-fill`,progressbarOppositeClass:`${x}-progressbar-opposite`,clickableClass:`${x}-clickable`,lockClass:`${x}-lock`,horizontalClass:`${x}-horizontal`,verticalClass:`${x}-vertical`,paginationDisabledClass:`${x}-disabled`}}),s.pagination={el:null,bullets:[]};let b,p=0;function N(){return!s.params.pagination.el||!s.pagination.el||Array.isArray(s.pagination.el)&&s.pagination.el.length===0}function k(t,l){const{bulletActiveClass:a}=s.params.pagination;t&&(t=t[`${l==="prev"?"previous":"next"}ElementSibling`],t&&(t.classList.add(`${a}-${l}`),t=t[`${l==="prev"?"previous":"next"}ElementSibling`],t&&t.classList.add(`${a}-${l}-${l}`)))}function T(t,l,a){if(t=t%a,l=l%a,l===t+1)return"next";if(l===t-1)return"previous"}function E(t){const l=t.target.closest(L(s.params.pagination.bulletClass));if(!l)return;t.preventDefault();const a=P(l)*s.params.slidesPerGroup;if(s.params.loop){if(s.realIndex===a)return;const n=T(s.realIndex,a,s.slides.length);n==="next"?s.slideNext():n==="previous"?s.slidePrev():s.slideToLoop(a)}else s.slideTo(a)}function y(){const t=s.rtl,l=s.params.pagination;if(N())return;let a=s.pagination.el;a=w(a);let n,h;const C=s.virtual&&s.params.virtual.enabled?s.virtual.slides.length:s.slides.length,$=s.params.loop?Math.ceil(C/s.params.slidesPerGroup):s.snapGrid.length;if(s.params.loop?(h=s.previousRealIndex||0,n=s.params.slidesPerGroup>1?Math.floor(s.realIndex/s.params.slidesPerGroup):s.realIndex):typeof s.snapIndex<"u"?(n=s.snapIndex,h=s.previousSnapIndex):(h=s.previousIndex||0,n=s.activeIndex||0),l.type==="bullets"&&s.pagination.bullets&&s.pagination.bullets.length>0){const r=s.pagination.bullets;let j,f,S;if(l.dynamicBullets&&(b=q(r[0],s.isHorizontal()?"width":"height"),a.forEach(c=>{c.style[s.isHorizontal()?"width":"height"]=`${b*(l.dynamicMainBullets+4)}px`}),l.dynamicMainBullets>1&&h!==void 0&&(p+=n-(h||0),p>l.dynamicMainBullets-1?p=l.dynamicMainBullets-1:p<0&&(p=0)),j=Math.max(n-p,0),f=j+(Math.min(r.length,l.dynamicMainBullets)-1),S=(f+j)/2),r.forEach(c=>{const d=[...["","-next","-next-next","-prev","-prev-prev","-main"].map(m=>`${l.bulletActiveClass}${m}`)].map(m=>typeof m=="string"&&m.includes(" ")?m.split(" "):m).flat();c.classList.remove(...d)}),a.length>1)r.forEach(c=>{const d=P(c);d===n?c.classList.add(...l.bulletActiveClass.split(" ")):s.isElement&&c.setAttribute("part","bullet"),l.dynamicBullets&&(d>=j&&d<=f&&c.classList.add(...`${l.bulletActiveClass}-main`.split(" ")),d===j&&k(c,"prev"),d===f&&k(c,"next"))});else{const c=r[n];if(c&&c.classList.add(...l.bulletActiveClass.split(" ")),s.isElement&&r.forEach((d,m)=>{d.setAttribute("part",m===n?"bullet-active":"bullet")}),l.dynamicBullets){const d=r[j],m=r[f];for(let B=j;B<=f;B+=1)r[B]&&r[B].classList.add(...`${l.bulletActiveClass}-main`.split(" "));k(d,"prev"),k(m,"next")}}if(l.dynamicBullets){const c=Math.min(r.length,l.dynamicMainBullets+4),d=(b*c-b)/2-S*b,m=t?"right":"left";r.forEach(B=>{B.style[s.isHorizontal()?m:"top"]=`${d}px`})}}a.forEach((r,j)=>{if(l.type==="fraction"&&(r.querySelectorAll(L(l.currentClass)).forEach(f=>{f.textContent=l.formatFractionCurrent(n+1)}),r.querySelectorAll(L(l.totalClass)).forEach(f=>{f.textContent=l.formatFractionTotal($)})),l.type==="progressbar"){let f;l.progressbarOpposite?f=s.isHorizontal()?"vertical":"horizontal":f=s.isHorizontal()?"horizontal":"vertical";const S=(n+1)/$;let c=1,d=1;f==="horizontal"?c=S:d=S,r.querySelectorAll(L(l.progressbarFillClass)).forEach(m=>{m.style.transform=`translate3d(0,0,0) scaleX(${c}) scaleY(${d})`,m.style.transitionDuration=`${s.params.speed}ms`})}l.type==="custom"&&l.renderCustom?(r.innerHTML=l.renderCustom(s,n+1,$),j===0&&u("paginationRender",r)):(j===0&&u("paginationRender",r),u("paginationUpdate",r)),s.params.watchOverflow&&s.enabled&&r.classList[s.isLocked?"add":"remove"](l.lockClass)})}function z(){const t=s.params.pagination;if(N())return;const l=s.virtual&&s.params.virtual.enabled?s.virtual.slides.length:s.grid&&s.params.grid.rows>1?s.slides.length/Math.ceil(s.params.grid.rows):s.slides.length;let a=s.pagination.el;a=w(a);let n="";if(t.type==="bullets"){let h=s.params.loop?Math.ceil(l/s.params.slidesPerGroup):s.snapGrid.length;s.params.freeMode&&s.params.freeMode.enabled&&h>l&&(h=l);for(let C=0;C<h;C+=1)t.renderBullet?n+=t.renderBullet.call(s,C,t.bulletClass):n+=`<${t.bulletElement} ${s.isElement?'part="bullet"':""} class="${t.bulletClass}"></${t.bulletElement}>`}t.type==="fraction"&&(t.renderFraction?n=t.renderFraction.call(s,t.currentClass,t.totalClass):n=`<span class="${t.currentClass}"></span> / <span class="${t.totalClass}"></span>`),t.type==="progressbar"&&(t.renderProgressbar?n=t.renderProgressbar.call(s,t.progressbarFillClass):n=`<span class="${t.progressbarFillClass}"></span>`),s.pagination.bullets=[],a.forEach(h=>{t.type!=="custom"&&(h.innerHTML=n||""),t.type==="bullets"&&s.pagination.bullets.push(...h.querySelectorAll(L(t.bulletClass)))}),t.type!=="custom"&&u("paginationRender",a[0])}function A(){s.params.pagination=W(s,s.originalParams.pagination,s.params.pagination,{el:"swiper-pagination"});const t=s.params.pagination;if(!t.el)return;let l;typeof t.el=="string"&&s.isElement&&(l=s.el.querySelector(t.el)),!l&&typeof t.el=="string"&&(l=[...document.querySelectorAll(t.el)]),l||(l=t.el),!(!l||l.length===0)&&(s.params.uniqueNavElements&&typeof t.el=="string"&&Array.isArray(l)&&l.length>1&&(l=[...s.el.querySelectorAll(t.el)],l.length>1&&(l=l.filter(a=>Q(a,".swiper")[0]===s.el)[0])),Array.isArray(l)&&l.length===1&&(l=l[0]),Object.assign(s.pagination,{el:l}),l=w(l),l.forEach(a=>{t.type==="bullets"&&t.clickable&&a.classList.add(...(t.clickableClass||"").split(" ")),a.classList.add(t.modifierClass+t.type),a.classList.add(s.isHorizontal()?t.horizontalClass:t.verticalClass),t.type==="bullets"&&t.dynamicBullets&&(a.classList.add(`${t.modifierClass}${t.type}-dynamic`),p=0,t.dynamicMainBullets<1&&(t.dynamicMainBullets=1)),t.type==="progressbar"&&t.progressbarOpposite&&a.classList.add(t.progressbarOppositeClass),t.clickable&&a.addEventListener("click",E),s.enabled||a.classList.add(t.lockClass)}))}function D(){const t=s.params.pagination;if(N())return;let l=s.pagination.el;l&&(l=w(l),l.forEach(a=>{a.classList.remove(t.hiddenClass),a.classList.remove(t.modifierClass+t.type),a.classList.remove(s.isHorizontal()?t.horizontalClass:t.verticalClass),t.clickable&&(a.classList.remove(...(t.clickableClass||"").split(" ")),a.removeEventListener("click",E))})),s.pagination.bullets&&s.pagination.bullets.forEach(a=>a.classList.remove(...t.bulletActiveClass.split(" ")))}i("changeDirection",()=>{if(!s.pagination||!s.pagination.el)return;const t=s.params.pagination;let{el:l}=s.pagination;l=w(l),l.forEach(a=>{a.classList.remove(t.horizontalClass,t.verticalClass),a.classList.add(s.isHorizontal()?t.horizontalClass:t.verticalClass)})}),i("init",()=>{s.params.pagination.enabled===!1?M():(A(),z(),y())}),i("activeIndexChange",()=>{typeof s.snapIndex>"u"&&y()}),i("snapIndexChange",()=>{y()}),i("snapGridLengthChange",()=>{z(),y()}),i("destroy",()=>{D()}),i("enable disable",()=>{let{el:t}=s.pagination;t&&(t=w(t),t.forEach(l=>l.classList[s.enabled?"remove":"add"](s.params.pagination.lockClass)))}),i("lock unlock",()=>{y()}),i("click",(t,l)=>{const a=l.target,n=w(s.pagination.el);if(s.params.pagination.el&&s.params.pagination.hideOnClick&&n&&n.length>0&&!a.classList.contains(s.params.pagination.bulletClass)){if(s.navigation&&(s.navigation.nextEl&&a===s.navigation.nextEl||s.navigation.prevEl&&a===s.navigation.prevEl))return;const h=n[0].classList.contains(s.params.pagination.hiddenClass);u(h===!0?"paginationShow":"paginationHide"),n.forEach(C=>C.classList.toggle(s.params.pagination.hiddenClass))}});const H=()=>{s.el.classList.remove(s.params.pagination.paginationDisabledClass);let{el:t}=s.pagination;t&&(t=w(t),t.forEach(l=>l.classList.remove(s.params.pagination.paginationDisabledClass))),A(),z(),y()},M=()=>{s.el.classList.add(s.params.pagination.paginationDisabledClass);let{el:t}=s.pagination;t&&(t=w(t),t.forEach(l=>l.classList.add(s.params.pagination.paginationDisabledClass))),D()};Object.assign(s.pagination,{enable:H,disable:M,render:z,update:y,init:A,destroy:D})}const le=()=>e.jsx("section",{className:"text-white bg-[#bf5f9e] relative md:h-[500px] 2xl:h-[600px] overflow-hidden font-font-general",children:e.jsxs("div",{className:"px-[5%] relative xl:px-0 md:max-w-5xl 2xl:max-w-7xl h-full mx-auto z-50",children:[e.jsx("div",{className:"h-full mx-auto flex items-center",children:e.jsxs("div",{className:"max-w-xs md:max-w-sm py-4 md:py-0 xl:max-w-lg 2xl:max-w-xl flex items-center justify-center flex-col z-50",children:[e.jsx("h2",{className:"text-[40.71px] md:text-[48.71px] xl:text-[58.82px] 2xl:text-[72.82px] md:leading-[70px] 2xl:leading-[80px] tracking-[0.01em] font-bold mb-4 text-center",children:"¿Aún no sabes cuál elegir?"}),e.jsx("p",{className:"md:text-[15.26px] xl:text-[18.82px] 2xl:text-[22.82px] leading-[30.92px] tracking-[0.01em] mb-6 text-center",children:"Haz un test personalizado y te ayudaremos a encontrar el método para ti"}),e.jsx("a",{href:"/quiz",className:"inline-flex h-[58.19px] w-[243.46px] bg-[#FF9900] tracking-[0.01em] items-center justify-center text-white uppercase font-semibold xl:w-[304px] xl:h-[70px] text-[16.82px] xl:text-[20.15px] 2xl:w-[364px] 2xl:h-[87px] rounded-[13.63px] leading-[37.73px] 2xl:text-[25.15px]",children:"¡REALIZAR QUIZ!"})]})}),e.jsxs("div",{className:"absolute md:-bottom-10 lg:bottom-0 md:-right-72 lg:-right-40 2xl:-right-20",children:[e.jsx("img",{src:"https://i.ibb.co/bMtGd0Wq/0d4ab93b519ef4f76c6cca1ade5f235a.png",alt:"Quiz Image",className:"w-auto h-[606px] 2xl:h-[636px] object-cover object-center relative z-10",loading:"lazy"}),e.jsx("div",{className:"absolute -bottom-40 left-0 w-full h-full z-0 pointer-events-none",style:{background:"radial-gradient(circle, rgba(0,0,0,0.6) 10%, rgba(0,0,0,0) 60%)",opacity:.7}})]})]})}),ae=()=>{const[g,s]=v.useState(1),[o,i]=v.useState("purple"),[u,x]=v.useState("Talla A"),b=p=>{s(N=>Math.max(1,N+p))};return e.jsxs("section",{className:"py-10 px-[5%] mx-auto font-font-general bg-white",children:[e.jsxs("h2",{className:" text-[30.25px] md:text-[30.25px] 2xl:text-[36.25px] leading-[29.36px] font-bold text-[#212529] mt-6 mb-10 text-center flex gap-2 items-center justify-center",children:[e.jsx("img",{src:"/assets/img/emojis/fire.png",className:"h-8"})," El más vendido"," ",e.jsx("img",{src:"/assets/img/emojis/fire.png",className:"h-8"})]}),e.jsxs("div",{className:"mx-auto flex flex-col lg:flex-row justify-center items-center my-4 gap-8",children:[e.jsx("div",{className:"md:w-[644px] md:h-[644px] lg:w-[500.81px] lg:h-[500.81px] 2xl:w-[620.81px] 2xl:h-[620.81px] overflow-hidden",children:e.jsx("img",{src:"https://i.ibb.co/1tsnJxPj/image.png",alt:"wePack Product",className:"md:w-[644px] md:h-[644px] lg:w-[500.81px] lg:h-[500.81px] 2xl:w-[620.81px] 2xl:h-[620.81px] object-cover rounded-lg",loading:"lazy"})}),e.jsxs("div",{className:"md:w-[644px] lg:w-[350px] 2xl:w-[475px] text-[#333333]",children:[e.jsxs("div",{className:"flex gap-4 lg:block items-end",children:[e.jsx("h3",{className:"text-[30.58px] md:text-[55.58px] lg:text-[40.38px] 2xl:text-[54.38px] font-bold leading-[40.78px]",children:"wePack"}),e.jsx("p",{className:"text-[17.5px] md:text-[31.5px] lg:text-[16.81px] 2xl:text-[30.81px]  font-normal inline-flex ",children:"(Disco + Esterilizador)"})]}),e.jsxs("p",{className:"text-[12.36px] md:text-[14.36px] lg:text-[11px] 2xl:text-[14.05px] mt-2 leading-relaxed ",children:[e.jsx("img",{src:"/assets/img/emojis/blossom.png",className:"h-[15.05px] inline-flex"})," ","Recipiente menstrual con el doble de capacidad que una copa, ideal para recolectar sangre y tener relaciones sin preocupaciones durante tu periodo. ¡Libertad total!",e.jsx("img",{src:"/assets/img/emojis/crescent-moon.png",className:"h-[15.05px] inline-flex"}),e.jsx("img",{src:"/assets/img/emojis/sparkling-heart.png",className:"h-[15.05px] inline-flex"})]}),e.jsx("div",{className:"w-[158.43px] 2xl:w-[155px] h-[20px] 2xl:h-[25px] bg-[#212529] text-white rounded-[5.44px] my-4 flex items-center justify-center",children:e.jsxs("p",{className:"w-[158.43px]   h-[25.55px]  bg-[#212529]  text-white rounded-[5.44px] my-4 flex items-center justify-center text-[10.88px]  leading-[21.75px]",children:[e.jsx("img",{src:"/assets/img/emojis/fire.png",className:"h-[11.88px] inline-flex mr-2"})," ",e.jsx("span",{className:"font-bold text-[10.88px]",children:"AHORRA"})," ","S/ 75.00"," ",e.jsx("img",{src:"/assets/img/emojis/fire.png",className:"h-[11.88px] inline-flex ml-2"})]})}),e.jsxs("div",{className:"flex gap-4 lg:block items-end",children:[e.jsx("p",{className:"text-[30.42px] md:text-[50.42px] lg:text-[35.33px] 2xl:text-[49.33px] font-bold text-[#FC58BE]",children:"S/ 169.90"}),e.jsx("p",{className:"text-[20.39px] md:text-[25.39px] lg:text-[18.84px] 2xl:text-[24.84px] text-[#B4B4B4]",children:e.jsx("del",{children:"Antes S/ 255"})})]}),e.jsx("div",{className:"flex items-center mt-2 text-[#FF9900] gap-1 text-base",children:[1,2,3,4,5].map((p,N)=>e.jsx("img",{src:"/assets/img/emojis/star-score.png",className:"h-[19px] inline-flex"}))}),e.jsxs("div",{className:"relative flex justify-between sm:justify-start gap-4 lg:gap-0 lg:justify-between items-center  my-2",children:[e.jsxs("div",{className:"flex items-start gap-2",children:[e.jsx("p",{className:"md:text-[10.05px] 2xl:text-[13.05px] font-bold",children:"Color:"}),e.jsxs("div",{className:"flex items-center gap-2",children:[e.jsx("button",{onClick:()=>i("purple"),className:`rounded-full p-1 border ${o==="purple"?"border-[#222222]":"border-[#DDDDDD]"}`,children:e.jsx("div",{className:"w-[22px] h-[22px] rounded-full bg-[#C196E8]"})}),e.jsx("button",{onClick:()=>i("pink"),className:`rounded-full p-1 border ${o==="pink"?"border-[#222222]":"border-[#DDDDDD]"}`,children:e.jsx("div",{className:"w-[22px] h-[22px] rounded-full bg-[#EF62BA]"})})]})]}),e.jsx("div",{class:"lg:absolute right-0 lg:top-1/2  ",children:e.jsxs("button",{class:"inline-flex md:gap-2 2xl:gap-0 items-center justify-center w-[180.45px] 2xl:w-[187.45px] h-[34.02px] font-medium text-[12.05px] 2xl:text-[15.57px] leading-[15.95px] bg-[#5F48B7] text-white rounded-[8.51px]",children:[e.jsx("svg",{xmlns:"http://www.w3.org/2000/svg",class:"h-5 fill-white mr-2",viewBox:"0 0 640 512",children:e.jsx("path",{d:`M0 336c0 26.5 21.5 48 48 48l544 0c26.5 0 48-21.5\r
                48-48l0-160c0-26.5-21.5-48-48-48l-64 0 0 80c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-80-64 0 0 80c0\r
                8.8-7.2 16-16 16s-16-7.2-16-16l0-80-64 0 0 80c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-80-64 0 0 80c0\r
                8.8-7.2 16-16 16s-16-7.2-16-16l0-80-64 0 0 80c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-80-64 0c-26.5\r
                0-48 21.5-48 48L0 336z`})}),"¿Cuál es mi talla?"]})})]}),e.jsxs("div",{className:" block md:flex gap-4 lg:block items-end",children:[e.jsxs("div",{className:" w-full md:w-1/2 lg:w-full mb-4 2xl:mb-6",children:[e.jsx("label",{className:"md:text-[10.05px] 2xl:text-[13.05px] font-bold",children:"Selecciona tu talla:"}),e.jsxs("select",{className:"w-full h-[40.94px] 2xl:h-[48.94px] md:text-[12.05px] 2xl:text-[14.05px] px-4 bg-[#EFEDF8] rounded-[5.44px] appearance-none  outline-none ring-0 border-0 cursor-pointer focus:outline-none",value:u,onChange:p=>x(p.target.value),children:[e.jsx("option",{children:"Talla A"}),e.jsx("option",{children:"Talla B"}),e.jsx("option",{children:"Talla C"})]})]}),e.jsx("div",{className:" w-full md:w-1/2 lg:w-full mb-4 2xl:mb-6",children:e.jsxs("div",{className:" flex h-[40.94px] text-[#000000]  bg-[#EFEDF8] items-center justify-around  rounded-[5.44px] ",children:[e.jsx("button",{onClick:()=>b(-1),className:"w-8 h-8 text-[17.84px] text-[#444444]",children:"-"}),e.jsx("span",{className:"md:text-base 2xl:text-xl font-medium",children:g}),e.jsx("button",{onClick:()=>b(1),className:"w-8 h-8 text-[17.84px] text-[#444444]",children:"+"})]})})]}),e.jsx("div",{className:"flex justify-center",children:e.jsxs("button",{class:"mt-4 relative w-full sm:w-[332px] lg:w-full h-[59px] lg:h-[35.88px] 2xl:h-[39.88px] text-[17.02px] lg:text-[12.59px]  2xl:text-[13.59px] leading-[13.59px] bg-[#FC58BE] text-white rounded-[6px]  lg:rounded-[2.72px] border-[1.81px] border-[#FC58BE]  flex items-center justify-center",children:[e.jsx("span",{class:"",children:"Añadir al carrito"}),e.jsx("svg",{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 576 512",className:"fill-white h-4 lg:h-3 absolute  top-1/2 -translate-y-1/2  right-16 ",children:e.jsx("path",{d:"M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"})})]})})]})]})]})},F=[{image:"https://i.ibb.co/Q3FDFsbt/image.png"},{image:"https://i.ibb.co/dHGmtkf/dfaabe6966459462e61bf7aef70f58b4.png"},{image:"https://i.ibb.co/3mhCpVtC/image.png"},{image:"https://i.ibb.co/dHGmtkf/dfaabe6966459462e61bf7aef70f58b4.png"},{image:"https://i.ibb.co/3mhCpVtC/image.png"}],ie=()=>{const[g,s]=v.useState(0);return e.jsx("div",{className:"py-8 px-4 bg-gradient-to-b from-[#6745BA] to-[#522EAA]",children:e.jsxs("div",{className:"md:max-w-4xl 2xl:max-w-6xl mx-auto text-center text-white",children:[e.jsxs("h2",{class:"hidden text-white text-center md:text-[45.41px] 2xl:text-[55.41px]    2xl:leading-[83.11px] tracking-[0.01em] font-bold md:mb-8 2xl:mb-12 lg:flex items-center justify-center gap-2",children:["Nuestras weLovers"," ",e.jsx("img",{src:"/assets/img/emojis/stars.png",alt:"",className:"h-12"}),e.jsx("span",{class:"whitespace-nowrap",children:"lo afirman"}),e.jsx("img",{src:"/assets/img/emojis/stars.png",alt:"",className:"h-12"})]}),e.jsxs("h2",{class:"lg:hidden text-white text-center md:text-[45.41px] 2xl:text-[55.41px]    2xl:leading-[83.11px] tracking-[0.01em] font-bold md:mb-8 2xl:mb-12  items-center justify-center gap-2",children:["Nuestras weLovers ",e.jsx("br",{}),e.jsxs("span",{className:"flex w-full items-center justify-center gap-2",children:[e.jsx("img",{src:"/assets/img/emojis/stars.png",alt:"",className:"h-8 sm:h-12"}),e.jsx("span",{class:"whitespace-nowrap",children:"lo afirman"}),e.jsx("img",{src:"/assets/img/emojis/stars.png",alt:"",className:"h-8 sm:h-12"})]})]}),e.jsxs("div",{className:"hidden lg:block max-w-[60rem] mx-auto relative mt-10",children:[e.jsx(_,{navigation:{prevEl:".custom-prev",nextEl:".custom-next"},slidesPerView:1.5,spaceBetween:10,centeredSlides:!0,loop:!0,breakpoints:{640:{slidesPerView:2.5,spaceBetween:10},1024:{slidesPerView:3,spaceBetween:0}},className:"testimonialSwiper",modules:[X,te],onSlideChange:o=>s(o.realIndex),children:F.map((o,i)=>e.jsx(V,{children:e.jsx("div",{className:"pb-10",children:e.jsx("div",{className:`relative rounded-[29.44px] overflow-hidden w-[300px] h-[500px] transition-all duration-300 ${i===g?"scale-100 opacity-100":"scale-90 opacity-50"}`,style:{boxShadow:"6.9px 7.77px 20.2px 0px #0000004D"},children:e.jsx("img",{src:o.image,alt:`Testimonial ${i+1}`,className:"w-full h-full object-cover"})})})},i))}),e.jsx("div",{className:"absolute top-1/2 left-[-40px] transform -translate-y-1/2 custom-prev cursor-pointer",children:e.jsx("img",{src:"/assets/img/swiper/right.png",className:"rotate-180 brightness-0 grayscale invert"})}),e.jsx("div",{className:"absolute top-1/2 right-[-40px] transform -translate-y-1/2 custom-next cursor-pointer",children:e.jsx("img",{src:"/assets/img/swiper/right.png",className:"brightness-0 grayscale invert"})}),e.jsx("div",{className:"flex justify-center gap-2 mt-2",children:F.map((o,i)=>e.jsx("button",{className:`w-[10.5px] h-[10.5px] rounded-full transition-all duration-300 ${i===g?"bg-white opacity-100":"bg-white opacity-20"}`},i))})]}),e.jsx("div",{className:"block lg:hidden w-max mx-auto mt-6",children:e.jsxs("div",{className:"flex gap-2 sm:gap-4",children:[e.jsx("div",{className:"flex flex-col gap-2",children:F.map((o,i)=>e.jsx("div",{className:"cursor-pointer w-[70px] h-[70px] sm:w-[115px] sm:h-[128px] rounded-lg overflow-hidden",onClick:()=>document.getElementById("mainImage").src=o.image,children:e.jsx("img",{src:o.image,alt:`Thumbnail ${i+1}`,className:"w-full h-full object-cover"})},i))}),e.jsx("div",{className:"",children:e.jsx("div",{className:"w-[250px] sm:w-[386px] sm:h-[680px] rounded-2xl overflow-hidden bg-white shadow-md",children:e.jsx("img",{id:"mainImage",src:F[0].image,alt:"Main Image",className:"w-full h-full object-cover"})})})]})})]})})},ne=()=>(v.useState(1),v.useState("purple"),v.useState("Talla A"),e.jsxs("section",{className:"py-10 px-[5%] mx-auto font-font-general bg-white",children:[e.jsx("h2",{className:"lg:hidden text-[26.3px] leading-[27.31px]  md:text-[46.3px]  md:leading-[47.31px] font-bold text-[#212529]  text-center flex gap-2 items-center justify-center",children:"¿Aún no estás segura?"}),e.jsx("p",{className:"lg:hidden md:text-[28.01px] mt-2 md:mt-4 text-center md:leading-[34.77px] text-[#333333]  ",children:"Prueba con el Disco Descartable"}),e.jsxs("div",{className:"mx-auto flex flex-col lg:flex-row justify-center items-center my-4 gap-8",children:[e.jsx("div",{className:"md:w-[562px] md:h-[562px] lg:w-[500.81px] lg:h-[500.81px]  2xl:w-[620.81px] 2xl:h-[620.81px] overflow-hidden md:order-none lg:order-1",children:e.jsx("img",{src:"https://i.ibb.co/fYP8Ttk7/image.png",alt:"wePack Product",className:"md:w-[562px] md:h-[562px] lg:w-[500.81px] lg:h-[500.81px]  2xl:w-[620.81px] 2xl:h-[620.81px] object-cover rounded-lg",loading:"lazy"})}),e.jsxs("div",{className:"md:w-[562px] lg:h-[562px] lg:w-[350px] 2xl:w-[475px] text-[#333333] lg:flex lg:flex-col lg:justify-center",children:[e.jsx("h3",{className:"hidden lg:block md:text-[44.38px] md:leading-[45.78px] 2xl:text-[54.38px] 2xl:leading-[58.78px] font-bold",children:"¿Aún no estás segura?"}),e.jsxs("p",{className:"hidden lg:block md:text-[20px] 2xl:text-[29px] md:leading-[30px] 2xl:leading-[36px] mt-2 2xl:mt-4 ",children:["Prueba con el Disco",e.jsx("br",{}),"Menstrual Descartable"]}),e.jsxs("p",{className:"sm:text-[15.49px] xl:text-[11px] 2xl:text-[14.05px] lg:my-3 leading-relaxed ",children:[e.jsx("img",{src:"/assets/img/emojis/blossom.png",className:"h-[15.05px] inline-flex"})," ","Recipiente menstrual con el doble de capacidad que una copa, ideal para probar si se acomoda a ti antes de comprar un Disco menstrual ¡Dura 1 solo ciclo!",e.jsx("img",{src:"/assets/img/emojis/crescent-moon.png",className:"h-[15.05px] inline-flex"}),e.jsx("img",{src:"/assets/img/emojis/sparkling-heart.png",className:"h-[15.05px] inline-flex"})]}),e.jsx("div",{className:"hidden lg:flex md:w-[158.43px] 2xl:w-[155px] md:h-[20px] 2xl:h-[25px] bg-[#212529] text-white rounded-[5.44px] my-4  items-center justify-center",children:e.jsxs("p",{className:"w-[158.43px]   md:h-[25.55px]  bg-[#212529]  text-white rounded-[5.44px] my-4 flex items-center justify-center md:text-[10.88px]  leading-[21.75px]",children:[e.jsx("img",{src:"/assets/img/emojis/fire.png",className:"h-[11.88px] inline-flex mr-2"})," ",e.jsx("span",{className:"font-bold md:text-[10.88px]",children:"AHORRA"})," ","S/ 45.00"," ",e.jsx("img",{src:"/assets/img/emojis/fire.png",className:"h-[11.88px] inline-flex ml-2"})]})}),e.jsx("p",{className:"hidden  lg:block md:text-[39.33px] 2xl:text-[49.33px] md:leading-[52.31px] 2xl:leading-[62.31px] tracking-[-0.01em] font-bold text-[#FC58BE]",children:"S/ 39.90"}),e.jsx("p",{className:"hidden lg:block md:text-[20.84px] 2xl:text-[24.84px] leading-[31.37px] text-[#B4B4B4]",children:e.jsx("del",{children:"Antes S/ 59.90"})}),e.jsxs("button",{className:"hidden lg:flex mt-4 relative w-full md:h-[35.88px] 2xl:h-[39.88px] md:text-[10.59px]  2xl:text-[13.59px] leading-[13.59px] bg-[#FC58BE] text-white  rounded-[2.72px] border-[1.81px] border-[#FC58BE]   items-center justify-center",children:[e.jsx("span",{className:"",children:"Añadir al carrito"}),e.jsx("svg",{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 576 512",className:"fill-white h-3 absolute  top-1/2 -translate-y-1/2  right-16 ",children:e.jsx("path",{d:"M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"})})]}),e.jsxs("div",{className:"lg:hidden  md:w-[562px]  text-[#333333]",children:[e.jsxs("p",{className:"text-[40.42px] gap-2 md:text-[54.38px] mt-2   md:leading-[68.69px] tracking-[-0.01em] font-bold text-[#FC58BE]",children:["S/ 39.90",e.jsx("span",{className:"ml-2 text-[20.39px] md:text-[27.38px]  leading-[34.58px] text-[#B4B4B4] font-normal",children:e.jsx("del",{children:"Antes S/ 59.90"})})]}),e.jsx("div",{className:"flex items-center justify-center gap-4 mt-6",children:e.jsxs("button",{className:"relative w-full md:w-[332px] h-[59px] md:text-[17.02px]  2xl:text-[13.59px] leading-[13.59px] bg-[#FC58BE] text-white  rounded-[6px] border-[1.81px] border-[#FC58BE]  flex items-center gap-4 justify-center",children:[e.jsx("span",{className:"",children:"Añadir al carrito"}),e.jsx("svg",{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 576 512",className:"fill-white h-4  ",children:e.jsx("path",{d:"M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"})})]})})]})]})]})]})),re=({sliders:g,items:s,supplies:o,testimonies:i,popups:u,showSlogan:x=!0})=>{const b=[{id:1,name:"weTotal",description:"Disco + Esterilizador",price:255,discount:179.9,final_price:179.9,image:"https://i.ibb.co/fV6JQ7Bf/e668d950658ae3c60479b23cdc546252.png"},{id:2,name:"wePack",description:"Disco + Esterilizador",price:230,discount:149.9,final_price:149.9,image:"https://i.ibb.co/zyjGBDv/dd77e7ec81f52f1e46c68e0cb7e3db80.png"},{id:3,name:"weDisk",description:"Disco menstrual",price:180,discount:159.9,final_price:159.9,image:"https://i.ibb.co/yFYSFPtJ/35b45868b7de6ab7b4b48f5bf5e380cd.png"},{id:4,name:"weDisk",description:"Disco menstrual",price:180,discount:159.9,final_price:159.9,image:"https://i.ibb.co/yFYSFPtJ/35b45868b7de6ab7b4b48f5bf5e380cd.png"}];return e.jsxs(e.Fragment,{children:[e.jsx(Y,{showSlogan:x,backgroundType:"video",backgroundSrc:"/assets/img/backgrounds/home.mp4",backgroundHeight:"h-[90vh]",children:e.jsx("div",{className:"absolute inset-0 flex items-center justify-center text-center",children:e.jsxs("div",{className:"text-white p-6",children:[e.jsxs("h1",{className:"text-[30.66px] leading-[100%] tracking-[1%] md:text-[58.54px] 2xl:text-[78.54px] md:leading-[60.81px] 2xl:leading-[90.81px] font-bold max-w-4xl ",children:["¡Tener sexo con",e.jsx("br",{})," tu disco es posible!"]}),e.jsx("p",{className:"text-[15.13px] mt-4 md:mt-0 leading-[100%]  md:text-[20.61px] 2xl:text-[24.61px] md:leading-[36.92px]  my-2 tracking-[1%]",children:"Copas y Discos menstruales weFem"}),e.jsx("button",{className:"mt-4 w-[200.19px] h-[45.67px] md:w-[258.19px] md:h-[55.67px] xl:w-[300px]  2xl:w-[371px] xl:h-[70px] 2xl:h-[80px] bg-[#DDEC4C] md:text-[17.15px] xl:text-[20.64px] 2xl:text-[24.64px] hover:brightness-90 transition duration-300  font-semibold  rounded-[13.91px] text-[#5F48B7] tracking-[1%]",children:"¡Realiza el cambio!"})]})})}),e.jsxs("div",{className:"relative z-10",children:[e.jsx(U,{}),e.jsx(se,{}),e.jsx("div",{className:"h-[40px] lg:h-0"}),e.jsxs(Z,{products:b,children:[e.jsxs("h2",{className:"text-xl md:text-3xl 2xl:text-4xl font-bold flex gap-2 md:gap-4 items-start justify-center",children:[e.jsx("img",{src:"/assets/img/emojis/growing-heart.png",className:"h-9"})," ","Preferidos por nosotrxs"," ",e.jsx("img",{src:"/assets/img/emojis/growing-heart.png",className:"h-9"})]}),e.jsx("p",{className:"text-[16.3px] md:text-[19.3px] leading-[19.77px] mt-4",children:"¿Estás listx para el cambio?"})]}),e.jsx(le,{}),e.jsx(ae,{}),e.jsx(K,{}),e.jsx(ie,{}),e.jsx(ne,{}),e.jsx(ee,{}),e.jsx(J,{})]})]})};G((g,s)=>{R(g).render(e.jsx(O,{...s,children:e.jsx(re,{...s})}))});
