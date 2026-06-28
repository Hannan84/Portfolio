<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-6 py-2.5 bg-portfolio-accent border border-transparent rounded-lg font-bold text-sm text-portfolio-bg tracking-wide hover:bg-portfolio-accent-hover focus:bg-portfolio-accent-hover active:bg-portfolio-accent-hover focus:outline-none focus:ring-2 focus:ring-portfolio-accent focus:ring-offset-2 focus:ring-offset-portfolio-bg transition ease-in-out duration-150 shadow-lg shadow-portfolio-accent/20']) }}>
    {{ $slot }}
</button>
