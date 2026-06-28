@props(['projects' => []])

@forelse($projects as $project)
<div class="group relative overflow-hidden rounded-xl border border-white/5 bg-portfolio-card transition-all duration-500 hover:border-portfolio-accent/30 hover:-translate-y-2 hover:shadow-2xl hover:shadow-portfolio-accent/5 flex flex-col">
    <!-- Project Image -->
    <div class="relative h-48 overflow-hidden shrink-0">
        @if($project->image)
            <img 
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" 
                src="{{ asset('storage/' . $project->image) }}" 
                alt="{{ $project->name }}"
            >
        @else
            <div class="w-full h-full bg-white/5 flex items-center justify-center text-portfolio-muted transition-transform duration-500 group-hover:scale-110">
                <i class="fa-solid fa-image text-3xl"></i>
            </div>
        @endif
        
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-portfolio-card via-transparent to-transparent opacity-60"></div>
        
        <!-- Hover Overlay with links -->
        <div class="absolute inset-0 bg-portfolio-card/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-3">
            @if($project->project_url)
                <a href="{{ $project->project_url }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 flex items-center justify-center bg-blue-500/20 text-blue-400 border border-blue-500/50 rounded-full hover:bg-blue-500 hover:text-white transition-all duration-300" title="Live Preview">
                    <i class="fa-solid fa-external-link-alt"></i>
                </a>
            @endif
            
            @if($project->github_url)
                <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 flex items-center justify-center bg-white/10 text-white border border-white/20 rounded-full hover:bg-white hover:text-black transition-all duration-300" title="GitHub Repository">
                    <i class="fa-brands fa-github text-lg"></i>
                </a>
            @endif
            
            @if($project->play_store_url)
                <a href="{{ $project->play_store_url }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 flex items-center justify-center bg-green-500/20 text-green-400 border border-green-500/50 rounded-full hover:bg-green-500 hover:text-white transition-all duration-300" title="Play Store">
                    <i class="fa-brands fa-google-play text-sm"></i>
                </a>
            @endif
            
            @if($project->app_store_url)
                <a href="{{ $project->app_store_url }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 flex items-center justify-center bg-blue-400/20 text-blue-300 border border-blue-400/50 rounded-full hover:bg-blue-400 hover:text-white transition-all duration-300" title="App Store">
                    <i class="fa-brands fa-apple text-lg"></i>
                </a>
            @endif
        </div>
    </div>
    
    <!-- Project Info -->
    <div class="p-5 flex flex-col flex-grow">
        <h3 class="text-xl font-semibold text-white font-outfit mb-2 group-hover:text-portfolio-accent transition-colors duration-300">
            {{ $project->name }}
        </h3>
        
        @if($project->description)
            <p class="text-portfolio-muted text-sm mb-4 line-clamp-4">
                {{ $project->description }}
            </p>
        @endif
        
        <!-- Tags -->
        <div class="mt-auto pt-4 flex flex-wrap gap-2">
            @if(!empty($project->tags) && is_array($project->tags))
                @foreach($project->tags as $tag)
                    <span class="inline-block text-xs font-medium text-portfolio-accent bg-portfolio-accent/10 border border-portfolio-accent/20 px-2.5 py-1 rounded-md">
                        {{ $tag }}
                    </span>
                @endforeach
            @elseif(!empty($project->tags) && is_string($project->tags))
                @foreach(json_decode($project->tags, true) ?? [] as $tag)
                    <span class="inline-block text-xs font-medium text-portfolio-accent bg-portfolio-accent/10 border border-portfolio-accent/20 px-2.5 py-1 rounded-md">
                        {{ $tag }}
                    </span>
                @endforeach
            @endif
        </div>
    </div>
</div>
@empty
    <div class="col-span-full text-center py-12">
        <div class="bg-portfolio-card border border-white/5 rounded-xl p-8">
            <svg class="w-12 h-12 text-portfolio-muted mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
            </svg>
            <p class="text-portfolio-muted">No projects yet. Add some from the dashboard!</p>
        </div>
    </div>
@endforelse
