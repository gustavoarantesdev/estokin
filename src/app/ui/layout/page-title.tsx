type PageTitleProps = {
  title: string;
};

export function PageTitle({ title }: PageTitleProps) {
  return (
    <>
      <h1 className="mb-4 font-semibold text-xl">{title}</h1>
    </>
  );
}
