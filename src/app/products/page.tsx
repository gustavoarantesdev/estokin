import { Pencil } from "lucide-react";
import { PageTitle } from "../ui/layout/page-title";

export default function Page() {
  return (
    <>
      <PageTitle title="Produtos" />

      <div className="mt-4 flex flex-col rounded-xl border border-slate-300">
        <div className="flex justify-between rounded-t-xl bg-slate-100 pt-3 pr-4 pb-3 pl-4 font-medium text-slate-600">
          <p>Título</p>
          <Pencil />
        </div>

        <div>
          <table className="w-full">
            <tr className="border-t border-slate-300">
              <td className="pt-2 pb-2 pl-4 text-slate-500">Produto</td>
              <td className="pt-2 pr-4 pb-2">Exemplo</td>
            </tr>
            <tr className="border-t border-slate-300">
              <td className="pt-2 pb-2 pl-4 text-slate-500">Quantidade</td>
              <td className="pt-2 pr-4 pb-2">Exemplo</td>
            </tr>
            <tr className="border-t border-slate-300">
              <td className="pt-2 pb-2 pl-4 text-slate-500">Preço de venda</td>
              <td className="pt-2 pr-4 pb-2">Exemplo</td>
            </tr>
            <tr className="border-t border-slate-300">
              <td className="pt-2 pb-2 pl-4 text-slate-500">Status</td>
              <td className="pt-2 pr-4 pb-2">Exemplo</td>
            </tr>
          </table>
        </div>
      </div>
    </>
  );
}
