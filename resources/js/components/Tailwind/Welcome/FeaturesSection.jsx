const FeaturesSection = () => {
    return (
        <section
            className={`bg-[#EFE5FF]  overflow-hidden ${
                location.pathname == "/"
                    ? "md:pt-10 md:pb-4 2xl:pt-8 "
                    : "md:py-8"
            }`}
        >
            <div className="px-[5%] mx-auto relative">
                <div className="grid  my-6  sm:my-0 grid-cols-2 gap-4 sm:gap-8 sm:max-w-[608px] lg:flex w-full lg:max-w-[69rem] 2xl:max-w-7xl mx-auto md:gap-4 lg:gap-14 whitespace-nowrap transition-none">
                    <div className="flex items-center gap-3 justify-start w-auto">
                        <div className="relative z-10 w-3/12">
                            <img
                                src="/assets/img/highlights/truck.png"
                                alt="Envíos a todo el Perú"
                                className="w-full h-auto object-cover"
                            />
                        </div>
                        <div className="w-9/12">
                            <h3 className="text-[12.33px]  sm:text-[15.33px] lg:text-[18.4px] font-bold leading-[20.88px] w-full text-[#212529]">
                                Envíos a todo el Perú
                            </h3>
                            <p className=" text-[9.3px]  md:text-[12.3px] 2xl:text-[15.33px] leading-[18.42px] break-words whitespace-normal text-[#444444]">
                                Recibe tus productos <br /> hasta en 24 horas.
                            </p>
                        </div>
                    </div>

                    <div className="flex items-center gap-3 justify-start w-auto">
                        <div className="relative z-10 w-3/12">
                            <img
                                src="/assets/img/highlights/clock.png"
                                alt="Protege hasta 12 horas"
                                className="w-full h-auto object-cover"
                            />
                        </div>
                        <div className="w-9/12">
                            <h3 className="text-[11.33px]  sm:text-[15.33px] lg:text-[18.4px] font-bold leading-[20.88px] w-full text-[#212529]">
                                Protege hasta 12 horas
                            </h3>
                            <p className=" text-[9.3px]  md:text-[12.3px] 2xl:text-[15.33px] leading-[18.42px] break-words whitespace-normal text-[#444444]">
                                Siéntete más segura de <br /> día y de noche.
                            </p>
                        </div>
                    </div>

                    <div className="flex items-center gap-3 justify-start w-auto">
                        <div className="relative z-10 w-2/12   sm:w-3/12 lg:w-2/12 ">
                            <img
                                src="/assets/img/highlights/gota.png"
                                alt="Hipoalergénica"
                                className="w-full h-auto object-cover"
                            />
                        </div>
                        <div className="w-9/12 lg:w-10/12">
                            <h3 className="text-[12.33px]  sm:text-[15.33px] lg:text-[18.4px] font-bold leading-[20.88px] w-full text-[#212529]">
                                Hipoalergénica
                            </h3>
                            <p className=" text-[7.8px]  md:text-[12.3px] lg:text-[11.5px] 2xl:text-[14.33px] leading-[18.42px] break-words whitespace-normal text-[#444444]">
                                Suaves para la piel y reducen <br /> el riesgo
                                de irritación o alergias.
                            </p>
                        </div>
                    </div>

                    <div className="flex items-center gap-3 justify-start w-auto">
                        <div className="relative z-10 w-2/12 md:w-3/12">
                            <img
                                src="/assets/img/highlights/heart.png"
                                alt="Libre de BPA"
                                className="w-full h-auto object-cover"
                            />
                        </div>
                        <div className="w-9/12">
                            <h3 className="text-[12.33px]  sm:text-[15.33px] lg:text-[18.4px] font-bold leading-[20.88px] w-full text-[#212529]">
                                Libre de BPA
                            </h3>
                            <p className="text-[9.3px]  md:text-[12.3px] 2xl:text-[15.33px] leading-[18.42px] break-words whitespace-normal text-[#444444]">
                                Silicona certificada <br /> por la FDA y
                                DIGEMID.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
};

export default FeaturesSection;
