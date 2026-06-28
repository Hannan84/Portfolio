<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Projects') }}
            </h2>
            <a href="{{ route('project.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors inline-flex items-center shadow-lg shadow-blue-500/20">
                <i class="fa-solid fa-plus mr-2"></i> Add Project
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            @if(session('success-u') || session('success') || session('success-s'))
                <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" 
                     x-transition:leave="transition ease-in duration-300"
                     x-transition:leave-start="opacity-100 transform translate-y-0"
                     x-transition:leave-end="opacity-0 transform -translate-y-4"
                     class="bg-portfolio-accent/10 border border-portfolio-accent/20 text-portfolio-accent px-4 py-3 rounded-xl relative flex items-center shadow-lg">
                    <i class="fa-solid fa-check-circle mr-3 text-lg"></i>
                    <span class="block sm:inline font-medium">{{ session('success-u') ?? session('success') ?? session('success-s') ?? 'Updated successfully' }}</span>
                </div>
            @endif

            <div class="bg-portfolio-card rounded-2xl shadow-xl border border-white/5 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead class="text-xs text-portfolio-muted uppercase bg-black/20 border-b border-white/5">
                            <tr>
                                <th scope="col" class="px-6 py-4 font-medium w-16 text-center">ID</th>
                                <th scope="col" class="px-6 py-4 font-medium">Project Info</th>
                                <th scope="col" class="px-6 py-4 font-medium">Tags</th>
                                <th scope="col" class="px-6 py-4 font-medium text-center">Links</th>
                                <th scope="col" class="px-6 py-4 font-medium text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/5">
                            @forelse( $projects as $project)
                                <tr class="hover:bg-white/[0.02] transition-colors group">
                                    <td class="px-6 py-4 text-center text-portfolio-muted font-mono text-xs">
                                        #{{ $project->id }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center space-x-4">
                                            @if($project->image)
                                                <img src="{{ asset('storage/' . $project->image) }}" class="w-12 h-12 rounded-lg object-cover border border-white/10 shadow-sm" alt="{{ $project->name }}">
                                            @else
                                                <div class="w-12 h-12 rounded-lg bg-white/5 flex items-center justify-center text-portfolio-muted shadow-sm">
                                                    <i class="fa-solid fa-image"></i>
                                                </div>
                                            @endif
                                            <div>
                                                <div class="font-medium text-white text-base">{{ $project->name }}</div>
                                                @if($project->description)
                                                    <div class="text-portfolio-muted text-xs mt-1 max-w-xs truncate">{{ $project->description }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-wrap gap-2">
                                            @if($project->tags && is_array($project->tags))
                                                @forelse($project->tags as $tag)
                                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-portfolio-accent/10 text-portfolio-accent border border-portfolio-accent/20">
                                                        {{ $tag }}
                                                    </span>
                                                @empty
                                                    <span class="text-portfolio-muted text-xs italic">No tags</span>
                                                @endforelse
                                            @else
                                                <span class="text-portfolio-muted text-xs italic">No tags</span>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center justify-center space-x-2">
                                            @if($project->project_url)
                                                <a href="{{ $project->project_url }}" target="_blank" class="text-blue-400 hover:text-blue-300 transition-colors inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-400/10 hover:bg-blue-400/20" title="Live Site">
                                                    <i class="fa-solid fa-external-link-alt text-xs"></i>
                                                </a>
                                            @endif
                                            @if($project->github_url)
                                                <a href="{{ $project->github_url }}" target="_blank" class="text-gray-300 hover:text-white transition-colors inline-flex items-center justify-center w-8 h-8 rounded-full bg-white/5 hover:bg-white/20" title="GitHub">
                                                    <i class="fa-brands fa-github text-sm"></i>
                                                </a>
                                            @endif
                                            @if($project->play_store_url)
                                                <a href="{{ $project->play_store_url }}" target="_blank" class="text-green-400 hover:text-green-300 transition-colors inline-flex items-center justify-center w-8 h-8 rounded-full bg-green-400/10 hover:bg-green-400/20" title="Play Store">
                                                    <i class="fa-brands fa-google-play text-sm"></i>
                                                </a>
                                            @endif
                                            @if($project->app_store_url)
                                                <a href="{{ $project->app_store_url }}" target="_blank" class="text-blue-300 hover:text-blue-200 transition-colors inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-300/10 hover:bg-blue-300/20" title="App Store">
                                                    <i class="fa-brands fa-apple text-sm"></i>
                                                </a>
                                            @endif
                                            @if(!$project->project_url && !$project->github_url && !$project->play_store_url && !$project->app_store_url)
                                                <span class="text-portfolio-muted text-xs italic">N/A</span>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end space-x-2">
                                            <a href="{{ route('project.edit', $project->id ) }}" class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-white/5 text-portfolio-muted hover:bg-blue-500/20 hover:text-blue-400 transition-colors shadow-sm" title="Edit">
                                                <i class="fa-solid fa-pen text-xs"></i>
                                            </a>
                                            <form action="{{ route('project.destroy', $project->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this project? This action cannot be undone.')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-white/5 text-portfolio-muted hover:bg-red-500/20 hover:text-red-400 transition-colors shadow-sm" title="Delete">
                                                    <i class="fa-solid fa-trash text-xs"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-16 text-center">
                                        <div class="flex flex-col items-center justify-center">
                                            <div class="w-16 h-16 rounded-full bg-white/5 flex items-center justify-center mb-4 text-portfolio-muted">
                                                <i class="fa-solid fa-folder-open text-2xl"></i>
                                            </div>
                                            <h3 class="text-lg font-medium text-white mb-1">No Projects Found</h3>
                                            <p class="text-portfolio-muted text-sm mb-4">Get started by creating your first project.</p>
                                            <a href="{{ route('project.create') }}" class="text-blue-400 hover:text-blue-300 font-medium text-sm transition-colors">
                                                <i class="fa-solid fa-plus mr-1"></i> Add New Project
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
