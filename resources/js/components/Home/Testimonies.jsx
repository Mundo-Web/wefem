'use client'

import React, { useState } from "react"

const TestimonyImage = ({ image, aspectRatio, className, onClick, isActive }) => (
  <div
    className={`relative flex ${className} cursor-pointer transition-transform duration-300 ${isActive ? 'scale-110' : 'hover:scale-105'}`}
    onClick={onClick}
  >
    <img
      src={image}
      alt="testimony"
      className="object-cover object-center rounded-full"
      style={{ aspectRatio }}
    />
  </div>
)

const testimonies = [
  {
    id: 1,
    content: "Nunc dapibus hendrerit neque, tempor consequat nulla malesuada quis. Suspendisse pretium pharetra mi, a porttitor tellus varius vitae.",
    name: "Alejandra Neyra",
    location: "Lima - Perú",
    image: "https://cdn.builder.io/api/v1/image/assets/TEMP/08dd36ede6e779ba0fa3354ea2dbdbde96e19c583251e93923393cf62cf4293c?placeholderIfAbsent=true&apiKey=5cee531c8862493aa6f0e0854aa64731"
  },
  {
    id: 2,
    content: "Vivamus auctor, magna in feugiat condimentum, odio nisi faucibus nunc, eu tincidunt nulla nunc a dolor. Sed euismod, nunc ut aliquam tincidunt.",
    name: "Carlos Rodríguez",
    location: "Bogotá - Colombia",
    image: "https://cdn.builder.io/api/v1/image/assets/TEMP/02ace234f9a6f645de29ed2cae12a6b580a053c63d28a5a4a295c18779d67b6e?placeholderIfAbsent=true&apiKey=5cee531c8862493aa6f0e0854aa64731"
  },
  {
    id: 3,
    content: "Fusce vehicula dolor arcu, sit amet blandit dolor mollis nec. Donec viverra eleifend lacus, vitae ullamcorper metus. Sed sollicitudin ipsum quis nunc sollicitudin ultrices.",
    name: "María Gómez",
    location: "Buenos Aires - Argentina",
    image: "https://cdn.builder.io/api/v1/image/assets/TEMP/0bc41c3afc761ff00a5050feba2f2a6263a1f7cf2c1dd8951a98411edea641f9?placeholderIfAbsent=true&apiKey=5cee531c8862493aa6f0e0854aa64731"
  }
]

export default function Testimonies() {
  const [currentTestimony, setCurrentTestimony] = useState(testimonies[0])

  return (
    <section className="grid md:grid-cols-5 gap-8 bg-amber-400">
      <div className="col-span-2 w-full flex items-center justify-center">
        <div className="relative flex grow md:justify-start justify-center">
          <img
            src={'https://cdn.builder.io/api/v1/image/assets/TEMP/56c54c29ec1910aadaef0eb4659f772f18ec26150c604d776e293cbeb6d0d73a?placeholderIfAbsent=true&apiKey=5cee531c8862493aa6f0e0854aa64731'}
            alt="testimony"
            className="object-contain object-center w-full max-w-md"
            style={{ aspectRatio: 1.125 }}
          />
        </div>
      </div>

      <div className="col-span-3 p-[5%] w-full flex flex-col items-center">
        <div className="flex flex-col justify-center items-center max-w-full text-center md:text-left">
          <div className="text-2xl font-semibold tracking-tight leading-snug text-gray-900">
            Lo que dicen nuestros alumnos
          </div>
          <div className="mt-2 text-sm leading-5 text-center md:text-left text-gray-700">
            Sed condimentum leo lacus, in maximus dui pulvinar vel. Curabitur
            est leo, ac, feugiat commodo orci. Phasellus sed sapien urna.
          </div>
        </div>

        <div className="self-stretch mt-8 text-4xl font-medium tracking-tighter leading-10 text-center text-pink-600">
          {currentTestimony.content}
        </div>

        <div className="flex flex-col mt-8 w-64 max-w-full items-center md:items-start">
          <div className="text-base font-semibold leading-6 text-center text-gray-900">
            <span className="text-pink-600">{currentTestimony.name},</span>{" "}
            <span>{currentTestimony.location}</span>
          </div>

          <div className="flex gap-8 items-center mt-16 max-md:mt-10">
            {testimonies.map((testimony) => (
              <TestimonyImage
                key={testimony.id}
                image={testimony.image}
                aspectRatio={1}
                className={`w-[${testimony.id === currentTestimony.id ? '72px' : '60px'}]`}
                onClick={() => setCurrentTestimony(testimony)}
                isActive={testimony.id === currentTestimony.id}
              />
            ))}
          </div>
        </div>
      </div>
    </section>
  )
}