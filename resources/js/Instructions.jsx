import React from "react";
import { createRoot } from "react-dom/client";
import Base from "./Components/Tailwind/Base";
import CreateReactScript from "./Utils/CreateReactScript";

import Header from "./components/Tailwind/Header";
import FeaturesSection from "./components/Tailwind/Welcome/FeaturesSection";
import BenefitsSection from "./components/Tailwind/Welcome/BenefitsSection";
import ProductCarousel from "./components/Tailwind/Products/ProductCarousel";
import QuizSection from "./components/Tailwind/Welcome/QuizSection";
import TopSaleSection from "./components/Tailwind/Welcome/TopSaleSection";
import GuaranteeSection from "./components/Tailwind/Welcome/GuaranteeSection";
import WeLoversSection from "./components/Tailwind/Welcome/WeLoversSections";
import NotSureSection from "./components/Tailwind/Welcome/NotSureSection";
import InstagramSection from "./components/Tailwind/Welcome/InstagramSection";
import Footer from "./components/Tailwind/Footer";
import ProductFilter from "./components/Tailwind/Products/ProductFilter";
import WeCupSection from "./components/Tailwind/Instructions/WeCupSection";
import WeDiskSection from "./components/Tailwind/Instructions/WeDiskSection";
import TestProduct from "./components/Tailwind/Instructions/TestProduct";

const Instructions = ({
    sliders,
    items,
    supplies,
    testimonies,
    popups,
    showSlogan = true,
}) => {
    const tipoSlider = "vua";
    const products = [
        {
            id: 1,
            name: "weTotal",
            description: "Disco + Esterilizador",

            price: 255,
            discount: 179.9,
            final_price: 179.9,
            image: "https://i.ibb.co/fV6JQ7Bf/e668d950658ae3c60479b23cdc546252.png",
        },
        {
            id: 2,
            name: "wePack",
            description: "Disco + Esterilizador",

            price: 230,
            discount: 149.9,
            final_price: 149.9,
            image: "https://i.ibb.co/zyjGBDv/dd77e7ec81f52f1e46c68e0cb7e3db80.png",
        },
        {
            id: 3,
            name: "weDisk",
            description: "Disco mestrual",

            price: 180,
            discount: 159.9,
            final_price: 159.9,
            image: "https://i.ibb.co/yFYSFPtJ/35b45868b7de6ab7b4b48f5bf5e380cd.png ",
        },
        {
            id: 4,
            name: "weDisk",
            description: "Disco mestrual",

            price: 180,
            discount: 159.9,
            final_price: 159.9,
            image: "https://i.ibb.co/yFYSFPtJ/35b45868b7de6ab7b4b48f5bf5e380cd.png ",
        },
    ];
    return (
        <>
            <Header
                showSlogan={showSlogan}
                backgroundType="video"
                backgroundSrc="/assets/img/backgrounds/instructions.mp4"
                backgroundHeight="h-[400px] lg:h-[400px] 2xl:h-[600px]"
                backgroundPosition="object-center"
            >
                <div className="absolute inset-0 flex items-center lg:items-end justify-center text-center">
                    <div className="text-white text-center p-6">
                        <h1 className="text-[45.08px]  md:text-[65.08px]  lg:text-[58.54px] 2xl:text-[78.54px]  md:leading-[90.81px]  2xl:leading-[117.81px] font-bold max-w-4xl text-center tracking-[0.01em]">
                            ¿Cómo usar?
                        </h1>
                        <p className="text-[9.61px] md:text-[18.61px] lg:text-[20.61px] 2xl:text-[24.61px] md:leading-[36.92px]  my-2 tracking-[0.01em]">
                            Nuestra prioridad es promover la educación y
                            libertad menstrual, por
                            <br />
                            eso{" "}
                            <strong className="text-[#DDEC4C]">
                                aquí te enseñamos más sobre cómo usar tus copas
                                y discos
                            </strong>
                        </p>
                    </div>
                </div>
            </Header>
            <div className="relative z-10">
                <WeCupSection />
                <WeDiskSection />

                <ProductCarousel products={products}>
                    <h2 className="text-3xl 2xl:text-4xl font-bold flex gap-4 items-start justify-center">
                        ¿Te sientes lista? Compra aquí{" "}
                    </h2>
                </ProductCarousel>

                <div
                    className="py-16 lg:py-12 text-white lg:h-[300.68px] 2xl:h-[349.68px] flex items-center justify-center font-poppins"
                    style={{
                        background:
                            "linear-gradient(90deg, rgba(128,113,182,1) 0%, rgba(192,175,225,1) 100%)",
                    }}
                >
                    <p className="px-[5%] lg:max-w-5xl 2xl:max-w-7xl lg:px-0 mx-auto md:text-[25.38px] md:leading-[29.67px] lg:text-[20.45px] 2xl:text-[26.45px] lg:leading-[32.67px]">
                        weFem es una de las marcas más confiables en la
                        categoría de cuidado menstrual reutilizable en el Perú,
                        innovamos con la misma integridad con la que comenzamos
                        hace más de 4 años.
                        <br />
                        <strong>
                            {" "}
                            ¿Listo para transformar tu período para siempre?
                            Elevamos tu confianza con productos creados
                            conscientemente y hechos para tu cuerpo y nuestro
                            planeta.
                        </strong>
                    </p>
                </div>
                <TestProduct />
                <Footer />
            </div>
        </>
    );
};

CreateReactScript((el, properties) => {
    createRoot(el).render(
        <Base {...properties}>
            <Instructions {...properties} />
        </Base>
    );
});
