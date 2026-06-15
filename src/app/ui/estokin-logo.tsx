import { Package } from "lucide-react";

export function EstokinLogo() {
  return (
    <div className="flex justify-center items-center gap-x-2 w-full h-16 text-purple-900">
      <Package size={32} />
      <p className="font-semibold text-2xl">Estokin</p>
    </div>
  );
}
