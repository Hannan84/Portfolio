<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Dashboard Overview') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            <!-- Stats Row -->
            <div class="grid grid-cols-1 gap-6">
                <!-- Projects Stat Card -->
                <div class="bg-portfolio-card rounded-2xl shadow-xl border border-white/5 p-6 flex items-center justify-between transition-transform duration-300 hover:scale-[1.01]">
                    <div>
                        <p class="text-sm font-medium text-portfolio-muted mb-1 uppercase tracking-wider">Total Projects</p>
                        <h3 class="text-3xl font-bold text-white">{{ $getProjects->count() }}</h3>
                    </div>
                    <div class="w-16 h-16 rounded-full bg-blue-500/10 flex items-center justify-center text-blue-400">
                        <i class="fa-solid fa-briefcase text-2xl"></i>
                    </div>
                </div>
            </div>

            <!-- Tables Row -->
            <div class="grid grid-cols-1 gap-8">
                <!-- Projects Table -->
                <div class="bg-portfolio-card rounded-2xl shadow-xl border border-white/5 overflow-hidden flex flex-col">
                    <div class="px-6 py-5 border-b border-white/5 flex justify-between items-center bg-white/[0.02]">
                        <h3 class="text-lg font-semibold text-white"><i class="fa-solid fa-briefcase text-blue-400 mr-2"></i> Recent Projects</h3>
                        <a href="{{ route('project.index') }}" class="text-sm text-blue-400 hover:text-white transition-colors">View All &rarr;</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left">
                            <thead class="text-xs text-portfolio-muted uppercase bg-black/20">
                                <tr>
                                    <th scope="col" class="px-6 py-4 font-medium">Project</th>
                                    <th scope="col" class="px-6 py-4 font-medium text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-white/5">
                                @forelse($getProjects->take(5) as $project)
                                    <tr class="hover:bg-white/[0.02] transition-colors">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center space-x-4">
                                                @if($project->image)
                                                    <img src="{{ asset('storage/' . $project->image) }}" class="w-10 h-10 rounded-md object-cover border border-white/10" alt="{{ $project->name }}">
                                                @else
                                                    <div class="w-10 h-10 rounded-md bg-white/5 flex items-center justify-center text-portfolio-muted"><i class="fa-solid fa-image"></i></div>
                                                @endif
                                                <div class="font-medium text-white">{{ $project->name }}</div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-right space-x-2">
                                            <a href="{{ route('project.edit', $project->id) }}" class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-white/5 text-portfolio-muted hover:bg-blue-500/20 hover:text-blue-400 transition-colors">
                                                <i class="fa-solid fa-pen text-xs"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2" class="px-6 py-12 text-center">
                                            <div class="flex flex-col items-center justify-center text-portfolio-muted">
                                                <i class="fa-solid fa-briefcase text-4xl mb-3 opacity-20"></i>
                                                <p>No projects added yet.</p>
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
    </div>
</x-app-layout>
