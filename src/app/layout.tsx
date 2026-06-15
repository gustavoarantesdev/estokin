import type { Metadata } from "next";
import "@/app/ui/globals.css";
import { inter } from "@/app/ui/fonts";
import { EstokinLogo } from "@/app/ui/estokin-logo";
import { NavigationBar } from "@/app/ui/layout/navigation-bar";

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
      <body className="flex justify-center items-center p-4 h-screen">
        <main className="bg-slate-50 shadow-lg p-4 w-full sm:max-w-lg h-screen">
          {/* Header */}
          <div className="relative flex flex-col bg-white shadow-md border border-gray-300 rounded-xl h-full">
            <div className="shrink-0">
              <EstokinLogo />
              <hr className="text-slate-300"></hr>
            </div>

            {/* Content */}
            <div className="flex-1 p-4 pb-28 overflow-auto scroll-smooth">
              {children}
            </div>

            {/* Navigation bar */}
            <NavigationBar />
          </div>
        </main>
      </body>
    </html>
  );
}
