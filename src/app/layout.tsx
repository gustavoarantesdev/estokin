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
      <body className="flex h-dvh items-center justify-center">
        <main className="h-dvh w-full bg-slate-50 p-2 shadow-lg sm:max-w-lg">
          {/* Header */}
          <div className="relative flex h-full flex-col rounded-xl border border-gray-300 bg-white shadow-md">
            <div className="shrink-0">
              <EstokinLogo />
              <hr className="text-slate-300"></hr>
            </div>

            {/* Content */}
            <div className="flex-1 overflow-auto scroll-smooth p-4 pb-28">
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
