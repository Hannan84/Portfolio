@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-white/20 focus:border-portfolio-accent focus:ring-1 focus:ring-portfolio-accent transition-colors']) }}>
