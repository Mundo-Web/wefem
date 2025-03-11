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

const CatalogProducts = ({
    sliders,
    items,
    supplies,
    testimonies,
    popups,
    showSlogan = true,
}) => {
    const tipoSlider = "vua";

    return (
        <>
            <Header
                showSlogan={showSlogan}
                backgroundType="video"
                backgroundSrc="/assets/img/backgrounds/store.mp4"
                backgroundHeight="h-[60vh]"
            >
                <div className="absolute inset-0 flex items-end justify-center text-center">
                    <div className="text-white p-6">
                        <h1 className="text-[38.54px] leading-[60.81px]  md:text-[58.54px] 2xl:text-[78.54px] lg:leading-[90.81px] 2xl:leading-[117.81px] font-bold max-w-4xl tracking-[0.01em]">
                            Tienda
                        </h1>
                        <p className="md:text-[20.61px] 2xl:text-[24.61px]   my-2 tracking-[0.01em]">
                            Únete a weFem, libera tu ciclo y tu cuerpo.
                        </p>
                    </div>
                </div>
            </Header>
            <div className="relative z-10">
                <FeaturesSection />
                <ProductFilter />
                <GuaranteeSection />

                <Footer />
            </div>
        </>
    );
};

CreateReactScript((el, properties) => {
    createRoot(el).render(
        <Base {...properties}>
            <CatalogProducts {...properties} />
        </Base>
    );
});
