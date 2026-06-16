"use client";

import clsx from "clsx";
import { Home, FileBox, Plus, PackageSearch, Menu } from "lucide-react";
import Link from "next/link";
import { usePathname } from "next/navigation";

export function NavigationBar() {
  const pathname = usePathname();
  return (
    <nav className="absolute bottom-0 z-50 w-full rounded-br-xl rounded-bl-xl border-t border-slate-300 bg-white">
      <ul className="flex h-20 items-center justify-between mx-4 space-x-3 md:space-x-4 lg:space-x-6">
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
          <Link
            href={"/menu"}
            className="my-transition cursor-pointer rounded-full bg-purple-100 p-4 text-purple-500 hover:bg-purple-400 hover:text-white active:bg-purple-500"
          >
            <Plus />
          </Link>
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
