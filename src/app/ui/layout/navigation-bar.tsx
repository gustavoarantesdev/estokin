import { Home } from "lucide-react";
import Link from "next/link";

export function NavigationBar() {
  return (
    <nav className="bottom-0 z-50 absolute bg-white border-slate-300 border-t rounded-bl-xl rounded-br-xl w-full">
      <ul className="flex justify-center items-center space-x-3 md:space-x-4 lg:space-x-6 h-20">
        <li>
          <Link href={"/dashboard"}>
            <Home />
          </Link>
        </li>
      </ul>
    </nav>
  );
}
