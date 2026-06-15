import type { Metadata } from "next";
import "@/app/ui/globals.css";
import { inter } from "@/app/ui/fonts";

export const metadata: Metadata = {
  title: "Estokin",
  description: "Gestão de pequenas lanchonetes",
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="pt-BR" className={`${inter.className} h-full antialiased`}>
      <body className="">{children}</body>
    </html>
  );
}
