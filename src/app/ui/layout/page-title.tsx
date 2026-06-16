type PageTitleProps = {
  title: string;
};

export function PageTitle({ title }: PageTitleProps) {
  return (
    <>
      <h1 className="mb-4 text-xl font-semibold text-slate-700">{title}</h1>
    </>
  );
}
