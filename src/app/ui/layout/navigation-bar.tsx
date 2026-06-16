"use client";

import clsx from "clsx";
import { Home, FileBox, Plus, PackageSearch, Menu } from "lucide-react";
import Link from "next/link";
import { usePathname } from "next/navigation";
import { useState } from "react";

export function NavigationBar() {
  const pathname = usePathname();
  const [isOpen, setIsOpen] = useState(false);
  return (
    <nav className="absolute bottom-0 z-50 w-full rounded-br-xl rounded-bl-xl border-t border-slate-300 bg-white">
      <ul className="mx-4 flex h-20 items-center justify-between space-x-3 md:space-x-4 lg:space-x-6">
        <li>
          <Link
            href={"/dashboard"}
            className={clsx(
              "my-transition flex flex-col items-center justify-center p-2 text-sm hover:text-purple-500",
              pathname === "/dashboard" ? "text-purple-500" : "text-slate-500",
            )}
          >
            <Home />
          </Link>
        </li>
        <li>
          <Link
            href={"/stock"}
            className={clsx(
              "my-transition flex flex-col items-center justify-center p-2 text-sm hover:text-purple-500",
              pathname === "/stocks" ? "text-purple-500" : "text-slate-500",
            )}
          >
            <FileBox />
          </Link>
        </li>

        <li className="relative flex items-center justify-center">
          <button
            onClick={() => setIsOpen((prev) => !prev)}
            className="my-transition cursor-pointer touch-manipulation rounded-full bg-purple-100 p-4 text-purple-500 select-none hover:bg-purple-400 hover:text-white active:bg-purple-500"
          >
            <Plus className="pointer-events-none" />
          </button>

          {isOpen && (
            <div className="absolute bottom-full left-1/2 z-50 mb-5 w-64 -translate-x-1/2 rounded-xl border border-slate-300 bg-slate-50 p-4">
              <ul>
                <li className="space-y-3">
                  <p className="text-sm font-medium text-slate-600">Produto</p>
                  <Link
                    href={"/products/create"}
                    className="my-transition block w-full cursor-pointer rounded-xl border border-slate-300 bg-slate-100 p-2 text-center text-slate-600 hover:border-purple-300 hover:bg-purple-100 hover:text-purple-600 active:bg-purple-400 active:text-white"
                  >
                    Cadastrar
                  </Link>
                </li>
                <hr className="my-3 text-slate-300" />
                <li className="space-y-3">
                  <p className="text-sm font-medium text-slate-600">Estoque</p>
                  <Link
                    href={"/stocks/insert"}
                    className="my-transition block w-full cursor-pointer rounded-xl border border-green-300 bg-green-100 p-2 text-center text-green-600 hover:border-green-300 hover:bg-green-200 hover:text-green-600 active:bg-green-400 active:text-white"
                  >
                    Entrada
                  </Link>
                  <Link
                    href={"/stocks/output"}
                    className="my-transition block w-full cursor-pointer rounded-xl border border-red-300 bg-red-100 p-2 text-center text-red-600 hover:border-red-300 hover:bg-red-200 hover:text-red-600 active:bg-red-400 active:text-white"
                  >
                    Saída
                  </Link>
                </li>
              </ul>
            </div>
          )}
        </li>

        <li>
          <Link
            href={"/products"}
            className={clsx(
              "my-transition flex flex-col items-center justify-center p-2 text-sm hover:text-purple-500",
              pathname === "/products" ? "text-purple-500" : "text-slate-500",
            )}
          >
            <PackageSearch />
          </Link>
        </li>

        <li>
          <Link
            href={"/menu"}
            className={clsx(
              "my-transition flex flex-col items-center justify-center p-2 text-sm hover:text-purple-500",
              pathname === "/products" ? "text-purple-500" : "text-slate-500",
            )}
          >
            <Menu />
          </Link>
        </li>
      </ul>
    </nav>
  );
}
