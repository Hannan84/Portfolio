@props(['projects' => []])

<section id="work" class="py-20">
    <div class="container mx-auto px-6 animate-on-scroll">
        <!-- Section Header -->
        <div class="mb-12">
            <h2 class="text-3xl font-bold text-white lg:text-4xl font-outfit">
                Featured Projects
            </h2>
            <div class="w-20 h-1 bg-portfolio-accent mt-4 rounded-full"></div>
        </div>
        
        <!-- Project Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <x-frontend.project :projects="$projects" />
        </div>
    </div>
</section>
