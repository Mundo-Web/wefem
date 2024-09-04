import React from "react"
import Header from "./Header";
import Footer from "./Footer";

const Base = ({ children, summary, session }) => {
  const menuItems = [
    {
      label: 'Inicio',
      ref: '/'
    },
    {
      label: 'Nosotros',
      ref: '/about'
    },
    {
      label: 'Coaches',
      ref: '/coaches'
    },
    {
      label: 'Eventos',
      ref: '/events'
    },
    {
      label: 'Blog',
      ref: '/resources'
    }
  ];
  return <>
    <Header items={menuItems} session={session} />
    <main>
      {children}
    </main>
    <Footer items={menuItems} summary={summary} />
  </>
}

export default Base
